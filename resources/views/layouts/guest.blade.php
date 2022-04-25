<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Favicon icon -->
        <title>{{config('app.name','RGPH').' | '}}</title>
        @include('layouts.meta_tag')

        <link href="{{asset('/assets/admin/icons/font-awesome/css/all.css')}}" rel="stylesheet">

        <!-- page css -->
        <link href="{{asset('/assets/admin/dist/css/pages/login-register-lock.css')}}" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="{{asset('assets/admin/dist/css/style.min.css')}}" rel="stylesheet">

    </head>

    <body>
        {{ $slot }}

        <script src="/assets/admin/node_modules/jquery/jquery-3.2.1.min.js"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="/assets/admin/node_modules/popper/popper.min.js"></script>
        <script src="/assets/admin/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
        <!--Custom JavaScript -->
        <script type="text/javascript">
            $(function() {
                $(".preloader").fadeOut();
            });
            $(function() {
                $('[data-toggle="tooltip"]').tooltip()
            });
            // ==============================================================
            // Login and Recover Password
            // ==============================================================
            $('#to-recover').on("click", function() {
                $("#loginform").slideUp();
                $("#recoverform").fadeIn();
            });
        </script>
    </body>
</html>
