@extends('layouts.tema')

@section('content')

    <div class="banner">
        <div class="banner_background" style="background-image:url(/assets/images/banner_background.jpg)"></div>
        <div class="container fill_height">
            <div class="row fill_height">
                <div class="banner_product_image"><img src="/assets/images/banner_product.png" alt=""></div>
                <div class="col-lg-5 offset-lg-4 fill_height">
                    <div class="banner_content">
                        <h1 class="banner_text">new era of smartphones</h1>
                        <div class="banner_price"><span>$530</span>$460</div>
                        <div class="banner_product_name">Apple Iphone 6s</div>
                        <div class="button banner_button"><a href="#">Shop Now</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="characteristics">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 char_col">

                    <div class="char_item d-flex flex-row align-items-center justify-content-start">
                        <div class="char_icon"><img src="/assets/images/char_1.png" alt=""></div>
                        <div class="char_content">
                            <div class="char_title">Ücretsiz Kargo</div>
                            <div class="char_subtitle">50 TL ve üzeri alışverişlerde</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection




@section('css')
    <link rel="stylesheet" type="text/css" href="/assets/styles/bootstrap4/bootstrap.min.css">
    <link href="/assets/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="/assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="/assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="/assets/plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="/assets/plugins/slick-1.8.0/slick.css">
    <link rel="stylesheet" type="text/css" href="/assets/styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="/assets/styles/responsive.css">
@endsection

@section('js')
    <script src="/assets/js/jquery-3.3.1.min.js"></script>
    <script src="/assets/styles/bootstrap4/popper.js"></script>
    <script src="/assets/styles/bootstrap4/bootstrap.min.js"></script>
    <script src="/assets/plugins/greensock/TweenMax.min.js"></script>
    <script src="/assets/plugins/greensock/TimelineMax.min.js"></script>
    <script src="/assets/plugins/scrollmagic/ScrollMagic.min.js"></script>
    <script src="/assets/plugins/greensock/animation.gsap.min.js"></script>
    <script src="/assets/plugins/greensock/ScrollToPlugin.min.js"></script>
    <script src="/assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="/assets/plugins/slick-1.8.0/slick.js"></script>
    <script src="/assets/plugins/easing/easing.js"></script>

@endsection