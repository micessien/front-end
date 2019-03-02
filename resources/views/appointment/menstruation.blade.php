@extends('layouts.default')

@section('title', 'Find easily and book an appointment')

@section('content')
    <main>
        <div class="filters_listing">
            <div class="container">
                <ul class="clearfix">
                    <li>
                        <h6>Type</h6>
                        <!-- <div class="switch-field">
                            <input type="radio" id="STI" name="type_patient" checked>
                            <label for="STI">STI Tests</label>
                            <input type="radio" id="Contraceptive" name="type_patient">
                            <label for="Contraceptive">Contraceptive counselling</label>
                            <input type="radio" id="Menstruation" name="type_patient" >
                            <label for="Menstruation">Menstruation </label>
                            <input type="radio" id="Cancer" name="type_patient">
                            <label for="Cancer">Cancer</label>
                            <input type="radio" id="Infections" name="type_patient">
                            <label for="Infections">Cancer</label>
                        </div> -->
                        <nav aria-label="" class="add_top_20">
                            <ul class="pagination pagination-sm">

                                <li class="page-item"><a class="page-link" href="{{ url('portfolio') }}">STI Tests</a></li>
                                <li class="page-item"><a class="page-link" href="{{ url('contraceptive') }}">contraceptive</a></li>
                                <li class="page-item active"><a class="page-link" href="#">menstruation</a></li>
                                <li class="page-item"><a class="page-link" href="{{ url('infections') }}">infections</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="{{ url('cancer') }}">Cancer</a>
                                </li>
                            </ul>
                        </nav>
                    </li>
                    <li>
                        <h6>Sort by</h6>
                        <select name="orderby" class="selectbox">
                        <option value="Closest">Closest</option>
                        <option value="Best rated">Best rated</option>
                        <option value="Men">Men</option>
                        <option value="Women">Women</option>
                        </select>
                    </li>
                </ul>
            </div>
            <!-- /container -->
        </div>
        <!-- /filters -->

        <div class="container margin_60_35">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="box_list wow fadeIn">
                                <a href="#0" class="wish_bt"></a>
                                <figure>
                                    <a href="{{ url('detail-portfolio') }}"><img src="{{ url('/assets/img/doctor_listing_2.jpg') }}" class="img-fluid" alt=""></a>
                                        <div class="preview"><span>Read more</span></div>
                                    </a>
                                </figure>
                                <div class="wrapper">
                                    <small>Psicologist</small>
                                    <h3>Dr. Sickman</h3>

                                    <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
                                    <span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>
                                    <a href="badges.html" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img src="{{ url('/assets/img/badges/badge_1.svg') }}" width="15" height="15" alt=""></a>
                                </div>
                                <ul>
                                    <li><a href="#0" onclick="onHtmlClick('Doctors', 0)"><i class="icon_pin_alt"></i>View on map</a></li>
                                    <li><a href="https://www.google.com/maps/dir//Assistance+–+Hôpitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+–+Hôpitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank"><i class="icon_pin_alt"></i>Directions</a></li>
                                    <li><a href="{{ url('detail-portfolio') }}">Book now</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /box_list -->

                        <div class="col-md-6">
                            <div class="box_list wow fadeIn">
                                <a href="#0" class="wish_bt"></a>
                                <figure>
                                    <a href="{{ url('detail-portfolio') }}"><img src="{{ url('/assets/img/doctor_listing_2.jpg') }}" class="img-fluid" alt="">
                                        <div class="preview"><span>Read more</span></div>
                                    </a>
                                </figure>
                                <div class="wrapper">
                                    <small>Psicologist</small>
                                    <h3>Dr. Will Griever</h3>
                                    <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
                                    <span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>
                                    <a href="badges.html" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img src="{{url('/assets/img/badges/badge_2.svg')}}" width="15" height="15" alt=""></a>
                                </div>
                                <ul>
                                    <li><a href="#0" onclick="onHtmlClick('Doctors', 1)"><i class="icon_pin_alt"></i>View on map</a></li>
                                    <li><a href="https://www.google.com/maps/dir//Assistance+–+Hôpitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+–+Hôpitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank"><i class="icon_pin_alt"></i>Directions</a></li>
                                    <li><a href="{{ url('detail-portfolio') }}">Book now</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /box_list -->

                        <div class="col-md-6">
                            <div class="box_list wow fadeIn">
                                <a href="#0" class="wish_bt"></a>
                                <figure>
                                    <a href="{{ url('detail-portfolio') }}"><img src="{{ url('/assets/img/doctor_listing_5.jpg') }}" class="img-fluid" alt="">
                                        <div class="preview"><span>Read more</span></div>
                                    </a>
                                </figure>
                                <div class="wrapper">
                                    <small>Genic</small>
                                    <h3>Dr. Watchmaker</h3>
                                    <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
                                    <span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>
                                    <a href="badges.html" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img src="{{ url('/assets/img/badges/badge_4.svg') }}" width="15" height="15" alt=""></a>
                                </div>
                                <ul>
                                    <li><a href="#0" onclick="onHtmlClick('Doctors', 1)"><i class="icon_pin_alt"></i>View on map</a></li>
                                    <li><a href="https://www.google.com/maps/" target="_blank"><i class="icon_pin_alt"></i>Directions</a></li>
                                    <li><a href="{{ url('detail-portfolio') }}">Book now</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /box_list -->


                        <div class="col-md-6">
                            <div class="box_list wow fadeIn">
                                <a href="#0" class="wish_bt"></a>
                                <figure>
                                    <a href="{{ url('detail-portfolio') }}"><img src="{{ url('/assets/img/doctor_listing_5.jpg') }}" class="img-fluid" alt="">
                                        <div class="preview"><span>Read more</span></div>
                                    </a>
                                </figure>
                                <div class="wrapper">
                                    <small>Genic</small>
                                    <h3>Dr. Watchmaker</h3>
                                    <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
                                    <span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>
                                    <a href="badges.html" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img src="{{ url('/assets/img/badges/badge_4.svg') }}" width="15" height="15" alt=""></a>
                                </div>
                                <ul>
                                    <li><a href="#0" onclick="onHtmlClick('Doctors', 1)"><i class="icon_pin_alt"></i>View on map</a></li>
                                    <li><a href="https://www.google.com/maps/" target="_blank"><i class="icon_pin_alt"></i>Directions</a></li>
                                    <li><a href="{{ url('detail-portfolio') }}">Book now</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /box_list -->

                        <div class="col-md-6">
                            <div class="box_list wow fadeIn">
                                <a href="#0" class="wish_bt"></a>
                                <figure>
                                    <a href="{{ url('detail-portfolio') }}"><img src="{{ url('/assets/img/doctor_listing_5.jpg') }}" class="img-fluid" alt="">
                                        <div class="preview"><span>Read more</span></div>
                                    </a>
                                </figure>
                                <div class="wrapper">
                                    <small>genic</small>
                                    <h3>Dr. Watchmaker</h3>
                                    <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
                                    <span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>
                                    <a href="badges.html" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img src="{{ url('/assets/img/badges/badge_4.svg') }}" width="15" height="15" alt=""></a>
                                </div>
                                <ul>
                                    <li><a href="#0" onclick="onHtmlClick('Doctors', 1)"><i class="icon_pin_alt"></i>View on map</a></li>
                                    <li><a href="https://www.google.com/maps/" target="_blank"><i class="icon_pin_alt"></i>Directions</a></li>
                                    <li><a href="{{ url('detail-portfolio') }}">Book now</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /box_list -->

                        <div class="col-md-6">
                            <div class="box_list wow fadeIn">
                                <a href="#0" class="wish_bt"></a>
                                <figure>
                                    <a href="{{ url('detail-portfolio') }}"><img src="{{ url('/assets/img/doctor_listing_6.jpg') }}" class="img-fluid" alt="">
                                        <div class="preview"><span>Read more</span></div>
                                    </a>
                                </figure>
                                <div class="wrapper">
                                    <small>Pediatrician</small>
                                    <h3>Dr. Sunshine</h3>
                                    <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
                                    <span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>
                                    <a href="badges.html" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img src="{{ url('/assets/img/badges/badge_4.svg') }}" width="15" height="15" alt=""></a>
                                </div>
                                <ul>
                                    <li><a href="#0" onclick="onHtmlClick('Doctors', 2)"><i class="icon_pin_alt"></i>View on map</a></li>
                                    <li><a href="https://www.google.com/maps/dir//Assistance+–+Hôpitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+–+Hôpitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank"><i class="icon_pin_alt"></i>Directions</a></li>
                                    <li><a href="{{ url('detail-portfolio') }}">Book now</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /box_list -->

                    </div>
                    <!-- /row -->

                    <nav aria-label="" class="add_top_20">
                        <ul class="pagination pagination-sm">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                    <!-- /pagination -->
                </div>
                <!-- /col -->

                <aside class="col-lg-4" id="sidebar">
                    <div id="map_listing" class="normal_list">
                    </div>
                </aside>
                <!-- /aside -->

            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </main>
    <!-- /main -->
@endsection
