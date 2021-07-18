<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<!--CSS-->
<style>
    .container{
        width: 50%;
        margin-top: 15%;
        box-shadow: 0 3px 20px rgba(0,0,0,0.3);
    }
</style>

<!--Membuat Navabar-->
  <nav class="navbar fixed-top navbar-expand-sm navbar-dark bg-dark">
    <a class="navbar-brand pl-5" href="/">Nibras.com</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ml-auto">
        <a href="<?= url('/') ?>" class="btn btn-secondary  mt-2 mb-2">Log-out</a>
      </div>
    </div>
  </nav>
<!--Akhir-->
<!--Membuat Transaction-->
<div class="container">
    <h4 class="d-block p-2 bg-secondary text-white text-center mt-3 mb-4">Transaksi</h4>
    <form action="{{ route('transaction') }}" method="POST">
        <div class="form-group">
          <label for="exampleFormControlInput1">Id</label>
          <input type="name_item" class="form-control" id="exampleFormControlInput1" placeholder="">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Nama Barang</label>
          <input type="name_item" class="form-control" id="exampleFormControlInput1" placeholder="">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Jumlah Barang</label>
            <input type="jumlah" class="form-control" id="exampleFormControlInput1" placeholder="">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Harga</label>
            <input type="harga" class="form-control" id="exampleFormControlInput1" placeholder="">
        </div>
        <button type="submit" class="btn btn-secondary mb-3">Submit</button>
    </form>
</div>
<!--Akhir-->
</body>
</html>