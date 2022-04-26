<!-- Start Contact -->
<section class="section">
    <div class="container mt-60">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-6">
                <div class="title-heading ms-lg-4 features">
                    <div class="features">
                        <h4 class="image position-relative d-inline-block mb-4 text-danger text-uppercase ">détails du contact</h4>
                        <p class="text-muted">
                            N'hésitez pas à nous contacter par téléphone ou par e-mail à tout moment
                            si vous avez des questions ou avez besoin d'aide !
                        </p>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

    <div class="container mb-5 ">
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-12">
                <div class="title-heading ms-lg-4 features">
                    <div class="d-flex contact-detail align-items-center mt-3">
                        <div class="icon" style="background-color: white!important;">
                            <i data-feather="mail" class="fea icon-m-md text-dark me-3"></i>
                        </div>
                        <div class="flex-1 content">
                            <h6 class="title fw-bold mb-0">Email</h6>
                            <a href="mailto:@include('layouts.contact-details.email')" class="text-primary">@include('layouts.contact-details.email')</a>
                        </div>
                    </div>

                    <div class="d-flex contact-detail align-items-center mt-3">
                        <div class="icon"  style="background-color: white!important;">
                            <i data-feather="phone" class="fea icon-m-md text-dark me-3"></i>
                        </div>
                        <div class="flex-1 content">
                            <h6 class="title fw-bold mb-0">Téléphone</h6>
                            <a href="tel:@include('layouts.contact-details.telephone')" class="text-primary">@include('layouts.contact-details.telephone')</a>
                        </div>
                    </div>

                    <div class="d-flex contact-detail align-items-center mt-3">
                        <div class="icon" style="background-color: white!important;">
                            <i data-feather="map-pin" class="fea icon-m-md text-dark me-3"></i>
                        </div>
                        <div class="flex-1 content">
                            <h6 class="title fw-bold mb-0">Location</h6>
                            <a href="@include('layouts.contact-details.google-map')"
                               data-type="iframe"
                               class="video-play-icon text-primary lightbox">Voir sur la carte Google
                            </a>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
            <div class="col-lg-4 col-md-12">
                <div class="title-heading ms-lg-4 features">
                    <div class="d-flex contact-detail align-items-center mt-3">
                        <div class="icon" style="background-color: white!important;">
                            <i data-feather="home" class="fea icon-m-md text-dark me-3"></i>
                        </div>
                        <div class="flex-1 content">
                            <h6 class="title fw-bold mb-0">Adresse</h6>
                            <span class="text-primary">@include('layouts.contact-details.adresse')</span>
                        </div>
                    </div>

                    <div class="d-flex contact-detail align-items-center mt-3">
                        <div class="icon"  style="background-color: white!important;">
                            <i data-feather="phone" class="fea icon-m-md text-dark me-3"></i>
                        </div>
                        <div class="flex-1 content">
                            <h6 class="title fw-bold mb-0">Téléphone</h6>
                            <a href="tel:@include('layouts.contact-details.telephone2')" class="text-primary">@include('layouts.contact-details.telephone2')</a>
                        </div>
                    </div>
                    <div class="d-flex contact-detail align-items-center mt-3">
                        <div class="icon"  style="background-color: white!important;">
                            <i data-feather="globe" class="fea icon-m-md text-dark me-3"></i>
                        </div>
                        <div class="flex-1 content">
                            <h6 class="title fw-bold mb-0">Web</h6>
                            <a href="@include('layouts.contact-details.web')" class="text-primary">@include('layouts.contact-details.web')</a>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

    <div class="container-fluid" style="margin-bottom: -100px!important;">
        <div class="row">
            <div class="col-12 p-0">
                <div class="card map border-0">
                    <div class="card-body p-0">
                        <iframe src="@include('layouts.contact-details.google-map-zoom')" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- End contact -->
