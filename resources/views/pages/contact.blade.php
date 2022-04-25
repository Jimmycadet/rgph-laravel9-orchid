@extends('layouts.master')

{{--@section('title')--}}
{{--    Contact--}}
{{--@endsection--}}
{{--@section('hero-bg')--}}
{{--    bg-danger--}}
{{--@endsection--}}

@section('hero-content')
    <div class="col-lg-5 col-sm-12 pe-0 pe-lg-5">
        <div class="title-heading">
            <h4 class="heading text-white title-dark mb-0">Contactez-nous</h4>
            <p class="para-desc text-white-50">
                Vous avez quelque chose dont vous voulez nous parler ? <br/>Eh bien, appelez-nous, envoyez-nous un e-mail
                ou remplissez ce joli formulaire ci-dessous.
            </p>
        </div>
    </div><!--end col-->
    <div class="col-lg-7 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
        <div class="shape-before card custom-form rounded border-0 shadow p-4">
            <form method="post" name="myForm" onsubmit="return validateForm()">
                <p id="error-msg" class="mb-0"></p>
                <div id="simple-msg"></div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Nom <span class="text-danger">*</span></label>
                            <div class="form-icon position-relative">
                                <i data-feather="user" class="fea icon-sm icons"></i>
                                <input name="name" id="name" type="text" class="form-control ps-5" placeholder="Nom :">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Email <span class="text-danger">*</span></label>
                            <div class="form-icon position-relative">
                                <i data-feather="mail" class="fea icon-sm icons"></i>
                                <input name="email" id="email" type="email" class="form-control ps-5" placeholder="Email :">
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-12">
                        <div class="mb-3">
                            <label class="form-label">Sujet</label>
                            <div class="form-icon position-relative">
                                <i data-feather="book" class="fea icon-sm icons"></i>
                                <input name="subject" id="subject" class="form-control ps-5" placeholder="sujet :">
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-12">
                        <div class="mb-3">
                            <label class="form-label">Comments <span class="text-danger">*</span></label>
                            <div class="form-icon position-relative">
                                <i data-feather="message-circle" class="fea icon-sm icons clearfix"></i>
                                <textarea name="comments" id="comments" rows="4" class="form-control ps-5" placeholder="Message :"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="d-grid">
                            <button type="submit" id="submit" name="send" class="btn btn-primary">Envoyer message</button>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </form>
            <img src="assets/images/shapes/shape1.png" class="img-fluid shape-img" alt="">
        </div><!--end custom-form-->
    </div><!--end col-->
@endsection

@section('content')
    @include('layouts.section_contact')
@endsection
