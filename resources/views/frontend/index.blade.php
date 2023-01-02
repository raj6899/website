@extends('frontend.layout.main')
@section('title', 'Aeronautics | Home')
@section('description', 'Aeronautics')
@section('keywords', 'Aeronautics')
@section('canonical', url(Request::url()))
@section('main.container')

    <div class="main_carousel p-5">
        <div class="owl-carousel owl-theme inner_carousel">
            @foreach ($sliders as $slider)
                @php
                    $img = str_replace('\\', '/', $slider->image);
                @endphp
                <div class="item">
                    <img src="{{asset('storage/'.$img)}}" alt="" />
                </div>
            @endforeach
           
        </div>
    </div>
    <div class="breaking_news">
        <div class="">
            <div class="ticker">
                <div class="news-title">
                    <h5>Announcements</h5>
                </div>
                <div class="news">
                    <marquee class="news-content">
                        <p>
                            School Will remain close on the occasion of diwali from 22nd
                            Oct, 2022 to 26th Oct 2022
                        </p>
                    </marquee>
                </div>
            </div>
        </div>
    </div>

    <!-- three section  -->

    <div class="three_sec">
        <div class="container">
            <section class="section pb-0">
                <div class="row">
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <h2 class="section-title">We Provided</h2>
                            </div>
                            <div class="col-lg-4 col-sm-6 mb-lg- mb-4">
                                <a href="{{ url('/active_exam') }}">
                                    <div class="hover-bg-primary text-center position-relative px-4 py-5 rounded-lg shadow">
                                        <img src="./assets/img/exam.png" alt="feature-image" />
                                        <h5 class="pt-2 pb-3 text-capitalize card-title">
                                            ACTIVE EXAMINATIONS
                                        </h5>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4 col-sm-6 mb-lg- mb-4">
                                <div class="hover-bg-primary text-center position-relative px-4 py-5 rounded-lg shadow">
                                    <img src="./assets/img/medal.png" alt="feature-image" />
                                    <h5 class="pt-2 pb-3 text-capitalize card-title">
                                        E-CERTIFICATE
                                    </h5>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 mb-lg- mb-4">
                                <div class="hover-bg-primary text-center position-relative px-4 py-5 rounded-lg shadow">
                                    <img src="./assets/img/test.png" alt="feature-image" />
                                    <h5 class="pt-2 pb-3 text-capitalize card-title">
                                        MOCK TEST
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="two_col py-5">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="border h-100 p-2 position-relative bg-white">
                                        <h2 class="icons" data-label="About Info"></h2>
                                        <p class="para">
                                            Lorem ipsum dolor sit amet consectetur, adipisicing
                                            elit. Iste quo mollitia quidem quis in veritatis atque,
                                            minima amet. Alias dicta necessitatibus, maxime veniam
                                            obcaecati eligendi esse temporibus sapiente sit
                                            perspiciatis adipisci numquam culpa optio consequuntur
                                            accusamus deserunt. Officia obcaecati nam saepe, rerum
                                            autem perferendis aliquid debitis iste iusto! Sapiente,
                                            eligendi? Lorem ipsum dolor sit amet consectetur,
                                            adipisicing elit. Iste quo mollitia quidem quis in
                                            veritatis atque, minima amet. Alias dicta
                                            necessitatibus, maxime veniam obcaecati eligendi esse
                                            temporibus sapiente sit perspiciatis adipisci numquam
                                            culpa optio consequuntur accusamus deserunt. Officia
                                            obcaecati nam saepe, rerum autem perferendis aliquid
                                            debitis iste iusto! Sapiente, eligendi?
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="border p-2 h-100 position-relative bg-white">
                                        <h2 class="icons" data-label="Latest Exam"></h2>
                                        <marquee direction="up" height="330px" scrollamount="5" onmouseover="stop()"
                                            onmouseout="start()">
                                            @foreach ($exams as $exam)
                                            <div class="d-flex">
                                                <i class="fa-solid fa-circle-chevron-right"></i>
                                                <p>
                                                    
                                                    {{ $exam->examname }} - {{ date('d M Y',strtotime($exam->examdate)) }}
                                                    <a href="{{url('/apply')}}" class="badge read_more">Apply Now</a>
                                                </p>
                                            </div>
                                            @endforeach
                                            {{-- <div class="d-flex">
                                                <i class="fa-solid fa-circle-chevron-right"></i>
                                                <p>
                                                    This is a sample scrolling text that has scrolls in
                                                    the upper direction.This is a sample scrolling text
                                                    that has scrolls in the upper direction.
                                                    <a href="#" class="badge read_more">Read More</a>
                                                </p>
                                            </div>
                                            <div class="d-flex">
                                                <i class="fa-solid fa-circle-chevron-right"></i>
                                                <p>
                                                    This is a sample scrolling text that has scrolls in
                                                    the upper direction.This is a sample scrolling text
                                                    that has scrolls in the upper direction.
                                                    <a href="#" class="badge read_more">Read More</a>
                                                </p>
                                            </div>
                                            <div class="d-flex">
                                                <i class="fa-solid fa-circle-chevron-right"></i>
                                                <p>
                                                    This is a sample scrolling text that has scrolls in
                                                    the upper direction.This is a sample scrolling text
                                                    that has scrolls in the upper direction.
                                                    <a href="#" class="badge read_more">Read More</a>
                                                </p>
                                            </div>
                                            <div class="d-flex">
                                                <i class="fa-solid fa-circle-chevron-right"></i>
                                                <p>
                                                    This is a sample scrolling text that has scrolls in
                                                    the upper direction.This is a sample scrolling text
                                                    that has scrolls in the upper direction.
                                                    <a href="#" class="badge read_more">Read More</a>
                                                </p>
                                            </div>
                                            <div class="d-flex">
                                                <i class="fa-solid fa-circle-chevron-right"></i>
                                                <p>
                                                    This is a sample scrolling text that has scrolls in
                                                    the upper direction.This is a sample scrolling text
                                                    that has scrolls in the upper direction.
                                                    <a href="#" class="badge read_more">Read More</a>
                                                </p>
                                            </div>
                                            <div class="d-flex">
                                                <i class="fa-solid fa-circle-chevron-right"></i>
                                                <p>
                                                    This is a sample scrolling text that has scrolls in
                                                    the upper direction.This is a sample scrolling text
                                                    that has scrolls in the upper direction.
                                                    <a href="#" class="badge read_more">Read More</a>
                                                </p>
                                            </div>
                                            <div class="d-flex">
                                                <i class="fa-solid fa-circle-chevron-right"></i>
                                                <p>
                                                    This is a sample scrolling text that has scrolls in
                                                    the upper direction.This is a sample scrolling text
                                                    that has scrolls in the upper direction.
                                                    <a href="#" class="badge read_more">Read More</a>
                                                </p>
                                            </div> --}}
                                        </marquee>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 pt-77">
                        <div class="border p-2 nauti">
                            <h2>Notification</h2>
                            <marquee direction="up" behavior="alternate" scrollamount="5" onmouseover="stop()"
                                onmouseout="start()" height="100%">
                                <div class="d-flex">
                                    <i class="fa-solid fa-circle-chevron-right"></i>
                                    <p>
                                        This is a sample scrolling text that has scrolls in the
                                        upper direction.This is a sample scrolling text that has
                                        scrolls in the upper direction.
                                        <a href="#" class="badge read_more">Read More</a>
                                    </p>
                                </div>
                                <div class="d-flex">
                                    <i class="fa-solid fa-circle-chevron-right"></i>
                                    <p>
                                        This is a sample scrolling text that has scrolls in the
                                        upper direction.This is a sample scrolling text that has
                                        scrolls in the upper direction.
                                        <a href="#" class="badge read_more">Read More</a>
                                    </p>
                                </div>
                                <div class="d-flex">
                                    <i class="fa-solid fa-circle-chevron-right"></i>
                                    <p>
                                        This is a sample scrolling text that has scrolls in the
                                        upper direction.This is a sample scrolling text that has
                                        scrolls in the upper direction.
                                        <a href="#" class="badge read_more">Read More</a>
                                    </p>
                                </div>
                                <div class="d-flex">
                                    <i class="fa-solid fa-circle-chevron-right"></i>
                                    <p>
                                        This is a sample scrolling text that has scrolls in the
                                        upper direction.This is a sample scrolling text that has
                                        scrolls in the upper direction.
                                        <a href="#" class="badge read_more">Read More</a>
                                    </p>
                                </div>
                                <div class="d-flex">
                                    <i class="fa-solid fa-circle-chevron-right"></i>
                                    <p>
                                        This is a sample scrolling text that has scrolls in the
                                        upper direction.This is a sample scrolling text that has
                                        scrolls in the upper direction.
                                        <a href="#" class="badge read_more">Read More</a>
                                    </p>
                                </div>
                                <div class="d-flex">
                                    <i class="fa-solid fa-circle-chevron-right"></i>
                                    <p>
                                        This is a sample scrolling text that has scrolls in the
                                        upper direction.This is a sample scrolling text that has
                                        scrolls in the upper direction.
                                        <a href="#" class="badge read_more">Read More</a>
                                    </p>
                                </div>
                            </marquee>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <!-- two section  -->

    <!-- counter -->
    <div class="counter_sec mb-5">
        <section class="wow fadeIn animated" style="visibility: visible; animation-name: fadeIn">
            <div class="container">
                <div class="row">
                    <!-- counter -->
                    <div class="col-md-3 col-sm-6 bottom-margin text-center counter-section wow fadeInUp sm-margin-bottom-ten animated"
                        data-wow-duration="300ms"
                        style="
              visibility: visible;
              animation-duration: 300ms;
              animation-name: fadeInUp;
            ">
                        <img src="./assets/img/man.png" alt="" />
                        <span id="anim-number-pizza" class="counter-number"></span>
                        <span class="timer counter alt-font appear" data-to="980" data-speed="7000">2800</span>
                        <p class="counter-title">Total Students</p>
                    </div>
                    <!-- end counter -->
                    <!-- counter -->
                    <div class="col-md-3 col-sm-6 bottom-margin text-center counter-section wow fadeInUp sm-margin-bottom-ten animated"
                        data-wow-duration="600ms"
                        style="
              visibility: visible;
              animation-duration: 600ms;
              animation-name: fadeInUp;
            ">
                        <img src="./assets/img/exam.png" alt="" />
                        <span class="timer counter alt-font appear" data-to="980" data-speed="7000">980</span>
                        <span class="counter-title">Total Exam Conduct</span>
                    </div>
                    <!-- end counter -->
                    <!-- counter -->
                    <div class="col-md-3 col-sm-6 bottom-margin-small text-center counter-section wow fadeInUp xs-margin-bottom-ten animated"
                        data-wow-duration="900ms"
                        style="
              visibility: visible;
              animation-duration: 900ms;
              animation-name: fadeInUp;
            ">
                        <img src="./assets/img/web-browser.png" alt="" />
                        <span class="timer counter alt-font appear" data-to="810" data-speed="7000">810</span>
                        <span class="counter-title">Total Applied</span>
                    </div>
                    <!-- end counter -->
                    <!-- counter -->
                    <div class="col-md-3 col-sm-6 text-center counter-section wow fadeInUp animated"
                        data-wow-duration="1200ms"
                        style="
              visibility: visible;
              animation-duration: 1200ms;
              animation-name: fadeInUp;
            ">
                        <img src="./assets/img/architecture-and-city.png" alt="" />
                        <span class="timer counter alt-font appear" data-to="600" data-speed="7000">600</span>
                        <span class="counter-title">Total City</span>
                    </div>
                    <!-- end counter -->
                </div>
            </div>
        </section>
    </div>

    <!-- our partner company  -->

    <div class="our_partner">
        <div class="content d-flex align-items-center justify-content-center">
            <div class="container rounded">
                <div class="h1 fw-bold text-center mt-2">Our Partners</div>
                <div class="fs-5 text-center pb-3 mb-3">
                    Our patrons have gotten offers from awesome companies.
                </div>
                <div class="rollers position-relative overflow-hidden">
                    <div class="start-roller"></div>
                    <div class="wrapper">
                        <div class="items-container roll-LL">
                            <div class="item">
                                <img src="https://www.freepnglogos.com/uploads/original-microsoft-logo-28.png"
                                    alt="" class="company" />
                            </div>
                            <div class="item">
                                <img src="https://www.freepnglogos.com/uploads/facebook-logo-15.jpg" alt=""
                                    class="company" />
                            </div>
                            <div class="item">
                                <img src="https://www.freepnglogos.com/uploads/google-logo-new-history-png-9.png"
                                    alt="" class="company" />
                            </div>
                            <div class="item">
                                <img src="https://www.freepnglogos.com/uploads/netflix-logo-0.png" alt=""
                                    class="company" />
                            </div>
                            <div class="item">
                                <img src="https://www.freepnglogos.com/uploads/logo-tokopedia-png/tokopedia-apa-itu-startup-pengertian-cara-memulai-dan-1.png"
                                    alt="" class="company" />
                            </div>
                            <div class="item">
                                <img src="https://www.freepnglogos.com/uploads/amazon-png-logo-vector/woodland-gardening-amazon-png-logo-vector-8.png"
                                    alt="" class="company" />
                            </div>
                        </div>
                        <div class="items-container roll-RL">
                            <div class="item">
                                <img src="https://www.freepnglogos.com/uploads/original-microsoft-logo-28.png"
                                    alt="" class="company" />
                            </div>
                            <div class="item">
                                <img src="https://www.freepnglogos.com/uploads/facebook-logo-15.jpg" alt=""
                                    class="company" />
                            </div>
                            <div class="item">
                                <img src="https://www.freepnglogos.com/uploads/google-logo-new-history-png-9.png"
                                    alt="" class="company" />
                            </div>
                            <div class="item">
                                <img src="https://www.freepnglogos.com/uploads/netflix-logo-0.png" alt=""
                                    class="company" />
                            </div>
                            <div class="item">
                                <img src="https://www.freepnglogos.com/uploads/logo-tokopedia-png/tokopedia-apa-itu-startup-pengertian-cara-memulai-dan-1.png"
                                    alt="" class="company" />
                            </div>
                            <div class="item">
                                <img src="https://www.freepnglogos.com/uploads/amazon-png-logo-vector/woodland-gardening-amazon-png-logo-vector-8.png"
                                    alt="" class="company" />
                            </div>
                        </div>
                    </div>
                    <div class="wrapper">
                        <div class="items-container reverse-roll-LL">
                            <div class="item">
                                <img src="https://www.freepnglogos.com/uploads/at-t-logo/brand-new-emblem-at-t-png-logo-6.png"
                                    alt="" class="company" />
                            </div>
                            <div class="item">
                                <img src="https://www.freepnglogos.com/uploads/sprint-png-logo/brand-sprint-png-logo-11.png"
                                    alt="" class="company" />
                            </div>
                            <div class="item">
                                <img src="https://www.freepnglogos.com/uploads/linkedin-logo-transparent-png-16.png"
                                    alt="" class="company" />
                            </div>
                            <div class="item">
                                <img src="https://www.freepnglogos.com/uploads/nokia-brand-logos-12.png" alt=""
                                    class="company" />
                            </div>
                            <div class="item">
                                <img src="https://www.freepnglogos.com/uploads/flipkart-logo-png/flipkart-logo-transparent-vector-3.png"
                                    alt="" class="company" />
                            </div>
                            <div class="item">
                                <img src="https://www.freepnglogos.com/uploads/cisco-png-logo/world-cisco-png-logo-12.png"
                                    alt="" class="company" />
                            </div>
                        </div>
                        <div class="items-container reverse-roll-RL">
                            <div class="item">
                                <img src="https://www.freepnglogos.com/uploads/at-t-logo/brand-new-emblem-at-t-png-logo-6.png"
                                    alt="" class="company" />
                            </div>
                            <div class="item">
                                <img src="https://www.freepnglogos.com/uploads/sprint-png-logo/brand-sprint-png-logo-11.png"
                                    alt="" class="company" />
                            </div>
                            <div class="item">
                                <img src="https://www.freepnglogos.com/uploads/linkedin-logo-transparent-png-16.png"
                                    alt="" class="company" />
                            </div>
                            <div class="item">
                                <img src="https://www.freepnglogos.com/uploads/nokia-brand-logos-12.png" alt=""
                                    class="company" />
                            </div>
                            <div class="item">
                                <img src="https://www.freepnglogos.com/uploads/flipkart-logo-png/flipkart-logo-transparent-vector-3.png"
                                    alt="" class="company" />
                            </div>
                            <div class="item">
                                <img src="https://www.freepnglogos.com/uploads/cisco-png-logo/world-cisco-png-logo-12.png"
                                    alt="" class="company" />
                            </div>
                        </div>
                    </div>
                    <div class="end-roller"></div>
                </div>
            </div>
        </div>
    </div>

@endsection
