@extends('admin.layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">بیماران</div>
            <div class="card-body p-0">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">نام</th>
                        <th scope="col">کد ملی</th>
                        <th scope="col">تعداد درخواست</th>
                        <th scope="col">عملیات</th>
                      </tr>
                    </thead>
                    <tbody  >
                        @foreach ($patients as $index=>$patient)
                            <tr>
                                <th scope="row">{{$index+1}}</th>
                                <td>{{$patient->full_name}}</td>
                                <td>{{$patient->national_code}}</td>
                                <td>{{$patient->requests()->count()}}</td>
                                <td>
                                    <a href="#" class="btn btn-danger btn-sm">حذف</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
                  <div class="text-center mt-3">
                  {{$patients->links('layouts.paginate')}}
                  </div>
            </div>
        </div>
    </div>
@endsection