<?php
include "koneksi.php";
?>

<html>

<head>

    <title>Halaman Tambah Mahasiswa</title>

</head>

<body>

    <form method="post" action="">

        <label>Nama</label> <br>
        <input type="text" name="nama" required style="width:30%" ; height=":25px;"> <br>

        <label>Alamat</label> <br>
        <input type="text" name="alamat" required style="width:30%" ; height=":25px;"> <br>

        <label>Jenis Kelamin</label> <br>
        <select name="jenis_kelamin" required="" style="width: 30%; height: 35px;">
            <option value="">---PILIH JENIS KELAMIN---</option>
            <option value="L">---LAKI-LAKI--</option>
            <option value="P">---PEREMPUAN---</option>
        </select> <br>

        <label>Jabatan</label> <br>
        <input type="text" name="jabatan" required style="width:30%" ; height=":25px;"> <br><br>


        <input type="submit" name="tambah" value="Tambah Data">


        <!--Tambah Proses-->

        <?php


        if (isset($_POST['tambah'])) {
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            $jenis_kelamin = $_POST['jenis_kelamin'];
            $jabatan = $_POST['jabatan'];

            $tambah = mysqli_query($koneksi, "INSERT INTO tb_pegawai(nama,alamat,jenis_kelamin,jabatan) 
        VALUES('$nama','$alamat','$jenis_kelamin','$jabatan')");

            if ($tambah) {
                echo "<script>alert('Data Berhasil Ditambahkan!')
            window.location = 'index.php'
            </script>";
            } else {
                echo "<script>
            alert('Data Gagal Ditambahkan!, Database Error!')
            window.location = 'tambah.php'
            </script>";
            }
        }

        ?>

        <!--/Tambah Proses-->

        <br><br>
        <a href="index.php">Kembali Ke Index</a>

    </form>

</body>

</html>