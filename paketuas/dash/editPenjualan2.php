<?php
// Include the database connection file
require_once("dbConnection.php");

// Get id from URL parameter
$id = $_GET['id'];

// Select data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM tabel_penjualan WHERE id = $id");

// Fetch the next row of a result set as an associative array
$resultData = mysqli_fetch_assoc($result);

$id = $resultData['id'];
$nama = $resultData['nama'];
$terjual = $resultData['terjual'];
$tersedia = $resultData['tersedia'];
$penghasilan = $resultData['penghasilan'];
$waktu = $resultData['waktu'];
?>
<html>
<head>	
	<title>Edit Data</title>
	<style>
		body{
			background-image: url(https://i.ytimg.com/vi/tx36EyQNXpI/maxresdefault.jpg);
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
	<div class="border">
	<center>
    <h2>Edit Data</h2>
    <p>
	    <a href="dashPenjualan.php">Home</a>
    </p>
	
	<form name="edit" method="post" action="editAction2.php">
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
				<td>Jumlah Terjual</td>
				<td><input type="text" name="terjual" value="<?php echo $terjual; ?>"></td>
			</tr>
			<tr> 
				<td>Stok Tersedia</td>
				<td><input type="text" name="tersedia" value="<?php echo $tersedia; ?>"></td>
			</tr>
			<tr> 
				<td>Penghasilan</td>
				<td><input type="text" name="penghasilan" value="<?php echo $penghasilan; ?>"></td>
			</tr>
			<tr> 
				<td>Waktu Penjualan</td>
				<td><input type="text" name="waktu" value="<?php echo $waktu; ?>"></td>
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
