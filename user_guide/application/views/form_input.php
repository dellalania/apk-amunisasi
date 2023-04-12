<html>
<head>
<title>EDIT</title>
</head>
<body>
    <h3>Form Input Data</h3>

    <table>
        <form action="<?php echo base_url('login/AksiInsert') ?>" method="post">
        <tr>
            <td>NIM</td>
            <td>;</td>
            <td><input type="text" name="nim" required></td>
        </tr>

        <tr>
            <td>Nama</td>
            <td>;</td>
            <td><input type="text" name="nama" required></td>
        </tr>

        <tr>
            <td>Jurusan</td>
            <td>;</td>
            <td><input type="text" name="jurusan" required></td>
        </tr>

        <tr>
            <td colspan="2"><input type="submit" value="SIMPAN"></td>
        </tr>
    </table>
</body>
</html>