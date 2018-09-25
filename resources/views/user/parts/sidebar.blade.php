<div class="col-lg-3 col-md-4 col-sm-5 col-xs-12">
    <div class="tg-widgetdashboard">
        <h3>Личный кабинет <a class="tg-btndashboard" href="javascript:void(0);"><i class="fa fa-angle-down"></i></a></h3>
        <time class="tg-currentdatetime" datetime="{{date('Y-m-d')}}">
            <?php setlocale(LC_ALL, 'ru_RU.UTF-8'); ?>
            <span><?php echo strftime("%A, %B %d", time()); ?></span>
            <em><?php echo strftime("%H:%M", time()); ?></em>
        </time>
        <nav id="tg-dashboardnav" class="tg-dashboardnav">
            <ul>
                <li class="hidden todo {{ Route::currentRouteName() == 'tutor-dashboard' ? 'tg-active' : '' }}">
                    <a href="{{ route('tutor-dashboard') }}">
                        <i class="fa fa-line-chart"></i>
                        <span>Обзор</span>
                    </a>
                </li>
                <li  style="border-top: none;" class="{{ Route::currentRouteName() == 'tutor-profile' ? 'tg-active' : '' }}">
                    <a href="{{ route('tutor-profile') }}">
                        <i class="fa fa-user"></i>
                        <span>Настройки профиля</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-out"></i>
                        <span>Выход</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>
    </div>
    <div class="tg-widgetdashboard">
        <a class="tg-customerviewpage" target="_blank" href="//belrepet.by/repetitor/{{$user->id}}">
            <i class="fa fa-tv"></i>
            <span>Как видят меня другие?</span>
        </a>
    </div>
</div>