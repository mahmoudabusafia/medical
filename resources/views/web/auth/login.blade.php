<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/web/assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/assets/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/assets/css/header.css') }}'">
    <link rel="website icon" type="png" href="{{ asset('assets/web/assets/images/logo.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600&family=Work+Sans:wght@400;500&family=Yeseva+One&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/web/assets/css/login.css') }}">
    <title>Login</title>
</head>
<body>
    <div class="login l">
        <div class="content">
            <div class="image">
                <img src="{{ asset('assets/web/assets/images/login-user.png') }}" alt="">
                <div class="text">
                    <p>"it’s important to take care <br>
                        of your <span>health</span> even if you seem healthy."</p>
                </div>
            </div>
            <div class="form">
                <h3>Sign In</h3>
                <p class="p">Please enter the following data so you can login to your account and start your medical journey with us today!</p>
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="input">
                        <div>
                            <label for="email">Email</label>
                            <input class="@error('email')  is-invalid @enderror" type="email" name="email" value="{{ old('email') }}">
                            @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <label for="password">Password</label>
                            <input class="@error('password')  is-invalid @enderror" type="password" name="password">
                            @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif
                        </div>
                        <input type="submit" name="submit" value="Login">
                        <p class="pr">Don't have an account ? <a href="{{ route('register') }}">Register here</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
