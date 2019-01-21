@extends('layouts.admin')

@section('content')
    <div class="col-lg-8">
        <div class="ibox-content">
            <form action="{{route('urun_ekle')}}" method="POST" class="form-horizontal">
                <div class="form-group">
                    <label class="col-sm-2 control-label">Ürün Ad</label>
                    <div class="col-sm-4"><input type="text" name="urun_isim"  class="form-control" required></div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Kategori</label>
                    <div class="col-sm-4">
                        <select name="kategori_id" id="" class="form-control " required>
                            @foreach($kategori as $kategoris)
                                <option value="{{$kategoris->kategori_id}}">{{$kategoris->kategori_ad}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Fiyat</label>
                    <div class="col-sm-4"><input type="text" name="urun_fiyat" class="form-control" required></div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Stok</label>
                    <div class="col-sm-4"><input type="text" name="urun_stok" class="form-control"  required></div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Marka</label>
                    <div class="col-sm-4"><input type="text" class="form-control" name="urun_marka" required ></div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Model</label>
                    <div class="col-sm-4"><input type="text" class="form-control" name="urun_model" required ></div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Ürün Özellikleri</label>
                    <div class="col-sm-4"><textarea class="form-control" name="urun_ozellikler" required></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Resim</label>
                    <div class="col-sm-4"><input type="file" class="form-control" name="urun_resim"></div>
                </div>
                <div class="hr-line-dashed"></div>
                {{csrf_field()}}
                <input type="submit" class="btn btn-outline-primary" value="Ürün Ekle">
            </form>
        </div>
    </div>
@endsection



