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
    <div class="row box-invest">
      <div class="col-lg-5 info-box">
        <p class="fs-6">Dana yang sudah terkumpul saat ini</p>
        <p class="fs-4">
          Rp
          <label for="" class="data-view">
            15.600.000 </label
          >,-
        </p>
      </div>
      <div class="col-lg-7 info-box">
        <a
          class="btn btn-primary"
          href="{{route('pendanaan.payment')}}"
          role="button"
        >
          Ajukan Pendanaan
        </a>
        <p class="fs-6">
          Minimum nominal dana yang diinvestasikan adalah Rp100.000,-
        </p>
      </div>
    </div>
  </div>
  <!-- Tab Informasi Bisnis -->
  <div class="container-fluid business-info-area">
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a
          class="nav-link active fs-5"
          data-toggle="tab"
          href="#info-pendanaan-tab"
        >
          Info Pendanaan
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link fs-5" data-toggle="tab" href="#detail-usaha-tab">
          Detail Usaha
        </a>
      </li>
    </ul>
    <div class="tab-content">
      <div class="tab-pane active" id="info-pendanaan-tab">
        <div class="tab-detail border g-0 rounded shadow-sm">
          <div class="row">
            <div class="col text-area">
              <p class="fs-6 fw-bold">Awal Pendanaan</p>
              <p class="fs-5">
                <label class="data-view" for=""> 25 November 2021 </label>
              </p>
            </div>
            <div class="col text-area">
              <p class="fs-6 fw-bold">Akhir Pendanaan</p>
              <p class="fs-5">
                <label class="data-view" for=""> 25 November 2022 </label>
              </p>
            </div>
            <div class="col text-area">
              <p class="fs-6 fw-bold">Bunga Efektif</p>
              <p class="fs-5">
                <label class="data-view" for=""> 5% </label>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane" id="detail-usaha-tab">
        <div class="tab-detail border g-0 rounded shadow-sm">
          <p class="fw-bold">Keterangan Usaha</p>
          <p>
            Toko Kelontong Alami adalah toko yang menyediakan berbagai
            macam barang dengan harga yang terjangkau. Toko ini
            selalu dipenuhi oleh pelanggan yang sebagian besar merupakan
            pengedara ojek online. Pada setiap siang, kita selalu
            memasok barang yang baru disupply dari pabrik dengan
            mementingkan kualitas. Kenyamanan pelanggan juga selalu
            diperhatikan oleh kami.
          </p>
          <div class="d-flex justify-content-between align-items-center">
            <div>
              <p class="fw-bold">Alamat</p>
              <p>Jalan Budi Raya no 21</p>
            </div>
            <div>
              <p class="fw-bold">Pendapatan Kotor per Bulan</p>
              <p>Rp. 5.000.000</p>
            </div>
            <div>
              <p class="fw-bold">Pendapatan Bersih per Bulan</p>
              <p>Rp. 3.000.000</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
