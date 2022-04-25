<div>
    <!-- Navbar STart -->
    <header id="topnav" class="defaultscroll sticky" data-aos="fade-up" data-aos-duration="1000">
        <div class="container" >
            <ul class="buy-button list-inline mb-0 px-0">
                <li class="list-inline-item mb-0">
                    <div class="dropdown">
                        <button type="button" class="btn btn-link text-decoration-none dropdown-toggle p-0 px-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="uil uil-search text-muted"></i>
                        </button>
                        <div class="dropdown-menu dd-menu dropdown-menu-end bg-white shadow rounded border-0 mt-3 py-0 " style="width: 300px;">
                            <form>
                                <input type="text" id="text" name="name" class="form-control border bg-white" placeholder="Rechercher...">
                            </form>
                        </div>
                    </div>
                </li>
            </ul><!--end login button-->
            <a class="logo" href="{{route('pages.index')}}" >
                <img src="{{asset('assets/images/rgph/logo_rgph.png')}}" height="68" class="" alt="Logo RGPH">
                <h5 class="d-inline-flex"
                    style="
                                font-size: x-small!important;
                                margin: 10px!important;
                                position: absolute;
                                width: 200px;

                              "
                >
                    <p class="text-white-50">République D’Haïti <br><b style="color:white;">V<sup style="color:white;">e </sup>
                            Recensement Général de <br>la Population et de l'Habitat</b>
                    </p>
                </h5>
            </a>
            <!-- End Logo container-->
            <div class="menu-extras">
                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>

            <div id="navigation" class="">
                <!-- Navigation Menu-->
                <ul class="navigation-menu nav-right nav-light">
                    <li>
                        <a class="sub-menu-item" href="{{route('pages.index')}}">{{__('Accueil')}}</a></li>
                    <li>
                        <a class="sub-menu-item" href="{{route('pages.a-propos-v')}}" class="sub-menu-item">{{__('Justification du ')}}{{__('V')}}<sup class="text-lowercase" style="">{{__('e')}}</sup>{{__(' RGPH')}}</a>
                    </li>
                    <li>
                        <a class="sub-menu-item" href="{{route('pages.struc-org')}}">{{__('Structure Organisationnelle')}}</a>
                    </li>
                    <li>
                        <a class="sub-menu-item" href="{{route('pages.cadre-legal')}}">{{__('Cadre Légal')}}</a>
                    </li>
                    <li>
                        <a class="sub-menu-item pe-0" href="{{route('pages.contact')}}">{{__('Contact')}}</a>
                    </li>
                </ul><!--end navigation menu-->

            </div><!--end navigation-->
        </div><!--end container-->
    </header><!--end header-->
    <!-- Navbar End -->
</div>
