@extends('layouts/site')

@section('content')
    <!--************************************
				Inner Banner Start				
		*************************************-->
    <div id="tg-innerbanner" class="tg-innerbanner tg-haslayout tg-parallaximg" data-appear-top-offset="600" data-parallax="scroll" data-image-src="/images/parallax/bgparallax-10.jpg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <div class="tg-innerbannercontent">
                        <div class="tg-pagetitle">
                            <h1>404 Error</h1>
                        </div>
                        <ol class="tg-breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="tg-active">404 Error</li>
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
                <div class="tg-404error">
                    <figure class="tg-errorimg">
                        <img src="/images/404-img.jpg" alt="image description">
                    </figure>
                    <div class="tg-errorcontent">
                        <div class="col-sm-10 col-sm-offset-1">
                            <h2>Something Went Wrong <span>:(</span></h2>
                            <div class="tg-description">
                                <p>Consectetur adipisicing elit eiusmod tempor incididunt ut labore dolore magna aliqua minim veniam quis nostrudion ullamco laboris nisi ut aliquip ex ea commodo consequat aute irure dolor in reprehenderit in voluptate.</p>
                            </div>
                        </div>
                        <div class="tg-404errorsearch">
                            <span>Perhaps searching can help!</span>
                            <div class="form-group">
                                <button><i class="fa fa-search"></i></button>
                                <input type="search" name="search" class="form-control" placeholder="Search Here">
                            </div>
                        </div>
                        <div class="tg-backhome">
                            <span>Or Goto</span><a href="#">Homepage</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--************************************
            Main End
    *************************************-->
@endsection