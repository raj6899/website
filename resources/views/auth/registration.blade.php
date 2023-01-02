{{-- <main class="signup-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">Register User</h3>
                    <div class="card-body">
                        <form action="{{ route('register.custom') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Name" id="name" class="form-control" name="name"
                                    required autofocus>
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Email" id="email_address" class="form-control"
                                    name="email" required autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" placeholder="Password" id="password" class="form-control"
                                    name="password" required>
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <div class="checkbox">
                                    <label><input type="checkbox" name="remember"> Remember Me</label>
                                </div>
                            </div>
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">Sign up</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main> --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('public/assets/css/loginReg.css') }}" />
</head>

<body>
    <div class="register">
        <div class="wrapper">
            <div class="form-left">
                <h2 class="text-uppercase">information</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Et
                    molestie ac feugiat sed. Diam volutpat commodo.
                </p>
                <p class="text">
                    <span>Sub Head:</span>
                    Vitae auctor eu augudsf ut. Malesuada nunc vel risus commodo
                    viverra. Praesent elementum facilisis leo vel.
                </p>
                <div class="form-field">
                    <input type="submit" class="account" value="Have an Account?" />
                </div>
            </div>
            <form class="form-right" action="{{ route('register.custom') }}" method="POST">
                @csrf
                <h2 class="text-uppercase">Registration form</h2>
                <div class="row">
                    <div class="col-sm-6 mb-3">
                        <label>First Name</label>
                        <input type="text" name="name" id="name" class="input-field" />
                        @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="col-sm-6 mb-3">
                        <label>Last Name</label>
                        <input type="text" name="lastname" id="last_name" class="input-field" />
                    </div>
                </div>
                <div class="mb-3">
                    <label>Your Email</label>
                    <input type="email" class="input-field" name="email" required />
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="row">
                    <div class="col-sm-6 mb-3">
                        <label>Password</label>
                        <input type="password" name="password" id="pwd" class="input-field" />
                        @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                    <div class="col-sm-6 mb-3">
                        <label>Confirm Password</label>
                        <input type="password" name="confirm_password" id="cpwd" class="input-field" />
                        @if ($errors->has('confirm_password'))
                            <span class="text-danger">{{ $errors->first('confirm_password') }}</span>
                        @endif
                    </div>
                </div>
                <div class="mb-3">
                    <label class="option">I agree to the <a href="#">Terms and Conditions</a>
                        <input type="checkbox" checked />
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="form-field">
                    <input type="submit" value="Register" class="register" name="register" />
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
