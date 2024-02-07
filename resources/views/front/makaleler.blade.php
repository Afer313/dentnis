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
    <link rel="stylesheet" href="{{asset('assets/styles/makaleler.css')}}">
    <title>Makaleler - İmplantoloji Ve Estetik Diş Kliniği - DentNis ®</title>
</head>
<body>
@include('front.home.partitial.header')
<div class="page_title">
    <h1 class="title">{{__('abdul.extra2')}}</h1>
    <ul>
        <li><a href="{{route('home')}}">{{__('abdul.cont2')}}</a></li>
        <li>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                 class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                      d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
            </svg>
        </li>
        <li>{{__('abdul.extra2')}}</li>
    </ul>
</div>
<div class="blog">
    @foreach($blog as $item)
        @if(session('locale') == 'en')
            <div class="blog_inner">
                <a href="{{ route('blog_item', ['id' => $item->id]) }}">
                    <div class="img_keeper">
                        <img src="{{$item->img}}" alt="{{$item->title_en}}">
                    </div>
                </a>
                <div class="content_keeper">
                    <a href="{{ route('blog_item', ['id' => $item->id]) }}">
                        <h2>{{$item->title_en}}</h2>
                    </a>
                    <p>
                        {{$item->content_preview_en}}[…]
                    </p>
                </div>
                <a href="{{ route('blog_item', ['id' => $item->id]) }}">
                    <button class="devamOku">
                        {{__('home.cont34')}}
                    </button>
                </a>
            </div>
        @endif
        @if(session('locale') == 'tr')
            <div class="blog_inner">
                <a href="{{ route('blog_item', ['id' => $item->id]) }}">
                    <div class="img_keeper">
                        <img src="{{$item->img}}" alt="{{$item->title_tr}}">
                    </div>
                </a>
                <div class="content_keeper">
                    <a href="{{ route('blog_item', ['id' => $item->id]) }}">
                        <h2>{{$item->title_tr}}</h2>
                    </a>
                    <p>
                        {{$item->content_preview_tr}}[…]
                    </p>
                </div>
                <a href="{{ route('blog_item', ['id' => $item->id]) }}">
                    <button class="devamOku">
                        {{__('home.cont34')}}
                    </button>
                </a>
            </div>
        @endif
        @if(session('locale') == 'ru')
            <div class="blog_inner">
                <a href="{{ route('blog_item', ['id' => $item->id]) }}">
                    <div class="img_keeper">
                        <img src="{{$item->img}}" alt="{{$item->title_ru}}">
                    </div>
                </a>
                <div class="content_keeper">
                    <a href="{{ route('blog_item', ['id' => $item->id]) }}">
                        <h2>{{$item->title_ru}}</h2>
                    </a>
                    <p>
                        {{$item->content_preview_ru}}[…]
                    </p>
                </div>
                <a href="{{ route('blog_item', ['id' => $item->id]) }}">
                        <button class="devamOku">
                            {{__('home.cont34')}}
                        </button>
                    </a>
            </div>
        @endif
        @if(session('locale') == null)
            <div class="blog_inner">
                <a href="{{ route('blog_item', ['id' => $item->id]) }}">
                    <div class="img_keeper">
                        <img src="{{$item->img}}" alt="{{$item->title_tr}}">
                    </div>
                </a>
                <div class="content_keeper">
                    <a href="{{ route('blog_item', ['id' => $item->id]) }}">
                        <h2>{{$item->title_tr}}</h2>
                    </a>
                    <p>
                        {{$item->content_preview_tr}}[…]
                    </p>
                </div>
                <a href="{{ route('blog_item', ['id' => $item->id]) }}">
                    <button class="devamOku">
                        {{__('home.cont34')}}
                    </button>
                </a>
            </div>
        @endif
    @endforeach
</div>
@include('front.home.partitial.nav')
@include('front.home.partitial.footer')
</body>
<script src="{{asset('assets/scripts/static.js')}}"></script>
</html>
