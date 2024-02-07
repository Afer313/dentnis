<!doctype html>
<html lang="tr">
@include('front.home.partitial.home_head')
<body>
@include('front.home.partitial.header')
@include('front.home.partitial.firstCarousel')
<div class="main1">
    <h2 id="h1">{{__('home.cont1')}}</h2>
    <div class="estetik">
        <div class="estetik-inner">
            <div class="img_layout">
                <img src="{{asset('assets/img/home/tooth_icons/tooth1.webp')}}" alt="">
            </div>
            <h4>{{__('home.cont2')}}</h4>
            <p>{{__('home.cont3')}}</p>
        </div>
        <div class="estetik-inner2">
            <div class="img_layout">
                <img src="{{asset('assets/img/home/tooth_icons/tooth2.webp')}}" alt="">
            </div>
            <h4>{{__('home.cont4')}}</h4>
            <p>{{__('home.cont5')}}</p>
        </div>
        <div class="estetik-inner">
            <div class="img_layout">
                <img src="{{asset('assets/img/home/tooth_icons/tooth3.webp')}}" alt="">
            </div>
            <h4>{{__('home.cont6')}}</h4>
            <p>{{__('home.cont7')}}</p>
        </div>
    </div>
</div>
@include('front.home.partitial.partners')
@include('front.home.partitial.youtubeVid')
@include('front.home.partitial.ekibContainer')
@include('front.home.partitial.esteticContainer')
@include('front.home.partitial.blogPreview')
@include('front.home.partitial.footer')
@include('front.home.partitial.nav')
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="{{asset('assets/scripts/partner_script.js')}}"></script>
<script src="{{asset('assets/scripts/static.js')}}"></script>
</html>
