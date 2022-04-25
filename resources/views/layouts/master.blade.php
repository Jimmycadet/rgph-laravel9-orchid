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

        <!-- header Start-->
        <livewire:menu-header-component />
        <!-- header End-->

        <!-- hero Start-->
        <livewire:hero-no-slide-component :heroBgColor="$heroBgColor" />
        <!-- hero End-->

        <!-- content Start-->

        {{$slot}}
        <!-- content End-->

        <!-- footer Start-->
        <section>
            <!-- footer diagonal Start-->
            <livewire:footer-diagonal-component />
            <!--footer diagonal End-->

            <!-- Footer Start -->
            <livewire:footer-component />
            <!--Footer End-->

            <!-- Footer Copy Right Start -->
            <livewire:footer-copy-right-component />
            <!-- Footer Copy Right End -->

            <!-- Back to top -->
            <livewire:back-to-top-component />
            <!-- Back to top -->
        </section>
        <!-- footer End-->

        <!-- js-end Start-->
        @include('layouts.js-end')
        <!-- js-end End-->
        @livewireScripts
    </body>
</html>
