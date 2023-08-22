<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/web/assets/style.css/normlize.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/assets/style.css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/assets/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/assets/css/all.min.css') }}">
    <link rel="website icon" type="png" href="{{ asset('assets/web/assets/images/logo.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700&family=Lobster&family=Open+Sans:wght@400;700&family=Roboto:wght@300;400;700&family=Work+Sans:wght@200;300;400;500;800&family=Yeseva+One&display=swap"
        rel="stylesheet">
    <title>Services</title>
</head>
<body>
@include('web.header')
<div class="landing">
    <h1>Services</h1>
    <div></div>
</div>
<div class="services">
    <div class="checkup">
        <div class="container">
            <div class="box">
                <div class="image">
                    <img class="backgroundImg" src="{{ asset('assets/web/assets/images/section-care.png') }}" alt="">
                    <div class="overlay">
                        <img class="ovelayImg" src="{{ asset('assets/web/assets/images/overlay-services.png') }}" alt="">
                    </div>
                </div>
                <div class="info">
                    <h2>Free Checkup</h2>
                    <p>A passion for putting patients first" is a fundamental principle of quality
                        healthcare</p>
                </div>
                <a href="{{ route('checkup') }}" class="icon">
                    <span>Learn more</span>
                    <i class="ri-arrow-right-line"></i>
                </a>
            </div>
            <div class="box">
                <div class="image">
                    <img class="backgroundImg" src="{{ asset('assets/web/assets/images/cardigram.png') }}" alt="">
                    <div class="overlay">
                        <img class="ovelayImg" src="{{ asset('assets/web/assets/images/overlay-services.png') }}" alt="">
                    </div>
                </div>
                <div class="info">
                    <h2>Cardiogram</h2>
                    <p>Echocardiogram (echocardiogram) is a cardiac examination using ultrasound technology.</p>
                </div>
                <a href="{{ route('cardiogram') }}" class="icon">
                    <span>Learn more</span>
                    <i class="ri-arrow-right-line"></i>
                </a>
            </div>
            <div class="box">
                <div class="image">
                    <img class="backgroundImg" src="{{ asset('assets/web/assets/images/dan-testing.png') }}" alt="">
                    <div class="overlay">
                        <img class="ovelayImg" src="{{ asset('assets/web/assets/images/overlay-services.png') }}" alt="">
                    </div>
                </div>
                <div class="info">
                    <h2>DAN Testing</h2>
                    <p>Gene analysis or genetic examination (DNA Anaysis or DNA Test) is a molecular biology
                        analysis method for DNA analysis</p>
                </div>
                <a href="{{ route('DAN-testing') }}" class="icon">
                    <span>Learn more</span>
                    <i class="ri-arrow-right-line"></i>
                </a>
            </div>
            <div class="box">
                <div class="image">
                    <img class="backgroundImg" src="{{ asset('assets/web/assets/images/blood.png') }}" alt="">
                    <div class="overlay">
                        <img class="ovelayImg" src="{{ asset('assets/web/assets/images/overlay-services.png') }}" alt="">
                    </div>
                </div>
                <div class="info">
                    <h2>Blood Bank</h2>
                    <p>Blood Bank is the store for the preservation of blood and its components, which are
                        collected</p>
                </div>
                <a href="{{ route('blood-bank') }}" class="icon">
                    <span>Learn more</span>
                    <i class="ri-arrow-right-line"></i>
                </a>
            </div>
            <div class="box">
                <div class="image">
                    <img class="backgroundImg" src="{{ asset('assets/web/assets/images/Dermalong.png') }}" alt="">
                    <div class="overlay">
                        <img class="ovelayImg" src="{{ asset('assets/web/assets/images/overlay-services.png') }}" alt="">
                    </div>
                </div>
                <!-- <div class="iconDisappear">
                    <img class="ovelayImg" src="images/overlay-services.png" alt="">
                </div> -->
                <div class="info">
                    <h2>Dermalong</h2>
                    <p>NEOGEN DERMALOGY Real Ferment Micro Collection - with Naturally Fermented ingredients
                        (Rice)</p>
                </div>
                <a href="{{ route('dermatology') }}" class="icon">
                    <span>Learn more</span>
                    <i class="ri-arrow-right-line"></i>
                </a>
            </div>
            <div class="box">
                <div class="image">
                    <img class="backgroundImg" src="{{ asset('assets/web/assets/images/orthopedic.png') }}" alt="">
                    <div class="overlay">
                        <img class="ovelayImg" src="{{ asset('assets/web/assets/images/overlay-services.png') }}" alt="">
                    </div>
                </div>
                <!-- <div class="iconDisappear">
                    <img class="ovelayImg" src="images/overlay-services.png" alt="">
                </div> -->
                <div class="info">
                    <h2>Orthopedic</h2>
                    <p>Computer Assisted Orthopaedic Surgery ("Computer Assisted Orthopaedic Surgery").</p>
                </div>
                <a href="{{ route('orthopedic') }}" class="icon">
                    <span>Learn more</span>
                    <i class="ri-arrow-right-line"></i>
                </a>
            </div>

        </div>
    </div>
</div>
<div class="repeated-contact">
    <div class="container">
        <h3>get in touch</h3>
        <h2>Contact</h2>
        <div class="info">
            <div class="box">
                <i class="ri-phone-line"></i>
                <h4>EMERGENCY</h4>
                <span>(+972) 432-678-123</span>
                <span>(+972) 432-678-123</span>
            </div>
            <div class="box">
                <i class="ri-map-pin-line"></i>
                <h4>LOCATION</h4>
                <span>Palestine - Gaza</span>
                <span>9876 Some country</span>
            </div>
            <div class="box">
                <i class="ri-mail-line"></i>
                <h4>EMAIL</h4>
                <span>Medicalcare@gmil.com</span>
                <span>myebstudios@gmail.com</span>
            </div>
            <div class="box">
                <i class="ri-time-line"></i>
                <h4>WORKING HOURS</h4>
                <span>Mon-Sat 09:00-20:00</span>
                <span>Sunday Emergency only</span>
            </div>
        </div>
    </div>
</div>
@include('web.footer')
</body>
<script src="{{ asset('assets/web/assets/js/script.js') }}"></script>
</html>
