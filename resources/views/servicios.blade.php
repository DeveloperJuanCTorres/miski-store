@extends('layouts.app')

@section('content')

<div style="padding-top: 128px; padding-bottom: 64px;">
    <!-- Hero Section -->
    <header class="container text-center mb-5 px-4 px-md-5">
        <h1 class="hero-title mb-3">Nuestros Servicios de Despacho</h1>
        <p class="text-variant fs-5 mx-auto" style="max-width: 672px;">Entregamos tus productos con seguridad, rapidez y la mejor atención para que disfrutes de tu compra sin preocupaciones.</p>
    </header>
    <!-- Services Bento Grid -->
    <section class="container px-4 px-md-5">
        <div class="row g-4">
            <!-- Main Featured Service -->
            <div class="col-lg-4">
                <div class="glass-card1 featured-card h-100">
                    <div class="featured-bg" style="background: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDsGTT4bLNZCWaNfxfDyKkjGmHADkL5xbwsuN7bW9VJm8C25GQ5A5FpoBlezGdDFrdTuo6lUsAB9cMukpoDpU65pc_T6TEjVnXMN__nT3cCZZDWWeHyUYj_xAjTe02bwwaLafgp8hsdAWS-im7FR9HIjh7q0MD1ms6UeYj4PiF8994_xsdOBVrz2cqSx_eLxroednvuvyp6zoPVEdOYDd9piw8IOTGRObx8AKBRQTR7Ohaw8wdh1XxAVAqAMIF8CFKQMe8jPrexv2c') center/cover no-repeat;"></div>
                    <div class="featured-overlay"></div>
                    <div class="featured-content">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <i class="fa-solid fa-truck-fast text-primary-custom"></i>
                            <!-- <span class="footer-label text-primary-custom m-0">Priority Logistics</span> -->
                        </div>
                        <h2 class="font-display h3 text-white mb-3">Envío a domicilio</h2>
                        <p class="text-variant mb-4" style="max-width: 448px;">Traslado seguro con costo adicional a tu domicilio de Lunes a Sábado</p>
                        <button class="btn btn-primary-custom"
                                data-bs-toggle="modal"
                                data-bs-target="#deliveryModal">
                            Más información
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="glass-card1 featured-card h-100">
                    <div class="featured-bg" style="background: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDsGTT4bLNZCWaNfxfDyKkjGmHADkL5xbwsuN7bW9VJm8C25GQ5A5FpoBlezGdDFrdTuo6lUsAB9cMukpoDpU65pc_T6TEjVnXMN__nT3cCZZDWWeHyUYj_xAjTe02bwwaLafgp8hsdAWS-im7FR9HIjh7q0MD1ms6UeYj4PiF8994_xsdOBVrz2cqSx_eLxroednvuvyp6zoPVEdOYDd9piw8IOTGRObx8AKBRQTR7Ohaw8wdh1XxAVAqAMIF8CFKQMe8jPrexv2c') center/cover no-repeat;"></div>
                    <div class="featured-overlay"></div>
                    <div class="featured-content">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <i class="fa-solid fa-location-dot text-primary-custom"></i>
                            <!-- <span class="footer-label text-primary-custom m-0">Priority Logistics</span> -->
                        </div>
                        <h2 class="font-display h3 text-white mb-3">Puntos de entrega gratuitos</h2>
                        <p class="text-variant mb-4" style="max-width: 448px;">Puntos de entrega gratuitos en el distrito de Chorrillos con previa programación de 24Hrs a excepción de domingos y feriados.</p>
                        <button class="btn btn-primary-custom"
                                data-bs-toggle="modal"
                                data-bs-target="#pickupModal">
                            Ver ubicaciones
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="glass-card1 featured-card h-100">
                    <div class="featured-bg" style="background: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDsGTT4bLNZCWaNfxfDyKkjGmHADkL5xbwsuN7bW9VJm8C25GQ5A5FpoBlezGdDFrdTuo6lUsAB9cMukpoDpU65pc_T6TEjVnXMN__nT3cCZZDWWeHyUYj_xAjTe02bwwaLafgp8hsdAWS-im7FR9HIjh7q0MD1ms6UeYj4PiF8994_xsdOBVrz2cqSx_eLxroednvuvyp6zoPVEdOYDd9piw8IOTGRObx8AKBRQTR7Ohaw8wdh1XxAVAqAMIF8CFKQMe8jPrexv2c') center/cover no-repeat;"></div>
                    <div class="featured-overlay"></div>
                    <div class="featured-content">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <i class="fa-solid fa-box-open text-primary-custom"></i>
                            <!-- <span class="footer-label text-primary-custom m-0">Priority Logistics</span> -->
                        </div>
                        <h2 class="font-display h3 text-white mb-3">Envíos por agencia</h2>
                        <p class="text-variant mb-4" style="max-width: 448px;">Envíos por agencia Shalom 2 veces por semana. Solo cancela tus productos y tu envio al recoger tu pedido en tu agencia.</p>
                        <button class="btn btn-primary-custom"
                                data-bs-toggle="modal"
                                data-bs-target="#agencyModal">
                            Horarios
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SHIPPING MAP -->
    <section class="container mt-5 px-4 px-md-5">

        <div class="shipping-map-card">

            <div class="row align-items-center g-4">

                <div class="col-lg-7">

                    <span class="shipping-badge">
                        Tarifario de Envíos
                    </span>

                    <h2 class="shipping-title mt-3">
                        Consulta el costo aproximado de envío
                        según tu ubicación
                    </h2>

                    <p class="text-variant mt-3">
                        Revisa el mapa interactivo de cobertura y
                        conoce el precio estimado del delivery
                        hacia tu distrito.
                    </p>

                    <div class="d-flex flex-wrap gap-3 mt-4">

                        <a href="https://www.google.com/maps/d/u/0/viewer?ll=-12.064272988112679%2C-76.93851562816852&z=11&mid=1MSKa5L5eddTQRCdDOOW7yIyBs9IHxTFs"
                        target="_blank"
                        class="btn btn-primary-custom px-5 py-3">

                            <i class="fa-solid fa-map-location-dot me-2"></i>
                            Ver mapa tarifario

                        </a>

                    </div>

                </div>

                <div class="col-lg-5">

                    <div class="shipping-preview">

                        <div class="preview-glow"></div>

                        <i class="fa-solid fa-route"></i>

                    </div>

                </div>

            </div>

        </div>

    </section>  

    <!-- CTA Section -->
    <section class="container mt-5 px-4 px-md-5 text-center">
        <div class="py-5 border-top border-white border-opacity-10">
            <h4 class="font-display h4 text-primary-custom mb-3 text-uppercase tracking-widest">¿Necesita asistencia especial?</h4>
            <p class="text-variant mb-4 fs-6">Nuestro equipo de soporte VIP está disponible las 24 horas para gestionar sus envíos internacionales.</p>
            <div class="d-flex flex-column flex-md-row justify-content-center gap-3">
                <button class="btn btn-primary-custom px-5 py-3">Contactar Soporte</button>
                <button class="btn btn-outline-custom px-5 py-3">Preguntas Frecuentes</button>
            </div>
        </div>
    </section>
</div>

<!-- DELIVERY MODAL -->
<div class="modal fade" id="deliveryModal" tabindex="-1">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content service-modal">

            <div class="modal-header border-0">
                <h3 class="modal-title text-white">
                    <i class="fa-solid fa-truck-fast me-2 text-primary-custom"></i>
                    Envío a domicilio
                </h3>

                <button type="button"
                        class="btn-close btn-close-white"
                        data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">

                <!-- <div class="service-banner mb-4">
                    <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?q=80&w=1600&auto=format&fit=crop"
                         class="img-fluid rounded-4"
                         alt="">
                </div> -->

                <div class="row g-4">

                    <div class="col-lg-7">

                        <h4 class="text-white mb-3">
                            Experiencia premium de entrega
                        </h4>

                        <p class="text-variant">
                            Tus perfumes son enviados con protección especial,
                            empaques reforzados y monitoreo constante para
                            asegurar que lleguen en perfectas condiciones.
                        </p>

                        <div class="service-features">

                            <div class="feature-item">
                                <i class="fa-solid fa-clock"></i>
                                <span>Agendar 1 día antes.</span>
                            </div>

                            <div class="feature-item">
                                <i class="fa-solid fa-location-dot"></i>
                                <span>Deliverys de lunes a Sábado.</span>
                            </div>

                            <div class="feature-item">
                                <i class="fa-solid fa-shield"></i>
                                <span>Costo variable según ubicación, peso y tamaño del pedido.</span>
                            </div>

                            <div class="feature-item">
                                <i class="fa-solid fa-box"></i>
                                <span>Recibe tu compra entre la 1 pm y 8 pm del día agendado.</span>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-5">

                        <div class="service-side-card">

                            <h5 class="text-white mb-4">
                                Beneficios
                            </h5>

                            <ul class="service-list">
                                <li>Atención personalizada</li>
                                <li>Courier certificado.</li>
                            </ul>

                            <a href="https://wa.me/{{$company->whatsapp}}"
                               target="_blank"
                               class="btn btn-primary-custom w-100 mt-4">
                                Solicitar envío
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>
</div>

<!-- PICKUP MODAL -->
<div class="modal fade" id="pickupModal" tabindex="-1">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content service-modal">

            <div class="modal-header border-0">
                <h3 class="modal-title text-white">
                    <i class="fa-solid fa-location-dot me-2 text-primary-custom"></i>
                    Puntos de entrega gratuitos
                </h3>

                <button type="button"
                        class="btn-close btn-close-white"
                        data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">

                <div class="row g-4">

                    <div class="col-lg-6">
                        <div class="location-card">
                            <h5 class="text-white">Tambo de la Curva (Altura puente peatonal)</h5>
                            <ul>
                                <li class="text-variant">
                                    3:00 pm | Mar - Jue - Sáb
                                </li>
                                <li class="text-variant">
                                    Máx. por cliente: 2 bolsas medianas
                                </li>
                                <li class="text-variant">
                                    Agendar 1 día antes de las 5:00 pm
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="location-card">
                            <h5 class="text-white">Estación Matelini (Costado del Aruma)</h5>
                            <ul>
                                <li class="text-variant">
                                    3:30 pm | Mar - Jue - Sáb
                                </li>
                                <li class="text-variant">
                                    Máx. por cliente: 2 bolsas medianas
                                </li>
                                <li class="text-variant">
                                    Agendar 1 día antes de las 5:00 pm
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="location-card">
                            <h5 class="text-white">Mercado Santa Rosa (Puerta principal)</h5>
                            <ul>
                                <li class="text-variant">
                                    4:00 pm | Mar - Jue - Sáb
                                </li>
                                <li class="text-variant">
                                    Máx. por cliente: 2 bolsas medianas
                                </li>
                                <li class="text-variant">
                                    Agendar 1 día antes de las 5:00 pm
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="location-card">
                            <h5 class="text-white">Mercado Los cedros puesto 89 (Fte. Plaza Vea)</h5>
                            <ul>
                                <li class="text-variant">
                                    10:00 am a 5:00 pm | Mar - Sáb
                                </li>
                                <li class="text-variant">
                                    Cantidad ilimitada de entrega
                                </li>
                                <li class="text-variant">
                                    Agendar 1 día antes de las 10:00 pm
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
</div>

<!-- AGENCY MODAL -->
<div class="modal fade" id="agencyModal" tabindex="-1">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content service-modal">

            <div class="modal-header border-0">
                <h3 class="modal-title text-white">
                    <i class="fa-solid fa-box-open me-2 text-primary-custom"></i>
                    Envíos por agencia
                </h3>

                <button type="button"
                        class="btn-close btn-close-white"
                        data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">

                <div class="timeline-service">
                    <ul>
                        <li>
                            <h5>Envíos Miercoles y Sabados.</h5>
                        </li>
                        <li>
                            <h5>Sin costo de embalaje ni traslado a la agencia.</h5>
                        </li>
                        <li>
                            <h5>Puedes acumular compras por hasta 60 días en nuestro almacén sin costo adicional.</h5>
                        </li>
                        <li>
                            <h5>Compras mínimas de S/. 50.00 para agendar tu envío</h5>
                        </li>
                        <li>
                            <h5>Programa tu envió un día antes hasta las 10 pm.</h5>
                        </li>
                    </ul>                    

                </div>

            </div>

        </div>
    </div>
</div>

@endsection

