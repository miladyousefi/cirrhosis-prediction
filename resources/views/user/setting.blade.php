@extends('user.layouts.app')
@section('content')
<div class="card">
    <div class="card-header bg-white">
          تنظیمات
    </div>
    <div class="card-body">
        <form action="{{route('setting.update')}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-3">
                    <label for="first_name">نام </label>
                    <input type="text" id="first_name" name="first_name" value="{{$user->first_name}}" class="form-control">
                </div>
                <div class="col-md-3">
                    <label for="last_name">نام خانوادگی</label>
                    <input type="text" id="last_name" name="last_name" value="{{$user->last_name}}" class="form-control">
                </div>
                <div class="col-md-2">
                    <label for="password">رمز عبور</label>
                    <input type="password" id="password" name="password" class="form-control">
                </div>
                <div class="col-md-2">
                    <label for="expertation">تخصص</label>
                    <input type="text" id="expertation" name="expertation" value="{{$user->expertation}}" class="form-control">
                </div>
                <div class="col-md-2 mt-2">
                    <label for="expertation"> </label>

                <button class="btn btn-success btn-block">ذخیره</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
