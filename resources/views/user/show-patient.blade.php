@extends('user.layouts.app')
@section('content')
<div class="container-fluid ">
    <div class="row ">
        <div class="col-md-3 ">
            <div class="card p-4 shadow border border-0" style="border-radius: 15px;background-color: #e2ecf7">
                <div class="card-body text-center">
                    نام و نام خانوادگی
                    <div class="mt-3 text-primary">
                        {{ $patient->first_name }} {{ $patient->last_name }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-4 shadow border border-0" style="border-radius: 15px;background-color: #e2ecf7">
                <div class="card-body text-center">
                    تعداد پیش بینی ها
                    <div class="mt-3 text-primary">
                        {{count($patient->requests)}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-4 shadow border border-0" style="border-radius: 15px;background-color: #e2ecf7">
                <div class="card-body text-center">
                    کد ملی
                    <div class="mt-3 text-primary">
                    {{ $patient->national_code }}
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card p-4 shadow border border-0" style="border-radius: 15px;background-color: #f9e4d8">
                <div class="card-body text-center">
                    کد پرونده
                    <div class="mt-3 text-primary">
                        {{ $patient->file_code }}
                    </div>
                </div>
            </div>
        </div>
        <h4 class="mt-5">پیش بینی های اخیر</h4>
        @foreach ($patient->requests as $index=>$request)
        <div class="row mt-2 p-2 py-4" style="border-radius: 15px; background-color: #eeeff0">

        <div class="col-3">
            {{ $index+1 }} - {{ $request->patient->first_name }} {{ $request->patient->last_name }}
        </div>
        <div class="col-2">
            کد ملی : {{ $request->patient->national_code }}
        </div>
        <div class="col-2">
            ش-پرونده : {{ $request->patient->file_code }}
        </div>
        <div class="col-2 text-center">
            {{ $request->result ? $request->result==1 ?'مبتلا به بیماری سیروس کبدی' : 'سالم' : '-' }}
        </div>
        <div class="col-3 text-left">
            {{verta($request->created_at)->format('Y/m/d')}}
        </div>

                </div>

                  @endforeach
    </div>
</div>
@endsection
