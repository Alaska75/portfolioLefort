@extends('layout.master')

@section('content')

    <link rel="stylesheet" href="css/custom.css">


    <div class="container-fluid breadcrumbBox text-center" style="margin-top: 3.6em;">
        <ol class="breadcrumb">
            <li><a href="#">Review</a></li>
            <li class="active"><a href="#">Order</a></li>
            <li><a href="#">Payment</a></li>
        </ol>
    </div>

    <div class="container text-center">

        <div class="col-md-5 col-sm-12">
            <div class="bigcart"></div>
            <h1>Panier</h1>
            <?php
            $products = session('cart');
            $tests = $products;
            $nbr_products = 0;
            $total = 0;
            if ($products != NULL)
            {
                foreach ($tests as $test)
                {
                    $total = $test->price + $total;
                    $nbr_products++;
                }
            }
            ?>
            <p>
            @if($products == NULL)
                <div class="row">
                    <div class="col-md-offset-3">

                    </div>
                </div>
            @else
                <p>
                    Vous avez {{$nbr_products}} produits dans votre panier.
                    <br>
                    Pour un total de {{$total}}€.
                </p>
                @endif
                </p>
        </div>

        @if($products == NULL)
        @else
            <div class="col-md-7 col-sm-12 text-left">
                <ul>
                    <li class="row list-inline columnCaptions">
                        <span>ITEM</span>
                        <span>Price</span>
                    </li>
                    @endif
                    @if($products == NULL)
                    @else
                        @foreach($products as $product)
                            <li class="row">
                                <span class="itemName">{{$product->name}}</span>
                                <span class="popbtn"><a class="arrow"></a></span>
                                <span class="price">{{$product->price}}€</span>
                            </li>
                        @endforeach
                    @endif

                    @if($products == NULL)
                    @else
                        <li class="row totals">
                            <span class="itemName">Total:</span>
                            <span class="price">{{$total}}€</span>
                            <span class="order"> <a class="text-center" href="{{URL::to('pay')}}">ORDER</a></span>
                        </li>
                    @endif
                </ul>
            </div>

    </div>
@endsection