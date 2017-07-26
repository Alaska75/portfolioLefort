<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Anam\Phpcart\Cart;
use \App\Order;
use Illuminate\Support\Facades\Redirect;

class ShoppingController extends Controller
{
    function addToCart($id)
    {
        $cart = new Cart();

        $cart->add([
            'id'       => rand(0, 1000),
            'name'     => $id,
            'quantity' => 1,
            'price'    => 25
        ]);
        \Session::put('cart', $cart->items());
        return redirect('shopping');
    }
    function payementOK()
    {
        $cart = new Cart();

        $cart->clear();
        \Session::forget('cart');
        return view('payementOK');
    }
    function getPay()
    {
        return view('pay');
    }


    function getShoppingPage()
    {
        return view('shopping');
    }

    function getCart()
    {
        return view('cart');
    }


    function DownloadCV()
    {
        $file= public_path(). "/CV_LEFORTB.pdf";

        $headers = array(
            'Content-Type: application/pdf',
        );

        return \Response::download($file, 'CV-Benjamin-Lefort.pdf', $headers);
    }

    function getContact()
    {
        return view('contact');
    }

    function emptyCart()
    {
        $cart = new Cart();
        $poulet = $cart->clear();
        \Session::forget('cart');

        return view('shopping');
    }

    function SendMail()
    {
        $infos = request();
        $data = array('email' => $infos->email, 'name' => $infos->name, 'body_message' => $infos->message);
        \Mail::send('mail.GetContact', $data,
            function ($message)
            {
                $message->to("benjamin.lefort@gmx.fr");
                $message->subject('Message de ');
            }
        );
        return redirect('/');
    }

    function postPayementOK()
    {
        $request = Request();

        $order = new Order;
        $cart = new Cart();
        $tmp_string = $request->adresse.'/./'.$request->zip.'/./'.$request->ville.'/./'.$request->pays;
        $tmp_array = explode('/./', $tmp_string);

        $user_id = \Auth::user()->id;
        $price = $cart->getTotal();
        $adresse = json_encode($tmp_array);
        $payement_ok = true;

        try
        {
            $order->user_id = $user_id;
            $order->price = $price;
            $order->address = $adresse;
            $order->payement_ok = $payement_ok;

            $order->save();
        }
        catch (\Exception $e)
        {
            echo $e;
        }
        $poulet = $cart->clear();
        \Session::forget('cart');
        return view('payementOK');

    }

    function admin()
    {
        $orders = Order::all();
        $users  = User::all();
        if ((\Auth::user()->role) == false)
        {
            return Redirect('/');
        }

        return view('admin', compact('orders', 'users'));
    }
}
