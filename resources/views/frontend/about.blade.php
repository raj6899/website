@extends('frontend.layout.main')
@section('title', 'Aeronautics | About')
@section('description', 'Aeronautics')
@section('keywords', 'Aeronautics')
@section('canonical', url(Request::url()))
@section('main.container')


<style>
    .about_us .services {
      padding: 50px 0;
    }
    .about_us .title h2 {
      font-weight: 600;
      font-size: 35px;
      color: #800205;
    }
    .about_us .title p {
      color: #848484;
      margin: 0 auto;
    }
    .about_us .border {
      height: 2px;
      margin: 20px auto 20px;
      position: relative;
      width: 80px;
      background: #800205;
      margin-bottom: 60px;
    }

    .about_us .services .service-block.color-bg {
      background: #800205;
      color: #fff;
    }
    .about_us .services .service-block .service-icon {
      margin-bottom: 30px;
    }
    .about_us .services .service-block.color-bg i,
    .about_us .services .service-block.color-bg h3,
    .about_us .services .service-block.color-bg p {
      color: #fff;
    }
    .about_us .services .service-block h3 {
      color: #fff;
      font-size: 18px;
      text-transform: uppercase;
      font-weight: bold;
    }
    .about_us .services .service-block p {
      font-size: 14px;
      color: #fff;
    }
    .about_us .services .service-block h3 {
      color: #333;
      font-size: 18px;
      text-transform: uppercase;
      font-weight: bold;
    }
    .about_us .services .service-block p {
      font-size: 14px;
      color: #666;
    }
    .about_us .services .service-block.color-bg i,
    .about_us .services .service-block.color-bg h3,
    .about_us .services .service-block.color-bg p {
      color: #fff;
    }
    .about_us .services .service-block i {
      font-size: 40px;
      color: #800205;
    }
    .about_us .services .service-block {
      transition: 1s;
      cursor: pointer;
    }
    .about_us .services .service-block:hover {
      transform: translateY(-5px);
      box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    }
    /* about card  */
    .about_card {
      background-color: #f5f5f5;
    }
    .about_card .card1 {
      background-color: #142948;
      border-radius: 15px;
      height: auto;
    }
    .about_card .card2 {
      background-color: #fff;
      border-radius: 15px;
      border: 2px solid #919ba9;
      height: auto;
    }
    .about_card .first {
      color: #a4adb8;
    }
    .about_card .text1 {
      color: #fff;
      font-weight: 700;
    }
    .about_card .detail {
      color: #a4adb8;
    }
    .about_card .readmore {
      font-weight: 400;
      color: #fff;
    }
    .about_card .btn-submit {
      border-radius: 50px;
      border: none;
      height: 35px;
      width: 120px;
      font-size: 14px;
      font-weight: 500;
      transition: 0.5s;
    }
    .about_card .text2 {
      color: #800205;
      font-weight: 700;
    }
    .about_card .second {
      color: #8b96a5;
    }
    .about_card .btn-submit1 {
      border-radius: 50px;
      border: none;
      height: 35px;
      width: 120px;
      font-size: 14px;
      background-color: #800205;
      color: #fff;
      font-weight: 500;
      transition: 0.5s;
    }
    .about_card button:hover {
      transform: translateY(-5px);
      box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    }
    .main_title h2 {
      text-align: center;
      color: #800205;
    }
    .about_card .card2 .detail small {
      color: #000;
    }
    .card1 .first,
    .card2 .second {
      font-weight: 600;
    }
    .card2 .second {
      color: #000;
    }
    /* placed stu  */

    .placed_stu .card {
      box-shadow: 0px 4px 8px 0px #bdbdbd;
    }

    .placed_stu .profile-pic {
      width: 200px !important;
      height: 185px;
      border-radius: 50%;
    }

    .placed_stu .owl-carousel .owl-nav button.owl-next,
    .placed_stu .owl-carousel .owl-nav button.owl-prev {
      background: 0 0;
      color: #800205 !important;
      border: none;
      padding: 5px 20px !important;
      font: inherit;
      font-size: 50px !important;
    }

    .placed_stu .owl-carousel .owl-nav button.owl-next:hover,
    .placed_stu .owl-carousel .owl-nav button.owl-prev:hover {
      color: #7c0002 !important;
      background-color: transparent !important;
    }

    .placed_stu .owl-dots {
      display: none;
    }

    .placed_stu button:focus {
      -moz-box-shadow: none !important;
      -webkit-box-shadow: none !important;
      box-shadow: none !important;
      outline-width: 0;
    }

    .placed_stu .item {
      display: none;
    }

    .placed_stu .next {
      display: block !important;
      position: relative;
      transform: scale(0.8);
      transition-duration: 0.3s;
      opacity: 0.6;
    }

    .placed_stu .prev {
      display: block !important;
      position: relative;
      transform: scale(0.8);
      transition-duration: 0.3s;
      opacity: 0.6;
    }

    .placed_stu .item.show {
      display: block;
      transition-duration: 0.4s;
    }

    @media screen and (max-width: 999px) {
      .placed_stu .next,
      .placed_stu .prev {
        transform: scale(1);
        opacity: 1;
      }

      .placed_stu .item {
        display: block !important;
      }
    }
    .placed_stu h2 {
      color: #800205;
    }
  </style>
