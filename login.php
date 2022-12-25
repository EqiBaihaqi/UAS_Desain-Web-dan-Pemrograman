<?php
session_start();

//cek cookie
if(isset($_COOKIE['notelp'])&& isset($_COOKIE['usename']))
{
    $id=$_COOKIE['notelp'];
    $key=$_COOKIE['key'];

    // ambil username berdasarkan id
    $result=mysqli_query($conn,"SELECT username FROM users WHERE notelp=$id");
    $row=mysqli_fetch_assoc($result);

    //cek cookie dan username
    if($key === hash('sha256',$row['username']))
    {
        $_SESSION['login']=true;
    }    
}

if(isset($_SESSION["login"]))
{
    header("location:index.php");
    exit;
}
require 'function.php';

if(isset($_POST["login"]))
{
        $username=$_POST["username"];
        $password=$_POST["password"];
    
    
    $result=mysqli_query($conn,"SELECT * FROM users WHERE username='$username'");

    if(mysqli_num_rows($result)===1)
    {
        $row=mysqli_fetch_assoc($result); 
        
        if(password_verify($password,$row["password"]))
        {
            //set session
            $_SESSION["login"]=true;

            //redirect ke halaman index.php 
            header("Location:reservasi.php");
            exit;
        } 
    }
    $error=true;
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
    
    <title>Login Page</title>
</head>
<body>
    
        
    <?php if(isset($error)):?>
        <p style="color:red;font-style=bold">
        Username dan password salah</p>
        
    <?php endif?>
    <div class="container-fluid">
    <div class="d-inline-flex p-2 bd-highlight">
    <div class="text-center">
    <form action="" method="post">
    <div class="login">
    <ul>
        <li class="list-group-item list-group-item-secondary">
            <label for="exampleInputEmail1">Username</label>
            <br>
            <input class="form-control-sm" type="text" name="username" id="username">
        </li>
        <li class="list-group-item list-group-item-secondary">
        <label for="exampleInputEmail1">Password</label>
        <br>
             <input class="form-control-sm" type="password" name="password" id="password" placeholder="Password">
        </li>
        <li class="list-group-item list-group-item-secondary">
            <button class="btn btn-dark" type="submit" name="login">Sign in</button>
        </li>
        <li class="list-group-item list-group-item-secondary"><a href="registrasi.php" class="btn btn-info" role="button">Sign Up</a>
    </li>
        
    </ul>
    </div>
    </form>
    
    <ul>
    </ul>       
                
            </div>
        </div>
    </div>
    

</body>
</html>