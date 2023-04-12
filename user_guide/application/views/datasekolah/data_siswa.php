<section class="content-header">
    <h1>Data Siswa<h1>
</section>

<section class="content">

    <div class="box">
        <div class="box-header">
        <div class="pill-right">
            <a href="<?=site_url('siswa/add')?>" class="btn btn-primary btn-flat">
                <i class="fa fa-user-plus"></i> Create 
            </a>
        </div>
        </div>
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <thead>
                 <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>NIS</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>No. Tlp</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                 </tr>
                </thead>
              <tbody>
                  <?php $no = 1; 
                  foreach($row->result() as $key => $data) { ?>
                  <tr>
                    <td><?=$no++?>.</td>
                    <td><?=$data->nama?></td>
                    <td><?=$data->nis?></td>
                    <td><?=$data->tempat_lahir?></td>
                    <td><?=$data->tanggal_lahir?></td>
                    <td><?=$data->jenis_kelamin?></td>
                    <td><?=$data->no_tlp?></td>
                    <td><?=$data->alamat?></td>
                    <td class='text-center'>
                            <a href="<?=site_url('siswa/edit'. $data->id_siswa)?>" onclick="return confirm('yakin ubah data?')" class="btn btn-primary">
                                <i class="fa fa-pencil"></i>Update
                            </a>
                            <a href="<?=site_url('siswa/del/'. $data->id_siswa)?>" onclick="return confirm('yakin hapus data?')" class="btn btn-danger">
                                <i class="fa fa-trash"></i>Delete
                            </a>
                    </td>
                  </tr>
                  <?php
                  } ?>
              </tbody>
            </table>
            
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>