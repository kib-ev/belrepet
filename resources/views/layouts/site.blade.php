<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="ru"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ $title }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=0.8">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-chosen.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-timepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.countdown.css')}}">
    <link rel="stylesheet" href="{{asset('css/customScrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('css/simplyscroll.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('css/transitions.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/color.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <script src="{{asset('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
</head>
<body class="{{ Route::currentRouteName() == 'home' ? 'tg-home' : ''}} {{ Auth::check() ? 'tg-login' : ''  }}">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->
<!--************************************
        Wrapper Start
*************************************-->
<div id="tg-wrapper" class="tg-wrapper tg-haslayout">
    <!--************************************
            Header Start
    *************************************-->
    <header id="tg-header" class="tg-header tg-haslayout">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <strong class="tg-logo">
                        <a href="{{ url('/') }}"><img src="/images/logo.png" alt="image description"></a>
                    </strong>
                    <div class="tg-navigationarea">
                        <nav id="tg-nav" class="tg-nav">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                        data-target="#tg-navigation" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div id="tg-navigation" class="tg-navigation collapse navbar-collapse">
                                <ul>
                                    <li class="{{ Route::currentRouteName() == 'home' ? 'tg-active' : '' }}">
                                        <a href="{{ url('/') }}">Главная</a>
                                    </li>
                                    <li class="{{ Route::currentRouteName() == 'tutors' ? 'tg-active' : '' }}">
                                        <a href="{{ route('tutors') }}">Каталог репетиторов</a>
                                        {{--<ul class="tg-dropdownmenu">--}}
                                        {{--<li><a href="jobs.html">Job</a></li>--}}
                                        {{--<li><a href="job-detail.html">Job Detail</a></li>--}}
                                        {{--</ul>--}}
                                    </li>
                                   {{--<li class="{{ Route::currentRouteName() == 'tuition-centers' ? 'tg-active' : '' }}">--}}
                                        {{--<a href="{{ route('tuition-centers') }}">Центры обучения</a>--}}
                                        {{--<ul class="tg-dropdownmenu">--}}
                                        {{--<li><a href="tutors.html">tutor</a></li>--}}
                                        {{--<li><a href="tutor-detail.html">tutor Detail</a></li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                    <li class="{{ Route::currentRouteName() == 'news' ? 'tg-active' : '' }}">
                                        <a href="{{ url('/novosti') }}">Новости</a>
                                    </li>
                                    <li class="{{ Route::currentRouteName() == 'contactus' ? 'tg-active' : '' }}">
                                        <a href="/kontakty">Контакты</a>
                                    </li>
                                    {{--<li class="tg-hasdropdown">--}}
                                    {{--<a href="javascript:void(0);">Tuition Centre</a>--}}
                                    {{--<ul class="tg-dropdownmenu">--}}
                                    {{--<li><a href="tuition-center.html">Tuition Centre</a></li>--}}
                                    {{--<li><a href="tutioncentre-detail.html">Tuition center Detail</a></li>--}}
                                    {{--<li><a href="job-detail-by-tutioncenter.html">job Detail by Tuition center</a></li>--}}
                                    {{--</ul>--}}
                                    {{--</li>--}}
                                    {{--<li class="tg-hasdropdown">--}}
                                    {{--<a href="javascript:void(0);">dashboard</a>--}}
                                    {{--<ul class="tg-dropdownmenu">--}}
                                    {{--<li class="tg-hasdropdown">--}}
                                    {{--<a href="javascript:void(0);">dashboard tuition center</a>--}}
                                    {{--<ul class="tg-dropdownmenu">--}}
                                    {{--<li><a href="dashboard-tuition-centres.html">dash board tuition center</a></li>--}}
                                    {{--<li><a href="dashboard-tuitions-team.html">team</a></li>--}}
                                    {{--<li><a href="dashboard-tuition-centres-post-job.html">post job</a></li>--}}
                                    {{--<li><a href="dashboard-tuition-manage-jobs.html">manage jobs</a></li>--}}
                                    {{--<li><a href="dashboard-tuition-favorites-listing.html">favorites list</a></li>--}}
                                    {{--<li><a href="dashboard-tuition-Schedule.html">schedule</a></li>--}}
                                    {{--<li><a href="dashboard-tuition-invoices.html">invoices</a></li>--}}
                                    {{--<li><a href="dashboard-tuition-profile-setting.html">profile setting</a></li>--}}
                                    {{--<li><a href="dashboard-tuition-centres-academics-settings.html">academic settings</a></li>--}}
                                    {{--<li><a href="dashboard-tuition-centres-privacy-settings.html">privacy setting</a></li>--}}
                                    {{--<li><a href="dashboard-tuition-security-setting.html">security setting</a></li>--}}
                                    {{--<li><a href="dashboard-tuition-upgrade-package.html">upgrade package</a></li>--}}
                                    {{--</ul>--}}
                                    {{--</li>--}}
                                    {{--<li class="tg-hasdropdown">--}}
                                    {{--<a href="javascript:void(0);">dashboard tutor</a>--}}
                                    {{--<ul class="tg-dropdownmenu">--}}
                                    {{--<li><a href="dashboard-tutor.html">dashboard tutor</a></li>--}}
                                    {{--<li><a href="dashboardtutor-favorites-listing.html">favorites list</a></li>--}}
                                    {{--<li><a href="dashboardtutor-myschedule.html">schedule</a></li>--}}
                                    {{--<li><a href="dashboard-tutor-invoices.html">invoices</a></li>--}}
                                    {{--<li><a href="dashboard-tutor-profile-settings.html">profile setting</a></li>--}}
                                    {{--<li><a href="dashboard-tutor-privacy-settings.html">privacy setting</a></li>--}}
                                    {{--<li><a href="dashboard-tutor-security-settings.html">security setting</a></li>--}}
                                    {{--<li><a href="dashboard-tutor-upgradepackage.html">upgrade package</a></li>--}}
                                    {{--</ul>--}}
                                    {{--</li>--}}
                                    {{--</ul>--}}
                                    {{--</li>--}}
                                    {{--<li class="tg-hasdropdown">--}}
                                    {{--<a href="javascript:void(0);">--}}
                                    {{--<i class="hidden-xs fa fa-navicon"></i>--}}
                                    {{--<span class="hidden-lg hidden-md hidden-sm">Pages</span>--}}
                                    {{--</a>--}}
                                    {{--<ul class="tg-dropdownmenu">--}}
                                    {{--<li><a href="job-detail-by-sutudent.html">job Detail by Student</a></li>--}}
                                    {{--<li><a href="how-it-works.html">How it works?</a></li>--}}
                                    {{--<li><a href="contactus.html">Contact</a></li>--}}
                                    {{--<li><a href="404error.html">404</a></li>--}}
                                    {{--<li><a href="news-grid.html">news</a></li>--}}
                                    {{--<li><a href="news-detail.html">news detail</a></li>--}}
                                    {{--</ul>--}}
                                    {{--</li>--}}
                                </ul>
                            </div>
                        </nav>

                        @include('layouts/parts/tg-admin')

                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--************************************
            Header End
    *************************************-->
@yield('content')
<!--************************************
     Footer Start
*************************************-->
    <footer id="tg-footer" class="tg-footer tg-haslayout">
        <div id="tg-infobox" class="tg-infobox">
            <div class="container">
                <div class="row">
                    <div class="tg-fcols">
                        <div class="tg-fcol">
                            <strong class="tg-logo"><a href="#"><img src="/images/logo.png" alt="image description"></a></strong>
                            <div class="tg-description">
                                <p>На сайте представлены резюме только проверенных специалистов с опытом работы. Здесь вы найдете репетитора для дошкольников, школьников, абитуриентов, студентов и взрослых. Консультации по выбору подходящего вам преподавателя – бесплатны. Вы оплачиваете только занятия самому репетитору.</p>
                            </div>
                            <ul class="tg-socialicons">
                                <li class="tg-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="tg-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="tg-linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li class="tg-googleplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li class="tg-rss"><a href="#"><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>
                        <div class="tg-fcol">
                            <div class="tg-icon">
                                <i class="fa fa-bullhorn"></i>
                            </div>
                            <div class="tg-title">
                                <h3>Контакты</h3>
                            </div>
                            <div class="tg-email">
                                <p>Если у вас есть вопросы, пожелания и предложения по нашему сервису, отправьте их на наш электронный ящик:</p>
                                <a href="mailto:info@belrepet.by">info@belrepet.by</a>
                            </div>
                        </div>
                        <div class="tg-fcol">
                            <div class="tg-icon">
                                <i class="fa fa-paper-plane-o"></i>
                            </div>
                            <div class="tg-title">
                                <h3>Подписаться</h3>
                                <br>
                                <span>Будьте в курсе последний изменений и нововведений нашего сервиса!</span>
                            </div>
                            <form class="tg-newsletter" action="index_submit" method="post" enctype="text/plain">
                                <fieldset>
                                    <input type="email" class="form-control" name="email" placeholder="Email">
                                    <button type="submit"><i class="fa fa-check"></i></button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tg-quicklinks">
            <div class="container">
                <div class="row">
                    <div class="tg-fcols">
                        <div class="tg-fcol">
                            <div class="tg-title tg-icon">
                                <h3 class="fa fa-map-signs">Общая информация</h3>
                            </div>
                            <ul>
                                <li><a href="#">Публичный договор</a></li>
                                <li><a href="#">Как мы работаем</a></li>
                                <li><a href="#">Пользовательское соглашение</a></li>
                                <li><a href="#">Правила</a></li>
                                <li><a href="#">Контакты</a></li>
                                <li><a href="#">Репетиторы</a></li>
                                <li><a href="#">Реклама на сайте</a></li>
                            </ul>
                        </div>
                        <div class="tg-fcol">
                            <div class="tg-title tg-icon">
                                <h3 class="fa fa-location-arrow">Репетиторы в городах</h3>
                            </div>
                            <ul>
                                <li><a href="#">Минск</a></li>
                                <li><a href="#">Брест</a></li>
                                <li><a href="#">Витебск</a></li>
                                <li><a href="#">Гродно</a></li>
                                <li><a href="#">Гомель</a></li>
                                <li><a href="#">Могилев</a></li>
                            </ul>
                        </div>
                        <div class="tg-fcol">
                            <div class="tg-title tg-icon">
                                <h3 class="fa fa-graduation-cap">Популярные предметы</h3>
                            </div>
                            <ul>
                                <li><a href="#">Математика</a></li>
                                <li><a href="#">Физика</a></li>
                                <li><a href="#">Биология</a></li>
                                <li><a href="#">Химия</a></li>
                                <li><a href="#">История</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--************************************
            Footer End
    *************************************-->
</div>
<!--************************************
     Wrapper End
*************************************-->
<script src="{{ asset('js/vendor/jquery-library.js') }}"></script>
<script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-add-clear.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-timepicker.min.js') }}"></script>
<script src="{{ asset('js/mapclustering/data.json') }}"></script>
<script src="{{ asset('http://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&language=ru') }}"></script>
<script src="{{ asset('js/mapclustering/markerclusterer.min.js') }}"></script>
<script src="{{ asset('js/mapclustering/infobox.js') }}"></script>
<script src="{{ asset('js/mapclustering/map.js') }}"></script>
<script src="{{ asset('js/customScrollbar.min.js') }}"></script>
<script src="{{ asset('js/jquery.countdown.js') }}"></script>
<script src="{{ asset('js/simplyscroll.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/chosen.jquery.js') }}"></script>
<script src="{{ asset('js/jquery-ui.js') }}"></script>
<script src="{{ asset('js/parallax.js') }}"></script>
<script src="{{ asset('js/countTo.js') }}"></script>
<script src="{{ asset('js/loader.js') }}"></script>
<script src="{{ asset('js/appear.js') }}"></script>
<script src="{{ asset('js/gmap3.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

<script>
    jQuery(document).ready(function(e) {
        if ($('#tg-map').length > 0) {
            tutor_init_map_script();
        }
    });
</script>
<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=6wuwpkxe51rax9p440knv1wonsjxqza58uc24nwvahiac6m3"></script>
<script>
$(document).ready(function(){
   tinymce.init({ 
       selector:'textarea.editor',
       language_url : '/libs/tinymce/langs/ru.js',
        menubar: 'false',
//        toolbar: 'false'
       });

});
</script>
</body>
</html>