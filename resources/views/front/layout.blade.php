<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>АгроТех-К</title>
    <meta name="robots" content="index, follow" />
    <meta name="description" content="Tromic car accessories bootstrap 5 template is an awesome website template for any modern car accessories shop.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ Vite::asset('resources/images/favicon.ico') }}" />
    <!-- CSS
    ============================================ -->

    <!-- Vendor CSS (Contain Bootstrap, Icon Fonts) -->
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/vendor/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/vendor/Pe-icon-7-stroke.css') }}" />

    <!-- Plugin CSS (Global Plugins Files) -->
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/plugins/animate.min.css') }}">
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/plugins/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/plugins/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/plugins/nice-select.css') }}">
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/plugins/magnific-popup.min.css') }}" />
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/plugins/ion.rangeSlider.min.css') }}" />

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/style.css') }}">
</head>

<body>
    <div class="preloader-activate preloader-active open_tm_preloader">
        <div class="preloader-area-wrap">
            <div class="spinner d-flex justify-content-center align-items-center h-100">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>
    <div class="main-wrapper">

        <!-- Begin Main Header Area -->
        <header class="main-header-area">
            <div class="header-top border-bottom d-none d-lg-block">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <div class="header-top-left">
                                <ul class="dropdown-wrap text-matterhorn">
                                    <li class="dropdown">
                                        <button class="btn btn-link dropdown-toggle ht-btn" type="button" id="languageButton" data-bs-toggle="dropdown" aria-label="language" aria-expanded="false">
                                            Русский
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="languageButton">
                                            <li><a class="dropdown-item" href="#">Английский</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        Телефон:
                                        <a href="tel://+788006003525">8(800) 600-35-25</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-middle header-sticky py-6 py-lg-0">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="header-middle-wrap position-relative">

                                <a href="{{route('index')}}" class="header-logo">
                                    <img src="{{ Vite::asset('resources/images/logo/dark.png') }}" alt="Header Logo">
                                </a>

                                <div class="main-menu d-none d-lg-block">
                                    <nav class="main-nav">
                                        <ul>
                                            <li class="drop-holder">
                                                <a href="{{route('shop')}}">Техника
                                                    <i class="pe-7s-angle-down"></i>
                                                </a>
                                                <ul class="drop-menu">
                                                    <li>
                                                        <a href="{{route('shop')}}">Каталог</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Техника с наработкой</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Сервис</a>
                                            </li>
                                            <li>
                                                <a href="#">Запчасти</a>
                                            </li>
                                            <li>
                                                <a href="#">Точное земледелие</a>
                                            </li>
                                            <li>
                                                <a href="#">Акции</a>
                                            </li>
                                            <li class="drop-holder">
                                                <a href="#">О компании
                                                    <i class="pe-7s-angle-down"></i>
                                                </a>
                                                <ul class="drop-menu">
                                                    <li>
                                                        <a href="#">О нас</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Контакты</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Вакансии</a>
                                                    </li>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="header-right">
                                    <ul>
                                        <li class="mobile-menu_wrap d-block d-lg-none">
                                            <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn pl-0">
                                                <i class="pe-7s-menu"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu_wrapper" id="mobileMenu">
                <div class="tromic-offcanvas-body">
                    <div class="inner-body">
                        <div class="tromic-offcanvas-top">
                            <a href="#" class="button-close"><i class="pe-7s-close"></i></a>
                        </div>
                        <div class="offcanvas-user-info text-center px-6 pb-5">
                            <ul class="dropdown-wrap justify-content-center text-silver">
                                <li class="dropdown dropup">
                                    <button class="btn btn-link dropdown-toggle ht-btn" type="button" id="languageButtonTwo" data-bs-toggle="dropdown" aria-expanded="false">
                                        Русский
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="languageButtonTwo">
                                        <li><a class="dropdown-item" href="#">Английский</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="offcanvas-menu_area">
                            <nav class="offcanvas-navigation">
                                <ul class="mobile-menu">
                                    <li class="menu-item-has-children">
                                        <a href="#">
                                            <span class="mm-text">Техника
                                        <i class="pe-7s-angle-down"></i>
                                    </span>
                                        </a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="#">
                                                    <span class="mm-text">Каталог</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="mm-text">Техника с наработкой</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="mm-text">Сервис</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="mm-text">Запчасти</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="mm-text">Точное земледелие</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="mm-text">Акции</span>
                                        </a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">
                                            <span class="mm-text">О компании
                                        <i class="pe-7s-angle-down"></i>
                                    </span>
                                        </a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="#">
                                                    <span class="mm-text">О нас</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="mm-text">Контакты</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="mm-text">Вакансии</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
                <div class="modal-dialog modal-fullscreen">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" data-tippy="Close" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="global-overlay"></div>
        </header>
        <!-- Main Header Area End Here -->

        @yield('content')


        <!-- Begin Footer Area -->
        <div class="footer-area">
            <div class="footer-top section-space-y-axis-100 text-lavender" data-bg-image="{{ Vite::asset('resources/images/background-img/1-4-1920x419.png') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="widget-item">
                                <div class="footer-logo pb-4">
                                    <a href="#">
                                        <img src="{{ Vite::asset('resources/images/logo/light.png') }}" alt="Logo">
                                    </a>
                                </div>
                                <p class="short-desc mb-2">Агро-Мастер работает на сельскохозяйственном рынке с 1991 года. За это время наша компания
                                    стала одним из крупнейших поставщиков сельскохозяйственной техники ведущих мировых
                                    производителей. Мы гарантируем профессиональное сервисное обслуживание и своевременную
                                    поставку оригинальных запасных частей.</p>
                                <div class="social-link pt-2">
                                    <ul>
                                        <li>
                                            <a href="#" data-tippy="VK" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                <i class="fa fa-vk"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" data-tippy="Telegram" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                <i class="fa fa-telegram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-4 pt-8 pt-lg-0">
                            <div class="widget-item">
                                <h3 class="widget-title mb-5">Быстрый переход</h3>
                                <ul class="widget-list-item">
                                    <li>
                                        <i class="fa fa-chevron-right"></i>
                                        <a href="{{route('shop')}}">Каталог</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-chevron-right"></i>
                                        <a href="#">Техника с наработкой</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-chevron-right"></i>
                                        <a href="#">Сервис</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-chevron-right"></i>
                                        <a href="#">Акции</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-chevron-right"></i>
                                        <a href="#">О нас</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-4 pt-8 pt-lg-0">
                            <div class="widget-item">
                                <h3 class="widget-title mb-5">О «АГРО-МАСТЕР»</h3>
                                <ul class="widget-list-item">
                                    <li>
                                        <i class="fa fa-chevron-right"></i>
                                        <a href="#">Контакты</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-chevron-right"></i>
                                        <a href="#">Вакансии</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 pt-8 pt-lg-0">
                            <div class="widget-item">
                                <h3 class="widget-title mb-5">Найти нас</h3>
                            </div>
                            <div class="widget-contact-info pb-2">
                                <ul>
                                    <li>
                                        г. Омск, Бульвар Архитекторов, 50
                                    </li>
                                    <li>
                                        <a href="mailto://omsk@agro-master.ru">omsk@agro-master.ru</a>
                                    </li>
                                    <li>
                                        <a href="tel://+78006003525">8(800)600-35-25</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom bg-midnight-express py-3">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="copyright">
                                <span class="copyright-text">&copy; ООО "АгроТех-К", <script>document.write(new Date().getFullYear())</script> <a href="privacy-policy.html" rel="noopener" target="_blank">Политика конфиденциальности</a> </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Area End Here -->

        <!-- Begin Scroll To Top -->
        <a class="scroll-to-top" href="">
            <i class="fa fa-chevron-up"></i>
        </a>
        <!-- Scroll To Top End Here -->
    </div>
    <!-- Global Vendor, plugins JS -->

    <!-- JS Files
    ============================================ -->
    <!-- Global Vendor, plugins JS -->

    <!-- Vendor JS -->
    <script src="{{ Vite::asset('resources/js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ Vite::asset('resources/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ Vite::asset('resources/js/vendor/jquery-migrate-3.3.2.min.js') }}"></script>
    <script src="{{ Vite::asset('resources/js/vendor/modernizr-3.11.2.min.js') }}"></script>

    <!--Plugins JS-->
    <script src="{{ Vite::asset('resources/js/plugins/wow.min.js') }}"></script>
    <script src="{{ Vite::asset('resources/js/plugins/jquery-ui.min.js') }}"></script>
    <script src="{{ Vite::asset('resources/js/plugins/swiper-bundle.min.js') }}"></script>
    <script src="{{ Vite::asset('resources/js/plugins/jquery.nice-select.js') }}"></script>
    <script src="{{ Vite::asset('resources/js/plugins/parallax.min.js') }}"></script>
    <script src="{{ Vite::asset('resources/js/plugins/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ Vite::asset('resources/js/plugins/tippy.min.js') }}"></script>
    <script src="{{ Vite::asset('resources/js/plugins/ion.rangeSlider.min.js') }}"></script>
    <script src="{{ Vite::asset('resources/js/plugins/mailchimp-ajax.js') }}"></script>

    <!--Main JS (Common Activation Codes)-->
    <script src="{{ Vite::asset('resources/js/main.js') }}"></script>
    @stack('scripts')
</body>

</html>
