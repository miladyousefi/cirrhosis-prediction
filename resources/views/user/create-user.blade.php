@extends('user.layouts.app')
@section('content')
<div class="container-fluid">
    <form action="{{route('store-user')}}" method="POST">
        @csrf
        <h5 class="mt-2">اطلاعات هویتی بیمار</h5>
    <hr>
    <div class="row">

    <div class="col-md-2 mt-2">
        <label for="first_name">نام</label>
        <input type="text" name="first_name" class="form-control" id="first_name" value="{{isset($patient) ? $patient->first_name : null}}">
    </div>
    <div class="col-md-2 mt-2">
        <label for="last_name">نام خانوادگی</label>
        <input type="text" name="last_name" class="form-control" id="last_name" value="{{isset($patient) ? $patient->last_name : null}}">
    </div>

    <div class="col-md-2 mt-2">
        <label for="age">سن</label>
        <input type="text" name="age" class="form-control" id="age" value="{{isset($patient) ? $patient->age : null}}">
    </div>
    <div class="col-md-2 mt-2">
        <label for="phone">شماره تلفن</label>
        <input type="text" name="phone" class="form-control" id="phone" value="{{isset($patient) ? $patient->phone : null}}">
    </div>
    <div class="col-md-2 mt-2">
        <label for="national_code">کد ملی</label>
        <input type="text" name="national_code" class="form-control" id="national_code" value="{{isset($patient) ? $patient->national_code : null}}">
    </div>
    <div class="col-md-2 mt-2">
        <label for="sex">جنسیت</label>
        <select class="form-control" name="sex" id="sex">
            <option value="1" selected>مرد</option>
            <option value="0">زن</option>
        </select>
    </div>
    <div class="text-center mt-2">
        <button class="btn btn-success btn-block">ذخیره اطلاعات</button>
    </div>
    </form>
</div>
@endsection
