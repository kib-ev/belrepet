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
                        
                        @include('user/parts/tg-pagehead')

                        <form class="tg-formtheme">
                            <h3>My Schedule</h3>
                            <fieldset>
                                <label>Sunday:</label>
                                <div class="tg-datefield">
                                    <div class="form-group tg-inputicon">
                                        <input type="text" class="tg-datepicker form-control" placeholder="Starting Date">
                                        <span class="fa fa-calendar-check-o"></span>
                                    </div>
                                </div>
                                <div class="tg-datefield">
                                    <div class="form-group tg-inputicon">
                                        <input type="text" class="tg-datepicker form-control" placeholder="Ending Date">
                                        <span class="fa fa-calendar-check-o"></span>
                                    </div>
                                </div>
                                <span class="tg-checkbox">
                                            <input type="checkbox" id="sundystarttime" name="sundystarttime" value="sundystarttime">
                                            <label for="sundystarttime">Not working today</label>
                                        </span>
                                <label>Monday:</label>
                                <div class="tg-datefield">
                                    <div class="form-group tg-inputicon">
                                        <input type="text" class="tg-datepicker form-control" placeholder="Starting Date">
                                        <span class="fa fa-calendar-check-o"></span>
                                    </div>
                                </div>
                                <div class="tg-datefield">
                                    <div class="form-group tg-inputicon">
                                        <input type="text" class="tg-datepicker form-control" placeholder="Ending Date">
                                        <span class="fa fa-calendar-check-o"></span>
                                    </div>
                                </div>
                                <span class="tg-checkbox">
                                            <input type="checkbox" id="mondaystarttime" name="mondaystarttime" value="mondaystarttime">
                                            <label for="mondaystarttime">Not working today</label>
                                        </span>
                                <label>Tuesday:</label>
                                <div class="tg-datefield">
                                    <div class="form-group tg-inputicon">
                                        <input type="text" class="tg-datepicker form-control" placeholder="Starting Date">
                                        <span class="fa fa-calendar-check-o"></span>
                                    </div>
                                </div>
                                <div class="tg-datefield">
                                    <div class="form-group tg-inputicon">
                                        <input type="text" class="tg-datepicker form-control" placeholder="Ending Date">
                                        <span class="fa fa-calendar-check-o"></span>
                                    </div>
                                </div>
                                <span class="tg-checkbox">
                                            <input type="checkbox" id="tuesdaystarttime" name="tuesdaystarttime" value="tuesdaystarttime">
                                            <label for="tuesdaystarttime">Not working today</label>
                                        </span>
                                <label>Wednesday:</label>
                                <div class="tg-datefield">
                                    <div class="form-group tg-inputicon">
                                        <input type="text" class="tg-datepicker form-control" placeholder="Starting Date">
                                        <span class="fa fa-calendar-check-o"></span>
                                    </div>
                                </div>
                                <div class="tg-datefield">
                                    <div class="form-group tg-inputicon">
                                        <input type="text" class="tg-datepicker form-control" placeholder="Ending Date">
                                        <span class="fa fa-calendar-check-o"></span>
                                    </div>
                                </div>
                                <span class="tg-checkbox">
                                            <input type="checkbox" id="wednesdaystarttime" name="wednesdaystarttime" value="wednesdaystarttime">
                                            <label for="wednesdaystarttime">Not working today</label>
                                        </span>
                                <label>Thursday:</label>
                                <div class="tg-datefield">
                                    <div class="form-group tg-inputicon">
                                        <input type="text" class="tg-datepicker form-control" placeholder="Starting Date">
                                        <span class="fa fa-calendar-check-o"></span>
                                    </div>
                                </div>
                                <div class="tg-datefield">
                                    <div class="form-group tg-inputicon">
                                        <input type="text" class="tg-datepicker form-control" placeholder="Ending Date">
                                        <span class="fa fa-calendar-check-o"></span>
                                    </div>
                                </div>
                                <span class="tg-checkbox">
                                            <input type="checkbox" id="thursdaystarttime" name="thursdaystarttime" value="thursdaystarttime">
                                            <label for="thursdaystarttime">Not working today</label>
                                        </span>
                                <label>Friday:</label>
                                <div class="tg-datefield">
                                    <div class="form-group tg-inputicon">
                                        <input type="text" class="tg-datepicker form-control" placeholder="Starting Date">
                                        <span class="fa fa-calendar-check-o"></span>
                                    </div>
                                </div>
                                <div class="tg-datefield">
                                    <div class="form-group tg-inputicon">
                                        <input type="text" class="tg-datepicker form-control" placeholder="Ending Date">
                                        <span class="fa fa-calendar-check-o"></span>
                                    </div>
                                </div>
                                <span class="tg-checkbox">
                                            <input type="checkbox" id="fridaydaystarttime" name="fridaydaystarttime" value="fridaydaystarttime">
                                            <label for="fridaydaystarttime">Not working today</label>
                                        </span>
                                <label>Saturday:</label>
                                <div class="tg-datefield">
                                    <div class="form-group">
                                        <div class="tg-inputicon">
                                            <input type="text" class="tg-datepicker form-control" placeholder="Starting Date">
                                            <span class="fa fa-calendar-check-o"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="tg-datefield">
                                    <div class="form-group">
                                        <div class="tg-inputicon">
                                            <input type="text" class="tg-datepicker form-control" placeholder="Ending Date">
                                            <span class="fa fa-calendar-check-o"></span>
                                        </div>
                                    </div>
                                </div>
                                <span class="tg-checkbox">
                                            <input type="checkbox" id="saturdaydaystarttime" name="saturdaydaystarttime" value="saturdaydaystarttime">
                                            <label for="saturdaydaystarttime">Not working today</label>
                                        </span>
                            </fieldset>
                            <fieldset>
                                <a class="tg-btn" href="#">Update All Changes</a>
                                <span class="tg-note">* Click <strong>update all changes</strong> to update latest added detail (s).</span>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--************************************
            Main End
    *************************************-->
@endsection