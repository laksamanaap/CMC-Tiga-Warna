<?php

    include "koneksi.php";
    $delete = mysqli_query($conn, "DELETE FROM tb_buktitransaksidestinasidantujuanwisata WHERE id_gambar = '".$_GET['id']."'");

    if ($delete) {
        header ('location: kelola_transaksidestinasidantujuanwisata.php');
    } else {
        echo "Gagal hapus data";
    }
?>