<section class="content-header">
    <h1>
         DATA ANAK
        <small></small>
    </h1>
</section>
    <section class="content">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Anak</h3>
            <div class="pull-right">
                <a href ="<?=site_url('dataanak/add')?>" class="btn btn-primary btn-flat">
                    <i class="fa fa-plus"></i> Create
                </a>
            </div>
        </div>
            <div class ="box-body table-responsive">
                <table class="table table-bordered table-striped">
                    <theader>
                        <tr>
                            <th>No</th>
                            <th>Nama </th>
                            <th>Tgl Lahir</th>
                            <th>Tempat Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Nama Ibu</th>
                            <th>Nama Ayah</th>   
                            <th>Ubah</th>
                            <th>Riwayat</th>        
                        </tr>
                    </theader>
                    <tbody>
                        <?php $no= 1;  
                            foreach ($row->result() as $key => $data) { ?>
                            <tr>
                                <td><?=$no ++?>.</td>
                                <td><?=$data->nama?></td>
                                <td><?=$data->tgl_lahir?></td>
                                <td><?=$data->tempat_lahir?></td>
                                <td><?=$data->jk?></td>
                                <td><?=$data->nama_ibu?></td>
                                <td><?=$data->nama_ayah?></td>
                                <td class="text-center" width="160px">
                                <form action ="<?=site_url('dataanak/del')?>" method="post">
                                <a href ="<?=site_url('dataanak/edit/'.$data->id_anak)?>" class="btn btn-info btn-sm">
                                    <i class="fa fa-pencil"></i> edit
                                </a>
                                <input type="hidden" name="id_anak" value="<?=$data->id_anak?>">
                                 <button onclick="return confirm ('yakin ingin dihapus')"  class="btn btn-danger btn-sm">
                                    <i class="fa fa-trash-o"></i> hapus</button>
                                </form>
                                </div>
                                 </td>
                                 <td class="text-center" width="160px">
                                 <a href ="<?=site_url('dataanak/selesai/'.$data->id_anak)?>" class="btn btn-info btn-sm">
                                    <i></i> selesai
                                </a> </td>
                                 
                            </tr>
                        <?php
                        }?>
                    </tbody>
                </table>
            </div>
        </div>

    </selection>