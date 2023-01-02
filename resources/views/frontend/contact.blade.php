@extends('frontend.layout.main')
@section('title', 'Aeronautics | Contact')
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
      <h2>Contact s</h2>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">
            Contact Us
          </li>
        </ol>
      </nav>
    </div>
  </div>

  <div class="contact_info">
    <div class="container mt-5">
      <div class="text-center mb-4">
        <h3>Contact With us</h3>
      </div>
      <div class="row g-2">
        <div class="col-md-4">
          <div class="card">
            <img src="./assets/img/location-pin.png" />
            <h5>Address</h5>
            <p>sector 62, Noida, India</p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card">
            <img src="./assets/img/gmail.png" />
            <h5>Email</h5>
            <p>contact@Aeronautics.com</p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card">
            <img src="./assets/img/question.png" />
            <h5>Phone</h5>
            <p>+91-1234567890</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="contact_form my-5">
    <div class="container">
      <!-- <div class=" text-center mt-5 ">
         <h1>Bootstrap Contact Form</h1>
      </div> -->
      <div class="row">
        <div class="col-lg-6">
          <div class="card mt-2 mx-auto p-4 bg-light">
            <div class="card-body bg-light">
              <div class="container">
                <form id="contact-form" role="form">
                  <div class="controls">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="form_name">Firstname </label>
                          <input
                            id="form_name"
                            type="text"
                            name="name"
                            class="form-control"
                            placeholder="Enter your firstname *"
                            required="required"
                            data-error="Firstname is required."
                          />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="form_lastname">Lastname </label>
                          <input
                            id="form_lastname"
                            type="text"
                            name="surname"
                            class="form-control"
                            placeholder="Enter your lastname *"
                            required="required"
                            data-error="Lastname is required."
                          />
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="form_email">Email </label>
                          <input
                            id="form_email"
                            type="email"
                            name="email"
                            class="form-control"
                            placeholder="Enter your email *"
                            required="required"
                            data-error="Valid email is required."
                          />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="form_email">Phone No.</label>
                          <input
                            id="form_email"
                            type="Number"
                            name="email"
                            class="form-control"
                            placeholder="Enter your Phone no. *"
                            required="required"
                            data-error="Valid phone no. is required."
                          />
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="form_message">Message </label>
                          <textarea
                            id="form_message"
                            name="message"
                            class="form-control"
                            placeholder="Write your message here."
                            rows="4"
                            required="required"
                            data-error="Please, leave us a message."
                          ></textarea>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <input
                          type="submit"
                          class="btn btn-send pt-2 btn-block"
                          value="Send Message"
                        />
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- /.8 -->
        </div>
        <div class="col-md-6 mt-2">
          <img
            src="./assets/img/1672135649bgss.jpg.jpg"
            alt=""
            class="w-100 h-100 rounded"
          />
        </div>
      </div>
    </div>
  </div>

@endsection