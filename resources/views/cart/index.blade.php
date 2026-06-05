@extends('layouts.app')
<style>    

    .font-display {
        font-family: var(--font-display);
    }

    .text-primary-gold {
        color: var(--primary) !important;
    }

    .text-on-surface-variant {
        color: var(--on-surface-variant) !important;
    }   

    /* Product Cards */
    .product-card-cart {
        background-color: var(--surface-container-low);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 0.75rem;
        transition: border-color 0.3s ease;
    }

    .product-card-cart:hover {
        border-color: rgba(242, 202, 80, 0.2);
    }

    .img-container {
        width: 100%;
        height: 250px;
        overflow: hidden;
        border-radius: 0.5rem;
        background-color: var(--surface-container-highest);
    }

    @media (min-width: 768px) {
        .img-container {
            width: 192px;
            height: 192px;
        }
    }

    .img-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .product-card-cart:hover img {
        transform: scale(1.05);
    }

    /* Quantity Controls */
    .qty-controls {
        background-color: var(--surface-container-highest);
        border-radius: 50px;
        padding: 8px 16px;
        border: 1px solid rgba(255, 255, 255, 0.05);
        display: inline-flex;
        align-items: center;
    }

    .qty-btn {
        background: none;
        border: none;
        color: var(--primary);
        transition: transform 0.2s ease;
    }

    .qty-btn:active {
        transform: scale(0.9);
    }

    /* Buttons */
    .btn-checkout {
        background-color: var(--primary);
        color: var(--on-primary);
        font-weight: 700;
        padding: 1rem;
        border-radius: 0.5rem;
        border: none;
        transition: all 0.3s ease;
        box-shadow: 0 0 20px rgba(212, 175, 55, 0.2);
    }

    .btn-checkout:hover {
        background-color: #ffe088;
        transform: translateY(-1px);
    }

    /* Footer */
    footer {
        background-color: #0e0e0e;
        border-top: 1px solid #4d4635;
    }

    .footer-link {
        color: var(--on-surface-variant);
        text-decoration: underline;
        transition: color 0.3s ease;
    }

    .footer-link:hover {
        color: var(--primary);
    }

    .newsletter-input {
        background-color: #201f1f;
        border: 1px solid #99907c;
        color: var(--on-surface);
        border-radius: 0.5rem 0 0 0.5rem;
    }

    .newsletter-input:focus {
        background-color: #201f1f;
        border-color: var(--primary);
        color: var(--on-surface);
        box-shadow: none;
    }

    .newsletter-btn {
        background-color: var(--primary);
        color: var(--on-primary);
        border: none;
        border-radius: 0 0.5rem 0.5rem 0;
        padding: 0 1rem;
    }
    
</style>
@section('content')

<div class="container py-5 mt-5">
    <div class="row pt-5">
        <div class="col-12 mb-4">
            <h1 class="font-display text-primary-gold display-5 fw-bold mb-2">Tu Carrito de compras</h1>
            <p class="text-on-surface-variant fs-5">Artículos premium listos para el pago</p>
        </div>
    </div>
    <div class="row gy-4">
        <!-- Cart Items List -->
        <div class="col-lg-8">
            <div class="d-flex flex-column gap-4" id="cartPageContainer">
                @forelse($cartItems as $item)
                <div class="product-card-cart p-3 cart-item"
                    data-rowid="{{ $item->rowId }}">
                    <div class="d-flex flex-column flex-md-row gap-4">
                        <div class="img-container">
                            <img
                                src="{{ asset('storage/' . $item->options->image) }}"
                                alt="{{ $item->name }}"
                            />
                        </div>
                        <div class="flex-grow-1 d-flex flex-column justify-content-between py-2">
                            <div>
                                <div class="d-flex justify-content-between align-items-start">
                                    <h3 class="font-display h4 mb-0">
                                        {{ $item->name }}
                                    </h3>
                                    <span class="text-primary-gold h4 fw-bold mb-0 itemSubtotal" data-rowid="{{ $item->rowId }}">
                                        S/. {{ number_format($item->price * $item->qty, 2) }}
                                    </span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mt-4">
                                <div class="qty-controls">
                                    <button
                                        class="qty-btn btnDecreaseQty"
                                        data-rowid="{{ $item->rowId }}">

                                        <i class="fa-solid fa-minus"></i>

                                    </button>

                                    <span class="mx-3 fw-bold qty-text">
                                        {{ $item->qty }}
                                    </span>

                                    <button
                                        class="qty-btn btnIncreaseQty"
                                        data-rowid="{{ $item->rowId }}">

                                        <i class="fa-solid fa-plus"></i>

                                    </button>

                                </div>
                                <button
                                    class="btn btn-link text-on-surface-variant p-0 text-decoration-none small text-uppercase fw-semibold border-0 btnRemoveItem"
                                    data-rowid="{{ $item->rowId }}">

                                    <i class="fa-regular fa-trash-can me-1"></i>

                                    Eliminar

                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="text-center py-5">
                    <i class="fa-solid fa-cart-shopping fs-1 mb-3 text-secondary"></i>
                    <p class="text-on-surface-variant">
                        Tu carrito está vacío
                    </p>
                </div>
                @endforelse
            </div>
        </div>
        <!-- Summary Sidebar -->
        <div class="col-lg-4">
            <div class="glass-panel p-4 position-sticky"
                style="top: 100px;">

                <h2 class="h5 mb-4 fw-semibold">
                    Resumen de Compra
                </h2>

                <div class="d-flex flex-column gap-3 mb-4">
                    <div class="d-flex justify-content-between text-on-surface-variant">
                        <span>Subtotal</span>
                        <span id="cartSubtotalPage">
                            S/. {{ Cart::subtotal() }}
                        </span>
                    </div>

                    <!-- <hr class="my-2 border-secondary opacity-25" /> -->

                    

                    <hr class="my-2 border-secondary opacity-25" />

                    <div class="d-flex justify-content-between align-items-end">
                        <span class="h5 fw-bold text-uppercase mb-1">
                            Total
                        </span>

                        <div class="text-end">
                            <span class="d-block text-primary-gold h3 fw-bold mb-0"
                                id="cartTotalPage">
                                S/. {{ Cart::subtotal() }}
                            </span>
                        </div>
                    </div>

                </div>

                <a href="{{ route('cart.checkout') }}"
                    class="btn btn-gold w-full d-block w-100 mb-4">

                    Proceder al Checkout

                </a>

            </div>

        </div>
    </div>
</div>

@endsection

