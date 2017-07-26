@extends('layout.master')

@section('content')
    <div id="map-area" class="wpb_row  vc_custom_1495097660523 "  ><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">
                    <script  type="text/javascript" >

                        jQuery(document).ready(function($) {
                            var $ = jQuery.noConflict();

                            (function($) {
                                "use strict";
                                /*------------------
                              GOOGLE MAP
                            --------------------*/
                                function initialize() {
                                    var myOptions = {
                                        zoom: 15,
                                        center: new google.maps.LatLng(48.8290379, 2.3257673000000523), //change the coordinates
                                        mapTypeId: google.maps.MapTypeId.ROADMAP,
                                        scrollwheel: false,
                                        mapTypeControl: false,
                                        zoomControl: false,
                                        streetViewControl: false,
                                        styles: [{
                                            "stylers": [{
                                                "hue": "#ffffff"
                                            }, {
                                                saturation: -110
                                            }, {
                                                gamma: 2
                                            }]
                                        }]
                                    };
                                    var map = new google.maps.Map(document.getElementById("map-area"), myOptions);
                                    var marker = new google.maps.Marker({
                                        map: map,
                                        position: new google.maps.LatLng(48.8290379, 2.3257673000000523) //change the coordinates
                                    });
                                    google.maps.event.addListener(marker, "click", function() {
                                        infowindow.open(map, marker);
                                    });
                                }
                                google.maps.event.addDomListener(window, 'load', initialize);

                            })(jQuery);
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>

    <div id="contact" class="wpb_row  contact-section "  >
        <div class="container">
            <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                        <div class="wpb_raw_code wpb_content_element wpb_raw_html" >
                            <div class="wpb_wrapper">
                                <div class="section-title">
                                    <h2>Co<span>ntact</span></h2>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row wpb_row vc_inner">
                            <div class="wpb_column vc_column_container vc_col-sm-7">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div role="form" class="wpcf7" id="wpcf7-f59-p9-o1" lang="en-US" dir="ltr">
                                            <div class="screen-reader-response"></div>
                                            <form action="{{ url('contact') }}" method="post" class="wpcf7-form" novalidate="novalidate">
                                                {{csrf_field()}}

                                                <div style="display: none;">
                                                    <input type="hidden" name="_wpcf7" value="59" />
                                                    <input type="hidden" name="_wpcf7_version" value="4.7" />
                                                    <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                                    <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f59-p9-o1" />
                                                    <input type="hidden" name="_wpnonce" value="a62e8915f0" />
                                                </div>
                                                <div id="contact-form">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <span class="wpcf7-form-control-wrap your-name">
                                                                <input type="text" name="name" placeholder="Votre Nom" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" />
                                                            </span>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <span class="wpcf7-form-control-wrap your-email"><input type="email" name="email" placeholder="Votre E-mail*" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" />
                                                            </span>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <span class="wpcf7-form-control-wrap your-message"><textarea name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Votre Message*"></textarea></span>
                                                        </div>
                                                        <div class="text-center">
                                                            <input type="submit" value="Envoyer un message" class="wpcf7-form-control wpcf7-submit site-btn btn-pro-line wow fadeInUp" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wpcf7-response-output wpcf7-display-none"></div></form></div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-5"><div class="vc_column-inner "><div class="wpb_wrapper">
                                        <ul class="contact-info">

                                            <li>
                                                <h4><i class="fa fa-map"></i>Location</h4>
                                                <p>3 rue du Moulin Vert, 75014 - PARIS, FRANCE</p>
                                            </li>

                                            <li>
                                                <h4><i class="fa fa-envelope"></i>Email</h4>
                                                <p>benjamin.lefort@gmx.fr</p>
                                                <p>benjamin.lefort@mcs.iseg.fr</p>
                                            </li>

                                            <li>
                                                <h4><i class="fa fa-phone"></i>Téléphone</h4>
                                                <p>+33 6 69 94 43 94</p>
                                            </li>
                                        </ul>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection