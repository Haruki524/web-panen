<html>
<head>
	<title>Add Data 2</title>
</head>

<body>
<?php
// Include the database connection file
require_once("dbConnection.php");

if (isset($_POST['submit'])) {
	// Escape special characters in string for use in SQL statement	
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$nama = mysqli_real_escape_string($mysqli, $_POST['nama']);
	$terjual = mysqli_real_escape_string($mysqli, $_POST['terjual']);
	$tersedia = mysqli_real_escape_string($mysqli, $_POST['tersedia']);
	$penghasilan = mysqli_real_escape_string($mysqli, $_POST['penghasilan']);
	$waktu = mysqli_real_escape_string($mysqli, $_POST['waktu']);
		
	// Check for empty fields
	if (empty($id) || empty($nama) || empty($terjual) || empty($tersedia) || empty($penghasilan) || empty($waktu)) {
		if (empty($id)) {
			echo "<font color='yellow'>Kolom Id masih kosong.</font><br/>";
		}
		
		if (empty($nama)) {
			echo "<font color='yellow'>Kolom Nama masih kosong.</font><br/>";
		}
		
		if (empty($terjual)) {
			echo "<font color='yellow'>Kolom Terjual masih kosong.</font><br/>";
		}

		if (empty($tersedia)) {
			echo "<font color='yellow'>Kolom Tersedia masih kosong.</font><br/>";
		}

		if (empty($penghasilan)) {
			echo "<font color='yellow'>Kolom Penghasilan masih kosong.</font><br/>";
		}
		if (empty($waktu)) {
			echo "<font color='yellow'>Kolom Waktu masih kosong.</font><br/>";
		}
		
		// Show link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// If all the fields are filled (not empty) 

		// Insert data into database
		$result = mysqli_query($mysqli, "INSERT INTO tabel_penjualan (`id`, `nama`, `terjual`, `tersedia`, `penghasilan`, `waktu`) VALUES ('$id', '$nama', '$terjual', '$tersedia', '$penghasilan', '$waktu')");
		
		// Display success message
		echo "<script>
		alert('Data berhasil di tambahkan')
		document.location.href='dashPenjualan.php'
		</script>";
		
	}
}
?>
</body>
</html>
