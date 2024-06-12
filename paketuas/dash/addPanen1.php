<html>
<head>
	<title>Add Data</title>
	<style>
		body{
			background-image: url(https://i.ytimg.com/vi/lCFzp-DDCwM/maxresdefault.jpg);
			background-attachment: fixed;
			background-position: center;
		}
		.container{
			background-color: lightblue;
			background-repeat: no-repeat;
  			background-position: center top;
  			background-attachment: fixed;
			width: 500px;
			height: 300px;
    		margin: 20px auto;
    		border: 5px solid white;
    		padding: 10px 5px;
			border: 40px;
			border-radius: 20px;
			text-align: center;
		}
		.add{
			length:
		}
	</style>
</head>

<body>
	<div class="container">
	<h2>Add Data</h2>
	<p>
		<a href="dashboard.php">Home</a>
	</p>
	<center>
	<form action="addAction1.php" method="post" name="add">
		<table width="60%" border="0%">
			<tr>
				<td>Id</td>
				<td><input type="text" name="id"></td>
			</tr>
			<tr> 
				<td>Nama Tanaman</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr> 
				<td>Hasil Panen</td>
				<td><input type="text" name="hasil"></td>
			</tr>
			<tr> 
				<td>Lama Tanam</td>
				<td><input type="text" name="lama"></td>
			</tr>
			<tr> 
				<td>Tanggal Panen</td>
				<td><input type="text" name="tanggal"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="submit" value="Add"></td>
			</tr>
		</table>
	</form>
	</center>
	</div>
</body>
</html>