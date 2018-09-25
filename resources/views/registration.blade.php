@extends('layouts/site')

@section('content')
    <!--************************************
				Inner Banner Start
		*************************************-->
    <div id="tg-innerbanner" class="tg-innerbanner tg-haslayout tg-parallaximg" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/parallax/bgparallax-06.jpg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <div class="tg-innerbannercontent">
                        <div class="tg-pagetitle">
                            <h1>Регистрация</h1>
                        </div>
                        <ol class="tg-breadcrumb">
                            <li><a href="/">Главная</a></li>
                            <li class="tg-active">Регистрация</li>
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
   <section class="tg-main-section tg-haslayout">
        <div class="container">
            <div class="row">
                
                <div class="col-md-6 col-md-offset-3">
                	
                        <form id="tg-formsignup" class="tg-form tg-formsignup" action="{{ route('register') }}" method="POST">
                            @csrf
                            <fieldset>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="tg-radiobox">
                                            <span class="tg-joinustitle">Хочу зарегистрироваться как:</span>
                                            <div class="tg-joinus">
                                              <!--    <span class="tg-radio">
                                                     <input type="radio" id="student" name="joinas" value="student" checked>
                                                     <label for="student">студент</label>
                                                 </span> -->
                                                <span class="tg-radio">
                                                     <input type="radio" id="tutor" name="joinas" value="tutor" checked>
                                                     <label for="tutor">репетитор</label>
                                                 </span>
                                                <!--<span class="tg-radio">
                                                     <input type="radio" id="academy"
                                                            name="joinas" value="academy">
                                                     <label for="academy">учреждение</label>
                                                 </span>-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            <input id="reg-firstname" type="text" class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}" name="firstname" value="{{ old('firstname') }}" required autofocus  placeholder="Имя">

                                            @if ($errors->has('firstname'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('firstname') }}</strong>
                                                </span>
                                            @endif

                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            <input id="reg-lastname" type="text" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="lastname" value="{{ old('lastname') }}" required placeholder="Фамилия">

                                            @if ($errors->has('lastname'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('lastname') }}</strong>
                                                </span>
                                            @endif

                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            <input id="reg-email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="Email">

                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif

                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            <input id="reg-password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Пароль">

                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif

                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <p>Регистрируясь вы принимаете наши <a href="#">Условаия и Положения</a></p>
                                        </div>
                                    </div>
                                    <!-- <div class="col-xs-12">
                                        <div class="form-group">
                                            <div class="tg-checkboxbox">
                                                 <span class="tg-checkbox">
                                                     <input type="checkbox" id="notrobot" name="notrobot" value="human">
                                                     <label for="notrobot">Я не робот</label>
                                                 </span>
                                                <a class="tg-refreshcaptcha" href="#"><img src="/images/icons/icon-02.jpg" alt="image description"></a>
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="col-xs-12">
                                        <button type="submit" class="tg-btn">Зарегистрироваться</button>
                                    </div>
                                    <div class="col-xs-12 hidden todo">
                                        <div class="tg-otheroptionforsignup">
                                            <h2>Also Signup Using</h2>
                                            <ul class="tg-signinoption">
                                                <li class="tg-facebook">
                                                    <a href="#">
                                                        <i class="fa fa-facebook"></i>
                                                        <i>Facebook</i>
                                                    </a>
                                                </li>
                                                <li class="tg-google">
                                                    <a href="#">
                                                        <i class="fa fa-google-plus"></i>
                                                        <i>google+</i>
                                                    </a>
                                                </li>
                                                <li class="tg-twitter">
                                                    <a href="#">
                                                        <i class="fa fa-twitter"></i>
                                                        <i>twitter</i>
                                                    </a>
                                                </li>
                                                <li class="tg-linkedin">
                                                    <a href="#">
                                                        <i class="fa fa-linkedin"></i>
                                                        <i>linkedin</i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="tg-alreadyhaveaccount">
                                            <h3>Уже есть аккаунт? <a href="#">Войти.</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                </div>
            </div>
        </div>
    </section>
    <!--************************************
            Main End
    *************************************-->
@endsection