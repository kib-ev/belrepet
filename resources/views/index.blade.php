@extends('layouts.site')

@section('content')
<!--************************************
				Home Banner Start				
		*************************************-->
<div id="tg-homebanner" class="tg-homebanner tg-haslayout">
    <figure class="tg-bannerbg">
        <img src="{{ url('/images/banner/img-01.jpg') }}" alt="image description">
    </figure>
    <div class="tg-bannercontent">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    {!! Form::open(['id' => 'repet-form','url' => 'sendmail', 'method' => 'post', 'class' => 'tg-formsearch']) !!}
                        <fieldset>
                            <figure class="tg-bannerimg hidden-sm hidden-xs">
                                <img src="{{ url('/images/knigi.png') }}" alt="">
                            </figure>
                            <div class="tg-searchfields">

                                <h3 class="title">Подобрать репетитора?</h3>
                                <p class="desc">Бесплатно и без обязательств. Перезвоним в течение 15 минут.</p>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Тема :</label>
                                            <div class="tg-textarea">
                                                {!! Form::textarea('desc', '', ['class' => 'clear', 'placeholder' => 'Что планируете изучать, как часто и какая цель занятий?']) !!}<br>
                                            </div>
                                        </div>
                                    </div>  
                                </div> 
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Ваше имя :</label>
                                            <div class="tg-text">
                                                {!! Form::text('name','' , ['class' => 'clear']) !!}<br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Ваш телефон :</label>
                                            <div class="tg-text">
                                                {!! Form::text('phone','' , ['class' => 'clear']) !!}<br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    {!! Form::submit('Подберите мне репетитора', ['class' => 'tg-btn']) !!}<br>
                                    
                                </div>
                                <div class="tg-loginbanner">
                                    <div class="tg-box">
                                        <h2>Вы репетитор?</h2>
                                        <div class="tg-description">
                                            <p>Регистрируйтесь в нашем сервисе</p>
                                            <p>совершенно бесплатно! <a href="{{ route('registration') }}">Регистрация »</a></p>
                                        </div>
                                        <img src="{{ url('/images/banner/img-03.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <div class="tg-noticeboard">
        <div class="tg-box">
            <strong>Новости:</strong>
            <ul id="tg-newsticker" class="tg-newsticker">
                @foreach($news as $item)
                <li>
                    <div class="tg-description">
                        <p>{{$item->name}} <a href="/novosti/{{$item->slug}}">Читать</a></p>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
<!--************************************
        Home Banner End
*************************************-->
<!--************************************
        Main Start
