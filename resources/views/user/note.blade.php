@extends('user.layouts.app')
@section('content')
<div class="card">
    <div class="card-header bg-white">
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
                    <textarea id="note" name="note" placeholder="یاداشت خود را وارد نمایید" class="form-control"></textarea>
                </div>
              
                <div class="col-md-12 mt-2">
                    <label for="expertation"> </label>

                <button class="btn btn-success btn-block">ذخیره</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="card mt-3">
    <div class="card-header bg-white">یاداشت ها</div>
    <div class="card-body p-3">
        <div class="accordion" id="accordionPanelsStayOpenExample">
            @foreach ($notes as $note)
            <div class="accordion-item">
              <h2 class="accordion-header" id="panelsStayOpen-headingOne{{$note->id}}">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne{{$note->id}}" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne{{$note->id}}">
                  {{$note->title}}
                </button>
              </h2>
              <div id="panelsStayOpen-collapseOne{{$note->id}}" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne{{$note->id}}">
                <div class="accordion-body">
                    {!! $note->note !!}
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
@endsection
