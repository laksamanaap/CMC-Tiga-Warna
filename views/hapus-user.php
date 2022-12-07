<?php

    include "koneksi.php";
    $delete = mysqli_query($conn, "DELETE FROM user WHERE id_user = '".$_GET['id']."'");

    if ($delete) {
        header ('location: kelola_user.php');
    } else {
        echo "Gagal hapus data";
    }
?>