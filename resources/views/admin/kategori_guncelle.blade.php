@extends('layouts.admin')

@section('content')
    <div class="col-lg-8">
        <div class="ibox-content">
            <form action="{{route('kategori_guncelle')}}" method="POST" class="form-horizontal">
                <div class="form-group">
                    <label class="col-sm-2 control-label">Kategoriler</label>
                    <div class="col-sm-4">
                    <select name="kategori_id" id="" class="form-control ">
                        @foreach($kategoriler as $kategoris)
                                <option value="{{$kategoris->kategori_id}}">{{$kategoris->kategori_ad}}</option>
                        @endforeach
                    </select>
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Kategori İsmi</label>
                    <div class="col-sm-4"><input type="text" name="kategori_ad" class="form-control" placeholder="Yeni İsmi"></div>
                </div>
                <div class="hr-line-dashed"></div>

                {{csrf_field()}}
                {{method_field('PUT')}}
                <input type="submit" class="btn btn-outline-primary" value="Güncelle">
            </form>
        </div>
    </div>
@endsection



