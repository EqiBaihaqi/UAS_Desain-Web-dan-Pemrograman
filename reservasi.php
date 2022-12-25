<?php 
    session_start();

    if(!isset($_SESSION["login"]))
    {
        echo $_SESSION["login"];
        header("Location:login.php");
        exit;
    }
    require 'function.php';
    $reservasi=query(" SELECT * FROM reservasi");

    //tombol cari ditekan
    //cari pada line 7 adalah name dari button
    if(isset($_POST["cari"]))
    {
        // cari line 10 adalah function cari dan keyword adalah name dari inputan text 
        $reservasi=cari($_POST["keyword"]);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
    <title>Reservation List</title>
</head>
<body>
<div class="container">
<h1 class="text-white bg-dark"> Reservation List </h1>

<a href="index.php" class="btn btn-primary" role="button">Home Page</a>
<a href="tambah_data.php" class="btn btn-secondary" role="button">Make Reservation</a>
<a href="logout.php" class="btn btn-dark" role="button">Log Out</a>


<br><br>


<br>

<table id="tabel" class="table table-dark table-striped">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Name</th>
                            <th scope="col">Date</th>
                            <th scope="col">Model</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($reservasi as $row) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $row["notelp"]; ?></td>
                                <td><?= $row["nama"]; ?></td>
                                <td><?= $row["jadwal"]; ?></td>
                                <td><img src="img/<?= $row["model"]; ?>" width="100px"></td>
                                <td>
                                    <a href="edit.php?notelp=<?php echo $row["notelp"];?>" class="badge bg-success">Edit</a>
                                    <a href="hapus.php?notelp=<?php echo $row["notelp"];?>" class="badge bg-danger">Hapus</a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="SearchTable.js"></script>
    

    </div>
</body>
</html>