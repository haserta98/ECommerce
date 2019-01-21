@extends('layouts.admin')

@section('content')
<div class="col-lg-8">
    <div class="ibox-content">
        <form action="{{route('uye_guncelle',$uye[0]->kullanici_id)}}" method="POST" class="form-horizontal">
        <div class="form-group">
            <label class="col-sm-2 control-label">Ad</label>
            <div class="col-sm-4"><input type="text" name="kullanici_ad" value="{{$uye[0]->kullanici_ad}}" class="form-control"></div>
        </div>
        <div class="hr-line-dashed"></div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Soyad</label>
                <div class="col-sm-4"><input type="text" name="kullanici_soyad" class="form-control" value="{{$uye[0]->kullanici_soyad}}"></div>
            </div>
            <div class="hr-line-dashed"></div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Telefon</label>
                <div class="col-sm-4"><input type="text" name="kullanici_telefon" class="form-control" value="{{$uye[0]->kullanici_tel}}"></div>
            </div>
            <div class="hr-line-dashed"></div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Eposta</label>
                <div class="col-sm-4"><input type="text" name="kullanici_eposta" class="form-control" value="{{$uye[0]->kullanici_eposta}}" ></div>
            </div>
            <div class="hr-line-dashed"></div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Adres</label>
                <div class="col-sm-4"><input type="text" class="form-control" name="kullanici_adres" value="{{$uye[0]->kullanici_adres}}" ></div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Yetki</label>
                <div class="col-sm-4">
                    <select name="kullanici_role" class="form-control">
                        @foreach($roles as $role)
                            @if($role->role_id == $uye[0]->kullanici_role)
                                <option selected value="{{$role->role_id}}">{{$role->role_name}}</option>
                                @continue
                            @endif
                                <option value="{{$role->role_id}}">{{$role->role_name}}</option>
                        @endforeach
                    </select>
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



