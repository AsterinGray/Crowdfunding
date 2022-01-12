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
          src="{{asset('images/common/Business-image/business-photo.jpeg')}}"
          alt=""
          width="70%"
        />
      </div>
      <!-- Business Header -->
      <div class="col-lg-7 business-banner-info">
        <div class="row text-center business-banner-headline">
          <div class="col-lg-9 col-xs-9">
            <label for="" class="fs-2"> Business Title Here! </label>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-lg-12 progress-view">
            <p class="text-muted">
              Telah terkumpul dana sebesar
              <label class="data-view" for=""> persentase </label>% dengan
              total Rp<label class="data-view" for="">
                Nominal Yang Sudah Dipinjamkan </label
              >.
            </p>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-lg-5">
            <p class="fs-5">Jumlah pinjaman</p>
            <p class="fs-5 fw-bold">
              Rp<label class="data-view" for="">
                Nominal Target Pinjaman </label
              >,-
            </p>
          </div>
          <div class="col-lg-4">
            <p class="fs-5">Bunga Efektif</p>
            <p class="fs-5 fw-bold">
              <label class="data-view" for="">Persentase</label>%
            </p>
          </div>
          <div class="col-lg-3">
            <p class="fs-5">Tenor</p>
            <p class="fs-5 fw-bold">
              <label class="data-view" for=""> lama </label> Bulan
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
            Nominal Yang Sudah Dipinjamkan </label
          >,-
        </p>
      </div>
      <div class="col-lg-7 info-box">
        <a
          class="btn btn-primary"
          href="../pages/pendanaanNominal.html"
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
                <label class="data-view" for=""> Tanggal Awal </label>
              </p>
            </div>
            <div class="col text-area">
              <p class="fs-6 fw-bold">Akhir Pendanaan</p>
              <p class="fs-5">
                <label class="data-view" for=""> Tanggal Akhir </label>
              </p>
            </div>
            <div class="col text-area">
              <p class="fs-6 fw-bold">Bunga Efektif</p>
              <p class="fs-5">
                <label class="data-view" for=""> Persentase </label>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane" id="detail-usaha-tab">
        <div class="tab-detail border g-0 rounded shadow-sm">
          <p class="fw-bold">Keterangan Usaha</p>
          <p>
            Warung Makan Bude adalah warung yang menyediakan makanan
            tradisional nusantara dengan harga yang terjangkau. Warung ini
            selalu dipenuhi oleh pelanggan yang sebagi besar merupakan
            pengedara ojek online. Pada setiap jam makan, kita selalu
            menghidangkan makanan yang baru dimasak dari dapur dengan
            mementingkan kebersihan. Kenyamanan pelanggan juga selalu
            diperhatikan oleh kami.
          </p>
          <div class="d-flex justify-content-between align-items-center">
            <div>
              <p class="fw-bold">Alamat</p>
              <p>Jalan Budi Raya no 21</p>
            </div>
            <div>
              <p class="fw-bold">Pendapatan Kotor per Bulan</p>
              <p>Rp. 15.000.000</p>
            </div>
            <div>
              <p class="fw-bold">Pendapatan Bersih per Bulan</p>
              <p>Rp. 10.000.000</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection