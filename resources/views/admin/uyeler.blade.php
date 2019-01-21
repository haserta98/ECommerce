@extends('layouts.admin')


@section('content')
    <div class="ibox-content">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>

                    <th>#ID</th>
                    <th>İsim </th>
                    <th>Soyisim </th>

                    <th>Telefon</th>
                    <th>E-Mail </th>
                    <th>Adres</th>
                    <th>Yetki</th>
                </tr>
                </thead>
                <tbody>
                @foreach($uyeler as $uye)
                <tr>
                    <td>{{$uye->kullanici_id}}</td>
                    <td>{{$uye->kullanici_ad}}</td>
                    <td>{{$uye->kullanici_soyad}}</td>
                    <td>{{$uye->kullanici_tel}}</td>
                    <td>{{$uye->kullanici_eposta}}</td>
                    <td>{{$uye->kullanici_adres}}</td>
                    <td>{{$uye->role_name}}</td>
                    <td><a href="/panel/uyeler/guncelle/{{$uye->kullanici_id}}"><div class="btn btn-primary btn-outline">Güncelle</div></a></td>
                    <td><a href="/panel/uyeler/sil/{{$uye->kullanici_id  }}"><div class="btn btn-danger btn-outline">Üyeyi Sil !</div></a></td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @endsection


