<?php

    include "koneksi.php";
    $delete = mysqli_query($conn, "DELETE FROM home_cmc");

    if ($delete) {
        header ('location: kelola_homecmc.php');
    } else {
        echo "Gagal hapus data";
    }
?>