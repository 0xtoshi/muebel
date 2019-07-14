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
    

html{

  overflow-x: hidden;
}
.login-form
{
    padding-top: 5rem;
    padding-bottom: 29rem;
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

                     <form class="form-horizontal" role="form">
                      <div class="row">
                          <div class="col-lg-6">
                              <!-- Text input-->
                              <div class="form-group">
                                  <label class="control-label" for="textinput">Line 1</label>
                                  <input type="text" placeholder="Address Line 1" class="form-control">
                              </div>
                              <!-- Text input-->
                              <div class="form-group">
                                  <label class="control-label" for="textinput">Line 2</label>
                                  <input type="text" placeholder="Address Line 2" class="form-control">
                              </div>

                              <!-- Text input-->
                              <div class="form-group">
                                  <label class="control-label" for="textinput">City</label>
                                  <input type="text" placeholder="City" class="form-control">
                              </div>
                              <!-- Text input-->
                              <div class="row">
                                  <div class="col-lg-6">
                                      <div class="form-group">
                                          <label class="control-label" for="textinput">State</label>
                                          <input type="text" placeholder="State" class="form-control">
                                      </div>
                                  </div>
                                  <div class="col-lg-6">
                                      <div class="form-group">
                                          <label class="control-label" for="textinput">Postcode</label>
                                          <input type="text" placeholder="Post Code" class="form-control">
                                      </div>
                                  </div>
                              </div>

                              <div class="form-group">
                                  <label class="control-label" for="textinput">Country</label>
                                  <input type="text" placeholder="Country" class="form-control">
                              </div>
                          </div>
                          <div class="col-lg-6">
                              <div class="form-group">
                                  <label class="control-label">Email to:</label>
                                  <input type="text" class="form-control" placeholder="abc@gmail.com" />
                              </div>
                              <div class="form-group">
                                  <label class="control-label">Subject:</label>
                                  <input type="text" class="form-control" placeholder="Leave" />
                              </div>
                              <div class="form-group">
                                  <label class="control-label">Message:</label>
                                  <textarea rows="8" class="form-control"></textarea>
                              </div>
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="text-center">
                              
                              <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
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
