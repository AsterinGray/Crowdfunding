@extends('layout.main')

@section('css')
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
@endsection

@section('content')

<div class="banner" style="background-image: url({{asset('images/pages/home/Home_Yellow_Background.png')}})">
    <div class="container-fluid text-center">
      <div class="row">
        <div class="col-md-6">
          <h2 class="banner-title">Bersama Kembangkan UMKM di Indonesia</h2>
          <p class="banner-text">
            Dengan gotong royong kita majukan perekonomian Indonesia dengan
            membantu mereka untuk maju dan berkembang.
          </p>
          <button
            type="button"
            class="btn btn-primary btn-text btn-primary-1"
          >
            Mulai Danai
          </button>
        </div>
        <div class="col-md-6 chart-1">
          <img
            src="{{asset('images/common/Chart_1.png')}}"
            alt=""
            class="img-fluid"
          />
        </div>
      </div>
    </div>
  </div>
  <!-- Benefit -->
  <div class="benefit">
    <div class="container-fluid text-center">
      <div class="row">
        <div class="col-md-12">
          <h2 class="container-title">Keuntungan</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="benefit-item">
            <img
              src="{{asset('images/pages/home/Aman_Dan_Terpercaya.png')}}"
              alt=""
              class="img-fluid"
            />
          </div>
          <div class="benefit-item">
            <img
              src="{{asset('images/pages/home/Keuntungan_Besar.png')}}"
              alt=""
              class="img-fluid"
            />
          </div>
          <div class="benefit-item">
            <img
              src="{{asset('images/pages/home/Kontribusi_Sosial.png')}}"
              alt=""
              class="img-fluid"
            />
          </div>
        </div>
        <div class="col-md-6 tabs-image">
          <img
            src="{{asset('images/pages/home/Tabs_1.png')}}"
            alt=""
            class="img-fluid"
          />
        </div>
      </div>
    </div>
  </div>
  <!-- Indonesia -->
  <div class="indonesia">
    <div class="container-fluid text-center">
      <div class="row">
        <div class="col-md-12">
          <h2 class="container-title">Dari Kamu Untuk Indonesia</h2>
          <img
            src="{{asset('images/pages/home/Indonesia_Tosca.png')}}"
            alt=""
            class="img-fluid"
          />
        </div>
      </div>
    </div>
  </div>
  <!-- Testimoni -->
  <div class="testimoni">
    <div class="container-fluid text-center">
      <div class="row">
        <div class="col-md-12">
          <h2 class="container-title testimoni-title">
            Testimoni Pelanggan Kami
          </h2>
          <h4 class="testimoni-subtitle">
            Kepuasan anda adalah prioritas kami
          </h4>
        </div>
      </div>
      <div class="row testimoni-area">
        <div class="col-md-4">
          <div class="container-testimoni">
            <div class="testimoni-image">
              <img
                src="{{asset('images/pages/home/Testimoni_one.png')}}"
                alt=""
                class="img-fluid"
              />
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="container-testimoni">
            <div class="testimoni-image">
              <img
                src="{{asset('images/pages/home/Testimoni_two.png')}}"
                alt=""
                class="img-fluid"
              />
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="container-testimoni">
            <div class="testimoni-image">
              <img
                src="{{asset('images/pages/home/Testimoni_three.png')}}"
                alt=""
                class="img-fluid"
              />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    
@endsection