</head>
<body>
  <div class="banner_sec">
    <div class="banner_img">
      <img src="./assets/img/About-us-banner.jpg" alt="" class="w-100" />
    </div>
    <div class="banner_title">
      <h2>About Us</h2>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">About Us</li>
        </ol>
      </nav>
    </div>
  </div>
  <div class="about_us">
    <section class="services">
      <div class="container">
        <div class="row justify-content-center">
          <!-- section title -->
          <div class="col-xl-6 col-lg-8">
            <div class="title text-center">
              <h2>Our History</h2>
              <p>
                Vestibulum nisl tortor, consectetur quis imperdiet bibendum,
                laoreet sed arcu. Sed condimentum iaculis ex, in faucibus
                lorem accumsan non. Donec mattis tincidunt metus. Morbi sed
                tortor a risus luctus dignissim.
              </p>
              <div class="border"></div>
            </div>
          </div>
          <!-- /section title -->
        </div>
        <div class="row no-gutters">
          <!-- Single Service Item -->
          <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
            <div class="service-block p-4 color-bg text-center">
              <div class="service-icon text-center">
                <i class="fa-regular fa-clone"></i>
              </div>
              <h3>Beginning'2000</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget
                orci dictum facilisis vel id tellus. Nullam iaculis arcu at
                mauris dapibus consectetur.
              </p>
            </div>
          </div>
          <!-- End Single Service Item -->

          <!-- Single Service Item -->
          <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
            <div class="service-block p-4 text-center">
              <div class="service-icon text-center">
                <i class="fa-regular fa-clock"></i>
              </div>
              <h3>Foundering'2015</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget
                orci dictum facilisis vel id tellus. Nullam iaculis arcu at
                mauris dapibus consectetur.
              </p>
            </div>
          </div>
          <!-- End Single Service Item -->

          <!-- Single Service Item -->
          <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
            <div class="service-block p-4 color-bg text-center">
              <div class="service-icon text-center">
                <i class="fa-solid fa-book"></i>
              </div>
              <h3>Started training</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget
                orci dictum facilisis vel id tellus. Nullam iaculis arcu at
                mauris dapibus consectetur.
              </p>
            </div>
          </div>
          <!-- End Single Service Item -->

          <!-- Single Service Item -->
          <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
            <div class="service-block p-4 text-center">
              <div class="service-icon text-center">
                <i class="fa-solid fa-briefcase"></i>
              </div>
              <h3>Well-eshtablished'2016</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget
                orci dictum facilisis vel id tellus. Nullam iaculis arcu at
                mauris dapibus consectetur.
              </p>
            </div>
          </div>
          <!-- End Single Service Item -->

          <!-- Single Service Item -->
          <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
            <div class="service-block p-4 color-bg text-center">
              <div class="service-icon text-center">
                <i class="fa-solid fa-crop"></i>
              </div>
              <h3>Growth'2005</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget
                orci dictum facilisis vel id tellus. Nullam iaculis arcu at
                mauris dapibus consectetur.
              </p>
            </div>
          </div>
          <!-- End Single Service Item -->

          <!-- Single Service Item -->
          <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
            <div class="service-block p-4 text-center">
              <div class="service-icon text-center">
                <i class="fa-solid fa-house-user"></i>
              </div>
              <h3>Future AIM</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget
                orci dictum facilisis vel id tellus. Nullam iaculis arcu at
                mauris dapibus consectetur.
              </p>
            </div>
          </div>
          <!-- End Single Service Item -->
        </div>
        <!-- End row -->
      </div>
      <!-- End container -->
    </section>
  </div>
  <div class="about_card pt-3">
    <div class="main_title">
      <h2>Lorem ipsum dolor sit.</h2>
    </div>
    <div
      class="py-4 container d-flex justify-content-center align-items-center"
    >
      <div class="row">
        <div class="col-md-6">
          <div class="card1 mt-3 p-3 g-2">
            <div class="d-flex align-items-center">
              <small class="first">#Aeronautics</small>
            </div>
            <div class="mt-3">
              <h2 class="text1">MISSION</h2>
            </div>
            <div class="detail mt-5">
              <small
                >Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi
                labore ducimus accusantium eum corporis deleniti reprehenderit
                aut velit tempore illum temporibus numquam, ipsa similique,
                maxime distinctio cumque repellendus sunt harum? Ipsa aperiam
                saepe possimus nulla modi eum delectus sint dicta consequatur,
                sequi, eaque laudantium accusantium! Maiores commodi error
                doloribus est magnam culpa ullam expedita velit non iusto.
                Atque molestiae totam numquam non nihil laudantium deserunt
                culpa iste quidem mollitia perferendis, autem sit qui natus
                sed consequuntur inventore repellendus a quas voluptates et
                possimus tempore? Ut beatae aliquid consectetur atque quidem
                minus asperiores placeat! Enim omnis, earum eaque architecto
                aspernatur maiores?</small
              >
            </div>
            <div class="mt-3 d-flex justify-content-end px-2">
              <button class="btn-submit">More</button>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="card2 mt-3 p-3 g-2">
            <div class="d-flex align-items-center">
              <small class="second">#Aeronautics</small>
            </div>
            <div class="mt-3">
              <h2 class="text2">VISSION</h2>
            </div>
            <div class="detail mt-5">
              <div class="px-1">
                <small
                  >Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Ullam ad totam veritatis harum quaerat explicabo quae magni
                  consequuntur similique reprehenderit, aut odio, facere non
                  nisi. Ad quidem cumque illum iure atque voluptatum, at dicta
                  odio reprehenderit laudantium incidunt maiores consectetur
                  quod deleniti assumenda officia nisi distinctio fugit eum
                  accusamus ea expedita recusandae labore sequi. Minima
                  corrupti odio enim accusantium, doloribus molestiae amet,
                  animi unde tempore blanditiis quasi quisquam repellat?
                  Necessitatibus dolor illum repellat iusto velit labore rem,
                  magni quia tempora quis eum adipisci atque architecto
                  consequuntur cumque vitae unde harum autem corrupti nam
                  commodi ea! Laborum deleniti autem consectetur quo?
                </small>
              </div>
            </div>
            <div class="mt-3 d-flex justify-content-end px-2">
              <button class="btn-submit1">More</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="placed_stu">
    <div class="container-fluid px-3 px-sm-5 my-5 text-center">
      <h2 class="mb-5 font-weight-bold">Our Placed Students</h2>
      <div class="owl-carousel owl-theme placed_student">
        <div class="item first prev">
          <div class="card border-0 py-3 px-4">
            <div class="row justify-content-center">
              <img
                src="./assets/img/placed.jpg"
                class="profile-pic mb-4 mt-3"
              />
            </div>
            <h6 class="mb-3 mt-2">Marielle Haag</h6>
            <p class="content mb-5 mx-2">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua Ut
              enim.
            </p>
          </div>
        </div>
        <div class="item show">
          <div class="card border-0 py-3 px-4">
            <div class="row justify-content-center">
              <img
                src="./assets/img/T5aOhwh.jpg"
                class="profile-pic mb-4 mt-3"
              />
            </div>
            <h6 class="mb-3 mt-2">Ximena Vegara</h6>
            <p class="content mb-5 mx-2">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua Ut
              enim.
            </p>
          </div>
        </div>
        <div class="item next">
          <div class="card border-0 py-3 px-4">
            <div class="row justify-content-center">
              <img
                src="./assets/img/T5aOhwh.jpg"
                class="profile-pic mb-4 mt-3"
              />
            </div>
            <h6 class="mb-3 mt-2">John Paul</h6>
            <p class="content mb-5 mx-2">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua Ut
              enim.
            </p>
          </div>
        </div>
        <div class="item last">
          <div class="card border-0 py-3 px-4">
            <div class="row justify-content-center">
              <img
                src="./assets/img/T5aOhwh.jpg"
                class="profile-pic mb-4 mt-3"
              />
            </div>
            <h6 class="mb-3 mt-2">William Doe</h6>
            <p class="content mb-5 mx-2">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua Ut
              enim.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  


@endsection