@php
    $route = Route::currentRouteName();
@endphp

<!-- NAVBAR PREMIUM -->
<nav class="navbar navbar-expand-lg fixed-top navbar-premium">

    <div class="container-fluid container-max px-4 px-md-5">

        <!-- LOGO -->
        <a class="navbar-brand d-flex align-items-center gap-3 m-0" href="{{ route('home') }}">

            <div class="brand-logo">
                <i class="fa-solid fa-wand-magic-sparkles"></i>
            </div>

            <div>
                <h2 class="font-display text-white mb-0">
                    Misk'i Store
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
                    class="form-control search-input"
                    placeholder="Buscar productos..."
                    type="text" />

                <i class="fa-solid fa-magnifying-glass search-icon"></i>

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

            <div class="brand-logo">
                <i class="fa-solid fa-wand-magic-sparkles"></i>
            </div>

            <div>
                <h5 class="text-white mb-0">
                    Misk'i Store
                </h5>

                <small class="text-gold">
                    Luxury Fashion
                </small>
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

            <i class="fa-solid fa-magnifying-glass"></i>

            <input type="text"
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
    </div>
    <div class="mb-4">
        <h2 class="font-display h5 text-gold mb-1">Tu Selección</h2>
        <p class="text-variant mb-0 small">Artículos premium listos para pagar</p>
    </div>
    <div class="flex-grow-1 overflow-auto pe-2">
        <!-- Mini Cart Item -->
        <div class="d-flex gap-3 p-2 rounded hover-bg-white-5 mb-3" style="background: rgba(255,255,255,0.05);">
            <img alt="Midnight Amber" class="rounded object-fit-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCUMLOWH0h4pJsg2EqBF3LoRqOND9el9SgvfImYzVHGVROtMLg7vxaAFHemns89irZIpL2iRpumBwtFX_q3aRzATekv9YZOqdybjXuw1uwLeTJF5a5zbQ9BMYjcmo9hWle93q2yWH8YzPVEbN34KpCkGiD-W9fKOuSdNck23efQ_qbWLhT3EFi2LCDhoS9HAt7YeYllZX-ai19VeL-kHt1Qt88y0ch0OVdeDWeTKqT2rAr6O7wVdVE_q_C5mh_yex18TDc-DLvy7Dw" style="width: 64px; height: 64px;" />
            <div class="d-flex flex-column justify-content-center">
                <span class="fw-bold small">Midnight Amber</span>
                <span class="text-gold" style="font-size: 10px; text-transform: uppercase; letter-spacing: 0.1em;">Más Vendido</span>
            </div>
        </div>
    </div>
    <div class="mt-auto pt-4 border-top border-secondary">
        <div class="d-flex justify-content-between mb-4">
            <span class="text-uppercase small tracking-widest">Subtotal</span>
            <span class="fw-bold">$185.00</span>
        </div>
        <button class="btn btn-gold w-100 py-3 fw-bold">Pagar Ahora</button>
    </div>
</aside>