@extends('layout.main')

@section('css')
    <link rel="stylesheet" href="{{asset('css/forum.css')}}">
@endsection

@section('content')
<div>
    <div class="text-right">
        <button class="threadBaru" type="submit">Buat Thread</button>
    </div>

    <div class="container-fluid text-center">
      <p class="fs-2 fw-bold"> Forum </p>
    </div>

    <div class="dropdown">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
        2021
        </a>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <li><a class="dropdown-item" href="#">2020</a></li>
        <li><a class="dropdown-item" href="#">2019</a></li>
        </ul>
    </div>

    <br>


    <div>
        <div class="btn-group btn-group-toggle d-flex justify-content-center mx-5 pb-4" data-toggle="buttons">
            <label class="btn btn-outline-secondary p-3">
                <p class="fs-1 px-1 pt-1 pb-0"> Suryadi - 03 Maret 2021 <label class="data-view" for=""></label></p>
                <input type="radio" name="options" id="option1" autocomplete="off"> <strong class="fs-2 fw-bold">Cara Pembuatan Penawaran yang baik</strong>
                <p class="fs-1 px-1 pt-1 pb-0"> 5 Unread Post <label class="data-view" for=""></label></p>
            </label>
        </div>
    </div>

    <div>
        <div class="btn-group btn-group-toggle d-flex justify-content-center mx-5 pb-4" data-toggle="buttons">
            <label class="btn btn-outline-secondary p-3">
                <p class="fs-1 px-1 pt-1 pb-0"> Natalia - 03 Maret 2021 <label class="data-view" for=""></label></p>
                <input type="radio" name="options" id="option1" autocomplete="off"> <strong class="fs-2 fw-bold">Apa saja berkas yang harus disiapkan?</strong>
                <p class="fs-1 px-1 pt-1 pb-0"> 2 Unread Post <label class="data-view" for=""></label></p>
            </label>
        </div>
    </div>

    <div>
        <div class="btn-group btn-group-toggle d-flex justify-content-center mx-5 pb-4" data-toggle="buttons">
            <label class="btn btn-outline-secondary p-3">
                <p class="fs-1 px-1 pt-1 pb-0"> Bayu - 03 Maret 2021 <label class="data-view" for=""></label></p>
                <input type="radio" name="options" id="option1" autocomplete="off"> <strong class="fs-2 fw-bold"> Mari pahami sistem crowdfunding</strong>
                <p class="fs-1 px-1 pt-1 pb-0"> 7 Unread Post <label class="data-view" for=""></label></p>
            </label>
        </div>
    </div>

    <div>
        <div class="btn-group btn-group-toggle d-flex justify-content-center mx-5 pb-4" data-toggle="buttons">
            <label class="btn btn-outline-secondary p-3">
                <p class="fs-1 px-1 pt-1 pb-0"> Suryadi - 03 Maret 2021 <label class="data-view" for=""></label></p>
                <input type="radio" name="options" id="option1" autocomplete="off" class = "fs-2 fw-bold px-5 pt-5 pb-0"> <strong class="fs-2 fw-bold">Webinar "Strategi pengembangan produk UMKM"</strong>
                <p class="fs-1 px-1 pt-1 pb-0"> 3 Unread Post <label class="data-view" for=""></label></p>
            </label>
        </div>
    </div>
</div>
@endsection