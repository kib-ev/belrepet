@extends('layouts.site')

@section('content')
<!--************************************
            Inner Banner Start
    *************************************-->
<div id="tg-innerbanner" class="tg-innerbanner tg-haslayout tg-parallaximg" data-appear-top-offset="600" data-parallax="scroll" data-image-src="{{ url('/images/parallax/bgparallax-05.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <div class="tg-innerbannercontent">
                    <div class="tg-pagetitle">
                        <h1>{{ $post->name }}</h1>
                    </div>
                    <ol class="tg-breadcrumb">
                        <li><a href="/">Главная</a></li>
                        <li class="tg-active">Новости</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<!--************************************
        Inner Banner End
*************************************-->
<!--************************************
        Main Start
*************************************-->
<main id="tg-main" class="tg-main tg-haslayout">
    <div class="container">
        <div class="row">
            <div id="tg-content" class="tg-content">
                <div class="tg-newsdetail">
                    <div class="col-sm-12">
                        <figure class="tg-newsdetail-img"><img src="{{ $post->image }}" alt="{{ $post->name }}"></figure>
                    </div>
                    <div class="col-lg-9 col-md-8 col-sm-7 col-xs-12">
                        <article class="tg-postsingle">
                            <div class="tg-postcontent">
                                <div class="tg-posttitle">
                                    <h3>{{ $post->name }}</h3>
                                </div>
                                <ul class="tg-metadata">
                                    <li>
                                        <time datetime="{{date('Y-m-d', strtotime($post->created_at))}}">
                                            <em>Опубликовано: </em>
                                            <span class="datetime">{{date('d.m.Y', strtotime($post->created_at))}}</span>
                                        </time>
                                    </li>
                                </ul>
                                <div class="tg-description">
                                    {!! $post->content !!}
                                </div>
                                <div class="tg-tagssocial">
                                    <ul class="tg-tags">
                                        @foreach(explode(',', $post->tags) as $tag)
                                        <li><a class="tg-tag" href="#">{{ trim($tag) }}</a></li>
                                        @endforeach
                                    </ul>
                                    
                                    <ul class="tg-socialicons">
                                        <li class="tg-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li class="tg-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li class="tg-linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li class="tg-googleplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li class="tg-rss"><a href="#"><i class="fa fa-rss"></i></a></li>
                                    </ul>
                                    <span style="float: right;">Поделиться</span>
                                </div>
                            </div>
                            <div class="tg-author hidden todo">
                                <figure class="tg-authorimg"><img src="/images/author-img.jpg" alt="author image"></figure>
                                <div class="tg-authorcontent">
                                    <div class="tg-authorhead">
                                        <div class="tg-authorname">
                                            <h3>Dante Edberg</h3>
                                            <time datetime="2016-10-10">2 days ago</time>
                                        </div>
                                        <ul class="tg-socialicons">
                                            <li class="tg-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li class="tg-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li class="tg-linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="tg-description">
                                        <p>Cliqua enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip exmmodo consequat irure dolor in reprehenderit in voluptate sint occaecat cupidatat non proident.</p>
                                    </div>
                                </div>
                            </div>
                            <div id="tg-comments" class="tg-comments hidden todo">
                                <h2>03 Comments</h2>
                                <ul class="tg-comment">
                                    <li>
                                        <div class="tg-commenter">
                                            <figure class="tg-commenterimg">
                                                <img src="/images/avatar/avatarimg-01.jpg" alt="commenter image">
                                            </figure>
                                            <div class="tg-commenterinfo">
                                                <div class="tg-authorhead">
                                                    <div class="tg-authorname">
                                                        <h3><a href="#">Dante Edberg</a></h3>
                                                        <time datetime="2016-10-10">2 days ago</time>
                                                    </div>
                                                </div>
                                                <div class="tg-description">
                                                    <p>Cliqua enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip exmmodo consequat irure dolor in reprehenderit in voluptate sint occaecat cupidatat non proident.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tg-commenter">
                                            <figure class="tg-commenterimg">
                                                <img src="/images/avatar/avatarimg-02.jpg" alt="commenter image">
                                            </figure>
                                            <div class="tg-commenterinfo">
                                                <div class="tg-authorhead">
                                                    <div class="tg-authorname">
                                                        <h3><a href="#">Dante Edberg</a></h3>
                                                        <time datetime="2016-10-10">2 days ago</time>
                                                    </div>
                                                </div>
                                                <div class="tg-description">
                                                    <p>Cliqua enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip exmmodo consequat irure dolor in reprehenderit in voluptate sint occaecat cupidatat non proident.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tg-commenter">
                                            <figure class="tg-commenterimg">
                                                <img src="/images/avatar/avatarimg-03.jpg" alt="commenter image">
                                            </figure>
                                            <div class="tg-commenterinfo">
                                                <div class="tg-authorhead">
                                                    <div class="tg-authorname">
                                                        <h3><a href="#">Dante Edberg</a></h3>
                                                        <time datetime="2016-10-10">2 days ago</time>
                                                    </div>
                                                </div>
                                                <div class="tg-description">
                                                    <p>Cliqua enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip exmmodo consequat irure dolor in reprehenderit in voluptate sint occaecat cupidatat non proident.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="tg-leavereviews hidden todo">
                                <h2>Leave Your Review</h2>
                                <form class="tg-themeform tg-formleavecomment">
                                    <fieldset>
                                        <div class="form-group">
                                            <textarea placeholder="Comment *"></textarea>
                                        </div>
                                        <button class="tg-btn" type="submit">Submit Review</button>
                                    </fieldset>
                                </form>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-5 col-xs-12">
                        <div class="tg-widget tg-widgetsearch todo hidden">
                            <form class="tg-searcharea">
                                <fieldset>
                                    <div class="form-group">
                                        <input type="search" name="search" class="form-control" placeholder="Search Here">
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                        <div class="tg-widget tg-widgetcatagories hidden todo">
                            <div class="tg-widgettitle">
                                <h3>Categories</h3>
                            </div>
                            <div class="tg-widgetcontent">
                                <div id="tg-filterscrollbar" class="tg-filterscrollbar tg-themescrollbar tg-subjectcheckbox mCustomScrollbar _mCS_1"><div id="mCSB_1" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: none;" tabindex="0"><div id="mCSB_1_container" class="mCSB_container" style="position:relative; top:0; left:0;" dir="ltr">
                                            <ul>
                                                <li><a href="#">Lorem Ipsum<em>(385)</em></a></li>
                                                <li><a href="#">Consectetur adipisicing<em>(256)</em></a></li>
                                                <li><a href="#">Elit eiusmod<em>(56)</em></a></li>
                                                <li><a href="#">Tempor incididunt<em>(46)</em></a></li>
                                                <li><a href="#">Labore et dolore<em>(335)</em></a></li>
                                                <li><a href="#">Consectetur adipisicing<em>(256)</em></a></li>
                                                <li><a href="#">Elit eiusmod<em>(56)</em></a></li>
                                                <li><a href="#">Lorem Ipsum<em>(385)</em></a></li>
                                            </ul>
                                        </div><div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: block;"><div class="mCSB_draggerContainer"><div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; display: block; height: 76px; max-height: 115px; top: 0px;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div>
                            </div>
                        </div>
                        <div class="tg-widget tg-widgetrecentpost">
                            <div class="tg-widgettitle">
                                <h3>Последние публикации</h3>
                            </div>
                            <div class="tg-widgetcontent">
                                <ul>
                                    
                                    @foreach($posts as $item)
                                    <li>
                                        <div class="tg-description">
                                            <p><a href="{{$item->slug}}">{{$item->title}}</a></p>
                                        </div>
                                        <time datetime="{{date('Y-m-d', strtotime($item->created_at))}}">{{date('d.m.Y', strtotime($item->created_at))}}</time>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!--************************************
        Main End
*************************************-->

@endsection