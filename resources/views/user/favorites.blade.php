@extends('layouts/site')

@section('content')

@include('user/parts/innerbanner')

    <!--************************************
            Main Start
    *************************************-->
    <main id="tg-main" class="tg-main tg-haslayout">
        <div class="container">
            <div class="row">
                <div id="tg-content" class="tg-content tg-dashboard tg-tuitiondashboard">

                    @include('user/parts/sidebar')

                    <div class="col-lg-9 col-md-8 col-sm-7 col-xs-12">
                        
                        @include('user/parts/tg-pagehead')
                        
                        <form class="tg-formtheme">
                            <h3>Favorites Listing</h3>
                            <span class="tg-select tg-tg-filterselect">
									<select>
										<option value="">Filter by: All</option>
										<option value="all">All</option>
										<option value="all">All</option>
										<option value="all">All</option>
									</select>
								</span>
                            <fieldset>
                                <div class="tg-tablescroll">
                                    <table class="table table-striped tg-dashboardtable">
                                        <thead>
                                        <tr>
                                            <th>title</th>
                                            <th>category</th>
                                            <th>action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td data-title="title">Chartered Certified Accountant</td>
                                            <td data-category="category">Jobs</td>
                                            <td data-action="action"><i class="fa fa-close"></i></td>
                                        </tr>
                                        <tr>
                                            <td data-title="title">Manchester Sun Light</td>
                                            <td data-category="category">Tuition Centres</td>
                                            <td data-action="action"><i class="fa fa-close"></i></td>
                                        </tr>
                                        <tr>
                                            <td data-title="title">Jenna Strope</td>
                                            <td data-category="category">Tutors</td>
                                            <td data-action="action"><i class="fa fa-close"></i></td>
                                        </tr>
                                        <tr>
                                            <td data-title="title">Success Road Academy</td>
                                            <td data-category="category">Tuition Centres</td>
                                            <td data-action="action"><i class="fa fa-close"></i></td>
                                        </tr>
                                        <tr>
                                            <td data-title="title">State College Of Sydney</td>
                                            <td data-category="category">Tuition Centres</td>
                                            <td data-action="action"><i class="fa fa-close"></i></td>
                                        </tr>
                                        <tr>
                                            <td data-title="title">Ahmad Carstensen</td>
                                            <td data-category="category">Tutors</td>
                                            <td data-action="action"><i class="fa fa-close"></i></td>
                                        </tr>
                                        <tr>
                                            <td data-title="title">Dustin Mckillop</td>
                                            <td data-category="category">Tutors</td>
                                            <td data-action="action"><i class="fa fa-close"></i></td>
                                        </tr>
                                        <tr>
                                            <td data-title="title">Female Home Tutor Required</td>
                                            <td data-category="category">Jobs</td>
                                            <td data-action="action"><i class="fa fa-close"></i></td>
                                        </tr>
                                        <tr>
                                            <td data-title="title">Manchester University</td>
                                            <td data-category="category">Tuition Centres</td>
                                            <td data-action="action"><i class="fa fa-close"></i></td>
                                        </tr>
                                        <tr>
                                            <td data-title="title">Dolores Mcreynolds</td>
                                            <td data-category="category">Tutors</td>
                                            <td data-action="action"><i class="fa fa-close"></i></td>
                                        </tr>
                                        <tr>
                                            <td data-title="title">Ahmad Carstensen</td>
                                            <td data-category="category">Tutors</td>
                                            <td data-action="action"><i class="fa fa-close"></i></td>
                                        </tr>
                                        <tr>
                                            <td data-title="title">Teaching A-Levels Psychology</td>
                                            <td data-category="category">Jobs</td>
                                            <td data-action="action"><i class="fa fa-close"></i></td>
                                        </tr>
                                        <tr>
                                            <td data-title="title">Gracia Peluso</td>
                                            <td data-category="category">Tutors</td>
                                            <td data-action="action"><i class="fa fa-close"></i></td>
                                        </tr>
                                        <tr>
                                            <td data-title="title">Denae Maclachlan</td>
                                            <td data-category="category">Tutors</td>
                                            <td data-action="action"><i class="fa fa-close"></i></td>
                                        </tr>
                                        <tr>
                                            <td data-title="title">Freeman Cannon</td>
                                            <td data-category="category">Tutors</td>
                                            <td data-action="action"><i class="fa fa-close"></i></td>
                                        </tr>
                                        <tr>
                                            <td data-title="title">Adrianne Klopfenstein</td>
                                            <td data-category="category">Tutors</td>
                                            <td data-action="action"><i class="fa fa-close"></i></td>
                                        </tr>
                                        <tr>
                                            <td data-title="title">Maryalice Lundholm</td>
                                            <td data-category="category">Tutors</td>
                                            <td data-action="action"><i class="fa fa-close"></i></td>
                                        </tr>
                                        <tr>
                                            <td data-title="title">Karey Runnels</td>
                                            <td data-category="category">Tutors</td>
                                            <td data-action="action"><i class="fa fa-close"></i></td>
                                        </tr>
                                        <tr>
                                            <td data-title="title">Teaching A-Levels Psychology</td>
                                            <td data-category="category">Jobs</td>
                                            <td data-action="action"><i class="fa fa-close"></i></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </fieldset>
                        </form>
                        <nav class="tg-pagination">
                            <ul>
                                <li class="tg-prevpage"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li class="tg-active"><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li>...</li>
                                <li><a href="#">10</a></li>
                                <li class="tg-nextpage"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--************************************
            Main End
    *************************************-->
@endsection