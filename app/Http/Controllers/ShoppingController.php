<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Anam\Phpcart\Cart;

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
        $cart->clear();
        return view('shopping');
    }

    function SendMail()
    {
        $infos = request();
        $data = array('email' => $infos->email, 'name' => $infos->name, 'body_message' => $infos->message);
        \Mail::send('mail.GetContact', $data,
            function ($message)
            {
                $message->to("yoahn.l@me.com");
                $message->subject('ceci est un test');
            }
        );
        return redirect('/');
    }
}
