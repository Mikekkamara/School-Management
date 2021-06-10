<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/auth/register.css') }}">
    <title>Register</title>
</head>
<body>
    <div class="registerContainer">
        <img src="{{ asset('img/method-draw-image (2).svg') }}" alt="">
        <div class="registerForm">

            <form method="POST" action="{{ route('register') }}">
                @csrf
                    <div class="name-container">
                        <label for="name">{{ __('Name') }}</label> <br>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus> <br>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="email-container">
                        <label for="email">{{ __('E-Mail Address') }}</label> <br>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="gender">
                        <label for="gender">Gender</label> <br>
                        <select name="gender">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <div class="pass-container">
                        <label for="password">{{ __('Password')}}</label> <br>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="passc-container">
                        <label for="password-confirm">{{ __('Confirm Password')}}</label> <br>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                    <div class="btn-container">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Register') }}
                        </button>
                    </div>
                    <p>Already have an account?</p>
                    <a class="LogR" href="{{ route('login') }}">{{ __('Login') }}</a>

            </form>
        </div>
        <div class="bannerText">
            <span class="store">Store</span>
            <span class="management">management</span>
            <span class="made">made easier than ever</span>
            <span class="exclamation">!</span>
        </div>
        <span class="terms">By clicking register you agree to our  privacy policy.</span>
    </div>
</body>
</html>

