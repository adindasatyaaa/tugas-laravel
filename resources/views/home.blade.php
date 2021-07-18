<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NIBRAS.COM</title>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body class="mt-5">

<!--membuat Navbar-->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
    <a class="navbar-brand" href="">Nibras.com</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ml-auto">
        <a href="<?= url('register') ?>" class="btn btn-secondary  mt-2 mb-2 mr-2 ml-2">Register</a>
        <a href="<?= route('auth') ?>" class="btn btn-secondary mt-2 mb-2 mr-2 ml-2">Log-in</a>
      </div>
    </div>
    </div>
  </nav>
<!--Akhir-->

<!--membuat GAMBAR(JUMBOTRON)-->
  <div class="jumbotron jumbotron-fluid">
    <div class="container text-center">
      <img src="../public/img tugas pkl 1/logo.png" width="40%"">
      <h2 class="display-4">Nibras</h2>
      <p class="lead">Gamis Branded by Nibras.</p>
    </div>
  </div>
<!--akhir-->
<!--membuat card (konten)-->
  <div class="container pt-2 d-flex justify-content-center">
  <div class="row">
    <div class="col-sm text-center .col-none .col-sm-block .col-md-none">
      <img class="card-img-top" src="../public/img tugas pkl 1/nk71.jpg" alt="Card image cap">
    </div>
    <div class="col-sm text-center .d-none .d-sm-block .d-md-none d-flex">
      <div class="card-body ">
        <h3 class="card-title">NK 071</h3>
        <h5 class="card-text pt-2">Detail Produk : Full kancing dan Saku depan</h5>
        <a href="#" class="btn btn-primary mt-3 pr-5 pl-5">Beli</a>
      </div>
    </div>
  </div>
  </div>

  <div class="row pt-5">
  <div class="col-sm text-center">
    <div class="card-body">
      <h3 class="card-title">NM 11</h3>
      <h5 class="card-text pt-2">Detail Produk : Panjang depan 115cm, Panjang Belakang 130cm, Panjang rok 120cm, Lebar rok 78cm</h5>
      <a href="#" class="btn btn-primary mt-3 pr-5 pl-5">Beli</a>
    </div>
  </div>
    <div class="col-sm text-center mr-5 mb-3">
      <img class="card-img-top" src="../public/img tugas pkl 1/nm11.jpg" alt="Card image cap">
    </div> 
  </div>
  </div>
<!--Akhir-->

<!--membuat Card ke 2 (3 baris)-->
<div class="container justify-content-center">
    <div class="row justify-content-sm-center">
      <div class="col-sm text-center">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="../public/img tugas pkl 1/hijab.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">KASIBAH SQUARE</h5>
            <p class="card-text">Kesesuaian foto dan asli 90-100% dipengaruhi faktor cahaya pemotretan editing dan resolusi cahaya hp masing-masing.< /p>
            <a href="#" class="btn btn-primary mt-3 pr-5 pl-5">Beli</a>
          </div>
        </div>
      </div>
      <div class="col-sm text-center">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="../public/img tugas pkl 1/NS.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">NSK 86 & NS 76</h5>
            <p class="card-text">Kesesuaian foto dan asli 90-100% dipengaruhi faktor cahaya pemotretan editing dan resolusi cahaya hp masing-masing.</p>
            <a href="#" class="btn btn-primary pr-5 pl-5">Beli</a>
          </div>
        </div>
      </div>
      <div class="col-sm text-center">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="../public/img tugas pkl 1/nbb16.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">NB B16</h5>
            <p class="card-text">Kesesuaian foto dan asli 90-100% dipengaruhi faktor cahaya pemotretan editing dan resolusi cahaya hp masing-masing.</p>
            <a href="#" class="btn btn-primary pr-5 pl-5">Beli</a>
          </div>
        </div>
      </div>
    </div>
<!--Akhir-->

<!--membuat Card (2 baris)-->
  <div class="row justify-content-center">
    <div class="col-sm">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="../public/img tugas pkl 1/KOKO.jpg" alt="Card image cap">
        <div class="card-body text-center">
          <h5 class="card-title">CARINA KOKO ANAK</h5>
          <p class="card-text">Kesesuaian foto dan asli 90-100% dipengaruhi faktor cahaya pemotretan editing dan resolusi cahaya hp masing-masing.</p>
          <a href="#" class="btn btn-primary pr-5 pl-5">Beli</a>
        </div>
      </div>
    </div>
    <div class="col-sm">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="../public/img tugas pkl 1/gamis anak.jpg" alt="Card image cap">
        <div class="card-body text-center">
          <h5 class="card-title">GAMIS ANAK</h5>
          <p class="card-text">Kesesuaian foto dan asli 90-100% dipengaruhi faktor cahaya pemotretan editing dan resolusi cahaya hp masing-masing.</p>
          <a href="#" class="btn btn-primary pr-5 pl-5">Beli</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Akhir-->

<!--membuat footer-->
<footer class="bg-dark text-white mt-3">
  <div class="countainer">
      <div class="row">
          <div class="col text-center pt-2">
              <p>Copyright2020.</p>
          </div>
      </div>
  </div>
</footer>
<!--Akhir-->
</body>
</html>