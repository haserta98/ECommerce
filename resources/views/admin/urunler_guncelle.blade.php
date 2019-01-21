@extends('layouts.admin')

@section('content')
    <div class="col-lg-8">
        <div class="ibox-content">
            <form action="{{route('urun_guncelle',$urun[0]->urun_id)}}" method="POST" class="form-horizontal">
                <div class="form-group">
                    <label class="col-sm-2 control-label">Ürün Ad</label>
                    <div class="col-sm-4"><input type="text" name="urun_isim" value="{{$urun[0]->urun_isim}}" class="form-control"></div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Kategori</label>
                    <div class="col-sm-4">
                        <select name="kategori" id="" class="form-control ">
                            @foreach($kategori as $kategoris)
                                @if($kategoris->kategori_id == $urun[0]->kategori_id)
                                    <option value="{{$kategoris->kategori_id}}" selected>{{$kategoris->kategori_ad}}</option>
                                @endif
                                    @if($kategoris->kategori_id != $urun[0]->kategori_id)
                                        <option value="{{$kategoris->kategori_id}}">{{$kategoris->kategori_ad}}</option>
                                    @endif
                                @endforeach
                        </select>
                        </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Fiyat</label>
                    <div class="col-sm-4"><input type="text" name="urun_fiyat" class="form-control" value="{{$urun[0]->urun_fiyat}}"></div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Stok</label>
                    <div class="col-sm-4"><input type="text" name="urun_stok" class="form-control" value="{{$urun[0]->urun_stok}}" ></div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Marka</label>
                    <div class="col-sm-4"><input type="text" class="form-control" name="urun_marka" value="{{$urun[0]->urun_marka}}" ></div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Model</label>
                    <div class="col-sm-4"><input type="text" class="form-control" name="urun_model" value="{{$urun[0]->urun_model}}" ></div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Ürün Özellikleri</label>
                    <div class="col-sm-4"><textarea class="form-control" name="urun_ozellikler"  >{{$urun[0]->urun_ozellikler}}</textarea>
                </div>
                </div>
                <div class="hr-line-dashed"></div>
                {{csrf_field()}}
                {{method_field('PUT')}}
                <input type="submit" class="btn btn-outline-primary" value="Güncelle">
            </form>
        </div>
    </div>
@endsection



