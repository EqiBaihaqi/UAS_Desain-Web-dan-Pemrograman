<?php
    
     
    require 'function.php';
    //cek button submit
    if(isset($_POST["submit"])){
        //cek data berhasil ditambahkan
        if(tambah($_POST) > 0){
            echo "
                <script>
                    alert('data berhasil ditambahkan');
                    document.location.href = 'reservasi.php';
                </script>
            ";
        }else{
            echo "
                <script>
                    alert('data gagal ditambahkan');
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
    <title>Reservation</title>
    <link rel="stylesheet" href="tambah.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" 
    crossorigin="anonymous">
    <style>
        .card {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="card mx-auto w-50">
            <div class="card-header text-white bg-dark text-center">
                <h3>Make Reservation</h3>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="notelp" class="form-label">Phone Number</label>
                        <input type="text" class="form-control" id="notelp" name="notelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Name</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="jadwal" class="form-label">Date</label>
                        <input type="datetime-local" class="form-control" id="jadwal" name="jadwal" required>
                    </div>
                    <div class="mb-3">
                        <label for="model" class="form-label">Model</label>
                        <input type="file" class="form-control" id="model" name="model" value="<?= $row["model"]; ?>" required>
                    </div>
                    <button type="submit" name="submit" class="btn btn-dark btn-lg">Add Reservation</button>
                </form>
            </div>
        </div>
        
        <div class="copyright text-center text-monospace">
            <p>&copy; Al Akbar Baihaqi</p>
        </div>
    </div>
</body>
</html>