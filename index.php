<?php

include "koneksi.php";

$data_pegawai = $koneksi->query("SELECT * FROM tb_pegawai");

?>

<html>

<head>

    <title>Halaman Data Pegawai</title>

</head>

<body>
    <h2>Data Pegawai</h2>
    <!--Tombol Tambah-->
    <a href="tambah.php">Tambah Data Pegawai</a>
    <!--Tombol Tambah-->
    <br><br>


    <table border=1 style="border-collapse: collapse; width:100%;">
        <thead>
            <th>NO</th>
            <th>NAMA</th>
            <th>ALAMAT</th>
            <th>JENIS KELAMIN</th>
            <th>JABATAN</th>
            <th>AKSI</th>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($data_pegawai as $key => $pegawai) : ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $pegawai['nama'] ?></td>
                    <td><?= $pegawai['alamat'] ?></td>
                    <td><?= $pegawai['jenis_kelamin'] == 'L' ? 'Laki-Laki' : 'Perempuan' ?></td>
                    <td><?= $pegawai['jabatan'] ?></td>
                    <td>
                        <a href="ubah.php?id_pegawai=<?= $pegawai['id_pegawai'] ?>">Ubah</a>
                        <a href="hapus.php?id_pegawai=<?= $pegawai['id_pegawai'] ?>">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>



</body>

</html>