<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="African Solution Lab">
    <meta name="description" content="African Solution Lab est une entreprise d’envergure africaine qui a vu le jour grace aux efforts consentis par un dynamique groupe d’ingénieurs de conception en informatique ">
    <meta name="keywords" content="Agence web Libreville, Agence digitale, Agence digitale technologique, Agence interactive, Création de sites web, E-marketing, Applications mobiles et tablettes, Laboratoire africain, Solution informatique, Société informatique" />
    <title>ASL | African Solutions Lab</title>
    <!-- Favicons Icon -->
    <link rel="icon" href="{{url('resources/assets/images/logo.png')}}" type="image/x-icon" />
    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <!-- BOOTSTRAPE STYLESHEET CSS FILES -->
    <link rel="stylesheet" href="{{url('resources/assets/css/bootstrap.min.css')}}">

    <!-- JQUERY MENU CSS -->
    <link rel="stylesheet" href="{{url('resources/assets/css/mega_menu.min.css')}}">

    <!-- ANIMATION -->
    <link rel="stylesheet" href="{{url('resources/assets/css/animate.min.css')}}">

    <!-- OWl  CAROUSEL-->
    <link rel="stylesheet" href="{{url('resources/assets/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{url('resources/assets/css/owl.style.css')}}">

    <!--  REVOLUTION STYLE SETTING -->
    <link href="{{url('resources/assets/js/revolution/css/settings.css')}}" rel="stylesheet" type="text/css" />

    <!-- TEMPLATE CORE CSS -->
    <link rel="stylesheet" href="{{url('resources/assets/css/style.css')}}">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" type="text/css" href="{{url('resources/assets/css/font-awesome.min.css')}}">

    <!-- Google Fonts -->
    {{--<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,600,600italic,700,700italic,900italic,900,300,300italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet" type="text/css">--}}

    <!-- JavaScripts -->
    <script src="{{url('resources/assets/js/modernizr.js')}}"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')}}"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
    <![endif]-->
    <style></style>
</head>

<body>
<div class="page">
    <div id="spinner">
        <div class="spinner-img"> <img alt="African Solutions Lab" src="{{url('resources/assets/images/loader.gif')}}" />

        </div>
    </div>
    <div class="header-top clear">
        <div class="container">
            <div class="row">
               <div class="col-md-9 hidden-sm hidden-xs">
                    <div class="header-top-left header-top-info">
                        <p><a>African Solutions Lab | Get solutions By IT</a></p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="header-top-right pull-right header-top-info">
                        {{--<p><a href=""><i class="fa fa-sign-in"></i>SE CONNECTER</a></p>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav id="menu-1" class="mega-menu fa-change-black" data-color="">
        <section class="menu-list-items container">
            <ul class="menu-logo">
                <li> <a href=""> <img src="{{url('resources/assets/images/logo.png')}}" alt="logo" class="img-responsive"> </a> </li>
            </ul>
            <ul class="menu-links pull-right">
                <li>
                    <a href="{{url('/')}}"> Accueil </a>
                </li>
                <li>
                    <a href="{{url('qui-sommes-nous')}}"> Qui sommes nous? </a>
                </li>

               {{-- <li><a href="javascript:void(0)"> Nos produits <i class="fa fa-angle-down fa-indicator"></i></a>

                    <ul class="drop-down-multilevel">
                        <li><a href="">Web</a></li>
                        <li><a href="">Mobile</a></li>
                    </ul>
                </li>--}}

                <li><a href="javascript:void(0)"> Services <i class="fa fa-angle-down fa-indicator"></i></a>
                    <ul class="drop-down-multilevel">
                        <li><a class="smoth-scroll" href="{{url('services')}}#web">Dévéloppement Web</a></li>
                        <li><a class="smoth-scroll" href="{{url('services')}}#mobile">Dévéloppement Mobile</a></li>
                        <li><a class="smoth-scroll" href="{{url('services')}}#design">Design & Graphisme</a></li>
                        <li><a class="smoth-scroll" href="{{url('services')}}#reseaux">Solutions réseaux</a></li>
                        <li><a class="smoth-scroll" href="{{url('services')}}#solution_logiciel">Intégration de solution logiciels</a></li>
                        <li><a class="smoth-scroll" href="{{url('services')}}#formation">Formations</a></li>
                    </ul>
                </li>

               {{-- <li>
                    <a href="{{url('blog')}}"> Blog </a>
                </li>--}}

                <li>
                    <a href="{{url('contactez-nous')}}"> Contactez nous </a>
                </li>

               {{-- <li class="no-bg login-btn-no-bg"><a href="{{url('besoin-un-service')}}" class="login-header-btn"> Besoin d'un service ?</a></li>--}}
            </ul>
        </section>
    </nav>
    <div class="clearfix"></div>


    @yield('content')


    <div class="brand-logo-area clients-bg">
        <div class="clients-list">
            <div class="client-logo"> <a href="#"><img src="{{url('resources/assets/images/technologies/laravel.png')}}" class="img-responsive" alt="Brand Image" /></a> </div>
            <div class="client-logo"> <a href="#"><img src="{{url('resources/assets/images/technologies/codeigniter-logo.png')}}" class="img-responsive" alt="Brand Image" /></a> </div>
            <div class="client-logo"> <a href="#"><img src="{{url('resources/assets/images/technologies/django.png')}}" class="img-responsive" alt="Brand Image" /></a> </div>
            <div class="client-logo"> <a href="#"><img src="{{url('resources/assets/images/technologies/jsf.png')}}" class="img-responsive" alt="Brand Image" /></a> </div>
            <div class="client-logo"> <a href="#"><img src="{{url('resources/assets/images/technologies/apache-cordova.png')}}" class="img-responsive" alt="Brand Image" /></a> </div>
            <div class="client-logo"> <a href="#"><img src="{{url('resources/assets/images/technologies/ionic.png')}}" class="img-responsive" alt="Brand Image" /></a> </div>
            <div class="client-logo"> <a href="#"><img src="{{url('resources/assets/images/technologies/java-android.jpg')}}" class="img-responsive" alt="Brand Image" /></a> </div>
            <div class="client-logo"> <a href="#"><img src="{{url('resources/assets/images/technologies/ps.png')}}" class="img-responsive" alt="Brand Image" /></a> </div>
        </div>
    </div>

    <div class="fixed-footer1">
        <footer class="footer1">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-4 col-xs-12">
                        <div class="footer_block">
                            <a href="" class="f_logo"><img src="{{url('resources/assets/images/logo.png')}}" class="img-responsive" alt="logo"></a>
                            <p>
                                ASL est une entreprise qui a vu le jour grâce aux efforts consentis par un dynamique groupe d’ingénieurs.
                            </p>
                            <div class="social-bar">
                                <ul>
                                    <li>
                                        <a class="fa fa-twitter" href="https://twitter.com/ASL_company"></a>
                                    </li>
                                    <li>
                                        <a class="fa fa-facebook" href="https://www.facebook.com/African-Solutions-Lab-2365680063657532/"></a>
                                    </li>
                                    <li>
                                        <a class="fa fa-linkedin" href="https://www.linkedin.com/in/african-solutions-lab-118238150"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-5 col-xs-12">
                        <div class="footer_block dark_gry">
                            <h4>Actualités</h4>
                            <ul class="recentpost">
                                <?php
                                date_default_timezone_set('Africa/Libreville');
                                setlocale(LC_TIME, 'fr_FR.utf8','fra');
                                ?>
                                @foreach(\App\Article::listePaginate(3) as  $article)
                                    <?php
                                    $image=$article->images[0];
                                    ?>
                                <li> <span>
                                            <a class="plus" href="#"><img src="{{url($image->link)}}" alt="" /><i>+</i></a>
                                        </span>
                                    <p><a href="#">{{$article->titre}}</a></p>
                                    <h3>Publié le {{strftime("%A %d %B %Y", strtotime($article->created_at))}}</h3>
                                </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-xs-12">
                        <div class="footer_block">
                            <h4>Nos contacts</h4>
                            <ul class="personal-info">
                                <li><i class="fa fa-map-marker"></i> Libreville, Gabon.</li>
                                <li><i class="fa fa-envelope"></i> infos@africansolutionlab.com</li>
                                <li><i class="fa fa-phone"></i> +241 06 16 15 21 / +241 02 64 95 25 </li>
                                <li><i class="fa fa-clock-o"></i> Lun - Dim: 07:00 - 22:00</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <section class="footer-bottom-section light-blue">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="footer-bottom">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <p>Copyright ©2017 - African Solutions Lab - Tous droits reservés. Design By <a href="https://africansolutionslab.com"> ASL @Team </a></p>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 hidden-xs hidden-sm">
                                    <ul class="footer-menu">
                                        <li> <a href="#">Togo</a> </li>
                                        <li> <a href="#">Gabon</a> </li>
                                        <li> <a href="#">Cameroun</a> </li>
                                        <li> <a href="#">Burkina Faso</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <a href="#" class="scrollup"><i class="fa fa-chevron-up"></i></a>

    <!-- JAVASCRIPT JS  -->
    <script type="text/javascript" src="{{url('resources/assets/js/jquery-3.1.1.min.js')}}"></script>

    <!-- BOOTSTRAP CORE JS -->
    <script type="text/javascript" src="{{url('resources/assets/js/bootstrap.min.js')}}"></script>

    <!-- JAVASCRIPT JS  -->
    <script type="text/javascript" src="{{url('resources/assets/js/jquery-migrate-1.2.1.min.js')}}"></script>

    <!-- MEGA MENU -->
    <script type="text/javascript" src="{{url('resources/assets/js/mega_menu.min.js')}}"></script>

    <!-- JQUERY COUNTERUP -->
    <script type="text/javascript" src="{{url('resources/assets/js/counterup.js')}}"></script>


    <!-- JQUERY REVEAL -->
    <script type="text/javascript" src="{{url('resources/assets/js/footer-reveal.min.js')}}"></script>

    <!-- Owl Carousel -->
    <script type="text/javascript" src="{{url('resources/assets/js/owl-carousel.js')}}"></script>



    <!-- jQuery REVOLUTION Slider  -->
    <script src="{{url('resources/assets/js/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{url('resources/assets/js/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>


   <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBYWq6FmTBY-OzrKwUqi-g-YutIiXz-9wo"></script>
    <script type="text/javascript" src="{{url('resources/assets/js/map.js')}}"></script>
    <!-- CORE JS -->
    <script type="text/javascript" src="{{url('resources/assets/js/custom.js')}}"></script>

    <script type="text/javascript">
        /* ======= Revolution slider  Home Page Cleaning ======= */
        if ($('.slider-grid-3').length > 0) {
            jQuery(".slider-grid-3").revolution({
                delay: 9000,
                startwidth: 1170,
                startheight: 620,
                onHoverStop: "off",
                hideThumbs: 1,
                hideTimerBar: "on",
                navigationType: "none",
                navigationStyle: "preview3",
                fullWidth: "on",
                dottedOverlay: "custom",
                fullScreen: "off",
                fullScreenOffsetContainer: ""
            });
        }


        $(document).ready(function() {

            $('.smoth-scroll').on("click", function (e) {
                var anchor = $(this);
                $('html, body').stop().animate({
                    scrollTop: $(anchor.attr('href')).offset().top - 75
                }, 1200);
                e.preventDefault();
            });

        });
    </script>
</div>
</body>

</html>