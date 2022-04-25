@extends('layouts.master')

{{--@section('title')--}}
{{--    Accueil--}}
{{--@endsection--}}

{{--@section('hero-bg')--}}
{{--    bg-primary--}}
{{--@endsection--}}

@section('hero-content')
    <div class="col-lg-4 col-sm-12">
        <div class="title-heading">
            <h1 class="heading text-white title-dark">Senkyèm Resansman Jeneral <br> Moun ak Kay</h1>
            <p class="para-desc text-white-50 pb-lg-0" style="padding-bottom: 70px">
                Rekritman an ap kontinye pou kèk komin pou konplete 16 000 jenn fi ak gason kom agen resansè.
            </p>
        </div>
    </div><!--end col-->
    <div class="col-lg-8 col-sm-12">
        <div class="shape-before">
            <video class="w-100 rounded" controls autoplay loop muted>
                <source src="assets/video/flash-carousel.mp4" type="video/mp4">
            </video>
            <img src="assets/images/shapes/shape1.png" class="img-fluid shape-img" alt="">
        </div>
    </div><!--end col-->
@endsection

@section('content')
    @include('layouts.section_avis')
    @include('layouts.section_projection')
    @include('layouts.section_cta')
    @include('layouts.section_document')
@endsection
