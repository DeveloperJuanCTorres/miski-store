<style>
    .search-container{
        position: relative;
    }

    .search-btn{
        position: absolute;
        right: 15px;
        top: 50%;
        transform: translateY(-50%);
        background: transparent;
        border: none;
        color: #999;
        padding: 0;
        cursor: pointer;
        z-index: 2;
    }

    .search-input{
        padding-right: 45px;
    }

    .mobile-search{
        position: relative;
    }

    .mobile-search .search-btn{
        position: absolute;
        left: 15px;
        top: 50%;
        transform: translateY(-50%);
        background: transparent;
        border: none;
        color: #999;
        padding: 0;
        z-index: 2;
    }

    .mobile-search input{
        padding-left: 60px;
    }
</style>
@php
    $route = Route::currentRouteName();
@endphp

<!-- NAVBAR PREMIUM -->
<nav class="navbar navbar-expand-lg fixed-top navbar-premium">

    <div class="container-fluid container-max px-4 px-md-5">

        <!-- LOGO -->
        <a class="navbar-brand d-flex align-items-center gap-3 m-0" href="{{ route('home') }}">

            <!-- <div class="brand-logo">
                <i class="fa-solid fa-wand-magic-sparkles"></i>                
            </div> -->
            <img src="{{asset ('storage/' . $company->logo)}}" alt="" width="100">

            <div>
                <h2 class="font-display text-gold mb-0">
                    {{$company->nombre}}
                </h2>
            </div>

        </a>

        <!-- MOBILE BUTTON -->
        <button
            class="navbar-toggler border-0 shadow-none p-0"
            type="button"
            data-bs-toggle="offcanvas"
            data-bs-target="#mobileMenu">

            <div class="menu-toggle">

                <span></span>
                <span></span>
                <span></span>

            </div>

        </button>

        <!-- DESKTOP MENU -->
        <div class="collapse navbar-collapse justify-content-center d-none d-lg-flex">

            <ul class="navbar-nav gap-4">

                <li class="nav-item">
                    <a class="nav-link {{ $route == 'home' ? 'active' : '' }}"
                       href="{{ route('home') }}">
                        Inicio
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ $route == 'tienda' ? 'active' : '' }}"
                       href="{{ route('tienda') }}">
                        Tienda
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ $route == 'servicios' ? 'active' : '' }}"
                       href="{{ route('servicios') }}">
                        Servicios
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ $route == 'contactanos' ? 'active' : '' }}"
                       href="{{ route('contactanos') }}">
                        Contáctanos
                    </a>
                </li>

            </ul>

        </div>

        <!-- RIGHT -->
        <div class="d-none d-lg-flex align-items-center gap-3">

            <div class="search-container">

                <input
                    id="searchProductDesktop"
                    class="form-control search-input"
                    placeholder="Buscar productos..."
                    type="text" />

                <button type="button" id="btnSearchDesktop" class="search-btn">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>

            </div>

        </div>

    </div>

</nav>

