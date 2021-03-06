@extends('layouts.default')

@section('title', 'Detail doctor')

@section('content')
    <main>
        <div id="results">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div id="breadcrumb">
                            <div class="container">
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">specialistes</a></li>
                                    <li>detail</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /results -->

		<div class="container margin_60">
			<div class="row">
				<aside class="col-xl-3 col-lg-4" id="sidebar">
					<div class="box_profile">
						<figure>
							<img src="{{ url('/assets/img/doctor_listing_2.jpg') }}" alt="" class="img-fluid">
						</figure>
						<small>Primary care - Internist</small>
						<h1>DR. Julia Jhones</h1>
						<span class="rating">
							<i class="icon_star voted"></i>
							<i class="icon_star voted"></i>
							<i class="icon_star voted"></i>
							<i class="icon_star voted"></i>
							<i class="icon_star"></i>
							<small>(145)</small>
							<a href="badges.html" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img src="{{ url('img/badges/badge_1.svg') }}" width="15" height="15" alt=""></a>
						</span>
						<ul class="contacts">
							<li><h6>Address</h6>859 60th, Brooklyn, NY, 11220</li>
							<li><h6>Phone</h6><a href="tel://000434323342">+00043 4323342</a></li>
						</ul>
						<div class="text-center"><a href="https://www.google.com/maps" class="btn_1 outline" target="_blank"><i class="icon_pin"></i> View on map</a></div>
					</div>
				</aside>
				<!-- /asdide -->

				<div class="col-xl-9 col-lg-8">

					<div class="tabs_styled_2">
						<ul class="nav nav-tabs" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="book-tab" data-toggle="tab" href="#book" role="tab" aria-controls="book">Book an appointment</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="general-tab" data-toggle="tab" href="#general" role="tab" aria-controls="general" aria-expanded="true">General info</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="reviews-tab" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews">Reviews</a>
							</li>
						</ul>
						<!--/nav-tabs -->

						<div class="tab-content">

							<div class="tab-pane fade show active" id="book" role="tabpanel" aria-labelledby="book-tab">
								<p class="lead add_bottom_30">Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
								<form action="{{ route('book.store') }}" method="POST">
                  {{ csrf_field() }}
									<div class="main_title_3">
										<h3><strong>1</strong>Select your date</h3>
									</div>
									<div class="form-group add_bottom_45">
										<div id="calendar"></div>
										<input type="hidden" id="my_hidden_input" name="date" required="required">

										<ul class="legend">
											<li><strong></strong>Available</li>
											<li><strong></strong>Not available</li>
										</ul>
									</div>
									<div class="main_title_3">
										<h3><strong>2</strong>Select your time</h3>
									</div>
									<div class="row justify-content-center add_bottom_45">
										<div class="col-md-3 col-6 text-center">
											<ul class="time_select">
												<li>
													<input type="radio" id="radio1" name="radio_time" value="09:30">
													<label for="radio1">09:30</label>
												</li>
												<li>
													<input type="radio" id="radio2" name="radio_time" value="10:00">
													<label for="radio2">10.00am</label>
												</li>
												<li>
													<input type="radio" id="radio3" name="radio_time" value="10:30">
													<label for="radio3">10.30am</label>
												</li>
												<li>
													<input type="radio" id="radio4" name="radio_time" value="11:00">
													<label for="radio4">11.00am</label>
												</li>
												<li>
													<input type="radio" id="radio5" name="radio_time" value="11:30">
													<label for="radio5">11.30am</label>
												</li>
												<li>
													<input type="radio" id="radio6" name="radio_time" value="12:00">
													<label for="radio6">12.00am</label>
												</li>
											</ul>
										</div>
										<div class="col-md-3 col-6 text-center">
											<ul class="time_select">
												<li>
													<input type="radio" id="radio7" name="radio_time" value="01.30pm">
													<label for="radio7">01.30pm</label>
												</li>
												<li>
													<input type="radio" id="radio8" name="radio_time" value="02.00pm">
													<label for="radio8">02.00pm</label>
												</li>
												<li>
													<input type="radio" id="radio9" name="radio_time" value="02.30pm">
													<label for="radio9">02.30pm</label>
												</li>
												<li>
													<input type="radio" id="radio10" name="radio_time" value="03.00pm">
													<label for="radio10">03.00pm</label>
												</li>
												<li>
													<input type="radio" id="radio11" name="radio_time" value="03.30pm">
													<label for="radio11">03.30pm</label>
												</li>
												<li>
													<input type="radio" id="radio12" name="radio_time" value="04.00pm">
													<label for="radio12">04.00pm</label>
												</li>
											</ul>
										</div>
									</div>
									<!-- /row -->

									<!-- <div class="main_title_3">
										<h3><strong>3</strong>Select visit</h3>
									</div>
									<ul class="treatments clearfix">
										<li>
											<div class="checkbox">
												<input type="checkbox" class="css-checkbox" id="visit1" name="visit1">
												<label for="visit1" class="css-label">Back Pain visit <strong>$55</strong></label>
											</div>
										</li>
										<li>
											<div class="checkbox">
												<input type="checkbox" class="css-checkbox" id="visit2" name="visit2">
												<label for="visit2" class="css-label">Cardiovascular screen <strong>$55</strong></label>
											</div>
										</li>
										<li>
											<div class="checkbox">
												<input type="checkbox" class="css-checkbox" id="visit3" name="visit3">
												<label for="visit3" class="css-label">Diabetes consultation <strong>$55</strong></label>
											</div>
										</li>
										<li>
											<div class="checkbox">
												<input type="checkbox" class="css-checkbox" id="visit4" name="visit4">
												<label for="visit4" class="css-label">Icontinence visit <strong>$55</strong></label>
											</div>
										</li>
										<li>
											<div class="checkbox">
												<input type="checkbox" class="css-checkbox" id="visit5" name="visit5">
												<label for="visit5" class="css-label">Foot Pain visit <strong>$55</strong></label>
											</div>
										</li>
										<li>
											<div class="checkbox">
												<input type="checkbox" class="css-checkbox" id="visit6" name="visit6">
												<label for="visit6" class="css-label">Food intollerance visit <strong>$55</strong></label>
											</div>
										</li>
										<li>
											<div class="checkbox">
												<input type="checkbox" class="css-checkbox" id="visit7" name="visit7">
												<label for="visit7" class="css-label">Neck Pain visit <strong>$55</strong></label>
											</div>
										</li>
										<li>
											<div class="checkbox">
												<input type="checkbox" class="css-checkbox" id="visit8" name="visit8">
												<label for="visit8" class="css-label">Back Pain visit <strong>$55</strong></label>
											</div>
										</li>
									</ul> -->
                	<center>  <input type="submit" value="Book Now"  class="btn_1 medium text-center" />	</center>
								</form>
								<hr>
					 		</div>
							<!-- /tab_1 -->

							<div class="tab-pane fade" id="general" role="tabpanel" aria-labelledby="general-tab">
								<p class="lead add_bottom_30">Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
								<div class="indent_title_in">
									<i class="pe-7s-user"></i>
									<h3>Professional statement</h3>
									<p>Mussum ipsum cacilds, vidis litro abertis.</p>
								</div>
								<div class="wrapper_indent">
									<p>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Nullam mollis. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapi.</p>
									<h6>Specializations</h6>
									<div class="row">
										<div class="col-lg-6">
											<ul class="bullets">
												<li>Abdominal Radiology</li>
												<li>Addiction Psychiatry</li>
												<li>Adolescent Medicine</li>
												<li>Cardiothoracic Radiology </li>
											</ul>
										</div>
										<div class="col-lg-6">
											<ul class="bullets">
												<li>Abdominal Radiology</li>
												<li>Addiction Psychiatry</li>
												<li>Adolescent Medicine</li>
												<li>Cardiothoracic Radiology </li>
											</ul>
										</div>
									</div>
									<!-- /row-->
								</div>
								<!-- /wrapper indent -->

								<hr>

								<div class="indent_title_in">
									<i class="pe-7s-news-paper"></i>
									<h3>Education</h3>
									<p>Mussum ipsum cacilds, vidis litro abertis.</p>
								</div>
								<div class="wrapper_indent">
									<p>Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Nullam mollis. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapi.</p>
									<h6>Curriculum</h6>
									<ul class="list_edu">
										<li><strong>New York Medical College</strong> - Doctor of Medicine</li>
										<li><strong>Montefiore Medical Center</strong> - Residency in Internal Medicine</li>
										<li><strong>New York Medical College</strong> - Master Internal Medicine</li>
									</ul>

								</div>
								<!--  End wrapper indent -->

								<hr>

								<div class="indent_title_in">
									<i class="pe-7s-cash"></i>
									<h3>Prices &amp; Payments</h3>
									<p>Mussum ipsum cacilds, vidis litro abertis.</p>
								</div>
								<div class="wrapper_indent">
									<p>Zril causae ancillae sit ea. Dicam veritus mediocritatem sea ex, nec id agam eius. Te pri facete latine salutandi, scripta mediocrem et sed, cum ne mundi vulputate. Ne his sint graeco detraxit, posse exerci volutpat has in.</p>
									<div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Service - Visit</th>
                                                    <th>Price</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>New patient visit</td>
                                                    <td>$34</td>
                                                </tr>
                                                <tr>
                                                    <td>General consultation</td>
                                                    <td>$60</td>
                                                </tr>
                                                <tr>
                                                    <td>Back Pain</td>
                                                    <td>$40</td>
                                                </tr>
                                                <tr>
                                                    <td>Diabetes Consultation</td>
                                                    <td>$55</td>
                                                </tr>
                                                <tr>
                                                    <td>Eating disorder</td>
                                                    <td>$60</td>
                                                </tr>
                                                <tr>
                                                    <td>Foot Pain</td>
                                                    <td>$35</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
								</div>
								<!--  End wrapper_indent -->

							</div>
							<!-- /tab_2 -->

							<div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
								<div class="reviews-container">
									<div class="row">
										<div class="col-lg-3">
											<div id="review_summary">
												<strong>4.7</strong>
												<div class="rating">
													<i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
												</div>
												<small>Based on 4 reviews</small>
											</div>
										</div>
										<div class="col-lg-9">
											<div class="row">
												<div class="col-lg-10 col-9">
													<div class="progress">
														<div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
												</div>
												<div class="col-lg-2 col-3"><small><strong>5 stars</strong></small></div>
											</div>
											<!-- /row -->
											<div class="row">
												<div class="col-lg-10 col-9">
													<div class="progress">
														<div class="progress-bar" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
												</div>
												<div class="col-lg-2 col-3"><small><strong>4 stars</strong></small></div>
											</div>
											<!-- /row -->
											<div class="row">
												<div class="col-lg-10 col-9">
													<div class="progress">
														<div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
												</div>
												<div class="col-lg-2 col-3"><small><strong>3 stars</strong></small></div>
											</div>
											<!-- /row -->
											<div class="row">
												<div class="col-lg-10 col-9">
													<div class="progress">
														<div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
												</div>
												<div class="col-lg-2 col-3"><small><strong>2 stars</strong></small></div>
											</div>
											<!-- /row -->
											<div class="row">
												<div class="col-lg-10 col-9">
													<div class="progress">
														<div class="progress-bar" role="progressbar" style="width: 0" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
												</div>
												<div class="col-lg-2 col-3"><small><strong>1 stars</strong></small></div>
											</div>
											<!-- /row -->
										</div>
									</div>
									<!-- /row -->

									<hr>

								</div>
								<!-- End review-container -->
								<hr>
								<div class="text-right"><a href="{{ url('submit-review') }}" class="btn_1 add_bottom_15">Submit review</a></div>
							</div>
							<!-- /tab_3 -->
						</div>
						<!-- /tab-content -->
					</div>
					<!-- /tabs_styled -->
				</div>
				<!-- /col -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</main>
    <!-- /main -->

@endsection
