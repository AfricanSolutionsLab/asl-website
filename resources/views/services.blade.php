@extends('template')

@section('content')

    <section class="job-breadcrumb parallex" style="background-image: url('{{url('resources/assets/images/bg/breadcrumb.jpg')}}'); background-position: center;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-7 co-xs-12 text-left">
                    <h3>Nos services</h3>
                </div>
                <div class="col-md-6 col-sm-5 co-xs-12 text-right">
                    <div class="bread">
                        <ol class="breadcrumb">
                            <li><a href="#">Accueil</a> </li>
                            <li class="active">Services</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .categories-list-page .row{
            margin-bottom: 7%;
        }
    </style>

    <section class="categories-list-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <div id="web" class="row">
                            <div class="col-sm-4">
                                <img style=" overflow:hidden;" class="img-responsive" src="{{url('resources/assets/images/services/web_1.png')}}" border="0" alt="Asso">
                            </div>
                            <div class="col-sm-8">

                                <h3 class="post-title">
                                    DEVELOPPEMENT DES APPLICATIONS WEB
                                </h3>

                                <p class="post-details">
                                    ASL met a votre disposition son expertise dans les technologies WEB et concoit pour vous :
                                <ul class="desc-points" style="padding-left: 15px">
                                    <li>
                                        <i class="fa fa-caret-right "></i>des sites internet professionnels pour une meilleur visibilité dans le monde. Site vitrine, site de e-commerce (vente en ligne) et autres. Quelque soit votre besoin, ASL vous offre la solution idéale.
                                    </li>
                                    <li>
                                        <i class="fa fa-caret-right "></i>des applications web de qualité aux normes internationales pour une automatisation de vos traitements et une informatisation de vos processus
                                    </li>
                                </ul>
                                </p>
                            </div>
                        </div>

                        <div id="design" class="row">
                            <div class="col-sm-8">

                                <h3 class="post-title">
                                    DESIGN WEB ET GRAPHIQUE
                                </h3>

                                <p class="post-details">
                                <ul class="desc-points" style="padding-left: 15px">
                                    <li>
                                        Avec l'émergence de la communication multimédia et du developpement d'application, les produits des entreprises se veulent plus attrayants pour satisfaire des consommateurs de plus en plus informés et habitutés a un certain niveau de convivialité.

                                    </li>
                                    <li>
                                        Notre cellule de design Web est là pour répondre aux besoins de communication, cela à la fois sur le plan graphique mais aussi au niveau de la hiérarchisation de l'information.
                                    </li>
                                    <li>
                                        En plus de créer et façonner des interfaces agréables et ergonomiques nous prenons soins de vous faire part de notre experience utilisateur.
                                    </li>
                                </ul>
                                </p>
                            </div>

                            <div class="col-sm-4">
                                <img style=" overflow:hidden;" class="img-responsive" src="{{url('resources/assets/images/services/design_1.png')}}" border="0" alt="Asso">
                            </div>
                        </div>

                        <div id="mobile" class="row">
                            <div class="col-sm-4">
                                <img style=" overflow:hidden;" class="img-responsive" src="{{url('resources/assets/images/services/mobile_1.png')}}" border="0" alt="Asso">
                            </div>

                            <div class="col-sm-8">
                                <h3 class="post-title">
                                    DEVELOPPEMENT DES APPLICATIONS MOBILE
                                </h3>

                                <p class="post-details">
                                    Vous avez besoin d'une application mobile, ASL est votre partenaire idéale. Nous vous offrons la pointe de la technologie avec :
                                <ul class="desc-points" style="padding-left: 15px">
                                    <li>
                                        <i class="fa fa-caret-right "></i>des applications natives Android , IOS, WINDOWS PHONE
                                    </li>
                                    <li>
                                        <i class="fa fa-caret-right "></i>Des applications Hybrides multiplateformes
                                    </li>
                                    <li>
                                        <i class="fa fa-caret-right "></i>et même des applications web pour mobiles
                                    </li>
                                </ul>
                                Vous avez un souci de formation en informatique, quel que soit le domaine dans lequel vous voulez faire vos premiers pas, ASL est votre guide et votre contact. En effet ASL travaille avec des experts de plusieurs domaines. N’hésitez pas à contactez ASL, vous ne serez pas déçu.
                                </p>
                            </div>


                        </div>

                        <div id="reseaux" class="row">
                            <div class="col-sm-8">
                                <h3 class="post-title">
                                    RESEAUX INFORMATIQUES
                                </h3>

                                <p class="post-details">
                                    Sans réseaux informatiques le partage des informations serait quasi-impossible. ASL a la solution pour vous! nous apportons notre expertiste selon votre besoin : .
                                <ul class="desc-points" style="padding-left: 15px">
                                    <li>
                                        <i class="fa fa-caret-right "></i>Conception de l'architecture du réseau
                                    </li>
                                    <li>
                                        <i class="fa fa-caret-right "></i>Installation des infrastructures du réseau
                                    </li>
                                    <li>
                                        <i class="fa fa-caret-right "></i>Configuration des équipenpents du réseau
                                    </li>
                                    <li>
                                        <i class="fa fa-caret-right "></i>Proctection et sécurite du réseau
                                    </li>
                                    <li>
                                        <i class="fa fa-caret-right "></i>Gestion et maintenance des infrastructures
                                    </li>
                                </ul>
                            </div>

                            <div class="col-sm-4">
                                <img style=" overflow:hidden;" class="img-responsive" src="{{url('resources/assets/images/services/reseau_1.jpg')}}" border="0" alt="Asso">
                            </div>


                        </div>

                        <div id="formation" class="row">
                            <div class="col-sm-4">
                                <img style=" overflow:hidden;" class="img-responsive" src="{{url('resources/assets/images/services/formation_1.jpg')}}" border="0" alt="Asso">
                            </div>

                            <div class="col-sm-8">
                                <h3 class="post-title">
                                    FORMATIONS
                                </h3>

                                <p class="post-details">
                                    ASL vous offre diverses formations dans le domaine de l’Informatique. Vous avez entre autres :
                                <ul class="desc-points" style="padding-left: 15px">
                                    <li>
                                        <i class="fa fa-caret-right "></i>Une formation pour l’utilisation des logiciels de la Suite MICROSOFT Office (Word, Excel, Powerpoint, Access, Publisher)
                                    </li>
                                    <li>
                                        <i class="fa fa-caret-right "></i>Une Formation complète pour passer la certification OCA (Oracle Certified Associate) en JAVA SE
                                    </li>
                                    <li>
                                        <i class="fa fa-caret-right "></i>Une Formation  en PHP-MYSQL
                                    </li>
                                    <li>
                                        <i class="fa fa-caret-right "></i>Une Formation en conception et création des sites internet ;
                                    </li>
                                    <li>
                                        <i class="fa fa-caret-right "></i>Une Formation pour la préparation de la certification CCNA (Cisco Certified Network Associate) ;
                                    </li>
                                    <li>
                                        <i class="fa fa-caret-right "></i>Une Formation en Design Graphique et Web ;
                                    </li>
                                </ul>
                                Vous avez un souci de formation en informatique, quel que soit le domaine dans lequel vous voulez faire vos premiers pas, ASL est votre guide et votre contact. En effet ASL travaille avec des experts de plusieurs domaines. N’hésitez pas à contactez ASL, vous ne serez pas déçu.
                                </p>
                            </div>
                        </div>

                        <div id="solution_logiciel" class="row">
                            <div class="col-sm-8">

                                <h3 class="post-title">
                                    INTÉGRATION DE SOLUTIONS LOGICIELLES
                                </h3>

                                <p class="post-details">
                                    En tant qu’intégrateur logiciel,  ASL vous propose des services orientés autour de trois grands piliers :
                                <ul class="desc-points" style="padding-left: 15px">
                                    <li>
                                        <i class="fa fa-caret-right "></i>L’adaptabilité. Nous intégrons les données à votre SI et nous adaptons l’ergonomie du logiciel à l’utilisation des clients.
                                    </li>
                                    <li>
                                        <i class="fa fa-caret-right "></i>L’innovation. Nos solutions couvrent les aspects les plus innovants de votre métier, ce que ne proposent pas les autres logiciels sur le marché. Le logiciel est totalement adaptable en fonction des nouveautés technologiques.
                                    </li>
                                    <li>
                                        <i class="fa fa-caret-right "></i>La productivité. Nous vous offrons une application totalement adaptée à votre SI et à votre activité, afin d’augmenter la productivité de l’entreprise.
                                    </li>
                                </ul>
                            </div>

                            <div class="col-sm-4">
                                <img style=" overflow:hidden;" class="img-responsive" src="{{url('resources/assets/images/services/integration_1.png')}}" border="0" alt="Asso">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection