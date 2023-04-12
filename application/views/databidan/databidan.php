<section class="content-header">
    <h1>
         DATA BIDAN
        <small></small>
    </h1>
</section>
    <section class="content">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Bidan</h3>
            <div class="pull-right">
                <a href ="<?=site_url('databidan/add')?>" class="btn btn-primary btn-flat">
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
                            <th>Alamat</th>
                            <th>No. hp</th>
                            <th>Ubah</th>       
                        </tr>
                    </theader>
                    <tbody>
                        <?php $no= 1;  
                            foreach ($row->result() as $key => $data) { ?>
                            <tr>
                                <td><?=$no ++?>.</td>
                                <td><?=$data->nama?></td>
                                <td><?=$data->tgl_lahir?></td>
                                <td><?=$data->alamat?></td>
                                <td><?=$data->no_hp?></td>
                                <td class="text-center" width="160px">
                                <form action ="<?=site_url('databidan/del')?>" method="post">
                                <a href ="<?=site_url('databidan/edit/'.$data->id_bidan)?>" class="btn btn-info btn-sm">
                                    <i class="fa fa-pencil"></i> edit
                                </a>
                                <input type="hidden" name="id_bidan" value="<?=$data->id_bidan?>">
                                 <button onclick="return confirm ('yakin ingin dihapus')"  class="btn btn-danger btn-sm">
                                    <i class="fa fa-trash-o"></i> hapus</button>
                                </form>
                                </div>
                                 </td>
                            </tr>
                        <?php
                        }?>
                    </tbody>
                </table>
            </div>
        </div>

    </selection>