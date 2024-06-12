<?php
error_reporting(0);
session_start();
if (isset($_SESSION['username'])) {
    header("Location: login2.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body{
            height: 100%;
            background-color: grey !important;
        }
        .container{
            position: relative;
            top: 10px;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: green;
        }
        .login-form{
            width: 380px;
            height: 450px;
            padding: 20px;
            background-color: #222d32 !important;
            border-radius: 10px !important
        }
        input[type="username"],
        input[type="password"] {
            background: #1a2226;
            color: white;
            border: 2px solid #00ff00;
            border-radius: 10px;
            margin-bottom: 25px;
        }
        input[type="username"]:focus,
        input[type="password"]:focus {
            outline: none;
            border: none;
            background: #1a2226;
            color: #fff;
            margin: 0;
        }
        .card-title{
            font-weight: 900;
            padding-top: 20px;
        }
        .btr{
            background: green !important;
            color: #000 !important;
            transform: translateY(10px);
            font-size: 14px;
            border-radius: 10px !important;
        }
        .pesan{
            position: top center;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <?php
        if(isset($_SESSION['pesan'])){
            echo "<div class=\" alert alert-warning\" role=\" alert\">
            ".$_SESSION['pesan']."
            </div>";
        }
        ?>
        <div class="card login-form">
            <div class="card-body">
                <h1 class="card-title text-center">L O G I N</h1>
            </div>
            <div class="card-text">
            <form method="post" action="proseslogin.php">
              <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="username" class="form-control" placeholder="Username" name="username">
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" placeholder="Password" name="password">
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Ingat saya!</label>
              </div>
              <div class="d-grid gap-2">
              <button type="submit" name="submit" value="Login" class="btn btn-primary">Submit</button>
              </div>
            </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>