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
                    
                    @include('user/parts/tg-pagehead', Auth::user())

                    <h3>Публичная оферта</h3>
                    <p>Текст публичной оферты.</p>
                </div>
            </div>
        </div>
    </div>
</main>

<!--************************************
        Main End
*************************************-->
@endsection