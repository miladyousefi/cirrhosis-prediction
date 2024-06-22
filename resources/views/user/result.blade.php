@extends('user.layouts.app')
@section('content')
<div class="container-fluid ">

@if ($prediction==1)
<div class="card border border-danger " style="background-color: rgb(255, 160, 160)">
    <div class="card-header">
        سیستم پیش بینی بیماری سیروز کبدی
    </div>
    <div class="card-body text-center">
        با توجه به داده ها و اطلاعات وارد شده احتمال ابتلا بیمار به بیماری سیروز کبدی وجود دارد
    </div>
</div>
@elseif ($prediction==0)
<div class="card border border-success " style="background-color: rgb(179, 255, 160)">
    <div class="card-header">
        سیستم پیش بینی بیماری سیروز کبدی
    </div>
    <div class="card-body text-center">
        با توجه به داده ها و اطلاعات وارد شده احتمال ابتلا بیمار به بیماری سیروز کبدی وجود ندارد
    </div>
</div>
@else
<div class="card border border-danger " style="background-color: rgb(255, 160, 160)">
   
    <div class="card-body text-center">
        خطای در سیستم رخ داده است 
        {{$prediction}}
    </div>
</div>
@endif
</div>
@endsection