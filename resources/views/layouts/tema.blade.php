<!DOCTYPE html>
<html lang="en">
<head>
    <title>IZU</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="OneTech shop project">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @yield('css')




</head>

<body>

<div class="super_container">

    <!-- Header -->

    <header class="header">

        <!-- Top Bar -->

        <div class="top_bar">
            <div class="container">
                <div class="row">
                    <div class="col d-flex flex-row">
                        <div class="top_bar_contact_item"><div class="top_bar_icon"><img src="/assets/images/phone.png" alt=""></div>İstanbul Sabahattin Zaim Üniversitesi</div>
                        <div class="top_bar_contact_item"><div class="top_bar_icon"><img src="/assets/images/mail.png" alt=""></div>Veritabanı Dersi</div>
                        <div class="top_bar_content ml-auto">

                            <div class="top_bar_user">

                                @if(!session()->has('giris_durum'))
                                    <div class="user_icon"><img src="/assets/images/user.svg" alt=""></div>
                                    <div><a href="/kayit">Kayıt</a></div>
                                    <div><a href="/giris">Giriş Yap</a></div>
                                @endif

                                @if(session()->get('giris_durum') == 1)
                                        <div class="user_icon"><img src="/assets/images/user.svg" alt=""></div>
                                        <div><a href="/siparislerim">Siparişlerim</a></div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Header Main -->

        <div class="header_main">
            <div class="container">
                <div class="row">

                    <!-- Logo -->
                    <div class="col-lg-2 col-sm-3 col-3 order-1">
                        <div class="logo_container">
                            <div class="logo"><a href="#">IZU</a></div>
                        </div>
                    </div>

                    <!-- Search -->
                    <div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right"></div>

                    <!-- Wishlist -->
                    <div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
                        <div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">

                        @php
                            $kullanici_id = session()->get('kullanici_id');
                            $sepet_miktar = \Illuminate\Support\Facades\DB::select("SELECT SUM(urun_miktar*urun_fiyat) as urun_fiyat,SUM(urun_miktar) as urun_miktar
                             FROM sepet INNER JOIN urun ON sepet.urun_id = urun.urun_id WHERE sepet.kullanici_id = '$kullanici_id'");

                        @endphp
                            <!-- Cart -->
                            <div class="cart">
                                <div class="cart_container d-flex flex-row align-items-center justify-content-end">
                                    <div class="cart_icon">
                                        <img src="/assets/images/cart.png" alt="">
                                        <div class="cart_count"><span>@if($sepet_miktar != null){{$sepet_miktar[0]->urun_miktar}} @endif @if($sepet_miktar[0]->urun_miktar == null) 0 @endif </span></div>
                                    </div>
                                    <div class="cart_content">
                                        <div class="cart_text"><a href="/sepet">Sepet</a></div>

                                        <div class="cart_price">{{number_format($sepet_miktar[0]->urun_fiyat,2,',','.')}} ₺</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Navigation -->

        <nav class="main_nav">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <div class="main_nav_content d-flex flex-row">

                            <!-- Categories Menu -->

                            <div class="cat_menu_container">
                                <div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
                                    <div class="cat_burger"><span></span><span></span><span></span></div>
                                    <div class="cat_menu_text">Kategoriler</div>
                                </div>

                                <ul class="cat_menu">



                                       @php

                                           use Illuminate\Support\Facades\DB;
                                           $kategoriler = DB::select("SELECT kategori_ad FROM kategori");
                                       @endphp

                                        @foreach($kategoriler as $kategori)
                                        <li><a href="/kategoriler/{{strtolower($kategori->kategori_ad)}}"><i class="fas fa-chevron-right ml-auto"></i>{{$kategori->kategori_ad}}</a></li>
                                            @endforeach

                                </ul>
                            </div>
                            <!-- Main Nav Menu -->


                            <!-- Menu Trigger -->



                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    @yield("content")

</div>
@yield('js')
</body>
</html>
