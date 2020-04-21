@extends('master')
@section('content')

    @if ($errors->has('code'))
        <a href="#" id="alert" class="btn btn-secondary" data-notify-position="top-right" data-notify-type="error" data-notify-msg="{{ $errors->first('code') }}" style="display:none;"></a>
        <script>
            window.onload = function () {
                SEMICOLON.widget.notifications('#alert'); return false;
            };
        </script>
    @endif

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
                    <h3 style="text-align: center;">We sent a verification code to @if (session('number')){{ session('number') }}@endif. <a href="{{ url('change') }}">Change?</a></h3>
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