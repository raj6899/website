@extends('frontend.layout.main')
@section('title', 'Aeronautics | Institute')
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
            <h2>Institute</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Institute
                    </li>
                </ol>
            </nav>
        </div>

        <!-- container -->
    </div>

@endsection
