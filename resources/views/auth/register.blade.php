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
        <header>
            <div
              class="container py-3 d-flex align-items-center justify-content-between"
            >
              <label class="switch btn-switch ml-auto">
                <input
                  type="checkbox"
                  name="color_mode"
                  id="color_mode"
                  value="1"
                  checked
                  onchange="changeForm()"
                />
                <label
                  for="color_mode"
                  data-investor="Investor"
                  data-peminjam="Beneficiary"
                  class="btn-switch-inner"
                ></label>
              </label>
            </div>
          </header>
          <main class="register">
            <div class="auth container d-flex align-items-center flex-column">
              <h1 class="card-title py-3">
                Anda Mendaftar Sebagai <span id="type">Investor</span>
              </h1>
              <form action="{{route('register.investor')}}" method="POST" class="w-100" id="investor-form">
                @csrf
                <div class="row">
                  <div class="col-lg-6 col-md-12">
                    <div class="form-group">
                      <label for="username">Username</label>
                      <input type="text" class="form-control" id="username" name="username" />
                      <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                      <label for="nama">Nama Lengkap</label>
                      <input type="text" class="form-control" id="nama" name="fullname" />
                      <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" id="email" name="email" />
                      <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                      <label for="pass">Password</label>
                      <input type="password" class="form-control" id="pass" name="password" />
                      <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                      <label for="confirm">Confirm Password</label>
                      <input type="password" class="form-control" id="confirm" name="confirm" />
                      <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                      <label for="jenis-kelamin">Gender</label>
                      <select id="jenis-kelamin" class="form-control" name="gender">
                        <option selected disabled>Choose</option>
                        <option value="Laki-laki">Male</option>
                        <option value="Perempuan">Female</option>
                      </select>
                      <div class="invalid-feedback"></div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-12">
                    <div class="form-group">
                      <label for="telp">Phone Number</label>
                      <input type="tel" class="form-control" id="telp" name="phone" />
                      <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                      <label for="tempat-lahir">Birth Place</label>
                      <input type="text" class="form-control" id="tempat-lahir" name="placeofbirth" />
                      <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                      <label for="tanggal-lahir">Birth Date</label>
                      <input type="date" class="form-control" id="tanggal-lahir" name="dateofbirth" />
                      <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                      <label for="alamat">Address</label>
                      <input type="text" class="form-control" id="alamat" name="address" />
                      <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                      <label for="bank">Bank Name</label>
                      <input type="text" class="form-control" id="bank" name="bankname" />
                      <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                      <label for="norek">Bank Account Rekening</label>
                      <input type="number" class="form-control" id="norek" name="accnumber" />
                      <div class="invalid-feedback"></div>
                    </div>
                  </div>
                </div>
                <div class="text-center">
                  <button class="btn mb-5" type="submit">Masuk</button>
                </div>
              </form>
              <form action="{{route('register.beneficiary')}}" method="POST" class="w-100" id="peminjam-form">
                @csrf
                <div class="row">
                  <div class="col-lg-4 col-md-12">
                    <div class="form-group">
                      <label for="username">Username</label>
                      <input type="text" class="form-control" id="username" name="username" />
                      <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                      <label for="nama">Nama Lengkap</label>
                      <input type="text" class="form-control" id="nama" name="fullname"/>
                      <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" id="email" name="email" />
                      <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                      <label for="pass">Password</label>
                      <input type="password" class="form-control" id="pass" name="password" />
                      <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                      <label for="confirm">Confirm Password</label>
                      <input type="password" class="form-control" id="confirm" name="confirm"/>
                      <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                      <label for="jenis-kelamin">Gender</label>
                      <select id="jenis-kelamin" class="form-control" name="gender">
                        <option selected disabled>Choose</option>
                        <option value="Laki-laki">Male</option>
                        <option value="Perempuan">Female</option>
                      </select>
                      <div class="invalid-feedback"></div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-12">
                    <div class="form-group">
                      <label for="telp">Phone Number</label>
                      <input type="tel" class="form-control" id="telp" name="phone"/>
                      <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                      <label for="tempat-lahir">Birth Place</label>
                      <input type="text" class="form-control" id="tempat-lahir" name="placeofbirth" />
                      <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                      <label for="tanggal-lahir">Birth Date</label>
                      <input type="date" class="form-control" id="tanggal-lahir" name="dateofbirth" />
                      <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                      <label for="alamat">Address</label>
                      <input type="text" class="form-control" id="alamat"  name="address"/>
                      <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                      <label for="bank">Bank Name</label>
                      <input type="text" class="form-control" id="bank" name="bankname"/>
                      <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                      <label for="norek">Bank Account Rekening</label>
                      <input type="number" class="form-control" id="norek" name="accnumber" />
                      <div class="invalid-feedback"></div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-12">
                    <div class="form-group">
                      <label for="desc">Business Description</label>
                      <input type="text" class="form-control" id="desc" name="businessdesc" />
                      <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                      <label for="busaddress">Business Address</label>
                      <input type="text" id="busaddress" class="form-control" name="businessadd" />
                      <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                      <label for="file">Business Picture</label>
                      <input type="file" id="file" class="form-control" name="businesspic"/>
                      <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                      <label for="gross">Gross Income</label>
                      <input type="number" id="gross" class="form-control" name="grossincome" />
                      <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                      <label for="net">Net Income</label>
                      <input type="number" id="net" class="form-control" name="netincome"/>
                      <div class="invalid-feedback"></div>
                    </div>
                  </div>
                </div>
                <div class="text-center">
                  <button class="btn mb-5" type="submit">Masuk</button>
                </div>
              </form>
            </div>
          </main>
          <script src="{{asset('libraries/jquery/jquery.min.js')}}"></script>
          <script src="{{asset('libraries/bootstrap/bootstrap.min.js')}}"></script>
          <script src="{{asset('js/auth.js')}}"></script>
    </body>
</html>
