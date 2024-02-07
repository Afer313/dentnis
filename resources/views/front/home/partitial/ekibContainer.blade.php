<div class="ekibContainer">
    <h2 class="ekibimiz">{{__('home.cont8')}}</h2>
    <div class="swiper sample-slider">
        <div class="swiper-wrapper">
            @if(isset($workers))
                @foreach($workers as $worker)
                    @if(session('locale') == 'en')
                        <div class="swiper-slide">
                            <img alt="Dt. Abdulkadir Narin" src="{{asset('storage/'. $worker->img)}}">
                            <h3>{{$worker->name_en}}</h3>
                            <div></div>
                            <h5>{{$worker->position_en}}</h5>
                        </div>
                    @elseif(session('locale') == 'ru')
                        <div class="swiper-slide">
                            <img alt="Dt. Abdulkadir Narin" src="{{asset('storage/'. $worker->img)}}">
                            <h3>{{$worker->name_ru}}</h3>
                            <div></div>
                            <h5>{{$worker->position_ru}}</h5>
                        </div>
                    @elseif(session('locale') == 'tr')
                        <div class="swiper-slide">
                            <img alt="Dt. Abdulkadir Narin" src="{{asset('storage/'. $worker->img)}}">
                            <h3>{{$worker->name_tr}}</h3>
                            <div></div>
                            <h5>{{$worker->position_tr}}</h5>
                        </div>
                    @else
                        <div class="swiper-slide">
                            <img alt="Dt. Abdulkadir Narin" src="{{asset('storage/'. $worker->img)}}">
                            <h3>{{$worker->name_tr}}</h3>
                            <div></div>
                            <h5>{{$worker->position_tr}}</h5>
                        </div>
                    @endif
                @endforeach
            @endif
        </div>
    </div>
</div>

