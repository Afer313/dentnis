<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{asset('assets/img/home/carousel/car1.webp')}}" class="d-block w-100" alt="...">
        </div>
        @if(session('locale') == 'tr')
            <div class="carousel-item">
                <img src="{{asset('assets/img/home/carousel/car2.webp')}}" class="d-block w-100" alt="...">
            </div>
        @endif
        <div class="carousel-item">
            <img src="https://dentnis.com/wp-content/uploads/2022/07/eniyidishekimi.jpg" class="d-block w-100"
                 alt="...">
        </div>
        @if(session('locale') == 'tr')
            <div class="carousel-item">
                <img src="https://dentnis.com/wp-content/uploads/2022/07/dis-beyazlatma-nasil-yapilir.jpg"
                     class="d-block w-100" alt="...">
            </div>
        @endif
        <div class="carousel-item">
            <img src="https://dentnis.com/wp-content/uploads/2022/07/en-iyi-dis-hekimi-nisantasi.jpg"
                 class="d-block w-100" alt="...">
        </div>
        @if(session('locale') == 'tr')
            <div class="carousel-item">
                <img src="{{asset('assets/img/home/carousel/car3.webp')}}" class="d-block w-100" alt="...">
            </div>
        @endif
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0"/>
            </svg>
        </span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708"/>
            </svg>
        </span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
