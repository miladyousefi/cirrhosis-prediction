@extends('user.layouts.app')
@section('content')
<div class="container-fluid ">

<div class="row">
  <div class="col-md-4">
    <div class="card">
      <div class="card-header bg-secondary text-white">
            ثبت یاداشت جدید
      </div>
      <div class="card-body">
          <form action="{{route('note.store')}}" method="POST">
              @csrf
              <div class="row">
                  <div class="col-md-12">
                      <label for="title">عنوان </label>
                      <input type="text" id="title" name="title" placeholder="یک عنوان برای نوت خود وارد نمایید" class="form-control">
                  </div>
                  <div class="col-md-12">
                      <label for="note">متن</label>
                      <textarea id="note" rows="10" name="note" placeholder="یاداشت خود را وارد نمایید" class="form-control"></textarea>
                  </div>

                  <div class="col-md-12 mt-2">
                      <label for="expertation"> </label>

                  <button class="btn btn-success btn-block">ذخیره</button>
                  </div>
              </div>
          </form>
      </div>
  </div>

  </div>
  <div class="col-md-8">
    <div class="card">
      <div class="card-header bg-secondary text-white">یاداشت ها</div>
      <div class="card-body p-3">
          <div class="accordion" id="accordionPanelsStayOpenExample">
              @foreach ($notes as $note)
              <div class="accordion-item mt-2">
                <h2 class="accordion-header" id="panelsStayOpen-headingOne{{$note->id}}">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne{{$note->id}}" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne{{$note->id}}">
                    {{$note->title}}
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseOne{{$note->id}}" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne{{$note->id}}">
                  <div class="accordion-body">
                      {!! $note->note !!}
                  </div>
                  <div class="text-left">
                    <a href="{{ route('note.destroy',$note) }}" class="btn btn-danger btn-sm m-2">حذف یادداشت</a>

                  </div>
                </div>
              </div>
              @endforeach
            </div>
            <div class="text-center mt-2">
              {{$notes->links('layouts.paginate')}}
            </div>
      </div>
  </div>
  </div>
</div>
</div>
@endsection
