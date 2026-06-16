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
                        <div class="thumbnail-wrapper" id="thumbnailContainer">
                            <!-- Thumbnails will be dynamically added here -->  
                        </div>

                    </div>
                </div>

                <!-- RIGHT: CONTENT -->
                <div class="col-lg-6">
                    <div class="luxury-content">

                        <!-- Brand -->
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <span class="product-brand" id="modalCategory">
                                Categoría
                            </span>

                            <!-- <div class="d-flex align-items-center gap-3 mb-4">
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
                            </div> -->

                            <!-- <button class="btn-wishlist">
                                <i class="fa-regular fa-heart"></i>
                            </button> -->
                        </div>

                        <!-- Title -->
                        <h2 class="product-title" id="modalTitle">
                            Perfume Imperial Noir
                        </h2>

                        <!-- Price -->
                        <div class="price-wrapper mb-4">
                            <span class="current-price" id="modalOfferPrice">
                                S/ 289.90
                            </span>

                            <span class="old-price" id="modalOldPrice">
                                S/ 349.90
                            </span>

                            <span class="discount-badge" id="modalDiscount">
                                -20%
                            </span>
                        </div>

                        <!-- Description -->
                        <p class="product-description" id="modalDescription">
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
                                <span>Envíos rápidos a todo Lima</span>
                            </div>

                        </div>

                        

                        <!-- Colors -->
                        <div class="color-section d-none" id="colorSection">

                            <span class="quantity-label mb-2 d-block">
                                Color
                            </span>

                            <div class="color-options" id="colorContainer">

                            </div>

                        </div>

                        <!-- Quantity -->
                        <div class="quantity-section">

                            <span class="quantity-label">
                                Cantidad
                            </span>

                            <div class="quantity-box">
                                <button type="button" id="qtyMinus">
                                    -
                                </button>
                                <input type="text" id="productQty" value="1">
                                <button type="button" id="qtyPlus">
                                    +
                                </button>
                            </div>

                        </div>

                        <!-- Buttons -->
                        <div class="action-buttons">

                            <button class="btn-luxury-primary w-100" id="btnAddToCart">
                                <i class="fa-solid fa-cart-shopping me-2"></i>
                                Agregar al carrito
                            </button>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>