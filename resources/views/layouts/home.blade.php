@extends('master')
@section('css')
    <style>
        .form-group > label.error {
            display: block !important;
            text-transform: none;
        }

        .form-group input.valid ~ label.error,
        .form-group input[type="text"] ~ label.error,
        .form-group input[type="email"] ~ label.error,
        .form-group input[type="number"] ~ label.error,

        .form-group select ~ label.error { display: none !important; }

        .car-list .car-image [type=radio] { margin-right: 4px; }

        .car-list .car-image div {
            background-color: #F5F5F5;
            padding: 12px;
            margin-left: 8px;
        }

        .car-list .car-image img {
            display: block;
            margin-top: 10px;
        }

    </style>
@endsection
@section('content')

    @include('layouts.slider')

    @if (session('status'))
        <a href="#" id="alert" class="btn btn-secondary" data-notify-position="top-right" data-notify-type="success" data-notify-msg="{{ session('status') }}" style="display:none;"></a>
        <script>
            window.onload = function () {
                SEMICOLON.widget.notifications('#alert'); return false;
            };
        </script>
    @endif

    <!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="form-widget">

						<div class="form-result"></div>

						<div class="row">
							<div class="col-lg-4 order-lg-1 mb-4">
								<div class="card bg-light topmargin-sm">
									<div class="card-body">
										<h4 class="mb-3 d-block">Your Price</h4>
										<h2 class="car-rent-price h1 t600">10,000 MMK</h2>
										<div class="line line-sm"></div>
										<ul class="iconlist mb-0">
											<li class="h6 pb-1"><i class="icon-line-circle-check"></i> Get the cut that'll suit you best at the comfort of your home. Don't worry, we clean up after the service & leave your place spic & span.</li>
                                            <li class="h6 pb-1"><i class="icon-line-circle-check"></i> Approximate Service Duration - 60 Mins</li>
                                            <li class="h6"><i class="icon-line-circle-check"></i> No need to pay transportation charges</li>
											<li class="h6 pb-1"><i class="icon-line-circle-check"></i> Cancel at Any Time, Free of Charge</li>
											<li class="h6 pb-1"><i class="icon-line-circle-check"></i> Credit Card not required</li>
											<li class="h6 pb-1"><i class="icon-line-circle-check"></i> Pay when you finished</li>
										</ul>
									</div>
								</div>
							</div>

                            <div class="col-lg-8">
                                <form id="car-rental" class="row" action="{{ url('book') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-process"></div>
                            
                            
                            <div class="col-12">
                                <label>Select a Service:</label>
                                <div class="row car-list btn-group">
                                    <label class="car-image pr-0 col-6 col-md-3">
                                        <div class="ml-0">
                                            <input type="radio" name="service" class="required" id="car-rental-cars-creta" autocomplete="off" data-price="30" value="Cut" checked> Hair Cuts
                                            <img src="{{ asset('images/forms/car/1_400x171.jpg') }}" alt="">
                                        </div>
                                    </label>
                            
                                    <label class="car-image px-0 col-6 col-md-3"  style="cursor: not-allowed;opacity: .6;">
                                        <div>
                                            <input type="radio" name="service" class="required" id="car-rental-cars-honda" autocomplete="off" data-price="35" value="Honda" disabled> Hair Wash
                                            <img src="{{ asset('images/forms/car/2_400x171.jpg') }}" alt="">
                                        </div>
                                    </label>
                            
                                    <label class="car-image px-0 col-6 col-md-3" style="cursor: not-allowed;opacity: .6;">
                                        <div class="ml-3 ml-md-2">
                                            <input type="radio" name="service" class="required" id="car-rental-cars-fortuner" autocomplete="off" data-price="52" value="Fortuner" disabled> Face Wash
                                        <img src="{{ asset('images/forms/car/3_400x171.jpg') }}" alt="">
                                        </div>
                                    </label>
                            
                                    <label class="car-image px-0 col-6 col-md-3" style="cursor: not-allowed;opacity: .6;">
                                        <div>
                                            <input type="radio" name="service" class="required" id="car-rental-cars-i20" autocomplete="off" data-price="25" value="i20" disabled> Color Hair
                                        <img src="{{ asset('images/forms/car/4_400x171.jpeg') }}" alt="">
                                        </div>
                                    </label>
                                </div>
                            </div>
                            
                            
                            <div class="col-12">
                                <div class="row input-daterange">
                                    
                                    <div class="col-md-6 form-group">
                                        <label for="car-rental-pickup-date">Book Date<small class="text-danger">*</small></label>
                                        
                                        <input type="text" name="date" value="" class="form-control tleft default" placeholder="Select Book Date" required>

                                        {{-- <input type="text" name="date" id="car-rental-pickup-date" class="form-control input-datepicker tleft disabled-week required" value="" placeholder="Select Book Date" required> --}}
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="car-rental-dropoff-date">Book Time<small class="text-danger">*</small></label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="time" required>
                                            <option value="">Select Book Time</option>
                                            <option value="9:00 - 10:30">9:00 - 11:00</option>
                                            <option value="10:30 - 12:00">11:00 - 01:00</option>
                                            <option value="12:00 - 1:30">01:00 - 03:00</option>
                                            <option value="3:00 - 4:30">03:00 - 05:00</option>
                                            <option value="3:00 - 4:30">05:00 - 07:00</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6 form-group">
                                <label for="car-rental-name">Name<small class="text-danger">*</small></label>
                                <input type="text" id="car-rental-name" name="name" value="" class="form-control required" placeholder="Enter your Full Name" required/>
                            </div>
                            
                            <div class="col-md-6 form-group">
                                <label for="car-rental-contact">Contact Number<small class="text-danger">*</small></label>
                                <input type="number" name="number" id="car-rental-contact" class="form-control required" value="" placeholder="Enter your contact Number" required>
                            </div>
                            
                            <div class="col-md-6 form-group">
                                <label for="car-rental-name">Email</label>
                                <input type="email" name="email" id="car-rental-email" class="form-control" value="" placeholder="Enter your Email Address">
                            </div>
                            
                            <div class="col-md-6 form-group">
                                <label for="exampleFormControlSelect1">Township<small class="text-danger">*</small></label>
                                <select class="form-control" name="township" id="exampleFormControlSelect1" required>
                                    <option value="">Select Township</option>
                                    @foreach ($townships as $township)
                                    <option value="{{$township->id}}">{{$township->township}}</option>    
                                    @endforeach
                                    
                                    {{-- <option value="bahan">Bahan</option>
                                    <option value="insein">Insein</option>
                                    <option value="ahlone">Ahlone</option> --}}
                                </select>
                            </div>
                            
                            <div class="col-12 form-group">
                                <label for="car-rental-address">Address<small class="text-danger">*</small></label>
                                <input type="text" name="address" id="car-rental-address" class="form-control required" value="" placeholder="Enter your Address" required>
                            </div>
                            
                            <div class="col-12 form-group">
                                <label for="exampleFormControlTextarea1">Message</label>
                                <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            
                            
                            <div class="col-12 mt-2 mb-3">
                                <div class="card p-3 bg-light">
                                    <div class="car-body">
                                        <h3 class="mb-2">Book Without Paying</h3>
                                        <p class="mb-0">Book now and pay your total in your place.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 hidden">
                                <input type="text" id="car-rental-botcheck" name="car-rental-botcheck" value="" />
                            </div>
                            <div class="col-12">
                                <button type="submit" name="car-rental-submit" class="btn btn-success btn-lg">Book Now</button>
                            </div>
                            
                            <input type="hidden" name="prefix" value="car-rental-">
                            <input type="hidden" name="replyto" value="car-rental-email">
                            <input type="hidden" name="autoresponder" value="true">
                            <input type="hidden" name="subject" value="New Car Rental Request">
                            <input type="hidden" name="ar_title" value="Your Booking">
                            <input type="hidden" name="ar_message" value="Dear {car-rental-name},<br><br>Your Car <strong>{car-rental-selected-car}</strong> Booking has been confirmed. Our Driver will pick you up on <strong>{car-rental-pickup-date}</strong> at <strong>{car-rental-pickup-address}</strong> <strong>{car-rental-pickup-hotel-name}</strong>.<br><br>Thank You.">
                            
                            </form>
                            </div>

						</div>

					</div>

				</div>

			</div>

		</section><!-- #content end -->    
@endsection