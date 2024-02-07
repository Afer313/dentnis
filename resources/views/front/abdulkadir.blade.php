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
    <link rel="stylesheet" href="{{asset('assets/styles/abdulkadir.css')}}">
    <title>Estetik Diş Hekimi Dr. Abdulkadir Narin Kimdir? - DentNis ®</title>
</head>
<body>
@include('front.home.partitial.header')
<div class="page_title">
    <h1 class="title">{{__('abdul.cont1')}}</h1>
    <ul>
        <li><a href="{{route('home')}}">{{__('abdul.cont2')}}</a></li>
        <li>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                 class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                      d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
            </svg>
        </li>
        <li>{{__('abdul.cont1')}}</li>
    </ul>
</div>
<div class="main_container">
    <div class="left_container">
        <h2>{{__('abdul.cont3')}}</h2>
        <p><a href="">{{__('abdul.cont4')}}</a> {{__('abdul.cont5')}}</p>
        <p>{{__('abdul.cont6')}}
            <a href="">{{__('abdul.cont7')}}</a>, <a href="">{{__('abdul.cont8')}}</a>, <a href="">{{__('abdul.cont9')}}</a>,<a
                href=""> {{__('abdul.cont10')}}</a> {{__('abdul.cont11')}} <a href=""> {{__('abdul.cont12')}}</a> {{__('abdul.cont13')}} <a href="">{{__('abdul.cont14')}}</a> {{__('abdul.cont15')}} <a href="">{{__('abdul.cont16')}}</a>{{__('abdul.cont17')}}
            <a href="">{{__('abdul.cont18')}}</a> {{__('abdul.cont19')}}</p>
        <p>{{__('abdul.cont20')}} <a href="">{{__('abdul.cont21')}}</a> {{__('abdul.cont22')}}</p>
        <p>{{__('abdul.cont23')}}</p>
        <p>{{__('abdul.cont24')}} <a href="">{{__('abdul.cont25')}}</a>{{__('abdul.cont26')}}
            <a href="">{{__('abdul.cont27')}}</a> {{__('abdul.cont28')}}</p>
        <p>{{__('abdul.cont29')}}</p>
    </div>
    <div class="right_container">
        <img src="https://dentnis.com/wp-content/uploads/2023/01/abdulkadir-narin-image-3.webp">
    </div>
</div>
<div class="youtube">
    <div class="left_tube">
        <iframe loading="lazy" title="Gülüş tasarımı nedir? Kimlere ve nasıl uygulanır? | Estetik Diş Hekimi Dr. Abdulkadir Narin" width="100%" height="90%" src="https://www.youtube.com/embed/bca0ZObUPB0?feature=oembed&amp;enablejsapi=1&amp;origin=https://dentnis.com" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen="" data-rocket-lazyload="fitvidscompatible" data-lazy-src="https://www.youtube.com/embed/bca0ZObUPB0?feature=oembed&amp;enablejsapi=1&amp;origin=https://dentnis.com" data-ll-status="loaded" class="entered lazyloaded" data-gtm-yt-inspected-8="true" id="272834955"></iframe>
    </div>
    <div class="right_tube">
        <iframe loading="lazy" title="İmplant tedavisi nasıl yapılır? Tedavi ne kadar sürer? Estetik Diş Hekimi Dr. Abdulkadir Narin" width="100%" height="90%" src="https://www.youtube.com/embed/kt8ay1TRHGI?feature=oembed&amp;enablejsapi=1&amp;origin=https://dentnis.com" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen="" data-rocket-lazyload="fitvidscompatible" data-lazy-src="https://www.youtube.com/embed/kt8ay1TRHGI?feature=oembed&amp;enablejsapi=1&amp;origin=https://dentnis.com" data-ll-status="loaded" class="entered lazyloaded" data-gtm-yt-inspected-8="true" id="496767990"></iframe>
    </div>
</div>
@include('front.home.partitial.nav')
@include('front.home.partitial.footer')
</body>
<script src="{{asset('assets/scripts/static.js')}}"></script>
</html>
