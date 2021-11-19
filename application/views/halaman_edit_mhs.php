<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Edit</title>
</head>

<body>
    <h3>Halaman Edit Mahasiswa</h3>
    <form action="<?php echo base_url('home/fungsiEdit') ?>" method="post">
        <table>
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td><input type="text" name="nim" value="<?php echo $queryMhsDetail->nim ?>" readonly></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" value="<?php echo $queryMhsDetail->nama ?>"></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td><input type="text" name="jurusan" value="<?php echo $queryMhsDetail->jurusan ?>"></td>
            </tr>
            <tr>
                <td colspan="3"><button type="submit">Edit Data Mahasiswa</button></td>
            </tr>
        </table>
    </form>
</body>

</html>