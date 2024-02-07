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
    <link rel="stylesheet" href="{{asset('assets/styles/makale.css')}}">
    <title>
        @if(session('locale') == 'en')
            {{$blog->title_en}}
        @elseif(session('locale') == 'tr')
            {{$blog->title_tr}}
        @elseif(session('locale') == 'ru')
            {{$blog->title_ru}}
        @else()
            {{$blog->title_ru}}
        @endif
    </title>
</head>
<body>
@include('front.home.partitial.header')
<div class="main_keeper">
    <p>
        @if(session('locale') == "ru")
            Основные статьи
        @elseif(session('locale') == "tr")
            Genel makaleler
        @elseif(session('locale') == "en")
            General articles
        @else()
            Genel makaleler
        @endif</p>
    <h1>
        @if(session('locale') == "ru")
            {{$blog->title_ru}}
        @elseif(session('locale') == "tr")
            {{$blog->title_tr}}
        @elseif(session('locale') == "en")
            {{$blog->title_en}}
        @else()
            {{$blog->title_tr}}
        @endif
    </h1>
    <img class="preview_img" src="{{$blog->img}}" alt="">
</div>
<div class="down">
    @if(session('locale') == "ru")
        {!! $blog->content_ru !!}
    @elseif(session('locale') == "tr")
        {!! $blog->content_tr !!}
    @elseif(session('locale') == "en")
        {!! $blog->content_en !!}
    @else()
        {!! $blog->content_tr !!}
    @endif
</div>
<div class="else">
    <h2>
        @if(session('locale') == "ru")
            Другие наши статьи
        @elseif(session('locale') == "tr")
            Diger makalelerimiz
        @elseif(session('locale') == "en")
            Another of our articles
        @else()
            Diger makalelerimiz
        @endif
    </h2>
    <div class="flex">
        @foreach($blogs as $note)
            @if(session('locale') == "ru")
                <div class="blog_inner">
                    <a href="{{ route('blog_item', ['id' => $note->id]) }}">
                        <div class="img_keeper">
                            <img src="{{$note->img}}" alt="{{$note->title_ru}}">
                        </div>
                    </a>
                    <div class="content_keeper">
                        <a href="{{ route('blog_item', ['id' => $note->id]) }}">
                            <h2>{{$note->title_ru}}</h2>
                        </a>
                        <p>
                            {{$note->content_preview_ru}}[…]
                        </p>
                    </div>
                    <a href="{{ route('blog_item', ['id' => $note->id]) }}">
                        <button class="devamOku">
                            {{__('home.cont34')}}
                        </button>
                    </a>
                </div>
            @elseif(session('locale') == "tr")
                <div class="blog_inner">
                    <a href="{{ route('blog_item', ['id' => $note->id]) }}">
                        <div class="img_keeper">
                            <img src="{{$note->img}}" alt="{{$note->title_tr}}">
                        </div>
                    </a>
                    <div class="content_keeper">
                        <a href="{{ route('blog_item', ['id' => $note->id]) }}">
                            <h2>{{$note->title_tr}}</h2>
                        </a>
                        <p>
                            {{$note->content_preview_tr}}[…]
                        </p>
                    </div>
                    <a href="{{ route('blog_item', ['id' => $note->id]) }}">
                        <button class="devamOku">
                            {{__('home.cont34')}}
                        </button>
                    </a>
                </div>
            @elseif(session('locale') == "en")
                <div class="blog_inner">
                    <a href="{{ route('blog_item', ['id' => $note->id]) }}">
                        <div class="img_keeper">
                            <img src="{{$note->img}}" alt="{{$note->title_en}}">
                        </div>
                    </a>
                    <div class="content_keeper">
                        <a href="{{ route('blog_item', ['id' => $note->id]) }}">
                            <h2>{{$note->title_en}}</h2>
                        </a>
                        <p>
                            {{$note->content_preview_en}}[…]
                        </p>
                    </div>
                    <a href="{{ route('blog_item', ['id' => $note->id]) }}">
                        <button class="devamOku">
                            {{__('home.cont34')}}
                        </button>
                    </a>
                </div>
            @else()
                <div class="blog_inner">
                    <a href="{{ route('blog_item', ['id' => $note->id]) }}">
                        <div class="img_keeper">
                            <img src="{{$note->img}}" alt="{{$note->title_tr}}">
                        </div>
                    </a>
                    <div class="content_keeper">
                        <a href="{{ route('blog_item', ['id' => $note->id]) }}">
                            <h2>{{$note->title_tr}}</h2>
                        </a>
                        <p>
                            {{$note->content_preview_tr}}[…]
                        </p>
                    </div>
                    <a href="{{ route('blog_item', ['id' => $note->id]) }}">
                        <button class="devamOku">
                            {{__('home.cont34')}}
                        </button>
                    </a>
                </div>
            @endif
        @endforeach
    </div>
</div>
@include('front.home.partitial.footer')
@include('front.home.partitial.nav')
</body>
<script src="{{asset('assets/scripts/static.js')}}"></script>
</html>
