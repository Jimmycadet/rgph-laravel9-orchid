<div>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-12 mb-0 mb-md-0 pb-0 pb-md-2" data-aos="fade-up" data-aos-duration="1000">
                    <!-- Logo container-->
                    <a class="logo" href="/" style="position: relative">
                        <img src="{{asset('assets/images/rgph/logo_rgph.png')}}" height="68" class="" alt="Logo RGPH">
                        <h5 class="d-inline-flex text-light footer-head"
                            style="
                                font-size: x-small!important;
                                margin: 5px!important;
                                position: absolute;
                                width: 200px;
                              "
                        >RGPH <br>Recensement Général de la <br>Population et de l'Habitat</h5>
                    </a>
                    <!-- End Logo container-->
                    <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas rhoncus finibus faucibus.
                        Fusce lacus sapien, pretium blandit nulla non, consectetur rutrum orci. Sed pharetra lacinia mi.
                        Nam nisl odio, pharetra gravida tincidunt at, faucibus ut metus.
                        In tincidunt, nunc et scelerisque viverra, sem eros rhoncus elit, sit amet lacinia sapien mauris sit amet mauris.
                        Proin ac vehicula urna. Integer egestas leo eu sem commodo efficitur</p>
                    <ul class="list-unstyled social-icon foot-social-icon mb-0 mt-4">
                        <li class="list-inline-item"><a href="https://www.facebook.com/RGPH-Ve-Recensement-106495251751654/?ref=pages_you_manage" target="_blank" class="rounded"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                        {{--                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>--}}
                        {{--                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>--}}
                        <li class="list-inline-item"><a href="mailto:bootsnipp@gmail.com" target="_blank" class="rounded"><i data-feather="mail" class="fea icon-sm fea-social"></i></a></li>
                    </ul><!--end icon-->
                </div><!--end col-->

                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0"data-aos="fade-up" data-aos-duration="1400">
                    <h5 class="text-light footer-head">Menu</h5>
                    <ul class="list-unstyled footer-list mt-4">
                        <li><a href="{{route('pages.confidentialite')}}" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> {{__('Confidentialité')}}</a></li>
                        <li><a href="{{route('pages.recensement')}}" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> {{__('Sur quoi porte le recensement ?')}}</a></li>
                        <li><a href="{{route('pages.recensement-phases')}}" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> {{__('Les phases du recensement')}}</a></li>
                        <li><a href="{{route('pages.stat-econo-demo')}}" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> {{__('Statistiques économiques')}}</a></li>
                        <li><a href="{{route('pages.stat-econo-demo')}}" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> {{__('Statistiques démographiques')}}</a></li>

                    </ul>
                </div><!--end col-->

                <div class="col-lg-2 col-md-4 col-12 mt-4 mt-sm-4 mt-md-0 pt-2 pt-sm-0" data-aos="fade-up" data-aos-duration="1800">
                    <h5 class="text-light footer-head">Partenaires</h5>
                    <ul class="list-unstyled footer-list mt-4">
                        <li><a href="https://ihsi.ayiti.digital/" class="text-foot" target="_blank"><i class="uil uil-angle-right-b me-1"></i>IHSI</a></li>
                        <li><a href="http://www.cnigs.ht" class="text-foot" target="_blank"><i class="uil uil-angle-right-b me-1"></i>CNIGS</a></li>
                        <li><a href="https://www.unfpa.org/" class="text-foot" target="_blank"><i class="uil uil-angle-right-b me-1"></i>UNFPA</a></li>
                        <li><a href="https://www.unops.org/" class="text-foot" target="_blank"><i class="uil uil-angle-right-b me-1"></i>UNOPS</a></li>
{{--                        <li><a href="" class="text-foot" target="_blank"><i class="uil uil-angle-right-b me-1"></i>BM</a></li>--}}
                        <li><a href="http://www.bme.gouv.ht/" class="text-foot" target="_blank"><i class="uil uil-angle-right-b me-1"></i>BME</a></li>

                    </ul>
                </div><!--end col-->

                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-4 mt-md-0 pt-2 pt-sm-0" data-aos="fade-up" data-aos-duration="2200">
                    <h5 class="text-light footer-head">Contactez-nous</h5>
                    <form>
                        <div class="row mt-4">
                            <div class="col-lg-12">
                                <div class="foot-subscribe mb-3">
                                    <label class="form-label">Email <span class="text-danger">*</span></label>
                                    <div class="form-icon position-relative">
                                        <i data-feather="mail" class="fea icon-sm icons"></i>
                                        <input type="email" name="email" id="email" class="form-control ps-5 rounded" placeholder="Votre email : " required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="foot-subscribe mb-3">
                                    <label class="form-label">Message <span class="text-danger">*</span></label>
                                    <div class="form-icon position-relative">
                                        <i data-feather="message-circle" class="fea icon-sm icons"></i>
                                        <textarea name="comments" id="comments" rows="4" class="form-control ps-5" placeholder="Votre Message :" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="d-grid">
                                    <button type="submit" id="submit" name="send" class="btn btn-soft-primary">Envoyer</button>
                                </div>

                            </div>
                        </div>
                    </form>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </footer>
</div>
