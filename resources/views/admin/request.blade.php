@extends('admin.layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">درخواست ها</div>
            <div class="card-body p-0">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($requests as $index=>$request)
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
                  <div class="text-center mt-3">
                  {{$requests->links('layouts.paginate')}}
                  </div>
            </div>
        </div>
    </div>
@endsection