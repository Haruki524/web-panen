<?php
error_reporting(0);
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login1.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backend</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
      body{
        background-color: aquamarine;
      }
      .container{
        margin: 0 auto;
        max-width: 800px;
        padding:20px;
        background-color: #fff;
        position: center;
        float: top;
      }
      .card{
        position: relative;
        top: 0px;
        left: 360px;
        height: 200px;
        weight:100px;
        background-color: yellow;
        border-style: solid;
        border-color: black;
        border: 30px;
        border-radius: 20px;
        margin-top: 100px;
      }
      .card2{
        position: relative;
        top: -240px;
        left: 800px;
        height: 200px;
        weight:100px;
        background-color: yellow;
        border: 30px;
        border-radius: 20px;
        border-color: black;
        margin-left: 400px;
        margin-top: 100px;
      }
      .card-body{
        text-align: center;
      }
      .btn-primary{
        border: 20px;
        border-radius: 10px;
        margin-top: 10px;
      }
    </style>
</head>
<body>
<div class="collapse" id="navbarToggleExternalContent">
  <div class="bg-dark p-4">
  <div class="d-grid gap-2">
  <a class="btn btn-primary" type="button" href="#">Home</a>
  <a class="btn btn-primary" type="button" href="/paketuas/dash/dashboard.php">Panen</a>
  <a class="btn btn-primary" type="button" href="/paketuas/dash/dashPenjualan.php">Penjualan</a>
  <a class="btn btn-primary" type="button" href="/paketuas/feed/formfeed.php">Feedback</a>
  <a class="btn btn-primary" type="button" href="/paketuas/dash/logout.php">Log Out!</a>
</div>
<h5 class="text-white h4">Kelompok 8</h5>
  </div>
</div>
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>

<div class="container">
  <div class="alert alert-success" role="alert">
    <?php echo $_SESSION['pesan']; ?>
  </div><center>
  <h3><?php echo $_SESSION['username']; ?></h3>
  <h4>SELAMAT DATANG <?php echo $_SESSION['firstname'];?></h4>
  <br/>
  <a href="/paketuas/dash/logout.php" class="btn btn-primary">Logout</a></center>
</div>
<br/>
<table class="table">
<div class="card" style="width: 18rem; bottom; margin: 40px;">
  <div class="card-body">
    <h2 class="card-title">Hasil panen</h2>
    <hr>
    <p class="card-text">Pergi ke data panen?</p>
    <a href="/paketuas/dash/dashboard.php" class="btn btn-primary">Click Here!</a>
  </div>
</div>
<div class="card2" style="width: 18rem; bottom; margin: 40px;">
  <div class="card-body">
    <h2 class="card-title">Penjualan</h2>
    <hr>
    <p class="card-text">Pergi ke data penjualan?</p>
    <a href="/paketuas/dash/dashPenjualan.php" class="btn btn-primary">Click Here!</a>
  </div>
</div>
</table>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>