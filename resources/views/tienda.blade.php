@extends('layouts.app')

@section('content')

<div class="container-xl px-4 px-md-5" style="padding-top: 130px; padding-bottom: 64px;">
    <!-- Store Header -->
    <div class="mb-5">
        <h1 class="font-display text-gold display-4 mb-2">Nuestra Colección</h1>
        <p class="text-variant lead max-w-2xl" style="max-width: 700px;">Una selección curada de las experiencias sensoriales más exquisitas del mundo, desde la perfumería francesa atemporal hasta el cuidado de la piel botánico de vanguardia.</p>
    </div>
    <div class="row g-4">
        <!-- Filters Sidebar -->
        <aside class="col-lg-3">
            <div class="sticky-sidebar glass-morphism rounded-4 p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h2 class="font-display h5 text-gold mb-0">Filtros</h2>
                    <button class="btn btn-link text-decoration-none p-0 text-uppercase" style="font-size: 12px; color: var(--outline);">Reiniciar</button>
                </div>
                <!-- Category -->
                <div class="mb-5">
                    <h3 class="filter-title">Categoría</h3>
                    <div class="d-flex flex-column gap-3">
                        <div class="form-check">
                            <input class="form-check-input" id="cat1" type="checkbox" />
                            <label class="form-check-label text-variant" for="cat1">Fragancias</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="cat2" type="checkbox" />
                            <label class="form-check-label text-variant" for="cat2">Cuidado de la Piel</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="cat3" type="checkbox" />
                            <label class="form-check-label text-variant" for="cat3">Baño y Cuerpo</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="cat4" type="checkbox" />
                            <label class="form-check-label text-variant" for="cat4">Aromas para el Hogar</label>
                        </div>
                    </div>
                </div>
                <!-- Price Range -->
                <div class="mb-5">
                    <h3 class="filter-title">Categoría</h3>
                    <input class="form-range" max="1000" min="50" type="range" />
                    <div class="d-flex justify-content-between mt-2" style="font-size: 12px; color: var(--outline);">
                        <span>$50</span>
                        <span>$1000+</span>
                    </div>
                </div>
                <!-- Brands -->
                <div class="mb-2">
                    <h3 class="filter-title">Categoría</h3>
                    <div class="d-flex flex-column gap-3">
                        <div class="form-check">
                            <input class="form-check-input" id="brand1" name="brand" type="radio" />
                            <label class="form-check-label text-variant" for="brand1">Fragancias</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="brand2" name="brand" type="radio" />
                            <label class="form-check-label text-variant" for="brand2">Cuidado de la Piel</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="brand3" name="brand" type="radio" />
                            <label class="form-check-label text-variant" for="brand3">Baño y Cuerpo</label>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <!-- Product Grid -->
        <section class="col-lg-9">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <p class="text-variant mb-0">Mostrando 24 productos</p>
                <div class="d-flex align-items-center gap-2">
                    <span class="text-uppercase" style="font-size: 12px; color: var(--outline);">Ordenar por:</span>
                    <select class="form-select form-select-sm bg-transparent border-0 text-gold shadow-none fw-bold" style="width: auto; cursor: pointer;">
                        <option>Destacados</option>
                        <option>Más recientes</option>
                        <option>Precio: Menor a Mayor</option>
                        <option>Precio: Mayor a Menor</option>
                    </select>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-4">
                <!-- Product Card 1 -->
                <div class="col">
                    <div class="product-card1">
                        <div class="product-image-wrapper">
                            <span class="badge-luxury">Más Vendido</span>
                            <img alt="Perfume Luxury" src="https://lh3.googleusercontent.com/aida-public/AB6AXuANqZ-aKtHHybubTZvgy10qmJbkANKsnnE9Ktm7FsErsiHDG2njBfZLs1zM0QbcPeB_XiPxQiXkHLWaxE0rNbgbnAyDlljjfZ0D4jJHd-mDDxq8nqH-4DFq6IWZObb-Ati1EeKpzxTNgsLmoMxZfqGTVROt_ryylt0tzyegRoIWLNhyz-cUmBbthFc9TtvEPjweABOriAtEIz_34u2ad-jP-fFH_nfzMsDMgxi7IJDUeSgjiHbRlvmNqQXEc-Xr4JrluR39c12-uy4" />
                            <div class="quick-view-overlay">
                                <button 
                                    class="btn btn-gold"
                                    data-bs-toggle="modal"
                                    data-bs-target="#quickViewModal"
                                >
                                    Vista Rápida
                                </button>
                            </div>
                        </div>
                        <div class="card-content">
                            <p class="text-uppercase mb-1" style="font-size: 10px; color: var(--outline); letter-spacing: 0.2em;">L'Essence de Vie</p>
                            <h3 class="font-display h5 mb-2">Categoría</h3>
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
                                <span class="font-display h5 text-gold mb-0">Más Vendido</span>
                                <button class="btn-cart-circle">
                                    <i class="fa-solid fa-cart-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product Card 2 -->
                <div class="col">
                    <div class="product-card1">
                        <div class="product-image-wrapper">
                            <img alt="Skincare Serum" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDsYtiD9UF8MRUrnkriVGTC0iATJGTD81v7RyBVT0Z6Qpr2H-vP3BlYupzgU0qFMjOwDjE_55TZ3qhslJscJ4Tl7ZQMhkGqe3-lT2uSevilf2orM6WOM3nz9GPZmp7ZyTJgVsmXxkXkqH7qdC0h44dTwUcE3awM28qICNuSxpmHkBJ1k81JJUoM41abWkihC4Er1lN1f9AqYm86mHfEwBiQhL8wQbbSHoVgchhafwUJr3PWX91esvD1NDdDcQq0JDeWUcS_t184rVE" />
                            <div class="quick-view-overlay">
                                <button 
                                    class="btn btn-gold"
                                    data-bs-toggle="modal"
                                    data-bs-target="#quickViewModal"
                                >
                                    Vista Rápida
                                </button>
                            </div>
                        </div>
                        <div class="card-content">
                            <p class="text-uppercase mb-1" style="font-size: 10px; color: var(--outline); letter-spacing: 0.2em;">Aurum Botanicals</p>
                            <h3 class="font-display h5 mb-2">Categoría</h3>
                            <div class="d-flex align-items-center gap-2 text-gold mb-3" style="font-size: 12px;">
                                <div class="stars">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <span style="color: var(--outline);">(89)</span>
                                <div class="ms-auto">
                                    <i class="fa-regular fa-heart" style="color: var(--outline); cursor: pointer;"></i>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="font-display h5 text-gold mb-0">Más Vendido</span>
                                <button class="btn-cart-circle">
                                    <i class="fa-solid fa-cart-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product Card 3 -->
                <div class="col">
                    <div class="product-card1">
                        <div class="product-image-wrapper">
                            <span class="badge-luxury badge-new">Nuevo</span>
                            <img alt="Luxury Candle" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAIAJZVOvW0r-ZYoCEUXe27h5PgjSjYv49DZJbf3ydgey_RCoHZZtxBEf3-WL0D-_Bxpq0W_UuBIx7ZjW2saLHWIy7QgsrnryU4P8gLb8dheOTTPi4f3qEV-_eejqimnXu2zq6Qf8KKcqdBzaip5ovbBE3Kzb8VFVumJ_Nj24Ba6zInawkAoW36si0kzGrwEeKI2moOboFWVDN1L8ctDWg4O1_1ASRgRND2vum2fS9MD5OZ4_dnq-sE8pIxDIrnQR2vyL64fSWN1XE" />
                            <div class="quick-view-overlay">
                                <button 
                                    class="btn btn-gold"
                                    data-bs-toggle="modal"
                                    data-bs-target="#quickViewModal"
                                >
                                    Vista Rápida
                                </button>
                            </div>
                        </div>
                        <div class="card-content">
                            <p class="text-uppercase mb-1" style="font-size: 10px; color: var(--outline); letter-spacing: 0.2em;">Velvet Night</p>
                            <h3 class="font-display h5 mb-2">Categoría</h3>
                            <div class="d-flex align-items-center gap-2 text-gold mb-3" style="font-size: 12px;">
                                <div class="stars">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                                <span style="color: var(--outline);">(42)</span>
                                <div class="ms-auto">
                                    <i class="fa-regular fa-heart" style="color: var(--outline); cursor: pointer;"></i>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="font-display h5 text-gold mb-0">Más Vendido</span>
                                <button class="btn-cart-circle">
                                    <i class="fa-solid fa-cart-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pagination -->
            <div class="mt-5 d-flex align-items-center justify-content-center gap-2">
                <a class="page-link-custom" href="#">
                    <i class="fa-solid fa-chevron-left"></i>
                </a>
                <div class="d-flex align-items-center">
                    <a class="page-link-custom active" href="#">1</a>
                    <a class="page-link-custom" href="#">2</a>
                    <a class="page-link-custom" href="#">3</a>
                    <span class="mx-2" style="color: var(--outline);">...</span>
                    <a class="page-link-custom" href="#">12</a>
                </div>
                <a class="page-link-custom" href="#">
                    <i class="fa-solid fa-chevron-right"></i>
                </a>
            </div>
        </section>
    </div>
