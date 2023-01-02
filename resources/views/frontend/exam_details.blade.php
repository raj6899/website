@extends('frontend.layout.main')
@section('title', 'Aeronautics | Exam Details')
@section('description', 'Aeronautics')
@section('keywords', 'Aeronautics')
@section('canonical', url(Request::url()))
@section('main.container')
    <style>
        .d_space {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        @media (max-width: 600px) {
            .d_space {
                flex-direction: column;
            }
        }
    </style>

    <div class="exam_details">
        <div class="container">
            <section class="h-100 gradient-custom">
                <div class="container py-5 h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-lg-10 col-xl-8">
                            <div class="card" style="border-radius: 10px">
                                <div class="card-header px-4 py-5">
                                    <h5 class="text-muted mb-0">
                                        <span style="color: #910606">{{ $exam->examname }}</span>!
                                    </h5>
                                </div>
                                <div class="card-body p-4">
                                    <div class="p-4 border mb-4">
                                        <div class="d_space">
                                            <p class="lead fw-normal mb-0" style="color: #910606">
                                                Application Begin :
                                            </p>
                                            <p class="small text-muted mb-0">{{ date('d M Y',strtotime($exam->examdate))}}</p>
                                        </div>

                                        <div class="d_space">
                                            <p class="lead fw-normal mb-0" style="color: #910606">
                                                Last Date for Apply Online :
                                            </p>
                                            <p class="small text-muted mb-0" >
                                                <span style="color: #910606">
                                                    {{ date('d M Y',strtotime($exam->lastdate))}}
                                                </span>
                                            </p>
                                        </div>
                                        <div class="d_space">
                                            <p class="lead fw-normal mb-0" style="color: #910606">
                                                Total Seats :
                                            </p>
                                            <p class="small text-muted mb-0">
                                                {{ $exam->seats }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="card shadow-0 border mb-4">
                                        <div class="card-body">
                                            <div class="row">
                                                {!! $exam->important_des !!}

                                                {{-- <div class="col-md-6 text-center text-md-start">
                                                    <div class="" style="color: #910606">
                                                        <h2>Important Dates</h2>
                                                    </div>
                                                    <div>
                                                        <ul style="list-style: none; padding: 0">
                                                            <li>Application Begin : 22/04/2022</li>
                                                            <li>Application Begin : 22/04/2022</li>
                                                            <li>Application Begin : 22/04/2022</li>
                                                            <li>Application Begin : 22/04/2022</li>
                                                            <li>Application Begin : 22/04/2022</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 text-center text-md-start">
                                                    <div class="" style="color: #910606">
                                                        <h2>Application Fee</h2>
                                                    </div>
                                                    <div>
                                                        <ul style="list-style: none; padding: 0">
                                                            <li>Application Begin : 22/04/2022</li>
                                                            <li>Application Begin : 22/04/2022</li>
                                                            <li>Application Begin : 22/04/2022</li>
                                                            <li>Application Begin : 22/04/2022</li>
                                                            <li>Application Begin : 22/04/2022</li>
                                                        </ul>
                                                    </div>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card shadow-0 border mb-4">
                                        <div class="card-body">
                                            <div class="row">
                                                {!! $exam->description !!}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-between pt-2">
                                        <p class="text-muted mb-0">Apply Now</p>
                                        <p class="text-muted mb-0">
                                            <span class="fw-bold me-4"><a href="{{url('/apply')}}" class="badge read_more">Apply Now</a></span>
                                        </p>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

@endsection
