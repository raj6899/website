{{-- <main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">Login</h3>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login.custom') }}">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Email" id="email" class="form-control" name="email" required
                                    autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">Signin</button>
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
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('public/assets/css/loginReg.css') }}" />
</head>

<body>
    <div class="login">
        <div class="container-fluid container_width">
            <div class="card">
                <form method="POST" action="{{ route('login.custom') }}">
                    @csrf
                    <div class="heading">
                        <h3>Sign In</h3>
                    </div>
                    {{-- <div class="button">
                        <button>Need an account? Sign up</button>
                    </div> --}}
                    <hr /> 
                    <div class="or">
                        <p>Need an account? <a href="{{url('/registration')}}">Sign up</a></p>
                    </div>
                    <div class="input_text">
                        <input type="text" placeholder="john@email.com" name="email" />
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                        <span>Email</span>
                        <small class="email_warn d-none"><i class="fa fa-warning"></i>Please enter a valid email
                            address.</small>
                    </div>
                    <div class="input_text passwo">
                        <input autocomplete="chrome-off" name="password" class="input-group" id="password_input"
                            type="password" placeholder="Password" />
                        @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                        <span>Password</span>
                        <i id="password_eye" class="fa fa-eye-slash"></i>
                    </div>
                    <ul class="strength-list">
                        <li>
                            <span class="loweruppercase list-group">
                                <i class="fa fa-circle"></i> <span>Lowercase uppercase</span>
                            </span>
                        </li>
                        <li>
                            <span class="list-group numbercase">
                                <i class="fa fa-circle"></i> <span>Number (0-9)</span>
                            </span>
                        </li>
                        <li>
                            <span class="list-group specialcase">
                                <i class="fa fa-circle"></i>
                                <span>Special Characters(!#@$%*)</span>
                            </span>
                        </li>
                        <li>
                            <span class="list-group numcharacter">
                                <i class="fa fa-circle"></i> <span>8 Characters</span>
                            </span>
                        </li>
                    </ul>
                    <div class="last_btn"><button class="sign_in">Sign in</button></div>
                    
            </div>
        </div>
    </div>
    <script>
        const password_input = document.querySelector("#password_input");
        const password_eye = document.querySelector("#password_eye");
        let loweruppercase = document.querySelector(".loweruppercase i");
        let loweruppercasetext = document.querySelector(".loweruppercase span");

        let numbercase = document.querySelector(".numbercase i");
        let numbercasetext = document.querySelector(".numbercase span");
        let specialcase = document.querySelector(".specialcase i");
        let specialcasetext = document.querySelector(".specialcase span");

        let numcharacter = document.querySelector(".numcharacter i");
        let numcharactertext = document.querySelector(".numcharacter span");

        var signin = document.querySelector(".sign_in");
        var all_inputs = document.querySelectorAll(".input_text input");
        var email_warn = document.querySelector(".email_warn");

        signin.addEventListener("click", function() {
            all_inputs.forEach((e) => {
                e.classList.remove("warning");
                if (e.value.length < 1) {
                    if (e.name == "email") {
                        email_warn.classList.remove("d-none");
                    }
                    e.classList.add("warning");
                }
            });
        });
        all_inputs.forEach((e) => {
            e.addEventListener("keyup", function() {
                if (e.name == "email") {
                    if (!validEmail(e.value)) {
                        email_warn.classList.remove("d-none");
                    } else {
                        email_warn.classList.add("d-none");
                    }
                }
                if (e.value.length < 1) {
                    e.classList.add("warning");
                } else {
                    e.classList.remove("warning");
                }
            });
        });

        function validEmail(email) {
            const regex = /^((?!\.)[\w\-_.]*[^.])(@\w+)(\.\w+(\.\w+)?[^.\W])$/;
            return regex.test(email);
        }

        password_eye.addEventListener("click", () => {
            if (password_input.type == "password") {
                password_input.type = "text";
                password_eye.classList.add("fa-eye");
                password_eye.classList.remove("fa-eye-slash");
            } else if (password_input.type == "text") {
                password_input.type = "password";
                password_eye.classList.add("fa-eye-slash");
                password_eye.classList.remove("fa-eye");
            }
        });

        password_input.addEventListener("keyup", function() {
            let pass = document.getElementById("password_input").value;
            passStrength(pass);
        });

        function passStrength(pass) {
            if (pass.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/)) {
                loweruppercase.classList.remove("fa-circle");
                loweruppercase.classList.add("fa-check");
                loweruppercase.classList.add("green-color");
                loweruppercasetext.classList.add("green-color");
            } else {
                loweruppercase.classList.remove("fa-check");
                loweruppercase.classList.add("fa-circle");
                loweruppercase.classList.remove("green-color");
                loweruppercasetext.classList.remove("green-color");
            }

            if (pass.match(".*\\d.*")) {
                numbercase.classList.remove("fa-circle");
                numbercase.classList.add("fa-check");
                numbercase.classList.add("green-color");
                numbercasetext.classList.add("green-color");
            } else {
                numbercase.classList.remove("fa-check");
                numbercase.classList.add("fa-circle");
                numbercase.classList.remove("green-color");
                numbercasetext.classList.remove("green-color");
            }

            if (pass.match(/[`!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/)) {
                specialcase.classList.remove("fa-circle");
                specialcase.classList.add("fa-check");
                specialcase.classList.add("green-color");
                specialcasetext.classList.add("green-color");
            } else {
                specialcase.classList.remove("fa-check");
                specialcase.classList.add("fa-circle");
                specialcase.classList.remove("green-color");
                specialcasetext.classList.remove("green-color");
            }

            if (pass.length > 7) {
                numcharacter.classList.remove("fa-circle");
                numcharacter.classList.add("fa-check");
                numcharacter.classList.add("green-color");
                numcharactertext.classList.add("green-color");
            } else {
                numcharacter.classList.remove("fa-check");
                numcharacter.classList.add("fa-circle");
                numcharacter.classList.remove("green-color");
                numcharactertext.classList.remove("green-color");
            }
        }
    </script>
</body>

</html>
