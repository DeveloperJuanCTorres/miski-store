@extends('layouts.app')

@section('content')

<div class="container py-5 mt-5">
    <div class="row g-4 mt-4">
        <!-- Left Column -->         
            <div class="col-lg-8">
                <form
                id="checkoutForm"
                action="{{ route('checkout.pedido') }}"
                enctype="multipart/form-data"
                method="POST"
                class="space-y-12"
            >
                @csrf
                    <!-- Customer Information -->
                    <section class="glass-panel p-4 mb-4">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h2 class="font-display h5 mb-0">Datos del Cliente</h2>
                            <span class="text-on-surface-variant small text-uppercase fw-semibold" style="font-size: 10px; letter-spacing: 0.1em;">Paso 1 de 3</span>
                        </div>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label-custom">Nombres</label>
                                <input id="nombres" name="nombres" class="form-control form-control-custom" placeholder="Julian" type="text" />
                            </div>
                            <div class="col-md-6">
                                <label class="form-label-custom">Apellido</label>
                                <input id="apellidos" name="apellidos" class="form-control form-control-custom" placeholder="Arango" type="text" />
                            </div>
                            <div class="col-12">
                                <label class="form-label-custom">Correo Electrónico</label>
                                <input id="email" name="email" class="form-control form-control-custom" placeholder="j.arango@ejemplo.com" type="email" />
                            </div>
                        </div>
                    </section>
                    <!-- Shipping Address -->
                    <section class="glass-panel p-4 mb-4">
                        <h2 class="font-display h5 mb-4">Dirección de Envío</h2>
                        <div class="row g-3">
                            <div class="col-12">
                                <label class="form-label-custom">Dirección</label>
                                <input id="direccion" name="direccion" class="form-control form-control-custom" placeholder="Calle Lujo 123, Suite 400" type="text" />
                            </div>
                            

                            <div class="col-md-4">
                                <label class="form-label-custom">Departamento</label>
                                <select id="departamento" class="form-select form-control-custom departamento" name="departamento">    
                                    <option data-id="" value="">-Seleccionar-</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label-custom">Provincia</label>
                                <select id="provincia" class="form-select form-control-custom provincia" name="provincia">
                                    <option data-id="" value="Chachapoyas">-Seleccionar-</option>                
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label-custom">Distrito</label>
                                <select id="distrito" class="form-select form-control-custom distrito" name="distrito">
                                    <option data-id="" value="">-Seleccionar-</option>
                                </select>
                            </div>
                        </div>
                    </section>
                    
                    <!-- Payment Methods -->
                    <section class="glass-panel p-4 mb-4">
                        <h2 class="font-display h5 mb-4">Método de Pago</h2>

                        <div class="d-flex flex-column gap-3">

                            <!-- Yape -->
                            <label class="payment-option active" id="yapeOption">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center gap-3">
                                        <input checked
                                            class="form-check-input mt-0 payment-radio"
                                            name="payment_method"
                                            type="radio"
                                            value="yape">

                                        <div class="payment-logo yape">
                                            Y
                                        </div>

                                        <div>
                                            <div class="fw-bold">Yape</div>
                                            <div class="text-on-surface-variant small">
                                                Escanea el QR y adjunta tu comprobante
                                            </div>
                                        </div>
                                    </div>

                                    <i class="fa-solid fa-circle-check text-primary-gold"></i>
                                </div>
                            </label>

                            <!-- QR YAPE -->
                            <div class="qr-container" id="yapeQR">
                                <img src="{{ asset('images/payments/yape-qr.png') }}"
                                    class="img-fluid qr-image"
                                    alt="QR Yape">

                                <div class="small text-center text-on-surface-variant mt-3">
                                    Número asociado: <strong>999 999 999</strong>
                                </div>
                            </div>

                            <!-- Plin -->
                            <label class="payment-option" id="plinOption">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center gap-3">
                                        <input class="form-check-input mt-0 payment-radio"
                                            name="payment_method"
                                            type="radio"
                                            value="plin">

                                        <div class="payment-logo plin">
                                            P
                                        </div>

                                        <div>
                                            <div class="fw-bold">Plin</div>
                                            <div class="text-on-surface-variant small">
                                                Pago inmediato desde bancos afiliados
                                            </div>
                                        </div>
                                    </div>

                                    <i class="fa-solid fa-mobile-screen-button text-primary-gold"></i>
                                </div>
                            </label>

                            <!-- QR PLIN -->
                            <div class="qr-container d-none" id="plinQR">
                                <img src="{{ asset('images/payments/plin-qr.png') }}"
                                    class="img-fluid qr-image"
                                    alt="QR Plin">

                                <div class="small text-center text-on-surface-variant mt-3">
                                    Número asociado: <strong>999 999 999</strong>
                                </div>
                            </div>

                        </div>

                        <!-- Upload Voucher -->
                        <div class="mt-4">

                            <label class="form-label-custom mb-3">
                                Adjuntar Comprobante
                            </label>

                            <div class="upload-area">

                                <input type="file"
                                    name="comprobante"
                                    id="paymentProof"
                                    accept="image/*,.pdf"
                                    class="upload-input">

                                <div class="upload-content">
                                    <i class="fa-solid fa-cloud-arrow-up upload-icon"></i>

                                    <div class="fw-bold mb-2">
                                        Subir comprobante de pago
                                    </div>

                                    <div class="text-on-surface-variant small">
                                        JPG, PNG, JPEG o PDF
                                    </div>
                                </div>

                            </div>

                            <div id="fileName"
                                class="small text-primary-gold mt-3 d-none"></div>

                        </div>
                    </section>

                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <button class="btn btn-link text-decoration-none text-primary-gold fw-semibold p-0" style="font-size: 12px; text-transform: uppercase; letter-spacing: 0.1em;">
                            <i class="fa-solid fa-arrow-left me-2"></i> Volver al Carrito
                        </button>
                        <button id="btnEnviarPedido" type="submit" class="btn btn-gold">Enviar pedido</button>
                    </div>
                </form>
            </div>
        
        <!-- Right Column -->
        <div class="col-lg-4">
            <div class="sticky-top" style="top: 100px;">
                <aside class="glass-panel p-4 mb-4">
                    <h2 class="font-display h5 pb-3 mb-4 border-bottom border-secondary border-opacity-10">Resumen del Pedido</h2>
                    <div class="custom-scrollbar overflow-y-auto mb-4" style="max-height: 400px;">
                        @forelse($cartItems as $item)
                        <div class="d-flex gap-3 mb-3">
                            <div style="width: 80px; height: 100px; background: var(--surface-container); border-radius: 4px; overflow: hidden;">
                                <img
                                    src="{{ asset('storage/' . $item->options->image) }}"
                                    alt="{{ $item->name }}" width="100%" height="100%" object-fit="cover" />
                            </div>
                            <div class="d-flex flex-column justify-content-between py-1">
                                <div>
                                    <div class="font-display fw-bold mb-1">{{ $item->name }}</div>
                                    <div class="text-on-surface-variant text-uppercase fw-semibold" style="font-size: 10px; letter-spacing: 0.05em;">Cantidad:  {{ $item->qty }} x S/. {{ number_format($item->price, 2) }}</div>
                                </div>
                                <div class="text-primary-gold fw-bold">S/. {{ number_format($item->price * $item->qty, 2) }}</div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="border-top border-secondary border-opacity-10 pt-3">
                        <!-- <div class="d-flex justify-content-between text-on-surface-variant small mb-2">
                            <span class="text-uppercase fw-semibold" style="letter-spacing: 0.1em;">Subtotal</span>
                            <span>€280.00</span>
                        </div>
                        <div class="d-flex justify-content-between text-on-surface-variant small mb-2">
                            <span class="text-uppercase fw-semibold" style="letter-spacing: 0.1em;">Envío</span>
                            <span>€15.00</span>
                        </div>
                        <div class="d-flex justify-content-between text-on-surface-variant small mb-3">
                            <span class="text-uppercase fw-semibold" style="letter-spacing: 0.1em;">IVA (21%)</span>
                            <span>€61.95</span>
                        </div> -->
                        <div class="d-flex justify-content-between pt-2">
                            <span class="font-display h5 mb-0">Total</span>
                            <span class="font-display h5 text-primary-gold mb-0">S/. {{ number_format(Cart::subtotal(), 2) }}</span>
                        </div>
                    </div>
                    <div class="d-flex gap-2 mt-4">
                        <input class="form-control form-control-custom flex-grow-1 py-2 text-sm" placeholder="Tarjeta de Regalo o Código" type="text" />
                        <button class="btn border border-primary text-primary-gold text-uppercase fw-bold" style="font-size: 10px; letter-spacing: 0.1em; padding: 0 16px;">Aplicar</button>
                    </div>
                </aside>
                <!-- Security -->
                <div class="glass-panel p-3 text-center">
                    <div class="d-flex justify-content-center gap-3 mb-3 opacity-50">
                        <i class="fa-solid fa-shield-halved text-primary-gold h4"></i>
                        <i class="fa-solid fa-circle-check text-primary-gold h4"></i>
                        <i class="fa-solid fa-award text-primary-gold h4"></i>
                    </div>
                    <div class="d-flex justify-content-center gap-4 mb-3 opacity-50">
                        <i class="fa-brands fa-cc-visa h3"></i>
                        <i class="fa-brands fa-cc-mastercard h3"></i>
                        <i class="fa-brands fa-cc-apple-pay h3"></i>
                    </div>
                    <p class="text-on-surface-variant text-uppercase fw-semibold mb-0" style="font-size: 9px; line-height: 1.6; letter-spacing: 0.1em;">
                        Pago seguro encriptado SSL de 256 bits. <br /> Todos los datos se procesan de acuerdo con las regulaciones de GDPR.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>

    document.addEventListener('DOMContentLoaded', function(){

        const radios = document.querySelectorAll('.payment-radio');

        const yapeQR = document.getElementById('yapeQR');
        const plinQR = document.getElementById('plinQR');

        const yapeOption = document.getElementById('yapeOption');
        const plinOption = document.getElementById('plinOption');

        radios.forEach(radio => {

            radio.addEventListener('change', function(){

                if(this.value === 'yape'){

                    yapeQR.classList.remove('d-none');
                    plinQR.classList.add('d-none');

                    yapeOption.classList.add('active');
                    plinOption.classList.remove('active');

                }else{

                    plinQR.classList.remove('d-none');
                    yapeQR.classList.add('d-none');

                    plinOption.classList.add('active');
                    yapeOption.classList.remove('active');
                }

            });

        });

        // Nombre archivo
        const inputFile = document.getElementById('paymentProof');
        const fileName = document.getElementById('fileName');

        inputFile.addEventListener('change', function(){

            if(this.files.length > 0){

                fileName.classList.remove('d-none');

                fileName.innerHTML =
                    `<i class="fa-solid fa-file-circle-check me-2"></i>
                    ${this.files[0].name}`;
            }

        });

    });

