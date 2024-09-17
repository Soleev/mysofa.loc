<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="mobile-web-app-capable" content="yes">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="favicon.png" rel="icon">
    <meta name="author" content="Shoxrux Soleyev">
    <meta name="description" content="@yield('description', 'MySofa - лучший выбор для вашего интерьера')">
    <title>@yield('title', 'MySofa Компания по производству мягкой мебели премиум сегмента по вашим индивидуальным проектам')</title>
    <!-- Canonical URL -->
    <link rel="canonical" href="@yield('canonical', url()->current())">
    <!-- Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700%7CDroid+Serif:400,700"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,900" rel="stylesheet">
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/plugins/exist-font/style.css">
    <!-- CSS Library-->
    <link rel="stylesheet" href="assets/plugins/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/plugins/owl-carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="assets/plugins/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="assets/plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css">
    <link rel="stylesheet" href="assets/plugins/slick/slick/slick.css">
    <link rel="stylesheet" href="assets/plugins/magnific-popup/dist/magnific-popup.css">
    <link rel="stylesheet" href="assets/plugins/animate.css/animate.min.css">
    <link rel="stylesheet" href="assets/plugins/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/plugins/revolution/css/settings.css">
    <link rel="stylesheet" href="assets/plugins/revolution/css/layers.css">
    <link rel="stylesheet" href="assets/plugins/revolution/css/navigation.css">
    <link rel="stylesheet" href="assets/css/sliders/slider-3.css">
    <!-- Custom-->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-Z1T5J1FJNS"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'G-Z1T5J1FJNS');
    </script>
</head>
<body class="ps-loading">
    <header class="header header--3" data-sticky="true">
        <div class="header__top">
            <div class="ps-container-fluid">
                <!--<div class="left">
                    <div class="btn-group ps-dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown"
                                                          aria-haspopup="true" aria-expanded="false">Ру<i
                                class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Русский</a></li>
                            <li><a href="#">O'zbek</a></li>
                            <li><a href="#">English</a></li>
                        </ul>
                    </div>
                </div> -->
                <div class="center"><a class="ps-logo" href="/"><img src="assets/images/logo.png" alt=""></a></div>
                <div class="right">
                    <div class="menu-toggle"><span></span></div>
                    <ul class="header__actions">
                        <li><a class="ps-search-btn" href="#"><i class="exist-search"></i></a></li>
                        <li><a href="#"><i class="exist-user"></i></a></li>
                        <li class="header__cart"><a class="ps-shopping" href="#" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false" id="shopping-cart"><i
                                    class="exist-minicart"></i><span><i>0</i></span></a>
                            <ul class="dropdown-menu" aria-labelledby="shopping-cart" id="shopping-list">
                                <li><span class="ps-product--shopping-cart"><a class="ps-product__thumbnail"
                                                                               href="product-detail.html"><img
                                                src="assets/images/cart/1.jpg"
                                                alt=""></a><span class="ps-product__content"><a
                                                class="ps-product__title" href="#">Диван Эндор</a><span
                                                class="ps-product__quantity">1 x <span>
                                                        5 000 000</span></span>
                                            </span><a class="ps-product__remove" href="#"><i
                                                class="fa fa-trash"></i></a></span>
                                </li>
                                <li><span class="ps-product--shopping-cart"><a class="ps-product__thumbnail"
                                                                               href="product-detail.html"><img
                                                src="assets/images/cart/2.jpg"
                                                alt=""></a><span class="ps-product__content"><a
                                                class="ps-product__title" href="#">Диван Lema Cloud</a><span
                                                class="ps-product__quantity">1 x <span>
                                                        5 000 000</span></span>
                                            </span><a class="ps-product__remove" href="#"><i
                                                class="fa fa-trash"></i></a></span>
                                </li>
                                <li class="total">
                                    <p>Всего: <span> 10 млн. сум</span></p><a class="ps-btn" href="#">В корзину</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <nav class="navigation">
            <div class="ps-container-fluid">
                <ul class="menu">
                    <li><a href="shop-category">Каталог</a></li>
                    <li><a href="about">О нас</a></li>
                    <li><a href="contacts">Контакты</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Основной контент -->
@yield('content')
    <!-- Подвал сайта -->
    <footer class="ps-footer--1">
        <div class="ps-container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 ">
                    <div class="ps-footer__copyright">
                        <p><a href="https://t.me/soleyev">Made by Soleyev</a></p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 ">
                    <ul class="ps-footer__nav">
                        <li><a href="#">Правила</a></li>
                        <li><a href="#">Термины</a></li>
                        <li><a href="#">Блог</a></li>
                        <li><a href="faqs">FAQs</a></li>
                        <li><a href="about-me">Обо мне</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 ">
                    <ul class="ps-footer__social">
                        <li><a href="https://www.facebook.com/Mysofa.uz/" target="_blank"><i
                                    class="fa fa-facebook"></i>facebook</a></li>
                        <li><a href="https://t.me/mysofa_uz" target="_blank"><i class="fa fa-telegram"></i>telegram</a>
                        </li>
                        <li><a href="https://www.instagram.com/my_sofa.uz/" target="_blank"><i
                                    class="fa fa-instagram"></i>instagram</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="back2top">На вверх<i class="exist-rightarrow"></i></div>
    </footer>

    <!-- Подключение скриптов -->
    <!-- JS Library-->
    <script type="text/javascript" src="assets/plugins/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/plugins/owl-carousel/owl.carousel.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
    <script type="text/javascript" src="assets/plugins/masonry.pkgd.min.js"></script>
    <script type="text/javascript" src="assets/plugins/imagesloaded.pkgd.js"></script>
    <script type="text/javascript" src="assets/plugins/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="assets/plugins/slick/slick/slick.min.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery.matchHeight-min.js"></script>
    <script type="text/javascript" src="assets/plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="assets/plugins/wow.min.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Custom scripts-->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script type="text/javascript" src="assets/plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="assets/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript"
            src="assets/plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script type="text/javascript"
            src="assets/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript"
            src="assets/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript"
            src="assets/plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript"
            src="assets/plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript"
            src="assets/plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="assets/js/slider_3.js"></script>

</body>

</html>
