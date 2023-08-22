<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/web/assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/assets/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/assets/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/assets/css/home.css') }}">
    <link rel="website icon" type="png" href="{{ asset('assets/web/assets/images/logo.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600&family=Work+Sans:wght@400;500&family=Yeseva+One&display=swap"
        rel="stylesheet">
    <title>Home</title>
</head>
<body>
<!-- start header -->
@include('web.header')
<!-- end header -->

<!-- start landing -->
<div class="landing-home">
    <div class="container">
         <div class="text">
            <p>Caring for Life</p>
            <h1>Leading the Way <br> in Medical Excellence</h1>
            <a href="{{ route('appointments.index') }}">Appointment</a>
         </div>
         <div class="image">
            <img src="{{ asset('assets/web/assets/images/docImg.png') }}" alt="">
         </div>
    </div>
</div>
<!-- end landing -->

<!-- start cart -->
<div class="carts">
    <div class="container">
        <div class="cart">
            <p>Book an Appointment</p>
            <i class="fa-solid fa-calendar-days"></i>
        </div>
        <div class="cart">
            <p>Our Latest News</p>
            <i class="fa-solid fa-users"></i>        </div>
        <div class="cart">
            <p>Free Medical Examination</p>
            <i class="fa-solid fa-money-bill-1"></i>        </div>

    </div>
</div>
<!-- end cart -->

<!-- start information -->
<div class="information">
    <div class="container">
        <p>Welcome to Meddical</p>
        <h2>A Great Place to Receive Care</h2>
        <p>Welcome to our medical site, where you can find reliable and up-to-date <br> information on a wide range of health topics, from preventive care to complex <br> medical conditions. Our goal is to provide you with the resources and tools you <br> need to make informed decisions about your health and well-being.</p>
        <img src="{{ asset('assets/web/assets/images/Blackdoctors 1.png') }}" alt="">
    </div>
</div>
<!-- end information -->

<!-- start our offer -->
<div class="our-offer">
    <div class="container">
        <div class="text">
            <p>Care you can believe in</p>
            <h2>Our Offer</h2>
        </div>
        <div class="content">
            <div class="servs">
                <div class="serve ">
                    <a href="{{ route('checkup') }}">
                        <img src="{{ asset('assets/web/assets/images/Vector (1).png') }}" alt="">
                        <p>Free Checkup</p>
                    </a>
                </div>
                <div class="serve active">
                    <a href="{{ route('cardiogram') }}">
                        <img src="{{ asset('assets/web/assets/images/Vector (2).png') }}" alt="">
                        <p>Cardiogram</p>
                    </a>
                </div>
                <div class="serve">
                    <a href="{{ route('DAN-testing') }}">
                        <img src="{{ asset('assets/web/assets/images/Vector.png') }}" alt="">
                        <p>DNA Testing</p>
                    </a>
                </div>
                <div class="serve">
                    <a href="{{ route('blood-bank') }}">
                        <img src="{{ asset('assets/web/assets/images/Vector (3).png') }}" alt="">
                        <p>Blood Bank</p>
                    </a>
                </div>
                <a class="a" href="{{ route('services') }}">View All</a>
            </div>
            <div class="text">
                <h3>A passion for putting patients first.</h3>
                <div class="list">
                    <ul>
                        <li>A Passion for Healing</li>
                        <li>All our best</li>
                        <li>A Legacy of Excellence</li>
                    </ul>
                    <ul>
                        <li>5-Star Care</li>
                        <li>Believe in Us</li>
                        <li>Always Caring</li>
                    </ul>
                </div>
                <p>We offer a full spectrum of medical services, including preventive care, primary care, specialty care, and diagnostic services. Our preventive care services focus on promoting good health and wellness through regular check-ups, screenings, and immunizations.</p>
                <br>
                <p>Our primary care services cover a wide range of medical conditions, such as acute illnesses, chronic diseases, and injuries. For patients with more complex medical needs, we offer specialty care services, including cardiology, dermatology, gastroenterology, neurology, and more. Finally, our diagnostic services include laboratory testing, imaging studies, and other tests that help us accurately diagnose and treat medical conditions.</p>
            </div>
            <div class="image">
                <img src="{{ asset('assets/web/assets/images/Rectangle 13.png') }}" alt="">
                <img src="{{ asset('assets/web/assets/images/Rectangle 14.png') }}" alt="">
            </div>
        </div>
    </div>

</div>
<!-- end our offer -->

