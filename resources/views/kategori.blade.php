@extends('layouts.tema')

@section('content')
    <div class="shop">
        <div class="container">
            <div class="row">
                <div class="col-lg-offset-3 col-lg-9">
                    <div class="shop_content">
                    <div class="product_grid">
                        <div class="product_grid_border"></div>
                        @foreach($urunler as $urun)


                            <div class="product_item is_new">

                                <div class="product_border"></div>
                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="/assets/images/new_5.jpg" alt=""></div>
                                <div class="product_content">
                                    <div class="product_price">{{number_format($urun->urun_fiyat,2,',','.')}} ₺</div>
                                    <div class="product_name"><div><a href="/urun/{{$urun->urun_id}}" tabindex="0">{{$urun->urun_marka}}  {{$urun->urun_isim}}</a></div></div>
                                </div>
                                <ul class="product_marks">
                                    <li class="product_mark product_new">yeni</li>
                                </ul>
                            </div>
                        @endforeach
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
    <link rel="stylesheet" type="text/css" href="/assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="/assets/styles/shop_styles.css">
    <link rel="stylesheet" type="text/css" href="/assets/styles/shop_responsive.css">
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
    <script src="/assets/plugins/easing/easing.js"></script>
    <script src="/assets/plugins/Isotope/isotope.pkgd.min.js"></script>
    <script src="/assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
    <script src="/assets/plugins/parallax-js-master/parallax.min.js"></script>
@endsection