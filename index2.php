<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <h1>CRUD DEDI</h1>

    <a href="tambah.php">Tambah data</a>

    <table border="1">
        <tr align="center">
            <td>no</td>
            <td>nama</td>
            <td>nim</td>
            <td>alamat</td>
            <td colspan="2">aksi</td>
        </tr>

        <?php
        include "koneksi.php";
        $no = 1;
        $data = mysqli_query($koneksi, "select * from tbl_mahasiswa");
        while ($a = mysqli_fetch_array($data)) {

            ?>

            <tr>
                <td>
                    <?= $no++; ?>
                </td>
                <td>
                    <?= $a["nama"]; ?>
                </td>
                <td>
                    <?= $a["nim"]; ?>
                </td>
                <td>
                    <?= $a["alamat"]; ?>
                </td>
                <td>
                    <a href="edit.php?id=<?= $a["id"]; ?>"> Edit </a>
                </td>
                <td>
                    <a href="hapus.php?id=<?= $a["id"]; ?>"> Hapus </a>
                </td>
            </tr>

        <?php } ?>
    </table>

</body>

</html>