<html>
<head>
<title>EDIT</title>
</head>
<body>
    <h3>Form Edit Data</h3>

    <table>
        <form action="<?php echo base_url('login/AksiEdit') ?>" method="post">
        <tr>
            <td>NIM</td>
            <td>;</td>
            <td>
                <input type="text" value="<?php echo $data_mhs->nim ?>" disabled>
                <input type="hidden" name="nim" value="<?php echo $data_mhs->nim ?>">
            </td>
        </tr>

        <tr>
            <td>Nama</td>
            <td>;</td>
            <td><input type="text" name="nama"></td>
        </tr>

        <tr>
            <td>Jurusan</td>
            <td>;</td>
            <td><input type="text" name="jurusan"></td>
        </tr>

        <tr>
            <td colspan="2"><input type="submit" value="SIMPAN"></td>
        </tr>
    </table>
</body>
</html>