@extends('layouts.admin')


@section('content')
    <div class="ibox-content">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#ID</th>
                    <th>İsim </th>
                    <th>Kategori</th>
                    <th>Fiyat</th>
                    <th>Stok </th>
                    <th>Marka</th>
                    <th>Model</th>
                </tr>
                </thead>
                <tbody>
                @foreach($urunler as $urun)
                    <tr>
                        <td>{{$urun->urun_id}}</td>
                        <td>{{$urun->urun_isim}}</td>
                        <td>{{$urun->kategori}}</td>
                        <td>{{$urun->urun_fiyat}}</td>
                        <td>{{$urun->urun_stok}}</td>
                        <td>{{$urun->urun_marka}}</td>
                        <td>{{$urun->urun_model}}</td>
                        <td><a href="/panel/urunler/guncelle/{{$urun->urun_id}}"><div class="btn btn-primary btn-outline">Ürünü Güncelle</div></a></td>
                        <td><a href="/panel/urunler/sil/{{$urun->urun_id  }}"><div class="btn btn-danger btn-outline">Ürünü Sil !</div></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection


