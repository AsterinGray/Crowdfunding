@extends('layout.main')

@section('css')
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
@endsection

@section('content')
<section class="pendanaan container">
    <h1>Daftar Peminjaman Saat Ini</h1>
    <div class="row">
      <div class="col-4">
        <div class="card">
          <img
            class="card-img-top"
            src="../assets/images/pages/pendanaan/Card-img.png"
            alt="Card image cap"
          />
          <div class="card-body">
            <h5 class="card-title">Pendanaan Usaha Warung Makan Sejahtera</h5>
            <div class="progress">
              <div
                class="progress-bar bg-warning"
                role="progressbar"
                style="width: 25%"
                aria-valuenow="25"
                aria-valuemin="0"
                aria-valuemax="100"
              ></div>
            </div>
            <div class="card-text">
              <div>
                <p class="card-text-sub">Jumlah Pinjaman</p>
                <p>Rp. 1.000.000.000</p>
              </div>
              <div class="row">
                <div class="col">
                  <p class="card-text-sub">Bunga Efektif</p>
                  <p>13.05%</p>
                </div>
                <div class="col">
                  <p class="card-text-sub">Tenor</p>
                  <p>1 Tahun</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="pendanaan container">
    <h1>Daftar Peminjaman Yang Belum Lunas</h1>
    <div class="row">
      <div class="col-4">
        <div class="card">
          <img
            class="card-img-top"
            src="../assets/images/pages/pendanaan/Card-img.png"
            alt="Card image cap"
          />
          <div class="card-body">
            <h5 class="card-title">Pendanaan Usaha Warung Makan Sejahtera</h5>
            <div class="progress">
              <div
                class="progress-bar bg-warning"
                role="progressbar"
                style="width: 25%"
                aria-valuenow="25"
                aria-valuemin="0"
                aria-valuemax="100"
              ></div>
            </div>
            <div class="card-text">
              <div>
                <p class="card-text-sub">Jumlah Pinjaman</p>
                <p>Rp. 1.000.000.000</p>
              </div>
              <div class="row">
                <div class="col">
                  <p class="card-text-sub">Bunga Efektif</p>
                  <p>13.05%</p>
                </div>
                <div class="col">
                  <p class="card-text-sub">Tenor</p>
                  <p>1 Tahun</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection