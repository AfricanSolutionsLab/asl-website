@extends('template')

@section('content')

    <section class="job-breadcrumb" {{--style="background-image: url('{{url('resources/assets/images/slider/1.jpg')}}')"--}}>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-7 co-xs-12 text-left">
                    <h3>Blog</h3>
                </div>
                <div class="col-md-6 col-sm-5 co-xs-12 text-right">
                    <div class="bread">
                        <ol class="breadcrumb">
                            <li><a href="#">Accueil</a> </li>
                            <li class="active">Blog</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="categories-list-page light-grey">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">

                    <div class="col-md-8 col-sm-12 col-xs-12">
                        <?php
                        date_default_timezone_set('Africa/Libreville');
                        setlocale(LC_TIME, 'fr_FR.utf8','fra');
                        ?>
                        <div id="posts-masonry" class="posts-masonry">
                            @foreach($articles as $article)
                                <?php
                                    $image=$article->images[0];
                                ?>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="blog-post">
                                    <div class="post-img">
                                        <a href="">
                                            <img src="{{url($image->link)}}" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="post-info">
                                        <a href="">Publié le {{strftime("%A %d %B %Y", strtotime($article->created_at))}}</a>
                                        <a href="#">{{$article->countComments()}} commentaires</a>
                                    </div>
                                    <h3 class="post-title">
                                        <a href="#">
                                            {{$article->titre}}
                                        </a>
                                    </h3>
                                    <p class="post-excerpt">
                                        {{$article->resume}}
                                    </p>
                                </div>
                            </div>
                                @endforeach
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                            <div class="pagination-box clearfix">
                                {{$articles->links()}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <aside>
                            <div class="widget">
                                <div class="widget-heading"><span class="title">Categories populaire</span></div>
                                <ul class="categories-module">
                                    @foreach($categories as $c)
                                        <li> <a href="{{url($c->slug.'/articles')}}">{{$c->libelle}}</a> </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="widget">
                                <div class="widget-heading"><span class="title">Dernières articles</span></div>
                                <ul class="related-post">
                                    @foreach(\App\Article::listePaginate(3) as  $article)
                                        <?php
                                        $image=$article->images[0];
                                        ?>
                                    <li>
                                        <div class="col-sm-4">
                                            <img class="img-responsive" src="{{url($image->link)}}" alt="" />
                                        </div>
                                        <div class="col-sm-8">
                                            <a href="#" style="font-size: 12px">{{$article->titre}}</a>
                                            <span style="font-size: 11px"><i class="fa fa-calendar"></i>{{strftime("%A %d %B %Y", strtotime($article->created_at))}}</span>
                                        </div>

                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection