<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor</title>
    <link rel="stylesheet" href="{{ asset('assets/web/assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/assets/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/assets/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/assets/css/doctor.css') }}">
    <link rel="website icon" type="png" href="{{ asset('assets/web/assets/images/logo.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600&family=Work+Sans:wght@400;500&family=Yeseva+One&display=swap"
          rel="stylesheet">

</head>

<body>
@include('web.header')
<div class="landing">
    <h1>Doctor</h1>
    <div></div>
</div>
<div class="landing-text">
    <div class="container">
        <div class="text">
            <h2>Choose for Doctor , Make an Appointment</h2>
            <p>Discover the best doctors, clinic, hospitals, nearest cities that suits your calender</p>
        </div>
    </div>
</div>
<div class="content">
    <div class="container">
        <div class="form">
            <div class="search">
                <label for="sch">Search</label>
                <div class="ser">
                    <input type="text" id="sch" placeholder="Search doctor" onkeyup="search()">
                </div>
            </div>
            <div class="country">
                <p>Country</p>
                <div class="drop">
                    <div>
                        <input type="text" class="text-box" placeholder="Select Country" readonly>
                        <i class="fa-solid fa-chevron-up i"></i>
                    </div>
                    <div class="option">
                        <div>Gaza</div>
                        <div>Alnsirat</div>
                        <div>Alborij</div>
                    </div>
                </div>
            </div>
            <div class="district">
                <p>Dictrict or State</p>
                <div class="dropp">
                    <div>
                        <input type="text" class="text-box" placeholder="Select district or state" readonly>
                        <i class="fa-solid fa-chevron-up i"></i>
                    </div>
                    <div class="optionn">
                        <div>Gaza</div>
                        <div>Alnsirat</div>
                        <div>Alborij</div>
                    </div>
                </div>
            </div>
            <div class="gender">
                <p>Gender of doctor</p>
                <div class="backup-control">
                    <div class="date">
                        <input id="male" name="gender" type="radio" checked>
                        <label class="male" for="male">Male</label>
                    </div>
                    <div class="date">
                        <input id="female" name="gender" type="radio">
                        <label class="female" for="female">Female</label>
                    </div>
                </div>
            </div>
            <div class="speciality">
                <p>Speciality</p>
                <div class="sp-drop">
                    <div class="in">
                        <input type="text" placeholder="Search specialities" readonly>
                        <i class="fa-solid fa-chevron-up i"></i>
                    </div>
                    <div class="sp-option">
                        <div class="control">
                            <input type="checkbox" id="one" checked>
                            <label for="one">Neurologist</label>
                        </div>
                        <div class="control">
                            <input type="checkbox" id="two" >
                            <label for="two">Surgeon</label>
                        </div>
                        <div class="control">
                            <input type="checkbox" id="three" checked>
                            <label for="three">Orthopaedics</label>
                        </div>
                        <div class="control">
                            <input type="checkbox" id="four" >
                            <label for="four">Internal Medicine</label>
                        </div>
                        <div class="control">
                            <input type="checkbox" id="five" checked>
                            <label for="five">Famili medicine</label>
                        </div>
                        <div class="control">
                            <input type="checkbox" id="six">
                            <label for="six">Opthalmologist</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="doctor-content">
            <div class="doctor">
                @foreach($doctors as $doctor)
                    <a href="{{ route('doctors.show', $doctor->id) }}">
                <div class="box" id="1">
                        <div class="gender-2">male</div>
                        <div>
                            <i class="fa-solid fa-star"></i>
                            <span>{{ $doctor->years_of_experience }}</span>
                        </div>
                        <img src="{{ $doctor->image_path }}" alt="image">
                        <p class="doctor-name">Dr. {{ $doctor->name }}</p>
                        <p>Dentician</p>
                        <span>120 Reviews</span>
                </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- start footer -->
@include('web.footer')
<!-- end footer -->
{{--<script src="{{ asset('assets/web/assets/indexx.js') }}"></script>--}}
<script src="{{ asset('assets/web/assets/index.js') }}"></script>
</body>

</html>
