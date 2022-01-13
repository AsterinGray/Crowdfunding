@extends('layout.main')

@section('css')
    <link rel="stylesheet" href="{{asset('css/forumForm.css')}}">
@endsection

@section('content')
<div>
    <div class="container-fluid text-center">
        <p class="fs-1 mt-5 fw-bold"> Forum Form </p>
    </div>

    <div>
        <p class="fs-3 fw-bold p-3 margin-left: 3;">Judul</p>

        <div class="mx-3">
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
        </div>

        <p class="fs-3 fw-bold p-3">Caption</p>

        <div class="mx-3">
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
        </div>
    </div>

    <div class="text-center">
        <button class="submit-forum" type="submit">Post</button>
    </div>

</div>
<br>
@endsection
