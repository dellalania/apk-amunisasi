<section class="content-header">
    <h1>
         DATA IBU
        <small></small>
    </h1>
</section>
    <section class="content">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Ibu</h3>
            <div class="pull-right">
                <a href ="<?=site_url('dataibu/add')?>" class="btn btn-primary btn-flat">
                    <i class="fa fa-plus"></i> Create
                </a>
            </div>
        </div>
            <div class ="box-body table-responsive">
                <table class="table table-bordered table-striped">
                    <theader>
                        <tr>
                            <th>No</th>
                            <th>nama ibu </th>
                            <th>tgl lahir</th> 
                            <th>Ubah</th>        
                        </tr>
                    </theader>
                    <tbody>
                        <?php $no= 1;  
                            foreach ($row->result() as $key => $data) { ?>
                            <tr>
                                <td><?=$no ++?>.</td>
                                <td><?=$data->nama_ibu?></td>
                                <td><?=$data->tgl_lahir?></td>
                                <td class="text-center" width="160px">
                                <form action ="<?=site_url('dataibu/del')?>" method="post">
                                <a href ="<?=site_url('dataibu/edit/'.$data->id_ibu)?>" class="btn btn-info btn-sm">
                                    <i class="fa fa-pencil"></i> edit
                                </a>
                                <input type="hidden" name="id_ibu" value="<?=$data->id_ibu?>">
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