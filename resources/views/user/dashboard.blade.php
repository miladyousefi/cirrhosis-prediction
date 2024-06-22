@extends('user.layouts.app')
@section('content')
<div class="container-fluid ">

<div class="row ">
    <div class="col-md-3">
        <div class="card p-4 shadow border border-0" style="border-radius: 15px;background-color: #e2ecf7">
            <div class="card-body text-center">
                تعداد بیماران
                <div class="mt-3 text-primary">
                    {{$patients_count}}
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card p-4 shadow border border-0" style="border-radius: 15px;background-color: #e2ecf7">
            <div class="card-body text-center">
                تعداد درخواست ها
                <div class="mt-3 text-primary">
                    {{$requests_count}}
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 ">
        <div class="card p-4 shadow border border-0" style="border-radius: 15px;background-color: #e2ecf7">
            <div class="card-body text-center">
                تعداد یاداشت ها
                <div class="mt-3 text-primary">
                    {{$notes_count}}
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 d-flex flex-column align-items-center justify-content-center">
        <div class="card p-4 border border-0 text-center justi">
            <div class="card-body">
                <a href="{{route('create-user')}}" class="btn shadow text-white px-4" style="background-color: #0c56a0;border-radius: 12px">ثبت بیمار جدید +</a>
            </div>
        </div>
    </div>
</div>
</div>

<div class="container-fluid p-4">
    <h4 class="mt-5">پیش بینی های اخیر</h4>
    @foreach ($requests as $index=>$request)
    <div class="row mt-2 p-2 py-4" style="border-radius: 15px; background-color: #eeeff0">

    <div class="col-2">
        {{ $index+1 }} - {{ $request->patient->first_name }} {{ $request->patient->last_name }}
    </div>
    <div class="col-3">
        کد ملی : {{ $request->patient->national_code }}
    </div>
    <div class="col-2">
        ش-پرونده : {{ $request->patient->file_code }}
    </div>
    <div class="col-3 text-center">
        {{ $request->result ? $request->result==1 ?'مبتلا به بیماری سیروس کبدی' : 'سالم' : '-' }}
    </div>
    <div class="col-2 text-left">
        {{verta($request->created_at)->format('Y/m/d')}}
    </div>

            </div>

              @endforeach
</div>

<div class="text-center mt-2">
            {{$requests->links('layouts.paginate')}}
          </div>
@endsection