<!-- MOBILE OFFCANVAS -->
<div class="offcanvas offcanvas-start mobile-sidebar border-0"
     tabindex="-1"
     id="mobileMenu">

    <div class="mobile-overlay"></div>

    <div class="offcanvas-header border-0 px-4 pt-4">

        <div class="d-flex align-items-center gap-3">

            <!-- <div class="brand-logo">
                <i class="fa-solid fa-wand-magic-sparkles"></i>
            </div> -->
            <img src="{{asset ('storage/' . $company->logo)}}" alt="" width="90">

            <div>
                <h5 class="text-gold mb-0">
                    {{$company->nombre}}
                </h5>

                <!-- <small class="text-gold">
                    Luxury Fashion
                </small> -->
            </div>

        </div>

        <button type="button"
                class="btn-close btn-close-white shadow-none"
                data-bs-dismiss="offcanvas">
        </button>

    </div>

    <div class="offcanvas-body px-4 d-flex flex-column">

        <!-- SEARCH -->
        <div class="mobile-search mb-4">

            <button type="button" id="btnSearchMobile" class="search-btn">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>

            <input
                type="text"
                id="searchProductMobile"
                placeholder="Buscar productos...">
            
            

        </div>

        <!-- MENU -->
        <ul class="mobile-nav-list">

            <li>
                <a class="{{ $route == 'home' ? 'active' : '' }}"
                   href="{{ route('home') }}">

                    <span class="mobile-icon">
                        <i class="fa-solid fa-house"></i>
                    </span>

                    Inicio

                </a>
            </li>

            <li>
                <a class="{{ $route == 'tienda' ? 'active' : '' }}"
                   href="{{ route('tienda') }}">

                    <span class="mobile-icon">
                        <i class="fa-solid fa-bag-shopping"></i>
                    </span>

                    Tienda

                </a>
            </li>

            <li>
                <a class="{{ $route == 'servicios' ? 'active' : '' }}"
                   href="{{ route('servicios') }}">

                    <span class="mobile-icon">
                        <i class="fa-solid fa-gem"></i>
                    </span>

                    Servicios

                </a>
            </li>

            <li>
                <a class="{{ $route == 'contactanos' ? 'active' : '' }}"
                   href="{{ route('contactanos') }}">

                    <span class="mobile-icon">
                        <i class="fa-solid fa-envelope"></i>
                    </span>

                    Contáctanos

                </a>
            </li>

        </ul>

        <!-- SOCIAL -->
        <div class="mt-auto pt-5">

            <p class="text-uppercase text-secondary small mb-3">
                Redes Sociales
            </p>

            <div class="d-flex gap-3">

                <a href="#" class="mobile-social">
                    <i class="fab fa-facebook-f"></i>
                </a>

                <a href="#" class="mobile-social">
                    <i class="fab fa-instagram"></i>
                </a>

                <a href="#" class="mobile-social">
                    <i class="fab fa-tiktok"></i>
                </a>

                <a href="#" class="mobile-social">
                    <i class="fab fa-whatsapp"></i>
                </a>

            </div>

        </div>

    </div>

</div>



<!-- SideNavBar (Cart Preview) -->
<aside class="cart-drawer group">
    <div class="cart-trigger">
        <i class="fa-solid fa-bag-shopping fs-4"></i>     
        <span class="cart-count-badge" id="cartCount">
            {{ $cartCount }}
        </span>       
    </div>
    <div class="mb-4">
        <h2 class="font-display h5 text-gold mb-1">Tu Selección</h2>
        <p class="text-variant mb-0 small">Artículos premium listos para pagar</p>
    </div>
    <div class="flex-grow-1 overflow-auto pe-2" id="cartItemsContainer">
        <!-- Mini Cart Item -->
        @forelse($cartItems as $item)
        <div class="d-flex gap-3 p-2 rounded hover-bg-white-5 mb-3"
            style="background: rgba(255,255,255,0.05);">
            <img
                src="{{ asset('storage/' . $item->options->image) }}"
                class="rounded object-fit-cover"
                style="width:64px; height:64px;"
                alt="{{ $item->name }}"
            />
            <div class="d-flex flex-column justify-content-center flex-grow-1">
                <span class="fw-bold small">
                    {{ $item->name }}
                </span>
                <span class="text-gold small">
                    S/. {{ number_format($item->price, 2) }}
                </span>
                
                @if($item->options->color_name)

                <div class="d-flex align-items-center gap-2 mt-1">

                    <span
                        style="
                            width:14px;
                            height:14px;
                            border-radius:50%;
                            background: {{ $item->options->color_hex }};
                            border:1px solid #ccc;
                            display:inline-block;
                        ">
                    </span>

                    <span class="small text-secondary">
                        {{ $item->options->color_name }}
                    </span>

                </div>

                @endif

                <span class="text-variant"
                    style="font-size:12px;">
                    Cantidad: {{ $item->qty }}
                </span>
            </div>
        </div>
        @empty

        <div class="text-center py-5">
            <i class="fa-solid fa-cart-shopping fs-1 mb-3 text-secondary"></i>
            <p class="text-variant mb-0">
                Tu carrito está vacío
            </p>
        </div>
        @endforelse
    </div>
    <div class="mt-auto pt-4 border-top border-secondary">
        <div class="d-flex justify-content-between mb-4">
            <span class="text-uppercase small tracking-widest">Subtotal</span>
            <span class="fw-bold" id="cartSubtotal">S/. {{ $cartSubtotal }}</span>
        </div>
        <a href="{{ route('cart.index') }}"
            class="btn btn-gold w-100 py-3 fw-bold">
            Detalle del carrito
        </a>
    </div>
</aside>






