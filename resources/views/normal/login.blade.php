<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login Ke Akun</title>

  <!-- Bootstrap core CSS -->
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/font/css/open-iconic-bootstrap.css" rel="stylesheet">

  <style type="text/css">
    
   .my-form .row
{
    margin-left: 0;
    margin-right: 0;
}

.login-form
{
    padding-top: 5rem;
    padding-bottom: 29rem;
}

.login-form .row
{
    margin-left: 0;
    margin-right: 0;
}
  </style>


  <!-- Custom styles for this template -->
  <link href="/css/shop-homepage.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#"><span class="oi oi-layers"></span> {{ $data['judul'] }}</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item ">
            <a class="nav-link" href="#"><span class="oi oi-home"></span> Beranda
              
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><span class="oi oi-grid-two-up"></span> Produk</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><span class="oi oi-cart"></span> Keranjang</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#"><span class="oi oi-person"></span> Akun</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><span class="oi oi-aperture"></span> Pusat Bantuan</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Masuk Sebagai Pelanggan</div>
                    <div class="card-body">
                        <form action="" method="">
                            <div class="form-group row">
                                <label for="email_address" class="col-md-4 col-form-label text-md-right">Alamat E-Mail</label>
                                <div class="col-md-6">
                                    <input type="text" id="email_address" class="form-control" name="email-address" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Kata Sandi</label>
                                <div class="col-md-6">
                                    <input type="password" id="password" class="form-control" name="password" required>
                                </div>
                            </div>

                            

                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Masuk
                                </button>
                                
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

</main>


  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="/vendor/jquery/jquery.min.js"></script>
  <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