*************************************-->
<main id="tg-main" class="tg-main tg-haslayout">
    <!--************************************
            Features Start
    *************************************-->
    <section class="tg-main-section tg-haslayout">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <div class="tg-sectionhead">
                        <h2><span>Почему выбирают нас?</span></h2>
                    </div>
                </div>
                <div class="tg-features">
                    <div class="col-sm-4">
                        <div class="tg-feature">
                            <span class="tg-featureicon tg-featureiconone">Бесплатно для учеников</span>
                            <h3>Бесплатно для учеников</h3>
                            <div class="tg-description">
                                <p>Вам не придется платить за подбор репетитора или посик по каталогу. Повторный подбор нового преподавателя - также бесплатный.</p>
                            </div>
                            <!-- <a class="tg-btn" href="#"></a> -->
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="tg-feature">
                            <span class="tg-featureicon tg-featureicontwo">Работаем с лучшими</span>
                            <h3>Работаем с лучшими</h3>
                            <div class="tg-description">
                                <p>Работаем исключительно с проверенными и опытными преподавателями. В каталог попадают только прошедшие модерацию анкеты репетиторов.</p>
                            </div>
                            <!-- <a class="tg-btn" href="#">Search now</a> -->
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="tg-feature">
                            <span class="tg-featureicon tg-featureiconthree">Никогда не сдаемся</span>
                            <h3>Никогда не сдаемся</h3>
                            <div class="tg-description">
                                <p>В отличие от других бирж будем искать, пока не найдем репетитора, идеально подходящего ученику.</p>
                            </div>
                            <!-- <a class="tg-btn" href="#">Post now</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--************************************
            Features End
    *************************************-->
    <!--************************************
            Statistics Start
    *************************************-->
    <section class="tg-main-section tg-haslayout tg-parallaximg" data-appear-top-offset="600" data-parallax="scroll"
             data-image-src="{{ url('/images/parallax/bgparallax-02.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="tg-statisticscounters">
                    <div class="tg-counter">
                        <h2><span data-from="0" data-to="245" data-speed="4000"
                                  data-refresh-interval="50">400</span><em>+</em></h2>
                        <h3>Репетиторов на сайте</h3>
                    </div>
                    <div class="tg-counter">
                        <h2><span data-from="0" data-to="57" data-speed="4000" data-refresh-interval="50">57</span><em>+</em>
                        </h2>
                        <h3>Заявок в этом месяце</h3>
                    </div>
                    <div class="tg-counter">
                        <h2><span data-from="0" data-to="30" data-speed="4000" data-refresh-interval="50">30</span><em>+</em>
                        </h2>
                        <h3>Занятий в день</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--************************************
            Statistics End
    *************************************-->
    <!--************************************
            Featured Tutor Start
    *************************************-->
    <section class="tg-main-section tg-haslayout featured-tutor-block">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                    <div class="tg-sectionhead">
                        <h2><span>Наши репетиторы</span></h2>
                        <div class="tg-description">
                            <p>Все репетиторы, представленные на сайте, перед публикацией резюме проходят серьезный отбор, проверяются их дипломы, сертификаты и трудовые книжки. Вы можете быть уверены, что будете выбирать из лучших преподавателей только с опытом работы репетитором.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-xs-12">
                    <div class="tg-featuredtutors">
                        
                        @foreach($users as $user)
                        <div class="tg-tutor">
                            <figure class="tg-tutordp">
                                <a href="{{ $user->link() }}"><img src="{{$user->avatar()}}" height="120" width="120"
                                                 alt=""></a>
                                <figcaption style="opacity: 0;" class="todo">
                                    <a class="tg-usericon tg-iconfeatured" href="{{$user->link()}}">
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
                                <div class="tg-jobhead">
                                    <span class="tg-priceperhour">{{ $user->price }}$ <em>За час</em></span>
                                    <h3><a href="{{$user->link()}}">{{ $user->firstname }} {{ $user->patronymic }}</a></h3>
                                    <div class="tg-subjects">{{ implode(', ',$user->subjectsArray()) }}</div>
                                    <ul class="tg-jobsmetadata hidden todo">
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
                        
                    </div>
                    <div class="tg-btns">
                        <a class="tg-btn" href="/repetitory">перейти в каталог</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--************************************
            Featured Tutor End
    *************************************-->
    
    
    
    <!--************************************
            Student Review Start
    *************************************-->
    <section class="tg-main-section tg-haslayout tg-parallaximg" data-appear-top-offset="600" data-parallax="scroll"
             data-image-src="{{ url('/images/parallax/bgparallax-03.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                    <div class="tg-sectionhead">
                        <h2><span>Отзывы учеников</span></h2>
                    </div>
                    <div id="tg-studentreviewsslider" class="tg-studentreviewsslider tg-studentreviews">
                        <div class="item">
                            <div class="tg-reviewcontent">
                                <blockquote>
                                    <q>Срочно нужен бы репетитор по высшей математике. Преподавателя нашел в день подачи заявки. Сэкономил кучу времени.</q>
                                </blockquote>
                                <h3>Андрей, студент 1 курса, БГУИР</h3>
                            </div>
                        </div>
                        <div class="item">
                            <div class="tg-reviewcontent">
                                <blockquote>
                                    <q>Нашла здесь репетитора по английскому языку. Нужно было переделать контрольную в университет. Но решила не ограничиваться одним заказом контрольной, подготовилась вместе с репетитором и отлично отчиталась на зачете.</q>
                                </blockquote>
                                <h3>Оксана, студентка 1 курс</h3>
                            </div>
                        </div>
                        <div class="item">
                            <div class="tg-reviewcontent">
                                <blockquote>
                                    <q>Искали ребенку репетитора на лето. У ребенка не было настроения читать, отвечать на уроках, делать домашнее задание, поэтому решили позаниматься дополнительно на каникулах. Первая преподавательница была хорошей, но слишком молодой, наверное не хватило опыта. И нам бесплатно подобрали другого репетитора. И вот со второй учительницей ребенок заинтересовался, сам дочитывал главы в книге после занятий и вообще стал читать быстрее. Стал увереннее, появилась гордость за свои успехи. Так что к 4 классу полностью готовы.</q>
                                </blockquote>
                                <h3>Елена, мама третьеклассника</h3>
                            </div>
                        </div>
                        <div class="item">
                            <div class="tg-reviewcontent">
                                <blockquote>
                                    <q>К ЦТ по математике готовилась сначала 1 раз в неделю. Потом увидела, что стала все быстро решать и вообще стало все намного понятнее. Решили с родителями, что если заниматься по 2 раза, то будет больше шансов сдать на высокий балл. За три месяца до ЦТ занималась два раза в неделю – сдала на 89 баллов. Для меня это супер результат!</q>
                                </blockquote>
                                <h3>Евгения, абитуриент</h3>
                            </div>
                        </div>
                        <div class="item">
                            <div class="tg-reviewcontent">
                                <blockquote>
                                    <q>Нашла здесь отличную преподавательницу по композиции - Елена Петровна! Душевный и чуткий преподаватель! Всю неуверенность в себе прогнала и заниматься с ней одно удовольствие!</q>
                                </blockquote>
                                <h3>Татьяна, абитуриентка</h3>
                            </div>
                        </div>
                        <div class="item">
                            <div class="tg-reviewcontent">
                                <blockquote>
                                    <q>Готовился к ЦТ по химии с репетитором Елизаветой. Все доступно и понятно объясняет. Повысил балл аттестата, ЦТ сдал на 83 балла, поступил на бюджет. Спасибо большое! Скорее всего еще и на первом курсе обращусь.</q>
                                </blockquote>
                                <h3>Олег, абитуриент</h3>
                            </div>
                        </div>
                    </div>
                    <div id="tg-reviewerdpslider" class="tg-reviewerdpslider tg-reviewerdp">
                        <div class="item">
                            <figure><img src="{{ url('/images/thumbnails/img-01.jpg') }}" alt=""></figure>
                        </div>
                        <div class="item">
                            <figure><img src="{{ url('/images/thumbnails/img-02.jpg') }}" alt=""></figure>
                        </div>
                        <div class="item">
                            <figure><img src="{{ url('/images/thumbnails/img-03.jpg') }}" alt=""></figure>
                        </div>
                        <div class="item">
                            <figure><img src="{{ url('/images/thumbnails/img-04.jpg') }}" alt=""></figure>
                        </div>
                        <div class="item">
                            <figure><img src="{{ url('/images/thumbnails/img-05.jpg') }}" alt=""></figure>
                        </div>
                        <div class="item">
                            <figure><img src="{{ url('/images/thumbnails/img-06.jpg') }}" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--************************************
            Student Review End
    *************************************-->
    <!--************************************
            News & Trusted Start
    *************************************-->
    <section class="tg-main-section tg-haslayout">
        <div class="container">
            <div class="row">
                <div class="tg-newstrusted">
                    <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                    <div class="tg-sectionhead">
                        <h2><span>Новости</span></h2>
                    </div>
                </div>
                    
                    @foreach($news as $item)
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="tg-latestnews">
                            <article class="tg-post">
                                <figure class="tg-postimg">
                                    <a href="{{ $item->link() }}"><img src="{{ url($item->preview) }}" alt="{{$item->name}}"></a>
                                </figure>
                                <div class="tg-postcontent">
                                    <div class="tg-posttitle">
                                        <h3><a href="{{ $item->link() }}">{{$item->name}}</a></h3>
                                    </div>
                                    <ul class="tg-metadata">
                                      
                                        <li>
                                            <time datetime="{{ date('Y-m-d', strtotime($item->created_at)) }}">
                                                <a href="{{ $item->link() }}">{{ $item->date() }}</a>
                                            </time>
                                        </li>
                                    </ul>
                                    <div class="tg-description">
                                        {!!$item->excerpt!!}
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!--************************************
            News & Trusted End
    *************************************-->
    <?php /*
    <!--************************************
            Latest Jobs Start
    *************************************-->
    <section class="tg-main-section tg-haslayout tg-parallaximg" data-appear-top-offset="600" data-parallax="scroll"
             data-image-src="/images/parallax/bgparallax-01.jpg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <div class="tg-sectionhead">
                        <h2><span>Полезные статьи</span></h2>
                    </div>
                    <div class="tg-jobs">
                        <div class="tg-job">
                            <div class="tg-jobhead">
                                <h3><a href="#">Как учиться эффективно в 2018 году?</a></h3>
                            </div>
                            <div class="tg-description">
                                <p>...если вы ни минуты не можете обойтись без музыки, наслаждайтесь ею во время подготовки к занятиям (при условии, что она не мешает понимать материал). Во время занятий помогут взбодриться чай или кофе, но не стоит ими злоупотреблять, так как их чрезмерное и позднее употребление повлияет на качество сна, что в свою очередь скажется на способности соображать.</p>
                            </div>
                            <div class="tg-jobfoot">
                                <ul class="tg-tags">
                                    <li><a class="tg-tag" href="#">Образование</a></li>
                                    <li><a class="tg-tag" href="#">Советы</a></li>
                                </ul>
                                <ul class="tg-metadata">
                                    <li><a href="#">Май 30, 2018</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="tg-job">
                            <div class="tg-jobhead">
                                <h3><a href="#">5 лучших способов изучения биологии</a></h3>
                            </div>
                            <div class="tg-description">
                                <p>Одна из самых сложных частей изучения биологии — запоминание множества различных терминов. Если вы хотите понять, что вы изучаете, вам нужно сначала ознакомиться со всеми этими условиями.</p>
                            </div>
                            <div class="tg-jobfoot">
                                <ul class="tg-tags">
                                    <li><a class="tg-tag" href="#">Образование</a></li>
                                    <li><a class="tg-tag" href="#">Советы</a></li>
                                </ul>
                                <ul class="tg-metadata">
                                    <li><a href="#">Май 14, 2018</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="tg-job">
                            <div class="tg-jobhead">
                               
                                <h3><a href="#">Знаменитый финский эксперт ответил на вопросы белорусов</a></h3>
                            </div>
                            <div class="tg-description">
                                <p>В январе при поддержке компании «А100 Девелопмент» в Минске состоялся мастер-класс «Инструменты финского образования», который провел один из самых знаменитых учителей мира Кари Лоухивуори. Сегодня полюбившийся белорусской публике финский эксперт ответил на вопросы, которые не были озвучены в зале.</p>
                            </div>
                            <div class="tg-jobfoot">
                                <ul class="tg-tags">
                                    <li><a class="tg-tag" href="#">Accounting</a></li>
                                    <li><a class="tg-tag" href="#">Finance</a></li>
                                    <li><a class="tg-tag" href="#">Law</a></li>
                                </ul>
                                <ul class="tg-metadata">
                                    <li><a href="#">Апрель 27, 2018</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tg-btns">
                        <a class="tg-btn" href="#">еще полезные статьи</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--************************************
            Latest Jobs End
    *************************************-->

    */ ?>
</main>
<!--************************************
        Main End
*************************************-->
@endsection
<script
  src="https://code.jquery.com/jquery-1.12.4.min.js"
  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
  crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        var working = true;
        var form = $('#repet-form');

        form.on('submit',function(event) {
            event.preventDefault() ;

            if (working) {
                working = false;
                
                send_form(form);
            } 
        });

        function send_form(form) {

            $.ajax({
                type: 'POST',
                url: form.attr('action'),
                data: form.serialize(), 
                success: function(response) {
                    alert("Ваше сообщение успешно отправлено"); 
                    clear_form(form);
                    
                },
                error: function() {
                    alert("Ошибка при отправке сообщения");
                }
            });
        }

        function clear_form(form) {
            form.find('.clear').val('');
            working = true;
        }
    });
</script>