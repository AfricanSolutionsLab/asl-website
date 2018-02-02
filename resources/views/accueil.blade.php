@extends('template')

@section('content')

<section class="slider-container">
    <div class="slider-grid-3">
        <ul>
            <!-- SLIDE  -->
            <li data-transition="random" data-slotamount="7" data-masterspeed="500" data-saveperformance="on"
                data-title="Dévéloppement d'application">

                <!-- MAIN IMAGE -->
                <img src="{{url('resources/assets/images/slider/1.jpg')}}" alt="Dévéloppement" data-bgfit="cover"
                     data-bgposition="center center" data-bgrepeat="no-repeat">

                <!-- LAYER NR. 1 -->

                <div class="tp-caption tt-slider-title sft" data-x="20" data-y="140" data-speed="1000" data-start="500"
                     data-easing="Power4.easeOut" data-endspeed="300" style="z-index: 999">Développement d'applications<span> </span></div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption tt-slider-subtitle sft" data-x="20" data-y="240" data-speed="1000" data-start="700" data-easing="Power4.easeOut" data-endspeed="300" style="z-index: 999">
                   WEB, MOBILE, BUREAU & Site internet
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption tt-slider-small-text sft" data-x="20" data-y="310" data-speed="1000" data-start="900" data-easing="Power4.easeOut" data-endspeed="300" style="z-index: 999">
                    Nous combinons expérience et expertise pour tous vos besoins
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption sft" data-x="20" data-y="420" data-speed="1000" data-start="1100"
                     data-easing="Power4.easeOut" data-endspeed="300" style="z-index: 999">
                    <a href="{{url('contactez-nous')}}" class="tt-btn btn-default">Nous contacter</a>
                   {{-- <a href="#" class="tt-btn btn-default">Faire une commande</a>--}}
                </div>

            </li>

            <!-- SLIDE  -->
            <li data-transition="random" data-slotamount="7" data-masterspeed="500" data-saveperformance="on"
                data-title="Design Web et graphique">

                <!-- MAIN IMAGE -->
                <img src="{{url('resources/assets/images/slider/2.jpg')}}" alt="Web design" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">

                <!-- LAYER NR. 1 -->

                <div class="tp-caption tt-slider-title sft" data-x="20" data-y="140" data-speed="1000" data-start="500" data-easing="Power4.easeOut" data-endspeed="300" style="z-index: 999">DESIGN WEB &
                    GRAPHIQUE<span> </span>
                </div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption tt-slider-subtitle sft" data-x="20" data-y="240" data-speed="1000"  data-start="700" data-easing="Power4.easeOut" data-endspeed="300" style="z-index: 999">
                    Votre identité graphique à moindre coût !
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption tt-slider-small-text sft" data-x="20" data-y="310" data-speed="1000" data-start="900" data-easing="Power4.easeOut" data-endspeed="300" style="z-index: 999">
                    Nous concrétisons vos imaginations
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption sft" data-x="20" data-y="420" data-speed="1000" data-start="1100" data-easing="Power4.easeOut" data-endspeed="300" style="z-index: 999">
                    <a href="{{url('contactez-nous')}}" class="tt-btn btn-default">Nous contacter</a>
                    {{--<a href="#" class="tt-btn btn-default">Faire une commande</a>--}}
                </div>
            </li>

            <!-- SLIDE  -->
            <li data-transition="random" data-slotamount="7" data-masterspeed="500" data-saveperformance="on"  data-title="Réseaux informatiques">

                <!-- MAIN IMAGE -->
                <img src="{{url('resources/assets/images/slider/5.jpg')}}" alt="Solution réseaux" data-bgfit="cover"  data-bgposition="center center" data-bgrepeat="no-repeat">

                <!-- LAYER NR. 1 -->

                <div class="tp-caption tt-slider-title sft" data-x="20" data-y="140" data-speed="1000" data-start="500" data-easing="Power4.easeOut" data-endspeed="300" style="z-index: 999">
                    Réseaux  informatiques<span></span>
                </div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption tt-slider-subtitle sft" data-x="20" data-y="240" data-speed="1000" data-start="700" data-easing="Power4.easeOut" data-endspeed="300" style="z-index: 999">
                    Installation & Maintenance
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption tt-slider-small-text sft" data-x="20" data-y="310" data-speed="1000" data-start="900" data-easing="Power4.easeOut" data-endspeed="300" style="z-index: 999">
                    Nous construisons et maintenons vos systèmes informatiques
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption sft" data-x="20" data-y="420" data-speed="1000" data-start="1100"  data-easing="Power4.easeOut" data-endspeed="300" style="z-index: 999">
                    <a href="{{url('contactez-nous')}}" class="tt-btn btn-default">Nous contacter</a>
                   {{-- <a href="#" class="tt-btn btn-default">Faire une commande</a>--}}
                </div>
            </li>



            <li data-transition="random" data-slotamount="7" data-masterspeed="500" data-saveperformance="on"
                data-title="Intégration de solution informatiques">

                <!-- MAIN IMAGE -->
                <img src="{{url('resources/assets/images/slider/8.jpg')}}" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">

                <!-- LAYER NR. 1 -->

                <div class="tp-caption tt-slider-title sft" data-x="20" data-y="140" data-speed="1000" data-start="500"  data-easing="Power4.easeOut" data-endspeed="300" style="z-index: 999">
                    Intégration des solutions<span></span>
                </div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption tt-slider-subtitle sft" data-x="20" data-y="240" data-speed="1000" data-start="700" data-easing="Power4.easeOut" data-endspeed="300" style="z-index: 999">
                    Bureautique, Comptabilité, RH
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption tt-slider-small-text sft" data-x="20" data-y="310" data-speed="1000" data-start="900" data-easing="Power4.easeOut" data-endspeed="300" style="z-index: 999">
                   Un accompagnement dédié et une formation à l'appui.
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption sft" data-x="20" data-y="420" data-speed="1000" data-start="1100" data-easing="Power4.easeOut" data-endspeed="300" style="z-index: 999">
                    <a href="{{url('contactez-nous')}}" class="tt-btn btn-default">Nous contacter</a>
                    {{--<a href="#" class="tt-btn btn-default">Faire une commande</a>--}}
                </div>
            </li>

        </ul>
    </div>
