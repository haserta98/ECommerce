@extends('layouts.tema')

@section('content')
    <div class="single_product">
        <div class="container">
            <div class="row">

                <!-- Images -->
                <div class="col-lg-2 order-lg-1 order-2">
                    <ul class="image_list">
                        <li data-image="images/single_4.jpg"><img src="/assets/images/single_4.jpg" alt=""></li>
                        <li data-image="images/single_2.jpg"><img src="/assets/images/single_2.jpg" alt=""></li>
                        <li data-image="images/single_3.jpg"><img src="/assets/images/single_3.jpg" alt=""></li>
                    </ul>
                </div>

                <!-- Selected Image -->
                <div class="col-lg-5 order-lg-2 order-1">
                    <div class="image_selected"><img src="/assets/images/single_4.jpg" alt=""></div>
                </div>

                <!-- Description -->
                <div class="col-lg-5 order-3">
                    <div class="product_description">
                        <div class="product_category">{{$urun[0]->kategori_ad}}</div>
                        <div class="product_name">{{$urun[0]->urun_isim}}</div>
                        <div class="rating_r rating_r_4 product_rating"><i></i><i></i><i></i><i></i><i></i></div>
                        <div class="product_text"><p>{{$urun[0]->urun_ozellikler}}</p></div>
                        <div class="order_info d-flex flex-row">
                                <form method="post" role="form" action="{{route('sepete_ekle',$urun[0]->urun_id)}}" >

                                <div class="clearfix" style="z-index: 1000;">
                                    <!-- Product Quantity -->
                                    <div >

                                        <input class="form-control" name="miktar" placeholder="Miktar" required type="number" min="1">
                                    </div>

                                </div>
                                    {{csrf_field()}}
                                <div class="product_price">{{number_format($urun[0]->urun_fiyat,2,',','.')}} ₺</div>
                                <div class="button_container">
                                    <button type="submit" class="button cart_button">Sepete Ekle</button>
                                </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
    <script src="/assets/js/product_custom.js"></script>
@endsection

@section('css')
    <link rel="stylesheet" type="text/css" href="/assets/styles/bootstrap4/bootstrap.min.css">
    <link href="/assets/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="/assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="/assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="/assets/plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="/assets/styles/product_styles.css">
    <link rel="stylesheet" type="text/css" href="/assets/styles/product_responsive.css">
@endsection