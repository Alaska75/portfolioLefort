<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="{{URL::to('/')}}">Benjamin Lefort</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <?php
            if (isset(\Auth::user()->role))
                {
                    $user_role = \Auth::user()->role;
                }
            else
                {
                    $user_role = false;
                }
        ?>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav">
                <li>
                    <a href="{{URL::to('shopping')}}">Goodies Benjamin 2022</a>
                </li>
                <li>
                    <a href="{{URL::to('contact')}}">Contact</a>
                </li>

            </ul>
            @if(Auth::guest())
                <ul class="nav navbar-nav">
                    <li>
                        <a href="{{URL::to('login')}}">login</a>
                    </li>
                    <li>
                        <a href="{{URL::to('register')}}">register</a>
                    </li>
                </ul>
            @else
               <ul class="nav navbar-nav">
                   <li>
                       <a href="{{ url('logout') }}"
                          onclick="event.preventDefault();
         document.getElementById('logout-form').submit();">
                           Logout
                       </a>
                       {{ csrf_field() }}
                       <form id="logout-form"
                             action="{{ url('logout') }}"
                             method="POST"
                             style="display: none;">
                           {{ csrf_field() }}
                       </form>
                       {{ csrf_field() }}
                   </li>
               </ul>

            @if($user_role == true)
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="{{URL::to('admin')}}">Admin</a>
                        </li>
                    </ul>
             @endif
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
                <ul class="nav navbar-nav">
                    <li class="dropdown-menu-left">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <span class="glyphicon glyphicon-shopping-cart"></span> {{$nbr_products}}<span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-cart" role="menu">
                            @if($products != NULL)
                                @foreach($products as $product)
                                    <li>
                                    <span class="item">
                                        <span class="item-left">
                                            <img src="http://lorempixel.com/50/50/" alt="" />
                                            <span class="item-info">
                                                <span>{{$product->name}}</span>
                                                <span>{{$product->price}}€</span>
                                            </span>
                                        </span>
                                        <span class="item-right">

                                        </span>
                                    </span>
                                    </li>
                                @endforeach
                            @else
                            @endif
                                <hr>
                                <span class="item">
                                    <span class="item-info">
                                      <li style="margin-top: -1em; margin-bottom: -0.4em; margin-left: 0.5em;">
                                    <p>
                                        Total: {{$total}}€
                                    </p>
                                </li>
                                    </span>
                                </span>
                            <li class="divider"></li>
                                <a href="{{URL::to('emptyCart')}}">
                                    <span class="item">
                                <span class="item-left">
                                     <span class="item-info">
                                       <span style="margin-left: 2em;">vider panier</span>
                                 </span>
                            </span>
                                 <span class="item-right">
                                     <button class="btn btn-xs btn-danger pull-right" style="margin-right: 2em;">x</button>
                                 </span>
                            </span>
                                </a>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="{{URL::to('cart')}}">View Cart</a>
                            </li>

                        </ul>
                    </li>
                </ul>
            @endif
        </div>

        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
