<section class="content-header">
    <h1>
         DATA RIWAYAT ANAK
        <small></small>
    </h1>
</section>
    <section class="content">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Riwayat Anak</h3>
            
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
                        </tr>
                    </theader>
                    <tbody>
                        <?php $no= 1;  
                            foreach ($row->result() as $key => $data) { ?>
                            <tr>
                                <td><?=$no ++?>.</td>
                                <td><?=$data->id_anak?></td>
                                <td><?=$data->nama?></td>
                                <td><?=$data->tgl_lahir?></td>
                                <td><?=$data->tempat_lahir?></td>
                                <td><?=$data->jk?></td>
                                <td><?=$data->nama_ayah?></td>
                                <td><?=$data->nama_ibu?></td>
                                
                                <td class="text-center" width="160px">
                                
                            </tr>
                        <?php
                        }?>
                    </tbody>
                </table>
            </div>
        </div>

    </selection>