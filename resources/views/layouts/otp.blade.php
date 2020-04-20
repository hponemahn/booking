@extends('master')
@section('content')

@if (session('number'))
    <div class="alert alert-success">
        {{ session('number') }}
    </div>
@endif

    <!-- Content
		============================================= -->
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">
                <div class="form-widget">
                    <div class="form-result"></div>
                    <div class="row">
                        <div class="col-lg-12">
                            <form id="car-rental" class="row" action="{{ url('otp') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                
                                <input type="hidden" name="number" value="@if (session('number'))
                                    {{ session('number') }}
                            @endif">

                                <div class="col-md-6 form-group" style="margin: 0 auto;">
                                    <label for="car-rental-contact">Verification Code<small class="text-danger">*</small></label>
                                    <input type="number" name="code" id="car-rental-contact" class="form-control required" value="" placeholder="Enter your verification code" required>
                                </div>
                                
                                <div class="col-12 text-center" style="margin-top: 30px;">
                                    <button type="submit" name="car-rental-submit" class="btn btn-success btn-lg">Book Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection