<div class="estetic-container">
    <h2 class="estetik_h2">
        {{__('home.cont23')}}
    </h2>
    <div class="estetic_inner">
        @if(isset($panels))
            @foreach($panels as $panel)
                @if(session('locale') == 'ru')
                    @if($panel->visibility == 1)
                        <a href="{{$panel->link}}">
                            <div class="estetic_item">
                                <img src="{{asset('storage/'. $panel->img)}}" alt="">
                                <h2 class="lighter">{{$panel->cont_ru}}</h2>
                                <div class="line"></div>
                                <div class="layout"></div>
                            </div>
                        </a>
                    @endif
                @elseif(session('locale') == 'en')
                    @if($panel->visibility == 1)
                        <a href="{{$panel->link}}">
                            <div class="estetic_item">
                                <img src="{{asset('storage/'. $panel->img)}}" alt="">
                                <h2 class="lighter">{{$panel->cont_en}}</h2>
                                <div class="line"></div>
                                <div class="layout"></div>
                            </div>
                        </a>
                    @endif
                @elseif(session('locale') == 'tr')
                    @if($panel->visibility == 1)
                        <a href="{{$panel->link}}">
                            <div class="estetic_item">
                                <img src="{{asset('storage/'. $panel->img)}}" alt="">
                                <h2 class="lighter">{{$panel->cont_tr}}</h2>
                                <div class="line"></div>
                                <div class="layout"></div>
                            </div>
                        </a>
                    @endif
                @else()
                    @if($panel->visibility == 1)
                        <a href="{{$panel->link}}">
                            <div class="estetic_item">
                                <img src="{{asset('storage/'. $panel->img)}}" alt="">
                                <h2 class="lighter">{{$panel->cont_tr}}</h2>
                                <div class="line"></div>
                                <div class="layout"></div>
                            </div>
                        </a>
                    @endif
                @endif
            @endforeach
        @endif
    </div>
</div>
