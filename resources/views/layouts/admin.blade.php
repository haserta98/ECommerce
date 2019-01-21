<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GÖZÜM A.Ş</title>
    <link href="/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="/admin/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="/admin/css/animate.css" rel="stylesheet">
    <link href="/admin/css/style.css" rel="stylesheet">

    @yield('css')
</head>
<body>
<div id="wrapper">
    <nav id="navbarr" class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <a href="#">
                            <span class="clear"> <span class="block m-t-xs">

                             </span>  </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="#">Logout</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>
                <li class="" id="index">
                    <a href="/panel/uyeler/"><i class="fa fa-th-large"></i> <span class="nav-label">Üyeler</span></a>

                </li>

                <li class="" id="index">
                    <a href="/panel/urunler"><i class="fa fa-th-large"></i> <span class="nav-label">Ürünler</span></a>
                </li>
                <li class="" id="index">
                    <a href="/panel/urunler/ekle"><i class="fa fa-th-large"></i> <span class="nav-label">Ürün Ekle</span></a>
                </li>
                <li class="" id="index">
                    <a href="/panel/indirimler"><i class="fa fa-th-large"></i> <span class="nav-label">İndirimler</span></a>
                </li>
                <li class="" id="index">
                    <a href="/panel/indirimler/ekle"><i class="fa fa-th-large"></i> <span class="nav-label">İndirim Ekle</span></a>
                </li>
                <li class="" id="index">
                    <a href="/panel/kategoriler"><i class="fa fa-th-large"></i> <span class="nav-label">Kategoriler</span></a>
                </li>
                <li class="" id="index">
                    <a href="/panel/kategoriler/ekle"><i class="fa fa-th-large"></i> <span class="nav-label">Kategori Ekle</span></a>
                </li>

            </ul>
        </div>
    </nav>
    <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i>
                    </a>
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <a href="/cikis">
                            Çıkış
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div  class="wrapper wrapper-content animated fadeInRight">

            @yield('content')

        </div>
        <div class="footer">
            <div>
                <strong>Registered</strong> GÖZÜM A.Ş &reg; 2017
            </div>
        </div>
    </div>
</div>
</body>
<script src="/admin/js/jquery-3.1.1.min.js"></script>
<script src="/admin/js/bootstrap.min.js"></script>
<script src="/admin/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="/admin/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="/admin/js/inspinia.js"></script>
@yield('js')
</html>

