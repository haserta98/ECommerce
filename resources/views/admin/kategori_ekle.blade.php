@extends('layouts.admin')

@section('content')
    <div class="col-lg-8">
        <div class="ibox-content">
            <form action="{{route('kategori_ekle')}}" method="POST" class="form-horizontal">
                <div class="form-group">
                    <label class="col-sm-2 control-label">Kategori Adı</label>
                    <div class="col-sm-4"><input type="text"  name="kategori_ad" class="form-control" required></div>
                </div>
                <div class="hr-line-dashed"></div>
                {{csrf_field()}}
                <input type="submit" class="btn btn-outline-primary" value="Kategori Ekle">
            </form>
        </div>
    </div>
@endsection



