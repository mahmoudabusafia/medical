<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/web/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/assets/css/all.min.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Yeseva+One&display=swap" rel="stylesheet">
    <link rel="website icon" type="png" href="{{ asset('assets/web/assets/images/logo.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/assets/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/assets/css/style.css') }}">
    <title>Services</title>
</head>

<body>
@include('web.header')

<div class="landing">
    <h1>Cardiogram</h1>
    <div></div>
</div>
<!-- start section 1 -->
<div class="container d-lg-flex justify-content-center d-sm-block style" >
    @include('web.pages.side-menu')
    <div class="care-section">
        <img class="d-lg-block d-sm-none" src="{{ asset('assets/web/assets/images/cardigram.png') }}"  />
        <p class="sup-head">Cardiogram Test </p>
        <div class="row " >
            <div class=" item-care col-sm-12 col-lg-4 ">
                <div class="dot"></div>A Passion for Healing
            </div>
            <div class="item-care col-sm-12 col-lg-4">
                <div class="dot"></div>5-Star Care
            </div>
            <div class="item-care col-sm-12 col-lg-4">
                <div class="dot"></div>A Legacy of Excellence
            </div>
        </div>
        <div class="row" >
            <div class=" item-care col-sm-12 col-lg-4 ">
                <div class="dot"></div>All our best
            </div>
            <div class="item-care col-sm-12 col-lg-4">
                <div class="dot"></div>Believe in Us
            </div>
            <div class="item-care col-sm-12 col-lg-4">
                <div class="dot"></div>Always Caring
            </div>
        </div>
        <p class="content-paragraph">Echocardiogram (echocardiogram) is a cardiac examination using ultrasound technology.
            Echocardiograms are non-cardiac stone imaging medical examinations, and the strength of the heart muscle and the
            shape and body of the cardiac valves, as well as diseases, are identified during the examination The test can
            help a health care provider diagnose heart conditions.</p>
    </div>
</div>

<!-- Start section our Doctor -->

<!-- start our doctor -->
@include('web.pages.doctors')
<!-- end our doctor -->

<!-- End section our Doctor -->
<!-- start footerr -->
@include('web.footer')
<!-- End footer -->
<script src="{{ asset('assets/web/assets/js/bootstrap.bundle.js') }}"></script>
<script src="{{ asset('assets/web/assets/js/home.js') }}"></script>
</body>

</html>
