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
                <div class="col-md-12 col-sm-12 col-xs-12 nopadding">

                    <div class="col-md-8 col-sm-12 col-xs-12">
                        <div class="blog-post">
                            <div class="post-img">
                                <img src="{{url('resources/assets/images/blog/1.jpg')}}" alt="" class="img-responsive">
                            </div>
                            <div class="blog-single">
                                <div class="post-info">
                                    <a href="">August 30, 2016</a>
                                    <a href="#">23 comments</a>
                                </div>
                                <h3 class="post-title">
                                    Sketch Designing Artists are beauty: A report
                                </h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam neque tempora odit atque repellat est molestiae perferendis.Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                                </p>
                                <p>
                                    Lesed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in repreh. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt incididunt ut labore et d mollit anim id est laborum.
                                </p>
                                <blockquote>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis maxime, perferendis nostrum. Repellat nobis aperiam rerum in modi, ea, minus nemo consequuntur. Nemo, error aliquam accusamus nisi, ratione quaerat veritatis!
                                </blockquote>
                                <p>
                                    Lesed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in repreh. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt incididunt ut labore et d mollit anim id est laborum.
                                </p>
                                <div class="tagcloud">
                                    <i class="fa fa-tags"></i>
                                    <a href="#">#food</a>
                                    <a href="#">#gedgets</a>
                                    <a href="#">#news</a>
                                    <a href="#">#fair</a>
                                    <a href="#">#politics</a>
                                    <a href="#">#technology</a>
                                </div>
                            </div>
                        </div>
                        <div class="heading"><span class="title">Coments (45)</span></div>
                        <div class="comments-container ">
                            <ul>
                                <li class="comment-box">
                                    <div class="col-md-2 col-sm-3 col-xs-3 comment-author-image hidden-xs">
                                        <img src="images/users/1.jpg" class="img-circle img-responsive" alt="Blog Comments Image 1">
                                    </div>
                                    <div class="col-md-10 col-sm-9 col-xs-12">
                                        <h4>Alexander Mahone</h4>
                                        <div class="news-date"> February 12, 2016</div>
                                        <p>Maecenas faucibus mollis interdum. Aenean lacinia bibendum nulla sed consectetur. Vestibulum id ligula porta felis euismod semper.</p>
                                        <div class="comment-reply">
                                            <h6><a href="#" class="active-color">Reply</a></h6>
                                        </div>
                                    </div>
                                </li>
                                <li class="comment-box">
                                    <div class="col-md-2 col-sm-3 col-xs-3 comment-author-image hidden-xs">
                                        <img src="images/users/2.jpg" class="img-circle img-responsive" alt="">
                                    </div>
                                    <div class="col-lmd-10 col-sm-9 col-xs-12">
                                        <h4>Alexander Mahone</h4>
                                        <div class="news-date"> February 15, 2016</div>
                                        <p>Maecenas faucibus mollis interdum. Aenean lacinia bibendum nulla sed consectetur. Vestibulum id ligula porta felis euismod semper.</p>
                                        <div class="comment-reply">
                                            <h6><a href="#" class="active-color">Reply</a></h6>
                                        </div>
                                    </div>
                                </li>
                                <li class="comment-box">
                                    <div class="col-md-2 col-sm-3 col-xs-3 hidden-xs">
                                        <img src="images/users/1.jpg" class="img-circle img-responsive" alt="Blog Comments Image 1">
                                    </div>
                                    <div class="col-lmd-10 col-sm-9 col-xs12">
                                        <h4>Alexander Mahone</h4>
                                        <div class="news-date"> February 12, 2016</div>
                                        <p>Maecenas faucibus mollis interdum. Aenean lacinia bibendum nulla sed consectetur. Vestibulum id ligula porta felis euismod semper.</p>
                                        <div class="comment-reply">
                                            <h6><a href="#write-comment" class="active-color">Reply</a></h6>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="commentform">
                                <form class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label>Comment <span class="required">*</span></label>
                                            <textarea cols="6" rows="8" placeholder="" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Name <span class="required">*</span></label>
                                            <input type="text" placeholder="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Email <span class="required">*</span></label>
                                            <input type="email" placeholder="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <button class="btn btn-default pull-right"> Publish Comment <i class="fa fa-angle-right"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <aside>
                            <div class="widget">
                                <div class="search-blog">
                                    <div class="input-group stylish-input-group">
                                        <input type="text" class="form-control" placeholder="Search">
                                            <span class="input-group-addon">
                                                 <button type="submit"> <span class="fa fa-search"></span> </button>
                                            </span>
                                    </div>
                                </div>
                            </div>
                            <div class="widget">
                                <div class="widget-heading"><span class="title">Hot Categories</span></div>
                                <ul class="categories-module">
                                    <li> <a href=""> Computer and IT <span>(1021)</span> </a> </li>
                                    <li> <a href=""> Construction / Facilities <span>(54)</span> </a> </li>
                                    <li> <a href=""> Telecommunications<span>(13)</span> </a> </li>
                                    <li> <a href=""> Real Estate<span>(23)</span> </a> </li>
                                    <li> <a href=""> Healthcare <span>(42)</span> </a> </li>
                                </ul>
                            </div>
                            <div class="widget">
                                <div class="widget-heading"><span class="title">Dernières articles</span></div>
                                <ul class="related-post">
                                    <li>
                                        <a href="#">Assistant Manager Procurement </a>
                                        <span><i class="fa fa-calendar"></i>March 22, 2015 </span>
                                    </li>
                                </ul>
                            </div>

                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection