<?php
require 'conlogin.php';
session_start();
if ($_POST['submit'] == "Login"){
    $username = $_POST['username'];
    $password = $_POST['password'];
}
//query
$query = "SELECT * FROM tabel_user WHERE username='$username' AND password='$password';";
//hasil
$result = $conn->query($query);
if ($result->num_rows > 0){
    $row = mysqli_fetch_assoc($result);
    $_SESSION['username'] = $row['username'];
    $_SESSION['firstname'] = $row['firstname'];
    $_SESSION['pesan'] = 'login berhasil';
    header("Location: login2.php");
}else {
    $_SESSION['pesan'] = 'user / password salah';
    header("Location: login1.php");
}
$conn -> close();
?>