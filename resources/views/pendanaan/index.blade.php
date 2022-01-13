@extends('layout.main')

@section('css')
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
@endsection

@section('content')
    @guest

<section class="banner">
  <div class="container text-center">
    <div class="row">
      <p class="banner-content">
        Silahkan Masuk Atau Daftar Ke Akun <i>Investor</i> Anda untuk
        Melihat Pendanaan Yang Sedang Berlangsung Ataupun Yang Telah
        Berhasil
      </p>
      <div class="d-flex justify-content-center align-items-center">
        <img
          src="../assets/images/common/Chart_1.png"
          alt=""
          class="img-fluid w-50"
        />
      </div>
    </div>
  </div>
</section>
    @endguest
  <section class="pendanaan container">
    <h1>Pendanaan Yang Tersedia</h1>
    <div class="row">
      <div class="d-flex justify-content-center align-items-center">
        <p class="pendanaan-none text-center">
          Anda tidak memiliki pendanaan yang sedang berlangsung
        </p>
      </div>
    </div>
  </section>
  <section class="pendanaan container">
    <h1>Pendanaan Yang Berlangsung</h1>
    <div class="row">
      <div class="col-4">
        <a href="{{route('pendanaan.view')}}"><div class="card">
            <img
              class="card-img-top"
              src="http://assets.kompasiana.com/items/album/2018/11/11/kita-dan-warung-tetangga-5be8258b43322f56ff72f9d3.jpg"
              alt="Card image cap"
            />
            <div class="card-body">
              <h5 class="card-title">Pendanaan Usaha Toko Kelontong Alami</h5>
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
                  <p>Rp. 120.000.000</p>
                </div>
                <div class="row">
                  <div class="col">
                    <p class="card-text-sub">Bunga Efektif</p>
                    <p>5.12%</p>
                  </div>
                  <div class="col">
                    <p class="card-text-sub">Tenor</p>
                    <p>1 Tahun</p>
                  </div>
                </div>
              </div>
            </div>
          </div></a>
      </div>
    </div>
  </section>
  <section class="pendanaan container">
    <h1>Pendanaan Yang Berhasil</h1>
    <div class="row">
      <div class="col-4">
        <div class="card">
          <img
            class="card-img-top"
            src="https://gobiz.co.id/pusat-pengetahuan/wp-content/uploads/2021/06/membuka-warung-kelontong-1.jpg"
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
