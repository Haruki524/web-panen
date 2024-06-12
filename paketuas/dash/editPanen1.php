<?php
// Include the database connection file
require_once("dbConnection.php");

// Get id from URL parameter
$id = $_GET['id'];

// Select data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM tabel_panen WHERE id = $id");

// Fetch the next row of a result set as an associative array
$resultData = mysqli_fetch_assoc($result);

$id = $resultData['id'];
$nama = $resultData['nama_tanaman'];
$hasil = $resultData['hasil_panen'];
$lama = $resultData['lama_tanam'];
$tanggal = $resultData['tanggal_panen'];
?>
<html>
<head>	
	<title>Edit Data</title>
	<style>
		body{
			background-image: url(https://i.ytimg.com/vi/lCFzp-DDCwM/maxresdefault.jpg);
			background-attachment: fixed;
			background-position: center;
		}
		.border{
			background-color: lightblue;
			background-repeat: no-repeat;
  			background-position: center top;
  			background-attachment: fixed;
			width: 550px;
    		margin: 20px auto;
    		border: 5px solid white;
    		padding: 10px 5px;
			border: 40px;
			border-radius: 20px;
		}
	</style>
</head>

<body>
	<center>
	<div class="border">
    <h2>Edit Data</h2>
    <p>
	    <a href="dashboard.php">Home</a>
    </p>
	
	<form name="edit" method="post" action="editAction1.php">
		<table border="0">
			<tr> 
				<td>Id</td>
				<td><input type="text" name="id" value="<?php echo $id; ?>"></td>
			</tr>
			<tr> 
				<td>Nama Tanaman</td>
				<td><input type="text" name="nama" value="<?php echo $nama; ?>"></td>
			</tr>
			<tr> 
				<td>Hasil Panen</td>
				<td><input type="text" name="hasil" value="<?php echo $hasil; ?>"></td>
			</tr>
			<tr> 
				<td>Lama Tanam</td>
				<td><input type="text" name="lama" value="<?php echo $lama; ?>"></td>
			</tr>
			<tr> 
				<td>Tanggal Panen</td>
				<td><input type="text" name="tanggal" value="<?php echo $tanggal; ?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $id; ?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
	</center>
</div>
</body>
</html>
