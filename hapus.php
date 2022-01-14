<?php

include "koneksi.php";

$id_pegawai = $_GET['id_pegawai'];

$hapus = mysqli_query($koneksi, "DELETE FROM tb_pegawai WHERE id_pegawai=$id_pegawai ");


if ($hapus) {
    echo "<script>alert('Data Berhasil Diubah!')
    window.location = 'index.php'
    </script>";
} else {
    echo "<script>
    alert('Data Gagal Diubah!, Database Error!')
    window.location = 'index.php'
    </script>";
}
