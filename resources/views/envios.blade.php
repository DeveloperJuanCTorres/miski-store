@extends('layouts.app')

@section('content')

<section class="container" style="padding-top: 120px; padding-bottom: 30px;">

    <div class="row justify-content-center">

        <div class="col-lg-10">

            <div class="privacy-card">

                <div class="text-center mb-5">

                    <i class="fa-solid fa-truck-fast privacy-icon"></i>

                    <h1 class="privacy-title mt-3">
                        {{ $envio->titulo}}
                    </h1>

                    <p class="privacy-subtitle">
                        Tu información es importante para nosotros y es tratada con absoluta confidencialidad.
                    </p>

                </div>

               {!! $envio->descripcion !!}

            </div>

        </div>

    </div>

</section>

<style>
    .privacy-card {

        background: #151515;

        border: 1px solid rgba(212, 175, 55, .25);

        border-radius: 24px;

        padding: 55px;

        box-shadow: 0 15px 40px rgba(0, 0, 0, .35);

    }

    .privacy-icon {

        font-size: 60px;

        color: #d4af37;

    }

    .privacy-title {

        color: white;

        font-weight: 700;

        font-size: 42px;

    }

    .privacy-subtitle {

        color: #bdbdbd;

        font-size: 17px;

    }

    .privacy-item {

        padding: 22px 0;

        border-bottom: 1px solid rgba(255, 255, 255, .08);

    }

    .privacy-item:last-child {

        border: none;

    }

    .privacy-item h4 {

        color: #d4af37;

        margin-bottom: 12px;

        font-weight: 600;

    }

    .privacy-item p {

        color: #d0d0d0;

        line-height: 1.9;

        margin: 0;

    }
</style>


@endsection