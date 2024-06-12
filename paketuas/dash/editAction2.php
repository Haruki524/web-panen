<?php
// Include the database connection file
require_once("dbConnection.php");

if (isset($_POST['update'])) {
	// Escape special characters in a string for use in an SQL statement
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$nama = mysqli_real_escape_string($mysqli, $_POST['nama']);
	$terjual = mysqli_real_escape_string($mysqli, $_POST['terjual']);
	$tersedia = mysqli_real_escape_string($mysqli, $_POST['tersedia']);
	$penghasilan = mysqli_real_escape_string($mysqli, $_POST['penghasilan']);
	$waktu = mysqli_real_escape_string($mysqli, $_POST['waktu']);	
	
	// Check for empty fields
	if (empty($id) || empty($nama) || empty($terjual) || empty($tersedia) || empty($penghasilan) || empty($waktu)) {
		if (empty($id)) {
			echo "<font color='red'>Kolom id masih kosong.</font><br/>";
		}
		
		if (empty($nama)) {
			echo "<font color='red'>Kolom nama masih kosong.</font><br/>";
		}
		
		if (empty($terjual)) {
			echo "<font color='red'>Kolom Terjual masih kosong.</font><br/>";
		}

		if (empty($tersedia)) {
			echo "<font color='red'>Kolom Tersedia masih kosong.</font><br/>";
		}

		if (empty($penghasilan)) {
			echo "<font color='red'>Kolom Penghasilan masih kosong.</font><br/>";
		}
		if (empty($waktu)) {
			echo "<font color='red'>Kolom Waktu masih kosong.</font><br/>";
		}

	} else {
		// Update the database table
		$result = mysqli_query($mysqli, "UPDATE tabel_penjualan SET `id` = '$id', `nama` = '$nama', `terjual` = '$terjual', `tersedia` = '$tersedia', `penghasilan` = '$penghasilan', `waktu` = '$waktu' WHERE `id` = $id");
		
		// Display success message
		echo "<script>
		alert('Data berhasil di tambahkan')
		document.location.href='dashPenjualan.php'
		</script>";
	}
}
?>