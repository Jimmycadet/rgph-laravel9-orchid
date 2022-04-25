<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8" />

        <title>{{config('app.name','RGPH').' | '}}@yield('title')</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, minimal-ui">
        <meta http-equiv="imagetoolbar" content="false" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="distribution" content="global">
        <meta name="application-name" content="RGPH | Recensement Général de la Population et de l'Habitat" />
        <meta name="description" content="Site Web RGPH - Recensement Général de la Population et de l'Habitat" />
        <meta name="abstract" content="Site Web RGPH - Recensement Général de la Population et de l'Habitat" />
        <meta name="robots" content="index, follow" />
        <meta name="revisit-after" content="1 day" />
        <meta name="publisher" content="https://rgph-dev.herokuapp.com">

        <meta name="author" content="IHSI" />
        <meta name="email" content="" />
        <meta name="website" content="" />
        <meta name="Version" content="v3.0.0" />
        <!-- css -->
        @include('layouts.css')
        <!-- javascript -->
        @include('layouts.js-start')
    </head>

    <body>
        <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div>
        <!-- Loader -->

        <div class="back-to-home rounded d-none d-sm-block">
            <a href="{{route('pages.index')}}" class="btn btn-icon btn-soft-primary"><i data-feather="home" class="icons"></i></a>
        </div>

        <!-- ERROR PAGE -->
        <section class="bg-home d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-12 text-center">
                        <img src="@yield('code-image')" class="img-fluid" alt="">
                        <div class="text-uppercase mt-4 display-3">Oh ! no</div>
                        <div class="text-capitalize text-dark mb-4 error-page">@yield('title')</div>
                        <p class="text-muted para-desc mx-auto">@yield('message')</p>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    <div class="col-md-12 text-center">
                        <a href="" class="btn btn-outline-primary mt-4">Go Back</a>
                        <a href="{{route('pages.index')}}" class="btn btn-primary mt-4 ms-2">Allez à la page d'accueil !</a>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- ERROR PAGE -->
        <!-- javascript -->
        @include('layouts.js-end')
    </body>
</html>
