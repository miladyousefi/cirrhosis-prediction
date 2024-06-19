@extends('user.layouts.app')
@section('content')
<div class="card">
    <div class="card-header bg-white">
          <div class="row">
            <div class="col-md-6">
              <div class="row">
                <div class="col-md-8">
                  <form action="">
                    <input type="text" class="form-control" name="national_code" placeholder="کدملی بیمار را وارد کنید">
                  </form>
                </div>
                <div class="col-md-4">
                  <button class="btn btn-success">جستوجو</button>
                </div>
              </div>
            </div>
            
          </div>
    </div>
    <div class="card-body p-0">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">نام</th>
                <th scope="col">نام خانوادگی</th>
                <th scope="col">کدملی</th>
                <th scope="col" class="text-center">عملیات</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($patients as $index=>$patient)
              <tr>
                <th scope="row">{{ $index+1 }}</th>
                <td>{{ $patient->first_name }}</td>
                <td>{{ $patient->last_name }}</td>
                <td>{{ $patient->national_code }}</td>
                <td class="text-center">
                    <a href="{{route('request')}}?patient_id={{$patient->id}}"><i class="fa fa-eye"></i></a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <div class="text-center mt-2">
            {{$patients->links('layouts.paginate')}}
          </div>
    </div>
</div>
@endsection
