<div class="blog_preview">
    <h2>{{__('home.cont33')}}</h2>
    <div class="inner_keeper">
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
                            {{$item->content_preview_en . ' '}} […]
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
                            {{$item->content_preview_tr . ' '}}[…]
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
                            {{$item->content_preview_ru . ' '}} […]
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
                            {{$item->content_preview_tr . ' '}}[…]
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
</div>
