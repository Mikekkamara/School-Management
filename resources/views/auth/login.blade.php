<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/auth/login.css') }}">
    <title>Login</title>
</head>
<body>
    <div class="textContainer">
        <img src="{{ asset('img/method-draw-image (2).svg') }}" alt="">
        <div class="loginForm">
            <form action="" method="post" autocomplete="off">
            @csrf
                <label for="email">E-Mail Address</label> <br>
                <input autocomplete="new-password" autocomplete="off" type="email"  class="@error('email')
                    is-invalid
                @enderror" name="email" value="{{ old('email') }}" autofocus> <br>
                @error('email')
                    <span role="alert">{{ $message }}</span> <br>
                @enderror

                <label for="password">Password</label> <br>
                <input type="password" name="password" autocomplete="new-password" autocomplete="off"
                class="@error('password') is-invalid @enderror"> <br>
                @error('password')
                    <span role="alert">{{ $message }}</span> <br>
                @enderror
                <div class="checkboxContainer">
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked': '' }}>
                    <label for="remember" class="rememberMe">remember me</label>
                </div>


                <button type="submit">login</button> <br>
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">forgot your password</a> <br>
                @endif
                <a href="{{ route('register') }}">create account</a>

            </form>
        </div>
        {{-- I had to write these this way because of the
            white-space: pre-wrap in the css
        --}}
        <div class="loginWords">
<span class="first">isn't taking inventory
</span><br><span class="second">  manually so <strong>tiresome</strong> ?</span> <br>
<span class="third">
    don't worry,
        we are here for you <span class="fourth">!</span>
</span>
        </div>
    </div>
</body>
</html>