</section>

<section class="employe-section" style="background-color: #05686e">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12 nopadding hidden-sm">
                <div class="employe-img-section-right"
                     style="background-image: url('{{url('resources/assets/images/bg/new_home.jpg')}}')"></div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12 nopadding">
                <div class="employe-detail-section">
                    <h2>Bienvenue chez ASL</h2>
                    <h5>Votre partenaire parfait</h5>
                    <p style="text-align: justify">
                        African Solutions Lab (ASL) est un collectif d'experts et ingénieurs africains du domaine des technologies de l'information. A travers cette vitrine qu'offre ASL, bénéficiez d'un accompagnement rigoureux et efficace dans la réalisation de tous vos projets informatiques. Alors n'attendez plus,
                        <a class="link-contact" href="{{url('contactez-nous')}}">contactez nous</a>.
                    </p>
                    <a href="{{url('qui-sommes-nous')}}" class="btn-default btn btn-employe-section">En savoir plus</a>
                    <a href="{{url('contactez-nous')}}" class="btn-default btn btn-employe-section">Nous contactez</a></div>
            </div>
        </div>
    </div>
</section>

<section class="pricing-section-1 light-grey">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="Heading-title black">
                    <h1>Nos Services</h1>

                    <blockquote class="block">
                       <span>“</span> Nous considérons nos clients comme des invités à une fête où nous sommes les hôtes. c'est notre job d'améliorer leur expérience un peu plus chaque jour.<span><sup style="font-size: 36px">&bdquo;</sup></span>
                    </blockquote>



                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="ui_box">
                        <div class="ui_box__inner">
                            <h2>APPLICATION WEB</h2>
                            <div class="features_left">
                                <ul>
                                    <li><i class="fa fa-caret-right"></i> Site internet</li>
                                    <li><i class="fa fa-caret-right"></i> Logiciel</li>
                                    <li><i class="fa fa-caret-right"></i> Interface Applicative</li>
                                </ul>
                            </div>
                            <div class="price-rates"><i style="color: #05686e" class="fa fa-internet-explorer"></i>
                            </div>
                            <p >
                                Des sites internet professionnels pour une meilleure visibilité et des applications web de qualité arrimées aux normes internationales.
                            </p>
                        </div>
                        <div class="drop">
                            <a href="">
                                <p>En Savoir Plus</p>
                            </a>
                            <div class="arrow"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="ui_box">
                        <div class="ui_box__inner">
                            <h2>APPLICATION MOBILE</h2>
                            <div class="features_left">
                                <ul>
                                    <li><i class="fa fa-caret-right"></i> Android</li>
                                    <li><i class="fa fa-caret-right"></i> Iphone (IOS)</li>
                                    <li><i class="fa fa-caret-right"></i> Windows phone</li>
                                </ul>
                            </div>
                            <div class="price-rates"><i style="font-size: 80px" class="fa fa-mobile"></i></div>
                            <p>
                                Des ingénieurs spécialisés dans le dévéloppement mobile à votre service<br> Nous vous équipons des applications mobiles sur mesures.
                            </p>
                        </div>
                        <div class="drop">
                            <a href="">
                                <p>En Savoir Plus</p>
                            </a>
                            <div class="arrow"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="ui_box">
                        <div class="ui_box__inner">
                            <h2> DESIGN GRAPHIQUE </h2>
                            <div class="features_left">
                                <ul>
                                    <li><i class="fa fa-caret-right"></i> Design Web</li>
                                    <li><i class="fa fa-caret-right"></i> Infographie</li>
                                    <li><i class="fa fa-caret-right"></i> Identité graphique</li>
                                </ul>
                            </div>
                            <div class="price-rates"><i class="fa fa-desktop"></i></div>
                            <p>
                                Des designers qualifiés pour tous vos travaux de conceptions et de créations graphiques en accord avec vos goûts.
                            </p>
                        </div>
                        <div class="drop">
                            <a href="">
                                <p>En Savoir Plus</p>
                            </a>
                            <div class="arrow"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="load-more-btn">
                    <button class="btn-default"> Découvrir tout <i class="fa fa-angle-right"></i></button>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="call-to-action-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="col-md-9 col-sm-10 col-xs-12">
                    <div class="heading-detail">
                        <h3>Choisissez la qualité et le professionalisme</h3>
                        <p>Continuez votre périple dans la découverte du monde des TIC.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-2 col-xs-12">
                    <a href="" class="btn btn-default btn-block">Nous contacter</a>
                </div>
            </div>
        </div>
    </div>
