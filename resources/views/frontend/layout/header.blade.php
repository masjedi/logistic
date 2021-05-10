<header class="site-header" id="header">
    <nav class="navbar navbar-expand-lg transparent-bg static-nav">
        <div class="container">
            <a class="navbar-brand" href="index-logistic.html">
                <img src="{{asset('userend/logistic/images/logo-transparent.png')}}" alt="logo" class="logo-default">
                <img src="{{asset('userend/logistic/images/logo.png')}}" alt="logo" class="logo-scrolled">
            </a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class=" position-relative">
                    @foreach($applications as $application)
                    <a href="q">{{$application->name}}</a>
                        <a class="nav-link " href="{{asset('path')}}/{{$application->cv}}" download="download"> Home </a>
                        @endforeach
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logistic/about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="javascript:void(0)"> Pages </a>
                       
                    </li>
                    <li class="nav-item dropdown position-relative">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> News </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="logistic/news-1.html">News List</a>
                            <a class="dropdown-item" href="logistic/news-2.html">News Sidebar</a>
                            <a class="dropdown-item" href="logistic/news-detail.html">News Details</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logistic/work.html">Works</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logistic/contact.html">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
        <!--side menu open button-->
        <a href="javascript:void(0)" class="d-inline-block sidemenu_btn" id="sidemenu_toggle">
            <span></span> <span></span> <span></span>
        </a>
    </nav>
    <!-- side menu -->
    <div class="side-menu opacity-0 bg-yellow">
        <div class="overlay"></div>
        <div class="inner-wrapper">
            <span class="btn-close" id="btn_sideNavClose"><i></i><i></i></span>
            <nav class="side-nav w-100">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link collapsePagesSideMenu" data-toggle="collapse" href="#sideNavPages1">
                            Home <i class="fas fa-chevron-down"></i>
                        </a>
                        <div id="sideNavPages1" class="collapse sideNavPages">
                            <ul class="navbar-nav mt-2">
                                <li class="nav-item">
                                    <a class="nav-link" href="index-logistic.html">Standard Layout</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="logistic/index-video.html">Video Background</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="logistic/index-light.html">Light Version</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logistic/about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link collapsePagesSideMenu" data-toggle="collapse" href="#sideNavPages2">
                            News <i class="fas fa-chevron-down"></i>
                        </a>
                        <div id="sideNavPages2" class="collapse sideNavPages">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" href="logistic/news-1.html">News List</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="logistic/news-2.html">News Sidebar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="logistic/news-detail.html">News Details</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logistic/work.html">Works</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link collapsePagesSideMenu" data-toggle="collapse" href="#sideNavPages">
                            Pages <i class="fas fa-chevron-down"></i>
                        </a>
                        <div id="sideNavPages" class="collapse sideNavPages">
                            <ul class="navbar-nav mt-2">
                                <li class="nav-item">
                                    <a class="nav-link" href="logistic/team.html">Our Team</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="logistic/services.html">Service</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="logistic/services-detail.html">Service Detail</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="logistic/testimonial.html">Testimonials</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="logistic/work.html">Work</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="logistic/work-detail.html">Work Detail</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="logistic/pricing.html">Pricing</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="logistic/404.html">Error 404</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="logistic/coming-soon.html">Coming Soon</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link collapsePagesSideMenu" data-toggle="collapse" href="#inner-2">
                                        Account <i class="fas fa-chevron-down"></i>
                                    </a>
                                    <div id="inner-2" class="collapse sideNavPages sideNavPagesInner">
                                        <ul class="navbar-nav mt-2">
                                            <li class="nav-item">
                                                <a class="nav-link" href="logistic/login.html">Login</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="logistic/register.html">Register</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="logistic/reset-password.html">Forget Password</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="logistic/faq.html">FAQ's</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="logistic/support.html">Support</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link collapsePagesSideMenu" data-toggle="collapse" href="#inner-1">
                                        Shop <i class="fas fa-chevron-down"></i>
                                    </a>
                                    <div id="inner-1" class="collapse sideNavPages sideNavPagesInner">
                                        <ul class="navbar-nav mt-2">
                                            <li class="nav-item">
                                                <a class="nav-link" href="logistic/shop.html">Shop Products</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="logistic/shop-detail.html">Shop Detail</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="logistic/shop-cart.html">Shop Cart</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logistic/contact.html">Contact</a>
                    </li>
                </ul>
            </nav>
            <div class="side-footer w-100">
                <ul class="social-icons-simple white top40">
                    <li><a href="javascript:void(0)" class="facebook"><i class="fab fa-facebook-f"></i> </a> </li>
                    <li><a href="javascript:void(0)" class="twitter"><i class="fab fa-twitter"></i> </a> </li>
                    <li><a href="javascript:void(0)" class="insta"><i class="fab fa-instagram"></i> </a> </li>
                </ul>
                <p class="whitecolor">&copy; 2019 MegaOne. Made With Love by ThemesIndustry</p>
            </div>
        </div>
    </div>
    <div id="close_side_menu" class="tooltip"></div>
    <!-- End side menu -->
</header>