@extends('frontend.layout.main')
@section('title', 'Aeronautics | Home')
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
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Active Exam
                    </li>
                </ol>
            </nav>
        </div>       
    </div>
     <!-- container -->
    <div class="active_exam p-5">
        <div class="container">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link button_3" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                        type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                        ACTIVE EXAMINATIONS
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link button_3" id="pills-profile-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                        aria-selected="false">
                        UPCOMING EXAMINATIONS
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link button_3" id="pills-contact-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                        aria-selected="false">
                        PAST EXAMINATIONS
                    </button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"
                    tabindex="0">                    
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Exam Name</th>
                                    <th scope="col">Last Date</th>
                                    <th scope="col">Issue of Admit Card</th>
                                    <th scope="col">Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($active as $actives)
                                <tr>
                                    <th scope="row">1</th>
                                    <td>{{ $actives->nameexam }}</td>
                                    <td>{{ date('d M Y',strtotime($actives->lastdate))}}</td>
                                    <td>{{ date('d M Y',strtotime($actives->admitdate))}}</td>
                                    <td><a href="">Download</a></td>
                                </tr>
                                @endforeach                                
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
                    tabindex="0">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Exam Name</th>
                                    <th scope="col">Upcoming Date</th>
                                    <th scope="col">Last Date</th>
                                    <th scope="col">Syllabus</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($upcoming as $upcomings)
                                <tr>
                                    <th scope="row">1</th>
                                    <td>{{ $upcomings->nameexam }}</td>
                                    <td>{{ date('d M Y',strtotime($upcomings->admitdate))}}</td>
                                    <td>{{ date('d M Y',strtotime($upcomings->lastdate))}}</td>                                    
                                    <td><a href=""> Download</a></td>
                                </tr>
                                @endforeach                                 
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"
                    tabindex="0">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Exam Name</th>
                                    <th scope="col">Last Date</th>
                                    <th scope="col">Declaration of Result</th>
                                    <th scope="col">Result</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($post as $post)
                                <tr>
                                    <th scope="row">1</th>
                                    <td>{{ $post->nameexam }}</td>
                                    <td>{{ $post->nameexam }}</td>
                                    <td>{{ $post->nameexam }}</td>
                                    <td><a href=""> Download</a></td>
                                </tr>
                                @endforeach    --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
