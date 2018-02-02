@extends('template')

@section('content')


    <section class="job-breadcrumb parallex" style="background-image: url('{{url('resources/assets/images/bg/breadcrumb.jpg')}}'); background-position: center;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-7 co-xs-12 text-left">
                    <h3>Contactez nous</h3>
                </div>
                <div class="col-md-6 col-sm-5 co-xs-12 text-right">
                    <div class="bread">
                        <ol class="breadcrumb">
                            <li><a href="#">Accueil</a></li>
                            <li class="active">Contactez nous</li>
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
                        <div class="col-md-8 col-sm-12 col-xs-12">
                            @if (Session::has('error'))
                                <div role="alert" class="alert alert-danger alert-dismissible">
                                    <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true">×</span></button>
                                    {{ Session::get('error') }}
                                </div>
                            @endif
                            @if (Session::has('success'))
                                <div role="alert" class="alert alert-success alert-dismissible">
                                    <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true">×</span></button>
                                    {{ Session::get('success') }}
                                </div>
                            @endif

                            <div class="Heading-title-left black small-heading">
                                <h3>Laissez nous un message</h3>
                            </div>
                            <form class="row" method="post" action="{{url('contact')}}">
                                {{csrf_field()}}
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Name <span class="required">*</span></label>
                                        <input required name="nom" placeholder="" class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Email <span class="required">*</span></label>
                                        <input required name="email" placeholder="" class="form-control" type="email">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Téléphone <span class="required">*</span></label>
                                        <input required name="telephone" placeholder="" class="form-control"
                                               type="text">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Sujet <span class="required">*</span></label>
                                        <input required name="sujet" placeholder="" class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label>Votre message <span class="required">*</span></label>
                                        <textarea required name="message" cols="6" rows="8" placeholder=""
                                                  class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <button class="btn btn-default"> Envoyer <i class="fa fa-angle-right"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="Heading-title-left black small-heading">
                                <h3>Nos contacts</h3>
                            </div>
                            <div class="contact_block-2">
                                <div class="content-block-box">
                                    <div class="icon-box">
                                        <i class="icon-map-pin"></i>
                                    </div>
                                    <div class="detail-box">
                                        <p>Quartier IAI</p>
                                        <p>West smash road TW 456,</p>
                                        <p>Libreville, GABON</p>
                                    </div>
                                </div>

                            </div>
                            <div class="contact_block-2">
                                <div class="content-block-box">
                                    <div class="icon-box">
                                        <i class=" icon-phone"></i>
                                    </div>
                                    <div class="detail-box">
                                        <p>
                                            <b class="pull-left">Téléphone 1</b>
                                            <a href="tel:+241 02649525" class="pull-right">+241 02649525</a>
                                        </p>

                                        <p>
                                            <b class="pull-left">Téléphone 2</b>
                                            <a href="tel:+241 02649525" class="pull-right">+241 02649525</a>
                                        </p>

                                        <p>
                                            <b class="pull-left">Téléphone 3</b>
                                            <a href="tel:+241 02649525" class="pull-right">+241 02649525</a>
                                        </p>

                                        <p>
                                            <b class="pull-left">Téléphone 4</b>
                                            <a href="tel:+241 02649525" class="pull-right">+241 02649525</a>
                                        </p>
                                    </div>
                                </div>

                            </div>
                            <div class="contact_block-2">
                                <div class="content-block-box">
                                    <div class="icon-box">
                                        <i class="icon-document"></i>
                                    </div>
                                    <div class="detail-box">
                                        <p><a href="mailto:infos@africansolutionslab.com">infos@africansolutionslab.com</a></p>
                                        <p><a href="mailto:support@africansolutionslab.com">support@africansolutionslab.com</a></p>
                                    </div>
                                </div>

                            </div>
                            <ul class="social-network social-circle onwhite">
                                <li><a target="_blank" href="https://www.facebook.com/African-Solutions-Lab-2365680063657532/" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li><a target="_blank" href="https://twitter.com/ASL_company" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li><a target="_blank" href="https://www.linkedin.com/in/african-solutions-lab-118238150" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--<div id="map-contact"></div>--}}

@endsection