@extends('layouts/site')

@section('content')
<div id="tg-innerbanner" class="tg-innerbanner tg-haslayout tg-parallaximg" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/parallax/bgparallax-09.jpg">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <div class="tg-innerbannercontent">
                    <div class="tg-pagetitle">
                        <h1>Свяжитесь с нами</h1>
                    </div>
                    <ol class="tg-breadcrumb">
                        <li><a href="#">Главная</a></li>
                        <li class="tg-active">Контакты</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>

<main id="tg-main" class="tg-main tg-haslayout">
    <div class="container">
        <div class="row">
            <div class="tg-contactus">
                <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                    <div class="tg-sectionhead">
                        <h2><span>Есть пожелания или вопросы?</span></h2>
                        <div class="tg-description">
                            <p>Для нас очень важно ваше мнение о работе нашего портала и информации, которую мы размещаем на его страницах. Пишите нам, мы обязательно изучим ваш вопрос или пожелание в кратчайшие сроки.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-10 col-md-offset-1 col-sm-12 col-sm-offset-0 col-xs-12">
                    <form class="tg-themeform tg-formcontactus" action="{{ url('/') }}/sendmail" method="post">
                        @csrf
                        <fieldset>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control clear" placeholder="Ваше имя *">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="phone" class="form-control clear" placeholder="Телефон *">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control clear" placeholder="E-mail *">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="subject" class="form-control clear" placeholder="Тема *">
                                    </div>
                                </div>  
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <textarea name="message" placeholder="Сообщение *" class="clear"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <button type="submit" class="tg-btn">отправить</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="tg-contactmapinfo">
                    <div class="col-sm-8 col-xs-12">
                        <div class="hidden address">г. Минск, пр-т Партизанский 95</div>
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
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="tg-contactinfo">
                            <h2>Главный офис, Минск</h2>
                            <div class="tg-description">
                                <p>пр-т Партизанский 95, каб. 44</p>
                            </div>
                            <ul class="tg-address">
                                <li><i class="fa fa-envelope-o"></i><a href="mailto:test@test.com">info@belrepet.by</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection