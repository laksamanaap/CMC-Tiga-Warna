<?php

    include "koneksi.php";
    $delete = mysqli_query($conn, "DELETE FROM tb_gambardestinasidantujuanwisata WHERE id_gambar = '".$_GET['id']."'");

    if ($delete) {
        header ('location: kelola_gambardestinasidantujuanwisata.php');
    } else {
        echo "Gagal hapus data";
    }
?>