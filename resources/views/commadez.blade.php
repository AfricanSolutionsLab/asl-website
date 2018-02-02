@extends('template')

@section('content')

    <section class="job-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-7 co-xs-12 text-left">
                    <h3>Besoin d'un service?</h3>
                </div>
                <div class="col-md-6 col-sm-5 co-xs-12 text-right">
                    <div class="bread">
                        <ol class="breadcrumb">
                            <li><a href="#">Accueil</a> </li>
                            <li class="active">Besoin d'un service</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-us ">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class=" cat-tabs cat-tab-index-2 col-md-8 col-sm-12 col-xs-12">
                            <div class="Heading-title-left black small-heading">
                                <h3>Passez votre commande</h3>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <!-- Tabs -->
                                        <ul class="nav panel-tabs">
                                            <li class="active"> <a href="#tab3" data-toggle="tab"><i class="fa fa-internet-explorer"></i><span class="hidden-xs hidden-sm">SITE INTERNET</span></a> </li>
                                            <li> <a href="#tab2" data-toggle="tab"><i class="fa fa-mobile"></i><span class="hidden-xs hidden-sm">APPLICATION MOBILE</span></a> </li>
                                            <li > <a href="#tab1" id="a-tab1" data-toggle="tab"><i class="fa fa-desktop"></i><span class="hidden-xs hidden-sm">DESIGN GRAPHIQUE</span></a> </li>
                                         </ul>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="tab-content">
                                        <div class="tab-pane tab-pane animated fadeInUp" id="tab1" >

                                        </div>

                                        <div class="tab-pane animated fadeInDown" id="tab2">

                                        </div>

                                        <div class="tab-pane active animated fadeInLeft" id="tab3">
                                            <form class="row" action="{{url('commandez')}}">

                                                <div class="col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label class="col-lg-12 nopadding"><span class="required">*</span> Vous désirez </label>
                                                        <label  class="list-service col-lg-6"><input name="libelle" type="radio">Une création de site web</label>
                                                        <label class="list-service col-lg-5"><input name="libelle" type="radio">Une amélioration de site web</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label><span class="required">*</span> Objectifs du site</label>
                                                        <textarea name="objectif" cols="6" rows="5" placeholder="" class="form-control"></textarea>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="type_commande"><span class="required">*</span> Type de sites web</label>
                                                        <select name="type_commande" id="type_site" class="form-control">
                                                            <option value="">*Choisir</option>
                                                            <option value="Site vitrine">Site vitrine</option>
                                                            <option value="Site e-commerce">Site e-commerce</option>
                                                            <option value="Site institutionnel">Site institutionnel</option>
                                                            <option value="Site blog">Site blog</option>
                                                            <option value="Site réseau social">Site réseau social</option>
                                                            <option value="Sur mesure">Sur mesure</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label><span class="required">*</span>Public visé </label>
                                                        <input name="target" placeholder="" type="text" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label>Exemple de site que vous aimez </label>
                                                        <input name="exemple" placeholder="www.exemple1.com, www.exemple2.com" type="text" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label><span class="required">*</span>Principales rubriques du site </label>
                                                        <textarea name="demandes" cols="6" rows="5" placeholder="" class="form-control"></textarea>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label><span class="required">*</span>Contact </label>
                                                        <input name="contact" placeholder="+228 90995119" type="text" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label><span class="required">*</span>Autres informations</label>
                                                        <textarea name="autre_info" cols="6" rows="5" placeholder="" class="form-control"></textarea>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 col-sm-12">
                                                    <a href="" class="btn btn-default"> Envoyer la commande <i class="fa fa-angle-right"></i> </a>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pricing-section-1  col-md-4 col-sm-12 col-xs-12">
                            <div class="Heading-title-left black small-heading">
                                <h3>Nos services</h3>
                            </div>
                            <div id="owl-testimonial">
                                <div class=" col-md-12 col-sm-12 col-xs-12">
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
                                            <p>Lorem ipsum dolor sit amet. Some more super groovy information. Lorem ipsum dolor sit
                                                amet. Some more super groovy information.</p>
                                        </div>
                                        <div class="drop">
                                            <a href="">
                                                <p>En Savoir Plus</p>
                                            </a>
                                            <div class="arrow"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
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
                                            <p>Lorem ipsum dolor sit amet. Some more super groovy information. Lorem ipsum dolor sit
                                                amet. Some more super groovy information.</p>
                                        </div>
                                        <div class="drop">
                                            <a href="">
                                                <p>En Savoir Plus</p>
                                            </a>
                                            <div class="arrow"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
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
                                            <p>Lorem ipsum dolor sit amet. Some more super groovy information. Lorem ipsum dolor sit
                                                amet. Some more super groovy information.</p>
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

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection