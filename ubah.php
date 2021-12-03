<?php

include "koneksi.php";
$id_pegawai = $_GET['id_pegawai'];

//cek ke database
$pegawai = $koneksi->query("SELECT * FROM tb_pegawai WHERE id_pegawai='$id_pegawai'")->fetch_assoc();

?>

<html>

<head>

    <title>Halaman Ubah Pegawai</title>

</head>

<body>

    <form method="post" action="">

        <label>Nama</label> <br>
        <input type="text" name="nama" value="<?= $pegawai['nama'] ?>" style="width:30%" ; height=":25px;"> <br>
        <label>Alamat</label> <br>
        <input type="text" name="alamat" value="<?= $pegawai['alamat'] ?>" style="width:30%" ; height=":25px;"> <br>
        <label>Jenis Kelamin</label> <br>
        <select name="jenis_kelamin" style="width: 30%; height: 35px;">
            <option value="">---PILIH JENIS KELAMIN---</option>
            <option value="L" <?= $pegawai['jenis_kelamin'] == 'L' ? 'selected' : '' ?>>---LAKI-LAKI--</option>
            <option value="P" <?= $pegawai['jenis_kelamin'] == 'P' ? 'selected' : '' ?>>---PEREMPUAN---</option>
        </select> <br>
        <label>Jabatan</label> <br>
        <input type="text" name="jabatan" required value="<?= $pegawai['jabatan'] ?>" style="width:30%" ; height=":25px;"> <br><br>

        <input type="submit" name="ubah" value="Ubah Data">

        <br><br>
        <a href="index.php">Kembali Ke Index</a>

        <!--Ubah Proses-->

        <?php


        if (isset($_POST['ubah'])) {
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            $jenis_kelamin = $_POST['jenis_kelamin'];
            $jabatan = $_POST['jabatan'];

            $ubah = $koneksi->query("UPDATE tb_pegawai 
            SET nama='$nama',alamat='$alamat',jenis_kelamin='$jenis_kelamin',jabatan='$jabatan'
            WHERE id_pegawai='$id_pegawai' ");

            if ($ubah) {
                echo "<script>alert('Data Berhasil Diubah!')
            window.location = 'index.php'
            </script>";
            } else {
                echo "<script>
            alert('Data Gagal Diubah!, Database Error!')
            </script>";
            }
        }

        ?>

        <!--/Ubah Proses-->

    </form>

</body>

</html>