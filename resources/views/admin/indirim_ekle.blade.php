@extends('layouts.admin')

@section('content')
    <div class="col-lg-8">
        <div class="ibox-content">
            <form action="{{route('indirim_ekle')}}" method="POST" class="form-horizontal">
                <div class="form-group">
                    <label class="col-sm-2 control-label">Ürün</label>
                    <div class="col-sm-4">
                        <select name="urun_id" id="" class="form-control " required>
                            @foreach($urunler as $urun)
                                <option value="{{$urun->urun_id}}">{{$urun->urun_isim}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">İndirim Miktarı</label>
                    <div class="col-sm-4"><input type="number" max="100" min="0" name="indirim_miktar" class="form-control" required></div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">İndirim Başlangıç</label>
                    <div class="col-sm-4"><input type="date" name="indirim_baslangic" class="form-control"  required></div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">İndirim Bitiş</label>
                    <div class="col-sm-4"><input type="date" class="form-control" name="indirim_bitis" required ></div>
                </div>
                <div class="hr-line-dashed"></div>
                {{csrf_field()}}
                <input type="submit" class="btn btn-outline-primary" value="İndirim Ekle">
            </form>
        </div>
    </div>
@endsection



