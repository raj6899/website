@extends('frontend.layout.main')
@section('title', 'Aeronautics | Apply')
@section('description', 'Aeronautics')
@section('keywords', 'Aeronautics')
@section('canonical', url(Request::url()))
@section('main.container')
<div class="banner_sec">
    <div class="banner_img">
        <img src="./assets/img/About-us-banner.jpg" alt="" class="w-100" />
    </div>
    <!-- RTI banner section  -->
    <div class="banner_title">
        <h2>Apply Now</h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                  Apply
                </li>
            </ol>
        </nav>
    </div>
   
</div>

    <!-- apply forms  -->
    <div class="apply_now">
        <div class="container">
            <section class="gradient-custom">
                <div class="container py-5 h-100">
                    <div class="row justify-content-center align-items-center h-100">
                        <div class="col-12 col-lg-9 col-xl-7">
                            <div class="card shadow-2-strong card-registration" style="border-radius: 15px">
                                <div class="card-body p-4 p-md-5">
                                    <h3 class="pb-2 pb-md-0 mb-md-5">Apply Now</h3>
                                    <form>
                                        <div class="row">
                                            <div class="col-md-6 mb-md-4">
                                                <div class="form-outline">
                                                    <input type="text" id="firstName"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="firstName">First Name</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-md-4">
                                                <div class="form-outline">
                                                    <input type="text" id="lastName"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="lastName">Last Name</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 d-flex align-items-center mb-md-4">
                                                <div class="form-outline datepicker w-100">
                                                    <input type="text" class="form-control form-control-lg"
                                                        id="birthdayDate" />
                                                    <label for="birthdayDate" class="form-label">Date Of Birth</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-md-4">
                                                <h6 class="mb-2 pb-1 fw-bold">Gender:</h6>

                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                        id="femaleGender" value="option1" checked />
                                                    <label class="form-check-label" for="femaleGender">Female</label>
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                        id="maleGender" value="option2" />
                                                    <label class="form-check-label" for="maleGender">Male</label>
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                        id="otherGender" value="option3" />
                                                    <label class="form-check-label" for="otherGender">Other</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-md-4">
                                                <div class="form-outline">
                                                    <input type="email" id="emailAddress"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="emailAddress">Email</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-md-4">
                                                <div class="form-outline">
                                                    <input type="tel" id="phoneNumber"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="phoneNumber">Phone Number</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-md-4">
                                                <input type="file" class="form-control" id="customFile" />
                                                <label class="form-label" for="customFile">Aadhaar Card</label>
                                            </div>
                                            <div class="col-md-6 mb-md-4">
                                                <input type="file" class="form-control" id="customFile" />
                                                <label class="form-label" for="customFile">Upload Photo</label>
                                            </div>
                                            <div class="col-md-6 mb-md-4">
                                                <input type="file" class="form-control" id="customFile" />
                                                <label class="form-label" for="customFile">Signature</label>
                                            </div>
                                        </div>
                                        <div class="">
                                            <button class="apply_btn">Apply Now</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

@endsection
