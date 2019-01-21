<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link rel="stylesheet" href="/assets/style.css">
    <meta name="robots" content="noindex,follow" />
</head>
<body>
<form action="{{route('odeme_yap')}}" method="POST">
{{csrf_field()}}
<div class="checkout-panel">
    <div class="panel-body">
        <h2 class="title">Ödeme</h2>

        <div class="progress-bar">
            <div class="step active"></div>
            <div class="step active"></div>
            <div class="step"></div>
            <div class="step"></div>
        </div>

        <div class="payment-method">
            <label for="card" class="method card">
                <div class="card-logos">
                    <img src="/assets/img/visa_logo.png"/>
                    <img src="/assets/img/mastercard_logo.png"/>
                </div>

                <div class="radio-input">
                    <input id="card" type="radio" name="payment" required>
                    {{number_format($urun_fiyat[0]->fiyat,2,',','.')}} ₺
                </div>
            </label>

            <label for="paypal" class="method paypal">
                <img src="/assets/img/paypal_logo.png"/>
                <div class="radio-input">
                    <input id="paypal" type="radio" name="payment">
                   {{number_format($urun_fiyat[0]->fiyat,2,',','.')}} ₺

                </div>
            </label>
        </div>

        <div class="input-fields">
            <div class="column-1">
                <label for="cardholder">Kart Sahibinin Adı</label>
                <input type="text" id="cardholder" required/>

                <div class="small-inputs">
                    <div>
                        <label for="date">Son Kullanma Tarihi</label>
                        <input type="text" id="date" placeholder="MM / YY" required/>
                    </div>

                    <div>
                        <label for="verification">CVV / CVC2 *</label>
                        <input type="password" id="verification" required/>
                    </div>
                </div>

            </div>
            <div class="column-2">
                <label for="cardnumber">Kart Numarası</label>
                <input type="text" id="cardnumber" required/>

                <span class="info">* CVV veya CVC numarası kartınızın arkasında bulunan 3 harfli sayıdır</span>
            </div>
        </div>
    </div>

    <div class="panel-footer">
        <input type="hidden" name="odeme_miktar" value="{{$urun_fiyat[0]->fiyat}}">

        <input type="button" class="btn back-btn" value="Geri">
        <input type="submit" class="btn next-btn" value="Ödemeyi Tamamla">
    </div>

</div>
</form>


</body>
</html>