<?php
// Include the database connection file
require_once("dbConnection.php");

// Fetch data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM tabel_penjualan ORDER BY id DESC");
?>

<html>
<head>	
	<title>Penjualan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="collapse" id="navbarToggleExternalContent">
  <div class="bg-dark p-4">
  <div class="d-grid gap-2">
  <a class="btn btn-primary" type="button" href="/paketuas/formlogin/login2.php">Home</a>
  <a class="btn btn-primary" type="button" href="dashboard.php">Panen</a>
  <a class="btn btn-primary" type="button" href="#">Penjualan</a>
  <a class="btn btn-primary" type="button" href="#">Feedback</a>
  <a class="btn btn-primary" type="button" href="logout.php">Log Out!</a>
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
	<center><h2>Penjualan</h2>
	<p>
		<a class="btn btn-primary" href="addPenjualan2.php">Add New Data</a>
	</p>
	<table class="table table-striped-columns"width='80%' border=0>
		<tr bgcolor='#DDDDDD'>
			<td><strong>Id</strong></td>
			<td><strong>Nama tanaman</strong></td>
			<td><strong>Total Terjual</strong></td>
			<td><strong>Jumlah Tersedia</strong></td>
			<td><strong>Penghasilan</strong></td>
            <td><strong>Waktu Penjualan</strong></td>
		</tr>
		<?php
		// Fetch the next row of a result set as an associative array
		while ($res = mysqli_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td>".$res['id']."</td>";
			echo "<td>".$res['nama']."</td>";
			echo "<td>".$res['terjual']."</td>";
			echo "<td>".$res['tersedia']."</td>";
			echo "<td>".$res['penghasilan']."</td>";
			echo "<td>".$res['waktu']."</td>";	
			echo "<td><a href=\"editPenjualan2.php?id=$res[id]\">Edit</a> | 
			<a href=\"delete2.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
		}
		?>
	</table></center>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>