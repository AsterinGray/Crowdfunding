<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Document</title>
        <link rel="stylesheet" href="{{asset('libraries/bootstrap/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/footer.css')}}">
        <link rel="stylesheet" href="{{asset('css/header.css')}}">
        @yield('css')
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
              <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <span class="navbar-toggler-icon"></span>
              </button>
              <!-- Col-auto -->
              <div class="col-auto ml-auto">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('pendanaan.index')}}"> Pendanaan </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('peminjaman.index')}}"> Peminjaman </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#"> Forum </a>
                    </li>
                    @auth

                      <li class="nav-item">
                        <a class="nav-link" style="color: white !important">{{Auth::user()->username}}</a>
                      </li>
                    @endauth

                    @guest
                        
                      <a href="{{route('login')}}"
                      ><button type="button" class="btn btn-secondary auth-btn">
                        Masuk
                      </button></a
                      >
                      <a href="{{route('register')}}"
                        ><button type="button" class="btn btn-secondary auth-btn">
                          Daftar
                        </button></a
                      >
                    @endguest
                  </ul>
                </div>
              </div>
            </div>
          </nav>

        @yield('content')

        <footer class="bg-dark text-white text-center mt-5">
            <div class="sosmed">
              <div class="col-sm-12 sosmed-text">Media Sosial Kami</div>
              <div class="row w-100">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-5 mb-5">
                  <ul class="list-unstyled list-inline social text-center">
                    <li class="list-inline-item">
                      <a href="https://www.twitter.com">
                        <i class="fa fa-twitter">
                          <img
                            src="{{asset('images/common/round_twitter.png')}}"
                            alt=""
                          />
                          <div class="fa-text">Instagram</div>
                        </i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="https://www.linkedin.com">
                        <i class="fa fa-linkedin">
                          <img
                            src="{{asset('images/common/round_linkedIn.png')}}"
                            alt=""
                          />
                          <div class="fa-text">Linkedin</div>
                        </i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="https://www.instagram.com">
                        <i class="fa fa-instagram">
                          <img
                            src="{{asset('images/common/round_instagram.png')}}"
                            alt=""
                          />
                          <div class="fa-text">Instagram</div>
                        </i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="https://www.youtube.com">
                        <i class="fa fa-youtube">
                          <img
                            src="{{asset('images/common/round_youtube.png')}}"
                            alt=""
                          />
                          <div class="fa-text">Youtube</div>
                        </i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="https://www.facebook.com">
                        <i class="fa fa-facebook">
                          <img
                            src="{{asset('images/common/round_facebook.png')}}"
                            alt=""
                          />
                          <div class="fa-text">Facebook</div>
                        </i>
                      </a>
                    </li>
                  </ul>
                </div>
                <hr />
              </div>
      
              <!--copyright text-->
              <p class="text-center copyright">
                Copyright @2021 Warung Skuy Company. All Rights Reserved
              </p>
            </div>
          </footer>
          <script src="{{asset('libraries/jquery/jquery.min.js')}}"></script>
          <script src="{{asset('libraries/bootstrap/bootstrap.min.js')}}"></script>
    </body>
</html>
