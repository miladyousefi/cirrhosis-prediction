@extends('admin.layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                تنظیمات
            </div>
            <div class="card-body">
                <form action="{{route('admin.setting.update')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mt-2">
                            <label for="first_name">نام</label>
                            <input type="text" class="form-control" id="first_name" name="first_name" value="{{auth('admin')->user()->first_name}}">
                        </div>
                        <div class="col-md-6 mt-2">
                            <label for="last_name">نام خانوادگی</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" value="{{auth('admin')->user()->last_name}}">
                        </div>
                        <div class="col-md-6 mt-2">
                            <label for="username">نام کاربری</label>
                            <input type="text" class="form-control" id="username" name="username" value="{{auth('admin')->user()->username}}">
                        </div>
                        <div class="col-md-6 mt-2">
                            <label for="password">نام کاربری</label>
                            <input type="text" class="form-control" id="password" name="password">
                        </div>
                        <div class="col-md-12 mt-2">
                            <button class="btn btn-success btn-block">ذخیره</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection