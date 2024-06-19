@extends('user.layouts.app')
@section('content')
<div class="row ">
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                تعداد بیماران  :   {{$patients_count}}
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                تعداد درخواست ها  :   {{$requests_count}}
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                تعداد یاداشت ها  :  {{$notes_count}}
            </div>
        </div>
    </div>
</div>
<div class="card mt-3">
    <div class="card-header bg-white">
        اخرین پیش بینی ها
    </div>
    <div class="card-body p-0">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">نام</th>
                <th scope="col">نام خانوادگی</th>
                <th scope="col">کدملی</th>
                <th scope="col">نتیجه</th>
                <th scope="col" class="text-center">عملیات</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($requests as $index=>$request)
              <tr>
                <th scope="row">{{ $index+1 }}</th>
                <td>{{ $request->patient()->first_name }}</td>
                <td>{{ $request->patient()->last_name }}</td>
                <td>{{ $request->patient()->national_code }}</td>
                <td>{{ $request->result }}</td>

                <td class="text-center">
                    <a href="#"><i class="fa fa-eye"></i></a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <div class="text-center mt-2">
            {{$requests->links('layouts.paginate')}}
          </div>
    </div>
</div>
@endsection
