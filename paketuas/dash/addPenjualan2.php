<html>
<head>
	<title>Add Data</title>
	<style>
		body{
			background-image: url(https://i.ytimg.com/vi/tx36EyQNXpI/maxresdefault.jpg);
			background-attachment: fixed;
			background-position: center;
		}
		.kotak{
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
	<div class="kotak">
	<h2>Add Data</h2>
	<p>
		<a href="dashPenjualan.php">Home</a>
	</p>
	<form action="addAction2.php" method="post" name="add">
		<table width="50%" border="0">
			<tr>
				<td>Id</td>
				<td><input type="text" name="id"></td>
			</tr>
			<tr> 
				<td>Nama Tanaman</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr> 
				<td>Jumlah Terjual</td>
				<td><input type="text" name="terjual"></td>
			</tr>
			<tr> 
				<td>Stok Tersedia</td>
				<td><input type="text" name="tersedia"></td>
			</tr>
			<tr> 
				<td>Penghasilan</td>
				<td><input type="text" name="penghasilan"></td>
			</tr>
            <tr> 
				<td>Waktu Penjualan</td>
				<td><input type="text" name="waktu"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="submit" value="Add"></td>
			</tr>
		</table>
	</form>
	</div>
</center></body>
</html>