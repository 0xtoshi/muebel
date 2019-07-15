<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Pendaftaran Pelanggan {{ $data['judul'] }}</title>

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
    padding-bottom: 4rem;
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
                    <div class="card-header">Formulir Pendaftaran Pelanggan</div>
                    <div class="card-body">

                     <div id="alert"></div> 

                     <form method="" action="" id="daftar" class="form-horizontal" role="form">
                      <div class="row">
                          <div class="col-lg-12">
                              <!-- Text input-->
                              <div class="form-group">
                                  <label class="control-label" for="textinput">Nama Lengkap</label>
                                  <input type="text" placeholder="Nama Lengkap" name="nama" class="form-control">
                              </div>
                              <!-- Text input-->
                              <div class="form-group">
                                  <label class="control-label" for="textinput">Alamat Lengkap</label>
                                  <input type="text" placeholder="Alamat Lengkap" name="alamat" class="form-control">
                              </div>

                              <!-- Text input-->
                              <div class="form-group">
                                  <label class="control-label" for="textinput">Kota / Kabupaten</label>
                                  <input type="text" placeholder="Kota / Kabupaten" name="kota" class="form-control">
                              </div>
                              <!-- Text input-->
                              <div class="row">
                                  <div class="col-lg-6">
                                      <div class="form-group">
                                          <label class="control-label" for="textinput">Provinsi</label>
                                          <input type="text" placeholder="Provinsi" name="provinsi" class="form-control">
                                      </div>
                                  </div>
                                  <div class="col-lg-6">
                                      <div class="form-group">
                                          <label class="control-label" for="textinput">Kode Pos</label>
                                          <input type="number" placeholder="Post Code" name="kodepos" class="form-control">
                                      </div>
                                  </div>
                              </div>

                              <div class="row">
                                  <div class="col-lg-6">
                                      <div class="form-group">
                                          <label class="control-label" for="textinput">Nomor Telepon</label>
                                          <input type="number" placeholder="Nomor Telepon" name="nomor_telepon" class="form-control">
                                      </div>
                                  </div>
                                  <div class="col-lg-6">
                                      <div class="form-group">
                                          <label class="control-label" for="textinput">Email</label>
                                          <input type="text" placeholder="Email" name="email" class="form-control">
                                      </div>
                                  </div>
                              </div>

                              <div class="row">
                                  <div class="col-lg-6">
                                      <div class="form-group">
                                          <label class="control-label" for="textinput">Password</label>
                                          <input type="password" placeholder="Password" name="password" class="form-control">
                                      </div>
                                  </div>
                                  
                              </div>

                          </div>
                          
                      </div>

                      <div class="form-group">
                          <div>
                              
                              <button type="submit" class="btn btn-lg btn-primary"><i class="fa fa-save"></i> Daftar</button>
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
  <script type="text/javascript">
    
  $('#daftar').submit(function(e){

  e.preventDefault();
  var form = $('#daftar').serialize();

  $.ajax({

    url : '/pelanggan/daftar',
    type : 'POST',
    data : form,
    success : function(data){

      var decode = data;
      if( decode.success ){

        $('div[id=alert]').html(`
          <div class="alert alert-success" role="alert">
          `+data.messages+`
          </div>`);

      }else{
        
        $('div[id=alert]').html(`
          <div class="alert alert-danger" role="alert">
          `+data.messages+`
          </div>`);
      }

    },
    error : function()
    {

      console.log(data);

    }


  });

  });

  </script>

</body>

</html>
