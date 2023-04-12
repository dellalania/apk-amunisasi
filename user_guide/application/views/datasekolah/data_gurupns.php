<section class="content-header">
    <h1>Data Guru<h1>
</section>

<section class="content">

    <div class="box">
        <div class="box-header">
        <div class="pill-right">
            <a href="<?=site_url('gurupns/add')?>" class="btn btn-primary btn-flat">
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
                    <th>NIP</th>
                    <th>Pangkat</th>
                    <th>Jabatan</th>
                    <th>Masa Golongan</th>
                    <th>Jenis Kelamin</th>
                    <th>Pendidikan</th>
                    <th>Tanggal Lahir</th>
                    <th>Jurusan</th>
                    <th>Tahun Lulus</th>
                    <th>Aksi</th>
                 </tr>
                </thead>
              <tbody>
                  <?php $no = 1; 
                  foreach($row->result() as $key => $data) { ?>
                  <tr>
                    <td><?=$no++?>.</td>
                    <td><?=$data->nama?></td>
                    <td><?=$data->nip?></td>
                    <td><?=$data->pangkat?></td>
                    <td><?=$data->jabatan?></td>
                    <td><?=$data->masa_gol?></td>
                    <td><?=$data->jenis_kelamin?></td>
                    <td><?=$data->pendidikan?></td>
                    <td><?=$data->ttl?></td>
                    <td><?=$data->jurusan?></td>
                    <td><?=$data->th_lulus?></td>
                    <td class='text-center'>
                            <a href="<?=site_url('gurupns/edit/'. $data->id_gurupns)?>" onclick="return confirm('yakin ubah data?')" class="btn btn-primary">
                                <i class="fa fa-pencil"></i>Update
                            </a>
                            <a href="<?=site_url('gurupns/del/'. $data->id_gurupns)?>" onclick="return confirm('yakin hapus data?')" class="btn btn-danger">
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