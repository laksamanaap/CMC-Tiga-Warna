<?php

    include "koneksi.php";
    $delete = mysqli_query($conn, "DELETE FROM tb_destinasidantujuanwisata WHERE id_destinasidantujuanwisata = '".$_GET['id']."'");

    if ($delete) {
        header ('location: kelola_destinasidantujuanwisata.php');
    } else {
        echo "Gagal hapus data";
    }
?>