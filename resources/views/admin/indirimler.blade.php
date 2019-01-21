@extends('layouts.admin')


@section('content')
    <div class="ibox-content">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#ID</th>
                    <th>Ürün </th>
                    <th>İndirim Miktarı </th>
                    <th>İndirim Başlangıç</th>
                    <th>İndirim Bitiş</th>
                </tr>
                </thead>
                <tbody>
                @foreach($indirimler as $indirim)
                    <tr>
                        <td>{{$indirim->indirim_id}}</td>
                        <td>{{$indirim->urun_isim}}</td>
                        <td>{{$indirim->indirim_miktar}}</td>
                        <td>{{$indirim->indirim_baslangic}}</td>
                        <td>{{$indirim->indirim_bitis}}</td>
                        <td><a href="/panel/indirimler/guncelle/{{$indirim->indirim_id}}"><div class="btn btn-primary btn-outline">Güncelle</div></a></td>
                        <td><a href="/panel/indirimler/sil/{{$indirim->indirim_id}}"><div class="btn btn-danger btn-outline">İndirimi Sil !</div></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection


