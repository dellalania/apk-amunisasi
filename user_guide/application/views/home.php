<html>
<head>
  <title>Belajar CURD</title>
</head>

<body>
  <h1>Create, Read, Update, Delete</h1>
  <h3>(Data Mahasiswa)</h3>

  <button onclick= "document.location.href= '<?php echo base_url('login/formInput')?>'">Tambah Mahasiswa</button>

  <table>
      <tr>
          <td><b>No</b></td>
          <td><b>NIM</b></td>
          <td><b>Nama Mahasiswa</b></td>
          <td><b>Jurusan</b></td>
          <td><b>Aksi</b></td>
      </tr>
      <?php
          $count = 0;
          foreach($data_mhs as $row){
            $count = $count + 1;
          
      ?>
      <tr>
          <td><?php echo $count ?></td>
          <td><?php echo $row -> nim ?></td>
          <td><?php echo $row -> nama ?></td>
          <td><?php echo $row -> jurusan ?></td>
          <td>
          <a href="<?php echo base_url('login/formEdit/'). $row -> nim ?>">Edit</a> 
          <a href="<?php echo base_url('login/AksiDeleteData/'). $row->nim ?>">Delete</a>
          </td>
      </tr>

          <?php } ?>
  </table>

</body>
</html>