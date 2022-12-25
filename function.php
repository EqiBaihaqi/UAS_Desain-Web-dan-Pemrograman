<?php 
 $conn = mysqli_connect("localhost", "root", "", "barbershop");
 if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
 }
 $result = mysqli_query($conn, "SELECT * FROM reservasi");

 function query($query_kedua)
 {
     global $conn;
     $result = mysqli_query($conn, $query_kedua);
     $rows = [];
     while ($row = mysqli_fetch_assoc($result)) {
         $rows[] = $row;
     }
     return $rows;
 }
function registrasi($data)
{
    global $conn;

    //stripcslashes digunakan untuk menghilangkan blackslashes 
    $username=strtolower(stripcslashes($data['username']));
    
    //mysqli_real_escape_string untuk memberikan perlidungan terhadap karakter-karakter unik (sql_injection)
    //pada mysqli_real_escape_string terdapat 2 paramater
    $password=mysqli_real_escape_string($conn,$data['password']); 
    $password2=mysqli_real_escape_string($conn,$data['password2']); 

    // cek username sudah ada apa belum
    $result=mysqli_query($conn,"SELECT username FROM users WHERE username='$username'");

    //cek kondisi jika line 175 bernilai true maka cetak echo
    if(mysqli_fetch_assoc($result))
    {
        echo "
            <script>
                alert('username sudah ada');
            </script>
        ";
        // agar proses insertnya gagal
        return false;
    }

    // cek konfirmasi password
    if($password!==$password2)
    {
        echo"
        <script> 
            alert('password anda tidak sama');
        </script>
        ";
        return false;
    }

    // enkripsi password
        // $password=md5($password);
        $password=password_hash($password,PASSWORD_DEFAULT);
        // var_dump($password);

    // tambahkan user baru ke database
    mysqli_query($conn,"INSERT INTO users VALUES ('','$username','$password')");
    if ($result) {
        $_SESSION['username'] = $username;
        
        header('Location: login.php');
    }
}
    function tambah ($data)
    {
        global $conn;
        $Notelp = $_POST["notelp"];
        $Nama = $_POST["nama"];
        $Jadwal = $_POST["jadwal"];
        $Model = $_POST["model"];
        //query insert data
        $query = "INSERT INTO reservasi VALUES ('$Notelp','$Nama','$Jadwal','$Model')";
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }
    function hapus($id){
        global $conn;
        mysqli_query($conn,"DELETE FROM reservasi WHERE notelp =$id");
        return mysqli_affected_rows($conn);
    }
    function ubah($data)
    {
        global $conn;
        $notelpsebelum = $data["notelpsebelum"];
        $Notelp = $_POST["notelp"];
        $Nama = $_POST["nama"];
        $Jadwal = $_POST["jadwal"];
        $Model = $_POST["model"];
        //query edit data
        $query = "UPDATE reservasi SET notelp = 
        '$Notelp', nama = '$Nama', jadwal = '$Jadwal', 
        model = '$Model' WHERE notelp = $notelpsebelum";
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }
?>