<div>

    @section('hero-content')
        <div class="col-lg-4 col-sm-12">
            <div class="title-heading">
                <h2 class="heading text-white title-dark">Senkyèm Resansman Jeneral <br> Moun ak Kay</h2>
                <p class="para-desc text-white-50 pb-lg-0">
                    Rekritman an ap kontinye pou kèk komin pou konplete 16 000 jenn fi ak gason kom agen resansè.
                </p>
                <div  class="" style="padding-bottom: 60px;">
                    <a href="http://rgph.ihsi.app.ayiti.digital/inscription/"
                       target="_blank"
                       class="btn btn-primary mt-0"><i class="uil uil-book-alt"></i> Formulaire d'inscription
                    </a>
                </div>
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



        @include('layouts.section_avis')
        @include('layouts.section_projection')
        @include('layouts.section_cta')
        @include('layouts.section_document')


</div>

