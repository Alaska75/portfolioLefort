@extends('layout.master')

@section('content')

    <link href="css/shop-homepage.css" rel="stylesheet">

    <div style="background-color: inherit;">
        <div class="container">

            <div class="row">



                <div class="col-md-12">


                    <div class="row carousel-holder">

                        <div class="col-md-12">
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img class="slide-image" src="image/carrou1.jpg" alt="">
                                    </div>
                                    <div class="item">
                                        <img class="slide-image" src="image/carrou2.jpg" alt="">
                                    </div>
                                    <div class="item">
                                        <img class="slide-image" src="image/carrou3.jpg" alt="">
                                    </div>
                                </div>
                                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-sm-4 col-lg-4 col-md-4">
                            <div class="thumbnail">
                                <img src="image/tshirt11.png" width="200px" alt="">
                                <div class="caption">
                                    <h4 class="pull-right">$24.99</h4>
                                    <h4><a href="#">White Edition</a>
                                    </h4>
                                    <a href="{{URL::to('add/white')}}">
                                        <button type="button" class="btn btn-default btn-sm">
                                            <span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4 col-lg-4 col-md-4">
                            <div class="thumbnail">
                                <img src="image/tshirt2.jpg" width="200px" alt="">
                                <div class="caption">
                                    <h4 class="pull-right">$24.99</h4>
                                    <h4><a href="#">Black Edition</a>
                                    </h4>
                                    <p>
                                        <a href="{{URL::to('add/black')}}">
                                            <button type="button" class="btn btn-default btn-sm">
                                                <span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart
                                            </button>
                                        </a>

                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4 col-lg-4 col-md-4">
                            <div class="thumbnail">
                                <img src="image/tshirt3.jpg" width="200px" alt="">
                                <div class="caption">
                                    <h4 class="pull-right">$24.99</h4>
                                    <h4><a href="#">Blue Edition</a>
                                    </h4>
                                    <p>
                                        <a href="{{URL::to('add/blue')}}">
                                            <button type="button" class="btn btn-default btn-sm">
                                                <span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart
                                            </button>
                                        </a>

                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection