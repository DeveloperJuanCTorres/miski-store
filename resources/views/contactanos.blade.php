@extends('layouts.app')

@section('content')

<div style="margin-top: 80px;">
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-bg">
            <img alt="A luxury aesthetic background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBjfDmGtnyhM74DLFJZo0THikfTmqvjHEJY7L1bYS2m1VaCoeeCllfL5j367BP63zwKiBRqhBMcKr8PeNUSjrqJZwDp4izevnRp5NKW_1PNhcPCX3Cx89j40guFC70QMQ0s6P1clyWMTX4P-uSyQHZeuyz7rTtC-kdDexcWpCamdtGJ8lHBEfDBXRimsYGtVuGnuCAYRrGmt9vbXMCPIz13TKwpckt4Ta7Txag2LvqwuC1YItY8qhUtrnX8rXaHbwkru21WkfzDsQE" />
            <div class="hero-gradient"></div>
        </div>
        <div class="container-xxl px-4 px-lg-5 position-relative z-index-10">
            <h1 class="hero-title1">Estamos para <span class="text-primary-gold">Escucharte</span></h1>
            <p class="text-on-surface-variant fs-5 mw-100" style="max-width: 500px;">
                Descubre una experiencia de servicio tan refinada como nuestras fragancias. Contáctanos para asesoría personalizada.
            </p>
        </div>
    </section>
    <!-- Contact Content -->
    <section class="container-xxl px-4 px-lg-5 py-stack-lg">
        <div class="row g-4">
            <!-- Left Info Cards -->
            <div class="col-lg-4">
                <div class="d-flex flex-column gap-4">
                    <!-- Location -->
                    <div class="glass-panel">
                        <div class="icon-box"><i class="fas fa-location-dot"></i></div>
                        <h3 class="card-title-custom">Ubicación</h3>
                        <p class="text-on-surface-variant mb-0">
                            {{$company->direccion}}
                        </p>
                    </div>
                    <!-- Phone -->
                    <div class="glass-panel">
                        <div class="icon-box"><i class="fas fa-phone"></i></div>
                        <h3 class="card-title-custom">Teléfono</h3>
                        <p class="text-on-surface-variant mb-0">
                            Asesoría: {{$company->telefono}}<br />WhatsApp: {{$company->whatsapp}}
                        </p>
                    </div>
                    <!-- Hours -->
                    <div class="glass-panel">
                        <div class="icon-box"><i class="fas fa-clock"></i></div>
                        <h3 class="card-title-custom">Horarios</h3>
                        <p class="text-on-surface-variant mb-0">
                            24/7
                            <!-- Lun - Sáb: 10:00 - 20:00<br />Dom: 11:00 - 18:00 -->
                        </p>
                    </div>
                </div>
            </div>
            <!-- Right Form -->
            <div class="col-lg-8">
                <div class="glass-panel h-100">
                    <div class="mb-4">
                        <h2 class="font-display fw-semibold mb-2">Envíanos un mensaje</h2>
                        <p class="text-on-surface-variant">Nuestro equipo de concierge le responderá en menos de 24 horas.</p>
                    </div>
                    <form>
                        <div class="row g-4 mb-4">
                            <div class="col-md-6">
                                <label class="form-label-custom">Nombre Completo</label>
                                <input class="form-control form-control-custom" placeholder="Ej. Alexander Pierce" type="text" />
                            </div>
                            <div class="col-md-6">
                                <label class="form-label-custom">Correo Electrónico</label>
                                <input class="form-control form-control-custom" placeholder="alex@premium.com" type="email" />
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="form-label-custom">Asunto de Consulta</label>
                            <select class="form-select form-control-custom">
                                <option>Asesoría en Fragancias</option>
                                <option>Estado de Pedido</option>
                                <option>Preventas</option>
                                <option>Liquidaciones</option>
                                <option>Precio mayorista</option>
                                <option>Otros</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="form-label-custom">Mensaje</label>
                            <textarea class="form-control form-control-custom" placeholder="¿Cómo podemos elevar su experiencia hoy?" rows="5"></textarea>
                        </div>
                        <button class="btn btn-gold px-5" type="submit">ENVIAR MENSAJE</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Map Section -->
    <section class="container-xxl px-4 px-lg-5 py-stack-lg py-5">
        <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3898.3430433247413!2d-76.99031599999998!3d-12.188868900000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105b909b9857645%3A0x14a4b82a50f88804!2sMisk&#39;i%20Store!5e0!3m2!1ses!2spe!4v1779169355473!5m2!1ses!2spe" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <!-- <img alt="Stylized dark mode map" class="map-img" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBQUM781T3rZKPI-NSp8sKkCIflNAB7s9mx-dB0Cy_Lq7q2U8Fq5uc_UCEB6iisghyWCSInaNMXLSNFwdqo7rDnBk_AUZOqIG2dxTELJkTWIcZBI9_Z8LWCAQhdb3eh3QnW059hxWBmu2hSM5_DOEDkt5n1y5-EI_s7ygSSS6wxGyIJk0IrfOjs3X_-g9DxJLSckCQWjah9SjHvrfP1aDqkbZE9LFnUSQaLnaw5-KWNslZXLwBBOw9xIxyNnC7lLJOv8dt9Hp-43h8" />
            <div class="map-controls">
                <button class="map-btn"><i class="fas fa-plus"></i></button>
                <button class="map-btn"><i class="fas fa-minus"></i></button>
            </div>
            <div class="boutique-marker">
                <div class="marker-pulse"></div>
                <div class="marker-core"><i class="fas fa-star text-on-primary small"></i></div>
            </div> -->
        </div>
    </section>
</div>

@endsection


