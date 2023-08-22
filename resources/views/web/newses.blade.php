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
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="website icon" type="png" href="{{ asset('assets/web/assets/images/logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700&family=Lobster&family=Open+Sans:wght@400;700&family=Roboto:wght@300;400;700&family=Work+Sans:wght@200;300;400;500;800&family=Yeseva+One&display=swap"
        rel="stylesheet">
    <title>News</title>
</head>
<body>
@include('web.header')
<div class="landing">
    <h1>Blog Posts</h1>
    <div></div>
</div>
<div class="news">
    <div class="container">
        <div class="plogs">
            <div class="boxs">
                @foreach($newses as $news)
                <div class="box">
                    <img src="{{ $news->image_path }}" alt="">
                    <div class="icons">
                        <div class="calender"><i class="ri-calendar-line"></i> <span>{{ \Illuminate\Support\Carbon::createFromFormat('Y-m-d H:i:s', $news->created_at)->format('l d, F Y')  }}</span></div>
                        <div class="user"><i class="ri-user-line"></i><span>By {{ $news->admin->name }}</span></div>
                    </div>
                    <h2>{{ $news->title }}</h2>
                    <p>{{ substr($news->description, 0, 50) }}</p>
                    <a href="{{ route('news.show', $news->id) }}">Read More<i class="ri-arrow-right-line"></i></a>
                </div>
                @endforeach
            </div>
            <div class="scroll">
{{--              pagniation  --}}
            </div>
        </div>
        <div class="posts-catagories" id = "hide">
            <form action="">
                <input id="sch" type="search" placeholder="Search" onkeyup="search()">
                <p><i class="ri-search-line"></i></p>
            </form>
            <div class="recentposts">
                <h3>Recent Posts</h3>
                <ul>
                    @foreach($newses as $news)
                    <a href="{{ route('news.show', $news->id) }}">
                    <li>
                        <img src="{{ $news->image_path }}" alt="">
                        <div class="info">
                            <span>{{ \Illuminate\Support\Carbon::createFromFormat('Y-m-d H:i:s', $news->created_at)->format('l d, F Y')  }}</span>
                            <span>{{ $news->title }}</span>
                        </div>
                    </li>
                    </a>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
<div class="repeated-contact">
    <div class="container">
        <h3>get in touch</h3>
        <h2>contact</h2>
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
                <p>Palestine - Gaza</p>
                <p>9876 Some country</p>
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
<script src="{{ asset('assets/web/assets/js/newone.js') }}"></script>
</body>
</html>