</section>

{{--<section class="pricing-section-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="Heading-title black">
                    <h1>Nos produits</h1>

                    <blockquote class="block">
                        La culture du professionalisme et de l'excellence est notre première exigence dans la réalisation des nos produits. Découvrez nos produits et laissez nous vous convaincre.
                    </blockquote>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="profile-card">
                    <div class="banner">
                        <img src="{{url('resources/assets/images/bg/skoolkit.png')}}" alt="" class="img-responsive">
                    </div>
                    <div class="user-image">
                        <img src="{{url('resources/assets/images/bg/sk_logo.png')}}" class="img-responsive img-circle"
                             alt="">
                    </div>
                    <div class="card-body">
                        <h3>SkoolKit</h3>
                        <span class="title">Gestion des écoles</span>
                        <a href="#" class="pull-right" title="J'aime">3 <i style="font-size: 20px"
                                                                           class="fa fa-heart-o"></i></a>
                    </div>
                </div>

            </div>

            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="profile-card">
                    <div class="banner">
                        <img src="{{url('resources/assets/images/bg/skoolkit.png')}}" alt="" class="img-responsive">
                    </div>
                    <div class="user-image">
                        <img src="{{url('resources/assets/images/bg/sk_logo.png')}}" class="img-responsive img-circle"
                             alt="">
                    </div>
                    <div class="card-body">
                        <h3>SkoolKit</h3>
                        <span class="title">Gestion des écoles</span>
                        <a href="#" class="pull-right" title="J'aime">3 <i style="font-size: 20px"
                                                                           class="fa fa-heart-o"></i></a>
                    </div>
                </div>

            </div>

            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="profile-card">
                    <div class="banner">
                        <img src="{{url('resources/assets/images/bg/skoolkit.png')}}" alt="" class="img-responsive">
                    </div>
                    <div class="user-image">
                        <img src="{{url('resources/assets/images/bg/sk_logo.png')}}" class="img-responsive img-circle"
                             alt="">
                    </div>
                    <div class="card-body">
                        <h3>SkoolKit</h3>
                        <span class="title">Gestion des écoles</span>
                        <a href="#" class="pull-right" title="J'aime">3 <i style="font-size: 20px"
                                                                           class="fa fa-heart-o"></i></a>
                    </div>
                </div>

            </div>

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="load-more-btn">
                    <button class="btn-default"> Voir plus <i class="fa fa-angle-right"></i></button>
                </div>
            </div>
        </div>
    </div>
</section>--}}

