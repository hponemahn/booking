@extends('master')
@section('content')

    <!-- Content
		============================================= -->
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">
                <div class="form-widget">
                    <div class="form-result"></div>
                    <h3 style="text-align: center;">Change your phone number</h3>
                    <div class="row">
                        <div class="col-lg-12">
                            <form id="car-rental" class="row" action="{{ url('change') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                
                                <div class="col-md-6 form-group" style="margin: 0 auto;">
                                    <label for="car-rental-contact">Phone Number<small class="text-danger">*</small></label>
                                    <input type="number" name="number" id="car-rental-contact" class="form-control required" value="@if(session('number')){{ session('number') }}@endif" placeholder="Enter your phone number" required>
                                </div>
                                
                                <div class="col-12 text-center" style="margin-top: 30px;">
                                    <button type="submit" name="car-rental-submit" class="btn btn-success btn-lg">Change</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection