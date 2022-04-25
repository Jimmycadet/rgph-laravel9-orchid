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
    <link href="/assets/admin/dist/css/style.min.css" rel="stylesheet">
    @livewireStyles

</head>
<body>
<div>

    Page Test Base<br>

    <a href="{{route('page2-test')}}"> Page 2 Test
    </a>
    <div style="margin-top: 30px;">
        {{$slot}}
    </div>

</div>


<script src="/assets/admin/node_modules/jquery/jquery-3.2.1.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="/assets/admin/node_modules/popper/popper.min.js"></script>
<script src="/assets/admin/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="/assets/admin/dist/js/perfect-scrollbar.jquery.min.js"></script>
<!--Wave Effects -->
<script src="/assets/admin/dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="/assets/admin/dist/js/sidebarmenu.js"></script>
<!--stickey kit -->
<script src="/assets/admin/node_modules/sticky-kit-master/dist/sticky-kit.min.js"></script>
<script src="/assets/admin/node_modules/sparkline/jquery.sparkline.min.js"></script>
<!--Custom JavaScript -->
<script src="/assets/admin/dist/js/custom.min.js"></script>
@livewireScripts
</body>