<section class="testimonials-section light-blue">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="Heading-title black">
                    <h1>Notre histoire</h1>
                    <p></p>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="testimonials-1">
                    <div class="testimonials-1-inner">
                        <p style="text-align: justify;">
                            Mon souhait est de voir les pays d'Afrique se hisser au rang des puissances économiques mondiales. Le numérique étant aujourdhui incontournable, je me bats chaque jour de mon côté, malgré les difficultés, pour apporter ma contribution à la réalisaton de ce rêve qui m'est infiniment cher.
                        </p>
                    </div>
                    <img class="rounded-x" src="{{url('resources/assets/images/team/small/sadathe.jpg')}}" alt="thumb"> <span
                            class="testimonials-author">TCHANI E. Sadathe<br>
                        <em>Ingénieur, <a href="#">ASL.</a></em> </span></div>
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="testimonials-1">
                    <div class="testimonials-1-inner">
                        <p style="text-align: justify;">
                            Le partage a toujours été ma plus grande passion et la quête perpétuelle de la connaissance mon leitmotiv. Je vois une Afrique totalement émergente et transformée dans les années à venir, si nous mettons sur pied d’applications informatiques adéquates et sécurisées pour booster la productivité des entreprises.
                        </p>
                    </div>
                    <img class="rounded-x" src="{{url('resources/assets/images/team/small/bice.jpg')}}" alt="thumb">
                    <span class="testimonials-author">KUASSIA M. Brice H.<br> <em>Ingénieur, <a href="#">ASL.</a></em> </span>
                </div>
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="testimonials-1">
                    <div class="testimonials-1-inner">
                        <p style="text-align: justify;">
                            L'envie de mettre mes compétences au service du monde et de créer des oeuvres qui dépassent l'attente des gens ont été mes rêves. Après de nombreux problèmes rencontrés ma passion au TIC s'est doucement installée en moi. Ma mission s'est déssinée et mes moyens d'action se retrouvent dans les visions de ASL.
                        </p>
                    </div>
                    <img class="rounded-x" src="{{url('resources/assets/images/team/small/gabi.jpg')}}" alt="thumb">
                    <span class="testimonials-author">AGBONON Kankoe Yaovi<br> <em>Ingénieur, <a href="#">ASL.</a></em> </span>
                </div>
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="testimonials-1">
                    <div class="testimonials-1-inner">
                        <p style="text-align: justify;">
                            Au regard de l’évolution technologique que connait le monde, je rêve d'une Afrique  à la pointe  des solutions informatiques innovantes à échelle mondiale. Voulant faire de ce rêve une réalité, je me suis retrouvé avec des camarades partageant la meme vision que moi pour créer ASL. Je souhaite vivement voir germer ce grain semé par l’ensemble des membres de ce groupe.
                        </p>
                    </div>
                    <img class="rounded-x" src="{{url('resources/assets/images/team/small/jc.jpg')}}" alt="thumb">
                    <span class="testimonials-author">BONTOGO Jean Claude<br> <em>Ingénieur, <a href="#">ASL.</a></em> </span>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="call-to-action-1">
    <div class="container">
        <div class="row">
            <div align="center" class="col-md-12 col-sm-12 col-xs-12">
                <div class="col-md-12 col-sm-10 col-xs-12">
                    <div class="heading-detail">
                        <h3>S'inscrire à notre Newsletter</h3>
                        <p>
                            Vous recevrez un courrier dans votre messagerie électronique vous demandant de confirmer votre inscription.
                        </p>
                    </div>
                </div>


                <form action="{{url('newsletter')}}" id="news-letter"  method="post">
                    {{csrf_field()}}
                    <div  class="col-md-2 col-sm-12 col-xs-12 text-center" >

                    </div>
                    <div class="col-md-5 col-sm-12 col-xs-12">
                        <input id="email_news_letter" required name="email" class="form-control news-input" type="email">
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <button type="submit" class="btn btn-default btn-block">S'INSCRIRE</button>
                    </div>
                </form>
                <div id="info-newsleter" class="col-md-9 col-sm-12 col-xs-12 text-center" >

                </div>


            </div>
        </div>
    </div>
</section>

@endsection