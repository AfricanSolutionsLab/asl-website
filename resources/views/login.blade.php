@extends('template')

@section('content')



    <section class="contact-us parallex section-login" {{--style="background:url('{{url('resources/assets/images/bg/asl_chiffre.jpg')}}') no-repeat  center top / cover;"--}}>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="login col-md-4 col-sm-12 col-xs-12">
                            <div class="Heading-title-left black small-heading">
                                <h3>Connectez-vous</h3>
                            </div>
                            <form class="row">

                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label>Email <span class="required">*</span></label>
                                        <input placeholder="" name="email" class="form-control" type="email">
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label>Mot de passe <span class="required">*</span></label>
                                        <input placeholder=""  name="password" class="form-control" type="password">
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <a href="" class="btn btn-default">CONNEXION</a>
                                </div>
                            </form>
                        </div>

                        <div class="col-md-7 col-sm-12 col-xs-12 pull-right sign-up">
                            <div class="Heading-title-left black small-heading">
                                <h3>Ouvrir un compte</h3>
                            </div>
                            <form class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Vous êtes? <span class="required">*</span></label>
                                        <select class="form-control" name="dtype" id="">
                                            <option value="">--Choisir--</option>
                                            <option value="E">Une entreprise</option>
                                            <option value="P">Un particulier</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Nom <span class="required">*</span></label>
                                        <input placeholder="" name="email" class="form-control" type="email">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Nom <span class="required">*</span></label>
                                        <input placeholder="" name="email" class="form-control" type="email">
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Email <span class="required">*</span></label>
                                        <input placeholder="" class="form-control" type="email">
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Mot de passe <span class="required">*</span></label>
                                        <input placeholder="" name="password" class="form-control" type="password">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Télépone <span class="required">*</span></label>
                                        <input placeholder="" class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <a href="" class="btn btn-default"> ENREGISTRER <i class="fa fa-angle-right"></i> </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection