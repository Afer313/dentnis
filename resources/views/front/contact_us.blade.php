<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="{{asset('assets/styles/static.css')}}">
    <link rel="stylesheet" href="{{asset('assets/styles/contact_us.css')}}">
    <title>İletişim - DentNis ®</title>
</head>
<body>
@include('front.home.partitial.header')
<div class="page_title">
    <h1 class="title">{{__('about_us.cont1')}}</h1>
    <ul>
        <li><a href="{{route('home')}}">{{__('about_us.cont2')}}</a></li>
        <li>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                 class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                      d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
            </svg>
        </li>
        <li>{{__('about_us.cont1')}}</li>
    </ul>
</div>
<div class="main_container">
    <div class="left_container">
        <form action="">
            <input class="input_50" placeholder="{{__('about_us.cont3')}}" type="text" name="name">
            <input class="input_50" style="margin-left: 4%;" type="tel">
            <input class="input_100" placeholder="{{__('about_us.cont4')}}" type="email">
            <input class="input_100" placeholder="{{__('about_us.cont5')}}" type="text">
            <textarea class="input_100" style="height: 120px;font-size: 18px; font-weight: 600;" placeholder="{{__('about_us.cont6')}}"
                      type="text"></textarea>
            <span style="margin-top: 25px;"><input type="checkbox" style="margin-top: 2px;" name="gdpr"><label
                    style="font-weight: 700; font-family: Quicksand, Arial, Tahoma, sans-serif; margin-left: 10px;">{{__('about_us.cont7')}}</label></span>
            <button>{{__('about_us.cont8')}}</button>
        </form>
    </div>
    <div class="right_container">
        <iframe loading="lazy" style="border: 0;"
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6017.2380213471215!2d28.995565!3d41.05546!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4c991533fbafe83a!2sDentNis%20%C4%B0mplantoloji%20ve%20Estetik%20Di%C5%9F%20Klini%C4%9Fi%20(Dr.Abdulkadir%20Narin)!5e0!3m2!1str!2str!4v1579080574505!5m2!1str!2str"
                width="100%" height="450" frameborder="0" allowfullscreen="allowfullscreen"
                data-rocket-lazyload="fitvidscompatible"
                data-lazy-src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6017.2380213471215!2d28.995565!3d41.05546!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4c991533fbafe83a!2sDentNis%20%C4%B0mplantoloji%20ve%20Estetik%20Di%C5%9F%20Klini%C4%9Fi%20(Dr.Abdulkadir%20Narin)!5e0!3m2!1str!2str!4v1579080574505!5m2!1str!2str"
                data-ll-status="loaded" class="entered lazyloaded" data-gtm-yt-inspected-8="true"></iframe>
    </div>
</div>
<div class="under_part">
    <div class="under_left">
        <h3>{{__('about_us.cont9')}}</h3>
        <p><b>{{__('about_us.cont10')}}</b> {{__('about_us.cont11')}}</p>
        <p><b>{{__('about_us.cont12')}}</b> <a href="tel:+90 (212) 246 09 03">+90 (212) 246 09 03</a></p>
        <p><b>{{__('about_us.cont13')}}</b> <a href="mailto:info@dentnis.com">info@dentnis.com</a></p>
        <p><b>{{__('about_us.cont14')}}</b> <a href="https://www.instagram.com/doktornarin/">@doktornarin</a></p>
    </div>
    <div class="under_right">
        <h3>{{__('about_us.cont15')}}</h3>
        <p>
            <strong>{{__('about_us.cont16')}}</strong> 08.30 – 19.00<br>
            <strong>{{__('about_us.cont17')}}</strong> {{__('about_us.cont18')}}
        </p>
    </div>
</div>
@include('front.home.partitial.nav')
@include('front.home.partitial.footer')
</body>
<script src="{{asset('assets/scripts/static.js')}}"></script>
</html>
