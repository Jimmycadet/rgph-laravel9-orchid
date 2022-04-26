<div>
    @section('hero-content')
        <div class="col-lg-5 col-sm-12 pe-0 pe-lg-5">
            <div class="title-heading">
                <h4 class="heading text-white title-dark mb-0">Contactez-nous</h4>
                <p class="para-desc text-white-50" style="padding-bottom: 60px;">
                    Vous avez quelque chose dont vous voulez nous parler ? <br/>Eh bien, appelez-nous, envoyez-nous un e-mail
                    ou remplissez ce joli formulaire ci-contre.
                </p>
            </div>
        </div><!--end col-->
        <div class="col-lg-7 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
            <div class="shape-before card custom-form rounded border-0 shadow p-4">
                <livewire:contact-form />
                <img src="assets/images/shapes/shape1.png" class="img-fluid shape-img" alt="">
            </div><!--end custom-form-->
        </div><!--end col-->
    @endsection


        @include('layouts.section_contact')
</div>