</script>

<script>

    document.addEventListener('DOMContentLoaded', function () {

        const form = document.getElementById('checkoutForm');
        const btn = document.getElementById('btnEnviarPedido');

        form.addEventListener('submit', function () {

            btn.disabled = true;

            btn.innerHTML = `
                <div class="flex items-center justify-center gap-3">
                    <svg class="animate-spin h-5 w-5 text-white"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24">

                        <circle
                            class="opacity-25"
                            cx="12"
                            cy="12"
                            r="10"
                            stroke="currentColor"
                            stroke-width="4">
                        </circle>

                        <path
                            class="opacity-75"
                            fill="currentColor"
                            d="M4 12a8 8 0 018-8v8z">
                        </path>

                    </svg>

                    Procesando...
                </div>
            `;

            Swal.fire({
                title: 'Procesando pedido',
                text: 'Espere un momento por favor...',
                allowOutsideClick: false,
                allowEscapeKey: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });

        });

    });
    
</script>
@endsection



<style>
    :root {
        --primary: #f2ca50;
        --on-primary: #3c2f00;
        --background: #131313;
        --surface: #131313;
        --surface-container: #201f1f;
        --surface-container-high: #2a2a2a;
        --surface-container-low: #1c1b1b;
        --on-surface: #e5e2e1;
        --on-surface-variant: #d0c5af;
        --outline-variant: #4d4635;
        --font-display: 'Playfair Display', serif;
        --font-body: 'Inter', sans-serif;
    }

    body {
        background-color: var(--background);
        color: var(--on-surface);
        font-family: var(--font-body);
        -webkit-font-smoothing: antialiased;
    }

    .font-display {
        font-family: var(--font-display);
    }

    .text-primary-gold {
        color: var(--primary) !important;
    }

    .bg-primary-gold {
        background-color: var(--primary) !important;
        color: var(--on-primary) !important;
    }

    .text-on-surface-variant {
        color: var(--on-surface-variant) !important;
    }

    .glass-panel {
        background: rgba(30, 30, 30, 0.7);
        backdrop-filter: blur(12px);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 0.5rem;
    }

    .header-nav {
        background: rgba(19, 19, 19, 0.8);
        backdrop-filter: blur(20px);
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        height: 80px;
    }

    .nav-link-custom {
        font-family: var(--font-body);
        font-size: 12px;
        text-transform: uppercase;
        letter-spacing: 0.1em;
        color: var(--on-surface);
        text-decoration: none;
        font-weight: 600;
        transition: color 0.3s;
    }

    .nav-link-custom:hover {
        color: var(--primary);
    }

    .search-bar {
        background: var(--surface-container-low);
        border: 1px solid var(--outline-variant);
        border-radius: 999px;
        padding: 6px 16px;
    }

    .search-bar input {
        background: transparent;
        border: none;
        color: var(--on-surface);
        font-size: 12px;
        outline: none;
    }

    .stepper-item {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .step-number {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        border: 1px solid var(--outline-variant);
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        font-size: 14px;
    }

    .step-active .step-number {
        border-color: var(--primary);
        color: var(--primary);
    }

    .step-label {
        font-size: 12px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.1em;
    }

    .form-label-custom {
        font-size: 10px;
        text-transform: uppercase;
        letter-spacing: 0.1em;
        color: var(--on-surface-variant);
        margin-bottom: 4px;
    }

    .form-control-custom {
        background-color: var(--surface-container-low);
        border: 1px solid var(--outline-variant);
        color: var(--on-surface);
        padding: 12px 16px;
        border-radius: 4px;
    }

    .form-control-custom:focus {
        background-color: var(--surface-container-low);
        border-color: var(--primary);
        color: var(--on-surface);
        box-shadow: none;
    }

    .delivery-option {
        border: 1px solid var(--outline-variant);
        background: var(--surface-container-low);
        padding: 16px;
        border-radius: 4px;
        cursor: pointer;
        transition: all 0.3s;
    }

    .delivery-option.active {
        border-color: var(--primary);
        background: var(--surface-container-high);
    }

    .btn-gold {
        background-color: var(--primary);
        color: var(--on-primary);
        border: none;
        padding: 16px 48px;
        font-size: 12px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.15em;
        border-radius: 8px;
        transition: all 0.3s;
        box-shadow: 0 4px 15px rgba(242, 202, 80, 0.2);
    }

    .btn-gold:hover {
        filter: brightness(1.1);
        transform: translateY(-1px);
    }

    .cart-badge {
        position: absolute;
        top: -5px;
        right: -5px;
        background: var(--primary);
        color: var(--on-primary);
        font-size: 10px;
        width: 16px;
        height: 16px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
    }

    .custom-scrollbar::-webkit-scrollbar {
        width: 4px;
    }

    .custom-scrollbar::-webkit-scrollbar-thumb {
        background: var(--outline-variant);
        border-radius: 10px;
    }

    footer {
        border-top: 1px solid var(--outline-variant);
        background: #0e0e0e;
    }

    .footer-link {
        color: var(--on-surface-variant);
        text-decoration: underline;
        font-size: 14px;
    }

    .footer-link:hover {
        color: var(--primary);
    }
</style>