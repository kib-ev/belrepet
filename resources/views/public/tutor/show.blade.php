@extends('layouts.site')

@section('content')
<div id="tg-innerbanner" class="tg-innerbanner tg-haslayout tg-parallaximg" data-appear-top-offset="600" data-parallax="scroll" data-image-src="/images/parallax/bgparallax-12.jpg">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <div class="tg-innerbannercontent">
                    <div class="tg-jobhead">
                        <span class="tg-priceperhour">{{ $user->price}}$ <em>За час</em></span>
                        <h1>{{ $user->firstname}} {{ $user->patronymic}}</h1>
                        <span class="tg-tutioncategory">{{ implode(', ',$user->subjectsArray()) }}</span>
                        <ul class="tg-jobsmetadata todo" style="opacity: 0;">
                            <li><span class="tg-stars"><span></span></span></li>
                            <li><a href="#"><i class="fa fa-heart tg-like"></i></a></li>
                            <li><a href="#">1509 view</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<main id="tg-main" class="tg-main tg-haslayout">
    <div class="container">
        <div class="row">
            <div id="tg-content" class="tg-content">
                <div class="tg-detailpage tg-tutordetail">
                    <div class="col-lg-3 col-md-4 col-sm-5 col-xs-12">
                        <div class="tg-widget tg-widgettutionimage">
                            <div class="tg-widgetcontent">
                                <figure class="tg-tuitioncenterdp">
                                    <img src="{{$user->avatar()}}" alt="image description">
                                    <figcaption class="hidden todo">
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
                            </div>
                        </div>
                        <div class="tg-widget tg-widgetcontact hidden todo">
                            <div class="tg-widgettitle">
                                <h3>Контакты</h3>
                            </div>
                            <div class="tg-widgetcontent">
                                <ul class="tg-address">
                                    <li><i class="fa fa-envelope-o"></i><a href="mailto:{{$user->email}}">{{$user->email}}</a></li>
                                    <li><i class="fa fa-phone"></i><a href="tel:{{$user->phone}}">{{$user->phone}}</a></li>
                                    <!--<li><i class="fa fa-fax"></i><a href="mailto:test@test.com">+14 1234 45678</a></li>-->
                                    @if(isset($user->skype))
                                    <li><i class="fa fa-skype"></i><a href="skype:{{$user->skype}}">{{$user->skype}}</a></li>
                                    @endif

                                    @if(isset($user->site))
                                    <li><i class="fa fa-link"></i><a href="{{$user->site}}">{{$user->site}}</a></li>
                                    @endif
                                </ul>
                                <ul class="tg-socialicons hidden todo">
                                    <li class="tg-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class="tg-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li class="tg-linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li class="tg-googleplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li class="tg-rss"><a href="#"><i class="fa fa-rss"></i></a></li>
                                </ul>
                                <a href="#" class="tg-btn hidden todo">get direction</a>
                            </div>
                        </div>
                        @if($user->birth != '')
                        <div class="tg-widget tg-widgetacadmeyurl">


                            <div class="tg-widgettitle">
                                <h3>Возраст</h3>
                            </div>
                            <div class="tg-widgetcontent">
                                {{ \App\Helpers\AgeHelper::ageToStr(date("Y", time()) - date("Y",strtotime($user->birth))) }}
                            </div>

                        </div>
                        @endif
                        @if(isset($user->activity_from))
                        <div class="tg-widget tg-widgetacadmeyurl">
                            <div class="tg-widgettitle">
                                <h3>Стаж работы</h3>
                            </div>
                            <div class="tg-widgetcontent">
                                {{ \App\Helpers\AgeHelper::ageToStr(date("Y", time()) - $user->activity_from) }}
                            </div>
                        </div>
                        @endif

                        <div class="tg-widget tg-widgetacadmeyurl">
                            <div class="tg-widgettitle">
                                <h3>Cсылка на страницу</h3>
                            </div>
                            <div class="tg-widgetcontent">
                                <a href="//belrepet.by/repetitor/{{$user->id}}"><i class="fa fa-link"></i><em>belrepet.by/repetitor/{{$user->id}}</em></a>
                            </div>
                        </div>
                        <div class="tg-widget tg-widgetschedule hidden todo">
                            <div class="tg-widgettitle">
                                <h3></h3>
                            </div>
                            <div class="tg-widgetcontent">
                                <ul>
                                    <li><a href="#">sunday<em>day off</em></a></li>
                                    <li><a href="#">monday<em>09:00 - 17:00</em></a></li>
                                    <li><a href="#">tuesday<em>09:00 - 17:00</em></a></li>
                                    <li><a href="#">wednesday<em>09:00 - 17:00</em></a></li>
                                    <li><a href="#">thursday<em>(09:00 - 17:00</em></a></li>
                                    <li><a href="#">friday<em>09:00 - 17:00</em></a></li>
                                    <li><a href="#">saturday<em>09:00 - 17:00</em></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="tg-widget tg-widgetformcontact hidden todo">
                            <div class="tg-widgettitle">
                                <h3>Contact Now</h3>
                            </div>
                            <div class="tg-widgetcontent">
                                <form class="tg-themeform tg-formcontactus">
                                    <fieldset>
                                        <div class="form-group">
                                            <input type="text" name="text" class="form-control" placeholder="Full Name *">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="mobile" class="form-control" placeholder="Mobile *">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="Your Email *">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="subject" class="form-control" placeholder="Subject *">
                                        </div>
                                        <div class="form-group">
                                            <textarea placeholder="Message *"></textarea>
                                        </div>
                                        <button type="submit" class="tg-btn">send now</button>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                        <div class="tg-widget tg-widgetsocial">
                            <div class="tg-widgettitle">
                                <h3>Поделиться</h3>
                            </div>
                            <div class="tg-widgetcontent">
                                <ul class="tg-socialicons">
                                    <li class="tg-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class="tg-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li class="tg-linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li class="tg-googleplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li class="tg-rss"><a href="#"><i class="fa fa-rss"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="tg-widget tg-widgetclaimreport hidden todo">
                            <div class="tg-widgettitle">
                                <h3>Claim/Report This User</h3>
                            </div>
                            <div class="tg-widgetcontent">
                                <div id="tg-filterscrollbar" class="tg-filterscrollbar tg-themescrollbar tg-languagesradio mCustomScrollbar _mCS_1"><div id="mCSB_1" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: none;" tabindex="0"><div id="mCSB_1_container" class="mCSB_container" style="position:relative; top:0; left:0;" dir="ltr">
                                            <span class="tg-radio">
                                                <input type="radio" id="all" name="language" value="all" checked="">
                                                <label for="all">Consectetur adipisicing elit</label>
                                            </span>
                                            <span class="tg-radio">
                                                <input type="radio" id="eng" name="language" value="english">
                                                <label for="eng">Eiusmod tempor incididunt labore dolore magna?</label>
                                            </span>
                                            <span class="tg-radio">
                                                <input type="radio" id="arabic" name="language" value="arabic">
                                                <label for="arabic">Ut enim ad minim veniam</label>
                                            </span>
                                            <span class="tg-radio">
                                                <input type="radio" id="czech" name="language" value="czech">
                                                <label for="czech">Nostrud exercitation ullamco</label>
                                            </span>
                                            <span class="tg-radio">
                                                <input type="radio" id="danish" name="language" value="danish">
                                                <label for="danish">Laboris nisi ut aliquip</label>
                                            </span>
                                            <span class="tg-radio">
                                                <input type="radio" id="chinese" name="language" value="chinese">
                                                <label for="chinese">Nostrud exercitation ullamco</label>
                                            </span>
                                            <span class="tg-radio">
                                                <input type="radio" id="french" name="language" value="french">
                                                <label for="french">Ut enim ad minim veniam</label>
                                            </span>
                                        </div><div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: block;"><div class="mCSB_draggerContainer"><div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; display: block; height: 68px; max-height: 115px; top: 0px;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div>
                                <div class="form-group">
                                    <textarea placeholder="Report Detail"></textarea>
                                </div>
                                <button class="tg-btn" type="submit">report now</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8 col-sm-7 col-xs-12">
                        <div class="tg-jobhead">
                            <span class="tg-priceperhour">{{ $user->price}}$ <em>За час</em></span>
                            <h1>{{ $user->firstname}} {{ $user->patronymic}}</h1>
                            <span class="tg-tutioncategory">{{ implode(', ',$user->subjectsArray()) }}</span>
                            <ul class="tg-jobsmetadata todo" style="opacity: 0;">
                                <li><span class="tg-stars"><span></span></span></li>
                                <li><a href="#"><i class="fa fa-heart tg-like"></i></a></li>
                                <li><a href="#">1509 view</a></li>
                            </ul>
                        </div>
                        <div class="hidden address">{{ $user->mapAddress() }}</div>
                        <div id="map" class="tg-jobsmap" style="position: relative; overflow: hidden;"></div>
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                        <script src="https://api-maps.yandex.ru/2.0-stable/?load=package.standard&lang=ru-RU" type="text/javascript"></script>    
                        <script type="text/javascript">
                            $(document).ready(function() {
                                ymaps.ready(init);
                                var myMap;
                                var address = [];
                                $('.address').each(function() {
                                    if ($(this).text()) {
                                        address.push($(this).text());
                                    }
                                });


                                function init() {     
                                    myMap = new ymaps.Map ("map", {
                                        center: [53.9, 27.56678],
                                        zoom: 10
                                    });

                                    var currentLocation = [ymaps.geolocation.latitude, ymaps.geolocation.longitude];
                                    var geoInfo = {
                                        balloonContentHeader: ymaps.geolocation.country,
                                        balloonContent: ymaps.geolocation.city,
                                        balloonContentFooter: ymaps.geolocation.region
                                    };

                                    myMap.controls.add(
                                        new ymaps.control.ZoomControl()
                                    );

                                    addToMap();
                                }

                                function addToMap() {
                                    address.map(value => {
                                        console.log(value);
                                        ymaps.geocode(value).then(function (res) {  
                                            myMap.geoObjects.add(res.geoObjects.get(0));
                                        });
                                    });
                                }
                            });
                        </script>
                        
                        
                        <div class="tg-contentbox">
                            <h2>Образование</h2>
                            {!! $user->education !!}
                        </div>
                        <div class="tg-contentbox">
                            <h2>Предметы</h2>
                            <div class="tg-description">
                                <ul>
                                @foreach($user->subjects()->get() as $subject)
                                    <li>{!! $subject->name !!}</li>
                                @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="tg-contentbox">
                            <h2>О занятиях</h2>
                            <div class="tg-description">
                                {!! $user->about !!}
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection