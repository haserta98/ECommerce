@extends('layouts.tema')


@section('content')
    <div class="cart_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cart_container">
                        <div class="cart_title">Sepet</div>
                        <div class="cart_items">
                            <ul class="cart_list">
                                @foreach($sepet as $urun)
                                    <li class="cart_item clearfix">
                                        <div class="cart_item_image"><img src="/assets/images/shopping_cart.jpg" alt=""></div>
                                        <div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
                                            <div class="cart_item_name cart_info_col">
                                                <div class="cart_item_title">İsim</div>
                                                <div class="cart_item_text">{{$urun->urun_isim}}</div>
                                            </div>

                                            <div class="cart_item_quantity cart_info_col">
                                                <div class="cart_item_title">Miktar</div>
                                                <div class="cart_item_text">{{$urun->urun_miktar}}</div>
                                            </div>
                                            <div class="cart_item_price cart_info_col">
                                                <div class="cart_item_title">Fiyat</div>
                                                <div class="cart_item_text">{{number_format($urun->urun_fiyat,2,',','.')}} ₺</div>
                                            </div>
                                            <div class="cart_item_total cart_info_col">
                                                <div class="cart_item_title">Toplam</div>
                                                <div class="cart_item_text">{{number_format($urun->urun_fiyat * $urun->urun_miktar,2,',','.')}} ₺</div>
                                            </div>
                                            <div class="cart_item_total cart_info_col">
                                                <button type="button" class="button "><a href="/sepetsil">Sil</a></button>
                                            </div>

                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <!-- Order Total -->
                        <div class="order_total">
                            <div class="order_total_content text-md-right">
                                <div class="order_total_title">Toplam Tutar:</div>
                                <div class="order_total_amount">{{number_format($toplam[0]->toplam,2,',','.')}} ₺</div>
                            </div>
                        </div>

                        <div class="cart_buttons">
                            @if($toplam[0]->toplam != 0) <button type="button" class="button cart_button_clear" ><a href="/odeme"  style="color:black">Ödemeye Geç</a></button>@endif
                            <button type="button" class="button cart_button_checkout"><a href="/">Alışverişe Devam</a></button>
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