<?php
session_start();

if (!isset($_SESSION["login"])) {
    echo $_SESSION["login"];
    header("Location:login.php");
    exit;
}
require 'function.php';
//cek button submit
$conn = mysqli_connect("localhost", "root", "", "barbershop");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$notelp = $_GET["notelp"];
$dataEdit = mysqli_query($conn, "SELECT * FROM reservasi WHERE notelp = $notelp");
$row = mysqli_fetch_assoc($dataEdit);
$notelpsebelum = $row["notelp"];

//cek submit button
if (isset($_POST["submit"])) {
    //cek data berhasil diubah atau tidak
    if (ubah($_POST) > 0) {
        echo "
                <script>
                    alert('data berhasil diubah');
                    document.location.href = 'reservasi.php';
                </script>
            ";
    } else {
        echo "
                <script>
                    alert('data gagal diubah');
                    document.location.href = 'reservasi.php';
                </script>
            ";
        echo "<br>";
        echo mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Reservation</title>
    <link rel="stylesheet" href="tambah.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
        .mx-auto {
            width: 800px
        }

        .card {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <!-- edit data -->
    <div class="container-fluid">
        <div class="card mx-auto w-50">
            <div class="card-header text-white bg-dark text-center">
                <h3>Edit Reservation</h3>
            </div>
            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <!-- use notelpsebelum -->
                    <input type="hidden" name="notelpsebelum" value="<?= $notelpsebelum; ?>">
                    <div class="mb-3">
                    <div class="mb-3">
                        <label for="notelp" class="form-label">Phone Number</label>
                        <input type="text" class="form-control" id="notelp" name="notelp" value="<?= $row["notelp"]; ?>" required>
                    </div>
                        <label for="nama" class="form-label">Name</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $row["nama"]; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="jadwal" class="form-label">Jadwal</label>
                        <input type="text" class="form-control" id="jadwal" name="jadwal" value="<?= $row["jadwal"]; ?>" required>
                    </div>
                    <!-- <div class="mb-3">
                        <label for="model" class="form-label">model</label>
                        <input type="text" class="form-control" id="model" name="model" value="<?= $row["model"]; ?>" required>
                    </div> -->
                    <!-- upload file model -->
                    <div class="mb-3">
                        <label for="model" class="form-label">Model</label>
                        <input type="file" class="form-control" id="model" name="model" value="<?= $row["model"];?>">
                    </div>
                    <button type="submit" class="btn btn-dark btn-lg" name="submit">Submit</button>
                </form>
            </div>
        </div>
        <div class="copyright text-center text-monospace">
            <p>&copy; Al Akbar Baihaqi</p>
        </div>
    </div>
</body>

</html>