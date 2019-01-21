@extends('layouts.admin')


@section('content')
    <div class="ibox-content">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#ID</th>
                    <th>Kategori </th>
                    <th>Kategori Ürün Sayısı</th>
                </tr>
                </thead>
                <tbody>
                @foreach($kategoriler as $kategori)
                    <tr>
                        <td>{{$kategori->kategori_id}}</td>
                        <td>{{$kategori->kategori_ad}}</td>
                        <td>{{$kategori->counts}}</td>
                        <td><a href="/panel/kategoriler/sil/{{$kategori->kategori_id}}"><div class="btn btn-danger btn-outline">Kategoriyi Sil !</div></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection


