@extends('layout.master')

@section('content')
    <link rel="stylesheet" href="css/custom.css">

    <div class="container-fluid breadcrumbBox text-center">
        <ol class="breadcrumb">
            <li><a href="#">Review</a></li>
            <li ><a href="#">Order</a></li>
            <li class="active"><a href="#" >Payment</a></li>
        </ol>
    </div>
    <?php
    $products = session('cart');
    $tests = $products;
    $nbr_products = 0;
    $total = 0;
    foreach ($tests as $test)
    {
        $total = $test->price + $total;
        $nbr_products++;
    }
    ?>
    <div class="container text-center">
        <style>
            .panel-title {display: inline;font-weight: bold;}
            .checkbox.pull-right { margin: 0; }
            .pl-ziro { padding-left: 0px; }
        </style>
        <div class="container-fluid">
            <div class='row'>
                <div class='col-md-4'></div>
                <div class='col-md-4'>
                    <script src='https://js.stripe.com/v2/' type='text/javascript'></script>
                    <form accept-charset="UTF-8" action="{{URL::to('payementOK')}}" class="require-validation"  id="payment-form" method="get">

                        <div class='form-row'>
                            <div class='col-xs-12 form-group required'>
                                <label class='control-label'>Name on Card</label>
                                <input class='form-control' size='4' type='text'>
                            </div>
                        </div>
                        <div class='form-row'>
                            <div class='col-xs-12 form-group card required'>
                                <label class='control-label'>Card Number</label>
                                <input autocomplete='off' class='form-control card-number' size='20' type='text'>
                            </div>
                        </div>
                        <div class='form-row'>
                            <div class='col-xs-4 form-group cvc required'>
                                <label class='control-label'>CVC</label>
                                <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'>
                            </div>
                            <div class='col-xs-4 form-group expiration required'>
                                <label class='control-label'>Expiration</label>
                                <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
                            </div>
                            <div class='col-xs-4 form-group expiration required'>
                                <label class='control-label'> </label>
                                <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>
                            </div>
                        </div>
                        <div class='form-row'>
                            <div class='col-md-12'>
                                <div class='form-control total btn btn-info'>
                                    Total:
                                    <span class='amount'>{{$total}}€</span>
                                </div>
                            </div>
                        </div>
                        <div class='form-row'>
                            <div class='col-md-12 form-group'>
                                <button class='form-control btn btn-primary submit-button' type='submit'>Pay »</button>
                            </div>
                        </div>
                        <div class='form-row'>
                            <div class='col-md-12 error form-group hide'>
                                <div class='alert-danger alert'>
                                    Please correct the errors and try again.
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class='col-md-4'></div>
            </div>
        </div>



    </div>


    <!-- The popover content -->

    <div id="popover" style="display: none">
        <a href="#"><span class="glyphicon glyphicon-pencil"></span></a>
        <a href="#"><span class="glyphicon glyphicon-remove"></span></a>
    </div>

    <!-- JavaScript includes -->

    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="js/customjs.js"></script>

    <script>
        $(function() {
            $('form.require-validation').bind('submit', function(e) {
                var $form         = $(e.target).closest('form'),
                    inputSelector = ['input[type=email]', 'input[type=password]',
                        'input[type=text]', 'input[type=file]',
                        'textarea'].join(', '),
                    $inputs       = $form.find('.required').find(inputSelector),
                    $errorMessage = $form.find('div.error'),
                    valid         = true;

                $errorMessage.addClass('hide');
                $('.has-error').removeClass('has-error');
                $inputs.each(function(i, el) {
                    var $input = $(el);
                    if ($input.val() === '') {
                        $input.parent().addClass('has-error');
                        $errorMessage.removeClass('hide');
                        e.preventDefault(); // cancel on first error
                    }
                });
            });
        });


    </script>
    <!-- Only used for the demos. Please ignore and remove. -->
    <script src="https://cdn.tutorialzine.com/misc/enhance/v2.js" async></script>
@endsection