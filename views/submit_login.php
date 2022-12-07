<?php 
session_start();
include "koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];
$query = "SELECT * FROM user WHERE username = '$username'";
$hasil = mysqli_query($conn, $query);
$data = mysqli_fetch_array($hasil);

$pengacak = "p3ng4c4k";
echo($_SESSION['level']);
$passmd = md5($pengacak . md5($password));
if ($passmd == $data['password']) {
    $_SESSION['level'] = $data['level'];
    $_SESSION['username'] = $data['username'];
    
    echo "<h2>Login Sukses</h2>";
    header('Location: home.blade.php');
}
//else echo "<script>Login Gagal!, Coba lagi</script>";
//header('Location: home.blade.php');
?>
