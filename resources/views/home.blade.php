@extends('layouts.app')
<style>
    .timer-item{
        width:70px;
        height:70px;
        border-radius:18px;
        background:rgba(255,255,255,.06);
        backdrop-filter:blur(15px);
        border:1px solid rgba(212,175,55,.25);

        display:flex;
        flex-direction:column;
        justify-content:center;
        align-items:center;
    }

    .timer-item span{
        color:#d4af37;
        font-size:1.6rem;
        font-weight:700;
        line-height:1;
    }

    .timer-item small{
        font-size:.7rem;
        text-transform:uppercase;
        letter-spacing:.1em;
        color:#aaa;
    }

    .liquidationSwiper{
        padding-bottom:60px;
    }

    .liquidationSwiper .swiper-slide{
        height:auto;
    }

    .liquidationSwiper .swiper-pagination-bullet{
        width:12px;
        height:12px;
        opacity:.5;
    }

    .liquidationSwiper .swiper-pagination-bullet-active{
        opacity:1;
        transform:scale(1.3);
    }






    .liquidationSwiper{
        padding:10px 5px 70px;
    }

    .liquidationSwiper .swiper-slide{
        height:auto;
    }

    .liquidation-prev,
    .liquidation-next{
        width:55px;
        height:55px;
        border-radius:50%;
        backdrop-filter:blur(15px);
        background:rgba(212,175,55,.12);
        border:1px solid rgba(212,175,55,.35);
        transition:.35s;
    }

    .liquidation-prev:hover,
    .liquidation-next:hover{
        background:#d4af37;
        transform:scale(1.08);
    }

    .liquidation-prev::after,
    .liquidation-next::after{
        font-size:18px;
        font-weight:700;
        color:#d4af37;
    }

    .liquidation-prev:hover::after,
    .liquidation-next:hover::after{
        color:#111;
    }

    .liquidation-pagination{
        position:relative;
        margin-top:35px;
    }

    .liquidation-pagination .swiper-pagination-bullet{
        width:12px;
        height:12px;
        background:#d4af37;
        opacity:.3;
    }

    .liquidation-pagination .swiper-pagination-bullet-active{
        opacity:1;
        transform:scale(1.4);
    }

    .swiper-wrapper{
        height:60vh !important;
    }

    @media(max-width:768px){

        .liquidation-prev,
        .liquidation-next{
            display:none;
        }

        .swiper-wrapper{
            height:70vh !important;
        }

    }
</style>
@section('content')

<!-- Hero Carousel Section -->
<div class="carousel slide" data-bs-ride="carousel" id="heroCarousel">
    <!-- Indicators -->
    <div class="carousel-indicators mb-5">
        @foreach($banners as $key => $banner)
        <button aria-current="true" aria-label="Slide 1" class="{{ $key == 0 ? 'active' : '' }}" data-bs-slide-to="{{$key}}" data-bs-target="#heroCarousel" type="button"></button>
        <!-- <button aria-label="Slide 2" data-bs-slide-to="1" data-bs-target="#heroCarousel" type="button"></button>
        <button aria-label="Slide 3" data-bs-slide-to="2" data-bs-target="#heroCarousel" type="button"></button> -->
        @endforeach
    </div>
    <div class="carousel-inner">
         @foreach($banners as $key => $banner)
        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
            <img alt="El Arte de la Elegancia Olfativa" class="carousel-img" src="{{asset ('storage/' . $banner->image)}}" />
            <div class="carousel-overlay"></div>
            <div class="carousel-caption d-block">
                <div class="col-lg-7">
                    <span class="label-caps text-primary-custom d-block mb-3" style="letter-spacing: 0.3em;">{{ $banner->etiqueta }}</span>
                    <h1 class="font-display display-3 text-gold-gradient mb-3">{{ $banner->titulo }}</h1>
                    <p class="fs-5 text-on-surface-variant mb-5 mw-100" style="max-width: 500px;">{{ $banner->descripcion }}</p>
                    <div class="d-flex gap-3">
                        <a href="{{route('tienda')}}" class="btn bg-primary-container px-5 py-3 label-caps fw-bold">Explorar Ahora</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <!-- Controls -->
    <button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#heroCarousel" type="button">
        <span aria-hidden="true" class="carousel-control-prev-icon"></span>
        <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#heroCarousel" type="button">
        <span aria-hidden="true" class="carousel-control-next-icon"></span>
        <span class="visually-hidden">Siguiente</span>
    </button>
