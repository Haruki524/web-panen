<?php
// Include the database connection file
require_once("dbConnection.php");

// Get id parameter value from URL
$id = $_GET['id'];

// Delete row from the database table
$result = mysqli_query($mysqli, "DELETE FROM tabel_panen WHERE id = $id");

// Redirect to the main display page (index.php in our case)
header("Location:dashboard.php");
?>