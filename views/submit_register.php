<?php
$username = $_POST['username'];
$email = $_POST['email'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];
$level = "user"; // setiap register maka akan dianggap user

// cek keamanan password
if ($password1 == $password2)
{

    include "koneksi.php";
    
//buat pengacak password
$pengacak = "p3ng4c4k";

//mengkripsi password dengan md5() dan pengacak
$passmd = md5($pengacak . md5($password1));

//menyimpan username dan password yang terenkripsi dengan database
$query = "INSERT INTO user VALUES(NULL,'$username','$email','$passmd','$level')";
$hasil = mysqli_query($conn, $query);

//menampilkan status pendaftaran
header('Location: loginform.php');
} 

else echo "<script>Password yang anda masukan tidak sama!</script>";
?>
