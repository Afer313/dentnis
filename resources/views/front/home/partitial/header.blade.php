<header id="top">
    <a href="{{route('home')}}">
        <img class="logo" src="{{asset('assets/img/dentnis-logo-2.svg')}}" alt="">
    </a>
    <nav class="navbar">
        <ul class="menuFraq" id="menuFraq1">{{__('home.nav1')}}
            <div class="li_keeper" id="li_keeper1">
                <li>{{__('header_&_footer.Gülüş_Tasarımı_Nedir?')}}</li>
                <li>{{__('header_&_footer.Nişantaşı_Gülüş_Tasarımı_(Gülüş_Estetiği)')}}</li>
                <li>{{__('header_&_footer.Diş_Beyazlatma_(Bleaching)_Nedir?')}}</li>
                <li>{{__('header_&_footer.Diş_Estetiği_İle_Gençleşmek_Mümkün')}}</li>
                <li>{{__('header_&_footer.Estetik_Porselen_Dolgu')}}</li>
                <li>{{__('header_&_footer.Zirkonyum_Diş_Kaplama')}}</li>
                <li>{{__('header_&_footer.Nişantaşı_Zirkonyum_Diş_Kaplama')}}</li>
                <li>{{__('header_&_footer.Anti_Aging_Diş_Hekimliği')}}</li>
                <li>{{__('header_&_footer.Lamine_Diş_Kaplama')}}</li>
                <li>{{__('header_&_footer.Nişantaşı_Laminate_Veneers')}}</li>
                <li>{{__('header_&_footer.Pembe_Estetik')}}</li>
                <li>{{__('header_&_footer.Bonding_Diş_Fiyatları')}}</li>
                <li>{{__('header_&_footer.Dijital_Diş_Hekimliği')}}</li>
            </div>
        </ul>
        <ul class="menuFraq" id="menuFraq2">{{__('home.nav2')}}
            <div class="li_keeper" id="li_keeper2">
                <li>{{__('header_&_footer.Diş_Dolgusu_Fiyatları_2024')}}</li>
                <li>{{__('header_&_footer.Diş_Eti_Çekilmesi')}}</li>
                <li>{{__('header_&_footer.Çocuk_Diş_Hekimliği')}}</li>
                <li>{{__('header_&_footer.Kanal_Tedavisi_Nedir?')}}</li>
                <li>{{__('header_&_footer.Bruksizm_Nedir?')}}</li>
                <li>{{__('header_&_footer.Oral_Diagnoz_ve_Radyoloji')}}</li>
                <li>{{__('header_&_footer.Ağız_Kokusu')}}</li>
                <li>{{__('header_&_footer.Art_Enemal_Bonding_Tekniği')}}</li>
                <li>{{__('header_&_footer.Diş_Teli_Tedavisi_Nedir?')}}</li>
                <li>{{__('header_&_footer.Ağız,_Diş_Ve_Çene_Cerrahisi')}}</li>
                <li>{{__('header_&_footer.Hızlı_Diş_Teli_Tedavisi')}}</li>
                <li>{{__('header_&_footer.Şeffaf_Diş_Teli_Ve_Şeffaf_Diş_Plağı_Arasındaki_Farklar')}}</li>
            </div>
        </ul>
        <ul class="menuFraq" id="menuFraq3">{{__('home.nav3')}}
            <div class="li_keeper" id="li_keeper3">
                <li>{{__('header_&_footer.İmplant_Fiyatları_2024')}}</li>
                <li>{{__('header_&_footer.Nişantaşı_Implant_Tedavisi')}}</li>
                <li>{{__('header_&_footer.Bir_Günde_Implant,_Aynı_Günde_Hızlı_Implant_Tedavisi')}}</li>
                <li>{{__('header_&_footer.Tek_Diş_Implant')}}</li>
                <li>{{__('header_&_footer.Tüm_Ağız_Implant')}}</li>
                <li>{{__('header_&_footer.Tam_Dişsizlikte_Implant')}}</li>
                <li>{{__('header_&_footer.All_On_Four_Implant')}}</li>
                <li>{{__('header_&_footer.Dikişsiz_Implant')}}</li>
                <li>{{__('header_&_footer.Sedasyonla_Uyutarak_Implant')}}</li>
                <li>{{__('header_&_footer.Sinus_Lifting_Operasyonu_Nedir?')}}</li>
            </div>
        </ul>
        <ul class="menuFraq" id="menuFraq4">{{__('home.nav4')}}
            <div class="li_keeper" id="li_keeper4">
                <a href="{{route('abdul')}}">
                    <li>{{__('header_&_footer.Dr._Abdulkadir_Narin')}}</li>
                </a>
                <a href="{{route('tv_programs')}}">
                    <li>{{__('header_&_footer.TV_Programları')}}</li>
                </a>
                <a href="{{route('blog')}}">
                    <li>{{__('header_&_footer.Makaleler')}}</li>
                </a>
            </div>
        </ul>
        <ul><a id="ilet" href="{{route('contact_us')}}">{{__('home.nav5')}}</a></ul>
        @if(session('locale') == 'tr')
            <ul>
                <a href="{{ route('change_language', ['locale' => 'en']) }}"><img
                        src="{{asset('assets/img/lang/usa.png')}}" alt=""></a>
            </ul>
            <ul>
                <a href="{{ route('change_language', ['locale' => 'ru']) }}"><img
                        src="{{asset('assets/img/lang/rus.png')}}" alt=""></a>
            </ul>
        @endif
        @if(session('locale') == 'ru')
            <ul>
                <a href="{{ route('change_language', ['locale' => 'en']) }}"><img
                        src="{{asset('assets/img/lang/usa.png')}}" alt=""></a>
            </ul>
            <ul>
                <a href="{{ route('change_language', ['locale' => 'tr']) }}"><img
                        src="{{asset('assets/img/lang/turk.jpg')}}" alt=""></a>
            </ul>
        @endif
        @if(session('locale') == 'en')
            <ul>
                <a href="{{ route('change_language', ['locale' => 'tr']) }}"><img
                        src="{{asset('assets/img/lang/turk.jpg')}}" alt=""></a>
            </ul>
            <ul>
                <a href="{{ route('change_language', ['locale' => 'ru']) }}"><img
                        src="{{asset('assets/img/lang/rus.png')}}" alt=""></a>
            </ul>
        @endif
        @if(session('locale') == null)
            <ul>
                <a href="{{ route('change_language', ['locale' => 'en']) }}">
                    <img
                        src="{{asset('assets/img/lang/usa.png')}}" alt="">
                </a>
            </ul>
            <ul>
                <a href="{{ route('change_language', ['locale' => 'ru']) }}">
                    <img
                        src="{{asset('assets/img/lang/rus.png')}}" alt="">
                </a>
            </ul>
        @endif
        <ul style="border: none!important;"><img id="search_btn" src="{{asset('assets/img/lang/search.png')}}" alt="">
        </ul>
    </nav>
</header>
