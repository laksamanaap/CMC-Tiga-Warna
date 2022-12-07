<?php

    include "koneksi.php";
    $delete = mysqli_query($conn, "DELETE FROM tb_tempatpenginapan WHERE id_tempatpenginapan = '".$_GET['id']."'");

    if ($delete) {
        header ('location: kelola_tempatpenginapan.php');
    } else {
        echo "Gagal hapus data";
    }
?>