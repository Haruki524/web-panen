<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
// Include the database connection file
require_once("dbConnection.php");

if (isset($_POST['submit'])) {
	// Escape special characters in string for use in SQL statement	
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$nama = mysqli_real_escape_string($mysqli, $_POST['nama']);
	$hasil = mysqli_real_escape_string($mysqli, $_POST['hasil']);
	$lama = mysqli_real_escape_string($mysqli, $_POST['lama']);
	$tanggal = mysqli_real_escape_string($mysqli, $_POST['tanggal']);
		
	// Check for empty fields
	if (empty($id) || empty($nama) || empty($hasil) || empty($lama) || empty($tanggal)) {
		if (empty($id)) {
			echo "<font color='red'>Kolom Id masih kosong.</font><br/>";
		}
		
		if (empty($nama)) {
			echo "<font color='red'>Kolom Nama masih kosong.</font><br/>";
		}
		
		if (empty($hasil)) {
			echo "<font color='red'>Kolom Hasil masih kosong.</font><br/>";
		}

		if (empty($lama)) {
			echo "<font color='red'>Kolom Lama masih kosong.</font><br/>";
		}

		if (empty($tanggal)) {
			echo "<font color='red'>Kolom Tanggal masih kosong.</font><br/>";
		}
		
		// Show link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// If all the fields are filled (not empty) 

		// Insert data into database
		$result = mysqli_query($mysqli, "INSERT INTO tabel_panen (`id`, `nama_tanaman`, `hasil_panen`, `lama_tanam`, `tanggal_panen`) VALUES ('$id', '$nama', '$hasil', '$lama', '$tanggal')");
		
		// Display success message
		echo "<script>
		alert('Data berhasil di tambahkan')
		document.location.href='dashboard.php'
		</script>";
	}
}
?>
</body>
</html>
