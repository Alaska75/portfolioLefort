@extends('layout.master')

@section('content')
    <div class="btn-toolbar">
        <button class="btn btn-primary">New User</button>
        <button class="btn">Import</button>
        <button class="btn">Export</button>
    </div>
    <div class="well">
        <table class="table">
            <thead>
            <tr>
                <th style="width: 9em;">ID transaction</th>
                <th style="width: 3em;">ID client</th>
                <th style="width: 3em;">Nom</th>
                <th style="width: 15em;">Adresse mail</th>
                <th>Adresse postal</th>
                <th style="width: 2em;">Prix</th>
                <th style="width: 3em;">Paiement confirmé</th>
            </tr>
            </thead>
            <tbody>
            @foreach($orders as $order)
                <tr>
                    <?php
                    $email = NULL;
                    $user_id = NULL;
                    $name;
                    foreach ($users as $user)
                    {
                        if ($user->id == $order->user_id)
                        {
                            $email = $user->email;
                            $user_id = $user->id;
                            $name = $user->name;
                        }
                    }
                    $adresse_tmp = json_decode($order->address);
                    $adresse = implode(' ,', $adresse_tmp);
                    ?>
                    <td>{{$order->id}}</td>
                    <td>{{$user_id}}</td>
                    <td>{{$name}}</td>
                    <td>{{$email}}</td>
                    <td>{{$adresse}}</td>
                    <td>{{$order->price}}€</td>
                    <td>
                        @if($order->payement_ok == true)
                            <i class="fa fa-check" aria-hidden="true"></i>
                        @else
                            <i class="fa fa-times" aria-hidden="true"></i>
                        @endif
                    </td>
                    <td>
                        <a href="user.html"><i class="icon-pencil"></i></a>
                        <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
                    </td>
                </tr>
            @endforeach


            </tbody>
        </table>
    </div>
@endsection