<!-- start always caring -->
<div class="always-caring">
    <div class="container">
        <p>Always Caring</p>
        <div class="carts">
            <div class="cart">
                <img src="{{ asset('assets/web/assets/images/brain 1.png') }}" alt="">
                <p>Neurology</p>
            </div>
            <div class="cart">
                <img src="{{ asset('assets/web/assets/images/heart.png') }}" alt="">
                <p>Bones</p>
            </div>
            <div class="cart">
                <img src="{{ asset('assets/web/assets/images/dna 1.png') }}" alt="">
                <p>Oncology</p>
            </div>
            <div class="cart">
                <img src="{{ asset('assets/web/assets/images/ear 1.png') }}" alt="">
                <p>Otorhinolaryngology</p>
            </div>
            <div class="cart">
                <img src="{{ asset('assets/web/assets/images/view 1.png') }}" alt="">
                <p>Ophthalmology</p>
            </div>
            <div class="cart">
                <img src="{{ asset('assets/web/assets/images/heart 1.png') }}" alt="">
                <p>Cardiovascular</p>
            </div>
            <div class="cart">
                <img src="{{ asset('assets/web/assets/images/urology 1.png') }}" alt="">
                <p>Pulmonology</p>
            </div>
            <div class="cart">
                <img src="{{ asset('assets/web/assets/images/kidney 1.png') }}" alt="">
                <p>Renal Medicine</p>
            </div>
            <div class="cart">
                <img src="{{ asset('assets/web/assets/images/gastroenterologist 1.png') }}" alt="">
                <p>Gastroenterology</p>
            </div>
            <div class="cart">
                <img src="{{ asset('assets/web/assets/images/urology 1.png') }}" alt="">
                <p>Urology</p>
            </div>
            <div class="cart">
                <img src="{{ asset('assets/web/assets/images/dermatology 1.png') }}" alt="">
                <p>Dermatology</p>
            </div>
            <div class="cart">
                <img src="{{ asset('assets/web/assets/images/pelvic-exam 1.png') }}" alt="">
                <p>Gynaecology</p>
            </div>
        </div>
    </div>
</div>
<!-- end always caring -->

<!-- start book appointment -->
<div class="book-appointment">
    <div class="container">
        <div class="left">
            <div class="text">
                <h2>Free medical advice</h2>
                <p>Ask the Doctor for advice Free medical advice Free medical advice Free medical adviceFree medical adviceFree medical adviceFree medical advice Ask the Doctor for advice Free medical advice Free medical advice Free medical adviceFree medical adviceFree medical adviceFree medical advice</p>
                </div>
        </div>
        <div class="right">
            <form action="{{ route('messages.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="text" name="name" placeholder="Name" required value="{{ Auth::user()->name }}" readonly>
                <input type="email" name="email" placeholder="Email" required value="{{ Auth::user()->email }}" readonly>
                <input type="text" name="phone" placeholder="Phone" required value="{{ Auth::user()->mobile }}" readonly>
                <input type="hidden" name="user_id" required value="{{ Auth::user()->id }}">
                <div>
                    <i class="fa-solid fa-chevron-up i"></i>
                    <select name="doctor_id" required>
                        <option value="" disabled selected hidden>Doctor</option>
                        @foreach($doctors as $doctor)
                        <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                        @endforeach
                    </select>
                </div>
                <textarea name="message" placeholder="Message" maxlength="100" required></textarea>
                <input style="width:100%; padding-top: 10px" type="file" name="file">

                <input type="submit">
            </form>
        </div>
    </div>
</div>
<!-- end book an appontment  -->

<!-- start our doctor -->
@include('web.pages.doctors')
<!-- end our doctor -->

<!-- start news -->
<div class="news">
    <div class="container">
        <p>Better information, Better health</p>
        <h2>News</h2>
        <div class="new">
            @foreach($newses as $news)
            <a href="{{ route('news.show', $news->id) }}">
                <div class="box" id="1">
                    <img src="{{ $news->image_path }}" alt="">
                    <div class="text">
                        <span>{{ \Illuminate\Support\Carbon::createFromFormat('Y-m-d H:i:s', $news->created_at)->format('l d, F Y') }} | By {{ $news->admin->name }}</span>
                        <p>{{ $news->title }}</p>
                    </div>
                </div>
            </a>
            @endforeach

        </div>
        <div class="top">
            <i class="fa-solid fa-circle-chevron-down up"></i>
            <i class="fa-solid fa-circle-chevron-up down"></i>
        </div>
    </div>
</div>
<!-- end news -->

<!-- start contact -->
<div class="contact">
    <div class="container">
        <div class="text">
            <p>Get in touch</p>
            <h2>Contact</h2>
        </div>
        <div class="boxs">
            <div class="box">
                <i class="fa-solid fa-phone-volume"></i>
                <p>Emergency</p>
                <span>(+972) 0599876541</span>
                <span>(+972) 0599877891</span>
            </div>
            <div class="box">
                <i class="fa-solid fa-location-dot"></i>
                <p>Location</p>
                <span>Palestine - Gaza</span>
                <span>9876 Some country</span>
            </div>
            <div class="box">
                <i class="fa-solid fa-envelope"></i>
                <p>Email</p>
                <span>Medicalcare@gmil.com</span>
                <span>myebstudios@gmail.com</span>
            </div>
            <div class="box">
                <i class="fa-solid fa-clock"></i>
                <p>Working Hours</p>
                <span>Mon-Sat 09:00-19:00</span>
                <span>Sunday Emergency only</span>
            </div>
        </div>
    </div>
</div>
<!-- end contact -->

<!-- start footer -->
@include('web.footer')
<!-- end footer -->
<script src="{{ asset('assets/web/assets/js/home.js') }}"></script>
</body>
</html>