</div>
<!-- Categories Section -->
<section class="py-5">
    <div class="container container-max px-4 px-md-5 py-5">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-end mb-5">
            <div>
                <h2 class="font-display h2 mb-1">Colecciones Seleccionadas</h2>
                <p class="text-on-surface-variant mb-0">Compre por mundo sensorial</p>
            </div>
            <a class="text-primary-custom label-caps border-bottom border-primary text-decoration-none pb-1" href="#">Ver todas las categorías</a>
        </div>
        <div class="row g-4">
             @foreach($categories as $category)
            <div class="col-md-3">
                <a href="{{ route('tienda', ['category' => $category->id]) }}"
                    class="text-decoration-none">
                    <div class="category-card">
                        <img alt="Floral Noir"
                            src="{{ asset('storage/' . $category->image) }}" />

                        <div class="category-overlay"></div>

                        <div class="category-content glass-card">
                            <h3 class="font-display h4 text-primary-custom mb-1">
                                {{ $category->name }}
                            </h3>

                            <p class="text-white mb-0">
                                Esencias botánicas intensas
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Bestsellers Section -->
<section class="py-5" style="background-color: var(--surface-container-low);">
    <div class="container container-max px-4 px-md-5 py-5">
        <div class="text-center mb-5">
            <h2 class="font-display h2 mb-1">Los Más Vendidos</h2>
            <p class="text-on-surface-variant">Las fragancias más codiciadas de la temporada</p>
        </div>
        <div class="row g-4">
             @foreach($products_mas_vendidos as $product)
            <div class="col- 12 col-md-6 col-lg-3">
                <div class="product-card d-flex flex-column">
                    <div class="img-container mb-3">
                        <span class="badge-exclusive">Exclusivo</span>
                        @php
                            $imagen = json_decode($product->images, true)[0] ?? 'default.jpg';
                        @endphp
                        <img alt="Oud Imperial" class="img-fluid" src="{{ asset('storage/' . $imagen) }}" />
                        <button class="quick-add-btn btnQuickView"
                            data-id="{{ $product->id }}"
                            data-bs-toggle="modal"
                            data-bs-target="#quickViewModal"
                            
                            data-name="{{ $product->name }}"
                            data-price="{{ number_format($product->price, 2) }}"
                            data-priceoferta="{{ number_format($product->price_oferta ?? $product->price, 2) }}"
                            data-description="{{ strip_tags($product->description) }}"
                            data-category="{{ $product->taxonomy->name ?? 'Categoría' }}"
                            data-images='@json(json_decode($product->images, true))'>
                         VER DETALLE
                        </button>
                    </div>
                    <h3 class="font-display h6 mb-1 text-center">{{$product->name}}</h3>
                    <!-- <p class="label-caps text-on-surface-variant mb-2" style="font-size: 11px;">Eau de Parfum • 100ml</p> -->
                    <p class="text-primary-custom fs-5 mb-0 text-center">S/. {{ number_format($product->price, 2) }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Promotion Section -->
<section class="py-5">
    <div class="container container-max px-4 px-md-5">
        <div class="glass-card p-4 p-md-5 rounded-4 row align-items-center g-5 m-0">
            <div class="col-lg-6">
                <span class="label-caps text-primary-custom d-block mb-3">Comunidad privada</span>
                <h2 class="font-display display-5 mb-4">Venta Privada de Esencias Raras</h2>
                <p class="fs-5 text-on-surface-variant mb-4">Acceda a nuestra comunidad privada de clásicos descatalogados y prototipos de edición limitada.</p>
                <!-- <div class="d-flex gap-3 mb-5">
                    <div class="text-center">
                        <div class="countdown-box font-display">12</div>
                        <span class="label-caps text-on-surface-variant d-block mt-2" style="font-size: 10px;">Horas</span>
                    </div>
                    <div class="text-center">
                        <div class="countdown-box font-display">45</div>
                        <span class="label-caps text-on-surface-variant d-block mt-2" style="font-size: 10px;">Mins</span>
                    </div>
                    <div class="text-center">
                        <div class="countdown-box font-display">08</div>
                        <span class="label-caps text-on-surface-variant d-block mt-2" style="font-size: 10px;">Segs</span>
                    </div>
                </div> -->
                <button class="btn bg-primary-custom text-dark px-5 py-3 label-caps fw-bold">Unirse a la Lista de Espera</button>
            </div>
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="p-4 border border-white border-opacity-10 bg-white bg-opacity-5 rounded-3 text-center h-100">
                            <i class="fa-solid fa-wand-sparkles text-primary-custom fs-2 mb-3"></i>
                            <h4 class="font-display h5 mb-2">Curaduría</h4>
                            <p class="small text-on-surface-variant mb-0">Solo 100 botellas por aroma en todo el mundo.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-4 border border-white border-opacity-10 bg-white bg-opacity-5 rounded-3 text-center h-100">
                            <i class="fa-solid fa-box text-primary-custom fs-2 mb-3"></i>
                            <h4 class="font-display h5 mb-2">Conserje</h4>
                            <p class="small text-on-surface-variant mb-0">Envío global con entrega de guante blanco.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-4 border border-white border-opacity-10 bg-white bg-opacity-5 rounded-3 text-center h-100">
                            <i class="fa-solid fa-gift text-primary-custom fs-2 mb-3"></i>
                            <h4 class="font-display h5 mb-2">Embalaje</h4>
                            <p class="small text-on-surface-variant mb-0">Estuches de presentación de cuero hechos a mano.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-4 border border-white border-opacity-10 bg-white bg-opacity-5 rounded-3 text-center h-100">
                            <i class="fa-solid fa-certificate text-primary-custom fs-2 mb-3"></i>
                            <h4 class="font-display h5 mb-2">Auténtico</h4>
                            <p class="small text-on-surface-variant mb-0">Seguimiento de procedencia certificado por NFC.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Liquidación Premium Section -->
<section class="py-5 position-relative overflow-hidden" style="background: linear-gradient(135deg, #120f08 0%, #1f1a10 50%, #0f0d09 100%);">
    
    <!-- Glow Effects -->
    <div class="position-absolute top-0 start-0 w-100 h-100">
        <div class="liquidation-glow glow-1"></div>
        <div class="liquidation-glow glow-2"></div>
    </div>

    <div class="container container-max px-4 px-md-5 py-5 position-relative">

        <!-- Header -->
        <div class="d-flex flex-column flex-lg-row justify-content-between align-items-lg-end mb-5 gap-4">
            <div>
                <span class="label-caps text-danger d-block mb-3" style="letter-spacing: .3em;">
                    Últimas Unidades
                </span>

                <h2 class="font-display display-5 mb-3 text-gold-gradient">
                    Liquidación Exclusiva
                </h2>

                <p class="text-on-surface-variant fs-5 mb-0" style="max-width: 650px;">
                    Fragancias y piezas de colección con descuentos irrepetibles antes de abandonar nuestra bóveda privada.
                </p>
            </div>

            @php
                $fechaLiquidacion = '2026-12-31 23:59:59';
            @endphp
            <!-- Countdown -->
            <div class="glass-card px-4 py-3 d-flex align-items-center gap-3">
                <div>
                    <small class="label-caps text-on-surface-variant d-block mb-2">
                        Finaliza en
                    </small>

                    <div class="sale-timer d-flex gap-2">
                        <div class="timer-item">
                            <span id="days">00</span>
                            <small>Días</small>
                        </div>

                        <div class="timer-item">
                            <span id="hours">00</span>
                            <small>Horas</small>
                        </div>

                        <div class="timer-item">
                            <span id="minutes">00</span>
                            <small>Min</small>
                        </div>

                        <div class="timer-item">
                            <span id="seconds">00</span>
                            <small>Seg</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Products -->
        <div class="position-relative">
            <div class="swiper liquidationSwiper">
                <div class="swiper-wrapper">
                    @foreach($products_en_liquidacion as $product)
                    <div class="swiper-slide">
                        <div class="liquidation-card">
                            <div class="position-relative overflow-hidden rounded-4 mb-3">
                                <span class="sale-badge">
                                    -{{ number_format((($product->price - $product->price_oferta) / $product->price) * 100, 0) }}%
                                </span>
                                @php
                                    $imagen = json_decode($product->images, true)[0] ?? 'default.jpg';
                                @endphp
                                <img
                                    src="{{ asset('storage/' . $imagen) }}"
                                    class="img-fluid liquidation-img"
                                    alt="{{ $product->name }}"
                                >
                                <div class="liquidation-overlay">
                                    <button
                                        class="btn btn-gold px-4 py-2 label-caps fw-bold btnQuickView"
                                        data-id="{{ $product->id }}"
                                        data-bs-toggle="modal"
                                        data-bs-target="#quickViewModal"
                                        data-name="{{ $product->name }}"
                                        data-price="{{ number_format($product->price, 2) }}"
                                        data-priceoferta="{{ number_format($product->price_oferta ?? $product->price, 2) }}"
                                        data-description="{{ strip_tags($product->description) }}"
                                        data-category="{{ $product->taxonomy->name ?? 'Categoría' }}"
                                        data-images='@json(json_decode($product->images, true))'>

                                        Ver detalle

                                    </button>
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="text-center">
                                    <h3 class="font-display h5 mb-1 text-center">
                                        {{ $product->name }}
                                    </h3>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-3">
                                <span class="text-decoration-line-through text-on-surface-variant fs-5">
                                    S/. {{ number_format($product->price, 2) }}
                                </span>
                                <span class="text-gold fw-bold fs-3">
                                    S/. {{ number_format($product->price_oferta, 2) }}
                                </span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            

            <div class="swiper-pagination liquidation-pagination mt-4"></div>
        </div>


    </div>
</section>

@include('partials.moda-product')


<script>

    document.addEventListener('DOMContentLoaded', function(){

        const endDate = new Date("{{ $company->fecha_liquidacion }}").getTime();

        function updateCountdown(){

            const now = new Date().getTime();

            const distance = endDate - now;

            if(distance <= 0){

                document.getElementById('days').innerHTML='00';
                document.getElementById('hours').innerHTML='00';
                document.getElementById('minutes').innerHTML='00';
                document.getElementById('seconds').innerHTML='00';

                return;
            }

            const days = Math.floor(distance / (1000 * 60 * 60 * 24));

            const hours = Math.floor(
                (distance % (1000 * 60 * 60 * 24))
                / (1000 * 60 * 60)
            );

            const minutes = Math.floor(
                (distance % (1000 * 60 * 60))
                / (1000 * 60)
            );

            const seconds = Math.floor(
                (distance % (1000 * 60))
                / 1000
            );

            document.getElementById('days').innerHTML =
                String(days).padStart(2,'0');

            document.getElementById('hours').innerHTML =
                String(hours).padStart(2,'0');

            document.getElementById('minutes').innerHTML =
                String(minutes).padStart(2,'0');

            document.getElementById('seconds').innerHTML =
                String(seconds).padStart(2,'0');
        }

        updateCountdown();

        setInterval(updateCountdown,1000);

    });

</script>

<script>

    document.addEventListener('DOMContentLoaded', function(){

        new Swiper('.liquidationSwiper', {

            loop: true,

            speed: 800,

            autoplay:{
                delay:3500,
                disableOnInteraction:false
            },

            navigation:{
                nextEl:'.liquidation-next',
                prevEl:'.liquidation-prev'
            },

            pagination:{
                el:'.liquidation-pagination',
                clickable:true
            },

            breakpoints:{

                0:{
                    slidesPerView:1.2,
                    spaceBetween:15
                },

                576:{
                    slidesPerView:2,
                    spaceBetween:20
                },

                992:{
                    slidesPerView:3,
                    spaceBetween:25
                },

                1200:{
                    slidesPerView:4,
                    spaceBetween:30
                }

            }

        });

    });

</script>

@endsection

