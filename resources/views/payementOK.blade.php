@extends('layout.master')

@section('content')
    <link rel="stylesheet" href="css/custom.css">

<div class="container-fluid breadcrumbBox text-center">
    <ol class="breadcrumb">
        <li><a href="#">Review</a></li>
        <li ><a href="#">Order</a></li>
        <li class="active"><a href="#">Payment</a></li>
    </ol>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h3 class="text-center">
                Votre paiement est confirmé.
            </h3>
            <div class="row" style="margin-top: 4em;">
                <div class="col-md-6 col-md-offset-3">
                    <a class="btn btn-default center-block" href="{{URL::to('/')}}" role="button">Retour vers l'accueil</a>
                </div>
            </div>
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


<!-- Only used for the demos. Please ignore and remove. -->
<script src="https://cdn.tutorialzine.com/misc/enhance/v2.js" async></script>
@endsection