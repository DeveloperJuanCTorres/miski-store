<!-- FOOTER PREMIUM -->
<footer class="footer position-relative overflow-hidden pt-5 pb-0">

    <!-- Glow decorativo -->
    <div class="footer-glow footer-glow-1"></div>
    <div class="footer-glow footer-glow-2"></div>

    <div class="container container-max px-4 px-md-5 position-relative">

        <!-- TOP -->
        <div class="row gy-5 pb-5 align-items-start">

            <!-- BRAND -->
            <div class="col-lg-4 pe-lg-5">

                <div class="d-flex align-items-center gap-3 mb-4">
                    <!-- <div class="footer-logo">
                        <i class="fa-solid fa-bag-shopping"></i>
                    </div> -->
                    <img src="{{asset ('storage/' . $company->logo)}}" alt="" width="100">

                    <div>
                        <h2 class="font-display text-gold mb-0">
                            {{ $company->nombre }}
                        </h2>

                        <!-- <span class="small text-uppercase text-gold tracking">
                            Luxury Fashion Store
                        </span> -->
                    </div>
                </div>

                <p class="text-footer mb-4">
                    {{$company->descripcion}}
                </p>

                <!-- SOCIAL -->
                <div class="d-flex gap-3">

                    <a href="{{$company->link_facebook}}" target="_blank" class="social-link">
                        <i class="fab fa-facebook-f"></i>
                    </a>

                    <a href="{{$company->link_instagram}}" target="_blank" class="social-link">
                        <i class="fab fa-instagram"></i>
                    </a>

                    <a href="{{$company->link_tiktok}}" target="_blank" class="social-link">
                        <i class="fab fa-tiktok"></i>
                    </a>

                    <a href="https://wa.me/{{ $company->whatsapp }}?text=Hola,%20quisiera%20más%20información"
                        target="_blank"
                        class="social-link">
                        <i class="fab fa-whatsapp"></i>
                    </a>

                </div>

            </div>

            <!-- LINKS -->
            <div class="col-6 col-md-3 col-lg-2">

                <h6 class="footer-title">TIENDA</h6>

                <ul class="footer-menu">

                    @foreach($categories as $category)

                    <li>
                        <a href="{{ route('tienda', ['category' => $category->id]) }}">
                            {{ $category->name }}
                        </a>
                    </li>

                    @endforeach

                </ul>

            </div>

            <!-- EXPERIENCE -->
            <div class="col-6 col-md-3 col-lg-2">

                <h6 class="footer-title">SOPORTE</h6>

                <ul class="footer-menu">

                    <li>
                        <a href="{{ route('contactanos') }}">Contáctanos</a>
                    </li>

                    <li>
                        <a href="{{route('politicas')}}">Política de Privacidad</a>
                    </li>

                    <li>
                        <a href="{{route('terminos')}}">Términos y Condiciones</a>
                    </li>

                    <li>
                        <a href="{{route('envios')}}">Envíos y Devoluciones</a>
                    </li>

                </ul>

            </div>

            <!-- NEWSLETTER -->
            <div class="col-lg-4">

                <h6 class="footer-title mb-3">
                    SUSCRÍBETE
                </h6>

                <p class="text-footer small mb-4">
                    Obtén acceso anticipado a lanzamientos, descuentos exclusivos
                    y novedades premium.
                </p>

                <div class="newsletter-wrapper mb-4">

                    <input
                        type="email"
                        class="newsletter-input"
                        placeholder="Ingresa tu correo electrónico">

                    <button class="newsletter-btn">
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>

                </div>

                <!-- LIBRO -->
                <a href="#" class="claim-book">

                    <div class="claim-book-icon">
                        <i class="fa-solid fa-book"></i>
                    </div>

                    <div>
                        <span class="d-block fw-semibold text-white">
                            Libro de Reclamaciones
                        </span>

                        <small class="text-footer">
                            Conforme al Código de Protección al Consumidor
                        </small>
                    </div>

                </a>

            </div>

        </div>

        <!-- BOTTOM -->
        <div class="footer-bottom">

            <div class="row gy-3 align-items-center">

                <div class="col-md-6 text-center text-md-start">

                    <span class="copyright">
                        © 2026 Misk'i Store — Todos los derechos reservados.
                    </span>

                </div>

                <div class="col-md-6">

                    <div class="footer-payments justify-content-center justify-content-md-end">

                        <span class="copyright">
                            Creado por — <a href="https://grupotyg.pe/" target="_blank" style="text-decoration: none;">
                                <span class="small text-uppercase text-gold tracking">
                                    grupo tyg ingeneiros
                                </span>
                            </a>
                        </span>

                    </div>

                </div>

            </div>

        </div>

    </div>

</footer>

<div class="fixed-tabs-Whats">
    <div class="aba-whatsphone">
        <div class="aba-whatsphone-icone">
            <a target="_blank" href="https://api.whatsapp.com/send?phone={{$company->whatsapp}}">Ahora sólo haz un click y<br><strong>Haz tu Pedido!</strong></a>
        </div>
    </div>
</div>

<style>
    .fixed-tabs-Whats {
        position: fixed;
        right: 0px;
        bottom: 60px;
        z-index: 100;
    }

    .aba-whatsphone {
        background: #1EBEA5;
        height: 60px;
        width: 70px;
        border-radius: 30px 0 0 30px;
        transition: 0.7s ease;
    }

    .aba-whatsphone:hover {
        width: 280px;
        transition: 0.7s ease;
    }

    .aba-whatsphone-icone {
        background-image: url(data:image/png;base64,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);
        background-repeat: no-repeat;
        width: 280px;
        background-size: 44px;
        background-position: 16px 7px;
        padding: 7px;
    }

    .aba-whatsphone-icone a {
        color: #ffffff;
        font-size: 14px;
        line-height: 20px;
        margin-left: 70px;
        text-decoration: none;
        height: 60px;
        font-family: sans-serif;
    }

    .aba-whatsphone-icone a strong {
        display: block;
        font-size: 21px;
        margin-left: 70px;
    }
</style>