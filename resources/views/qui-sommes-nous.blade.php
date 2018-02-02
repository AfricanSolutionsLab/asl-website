@extends('template')

@section('content')

    <section class="job-breadcrumb parallex" style="background-image: url('{{url('resources/assets/images/bg/breadcrumb.jpg')}}'); background-position: center; ">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-7 co-xs-12 text-left">
                    <h3>Qui sommes nous?</h3>
                </div>
                <div class="col-md-6 col-sm-5 co-xs-12 text-right">
                    <div class="bread">
                        <ol class="breadcrumb">
                            <li><a href="#">Accueil</a> </li>
                            <li class="active">Qui sommes nous</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="Heading-title-left black small-heading">
                            <h3>African Solutions Lab</h3>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12 col-xs-12">
                        <p style="text-align: justify">
                            African Solutions Lab (ASL) est une entreprise d’envergure africaine qui a vu le jour grace aux efforts consentis par un dynamique groupe d’ingénieurs de conception en informatique. Elle est spécialisée dans la conception et devéloppement de sites internet, de logiciels en accord avec vos idées et adaptés à vos infracstuctures informatiques. Elle apporte aussi son expertise dans le design graphique et dans la construction des systems informatiques.
                            <br>
                            ASL vous accompagne dans une dynamique d'informatisation en vous proposant des logiciels en adéquation aux besoins de votre entreprise et répondant au normes internationales. Nous donnons des formations certifiantes dans les domaines d'administration réseaux, d'administration système et de la programmaion. Nous vous assistons aussi dans la maîtrise des outils informatiques.
                        </p>
                        <blockquote>PME,PMI, Particulier Quelque soit votre projet ASL vous le concrétise. </blockquote>
                    </div>
                    <div class="col-md-5 col-sm-12 col-xs-12 hidden-sm"> <img src="{{url('resources/assets/images/bg/apropos.png')}}" alt="" class="img-responsive"> </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-us light-grey  vision">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                    <div class="col-md-12 col-sm-6 col-xs-12">
                        <div class="Heading-title-left black small-heading">
                            <h3>Nos visions</h3>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 nopadding">
                            <blockquote >
                                Faire de l’Afrique un pôle d’excellence de conception innovante des solutions logicielles devant contribuer à l’accélération du développement.
                            </blockquote>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12 nopadding">
                            <blockquote>
                                Effectuer une implantation des succursales d’ASL dans 80 % des Pays Africains à l’horizon 2030.
                            </blockquote>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12 nopadding">
                            <blockquote>
                                Fournir en temps réel, une réponse efficace aux problèmes informatiques.
                            </blockquote>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12 nopadding">
                            <blockquote>
                                Renforcer la productivité des entreprises privées et publiques en Afrique.
                            </blockquote>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12 nopadding">
                            <blockquote>
                                Organiser des formations régulières en Technologies de l’Information au profit de la jeune génération.
                            </blockquote>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12 nopadding">
                            <blockquote>
                                Promouvoir l’économie numérique à travers la mise sur pied d’applications adéquates et sécurisées.
                            </blockquote>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-us  vision">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                    <div  class="col-md-12 col-sm-12 col-xs-12">
                        <div class="Heading-title-left black small-heading" style="float: none">
                            <h3>Pourquoi nous choisir?</h3>
                        </div>

                        <div  class="col-md-6 col-sm-12 col-xs-12" id="paiement">
                            <strong>UN ACCOMPAGNEMENT DEDIE : </strong>
                            Avec ASL vous bénéficiez des interlocuteurs qui vous accompagnent   lors de la livraison de la solution informatique, du déploiement et de son utilisation . Ils s'habituent à la vie de votre société, ses objectifs et vous accompagnent en se portant garant de votre réussite. Il font le lien entre vos besoins et le monde informatique.
                        </div>

                        <div class="col-md-6 col-sm-12 col-xs-12"  id="paiement">
                            <strong>UNE SOLUTION SUR MESURE : </strong>
                            Chez ASL, nous vous écoutons parler, exposer vos besoins tout au long de la réalisation du projet. Nous mettons un point d’honneur à l’évolutivité de votre système informatique pour qu’il corresponde toujours à vos besoins et en accord avec les normes technologiques. Vous ne serez jamais bloqué sur une évolution bénéfique à la solution que nous vous offrons.
                        </div>

                        <div  class="col-md-6 col-sm-12 col-xs-12" id="paiement">
                            <strong>UNE EQUIPE PLURIDISCIPLINAIRE : </strong>
                            Chez ASL, nous somme convaincu que la réussite résulte du travail d’une équipe aux compétences complémentaires :  conception, dévéloppement, réseaux informatiques, formation, graphisme, rédaction, communication. ASL vous propose une palette de solutions bien mise en place et répondant à vos besoins sur tous les plans.
                        </div>

                        <div class="col-md-6 col-sm-12 col-xs-12"  id="paiement">
                            <strong>DES FACILITES DE PAIEMENT : </strong>
                            Chez ASL, la vision est de doter votre entreprise des solutions informatiques adéquates permettant de développer vos sutructures et vous apporter une valeur ajoutée . Nous assurons que nos solutions font grandir votre société. Nous vous faisons bénéficier si vous le souhaitez un règlement par tranche sur le coût de nos prestations.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="team light-grey">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="Heading-title black">
                        <h1>L'Equipe ASL</h1>
                        <p>Une équipe dynamique prête à vous donner une solution adéquate à tous vos besoins</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="team-member">
                        <div class="team-img col-pic1"> <img src="{{url('resources/assets/images/team/gabi.jpg')}}" alt="team member" class="img-responsive">
                            <div class="team-intro light-txt">
                                <h5>Kankoe Yaovi AGBONON</h5>
                                <span>Expert en solutions web</span>
                            </div>
                        </div>
                        <div class="team-hover">
                            <div class="desk">
                                <h4></h4>
                                <p></p>
                            </div>
                            <div class="s-link"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="team-member">
                        <div class="team-img col-pic1"> <img src="{{url('resources/assets/images/team/brice.jpg')}}" alt="team member" class="img-responsive">
                            <div class="team-intro light-txt">
                                <h5>Brice Hilarion KUASSIA M.</h5>
                                <span>Expert Système d'information</span>
                            </div>
                        </div>
                        <div class="team-hover">
                            <div class="desk">
                            </div>
                            <div class="s-link"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="team-member">
                        <div class="team-img col-pic1"> <img src="{{url('resources/assets/images/team/jc.jpg')}}" alt="team member" class="img-responsive">
                            <div class="team-intro light-txt">
                                <h5>Jean Claude BONTOGO </h5>
                                <span>Expert Java</span> </div>
                        </div>
                        <div class="team-hover">
                            <div class="desk">
                            </div>
                            <div class="s-link"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="team-member">
                        <div class="team-img col-pic1"> <img src="{{url('resources/assets/images/team/sadathe.jpg')}}" alt="team member" class="img-responsive">
                            <div class="team-intro light-txt">
                                <h5>Sadathe Essofa TCHANI</h5>
                                <span>Expert en solutions mobiles</span> </div>
                        </div>
                        <div class="team-hover">
                            <div class="desk">
                            </div>
                            <div class="s-link"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="team light-grey">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div  class="Heading-title black">
                        <h1>Nos forces et compétences</h1>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">


                            <p>
                                ASL regroupe des ingenieurs de diverses nationalités spécialisés et nantis des certificats dans les domaines suivants :
                            <ul class="desc-points" style="padding-left: 15px">
                                <li>
                                    <i class="fa fa-caret-right "></i>Systèmes d’information informatique(SII)
                                </li>
                                <li>
                                    <i class="fa fa-caret-right "></i>Bases de données informatiques
                                </li>
                                <li>
                                    <i class="fa fa-caret-right "></i>Réseaux informatiques.
                                </li>
                                <li>
                                    <i class="fa fa-caret-right "></i>Administration système (LINUX, WINDOWS).
                                </li>
                                <li>
                                    <i class="fa fa-caret-right "></i>Analyse des données statistiques.
                                </li>
                            </ul>
                            </p>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection