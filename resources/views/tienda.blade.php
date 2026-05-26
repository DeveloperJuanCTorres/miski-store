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
                    <button id="btnResetFilters" class="btn btn-link text-decoration-none p-0 text-uppercase" style="font-size: 12px; color: var(--outline);">Reiniciar</button>
                </div>
                <!-- Category -->
                <div class="mb-5">
                    <h3 class="filter-title">Categoría</h3>

                    <div class="d-flex flex-column gap-3">
                        @foreach($categories as $category)

                        <div class="form-check">
                            <input 
                                class="form-check-input filter-category"
                                type="radio"
                                name="category"
                                value="{{ $category->id }}"
                                id="cat{{ $category->id }}"
                                {{ request('category') == $category->id ? 'checked' : '' }}
                            >
                            <label 
                                class="form-check-label text-variant"
                                for="cat{{ $category->id }}"
                            >
                                {{ $category->name }}
                            </label>
                        </div>
                        @endforeach
                    </div>
                </div>                
                <!-- Brands -->
                <div class="mb-5">
                    <h3 class="filter-title">Marcas</h3>

                    <div class="d-flex flex-column gap-3">
                        @foreach($brands as $brand)
                        <div class="form-check">
                            <input 
                                class="form-check-input filter-brand"
                                type="radio"
                                name="brand"
                                value="{{ $brand->id }}"
                                id="brand{{ $brand->id }}"
                            >
                            <label 
                                class="form-check-label text-variant"
                                for="brand{{ $brand->id }}"
                            >
                                {{ $brand->name }}
                            </label>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- Price Range -->
                <div class="mb-2">
                    <h3 class="filter-title">Rango de precio</h3>

                    <input 
                        class="form-range"
                        max="1000"
                        min="15"
                        value="1000"
                        id="priceRange"
                        type="range"
                    />

                    <div class="text-end mt-2">
                        <span id="priceValue">
                            S/. 1000
                        </span>
                    </div>

                    <!-- <div class="d-flex justify-content-between mt-2" style="font-size: 12px; color: var(--outline);">
                        <span>$50</span>
                        <span>$1000+</span>
                    </div> -->
                </div>
            </div>
        </aside>
        <!-- Product Grid -->
        <section class="col-lg-9">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <p class="text-variant mb-0"></p>
                <div class="d-flex align-items-center gap-2">
                    <span class="text-uppercase" style="font-size: 12px; color: var(--outline);">Ordenar por:</span>
                    <select id="sortProducts" class="form-select form-select-sm bg-transparent border-0 text-gold shadow-none fw-bold" style="width: auto; cursor: pointer;">
                        <option value="featured">Destacados</option>
                        <option value="recent">Más recientes</option>
                        <option value="price_asc">Precio: Menor a Mayor</option>
                        <option value="price_desc">Precio: Mayor a Menor</option>
                    </select>
                </div>
            </div>
            <div id="productsContainer">

                @include('partials.products-grid', ['products' => $products])

            </div>
        </section>
    </div>
</div>

@include('partials.moda-product')

<script>

    let categoryInputs;
    let brandInputs;
    let priceRange;
    let priceValue;
    let sortProducts;
    let container;

    // =========================
    // FILTER PRODUCTS
    // =========================
    function filterProducts(page = 1)
    {
        const category = document.querySelector('.filter-category:checked')?.value || '';

        const brand = document.querySelector('.filter-brand:checked')?.value || '';

        const price = priceRange.value;

        const sort = sortProducts.value;

        fetch(`/store/filter?page=${page}&category=${category}&brand=${brand}&price=${price}&sort=${sort}`)

        .then(response => response.text())

        .then(html => {

            container.innerHTML = html;

            window.scrollTo({
                top: container.offsetTop - 120,
                behavior: 'smooth'
            });

        });
    }

    document.addEventListener('DOMContentLoaded', function(){

        categoryInputs = document.querySelectorAll('.filter-category');

        brandInputs = document.querySelectorAll('.filter-brand');

        priceRange = document.getElementById('priceRange');

        priceValue = document.getElementById('priceValue');

        sortProducts = document.getElementById('sortProducts');

        container = document.getElementById('productsContainer');

        // =========================
        // CATEGORY
        // =========================
        categoryInputs.forEach(input => {

            input.addEventListener('change', () => {

                filterProducts();

            });

        });

        // =========================
        // BRAND
        // =========================
        brandInputs.forEach(input => {

            input.addEventListener('change', () => {

                filterProducts();

            });

        });

        // =========================
        // PRICE RANGE
        // =========================
        let priceTimer;

        priceRange.addEventListener('input', function(){

            priceValue.innerText = 'S/. ' + this.value;

            clearTimeout(priceTimer);

            priceTimer = setTimeout(() => {

                filterProducts();

            }, 500);

        });

        // =========================
        // SORT
        // =========================
        sortProducts.addEventListener('change', () => {

            filterProducts();

        });

        // =========================
        // RESET FILTERS
        // =========================
        const btnResetFilters = document.getElementById('btnResetFilters');

        btnResetFilters.addEventListener('click', function(){

            // CATEGORY
            document.querySelectorAll('.filter-category').forEach(el => {
                el.checked = false;
            });

            // BRAND
            document.querySelectorAll('.filter-brand').forEach(el => {
                el.checked = false;
            });

            // PRICE
            priceRange.value = priceRange.max;

            priceValue.innerText = 'S/. ' + priceRange.max;

            // SORT
            sortProducts.value = 'featured';

            // RELOAD
            filterProducts();

        });

        // AUTO FILTRAR SI VIENE UNA CATEGORÍA
        const selectedCategory = document.querySelector('.filter-category:checked');

        if(selectedCategory)
        {
            filterProducts();

            // LIMPIA ?category= DE LA URL
            window.history.replaceState(
                {},
                document.title,
                window.location.pathname
            );
        }

    });

    // =========================
    // PAGINATION AJAX
    // =========================
    document.addEventListener('click', function(e){

        const link = e.target.closest('.pagination a');

        if(link)
        {
            e.preventDefault();

            const url = link.getAttribute('href');

            const page = new URL(url).searchParams.get('page');

            filterProducts(page);
        }

    });

</script>


@endsection

