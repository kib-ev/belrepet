@extends('layouts/site')

@section('content')
    
@include('user/parts/innerbanner')

<!--************************************
        Main Start
*************************************-->

<main id="tg-main" class="tg-main tg-haslayout">
    <div class="container">
        <div class="row">
            <div id="tg-content" class="tg-content tg-dashboard tg-tutordashboard">

                @include('user/parts/sidebar')

                <div class="col-lg-9 col-md-8 col-sm-7 col-xs-12">
                    
                    @include('user/parts/tg-pagehead', $user)

                    <div class="tg-alertmessages">
                        @if($errors)
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-success tg-alertmessage fade in">
                                    <!-- <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a> -->
                                    <i class="fa fa-check"></i>
                                    <span><strong>Сохранено.</strong> Ваш профиль отправлен на модерацию. Обычно это занимает не более 48 часов.</span>
                                </div>
                                <!-- <div>{{ $error }}</div> -->
                            @endforeach
                        @endif
                    </div>

                    <form id="profile-form" action="" method="post" class="tg-formtheme" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="{{ $user->id }}" autocomplete="off">
                        
                        {{ csrf_field() }}
                         
                        <fieldset>
                            <div class="row">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <h4>Загрузить фото (270 на 270 пикселей)</h4>
                                        <input type="file" name="avatar" id="load_img" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    
                        <fieldset>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <h4>Личная информация</h4>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <input type="text" name="firstname" class="form-control" placeholder="Имя" value="{{ $user->firstname }}" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <input type="text" name="lastname" class="form-control" placeholder="Фамилия" value="{{ $user->lastname }}" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <input type="text" name="patronymic" class="form-control" placeholder="Отчество" value="{{ $user->patronymic }}" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
											<span class="tg-select">
												<select name="gender" class="form-control">
                                                    <option value="">Пол</option>
													<option value="male" {{$user->gender == 'male' ? 'selected' : ''}}>Мужчина</option>
													<option value="famale" {{$user->gender == 'famale' ? 'selected' : ''}}>Женщина</option>
												</select>
											</span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <input type="text" name="birth" class="form-control" placeholder="Дата рождения: 30-01-1970" value="{{$user->birth}}" autocomplete="off">
                                    </div>
                                </div>
                                
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Email *" value="{{$user->email}}" disabled="" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <input type="text" name="phone" class="form-control" placeholder="Моб. телефон *" value="{{$user->phone}}" autocomplete="off">
                                    </div>
                                </div>
                                
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <input type="text" name="skype" class="form-control" placeholder="Skype" value="{{$user->skype}}" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <input type="text" name="site" class="form-control" placeholder="Сайт" value="{{$user->site}}" autocomplete="off">
                                    </div>
                                </div>
                               
                            </div>
                        </fieldset>
                        
                        <fieldset>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <h4>Адрес</h4>
                                </div>
                                <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
											<span class="tg-select">
												<select name="country">
													<option>Беларусь</option>
												</select>
											</span>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="region" placeholder="Область, район" value="{{$user->region}}" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <input type="text" name="city" class="form-control" placeholder="Населенный пункт" value="{{$user->city}}" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <input type="text" name="street" class="form-control" placeholder="Улица" value="{{$user->street}}" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <input type="text" name="house" class="form-control" placeholder="Номер дома" value="{{$user->house}}" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <input type="text" name="apatment" class="form-control" placeholder="Номер офиса, квартиры" value="{{$user->apatment}}" autocomplete="off">
                                    </div>
                                </div>
                                <?php /*
                                <div class="col-md-6 col-sm-12 col-xs-12 hidden todo">
                                    <div class="form-group">
											<span class="tg-geolocationicon">
												<input type="text" name="geolocation" class="form-control" placeholder="Geo Location">
											</span>
                                    </div>
                                </div>
                                 */?>
                                <div class="col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <div id="map" class="tg-addressmap"></div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        
                        @if($user->joinas == 'tutor')
                        <fieldset>
                            <div class="row">
                                 <div class="col-sm-12 col-xs-12">
                                    <h4>Образование</h4>
                                </div>
                                <div class="col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <textarea name="education" class="form-control editor" placeholder="Образование и должность">{{$user->education}}</textarea>
                                    </div>
                                </div>
                                 <div class="col-sm-12 col-xs-12">
                                    <h4>Год начала деятельности (стаж)</h4>
                                </div>
                                <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <input type="text" name="activity_from" class="form-control" placeholder="Например: 2005" value="{{$user->activity_from}}" autocomplete="off">
                                    </div>
                                </div>
                                <div class="clear"></div>
                                
                                 <div class="col-sm-12 col-xs-12">
                                    <h4>Предметы</h4>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        
                                        @foreach(\App\Entry::where('reference_id', '1')->get() as $subject)
                                        <input type="checkbox" <?php echo (in_array($subject->id, explode(';', $user->subjects))) ? 'checked' : ''; ?> name="subjects[]" value="{{$subject->id}}" id="subject1"><label for="subject{{$subject->id}}">{{$subject->name}}</label><br>
                                        @endforeach
											
                                    </div>
                                </div>
                                
                                 <div class="col-sm-12 col-xs-12">
                                    <h4>Стоимость академического часа (45 мин)</h4>
                                </div>
                                 <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group tg-inputplusselect">
                                        <input type="text" name="price" class="form-control" placeholder="Например: 10" value="{{$user->price}}">
                                        <span class="tg-select">
												<select>
													<option value="$USD">$ USD</option>
												</select>
											</span>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-xs-12">
                                    <h4>Коротко о занятиях (выводится в каталоге)</h4>
                                </div>
                                <div class="col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <textarea name="excerpt" class="form-control editor">{{$user->about}}</textarea>
                                    </div>
                                </div>
                                 <div class="col-sm-12 col-xs-12">
                                    <h4>Подробно о занятиях (выводится на странице преподавателя)</h4>
                                </div>
                                <div class="col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <textarea name="about" class="form-control editor">{{$user->about}}</textarea>
                                    </div>
                                </div>
                                
                            </div>
                         </fieldset>
                        @endif
                        <fieldset class="hidden todo">
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <h3>Социальные сети</h3>
                                </div>
                                <div class="col-sm-12 col-xs-12">
                                    <input type="text" class="tg-url form-control" placeholder="Add Facebook URL">
                                    <input type="text" class="tg-url form-control" placeholder="Add Twitter URL">
                                    <input type="text" class="tg-url form-control" placeholder="Add Linkedin URL">
                                    <input type="text" class="tg-url form-control" placeholder="Add Google Plus URL">
                                    <input type="text" class="tg-url form-control" placeholder="Add Facebook URL">
                                    <input type="text" class="tg-url form-control" placeholder="Add Youtube URL">
                                    <div class="tg-addinputfield">
											<span class="tg-select">
												<select>
													<option>Select Social</option>
													<option>Facebook</option>
													<option>Twitter</option>
													<option>Linkedin</option>
													<option>Rss</option>
													<option>dribbble</option>
													<option>Google+</option>
													<option>YouTube</option>
													<option>LinkedIn Pulse</option>
													<option>Tumblr</option>
													<option>Pinterest</option>
													<option>Instagram</option>
												</select>
											</span>
                                        <a class="tg-btn" href="javascript:void(0);">add now</a>
                                    </div>
                                </div>
                                 
                            </div>
                        </fieldset>
                        
                        <fieldset>
                            <input type="submit" name="submit" class="tg-btn" value="Сохранить">
                            <span class="tg-note">* Нажмите <strong>Сохранить</strong> чтобы изменения вступили в силу.</span>
                        </fieldset>
                    </form>
                    
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                    
                    <script src="https://api-maps.yandex.ru/2.0-stable/?load=package.standard&lang=ru-RU" type="text/javascript"></script>
                    <script type="text/javascript">
                        $(document).ready(function () {
                            //var map = $('#map');
                            var myMap;
                            var region = $('.form-control[name=region]');
                            var city = $('.form-control[name=city]');
                            var street = $('.form-control[name=street]');
                            var house = $('.form-control[name=house]');
                            ymaps.ready(init);  
                            


                            var flag = true;
                            var omg;
                            $('body').on('keyup', '.form-control', function() {
                                if (flag && $(this).attr('name') === 'city' || $(this).attr('name') === 'street' || $(this).attr('name') === 'house'){
                                    flag = false;
                                    delay(function(){
                                        var myGeocoder = ymaps.geocode(city.val() + " "+ street.val() +" "+ house.val()).then(function (res) {  
                                            
                                            myMap.geoObjects.each(function(context) {
                                                myMap.geoObjects.remove(context);
                                            });
                                            myMap.geoObjects.add(res.geoObjects.get(0));
                                            flag = true;   
                                        });
                                    }   , 1500 );
                                }
                            });
                            

                            function init(){     

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
                                region.val(geoInfo.balloonContentFooter);
                                city.val(geoInfo.balloonContent);
                                var myGeocoder = ymaps.geocode(city.val() + " "+ street.val() +" "+ house.val()).then(function (res) {   
                                        
                                    myMap.geoObjects.add(res.geoObjects.get(0));
                                    return;
                                });
                                myMap.controls.add(
                                    new ymaps.control.ZoomControl()
                                );
                            }
                            var delay = (function(){
                                var timer = 0;
                                return function(callback, ms){
                                    clearTimeout (timer);
                                    timer = setTimeout(callback, ms);
                                };
                            })();
                            
                            
                            //img

                            function readURL(input) {

                                if (input.files && input.files[0]) {
                                    var reader = new FileReader();

                                    reader.onload = function (e) {
                                        $('#img_prev').attr('src', e.target.result)
                                        
                                    }

                                    reader.readAsDataURL(input.files[0]);
                                }
                            }

                            $("#load_img").change(function(){
                                readURL(this);
                            });
                            

                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
</main>

<!--************************************
        Main End
*************************************-->
@endsection