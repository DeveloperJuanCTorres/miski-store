<div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-4">

    @foreach($products as $product)
    <div class="col">
        <div class="product-card1">
            <div class="product-image-wrapper">
                <span class="badge-luxury">Nuevo</span>
                @php
                    $imagen = json_decode($product->images, true)[0] ?? 'default.jpg';
                @endphp
                <img alt="Perfume Luxury" src="{{ asset('storage/' . $imagen) }}" />
                <div class="quick-view-overlay">
                    <button 
                        class="btn btn-gold btnQuickView"
                        data-id="{{ $product->id }}"
                        data-bs-toggle="modal"
                        data-bs-target="#quickViewModal"

                        data-name="{{ $product->name }}"
                        data-price="{{ number_format($product->price, 2) }}"
                        data-priceoferta="{{ number_format($product->price_oferta ?? $product->price, 2) }}"
                        data-description="{{ strip_tags($product->description) }}"
                        data-category="{{ $product->taxonomy->name ?? 'Categoría' }}"
                        data-images='@json(json_decode($product->images, true))'>
                        Vista Rápida
                    </button>
                </div>
            </div>
            <div class="card-content">
                <p class="text-uppercase mb-1" style="font-size: 10px; color: var(--outline); letter-spacing: 0.2em;">{{ $product->taxonomy->name ?? 'Categoría' }}</p>
                <h3 class="font-display h5 mb-2">{{ $product->name }}</h3>
                <div class="d-flex align-items-center gap-2 text-gold mb-3" style="font-size: 12px;">
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <span style="color: var(--outline);">(124)</span>
                    <div class="ms-auto">
                        <i class="fa-regular fa-heart" style="color: var(--outline); cursor: pointer;"></i>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <span class="font-display h5 text-gold mb-0">S/. {{ number_format($product->price, 2) }}</span>
                    <button class="btn-cart-circle" data-id="{{ $product->id }}">
                        <i class="fa-solid fa-cart-plus"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    @endforeach

</div>

<!-- PAGINATION -->
@if($products->hasPages())

<div class="custom-pagination mt-5">

    {{ $products->links('vendor.pagination.custom') }}

</div>

@endif