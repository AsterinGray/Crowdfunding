<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>LOGIN</title>
        <link rel="stylesheet" href="{{asset('libraries/bootstrap/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/footer.css')}}">
        <link rel="stylesheet" href="{{asset('css/header.css')}}">
        <link rel="stylesheet" href="{{asset('css/auth.css')}}">
    </head>
    <body>
        <section class="container-fluid">
            <div class="row auth">
              <div class="main col-lg-12 col-xl-6 align-items-center">
                <div
                  class="logo d-flex align-items-center justify-content-center mb-5"
                >
                  <img
                    src="{{asset('images/common/logo.png')}}"
                    alt="Warung Skuy Logo"
                  />
                  <div>Warung Skuy</div>
                </div>
                <div class="card">
                  <div class="card-title text-center">MASUK</div>
                  <form action="" class="d-flex flex-column">
                    <form class="form-group" method="post" action="../home.html">
                      <label for="username">Username</label>
                      <input type="text" class="form-control" id="username" />
                      <div class="invalid-feedback"></div>
                    </form>
                    <div class="form-group">
                      <label for="password">Kata Sandi</label>
                      <input type="password" class="form-control" id="password" />
                      <div class="invalid-feedback"></div>
                    </div>
                    <a href="">Lupa Kata Sandi?</a>
                    <div class="text-center">
                      <button class="btn" type="submit">Masuk</button>
                    </div>
                  </form>
                </div>
              </div>
              <div class="aside col-6 d-none d-xl-block" style="background: url('{{asset('images/pages/auth/background.png')}}')  no-repeat" ></div>
            </div>
          </section>
          <script src="{{asset('libraries/jquery/jquery.min.js')}}"></script>
          <script src="{{asset('libraries/bootstrap/bootstrap.min.js')}}"></script>
    </body>
</html>
