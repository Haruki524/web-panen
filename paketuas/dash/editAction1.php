<?php
// Include the database connection file
require_once("dbConnection.php");

if (isset($_POST['update'])) {
	// Escape special characters in a string for use in an SQL statement
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$nama = mysqli_real_escape_string($mysqli, $_POST['nama']);
	$hasil = mysqli_real_escape_string($mysqli, $_POST['hasil']);
	$lama = mysqli_real_escape_string($mysqli, $_POST['lama']);
	$tanggal = mysqli_real_escape_string($mysqli, $_POST['tanggal']);	
	
	// Check for empty fields
	if (empty($id) || empty($nama) || empty($hasil) || empty($lama) || empty($tanggal)) {
		if (empty($id)) {
			echo "<font color='red'>Kolom id masih kosong.</font><br/>";
		}
		
		if (empty($nama)) {
			echo "<font color='red'>Kolom nama masih kosong.</font><br/>";
		}
		
		if (empty($hasil)) {
			echo "<font color='red'>Kolom hasil masih kosong.</font><br/>";
		}

		if (empty($lama)) {
			echo "<font color='red'>Kolom lama masih kosong.</font><br/>";
		}

		if (empty($tanggal)) {
			echo "<font color='red'>Kolom tanggal masih kosong.</font><br/>";
		}

	} else {
		// Update the database table
		$result = mysqli_query($mysqli, "UPDATE tabel_panen SET `id` = '$id', `nama_tanaman` = '$nama', `hasil_panen` = '$hasil', `lama_tanam` = '$lama', `tanggal_panen` = '$tanggal' WHERE `id` = $id");
		
		// Display success message
		echo "<script>
		alert('Data berhasil di tambahkan')
		document.location.href='dashboard.php'
		</script>";
	}
}
?>