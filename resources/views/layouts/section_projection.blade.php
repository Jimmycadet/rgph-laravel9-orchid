<!--Projection Start-->
<section class="section mb-0 pb-0" >
    <div class="container mt-0">
        <div class="row align-items-center mb-4 pb-2 features d-flex flex-row align-items-stretch">
            <div class="col-md-8">
                <div class="section-title text-center text-md-start mb-4 pb-2" data-aos="fade-up" data-aos-duration="1000">
                    <h4 class="image position-relative d-inline-block mb-4 mt-2 text-danger text-uppercase">Projection</h4>
                    <p class="text-muted mb-0 para-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Maecenas rhoncus finibus faucibus. Fusce lacus sapien, pretium blandit nulla non,
                        consectetur rutrum orci. Sed pharetra lacinia mi.</p>
                </div>

                <div class="key-feature">
                    <div class="table-responsive features bg-white shadow-md rounded-md section-title text-center text-md-start mt-4" data-aos="fade-up" data-aos-duration="1400">
                        <table class="table mb-0 table-center table-striped table-hover">
                            <caption class="section-title text-center text-md-start" style="caption-side: top;color: inherit !important; padding-top: 30px;padding-bottom: 15px">
                                <h6 class="text-center text-primary">{{Str::ucfirst('Projection de la population de 2018')}}</h6>
                            </caption>
                            <thead>
                            <tr>
                                <th scope="col" class="border-bottom" style="min-width: 100px;">{{Str::ucfirst('Unité Géographique')}}</th>
                                <th scope="col" class="border-bottom" style="width: 100px;">{{Str::ucfirst('Masculin')}}</th>
                                <th scope="col" class="border-bottom" style="width: 100px;">{{Str::ucfirst('Féminin')}}</th>
                                <th scope="col" class="border-bottom" style="width: 120px;">{{Str::ucfirst('Deux Sexes')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="text-muted">
                                <th>
                                    <div class="align-items-center">
                                        <p class="mb-0 d-inline fw-normal"> {{Str::ucfirst('République D’Haïti')}}</p>
                                    </div>
                                </th>
                                <td>{{'5 659 140' }}</td>
                                <td>{{'5 752 387' }}</td>
                                <td>{{'11 411 527' }}</td>
                            </tr>

                            <tr>
                                <td colspan="4">
                                    <div class="align-items-start">
                                        <p class="mb-0 d-inline fw-normal text-muted mt-0 pt-0" style="font-size: x-small!important;">{{'Source: IHSI/Direction des Statistiques Démographiques et Sociales (DSDS)'}}</p>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table><!--end table-->
                    </div>
                </div>
            </div><!--end col-->
            <!--Bar Chart Start -->
            <div class="col-md-4 mt-4 mt-md-5 jc-pt-chart">
                <div class="text-center text-md-end" data-aos="fade-up" data-aos-duration="1800">
                    <div class="card shadow-md rounded-md border-0 key-feature">
                        <div class="card-body">
                            <canvas class="line-chart-ex chartjs" data-height="283"></canvas>
                        </div>
                    </div>
                </div>
            </div> <!--Bar Chart end -->
        </div><!--end row-->
        <div class="col-md-12 mt-4 mb-4 mt-sm-0">
            <div class="text-center text-md-center" data-aos="fade-up" data-aos-duration="1400">
                <a href="javascript:void(0)" class="btn btn-soft-primary">Voir plus de projection <i data-feather="arrow-right" class="fea icon-sm"></i></a>
            </div>
        </div><!--end col-->
    </div><!--end container-->
</section>
<!--Projection End-->
