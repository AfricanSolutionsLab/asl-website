@extends('template')

@section('content')

    <section id="main-container">
        <div class=" contact-us container conexion" style="background-color: #bfb9b4; padding-left: 0">

            <div class="welcome col-md-3 col-sm-3 col-xs-12 nopadding"
                 style="background-image: url(assets/images/experts/1.jpg);background-size: cover;">
                <div class="over-lay-black">
                    {{--<img src="assets/images/logo-footer.png" class="img-responsive" alt="">--}}
                    <h2 class="text-white">Bienvenue</h2>
                    <p class="text-white">
                        quamorchestrate de x cooperative applications before out of the box content Etiam vel blandit
                        dolor at vestibulum magna mauris faucibus consectetur
                        quamorchestrate de x cooperative applications before out of the box content Etiam vel blandit
                        dolor at vestibulum magna mauris faucibus consectetur
                    </p>
                </div>
            </div>

            <div class="sign-up col-md-6 col-sm-5 col-xs-12 nopadding">
                <div class="text-milieu">Ou</div>
                <div class="col-md-12 col-sm-12 col-xs-12 ">
                    <div class="title">
                        <h3 class="m-t-5"><b>Créer un compte</b></h3>
                    </div>

                    <div class="col-md-12 col-sm-12 col-xs-12 nopadding  ">
                        <form class="row" autocomplete="off" method="POST" action="">
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
                                    <input placeholder="" name="nom" class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Prénoms <span class="required">*</span></label>
                                    <input placeholder="" name="prenoms" class="form-control" type="text">
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Télépone <span class="required">*</span></label>
                                    <input placeholder="" class="form-control" type="text">
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

                            <div class="col-md-12 col-sm-12">
                                <a href="" class="btn btn-default"> ENREGISTRER <i class="fa fa-angle-right"></i> </a>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

            <div class="col-md-3 col-sm-4 col-xs-12 nopadding">
                <div class="sign-in col-md-12 col-sm-12 col-xs-12 ">
                    <div class="title">
                        <h3 class="m-t-5"><b >Identifiez vous</b></h3>
                    </div>

                    <div class="col-md-12 col-sm-12 col-xs-12 nopadding  ">
                        <form class="row" autocomplete="off" method="POST" action="{{ route('login') }}">
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <input name="email" placeholder="Adresse mail" class="form-control" type="email">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <input name="email" placeholder="Mot de passe" class="form-control" type="password">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <button class="btn btn-default pull-left"> S'identifier</button>
                            </div>

                            <div class="col-md-12 col-sm-12 text-center">
                                <a href="password-forget.php">Mot de passe oublié?</a>
                            </div>
                        </form>
                    </div>

                </div>
            </div>


        </div>
    </section>

@endsection