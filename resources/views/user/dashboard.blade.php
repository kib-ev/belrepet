@extends('layouts.site')

@section('content')
<!--************************************
            Inner Banner Start
    *************************************-->
<div id="tg-innerbanner" class="tg-innerbanner tg-dashboardinnerbanner tg-haslayout tg-parallaximg" data-appear-top-offset="600" data-parallax="scroll" data-image-src="/images/parallax/bgparallax-12.jpg">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <div class="tg-innerbannercontent">
                    <div class="tg-pagehead">
                        <figure class="tg-tutordp">
                            <a href="#"><img src="/images/tutors/img-01.jpg" height="120" width="120" alt="image description"></a>
                            <figcaption>
                                <a class="tg-usericon tg-iconfeatured" href="#">
                                    <em class="tg-usericonholder">
                                        <i class="fa fa-bolt"></i>
                                        <span>featured</span>
                                    </em>
                                </a>
                                <a class="tg-usericon tg-iconvarified" href="#">
                                    <em class="tg-usericonholder">
                                        <i class="fa fa-shield"></i>
                                        <span>varified</span>
                                    </em>
                                </a>
                            </figcaption>
                        </figure>
                        <div class="tg-tutorinfo">
                            <a class="tg-btnedit" href="#"><i class="fa fa-pencil"></i></a>
                            <div class="tg-jobhead">
                                <h2>Lawrence Troutman</h2>
                                <div class="tg-subjects">Mathematics &amp; Statistics</div>
                                <ul class="tg-jobsmetadata">
                                    <li><span class="tg-stars"><span></span></span></li>
                                    <li><a href="#">1509 view</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
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
            <div id="tg-content" class="tg-content tg-dashboard tg-tutordashboard">

                @include('user/parts/sidebar')

                <div class="col-lg-9 col-md-8 col-sm-7 col-xs-12">
                    <div class="tg-pagehead">
                        <figure class="tg-tutordp">
                            <a href="#"><img src="/images/tutors/img-01.jpg" height="120" width="120" alt="image description"></a>
                            <figcaption>
                                <a class="tg-usericon tg-iconfeatured" href="#">
                                    <em class="tg-usericonholder">
                                        <i class="fa fa-bolt"></i>
                                        <span>featured</span>
                                    </em>
                                </a>
                                <a class="tg-usericon tg-iconvarified" href="#">
                                    <em class="tg-usericonholder">
                                        <i class="fa fa-shield"></i>
                                        <span>varified</span>
                                    </em>
                                </a>
                            </figcaption>
                        </figure>
                        <div class="tg-tutorinfo">
                            <a class="tg-btnedit" href="#"><i class="fa fa-pencil"></i></a>
                            <div class="tg-jobhead">
                                <h2>Lawrence Troutman</h2>
                                <div class="tg-subjects">Mathematics &amp; Statistics</div>
                                <ul class="tg-jobsmetadata">
                                    <li><span class="tg-stars"><span></span></span></li>
                                    <li><a href="#">1509 view</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tg-contentbox">
                        <div class="row">
                            <div class="col-md-8 col-sm-12 col-xs-12">
                                <h2>Новые сообщения</h2>
                                <ul class="tg-messages">
                                    <li class="th-unread">
                                        <strong>Dante Edberg: </strong>
                                        <span>Cliqua enim ad minim veniam asostrud exierat ullacoi laborisi nisi utmodo</span>
                                        <time datetime="2011-01-12">5 min ago</time>
                                    </li>
                                    <li class="th-unread">
                                        <strong>Mabelle Agostini: </strong>
                                        <span>Cliqua enim ad minim veniam asostrud exierat ullacoi laborisi nisi utmodo</span>
                                        <time datetime="2011-01-12">7 min ago</time>
                                    </li>
                                    <li class="th-unread">
                                        <strong>Ken Boros: </strong>
                                        <span>Cliqua enim ad minim veniam asostrud exierat ullacoi laborisi nisi utmodo</span>
                                        <time datetime="2011-01-12">9 min ago</time>
                                    </li>
                                    <li>
                                        <strong>Kattie Frizzell: </strong>
                                        <span>Cliqua enim ad minim veniam asostrud exierat ullacoi laborisi nisi utmodo</span>
                                        <time datetime="2011-01-12">40 min ago</time>
                                    </li>
                                    <li>
                                        <strong>Saturnina Lynch: </strong>
                                        <span>Cliqua enim ad minim veniam asostrud exierat ullacoi laborisi nisi utmodo</span>
                                        <time datetime="2011-01-12">1 year ago</time>
                                    </li>
                                </ul>
                                <a class="tg-btn tg-btn-lg" href="#">view all</a>
                            </div>
                            <div class="col-md-4 col-sm-12 col-xs-12">
                                <h2>Подписчики</h2>
                                <div class="tg-favoritesadded">
                                    <span><span>0</span>Всего Подписчиков</span>
                                    <p><strong>You're Awesome!</strong>People Like You &amp; added you in their favorites list.</p>
                                </div>
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