<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')" />
    <meta name="keywords" content="@yield('keywords')" />
    <link rel="canonical" href="@yield('canonical')" />
    <meta name="author" content="">
    <meta name="robots" content="Index,Follow">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/ico" href="{{ asset('/public/storage/' . setting('admin.icon_image')) }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="{{ asset('public/assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/assets/css/exam.css') }}" />
</head>

<body>
    <div class="top_header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <div class="top_movings">
                        <div id="all_news">
                            <span>Helpline Number</span>
                            <ul>
                                <li><a href="#">+91 - 1234567890</a></li>
                                <li><a href="#">info@gmail.com</a></li>
                                <li><a href="#">Aeronautics</a></li>
                                <li><a href="#"></a>Apply Now</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="curr_time mt-3 text-md-center">
                        <p id="date_time"></p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="social_icons text-md-end">
                        <i class="fa-brands fa-facebook"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-linkedin"></i>
                        <i class="fa-brands fa-youtube"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg bg-light main_navbar">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="./assets/img/main_logo.png" alt="" width="120" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <div class="menu_bar" onclick="myFunction(this)">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/') }}"><i
                                class="fa-solid fa-house-user"></i>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/about') }}"><i class="fa-solid fa-address-card"></i>About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/institute') }}"><i
                                class="fa-solid fa-building-columns"></i>Institute</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/rti') }}"><i class="fa-solid fa-certificate"></i>RTI</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false"><i class="fa-solid fa-user"></i>
                            Students
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="{{ url('/login') }}"><i
                                        class="fa-solid fa-right-to-bracket"></i>Login</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ url('/registration') }}"><i
                                        class="fa-solid fa-user-plus"></i>Register</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ url('/admit_card') }}">Admit Card</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Results</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false"><i class="fa-solid fa-download"></i>
                            Downloads
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="fa-solid fa-download"></i>General</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"><i
                                        class="fa-solid fa-file-arrow-down"></i>Previous</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/contact') }}">
                            <i class="fa-solid fa-address-book"></i>Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
