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
        <link href="{{asset('/assets/admin/dist/css/style.min.css')}}" rel="stylesheet">
        @livewireStyles

    </head>
    <body class="font-sans antialiased">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="loader">
                <div class="loader__figure"></div>
                <p class="loader__label">RGPH ADMIN</p>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
            <!-- ============================================================== -->
            <!-- Topbar header - style you can find in pages.scss -->
            <!-- ============================================================== -->
            <header class="topbar">
                <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-header">
                        <a class="navbar-brand" href="">
                            <!-- Logo icon --><b>
                                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                                <!-- Dark Logo icon -->
                                <img src="{{asset('assets/images/rgph/logo_rgph.png')}}" class="dark-logo" height="60" alt="Logo RGPH"/>
                                <!-- Light Logo icon -->
                                <img src="{{asset('assets/images/rgph/logo_rgph.png')}}" class="light-logo" height="60" alt="Logo RGPH"/>
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <span>
                        <h5 class="d-inline-flex"
                            style="
                                font-size: 9px!important;
                                margin: 8px!important;
                                position: absolute;
                                width: 200px;

                              ">
                            <p class="text-white-50">République D’Haïti
                                        <div></div>
                                <b style="color:white;margin-left: -80px;margin-top: -5px">V<sup style="color:white;">e </sup>
                                    Recensement Général de <div style="margin-top: -35px">la Population et de l'Habitat</div>
                                </b>
                            </p>
                        </h5>
                    </span>
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-collapse">
                        <!-- ============================================================== -->
                        <!-- toggle and nav items -->
                        <!-- ============================================================== -->
                        <ul class="navbar-nav mr-auto">
                            <!-- This is  -->
                            <li class="nav-item"> <a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                            <li class="nav-item"> <a class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark" href="javascript:void(0)"><i class="icon-menu"></i></a> </li>
                            <!-- ============================================================== -->
                            <!-- Search -->
                            <!-- ============================================================== -->
                            <li class="nav-item">
                                <form class="app-search d-none d-md-block d-lg-block">
                                    <input type="text" class="form-control" placeholder="Rechercher">
                                </form>
                            </li>
                        </ul>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <ul class="navbar-nav my-lg-0">
                            <!-- ============================================================== -->


                            <!-- ============================================================== -->
                            <li class="nav-item dropdown" style="margin-right: 10px">

                                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                    <a href="javascript:void(0)" class="nav-link dropdown-toggle waves-effect waves-dark" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name}}" height="50" class="img-circle my-0">
                                    </a>
                                @endif



                                <!-- User Profile-->
                                <div class="dropdown">
                                    <div class="dropdown-menu dropdown-menu-right animated flipInY">
                                        <!-- text-->
                                        <a href="{{ route('profile.show') }}" class="dropdown-item"><i class="ti-user"></i> My Profile</a>

                                        <div class="dropdown-divider"></div>
                                        <!-- text-->
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
                                        <!-- text-->
                                        <div class="dropdown-divider"></div>
                                        <!-- text-->
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <a class="dropdown-item" href="route('logout')"
                                               onclick="event.preventDefault();
                                                    this.closest('form').submit();"><i class="ti-arrow-left"></i>
                                                <!-- Authentication -->

                                                {{ __('Log Out') }}
                                            </a>
                                        </form>
                                        <!-- text-->
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- ============================================================== -->
            <!-- End Topbar header -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->
            <aside class="left-sidebar">
                <!-- Sidebar scroll-->
                <div class="scroll-sidebar">

                    <!-- Sidebar navigation-->
                    <nav class="sidebar-nav">
                        <ul id="sidebarnav">
                            <li class="nav-small-cap">--- PERSONAL</li>
                            <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Dashboard <span class="badge badge-pill badge-cyan ml-auto">4</span></span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="index.html">Minimal </a></li>
                                    <li><a href="index2.html">Analytical</a></li>
                                    <li><a href="index3.html">Demographical</a></li>
                                    <li><a href="index4.html">Modern</a></li>
                                </ul>
                            </li>
                            <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-grid2"></i><span class="hide-menu">Apps</span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="app-calendar.html">Calendar</a></li>
                                    <li><a href="app-chat.html">Chat app</a></li>
                                    <li><a href="app-ticket.html">Support Ticket</a></li>
                                    <li><a href="app-contact.html">Contact / Employee</a></li>
                                    <li><a href="app-contact2.html">Contact Grid</a></li>
                                    <li><a href="app-contact-detail.html">Contact Detail</a></li>
                                </ul>
                            </li>
                            <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-email"></i><span class="hide-menu">Inbox</span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="app-email.html">Mailbox</a></li>
                                    <li><a href="app-email-detail.html">Mailbox Detail</a></li>
                                    <li><a href="app-compose.html">Compose Mail</a></li>
                                </ul>
                            </li>
                            <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-palette"></i><span class="hide-menu">Ui Elements <span class="badge badge-pill badge-primary text-white ml-auto">25</span></span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="ui-cards.html">Cards</a></li>
                                    <li><a href="ui-user-card.html">User Cards</a></li>
                                    <li><a href="ui-buttons.html">Buttons</a></li>
                                    <li><a href="ui-modals.html">Modals</a></li>
                                    <li><a href="ui-tab.html">Tab</a></li>
                                    <li><a href="ui-tooltip-popover.html">Tooltip &amp; Popover</a></li>
                                    <li><a href="ui-tooltip-stylish.html">Tooltip stylish</a></li>
                                    <li><a href="ui-sweetalert.html">Sweet Alert</a></li>
                                    <li><a href="ui-notification.html">Notification</a></li>
                                    <li><a href="ui-progressbar.html">Progressbar</a></li>
                                    <li><a href="ui-nestable.html">Nestable</a></li>
                                    <li><a href="ui-range-slider.html">Range slider</a></li>
                                    <li><a href="ui-timeline.html">Timeline</a></li>
                                    <li><a href="ui-typography.html">Typography</a></li>
                                    <li><a href="ui-horizontal-timeline.html">Horizontal Timeline</a></li>
                                    <li><a href="ui-session-timeout.html">Session Timeout</a></li>
                                    <li><a href="ui-session-ideal-timeout.html">Session Ideal Timeout</a></li>
                                    <li><a href="ui-bootstrap.html">Bootstrap Ui</a></li>
                                    <li><a href="ui-breadcrumb.html">Breadcrumb</a></li>
                                    <li><a href="ui-bootstrap-switch.html">Bootstrap Switch</a></li>
                                    <li><a href="ui-list-media.html">List Media</a></li>
                                    <li><a href="ui-ribbons.html">Ribbons</a></li>
                                    <li><a href="ui-grid.html">Grid</a></li>
                                    <li><a href="ui-carousel.html">Carousel</a></li>
                                    <li><a href="ui-date-paginator.html">Date-paginator</a></li>
                                    <li><a href="ui-dragable-portlet.html">Dragable Portlet</a></li>
                                    <li><a href="ui-spinner.html">Spinner</a></li>
                                    <li><a href="ui-scrollspy.html">Scrollspy</a></li>
                                    <li><a href="ui-toasts.html">Toasts</a></li>
                                </ul>
                            </li>
                            <li class="nav-small-cap">--- FORMS, TABLE &amp; WIDGETS</li>
                            <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-media-right-alt"></i><span class="hide-menu">Forms</span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="form-basic.html">Basic Forms</a></li>
                                    <li><a href="form-layout.html">Form Layouts</a></li>
                                    <li><a href="form-addons.html">Form Addons</a></li>
                                    <li><a href="form-material.html">Form Material</a></li>
                                    <li><a href="form-float-input.html">Floating Lable</a></li>
                                    <li><a href="form-pickers.html">Form Pickers</a></li>
                                    <li><a href="form-upload.html">File Upload</a></li>
                                    <li><a href="form-mask.html">Form Mask</a></li>
                                    <li><a href="form-validation.html">Form Validation</a></li>
                                    <li><a href="form-bootstrap-validation.html">Form Bootstrap Validation</a></li>
                                    <li><a href="form-dropzone.html">File Dropzone</a></li>
                                    <li><a href="form-icheck.html">Icheck control</a></li>
                                    <li><a href="form-img-cropper.html">Image Cropper</a></li>
                                    <li><a href="form-bootstrapwysihtml5.html">HTML5 Editor</a></li>
                                    <li><a href="form-typehead.html">Form Typehead</a></li>
                                    <li><a href="form-wizard.html">Form Wizard</a></li>
                                    <li><a href="form-xeditable.html">Xeditable Editor</a></li>
                                    <li><a href="form-summernote.html">Summernote Editor</a></li>
                                    <li><a href="form-tinymce.html">Tinymce Editor</a></li>
                                </ul>
                            </li>
                            <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-accordion-merged"></i><span class="hide-menu">Tables</span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="table-basic.html">Basic Tables</a></li>
                                    <li><a href="table-layout.html">Table Layouts</a></li>
                                    <li><a href="table-data-table.html">Data Tables</a></li>
                                    <li><a href="table-footable.html">Footable</a></li>
                                    <li><a href="table-jsgrid.html">Js Grid Table</a></li>
                                    <li><a href="table-responsive.html">Responsive Table</a></li>
                                    <li><a href="table-bootstrap.html">Bootstrap Tables</a></li>
                                    <li><a href="table-editable-table.html">Editable Table</a></li>
                                </ul>
                            </li>
                            <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-settings"></i><span class="hide-menu">Widgets</span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="widget-data.html">Data Widgets</a></li>
                                    <li><a href="widget-apps.html">Apps Widgets</a></li>
                                    <li><a href="widget-charts.html">Charts Widgets</a></li>
                                </ul>
                            </li>
                            <li class="nav-small-cap">--- EXTRA COMPONENTS</li>
                            <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-gallery"></i><span class="hide-menu">Page Layout</span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="layout-single-column.html">1 Column</a></li>
                                    <li><a href="layout-fix-header.html">Fix header</a></li>
                                    <li><a href="layout-fix-sidebar.html">Fix sidebar</a></li>
                                    <li><a href="layout-fix-header-sidebar.html">Fixe header &amp; Sidebar</a></li>
                                    <li><a href="layout-boxed.html">Boxed Layout</a></li>
                                    <li><a href="layout-logo-center.html">Logo in Center</a></li>
                                </ul>
                            </li>
                            <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-files"></i><span class="hide-menu">Sample Pages <span class="badge badge-pill badge-info">25</span></span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="starter-kit.html">Starter Kit</a></li>
                                    <li><a href="pages-blank.html">Blank page</a></li>
                                    <li><a href="javascript:void(0)" class="has-arrow">Authentication <span class="badge badge-pill badge-success pull-right">6</span></a>
                                        <ul aria-expanded="false" class="collapse">
                                            <li><a href="pages-login.html">Login 1</a></li>
                                            <li><a href="pages-login-2.html">Login 2</a></li>
                                            <li><a href="pages-register.html">Register</a></li>
                                            <li><a href="pages-register2.html">Register 2</a></li>
                                            <li><a href="pages-register3.html">Register 3</a></li>
                                            <li><a href="pages-lockscreen.html">Lockscreen</a></li>
                                            <li><a href="pages-recover-password.html">Recover password</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="pages-profile.html">Profile page</a></li>
                                    <li><a href="pages-animation.html">Animation</a></li>
                                    <li><a href="pages-fix-innersidebar.html">Sticky Left sidebar</a></li>
                                    <li><a href="pages-fix-inner-right-sidebar.html">Sticky Right sidebar</a></li>
                                    <li><a href="pages-invoice.html">Invoice</a></li>
                                    <li><a href="pages-treeview.html">Treeview</a></li>
                                    <li><a href="pages-utility-classes.html">Helper Classes</a></li>
                                    <li><a href="pages-search-result.html">Search result</a></li>
                                    <li><a href="pages-scroll.html">Scrollbar</a></li>
                                    <li><a href="pages-pricing.html">Pricing</a></li>
                                    <li><a href="pages-lightbox-popup.html">Lighbox popup</a></li>
                                    <li><a href="pages-gallery.html">Gallery</a></li>
                                    <li><a href="pages-faq.html">Faqs</a></li>
                                    <li><a href="javascript:void(0)" class="has-arrow">Error Pages</a>
                                        <ul aria-expanded="false" class="collapse">
                                            <li><a href="pages-error-400.html">400</a></li>
                                            <li><a href="pages-error-403.html">403</a></li>
                                            <li><a href="pages-error-404.html">404</a></li>
                                            <li><a href="pages-error-500.html">500</a></li>
                                            <li><a href="pages-error-503.html">503</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-pie-chart"></i><span class="hide-menu">Charts</span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="chart-morris.html">Morris Chart</a></li>
                                    <li><a href="chart-chartist.html">Chartis Chart</a></li>
                                    <li><a href="chart-echart.html">Echarts</a></li>
                                    <li><a href="chart-flot.html">Flot Chart</a></li>
                                    <li><a href="chart-knob.html">Knob Chart</a></li>
                                    <li><a href="chart-chart-js.html">Chartjs</a></li>
                                    <li><a href="chart-sparkline.html">Sparkline Chart</a></li>
                                    <li><a href="chart-extra-chart.html">Extra chart</a></li>
                                    <li><a href="chart-peity.html">Peity Charts</a></li>
                                </ul>
                            </li>
                            <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-light-bulb"></i><span class="hide-menu">Icons</span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="icon-material.html">Material Icons</a></li>
                                    <li><a href="icon-fontawesome.html">Fontawesome Icons</a></li>
                                    <li><a href="icon-themify.html">Themify Icons</a></li>
                                    <li><a href="icon-weather.html">Weather Icons</a></li>
                                    <li><a href="icon-simple-lineicon.html">Simple Line icons</a></li>
                                    <li><a href="icon-flag.html">Flag Icons</a></li>
                                    <li><a href="icon-iconmind.html">Mind Icons</a></li>
                                </ul>
                            </li>
                            <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-location-pin"></i><span class="hide-menu">Maps</span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="map-google.html">Google Maps</a></li>
                                    <li><a href="map-vector.html">Vector Maps</a></li>
                                </ul>
                            </li>
                            <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-align-left"></i><span class="hide-menu">Multi level dd</span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="javascript:void(0)">item 1.1</a></li>
                                    <li><a href="javascript:void(0)">item 1.2</a></li>
                                    <li> <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">Menu 1.3</a>
                                        <ul aria-expanded="false" class="collapse">
                                            <li><a href="javascript:void(0)">item 1.3.1</a></li>
                                            <li><a href="javascript:void(0)">item 1.3.2</a></li>
                                            <li><a href="javascript:void(0)">item 1.3.3</a></li>
                                            <li><a href="javascript:void(0)">item 1.3.4</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="javascript:void(0)">item 1.4</a></li>
                                </ul>
                            </li>
                            <li class="nav-small-cap">--- SUPPORT</li>
                            <li> <a class="waves-effect waves-dark" href="../documentation/documentation.html" aria-expanded="false"><i class="far fa-circle text-danger"></i><span class="hide-menu">Documentation</span></a></li>
                            <li> <a class="waves-effect waves-dark" href="pages-login.html" aria-expanded="false"><i class="far fa-circle text-success"></i><span class="hide-menu">Log Out</span></a></li>
                            <li> <a class="waves-effect waves-dark" href="pages-faq.html" aria-expanded="false"><i class="far fa-circle text-info"></i><span class="hide-menu">FAQs</span></a></li>
                        </ul>
                    </nav>
                    <!-- End Sidebar navigation -->
                </div>
                <!-- End Sidebar scroll-->
            </aside>
            <!-- ============================================================== -->
            <!-- End Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Page wrapper  -->
            <!-- ============================================================== -->
            <div class="page-wrapper">
                <!-- ============================================================== -->
                <!-- Container fluid  -->
                <!-- ============================================================== -->
                <div class="container-fluid">
                    <!-- ============================================================== -->
                    <!-- Bread crumb and right sidebar toggle -->
                    <!-- ============================================================== -->
                    <div class="row page-titles">
                        <div class="col-md-5 align-self-center">
                            <h4 class="text-themecolor">Starter Page</h4>
                        </div>
                        <div class="col-md-7 align-self-center text-right">
                            <div class="d-flex justify-content-end align-items-center">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                    <li class="breadcrumb-item active">Starter Page</li>
                                </ol>
                                <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Bread crumb and right sidebar toggle -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Start Page Content -->
                    <!-- ============================================================== -->

                    <!-- content Start-->
                    {{$slot}}
                    <!-- content End-->

                    <!-- ============================================================== -->
                    <!-- End PAge Content -->
                    <!-- ============================================================== -->

                </div>
                <!-- ============================================================== -->
                <!-- End Container fluid  -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Page wrapper  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer">
                © 2021 RGPH
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- All Jquery -->
        <!-- ============================================================== -->
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
</html>
