@extends('layout.main')

@section('css')
    <link rel="stylesheet" href="{{asset('css/pendanaanDetail.css')}}">
@endsection

@section('content')
<div class="container-fluid business-banner text-center">
    <div class="row">
      <!-- Business Photo -->
      <div class="col-lg-5 header-photo">
        <img
          src="{{asset('http://assets.kompasiana.com/items/album/2018/11/11/kita-dan-warung-tetangga-5be8258b43322f56ff72f9d3.jpg')}}"
          alt=""
          width="70%"
        />
      </div>
      <!-- Business Header -->
      <div class="col-lg-7 business-banner-info">
        <div class="row text-center business-banner-headline">
          <div class="col-lg-9 col-xs-9">
            <label for="" class="fs-2">Pendanaan Usaha Toko Kelontong Alami</label>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-lg-12 progress-view">
            <p class="text-muted">
              Telah terkumpul dana sebesar
              <label class="data-view" for=""> 13% </label> dengan
              total Rp<label class="data-view" for="">
                15.600.000 </label
              >.
            </p>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-lg-5">
            <p class="fs-5">Jumlah pinjaman</p>
            <p class="fs-5 fw-bold">
              Rp<label class="data-view" for="">
                120.000.000 </label
              >,-
            </p>
          </div>
          <div class="col-lg-4">
            <p class="fs-5">Bunga Efektif</p>
            <p class="fs-5 fw-bold">
              <label class="data-view" for="">5</label>%
            </p>
          </div>
          <div class="col-lg-3">
            <p class="fs-5">Tenor</p>
            <p class="fs-5 fw-bold">
              <label class="data-view" for=""> 1 </label> Tahun
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Box Investasi -->

  <div class="container-fluid text-center">
    <div class="row box-nominal-input">
        <div class="col-lg-12 info-box text-center">
            <p class="fs-6"> Dana yang sudah terkumpul saat ini </p>
            <p class="fs-4"> Rp <label for="" class="data-view"> 15.600.000 </label>,- </p>
            <br>
            <p class="fs-4 text-left fw-bold txt-pdl"> Masukan Nominal Dana yang anda ingin berikan </p>
            <div class="input-calculation text-center">
                <div class="mb-3">
                    <input type="number" class="calculator-textbox" id="" aria-describedby="numberHelp" placeholder="10000000">
                    <div id="numberHelp" class="form-text text-left txt-pdl"> Dalam Rupiah </div>
                  </div>
            </div>
            <div class="col-lg-12 info-box">
                <a class="btn btn-primary fs-4" href="../pages/pembayaranPendanaan.htm" role="button"> Konfirmasi Jumlah </a>
                <p class="fs-6"> Minimum nominal dana yang diinvestasikan adalah Rp100.000,- </p>
            </div>
        </div>
    </div>
</div>
@endsection
