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
            <!-- Category 1 -->
            <div class="col-md-3">
                <div class="category-card">
                    <img alt="Floral Noir" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDgBCkkEPoLQEpSCZD9-DVBsFNM1WMarxiDBTutoW1ytnR4gNQm5M7Wc26KOjs7-g5mn-PpOENybatBFbjtyY-TpZQ2zV4jyBAudrKZvkv7Kx2PaQBxnRgV0p3fHRo9K1vGPyFA857NFd8jXcOgS0_n7iXsINgra0eVDxbfmzAb6JWc-bZyBtneRTFBT8gmeCG9-DLqDOqv879_EAYUzmCSOqdmt78NXXso71lmZBoaTm9yDyvsr7Kcx2MU95Ez8FGF6KoG1RfoZZk" />
                    <div class="category-overlay"></div>
                    <div class="category-content glass-card">
                        <h3 class="font-display h4 text-primary-custom mb-1">Perfumes</h3>
                        <p class="text-on-surface-variant mb-0">Esencias botánicas intensas</p>
                    </div>
                </div>
            </div>
            <!-- Category 2 -->
            <div class="col-md-3">
                <div class="category-card">
                    <img alt="Oriental Amaderado" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDNXTPr9wfqBujtmbKI84oQoqo3yLaxto0uwBjmYmxn_TcdleoBGkcCTWty4Zpl22zLxM460wm5gRGK5Jif7KNlR7H3ECVRkn8eQNUwL0c_ocEmh1CZXeajnFHXxcB8cm5DgCkzKo1_P1jrbeG2D5T6Mnpg4txdwXAnzJySHmqikEaVVeJF3MUFkxAiveIUvXMSjiKK8wXXp9qSYCMOIPStuRX6DNZvGMNiXC3s6C6x-0snL6nvLeUmxJDL0hC1fv4CZ-l0rL6mzCM" />
                    <div class="category-overlay"></div>
                    <div class="category-content glass-card">
                        <h3 class="font-display h4 text-primary-custom mb-1">Colonias</h3>
                        <p class="text-on-surface-variant mb-0">Matices profundos y místicos</p>
                    </div>
                </div>
            </div>
            <!-- Category 3 -->
            <div class="col-md-3">
                <div class="category-card">
                    <img alt="Piel Puro" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAADQ44TfkmZz83m8SghrJRbNKKtII6lZs6OoP0E9yWX5bTf7xuDReQWk096YPj6E-d3osoOi2QKpa6CgEoCpg-Z-ElVn17C3QbVTFuDD0TK8AogfuZbtgWTs4u_lAOz6kOmLauHWqv8MpUoBgcxGMmSaaTXJWkiBM40TZKCyjOlQCB0iEhVw9i7c_D3HxLFcQI9fqZo40L1hRXPxipriBy5mrVG-Ark7pSNAdPAyQTiY2VWh5p98aLe1QBGdVRG2qIFPr0VcDZH2k" />
                    <div class="category-overlay"></div>
                    <div class="category-content glass-card">
                        <h3 class="font-display h4 text-primary-custom mb-1">Cuidado personal</h3>
                        <p class="text-on-surface-variant mb-0">Rituales de lujo molecular</p>
                    </div>
                </div>
            </div>
            <!-- Category 4 -->
            <div class="col-md-3">
                <div class="category-card">
                    <img alt="Oriental Amaderado" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDNXTPr9wfqBujtmbKI84oQoqo3yLaxto0uwBjmYmxn_TcdleoBGkcCTWty4Zpl22zLxM460wm5gRGK5Jif7KNlR7H3ECVRkn8eQNUwL0c_ocEmh1CZXeajnFHXxcB8cm5DgCkzKo1_P1jrbeG2D5T6Mnpg4txdwXAnzJySHmqikEaVVeJF3MUFkxAiveIUvXMSjiKK8wXXp9qSYCMOIPStuRX6DNZvGMNiXC3s6C6x-0snL6nvLeUmxJDL0hC1fv4CZ-l0rL6mzCM" />
                    <div class="category-overlay"></div>
                    <div class="category-content glass-card">
                        <h3 class="font-display h4 text-primary-custom mb-1">Maquillaje</h3>
                        <p class="text-on-surface-variant mb-0">Matices profundos y místicos</p>
                    </div>
                </div>
            </div>
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
            <!-- Product 1 -->
            <div class="col- 12 col-md-6 col-lg-3">
                <div class="product-card d-flex flex-column">
                    <div class="img-container mb-3">
                        <span class="badge-exclusive">Exclusivo</span>
                        <img alt="Oud Imperial" class="img-fluid" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDHiH9a9asbXWz7umBbJ7qxOnBZ9bNCP7TM34oWSmdVWatcm5YlpXync6LOfwSX69gu4msOpcsOaT00Tdl6Y6o0hr2a_fe6_VYAkC5ie1TZ4J2ztZwbWqPQXwyfTcKi_wQsc0S8Z1bhTazVrWeHXm_O0W3Bp9n9Up4uYnlC3I62epUxYsv_S7EAqXwSNCUGJ0e34SQTgPrqG-q_X6EYTjPJlWVayhpNKWP3fai5fSaknCxFv-f3MQSf1ulomfZuRQkzbOq12XpRRF4" />
                        <button class="quick-add-btn">AÑADIR RÁPIDO</button>
                    </div>
                    <h3 class="font-display h6 mb-1">Misk'i Oud Imperial</h3>
                    <p class="label-caps text-on-surface-variant mb-2" style="font-size: 11px;">Eau de Parfum • 100ml</p>
                    <p class="text-primary-custom fs-5 mb-0">$285.00</p>
                </div>
            </div>
            <!-- Product 2 -->
            <div class="col- 12 col-md- 6 col-lg-3">
                <div class="product-card d-flex flex-column">
                    <div class="img-container mb-3">
                        <img alt="L'Aurore" class="img-fluid" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC-_VZlKJyd5M8Y9EySEhZRzFdC1F_XoBJIMAyW6rWZVBu2n_3r-YHC-dVd_ILF91Ru2gs9XbjYESsAXXlT2fRPLp7TPj2qDxCz3yNnR0QYHjBYOqRbBYt3XlyakPjAlueogiLAye6hP_ZUL4wt89D8NDQs2KVjZ9FVjDJVonNR_rpdVfnYlDXTgNu78RVnqSJ9CnlafQrKz5z-b2oTDxgqS8cFDGjMAD2MTX6cZJHt9yFVOLBjxzIGfemEbVp2ELmQM-vI6kCinkI" />
                        <button class="quick-add-btn">AÑADIR RÁPIDO</button>
                    </div>
                    <h3 class="font-display h6 mb-1">L'Aurore Mystique</h3>
                    <p class="label-caps text-on-surface-variant mb-2" style="font-size: 11px;">Eau de Parfum • 75ml</p>
                    <p class="text-primary-custom fs-5 mb-0">$195.00</p>
                </div>
            </div>
            <!-- Product 3 -->
            <div class="col- 12 col-md- 6 col-lg-3">
                <div class="product-card d-flex flex-column">
                    <div class="img-container mb-3">
                        <span class="badge-exclusive">Exclusivo</span>
                        <img alt="Santal Absolu" class="img-fluid" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDjrUF9YyWQTT68-lq3AEOx6EQvo8y0uFuRqBR5kZw0mmXOqQEM8e3dovcpA_vpe-w0F7hcc0fctkr8PyByg9S8M8yWQsRQpt2nRi7_lptrFXagYvhX2KgkLkFSP25h48d044zmHXBRS3BkCWpJ_J2ZFNdOkxSbSoH_v5ekl-hPwz-HoMHhYrtHWBEcwZY9YzvtprWVrn-rk9qv_6O4FHoUNSyQBoL14RXOrJGfIZU5jAdv1EbjVF8tlc40EPSWvUdfWdkZ3nvUf1g" />
                        <button class="quick-add-btn">AÑADIR RÁPIDO</button>
                    </div>
                    <h3 class="font-display h6 mb-1">Santal Absolu</h3>
                    <p class="label-caps text-on-surface-variant mb-2" style="font-size: 11px;">Extrait de Parfum • 50ml</p>
                    <p class="text-primary-custom fs-5 mb-0">$320.00</p>
                </div>
            </div>
            <!-- Product 4 -->
            <div class="col- 12 col-md- 6 col-lg-3">
                <div class="product-card d-flex flex-column">
                    <div class="img-container mb-3">
                        <img alt="Seda Nocturna" class="img-fluid" src="https://lh3.googleusercontent.com/aida-public/AB6AXuApid3Kqwu7_UnABvpQEU9PqaFw1pwPgmOXRRGXpVPvg7iQuDSHxV_KqHyHrh9v4clc6gW8qvK9-qPaRLNCqDiUNNlfI6KcUupqPNmQ0qpgeFlpxMiWpLwmEJRenKXn3u6-MF8J-h0ca6-CPEO5BgHkzmaBSGvixHHygrEViK5rd6BLt9UrdR0A-W7_8XHb71BW2GvCXHq6yIjkSoz6iNEJad2AYyNt3Nk7-6GI3NyoCsAM-YYZK1-kaFVcs_YulB1ccXv2b4GHOyU" />
                        <button class="quick-add-btn">AÑADIR RÁPIDO</button>
                    </div>
                    <h3 class="font-display h6 mb-1">Seda Nocturna</h3>
                    <p class="label-caps text-on-surface-variant mb-2" style="font-size: 11px;">Eau de Parfum • 100ml</p>
                    <p class="text-primary-custom fs-5 mb-0">$210.00</p>
                </div>
            </div>

            <!-- Product 1 -->
            <div class="col- 12 col-md-6 col-lg-3">
                <div class="product-card d-flex flex-column">
                    <div class="img-container mb-3">
                        <span class="badge-exclusive">Exclusivo</span>
                        <img alt="Oud Imperial" class="img-fluid" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDHiH9a9asbXWz7umBbJ7qxOnBZ9bNCP7TM34oWSmdVWatcm5YlpXync6LOfwSX69gu4msOpcsOaT00Tdl6Y6o0hr2a_fe6_VYAkC5ie1TZ4J2ztZwbWqPQXwyfTcKi_wQsc0S8Z1bhTazVrWeHXm_O0W3Bp9n9Up4uYnlC3I62epUxYsv_S7EAqXwSNCUGJ0e34SQTgPrqG-q_X6EYTjPJlWVayhpNKWP3fai5fSaknCxFv-f3MQSf1ulomfZuRQkzbOq12XpRRF4" />
                        <button class="quick-add-btn">AÑADIR RÁPIDO</button>
                    </div>
                    <h3 class="font-display h6 mb-1">Misk'i Oud Imperial</h3>
                    <p class="label-caps text-on-surface-variant mb-2" style="font-size: 11px;">Eau de Parfum • 100ml</p>
                    <p class="text-primary-custom fs-5 mb-0">$285.00</p>
                </div>
            </div>
            <!-- Product 2 -->
            <div class="col- 12 col-md- 6 col-lg-3">
                <div class="product-card d-flex flex-column">
                    <div class="img-container mb-3">
                        <img alt="L'Aurore" class="img-fluid" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC-_VZlKJyd5M8Y9EySEhZRzFdC1F_XoBJIMAyW6rWZVBu2n_3r-YHC-dVd_ILF91Ru2gs9XbjYESsAXXlT2fRPLp7TPj2qDxCz3yNnR0QYHjBYOqRbBYt3XlyakPjAlueogiLAye6hP_ZUL4wt89D8NDQs2KVjZ9FVjDJVonNR_rpdVfnYlDXTgNu78RVnqSJ9CnlafQrKz5z-b2oTDxgqS8cFDGjMAD2MTX6cZJHt9yFVOLBjxzIGfemEbVp2ELmQM-vI6kCinkI" />
                        <button class="quick-add-btn">AÑADIR RÁPIDO</button>
                    </div>
                    <h3 class="font-display h6 mb-1">L'Aurore Mystique</h3>
                    <p class="label-caps text-on-surface-variant mb-2" style="font-size: 11px;">Eau de Parfum • 75ml</p>
                    <p class="text-primary-custom fs-5 mb-0">$195.00</p>
                </div>
            </div>
            <!-- Product 3 -->
            <div class="col- 12 col-md- 6 col-lg-3">
                <div class="product-card d-flex flex-column">
                    <div class="img-container mb-3">
                        <span class="badge-exclusive">Exclusivo</span>
                        <img alt="Santal Absolu" class="img-fluid" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDjrUF9YyWQTT68-lq3AEOx6EQvo8y0uFuRqBR5kZw0mmXOqQEM8e3dovcpA_vpe-w0F7hcc0fctkr8PyByg9S8M8yWQsRQpt2nRi7_lptrFXagYvhX2KgkLkFSP25h48d044zmHXBRS3BkCWpJ_J2ZFNdOkxSbSoH_v5ekl-hPwz-HoMHhYrtHWBEcwZY9YzvtprWVrn-rk9qv_6O4FHoUNSyQBoL14RXOrJGfIZU5jAdv1EbjVF8tlc40EPSWvUdfWdkZ3nvUf1g" />
                        <button class="quick-add-btn">AÑADIR RÁPIDO</button>
                    </div>
                    <h3 class="font-display h6 mb-1">Santal Absolu</h3>
                    <p class="label-caps text-on-surface-variant mb-2" style="font-size: 11px;">Extrait de Parfum • 50ml</p>
                    <p class="text-primary-custom fs-5 mb-0">$320.00</p>
                </div>
            </div>
            <!-- Product 4 -->
            <div class="col- 12 col-md- 6 col-lg-3">
                <div class="product-card d-flex flex-column">
                    <div class="img-container mb-3">
                        <img alt="Seda Nocturna" class="img-fluid" src="https://lh3.googleusercontent.com/aida-public/AB6AXuApid3Kqwu7_UnABvpQEU9PqaFw1pwPgmOXRRGXpVPvg7iQuDSHxV_KqHyHrh9v4clc6gW8qvK9-qPaRLNCqDiUNNlfI6KcUupqPNmQ0qpgeFlpxMiWpLwmEJRenKXn3u6-MF8J-h0ca6-CPEO5BgHkzmaBSGvixHHygrEViK5rd6BLt9UrdR0A-W7_8XHb71BW2GvCXHq6yIjkSoz6iNEJad2AYyNt3Nk7-6GI3NyoCsAM-YYZK1-kaFVcs_YulB1ccXv2b4GHOyU" />
                        <button class="quick-add-btn">AÑADIR RÁPIDO</button>
                    </div>
                    <h3 class="font-display h6 mb-1">Seda Nocturna</h3>
                    <p class="label-caps text-on-surface-variant mb-2" style="font-size: 11px;">Eau de Parfum • 100ml</p>
                    <p class="text-primary-custom fs-5 mb-0">$210.00</p>
                </div>
            </div>
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

@endsection

