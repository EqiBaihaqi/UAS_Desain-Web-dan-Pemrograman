<?php
        //buat koneksi
        $conn = mysqli_connect("localhost", "root", "","phpdatabase");
        //cek button submit
        if(isset($_POST["submit"])){
            //ambil data dari tiap elemen dalam form
            $Nama = $_POST["Nama"];
            $NIM = $_POST["NIM"];
            $Email = $_POST["Email"];
            $Jurusan = $_POST["Jurusan"];
            $Gambar = $_POST["Gambar"];
            //query insert data
            $query = "INSERT INTO mahasiswa VALUES ('$Nama','$NIM','$Email','$Jurusan','$Gambar')";
            mysqli_query($conn, $query);
            //cek apakah data berhasil ditambahkan
            if(mysqli_affected_rows($conn) > 0){
                echo "data berhasil ditambahkan";
            }else{
                echo "gagal";
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
    <title>Data Mahasiswa</title>
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
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Tambah Data Mahasiswa</h3>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="Nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="Nama" name="Nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="NIM" class="form-label">NIM</label>
                        <input type="text" class="form-control" id="NIM" name="NIM" required>
                    </div>
                    <div class="mb-3">
                        <label for="Email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="Email" name="Email" required>
                    </div>
                    <div class="mb-3">
                        <label for="Jurusan" class="form-label">Jurusan</label>
                        <input type="text" class="form-control" id="Jurusan" name="Jurusan" required>
                    </div>
                    <div class="mb-3">
                    <label for="gambar">Gambar : </label>
                         <input type="file" name="gambar" id="gambar" required>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
               
            </div>
        </div>
    </div>
</body>
</html>