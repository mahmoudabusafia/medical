<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Doctor</title>
    <link rel="stylesheet" href="{{ asset('assets/web/assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/assets/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/assets/css/doctor.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/assets/css/header.css') }}">
    <link rel="website icon" type="png" href="{{ asset('assets/web/assets/images/logo.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600&family=Work+Sans:wght@400;500&family=Yeseva+One&display=swap"
        rel="stylesheet">
</head>

<body>
@include('web.header')
<div class="landing">
    <h1>About Doctor</h1>
    <div></div>
</div>
<div class="about-content">
    <div class="container">
        <div class="left">
            <div class="doctor-img">
                <img src="{{ $doctor->image_path }}" class="img" alt="image doctor">
                <p>Doctor's Name</p>
                <h3>Dr. {{ $doctor->name }}</h3>
                <div class="icon">
                    <i class="fa-brands fa-linkedin-in"></i>
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-instagram"></i>
                </div>
                <span>Doctor  Profile</span>
            </div>
            <div class="office">
                <div class="off">
                    <p>OFFICE</p>
                    <span>The Clinic</span>
                </div>
                <div class="image">
                    <img src="{{ $doctor->image_path }}" alt="">
                </div>
            </div>
        </div>
        <div class="right">
            <h2 class="doctor-name">Dr. {{ $doctor->name }}</h2>
            <p class="general-specialty">{{ $doctor->specialization }}</p>
            <div class="adress">
                <h3>{{ $doctor->city }}</h3>
                <p>The Graduation country  is {{ $doctor->country_of_graduation }}</p>
            </div>
            <div class="qualification">
                <h3>Specialization</h3>
                <p><span>Licecnces</span>: {{ $doctor->specialization }}</p>
            </div>
            <div class="specialities">
                <h3>Specialities</h3>
                <ul class="special">
                    <li>{{ json_decode($doctor->specialization_desc)[0] }}</li>
                    <li>{{ json_decode($doctor->specialization_desc)[1] }}</li>
                    <li>{{ json_decode($doctor->specialization_desc)[2] }}</li>
                </ul>
            </div>
            <div class="experience">
                <h3>Experience</h3>
                <p><span>Licecnces</span>: {{ $doctor->specialization }} <span>({{ $doctor->years_of_experience }} years of Experience)</span>
                </p>
            </div>
            <div class="about">
                <h3>About</h3>
                <p>{{ $doctor->description }}</p>
            </div>
        </div>
    </div>
</div>
<!-- start footer -->
@include('web.footer')
<!-- end footer -->
</body>

</html>