</div>

<!-- QUICK VIEW MODAL -->
<div class="modal fade luxury-modal" id="quickViewModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content border-0 overflow-hidden">

            <!-- Close -->
            <button type="button" class="btn-close-custom" data-bs-dismiss="modal">
                <i class="fa-solid fa-xmark"></i>
            </button>

            <div class="row g-0">

                <!-- LEFT: IMAGES -->
                <div class="col-lg-6">
                    <div class="luxury-gallery h-100">

                        <!-- Main Image -->
                        <div class="main-image-wrapper">
                            <span class="badge-luxury">Más Vendido</span>

                            <img 
                                id="quickViewImage"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuANqZ-aKtHHybubTZvgy10qmJbkANKsnnE9Ktm7FsErsiHDG2njBfZLs1zM0QbcPeB_XiPxQiXkHLWaxE0rNbgbnAyDlljjfZ0D4jJHd-mDDxq8nqH-4DFq6IWZObb-Ati1EeKpzxTNgsLmoMxZfqGTVROt_ryylt0tzyegRoIWLNhyz-cUmBbthFc9TtvEPjweABOriAtEIz_34u2ad-jP-fFH_nfzMsDMgxi7IJDUeSgjiHbRlvmNqQXEc-Xr4JrluR39c12-uy4"
                                class="main-product-image"
                                alt="Producto"
                            >

                            <div class="image-overlay-gradient"></div>
                        </div>

                        <!-- Thumbnails -->
                        <div class="thumbnail-wrapper">
                            <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuANqZ-aKtHHybubTZvgy10qmJbkANKsnnE9Ktm7FsErsiHDG2njBfZLs1zM0QbcPeB_XiPxQiXkHLWaxE0rNbgbnAyDlljjfZ0D4jJHd-mDDxq8nqH-4DFq6IWZObb-Ati1EeKpzxTNgsLmoMxZfqGTVROt_ryylt0tzyegRoIWLNhyz-cUmBbthFc9TtvEPjweABOriAtEIz_34u2ad-jP-fFH_nfzMsDMgxi7IJDUeSgjiHbRlvmNqQXEc-Xr4JrluR39c12-uy4" class="thumb-image active">
                            
                            <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuDsYtiD9UF8MRUrnkriVGTC0iATJGTD81v7RyBVT0Z6Qpr2H-vP3BlYupzgU0qFMjOwDjE_55TZ3qhslJscJ4Tl7ZQMhkGqe3-lT2uSevilf2orM6WOM3nz9GPZmp7ZyTJgVsmXxkXkqH7qdC0h44dTwUcE3awM28qICNuSxpmHkBJ1k81JJUoM41abWkihC4Er1lN1f9AqYm86mHfEwBiQhL8wQbbSHoVgchhafwUJr3PWX91esvD1NDdDcQq0JDeWUcS_t184rVE" class="thumb-image">

                            <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuAIAJZVOvW0r-ZYoCEUXe27h5PgjSjYv49DZJbf3ydgey_RCoHZZtxBEf3-WL0D-_Bxpq0W_UuBIx7ZjW2saLHWIy7QgsrnryU4P8gLb8dheOTTPi4f3qEV-_eejqimnXu2zq6Qf8KKcqdBzaip5ovbBE3Kzb8VFVumJ_Nj24Ba6zInawkAoW36si0kzGrwEeKI2moOboFWVDN1L8ctDWg4O1_1ASRgRND2vum2fS9MD5OZ4_dnq-sE8pIxDIrnQR2vyL64fSWN1XE" class="thumb-image">
                        </div>

                    </div>
                </div>

                <!-- RIGHT: CONTENT -->
                <div class="col-lg-6">
                    <div class="luxury-content">

                        <!-- Brand -->
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <span class="product-brand">
                                Categoría
                            </span>

                            <!-- <button class="btn-wishlist">
                                <i class="fa-regular fa-heart"></i>
                            </button> -->
                        </div>

                        <!-- Title -->
                        <h2 class="product-title">
                            Perfume Imperial Noir
                        </h2>

                        <!-- Rating -->
                        <div class="d-flex align-items-center gap-3 mb-4">
                            <div class="stars text-gold">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>

                            <span class="reviews-count">
                                124 reseñas
                            </span>
                        </div>

                        <!-- Price -->
                        <div class="price-wrapper mb-4">
                            <span class="current-price">
                                S/ 289.90
                            </span>

                            <span class="old-price">
                                S/ 349.90
                            </span>

                            <span class="discount-badge">
                                -20%
                            </span>
                        </div>

                        <!-- Description -->
                        <p class="product-description">
                            Una fragancia sofisticada y envolvente con notas amaderadas, ámbar cálido y esencia floral premium. Diseñada para quienes buscan exclusividad y presencia inolvidable.
                        </p>

                        <!-- Features -->
                        <div class="product-features">

                            <div class="feature-item">
                                <i class="fa-solid fa-check"></i>
                                <span>Producto 100% original</span>
                            </div>

                            <div class="feature-item">
                                <i class="fa-solid fa-truck-fast"></i>
                                <span>Envíos rápidos a todo el país</span>
                            </div>

                            <div class="feature-item">
                                <i class="fa-solid fa-shield-heart"></i>
                                <span>Garantía de satisfacción</span>
                            </div>

                        </div>

                        <!-- Quantity -->
                        <div class="quantity-section">

                            <span class="quantity-label">
                                Cantidad
                            </span>

                            <div class="quantity-box">
                                <button>-</button>
                                <input type="text" value="1">
                                <button>+</button>
                            </div>

                        </div>

                        <!-- Buttons -->
                        <div class="action-buttons">

                            <button class="btn-luxury-primary w-100">
                                <i class="fa-solid fa-cart-shopping me-2"></i>
                                Agregar al carrito
                            </button>

                            <!-- <button class="btn-luxury-secondary">
                                Comprar ahora
                            </button> -->

                        </div>

                        <!-- Footer Info -->
                        <!-- <div class="product-meta">

                            <div>
                                <span>SKU:</span>
                                <strong>PRF-00921</strong>
                            </div>

                            <div>
                                <span>Categoría:</span>
                                <strong>Perfumes Premium</strong>
                            </div>

                        </div> -->

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection

