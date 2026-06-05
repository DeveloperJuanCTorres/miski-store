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

                    <a href="{{$company->whatsapp}}" target="_blank" class="social-link">
                        <i class="fab fa-whatsapp"></i>
                    </a>

                </div>

            </div>

            <!-- LINKS -->
            <div class="col-6 col-md-3 col-lg-2">

                <h6 class="footer-title">TIENDA</h6>

                <ul class="footer-menu">

                    <li>
                        <a href="#">Nuevas Llegadas</a>
                    </li>

                    <li>
                        <a href="#">Colecciones</a>
                    </li>

                    <li>
                        <a href="#">Productos Exclusivos</a>
                    </li>

                    <li>
                        <a href="#">Promociones</a>
                    </li>

                </ul>

            </div>

            <!-- EXPERIENCE -->
            <div class="col-6 col-md-3 col-lg-2">

                <h6 class="footer-title">SOPORTE</h6>

                <ul class="footer-menu">

                    <li>
                        <a href="#">Contáctanos</a>
                    </li>

                    <li>
                        <a href="#">Política de Privacidad</a>
                    </li>

                    <li>
                        <a href="#">Términos y Condiciones</a>
                    </li>

                    <li>
                        <a href="#">Envíos y Devoluciones</a>
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

<style>

</style>