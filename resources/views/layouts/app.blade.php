<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Miski Store') }}</title>

    <?php
    $version = '1993.4.9';
    ?>

    <link rel="apple-touch-icon" sizes="180x180" href="logos/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="logos/android-chrome-512x512.png">
    <link rel="icon" type="image/png" sizes="16x16" href="logos/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="logos/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="logos/favicon-16x16.png">
    <link rel="manifest" href="logos/site.webmanifest">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    <link href="{{ asset('css/styles.css') }}?v=<?php echo $version ?>" rel="stylesheet" />
    <link href="{{ asset('css/modal-product.css') }}?v=<?php echo $version ?>" rel="stylesheet" />


    <!-- Scripts -->
    <!-- vite(['resources/sass/app.scss', 'resources/js/app.js']) -->
</head>
<body>
    <div>
        @include('partials.navbar')
        <main>
            @yield('content')
        </main>
        @include('partials.footer')
    </div>


    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if(session('pedido_success'))

    <script>

    Swal.fire({
        icon: 'success',
        title: '¡Pedido enviado correctamente!',
        html: `
            <div style="font-size:14px; line-height:1.8;">
                Hemos recibido su pedido satisfactoriamente.<br><br>

                Se procederá a validar el pago.<br><br>

                Gracias por confiar en nosotros.
            </div>
        `,
        confirmButtonText: 'Continuar',
        confirmButtonColor: '#c8a96b',
        background: '#111827',
        color: '#ffffff',
        backdrop: `
            rgba(0,0,0,0.75)
        `
    });

    </script>

    @endif

    @if(session('error'))

    <script>

    Swal.fire({
        toast: true,
        position: 'top-end',
        icon: 'error',
        title: @json(session('error')),
        showConfirmButton: false,
        timer: 5000,
        timerProgressBar: true,
        background: '#7f1d1d',
        color: '#fff'
    });

    </script>

    @endif

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/general.js') }}"></script>
    <script src="{{asset('js/ubigeo.js')}}"></script>
    
</body>
</html>
