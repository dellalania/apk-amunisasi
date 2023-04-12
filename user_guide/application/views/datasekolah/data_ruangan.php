<section class="content-header">
    <h1>Data Ruangan<h1>
</section>

<section class="content">

    <div class="box">
        <div class="box-header">
        <div class="pill-right">
            <a href="<?=site_url('ruangan/add')?>" class="btn btn-primary btn-flat">
                <i class="fa fa-user-plus"></i> Create 
            </a>
        </div>
        </div>
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <thead>
                 <tr>
                    <th>ID</th>
                    <th>Nama Ruangan</th>
                    <th>Jumlah Ruangan</th>
                    <th>Kondisi Ruangan</th>
                    <th>           Aksi</th>
                 </tr>
                </thead>
              <tbody>
                  <?php $no = 1; 
                  foreach($row->result() as $key => $data) { ?>
                  <tr>
                    <td><?=$no++?>.</td>
                    <td><?=$data->nama_ruangan?></td>
                    <td><?=$data->jumlah_ruangan?></td>
                    <td><?=$data->kondisi_ruangan?></td>
                    <td class='text-center'>
                            <a href="<?=site_url('ruangan/edit/'. $data->id_ruangan)?>" onclick="return confirm('yakin ubah data?')" class="btn btn-primary">
                                <i class="fa fa-pencil"></i>Update
                            </a>
                            <a href="<?=site_url('ruangan/del/'. $data->id_ruangan)?>" onclick="return confirm('yakin hapus data?')" class="btn btn-danger">
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