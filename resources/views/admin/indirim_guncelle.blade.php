@extends('layouts.admin')

@section('content')
    <div class="col-lg-8">
        <div class="ibox-content">
            <form action="{{route('indirim_guncelle',$indirim[0]->indirim_id)}}" method="POST" class="form-horizontal">
                <div class="form-group">
                    <label class="col-sm-2 control-label">Ürün</label>
                    <div class="col-sm-4"><input type="text" disabled value="{{$indirim[0]->urun_isim}}" class="form-control"></div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">İndirim Miktarı</label>
                    <div class="col-sm-4"><input type="text" name="indirim_miktar" class="form-control" value="{{$indirim[0]->indirim_miktar}}"></div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">İndirim Başlangıç</label>
                    <div class="col-sm-4"><input type="date" name="indirim_baslangic" class="form-control" value="{{$indirim[0]->indirim_baslangic}}"></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">İndirim Bitiş</label>
                    <div class="col-sm-4"><input type="date" name="indirim_bitis" class="form-control" value="{{$indirim[0]->indirim_bitis}}"></div>
                </div>
                <div class="hr-line-dashed"></div>

                {{csrf_field()}}
                {{method_field('PUT')}}
                <input type="submit" class="btn btn-outline-primary" value="Güncelle">
            </form>
        </div>
    </div>
@endsection



