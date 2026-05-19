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
                            <span class="footer-label text-primary-custom m-0">Priority Logistics</span>
                        </div>
                        <h2 class="font-display h3 text-white mb-3">Envío a domicilio</h2>
                        <p class="text-variant mb-4" style="max-width: 448px;">Transporte climatizado y seguimiento en tiempo real para asegurar que cada fragancia llegue con su esencia intacta hasta su puerta.</p>
                        <button class="btn btn-primary-custom">Más información</button>
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
                            <span class="footer-label text-primary-custom m-0">Priority Logistics</span>
                        </div>
                        <h2 class="font-display h3 text-white mb-3">Puntos de entrega gratuitos</h2>
                        <p class="text-variant mb-4" style="max-width: 448px;">Transporte climatizado y seguimiento en tiempo real para asegurar que cada fragancia llegue con su esencia intacta hasta su puerta.</p>
                        <button class="btn btn-primary-custom">Ver ubicaciones</button>
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
                            <span class="footer-label text-primary-custom m-0">Priority Logistics</span>
                        </div>
                        <h2 class="font-display h3 text-white mb-3">Envíos por agencia</h2>
                        <p class="text-variant mb-4" style="max-width: 448px;">Transporte climatizado y seguimiento en tiempo real para asegurar que cada fragancia llegue con su esencia intacta hasta su puerta.</p>
                        <button class="btn btn-primary-custom">Horarios</button>
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

@endsection

