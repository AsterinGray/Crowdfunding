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
            src="https://infopublik.id/assets/upload/headline//rs11.jpg"
            alt="Card image cap"
          />
          <div class="card-body">
            <h5 class="card-title">Pendanaan Usaha Rumah Sakit Bandung</h5>
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
                <p>Rp. 3.000.000.000</p>
              </div>
              <div class="row">
                <div class="col">
                  <p class="card-text-sub">Bunga Efektif</p>
                  <p>9%</p>
                </div>
                <div class="col">
                  <p class="card-text-sub">Tenor</p>
                  <p>10 Tahun</p>
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
            src="https://www.workmate.asia/static/a7fe202a479af8a887e4eb601e70a9e2/74fd5/9ac67bd5-7f02-4f46-b088-90ac5a31ea9e_shawn-ang-nmpW_WwwVSc-unsplash.jpg"
            alt="Card image cap"
          />
          <div class="card-body">
            <h5 class="card-title">Pendanaan Usaha Restoran Steak Angke</h5>
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
                <p>Rp. 550.000.000</p>
              </div>
              <div class="row">
                <div class="col">
                  <p class="card-text-sub">Bunga Efektif</p>
                  <p>12.25%</p>
                </div>
                <div class="col">
                  <p class="card-text-sub">Tenor</p>
                  <p>3 Tahun</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
