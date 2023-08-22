<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/web/assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/assets/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/assets/css/header.css') }}">
    <link rel="website icon" type="png" href="{{ asset('assets/web/assets/images/logo.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600&family=Work+Sans:wght@400;500&family=Yeseva+One&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/web/assets/css/login.css') }}">
    <title>Login</title>
</head>
<body>
<div class="login r">
    <div class="content">
        <div class="image img">
            <img src="{{ asset('assets/web/assets/images/login-user.png') }}" alt="">
            <div class="text">
                <p>"it’s important to take care <br>
                    of your <span>health</span> even if you seem healthy."</p>
            </div>
        </div>
        <div class="form">
            <h3>Create account</h3>
            <p class="p">Please enter the following data so you can create a new account
                and start your medical journey with us today!</p>
            <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="input">
                    <div>
                        <label for="">Full name</label>
                        <input class="@error('name')  is-invalid @enderror" type="text" name="name" value="{{ old('name') }}" required>
                        @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="">Email</label>
                        <input class="@error('email')  is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" required>
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for=""> Phone number</label>
                        <input class="@error('mobile')  is-invalid @enderror" type="text" name="mobile" value="{{ old('mobile') }}">
                        @error('mobile')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="">Date of birth</label>
                        <input class="@error('birthday')  is-invalid @enderror"  onfocus="(this.type = 'date')" type="text" name="birthday" value="{{ old('birthday') }}">
                        @error('birthday')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="">Password</label>
                        <input class="@error('password')  is-invalid @enderror" type="password" name="password" required>
                        @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="">Confirm Password</label>
                            <input class="@error('password_confirmation')  is-invalid @enderror" type="password" value="{{ old('password_confirmation') }}" name="password_confirmation"/>
                            @error('password_confirmation')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                    </div>
                    <div>
                        <label for="">Address</label>
                        <input class="@error('address')  is-invalid @enderror" type="text" name="address" value="{{ old('address') }}">
                        @error('address')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>


                <div class="widgets-control">
                    <p class="par">What are the diseases : </p>
                    <div class="check">
                        <div class="control">
                            <input type="checkbox" id="one" name="diseases[]" value="nose_and_throttle">
                            <label for="one">Nose and throt</label>
                        </div>
                        <div class="control">
                            <input type="checkbox" id="two" name="diseases[]" value="heart_and_blood_circulation">
                            <label for="two">Heart and blood circulation</label>
                        </div>
                        <div class="control">
                            <input type="checkbox" id="three" name="diseases[]" value="bones" >
                            <label for="three">Bones</label>
                        </div>
                        <div class="control">
                            <input type="checkbox" id="four" name="diseases[]" value="blood_diseases">
                            <label for="four">Blood diseases</label>
                        </div>
                        <div class="control">
                            <input type="checkbox" id="five" name="diseases[]" value="chronic_diseases">
                            <label for="five">Chroinc disases</label>
                        </div>
                        <div class="control">
                            <input type="checkbox" id="six" name="diseases[]" value="other">
                            <label for="six">Other</label>
                        </div>
                    </div>
                </div>
                <input type="submit">
                <p class="pr">Already Register ? <a href="{{ route('login') }}">Sign In</a></p>
            </form>
        </div>
    </div>
</div>
</body>
</html>
