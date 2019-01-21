@extends('layouts.tema')


@section('content')
    <div class="cart_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cart_container">
                        <div class="cart_title">Siparişlerim</div>
                        @foreach($fatura as $faturas)
                        <div class="cart_items">
                            <ul class="cart_list">
                                @php($odeme = DB::select("SELECT * FROM odeme
                                                          INNER JOIN urun ON urun.urun_id = odeme.urun_id
                                                          WHERE fatura_id = '$faturas->fatura_id'"))
                                @foreach($odeme as $urun)
                                    <li class="cart_item clearfix">
                                        <div class="cart_item_image"><img src="/assets/images/shopping_cart.jpg" alt=""></div>
                                        <div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
                                            <div class="cart_item_name cart_info_col">
                                                <div class="cart_item_title">Ürün</div>
                                                <div class="cart_item_text">{{$urun->urun_isim}}</div>
                                            </div>

                                            <div class="cart_item_quantity cart_info_col">
                                                <div class="cart_item_title">Miktar</div>
                                                <div class="cart_item_text">{{$urun->urun_miktar}}</div>
                                            </div>

                                            <div class="cart_item_quantity cart_info_col">
                                                <div class="cart_item_title">Tarih</div>
                                                <div class="cart_item_text">{{$urun->urun_tarih}}</div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('css')

    <link rel="stylesheet" type="text/css" href="/assets/styles/bootstrap4/bootstrap.min.css">
    <link href="/assets/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="/assets/styles/cart_styles.css">
    <link rel="stylesheet" type="text/css" href="/assets/styles/cart_responsive.css">
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
    <script src="/assets/plugins/easing/easing.js"></script>
@endsection