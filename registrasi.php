<?php
    session_start();

    if(isset($_SESSION["login"]))
    {
        header("location:login.php");
        exit;
    }
    require 'function.php';

    if(isset($_POST['register']))
    {
        if(registrasi($_POST)>0)
        {
            echo "
                <style>
                    alert('user berhasil ditambahkan');
                </style>
            ";
        }else
        {
            echo mysqli_error($conn);
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Registration</title>
    <style>
       label  {
            display:block;
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="d-inline-flex p-2 bd-highlight">
    <div class="text-center">
    <form action="" method="post">
    <div class="login">
        <ul>
            <li class="list-group-item list-group-item-secondary">
                <label for="username">Username</label>
                <input type="text" name="username" id="username">
            </li>
            <li class="list-group-item list-group-item-secondary">
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </li>
            <li class="list-group-item list-group-item-secondary">
                <label for="password2">Confirm Password</label>
                <input type="password" name="password2" id="password2 ">
            </li>
            <li class="list-group-item list-group-item-secondary">
                <button class="btn btn-dark" type="submit" name="register">Sign Up</button>
            </li>
            <li class="list-group-item list-group-item-secondary"><a href="login.php" class="btn btn-info" role="button">Log in</a>
            </li>

        </ul>
        
        </div>
    </form>
    </div>
    </div>
    </div>
</body> 
</html>