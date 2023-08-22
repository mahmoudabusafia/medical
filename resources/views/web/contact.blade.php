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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="website icon" type="png" href="{{ asset('assets/web/assets/images/logo.png') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700&family=Lobster&family=Open+Sans:wght@400;700&family=Roboto:wght@300;400;700&family=Work+Sans:wght@200;300;400;500;800&family=Yeseva+One&display=swap"
        rel="stylesheet">
    <title>Contacts</title>
</head>
<body>
@include('web.header')
<div class="landing">
    <h1>Our Contacts</h1>
    <div></div>
</div>
<div class="contact-us">
    <div class="map">
        <div class="container">
            <iframe src="https://www.google.com/maps/d/embed?mid=1B1lAsUpYFg82Je7XN1_cxRPf1UU&hl=en_US&ehbc=2E312F" width="640"
                    height="480"></iframe>
        </div>
    </div>
    <div class="contact">
        <div class="container">
            <div class="inputs">
                <h3>GET IN TOUCH</h3>
                <h3>Contact</h3>
                <form action="{{ route('contacts.store') }}" method="post">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <input type="text" placeholder="Name" name="name" value="{{ Auth::user()->name }}" readonly>
                    <input type="email" placeholder="Email" name="email" value="{{ Auth::user()->email }}" readonly>
                    <input type="text" placeholder="Subject" name="subject" required>
                    <textarea id="" cols="30" rows="10" placeholder="Message" name="message" required></textarea>
                    <button type="submit">SUBMIT</button>
                </form>
            </div>
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
</div>

</body>
<script src="{{ asset('assets/web/assets/js/script.js') }}"></script>

</html>
