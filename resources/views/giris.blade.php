<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Login</title>

    <link href="/kayitasset/css/bootstrap.min.css" rel="stylesheet">
    <link href="/kayitasset/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="/kayitasset/css/animate.css" rel="stylesheet">
    <link href="/kayitasset/css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

<div class="middle-box text-center loginscreen animated fadeInDown">
    <div>
        <div>

            <h1 class="logo-name">OT</h1>

        </div>
        <h3>Hoşgeldiniz !</h3>


        <form class="m-t" role="form" method="post" action="{{route('giris')}}">
            {{csrf_field()}}
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Email Adresiniz" required="">
            </div>
            <div class="form-group">
                <input type="password" name="sifre" class="form-control" placeholder="Şifreniz" required="">
            </div>
            <button type="submit" class="btn btn-primary block full-width m-b">Giriş</button>


            <p class="text-muted text-center"><small>Kullanıcı hesabınız yok mu ?</small></p>
            <a class="btn btn-sm btn-white btn-block" href="/kayit">Hesap Oluştur</a>
        </form>

    </div>
</div>

<!-- Mainly scripts -->
<script src="/kayitasset/js/jquery-3.1.1.min.js"></script>
<script src="/kayitasset/js/bootstrap.min.js"></script>

</body>

</html>
