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
    <div class="new_apply p-4">
        <div class="container">
            <div class="row">
                <div class="col-md-3 border pt-3">
                    <div class="apply_btn_box">
                        <button style="background-color: darkblue">
                            Personal Details
                        </button>
                        <button>Qualification</button>
                        <button>Document</button>
                    </div>
                </div>
                <div class="col-md-9 border py-3">
                    <div class="apply_btn_form">
                        <form action="">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="" class="form-label">First Name:</label>
                                    <input type="text" class="form-control" />
                                </div>
                                <div class="col-md-6 mt-2 mt-md-0">
                                    <label for="" class="form-label">Last Name:</label>
                                    <input type="text" class="form-control" />
                                </div>
                                <div class="col-md-6 mt-2">
                                    <label for="" class="form-label">Mobile No.:</label>
                                    <input type="number" class="form-control" />
                                </div>
                                <div class="col-md-6 mt-2">
                                    <label for="" class="form-label">Email Id:</label>
                                    <input type="email" class="form-control" />
                                </div>
                                <div class="col-md-6 mt-2">
                                    <label for="" class="form-label">Father's Name:</label>
                                    <input type="text" class="form-control" />
                                </div>
                                <div class="col-md-6 mt-2">
                                    <label for="" class="form-label">Mother's Name:</label>
                                    <input type="text" class="form-control" />
                                </div>
                                <div class="col-md-6 mt-2">
                                    <label for="" class="form-label">Date Of Birth:</label>
                                    <input type="date" class="form-control" />
                                </div>
                                <div class="col-md-6 mt-2">
                                    <label for="" class="form-label">Gender:</label>
                                    <div class="gender_box">
                                        <input type="radio" name="Gender" class="form-check-input" />
                                        <label for="">Male</label>
                                        <input type="radio" name="Gender" class="form-check-input" />
                                        <label for="">Female</label>
                                        <input type="radio" name="Gender" class="form-check-input" />
                                        <label for="">Others</label>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-2">
                                    <label for="" class="form-label">State</label>
                                    <select name="" id="" class="form-select">
                                        <option value="">State</option>
                                        <option value="">Arunachal Pradesh</option>
                                        <option value="">Assam</option>
                                        <option value="">Bihar</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mt-2">
                                    <label for="" class="form-label">State</label>
                                    <select name="" id="" class="form-select">
                                        <option value="">City</option>
                                        <option value="">Noida</option>
                                        <option value="">Grugram</option>
                                        <option value="">Lucknow</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mt-2">
                                    <label for="" class="form-label">Address:</label>
                                    <input type="text" class="form-control" />
                                </div>
                                <div class="col-md-6 mt-2">
                                    <label for="" class="form-label">Pincode:</label>
                                    <input type="number" class="form-control" />
                                </div>
                                <div class="col-md-6 mt-2">
                                    <h4>Center Prefer:</h4>
                                    <select name="" id="" class="form-select">
                                        <option value="">Center 1</option>
                                        <option value="">Center 2</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mt-2">
                                    <h4>Center Prefer:</h4>
                                    <select name="" id="" class="form-select">
                                        <option value="">Center 1</option>
                                        <option value="">Center 2</option>
                                    </select>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <button class="btn btn-primary">Apply</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
