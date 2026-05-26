@extends('layouts.app')

@section('content')

<!-- Hero Carousel Section -->
<div class="carousel slide" data-bs-ride="carousel" id="heroCarousel">
    <!-- Indicators -->
    <div class="carousel-indicators mb-5">
        <button aria-current="true" aria-label="Slide 1" class="active" data-bs-slide-to="0" data-bs-target="#heroCarousel" type="button"></button>
        <button aria-label="Slide 2" data-bs-slide-to="1" data-bs-target="#heroCarousel" type="button"></button>
        <button aria-label="Slide 3" data-bs-slide-to="2" data-bs-target="#heroCarousel" type="button"></button>
    </div>
    <div class="carousel-inner">
        <!-- Slide 1 -->
        <div class="carousel-item active">
            <img alt="El Arte de la Elegancia Olfativa" class="carousel-img" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBEGFzx-qeCZpopJGxQOlj48fCCBc4j0siimJHQHka-JO898nhKrgny9FvRXQLDUpae1Amp1Sr--wtLbPHb4-sN2Xgyn4myzR0alvz9TwSeXQxVes-CslkZwdzS0CvZf8s3Q8mNkXRts7kU3QrEN92jG0U7bR0c-Ek3Z6B2O8hiQsk9DKXaPIKxPYvwhm4DTURDo0xzJGC2c1ZGZOwHbnlIhHKYUOoDtVvlZ99NJXOYl4fcxpy0Wukr3I14A-VyZMTb8xRbLvrF8ag" />
            <div class="carousel-overlay"></div>
            <div class="carousel-caption d-block">
                <div class="col-lg-7">
                    <span class="label-caps text-primary-custom d-block mb-3" style="letter-spacing: 0.3em;">Edición Limitada</span>
                    <h1 class="font-display display-3 text-gold-gradient mb-3">El Arte de la Elegancia Olfativa</h1>
                    <p class="fs-5 text-on-surface-variant mb-5 mw-100" style="max-width: 500px;">Descubre nuestra colección curada de esencias raras.</p>
                    <div class="d-flex gap-3">
                        <button class="btn bg-primary-container px-5 py-3 label-caps fw-bold">Explorar Ahora</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slide 2 -->
        <div class="carousel-item">
            <img alt="Colecciones Exclusivas" class="carousel-img" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDfbzRlFfBv1WOJEzMCNezXfHA22iNPpJmVGW0uDpO7xqpe5gQCDlkPyqDzoC-x1boG6mAN17dm4ISpBYY9CNhVKXPwD5A5QYANGpSSi4e0EHyAEPTAos0Jmp0UUF-V25tPJnekxbWj6fic0DTlA4vVxhzfpjyi-hPjm8iQP_XzMUkr5qZ_l4giWKqGvqdwTpIBC8SoNgXlmC7Surx0OGAqqdqNzlU0943HD3AhkoAQB71V0JsRL3Fz13oLvZXQ9Bxt7YncOENyZjM" />
            <div class="carousel-overlay"></div>
            <div class="carousel-caption d-block">
                <div class="col-lg-7">
                    <span class="label-caps text-primary-custom d-block mb-3" style="letter-spacing: 0.3em;">Privado</span>
                    <h1 class="font-display display-3 text-gold-gradient mb-3">Colecciones Exclusivas</h1>
                    <p class="fs-5 text-on-surface-variant mb-5 mw-100" style="max-width: 500px;">Fragancias de edición limitada para conocedores.</p>
                    <div class="d-flex gap-3">
                        <button class="btn bg-primary-container px-5 py-3 label-caps fw-bold">Ver Colección</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slide 3 -->
        <div class="carousel-item">
            <img alt="Rituales de Piel Pura" class="carousel-img" src="https://lh3.googleusercontent.com/aida-public/AB6AXuChdn23vo0H6rlIDahUnCzJpDtqSIF5XHdK2ybozsEgsM0dArJWfZFikite_pyTxB245yfWf41KcnNJjddDw0k2Wz4_39KQgqegcst69jxY4BSjxnmZJc2J2c774K4kI5Mf_SRShl-QgMjZ7QxJPZ1cgSy8fPwm1Cw-A_mnD06gaJ5_eMiD9jxgSRCe0MCWGSaOPd3fYw-3xyN0TuG-pcoblQ3_zCObqHarBZARwRyM4dl_o6DLKJB_zghDluReMb3xOtI28O5JxzE" />
            <div class="carousel-overlay"></div>
            <div class="carousel-caption d-block">
                <div class="col-lg-7">
                    <span class="label-caps text-primary-custom d-block mb-3" style="letter-spacing: 0.3em;">Molecular</span>
                    <h1 class="font-display display-3 text-gold-gradient mb-3">Rituales de Piel Pura</h1>
                    <p class="fs-5 text-on-surface-variant mb-5 mw-100" style="max-width: 500px;">Cuidado de lujo molecular para una regeneración profunda.</p>
                    <div class="d-flex gap-3">
                        <button class="btn bg-primary-container px-5 py-3 label-caps fw-bold">Descubrir Más</button>
                    </div>
                </div>
            </div>
        </div>
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
                    <h3 class="font-display h6 mb-1">{{$product->name}}</h3>
                    <!-- <p class="label-caps text-on-surface-variant mb-2" style="font-size: 11px;">Eau de Parfum • 100ml</p> -->
                    <p class="text-primary-custom fs-5 mb-0">S/. {{ number_format($product->price, 2) }}</p>
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
                <span class="label-caps text-primary-custom d-block mb-3">El Evento de Medianoche</span>
                <h2 class="font-display display-5 mb-4">Venta Privada de Esencias Raras</h2>
                <p class="fs-5 text-on-surface-variant mb-4">Acceda a nuestra bóveda privada de clásicos descatalogados y prototipos de edición limitada. Se requiere membresía.</p>
                <div class="d-flex gap-3 mb-5">
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
                </div>
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

            <!-- Countdown -->
            <div class="glass-card px-4 py-3 d-flex align-items-center gap-3">
                <div>
                    <small class="label-caps text-on-surface-variant d-block mb-1">
                        Finaliza en
                    </small>

                    <div class="d-flex gap-2">
                        <div class="sale-timer-box">08</div>
                        <div class="sale-timer-box">22</div>
                        <div class="sale-timer-box">41</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Products -->
        <div class="row g-4">

            @foreach($products_en_liquidacion as $product)
            <div class="col-12 col-md-6 col-lg-3">
                <div class="liquidation-card h-100">

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
                            alt="Perfume"
                        >

                        <div class="liquidation-overlay">
                            <button class="btn btn-gold px-4 py-2 label-caps fw-bold btnQuickView"
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

                    <div class="d-flex justify-content-between align-items-start mb-2">
                        <div>
                            <h3 class="font-display h5 mb-1">
                                {{ $product->name }}
                            </h3>

                            <!-- <p class="label-caps text-on-surface-variant mb-0" style="font-size: 11px;">
                                Extrait de Parfum • 100ml
                            </p> -->
                        </div>

                        <!-- <span class="stock-pill">
                            3 left
                        </span> -->
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

        <!-- CTA -->
        <div class="text-center mt-5 pt-3">
            <button class="btn btn-lg px-5 py-3 fw-bold label-caps"
                style="background: linear-gradient(135deg, #d4af37, #f5d77a); color:#111; border:none;">
                Explorar Liquidación
            </button>
        </div>

    </div>
</section>

@include('partials.moda-product')


@endsection

