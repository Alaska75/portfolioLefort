@extends('layout.master')

@section('content')
    <div class="left-bar" style="background-color: #1f1f1f;">
        <div class="logo">
            <h2 style="color: white"><a href="{{URL::to('/')}}">
                    B            </a>
            </h2>
        </div>
        <div class="social">
            <div>
                <a href="https://www.facebook.com/benjamin.lefort.90"><i class="fa fa-facebook poulet"></i></a>
                <a href="https://twitter.com/lefort_b"><i class="fa fa-twitter poulet"></i></a>
                <a href="https://www.linkedin.com/in/benjaminlefort/"><i class="fa fa-linkedin poulet"></i></a>

            </div>


        </div>
        <div class="nav-switch">
            <span class="bar-one"></span>
            <span class="bar-two"></span>
            <span class="bar-three"></span>
        </div>
    </div>
    <!-- ==== Left Bar End ==== -->


    <!-- ==== Nav Menu Start ==== -->
    <nav class="mainmenu">
        <ul id="menu-menu-home-with-scroll" class="menu-list"><li id="menu-item-70" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-70"><a  href="#home">Home</a></li>
            <li id="menu-item-71" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-71"><a  href="#about">About</a></li>
            <li id="menu-item-72" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-72"><a  href="#resume">Resume</a></li>
            <li id="menu-item-73" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-73"><a  href="#portfolio">My Work</a></li>
            <li id="menu-item-74" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-74"><a  href="#blog">Blog</a></li>
            <li id="menu-item-75" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-75"><a  href="#contact">Contact</a></li>
        </ul>

    </nav>
    <div id="home" class="wpb_row  intro-section "  >
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner "><div class="wpb_wrapper">
                    <div class="intro-bg" style="background-image: url(image/bg_landing.jpeg);background-size: cover;">
                    </div>
                    <div id="particles">

                    </div>
                    <div class="intro-inner">
                        <div class="intro-content">
                            <div class="container">
                                <h2>Benjamin Lefort</h2>
                                <h3>Étudiant en 2ème année à <br> ISEG Marketing &amp; Communication</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="about" class="wpb_row  about-section spad "  >
        <div class="container">
            <div class="profile-pic wow wpb_animate_when_almost_visible wpb_fadeInDown fadeInDown wpb_column vc_column_container vc_col-sm-6">
                <div class="vc_column-inner vc_custom_1494672375283">
                    <div class="wpb_wrapper">
                        <div  class="wpb_single_image wpb_content_element vc_align_left">
                            <figure class="wpb_wrapper vc_figure">
                                <div class="vc_single_image-wrapper   vc_box_border_grey">
                                    <img width="444" height="582" src="image/profil.jpg" class="vc_single_image-img attachment-full" alt=""  sizes="(max-width: 544px) 100vw, 544px" />
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wpb_column vc_column_container vc_col-sm-6">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                        <div class="bout-text wow fadeInUp" data-wow-delay="0.4s">
                            <h2>Bonjour,</h2>
                            <p>Je m'appelle <strong>Benjamin Lefort</strong>. Je suis actuellement en deuxième année à l'ISEG Marketing &amp; Communication School. Passionné, curieux et sérieux, les métiers de la communication et du marketing sont une véritable passion pour moi.</p>
                            <!-- Skills -->
                            <div class="skills">
                                <div class="single-progress-item">
                                    <p>Keynote</p>
                                    <div class="progress-bar-style" data-progress="80"></div>
                                </div>
                                <div class="single-progress-item">
                                    <p>Suite Office</p>
                                    <div class="progress-bar-style" data-progress="70"></div>
                                </div>
                                <div class="single-progress-item">
                                    <p>Suite ADOBE</p>
                                    <div class="progress-bar-style" data-progress="50"></div>
                                </div>
                                <div class="single-progress-item">
                                    <p>Web</p>
                                    <div class="progress-bar-style" data-progress="35"></div>
                                </div>
                                <div class="single-progress-item">
                                    <p>Marketing <br> Communication</p>
                                    <div class="progress-bar-style" data-progress="65"></div>
                                </div>
                            </div>
                            <a href="{{URL::to('download')}}" class="site-btn btn-pro xs-mb20">Mon CV <i class="fa fa-download"></i></a>
                            <a href="#contact" class="site-btn ml10 btn-pro-line">Me Contacter</a>
                        </div>


                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div id="resume" class="wpb_row  resume-section spad "  ><div class="container"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">
                        <div class="wpb_raw_code wpb_content_element wpb_raw_html" >
                            <div class="wpb_wrapper">
                                <div class="section-title">
                                    <h2>Re<span>sume</span></h2>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row wpb_row vc_inner"><div class="wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner "><div class="wpb_wrapper">
                                        <ul class="resumes">
                                            <li class="resume-item wow fadeInDown" data-wow-delay="0.2s">
                                                <h3>PRÉSIDENT - ISEG FOOD</h3>
                                                <h5>2017 - Présent</h5>
                                                <p>Président de l'association ISEG FOOD. <br /> Mise en place d'évenement sur le thème de la gastronomie d'ici ou d'ailleurs.</p>
                                            </li>
                                            <li class="resume-item wow fadeInDown" data-wow-delay="0.2s">
                                                <h3>MEMBRE DE L'ÉQUIPE DE PROMOTION DE L'ÉCOLE - ISEG MCS PARIS</h3>
                                                <h5>2016 - Présent</h5>
                                                <p>Relance téléphonique &amp; Mise sous pli <br />
                                                    Aide à la préparation des journées portes ouvertes et salons <br />
                                                    Participation aux journées portes ouvertes, salons et forums.<br /></p>
                                            </li>
                                            <li class="resume-item wow fadeInDown" data-wow-delay="0.2s">
                                                <h3>BABY-SITTER - PARIS</h3>
                                                <h5>2014 - 2016</h5>
                                                <p>Garde hebdomadaire d'enfants. <br>
                                                    Aide au devoirs, loisirs, repas</p>
                                            </li>
                                        </ul>
                                    </div></div></div><div class="wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner "><div class="wpb_wrapper">
                                        <ul class="resumes">
                                            <li class="resume-item wow fadeInDown" data-wow-delay="0.4s">
                                                <h3>TUTEUR - PARIS</h3>
                                                <h5>2015 - 2016</h5>
                                                <p>Aide aux devoirs bi-hebdomadaire. <br> Préparation au baccalauréat.</p>
                                            </li>
                                            <li class="resume-item wow fadeInDown" data-wow-delay="0.4s">
                                                <h3>OPERATEUR ANIMATEUR D'ATTRACTION - DISNEYLAND PARIS</h3>
                                                <h5>2015</h5>
                                                <p>Participation au briefing avant et après la fermeture du parc, Assurer les procédures d'ouverture et de fermeture de l'attraction, Accueillir et renseigner les visiteurs,placer les visiteurs dans l'attraction,  Assurer de la sécurité des visiteurs, occuper le poste de commandes de l'attraction, <br> Assurer la propreté de l'attraction.</p>
                                            </li>
                                            <li class="resume-item wow fadeInDown" data-wow-delay="0.4s">
                                                <h3>VENDANGEUR - REIMS</h3>
                                                <h5>2014 - 2015</h5>
                                                <p>Cuillette du raisin.</p>
                                            </li>
                                        </ul>
                                    </div></div></div></div></div></div></div></div></div>
                                    <div  class="wpb_row  services-section spad col-sm-12"  >
                                      <div class="container">
                                        <div class="wpb_column vc_column_container vc_col-sm-3">
                                          <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                              <div class="service-item wow fadeInDown" data-wow-delay="0.2s">
                                                    <div class="icon">
                                                      <i class="fa fa-check-square" aria-hidden="true"></i>
                                                    </div>
                                                    <h3>FRANÇAIS</h3>
                                                    <p>Langue maternelle.</p>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="wpb_column vc_column_container vc_col-sm-3">
                                              <div class="vc_column-inner ">
                                                <div class="wpb_wrapper">
                                                  <div class="service-item wow fadeInDown" data-wow-delay="0.4s">
                                                    <div class="icon"><i class="fa fa-check-square" aria-hidden="true"></i>
                                                  </div>
                                                    <h3>ANGLAIS</h3>
                                                    <p>Niveau C1.</p>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="wpb_column vc_column_container vc_col-sm-3">
                                          <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                              <div class="service-item wow fadeInDown" data-wow-delay="0.6s">
                                                    <div class="icon"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>
                                                    </div>
                                                    <h3>JAPONAIS</h3>
                                                    <p>Niveau N3.</p>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="wpb_column vc_column_container vc_col-sm-3">
                                          <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                              <div class="service-item wow fadeInDown" data-wow-delay="0.6s">
                                                    <div class="icon"><i class="fa fa-spinner" aria-hidden="true"></i>
                                                    </div>
                                                    <h3>ALLEMAND</h3>
                                                    <p>Notions.</p>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                    <div id="resume" class="wpb_row  resume-section spad "  ><div class="container"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">
                                                <div class="wpb_raw_code wpb_content_element wpb_raw_html" >
                                                    <div class="wpb_wrapper">
                                                        <div class="section-title">
                                                            <h2>Ré<span>alisations &amp;</span> In<span>térêts</span> </h2>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wpb_column vc_column_container vc_col-sm-3">
                                                  <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                      <div class="service-item wow fadeInDown" data-wow-delay="0.6s">
                                                            <div class="icon"><i class="fa fa-car" aria-hidden="true"></i>
                                                            </div>
                                                            <h3>PERMIS</h3>
                                                            <p>Obtention du permis B en 2014.</p>
                                                        </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="wpb_column vc_column_container vc_col-sm-3">
                                                  <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                      <div class="service-item wow fadeInDown" data-wow-delay="0.6s">
                                                            <div class="icon"><i class="fa fa-users" aria-hidden="true"></i>
                                                            </div>
                                                            <h3>VIE ASSOCIATIVE</h3>
                                                            <p>Président d'ISEG FOOD depuis 2017.</p>
                                                        </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="wpb_column vc_column_container vc_col-sm-3">
                                                  <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                      <div class="service-item wow fadeInDown" data-wow-delay="0.6s">
                                                            <div class="icon"><i class="fa fa-futbol-o" aria-hidden="true"></i>
                                                            </div>
                                                            <h3>SPORTS</h3>
                                                            <p>Natation, Course à Pieds, Arts Martiaux.</p>
                                                        </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="wpb_column vc_column_container vc_col-sm-3">
                                                  <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                      <div class="service-item wow fadeInDown" data-wow-delay="0.6s">
                                                            <div class="icon"><i class="fa fa-music" aria-hidden="true"></i>
                                                            </div>
                                                            <h3>PASSIONS</h3>
                                                            <p>Musique, Cinéma, Littérature, Séries TV.</p>
                                                        </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                </div></div></div></div></div>

    <div id="portfolio" class="wpb_row  portfolio-section spad "  ><div class="container"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">
                        <div class="wpb_raw_code wpb_content_element wpb_raw_html" >
                            <div class="wpb_wrapper">
                                <div class="section-title">
                                    <h2>Po<span>rtfolio</span></h2>
                                </div>
                            </div>
                        </div>
                        <ul class="portfolio-filter">
                            <li class="filter" data-filter="*">ALL</li>
                            <li class="filter" data-filter=".branding">BRANDING</li>
                            <li class="filter" data-filter=".fashion">FASHION</li>
                            <li class="filter" data-filter=".illustrations">ILLUSTRATIONS</li>
                        </ul>
                        <!-- Portfolio items -->
                        <div class="row portfolio_container">

                            <!-- item -->
                            <div class="grid-item col-md-4 col-sm-4 col-xs-12 illustrations ">
                                <div class="work-item">
                                    <img src="http://themetrademark.com/demo/ocean/wp-content/uploads/2017/05/5.jpg" alt="">
                                    <div class="work-inner">
                                        <a class="work-zoom" href="#workID-1"><i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                                <div id="workID-1" class="mfp-hide work-popup">
                                    <img src="http://themetrademark.com/demo/ocean/wp-content/uploads/2017/05/5.jpg" alt="">
                                    <div class="work-popup-content">
                                        <h3>PROJECT TITLE FIVE</h3>
                                        <p><p>In media, which includes textual, audio, and visual content, free licensing schemes such as some of the licenses made by Creative Commons have allowed for the dissemination of works under a clear set of legal permissions.</p>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- item -->
                            <div class="grid-item col-md-4 col-sm-4 col-xs-12 fashion ">
                                <div class="work-item">
                                    <img src="http://themetrademark.com/demo/ocean/wp-content/uploads/2017/05/6.jpg" alt="">
                                    <div class="work-inner">
                                        <a class="work-zoom" href="#workID-2"><i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                                <div id="workID-2" class="mfp-hide work-popup">
                                    <img src="http://themetrademark.com/demo/ocean/wp-content/uploads/2017/05/6.jpg" alt="">
                                    <div class="work-popup-content">
                                        <h3>PROJECT TITLE SIX</h3>
                                        <p><p>In media, which includes textual, audio, and visual content, free licensing schemes such as some of the licenses made by Creative Commons have allowed for the dissemination of works under a clear set of legal permissions.</p>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- item -->
                            <div class="grid-item col-md-4 col-sm-4 col-xs-12 fashion ">
                                <div class="work-item">
                                    <img src="http://themetrademark.com/demo/ocean/wp-content/uploads/2017/05/3.jpg" alt="">
                                    <div class="work-inner">
                                        <a class="work-zoom" href="#workID-3"><i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                                <div id="workID-3" class="mfp-hide work-popup">
                                    <img src="http://themetrademark.com/demo/ocean/wp-content/uploads/2017/05/3.jpg" alt="">
                                    <div class="work-popup-content">
                                        <h3>PROJECT TITLE THREE</h3>
                                        <p><p>In media, which includes textual, audio, and visual content, free licensing schemes such as some of the licenses made by Creative Commons have allowed for the dissemination of works under a clear set of legal permissions.</p>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- item -->
                            <div class="grid-item col-md-4 col-sm-4 col-xs-12 illustrations ">
                                <div class="work-item">
                                    <img src="http://themetrademark.com/demo/ocean/wp-content/uploads/2017/05/1-1.jpg" alt="">
                                    <div class="work-inner">
                                        <a class="work-zoom" href="#workID-4"><i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                                <div id="workID-4" class="mfp-hide work-popup">
                                    <img src="http://themetrademark.com/demo/ocean/wp-content/uploads/2017/05/1-1.jpg" alt="">
                                    <div class="work-popup-content">
                                        <h3>PROJECT TITLE ONE</h3>
                                        <p><p>In media, which includes textual, audio, and visual content, free licensing schemes such as some of the licenses made by Creative Commons have allowed for the dissemination of works under a clear set of legal permissions.</p>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- item -->
                            <div class="grid-item col-md-4 col-sm-4 col-xs-12 branding ">
                                <div class="work-item">
                                    <img src="http://themetrademark.com/demo/ocean/wp-content/uploads/2017/05/2.jpg" alt="">
                                    <div class="work-inner">
                                        <a class="work-zoom" href="#workID-5"><i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                                <div id="workID-5" class="mfp-hide work-popup">
                                    <img src="http://themetrademark.com/demo/ocean/wp-content/uploads/2017/05/2.jpg" alt="">
                                    <div class="work-popup-content">
                                        <h3>PROJECT TITLE TWO</h3>
                                        <p><p>In media, which includes textual, audio, and visual content, free licensing schemes such as some of the licenses made by Creative Commons have allowed for the dissemination of works under a clear set of legal permissions.</p>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- item -->
                            <div class="grid-item col-md-4 col-sm-4 col-xs-12 illustrations ">
                                <div class="work-item">
                                    <img src="http://themetrademark.com/demo/ocean/wp-content/uploads/2017/05/4.jpg" alt="">
                                    <div class="work-inner">
                                        <a class="work-zoom" href="#workID-6"><i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                                <div id="workID-6" class="mfp-hide work-popup">
                                    <img src="http://themetrademark.com/demo/ocean/wp-content/uploads/2017/05/4.jpg" alt="">
                                    <div class="work-popup-content">
                                        <h3>PROJECT TITLE FOUR</h3>
                                        <p><p>In media, which includes textual, audio, and visual content, free licensing schemes such as some of the licenses made by Creative Commons have allowed for the dissemination of works under a clear set of legal permissions.</p>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div></div></div></div></div><div  class="wpb_row  testimonel-section spad "  ><div class="container"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">
                        <div class="col-md-offset-2 col-md-8">
                            <div id="testimonel-carousel">


                                <!-- item -->
                                <div class="testimonel-item">
                                    <div class="testimonel-img">
                                        <img src="image/jade.jpg" height="120px"  widht="120px" alt="">
                                    </div>
                                    <h2>Jade Hillion</h2>
                                    <h3>Collègue et amie</h3>
                                    <p>C'est un véritable plaisir de travailler avec Benjamin. Capable de retrouver quelqu'un sur Internet depuis nos sessions de NPAI, je n'imagine pas ma vie sans lui.</p>
                                </div>

                                <div class="testimonel-item">
                                    <div class="testimonel-img">
                                        <img src="image/gq.png" alt="">
                                    </div>
                                    <h2>GQ</h2>
                                    <h3>Magazine renommé</h3>
                                    <p>Vous n'aurez aucune envie de le prêter.</p>
                                </div>

                                <!-- item -->
                                <div class="testimonel-item">
                                    <div class="testimonel-img">
                                        <img src="image/yoahn.jpg" alt="">
                                    </div>
                                    <h2>Yoahn Linard</h2>
                                    <h3>On ne sait pas trop ce qu'il est (ni ce qu'il fait)</h3>
                                    <p>Il fait semblant d'aimer le code, mais on l'aime quand même. Je voterai pour lui aux prochaines élections sans hésiter.</p>
                                </div>

                                <!-- item -->
                                <div class="testimonel-item">
                                    <div class="testimonel-img">
                                        <img src="image/cordula.png" alt="">
                                    </div>
                                    <h2>Christina Cordula</h2>
                                    <h3>Styliste</h3>
                                    <p>Ce garçon est tout simplement magnifaïk mes chéries. Je vous le recommande à 100%.</p>
                                </div>

                                <!-- item -->
                                <div class="testimonel-item">
                                    <div class="testimonel-img">
                                        <img src="image/lefort.jpg" alt="">
                                    </div>
                                    <h2>Madame Lefort</h2>
                                    <h3>Sa mère</h3>
                                    <p>Tellement indispensable que s'en est devenu mon fond d'écran de Nokia Lumia.</p>
                                </div>

                                <!-- item -->
                                <div class="testimonel-item">
                                    <div class="testimonel-img">
                                        <img src="image/ewok.jpeg" alt="">
                                    </div>
                                    <h2>Ewok</h2>
                                    <h3>Son Chat</h3>
                                    <p>Adorable (et manipulable). Il donne des croquettes quand on fait semblant de l'aimer.</p>
                                </div>

                                <div class="testimonel-item">
                                    <div class="testimonel-img">
                                        <img src="image/anakin.png" alt="">
                                    </div>
                                    <h2>Anakin Skywalker</h2>
                                    <h3>Ancien Jedi</h3>
                                    <p>Interessant vu de cet angle.</p>
                                </div>



                                <div class="testimonel-item">
                                    <div class="testimonel-img">
                                        <img src="image/captainamerica.png" alt="">
                                    </div>
                                    <h2>Captain America</h2>
                                    <h3>Super héros portant des collants</h3>
                                    <p>Un véritable héros. Que serait le monde sans lui ?!</p>
                                </div>


                            </div>
                        </div>
                    </div></div></div></div></div><div id="blog" class="wpb_row  blog-section spad "  ><div class="container"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">
                        <div class="wpb_raw_code wpb_content_element wpb_raw_html" >
                            <div class="wpb_wrapper">
                                <div class="section-title">
                                    <h2>Bl<span>ogs</span></h2>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- item -->
                            <div class="col-md-4">
                                <div class="single-blog-item wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="blog-item-thumb">
                                        <img src="http://themetrademark.com/demo/ocean/wp-content/uploads/2017/05/1.jpg" alt="">
                                        <a href="http://themetrademark.com/demo/ocean/2017/05/13/lorem-ipsum-is-simply-dummy/" class="readm-btn">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    </div>
                                    <div class="blog-item-content">
                                        <h2>Lorem Ipsum is simply dummy</h2>
                                        <h4>larry-stark nature travel  - May 13, 2017 </h4>
                                        <p>We circled for some time without doing much damage on either side; the long, straight, needle-like swords flashing in.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- item -->
                            <div class="col-md-4">
                                <div class="single-blog-item wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="blog-item-thumb">
                                        <img src="http://themetrademark.com/demo/ocean/wp-content/uploads/2017/05/big-2.jpg" alt="">
                                        <a href="http://themetrademark.com/demo/ocean/2017/05/12/runaway-a-road-adventure/" class="readm-btn">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    </div>
                                    <div class="blog-item-content">
                                        <h2>Runaway A Road Adventure</h2>
                                        <h4>larry-stark travel  - May 12, 2017 </h4>
                                        <p>We circled for some time without doing much damage on either side; the long, straight, needle-like swords flashing in.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- item -->
                            <div class="col-md-4">
                                <div class="single-blog-item wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="blog-item-thumb">
                                        <img src="http://themetrademark.com/demo/ocean/wp-content/uploads/2017/05/big-1.jpg" alt="">
                                        <a href="http://themetrademark.com/demo/ocean/2017/05/13/whats-coming-to-netflix/" class="readm-btn">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    </div>
                                    <div class="blog-item-content">
                                        <h2>What&#8217;s Coming to Netflix</h2>
                                        <h4>adventure life nature  - May 13, 2017 </h4>
                                        <p>We circled for some time without doing much damage on either side; the long, straight, needle-like swords flashing in.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="text-center">
                            <a href="#" class="site-btn ml10 btn-pro-line">Load More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
