<?php
// Include the database connection file
require_once("dbConnection.php");

// Fetch data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM tabel_panen ORDER BY id DESC");
?>

<html>
<head>	
	<title>Hasil Panen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<div class="collapse" id="navbarToggleExternalContent">
  		<div class="bg-dark p-4">
  		<div class="d-grid gap-2">
  		<a class="btn btn-primary" type="button" href="/paketuas/formlogin/login2.php">Home</a>
  		<a class="btn btn-primary" type="button" href="#">Panen</a>
  		<a class="btn btn-primary" type="button" href="dashPenjualan.php">Penjualan</a>
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

	<center><h2>Hasil Panen</h2>
	<p>
		<a class="btn btn-primary" href="addPanen1.php">Add New Data</a>
	</p>
	<table class="table table-striped-columns"width='80%' border=0>
		<tr bgcolor='#DDDDDD'>
			<td><strong>id</strong></td>
			<td><strong>Nama tanaman</strong></td>
			<td><strong>Hasil panen</strong></td>
			<td><strong>Lama tanam</strong></td>
			<td><strong>Tanggal panen</strong></td>
		</tr>
		<?php
		// Fetch the next row of a result set as an associative array
		while ($res = mysqli_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td>".$res['id']."</td>";
			echo "<td>".$res['nama_tanaman']."</td>";
			echo "<td>".$res['hasil_panen']."</td>";
			echo "<td>".$res['lama_tanam']."</td>";
			echo "<td>".$res['tanggal_panen']."</td>";	
			echo "<td><a href=\"editPanen1.php?id=$res[id]\">Edit</a> | 
			<a href=\"delete1.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
		}
		?>
	</table></center>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>