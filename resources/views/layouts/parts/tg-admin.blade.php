<div class="tg-admin">

    @guest
    <div class="tg-guest">
        <figure class="tg-adminpic">
            <a href="#"><img src="/images/icons/icon-01.png" alt="image description"></a>
        </figure>
        <div class="tg-message">
            <em>Привет, Гость!</em>
            <div class="tg-loginsinguplinks">
                <div class="dropdown tg-dropdown">
                    <button id="tg-signin" class="tg-signin tg-btndropdown" type="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Вход</button>
                   

                    <div class="dropdown-menu tg-dropdownbox" aria-labelledby="tg-signin">
                        <h2>Добро пожаловать</h2>
                        <form method="POST" action="{{ route('login') }}" id="tg-formsignin" class="tg-form tg-formsignin">
                            @csrf
                            <fieldset>
                                <div class="form-group">


                                    <input id="login-email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                           name="email" value="{{ old('email') }}" required autofocus
                                           placeholder="Email">
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input id="login-password" type="password"
                                           class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                           name="password" required placeholder="password">
                                    @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember">Запомнить меня
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="tg-btn">Войти</button>
                                    <a class="tg-forgotpassword"
                                       href="{{ route('password.request') }}">{{ __('main.fogot_password') }}</a>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
                <div class="dropdown tg-dropdown">
                    <button id="tg-signup" class="tg-signup tg-btndropdown" type="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Регистрация
                    </button>

                    <div class="dropdown-menu tg-dropdownbox" aria-labelledby="tg-signup">
                        <h2>Регистрация</h2>
                        <form id="tg-formsignup" class="tg-form tg-formsignup" action="{{ route('register') }}" method="POST">
                            @csrf
                            <fieldset>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="tg-radiobox">
                                            <span class="tg-joinustitle">Хочу зарегистрироваться как:</span>
                                            <div class="tg-joinus">
                                                <span class="tg-radio">
                                                    <input type="radio" id="student" name="joinas" value="student">
                                                     <label for="student">ученик</label>
                                                 </span>
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
                                            <p>Регистрируясь вы принимаете наши <a href="/usloviya-i-polozheniya">Условия и Положения</a></p>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <div class="tg-checkboxbox">
                                                 <span class="tg-checkbox">
                                                     <input type="checkbox" id="notrobot" name="notrobot" value="human">
                                                     <label for="notrobot">Я не робот</label>
                                                 </span>
                                                <a class="tg-refreshcaptcha" href="#"><img src="{{ url('/') }}/images/icons/icon-02.jpg" alt="image description"></a>
                                            </div>
                                        </div>
                                    </div>
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
        </div>
    </div>
    @else
        <div class="tg-user">
            <div class="dropdown tg-dropdown">
                <figure class="tg-adminpic">
                    <a href="#"><img src="/images/icons/icon-01.png" alt="image description"></a>
                </figure>
                <button id="tg-usermenu" class="tg-usermenu tg-btndropdown" type="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <em>Привет, {{ Auth::user()->email }}!</em>
                </button>
                <div class="dropdown-menu tg-dropdownbox" aria-labelledby="tg-usermenu">
                    <time datetime="{{date('Y-m-d')}}">
                        <?php setlocale(LC_ALL, 'ru_RU.UTF-8'); ?>
                        <strong>{{ __('main.'.date('D')) }}, {{date('d')}} {{ __('main.'.date('M')) }} {{date('Y')}}</strong>
                        <strong>{{date('H:i')}}</strong>
                    </time>
                    <ul>
<!--                        <li>
                            <a href="/user/profile">
                                <i class="fa fa-line-chart"></i>
                                <span>Личный кабинет</span>
                            </a>
                        </li>-->
                        <li>
                            <a href="{{ route('tutor-profile') }}">
                                <i class="fa fa-user"></i>
                                <span>Настройки профиля</span>
                            </a>
                        </li>
<!--                        <li>
                            <a href="#">
                                <i class="fa fa-list"></i>
                                <span>Мой режим работы</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-clock-o"></i>
                                <span>My Schedules</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-heart"></i>
                                <span>Favorites Listing</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-clone"></i>
                                <span>Invoices</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-arrow-up"></i>
                                <span>Upgrade Package</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-gears"></i>
                                <span>Security Settings</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-eye"></i>
                                <span>Privacy Settings</span>
                            </a>
                        </li>-->
                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out"></i>
                                <span>Выйти</span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        @endguest
</div>