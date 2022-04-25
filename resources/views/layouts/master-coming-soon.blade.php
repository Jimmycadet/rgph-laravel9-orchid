<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>{{config('app.name','RGPH').' | '}}{!! $title !!}</title>
@include('layouts.meta_tag')

<!-- css Start-->
@include('layouts.css')
<!-- css End-->

    <!-- js-start Start-->
@include('layouts.js-start')
<!-- js-start End-->

    @livewireStyles
</head>

<body>
<!-- Loader Start-->
<livewire:preloader-component />
<!-- Loader End-->

<div class="back-to-home rounded d-none d-sm-block">
    <a href="{{route('pages.index')}}" class="btn btn-icon btn btn-icon btn-primary"><i data-feather="home" class="icons"></i></a>
</div>
@isset($dateLimite)
    <div id="variableFromLaravel" style="display: none;">{{ $dateLimite }}</div>
@endisset
<!-- COMING SOON PAGE -->
<section class="bg-home d-flex align-items-center p-5" data-jarallax='{"speed": 0.5}' style="background-image: url({{asset('assets/images/rgph/citadelle.jpeg')}});">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12 text-center">
                <a href="javascript:void(0)" class="logo h5"><img src="{{asset('assets/images/rgph/logo_rgph.png')}}" height="150" class="" alt="Logo RGPH"></a>
                <div class="text-uppercase title-dark text-white mt-2 mb-4 coming-soon">Nous arrivons bientôt...</div>
                <p class="text-light mx-auto">Nous travaillons dur pour améliorer notre site Web, nous serons prêts à lancer bientôt.</p>
                <p class="text-light para-desc para-dark mx-auto">Sois prêt! Quelque chose de vraiment cool arrive!</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 text-center">
                <div id="countdown">
                    <ul class="count-down list-unstyled">
                        <li id="days" class="count-number list-inline-item m-2"></li>
                        <li id="hours" class="count-number list-inline-item m-2"></li>
                        <li id="mins" class="count-number list-inline-item m-2"></li>
                        <li id="secs" class="count-number list-inline-item m-2"></li>
                        <li id="end" class="h1"></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <a href="{{route('pages.index')}}" class="btn btn-primary mt-4"><i class="mdi mdi-backup-restore"></i>Allez à la page d'accueil !</a>
            </div>
        </div>
    </div> <!-- end container -->
</section><!--section end-->
<!-- COMING SOON PAGE -->
<!-- javascript -->
@include('layouts.js-end')

@livewireScripts
</body>
</html>

