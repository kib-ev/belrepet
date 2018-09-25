@extends('layouts/site')

@section('content')
    <!--************************************
				Inner Banner Start
		*************************************-->
    <div id="tg-innerbanner" class="tg-innerbanner tg-haslayout tg-parallaximg" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/parallax/bgparallax-05.jpg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <div class="tg-innerbannercontent">
                        <div class="tg-pagetitle">
                            <h1>Наши репетиторы</h1>
                        </div>
                        <ol class="tg-breadcrumb">
                            <li><a href="/">Главная</a></li>
                            <li class="tg-active">Каталог</li>
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
                <div id="tg-twocolumns" class="tg-twocolumns">
                    <div class="col-lg-9 col-md-8 col-sm-7 col-xs-12 pull-right">
                        <div id="tg-content" class="tg-content">
                            <div class="tg-tutors tg-tutorsgrid">
                                
                                 <div id="map" class="tg-addressmap"></div>
                                
                                <!--<div class="tg-mapbox hidden todo">
                                    <div id="tg-map" class="tg-map"></div>
                                    <div class="tg-map-controls">
                                        <span id="doc-mapplus"><i class="fa fa-plus"></i></span>
                                        <span id="doc-mapminus"><i class="fa fa-minus"></i></span>
                                        <span id="doc-lock"><i class="fa fa-lock"></i></span>
                                    </div>

                                </div>-->
                                 
                               
                                @if ($filter->isActive && false)
                                    <div class="tg-activefilters" style="margin-bottom: 12px;">
                                    
                                    <div class="tg-filtertitle">
                                        <h2>Фильтр:</h2>
                                    </div>
                                   
                                    <div class="tg-filters">
                                        
                                        
                                        @foreach($filter->activeSubjects() as $activeSubject)
                                            <a class="tg-btnfilter" href="{{$filter->removeSubjectLink($activeSubject->id)}}">
                                                <span><i>Предмет:</i> {{$activeSubject->name}}</span>
                                            </a>
                                        @endforeach
                                        
                                        @isset($data['price'])
                                        <a class="tg-btnfilter" href="{{$filter->reduce_query(['price'])}}">
                                            <span><i>Стоимость:</i> ${{ $filter->priceFrom }} - ${{ $filter->priceTo }}</span>
                                        </a>
                                        @endisset
                                        
                                        @isset($data['gender'])
                                        <a class="tg-btnfilter" href="#">
                                            @if($data['gender'] == 'male')
                                            <span><i>Пол:</i> Мужчина</span>
                                            @elseif($data['gender'] == 'female')
                                            <span><i>Пол:</i> Женщина</span>
                                            @else
                                            <span><i>Пол:</i> Любой</span>
                                            @endif
                                        </a>
                                        @endif
                                        
                                        @isset($data['age'])
                                        <a class="tg-btnfilter" href="{{$filter->reduce_query(['age'])}}">
                                            <span><i>Возраст:</i> {{$filter->ageFrom}} - {{$filter->ageTo}}</span>
                                        </a>
                                        @endisset

                                        
                                        <a class="tg-btnclearall" href="/repetitory">Очистить</a>
                                    </div>
                                   
                                </div>
                                 @endif
                                 <div class="tg-result"><h4 style="padding: 0px;">Найдено {{$tutors->total()}} репетиторов</h4></div>
                                
                                @foreach($tutors as $user)
                                <div class="tg-tutor" data-map-address="{}">
                                    <figure class="tg-tutordp">
                                        <a href="{{$user->link()}}"><img src="{{$user->avatar()}}" height="120" width="120" alt="image description"></a>
                                        <figcaption style="opacity: 0;">
                                            <a class="tg-usericon tg-iconfeatured" href="{{$user->link()}}">
                                                <em class="tg-usericonholder">
                                                    <i class="fa fa-bolt"></i>
                                                    <span>featured</span>
                                                </em>
                                            </a>
                                            <a class="tg-usericon tg-iconvarified" href="{{$user->link()}}">
                                                <em class="tg-usericonholder">
                                                    <i class="fa fa-shield"></i>
                                                    <span>varified</span>
                                                </em>
                                            </a>
                                        </figcaption>
                                    </figure>
                                    <div class="tg-tutorinfo">
                                        <div class="tg-jobhead">
                                            <span class="tg-priceperhour">{{$user->price}}$ <em>За час</em></span>
                                            <h3><a href="{{$user->link()}}">{{$user->firstname}} {{$user->patronymic}}</a></h3>
                                            <div class="tg-subjects">{{ implode(', ',$user->subjectsArray()) }}</div>
                                            <ul class="tg-jobsmetadata">
                                                <li><span class="tg-stars"><span></span></span></li>
                                                <li><a href="#"><i class="fa fa-heart tg-like"></i></a></li>
                                                <li><a href="#">1509 view</a></li>
                                            </ul>
                                        </div>
                                        <div class="tg-description">
                                            {!! $user->about !!}
                                        </div>
                                        <div class="tg-jobfoot">
                                            <ul class="tg-tags">
                                                <li><a class="tg-tag" href="#">Accounting</a></li>
                                                <li><a class="tg-tag" href="#">Finance</a></li>
                                                <li><a class="tg-tag" href="#">Law</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                
                                {{ $tutors->links() }}

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-5 col-xs-12 pull-left">
                        <aside id="tg-sidebar" class="tg-sidebar">
                            <form class="tg-formjobsearch" method="get">
                                <fieldset>
                                    <div class="tg-widget">
                                        <div class="tg-widgettitle tg-paddingtop">
                                            <h3>Предметы</h3>
                                        </div>
                                        <div class="tg-widgetcontent">
                                            <div class="form-group">
                                                <div class="tg-filterscrollbar tg-themescrollbar tg-subjectcheckbox">
                                                    @foreach(\App\Subject::all() as $subject)
                                                        <span class="tg-checkbox">
                                                            <input type="checkbox" id="subject{{$subject->id}}" name="subject{{$subject->id}}" value="true" <?php echo $filter->isSubjectActive($subject->id) ? 'checked' : '' ?>>
                                                            <label for="subject{{$subject->id}}">{{$subject->name}}</label>
                                                        </span>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <div class="tg-widget">
                                        <div class="tg-widgettitle">
                                            <h3>Стоимость часа</h3>
                                        </div>
                                        <div class="tg-widgetcontent">
                                            <div id="tg-feerangeslider" class="tg-feerangeslider tg-themerangeslider" data-min="{{$filter->priceFrom}}" data-max="{{$filter->priceTo}}"></div>
                                            <div class="tg-amountbox">
                                                <input name="price" type="text" id="tg-feerangeamount" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                               
                                
                                <fieldset>
                                    <div class="tg-widget">
                                        <div class="tg-widgettitle">
                                            <h3>Пол</h3>
                                        </div>
                                        <div class="tg-widgetcontent">
                                            <div class="tg-genderradio">
                                                <span class="tg-radio">
                                                    <input type="radio" id="both" name="gender" value="both" checked="">
                                                    <label for="both"><span>Любой</span></label>
                                                </span>
                                                <span class="tg-radio">
                                                    <input type="radio" id="male" name="gender" value="male">
                                                    <label for="male"><span>Мужчина</span></label>
                                                </span>
                                                <span class="tg-radio">
                                                    <input type="radio" id="female" name="gender" value="female">
                                                    <label for="female"><span>Женщина</span></label>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <div class="tg-widget">
                                        <div class="tg-widgettitle">
                                            <h3>Возраст</h3>
                                        </div>
                                        <div class="tg-widgetcontent">
                                            <div class="tg-widgetcontent">
                                                <div id="tg-agerangeslider" class="tg-agerangeslider tg-themerangeslider" data-min="{{$filter->ageFrom}}" data-max="{{$filter->ageTo}}"></div>
                                                <div class="tg-amountbox">
                                                    <input name="age" type="text" id="tg-agerangeamount" readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                 <fieldset>
                                    <div class="tg-widget">
                                        <div class="tg-widgettitle">
                                            <h3>Стаж</h3>
                                        </div>
                                        <div class="tg-widgetcontent">
                                            <div id="tg-activityrangeslider" class="tg-activityrangeslider tg-themerangeslider" data-min="{{$filter->activityFrom}}" data-max="{{$filter->activityTo}}"></div>
                                            <div class="tg-amountbox">
                                                <input name="activity" type="text" id="tg-activityrangeamount" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="hidden todo">
                                    <div class="tg-widget">
                                        <div class="tg-widgettitle">
                                            <h3>Language</h3>
                                        </div>
                                        <div class="tg-widgetcontent">
                                            <div class="tg-filterscrollbar tg-themescrollbar tg-languagesradio">
													<span class="tg-radio">
														<input type="radio" id="all" name="language" value="all" checked="">
														<label for="all"><span>all</span><i>(389)</i></label>
													</span>
                                                <span class="tg-radio">
														<input type="radio" id="eng" name="language" value="english">
														<label for="eng"><span>english</span><i>(256)</i></label>
													</span>
                                                <span class="tg-radio">
														<input type="radio" id="arabic" name="language" value="arabic">
														<label for="arabic"><span>Arabic</span><i>(56)</i></label>
													</span>
                                                <span class="tg-radio">
														<input type="radio" id="czech" name="language" value="czech">
														<label for="czech"><span>czech</span><i>(43)</i></label>
													</span>
                                                <span class="tg-radio">
														<input type="radio" id="danish" name="language" value="danish">
														<label for="danish"><span>danish</span><i>(38)</i></label>
													</span>
                                                <span class="tg-radio">
														<input type="radio" id="chinese" name="language" value="chinese">
														<label for="chinese"><span>Chinese</span><i>(389)</i></label>
													</span>
                                                <span class="tg-radio">
														<input type="radio" id="french" name="language" value="french">
														<label for="french"><span>French</span><i>(256)</i></label>
													</span>
                                                <span class="tg-radio">
														<input type="radio" id="german" name="language" value="german">
														<label for="german"><span>German</span><i>(56)</i></label>
													</span>
                                                <span class="tg-radio">
														<input type="radio" id="portuguese" name="language" value="portuguese">
														<label for="portuguese"><span>Portuguese</span><i>(43)</i></label>
													</span>
                                                <span class="tg-radio">
														<input type="radio" id="romanian" name="language" value="romanian">
														<label for="romanian"><span>Romanian</span><i>(38)</i></label>
													</span>
                                                <span class="tg-radio">
														<input type="radio" id="dutch" name="language" value="dutch">
														<label for="dutch"><span>Dutch</span><i>(389)</i></label>
													</span>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="hidden todo">
                                    <div class="tg-widget">
                                        <div class="tg-widgettitle">
                                            <h3>Time Slots</h3>
                                        </div>
                                        <div class="input-group tg-timepicker">
                                            <input id="tg-timepicker1" type="text" class="form-control input-small" placeholder="From">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                                        </div>
                                        <div class="input-group tg-timepicker">
                                            <input id="tg-timepicker2" type="text" class="form-control input-small" placeholder="T0">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                                        </div>
                                        <div class="tg-widgetcontent">
                                            <div class="tg-timeslotradio">
													<span class="tg-radio">
														<input type="radio" id="timeslotone" name="timeslot" value="all" checked="">
														<label for="timeslotone">All</label>
													</span>
                                                <span class="tg-radio">
														<input type="radio" id="timeslottwo" name="timeslot" value="10:00 - 11:00">
														<label for="timeslottwo">10:00 - 11:00</label>
													</span>
                                                <span class="tg-radio">
														<input type="radio" id="timeslotthree" name="timeslot" value="11:00 - 12:00">
														<label for="timeslotthree">11:00 - 12:00</label>
													</span>
                                                <span class="tg-radio">
														<input type="radio" id="timeslotfour" name="timeslot" value="12:00 - 13:00">
														<label for="timeslotfour">12:00 - 13:00</label>
													</span>
                                                <span class="tg-radio">
														<input type="radio" id="timeslotfive" name="timeslot" value="13:00 - 14:00">
														<label for="timeslotfive">13:00 - 14:00</label>
													</span>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                               <fieldset>
                                    <div class="tg-widget">
                                        <div class="tg-widgetcontent">
                                            <input style="width: 100%;" type="submit" value="Показать" class="tg-btn">
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
        
        {{-- MY CODE --}}
        @foreach($tutorsAll->get() as $tutor)
            @if($tutor->mapAddress())
                <div class="hidden adress">{{$tutor->mapAddress()}}</div>
            @endif
        @endforeach 
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://api-maps.yandex.ru/2.0-stable/?load=package.standard&lang=ru-RU" type="text/javascript"></script>
        
        <script type="text/javascript">
            $(document).ready(function() {
                ymaps.ready(init);
                var myMap;
                var adreses = [];
                $('.adress').each(function() {
                    if ($(this).text()) {
                        adreses.push($(this).text());
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
                    
                    hello();
                }
                
                function hello() {
                    adreses.map(value => {
                        console.log(value);
                        ymaps.geocode(value).then(function (res) {  
                            myMap.geoObjects.add(res.geoObjects.get(0));
                        });
                    });
                }
            });
        </script>
        
        
    </main>
    <!--************************************
            Main End
    *************************************-->

@endsection