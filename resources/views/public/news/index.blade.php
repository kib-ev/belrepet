@extends('layouts.site')

@section('content')
<!--************************************
            Inner Banner Start
    *************************************-->
<div id="tg-innerbanner" class="tg-innerbanner tg-haslayout tg-parallaximg" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/parallax/bgparallax-07.jpg">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <div class="tg-innerbannercontent">
                    <div class="tg-pagetitle">
                        <h1>Новости</h1>
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
                <div class="col-sm-12 col-xs-12">
                    <div class="tg-sectionhead">
                        <h2><span>Последние новости</span></h2>
                    </div>
                </div>
                <div class="tg-blogpost tg-blogposgrid">
                    
                    @foreach($news as $item)
                    <div class="col-sm-6 col-xs-12">
                        <article class="tg-post">
                            <figure class="tg-postimg"><a href="/novosti/{{$item->slug}}"><img src="{{$item->preview}}" alt="image description"></a></figure>
                            <div class="tg-postcontent">
                                <div class="tg-posttitle">
                                    <h3><a href="/novosti/{{$item->slug}}">{{$item->name}}</a></h3>
                                </div>
                                <ul class="tg-metadata">
                                    <li>
                                        <time datetime="{{date('Y-m-d', strtotime($item->created_at))}}">
                                            <em>Опубликовано: </em>
                                            <a href="/novosti/{{$item->slug}}">{{date('d.m.Y', strtotime($item->created_at))}}</a>
                                        </time>
                                    </li>
                                </ul>
                                <div class="tg-description">
                                    {!! $item->excerpt !!}
                                </div>
                            </div>
                        </article>
                    </div>
                    @endforeach
                </div>
                <div class="col-sm-12 col-xs-12 hidden todo">
                    <nav class="tg-pagination">
                        <ul>
                            <li class="tg-prevpage"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li class="tg-active"><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>...</li>
                            <li><a href="#">10</a></li>
                            <li class="tg-nextpage"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</main>
<!--************************************
        Main End
*************************************-->

@endsection