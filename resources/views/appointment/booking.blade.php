@extends('layouts.default')

@section('title', 'Booking appointment')

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
                                    <li><a href="#">Appointment</a></li>
                                    <li>Booking</li>
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
				<div class="col-xl-8 col-lg-8">
				<div class="box_general_3 cart">
					<div class="message">
						<p>Exisitng Customer? <a href="#0">Click here to login</a></p>
					</div>
					<div class="form_title">
						<h3><strong>1</strong>Your Details</h3>
						<p>
							Mussum ipsum cacilds, vidis litro abertis.
						</p>
					</div>
					<div class="step">
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label>First name</label>
									<input type="text" class="form-control" id="firstname_booking" name="firstname_booking">
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label>Last name</label>
									<input type="text" class="form-control" id="lastname_booking" name="lastname_booking" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label>Email</label>
									<input type="email" id="email_booking" name="email_booking" class="form-control" >
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label>Confirm email</label>
									<input type="email" id="email_booking_2" name="email_booking_2" class="form-control" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label>Telephone</label>
									<input type="text" id="telephone_booking" name="telephone_booking" class="form-control" placeholder="00 44 678 94329">
								</div>
							</div>
						</div>
					</div>
					<hr>
					<!--End step -->

					<!-- <div class="form_title">
						<h3><strong>2</strong>Payment Information</h3>
						<p>
							Mussum ipsum cacilds, vidis litro abertis.
						</p>
					</div>
					<div class="step">
						<div class="form-group">
							<label>Name on card</label>
							<input type="text" class="form-control" id="name_card_booking" name="name_card_booking" placeholder="">
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Card number</label>
									<input type="text" id="card_number" name="card_number" class="form-control" placeholder="xxxx - xxxx - xxxx - xxxx">
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<img src="{{ url('/assets/img/payments.png') }}" alt="Cards" class="cards">
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<label>Expiration date</label>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" id="expire_month" name="expire_month" class="form-control" placeholder="MM">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" id="expire_year" name="expire_year" class="form-control" placeholder="Year">
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Security code</label>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<input type="text" id="ccv" name="ccv" class="form-control" placeholder="CCV">
											</div>
										</div>
										<div class="col-md-8">
											<img src="{{ url('/assets/img/icon_ccv.gif') }}" width="50" height="29" alt="ccv"><small>Last 3 digits</small>
										</div>
									</div>
								</div>
							</div>
						</div> -->
						<!--End row

						<h5>Or checkout with Paypal</h5>
						<p>
							Lorem ipsum dolor sit amet, vim id accusata sensibus, id ridens quaeque qui. Ne qui vocent ornatus molestie, reque fierent dissentiunt mel ea.
						</p>
						<p>
							<img src="{{ url('/assets/img/paypal_bt.png') }}" alt="Image">
						</p>
					</div>
					<hr> -->
					<!--End step -->



					<hr>
					<!--End step -->
					<div id="policy">
						<h4>Cancellation policy</h4>
						<div class="form-group">
							<div class="checkboxes">
								<label class="container_check">I accept <a href="#0">terms and conditions and general policy</a>
									<input type="checkbox">
									<span class="checkmark"></span>
                  	<a href="{{ url('confirm') }}" class="btn_1 full-width">Confirm</a>
								</label>
							</div>
						</div>
					</div>
				</div>
				</div>
				<!-- /col -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</main>
    <!-- /main -->
@endsection
