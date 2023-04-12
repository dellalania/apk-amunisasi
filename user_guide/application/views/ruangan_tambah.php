<section class="content-header">
    <h1>
    DATA RUANGAN
        <small></small>
    </h1>
</section>
    <section class="content">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><?=ucfirst($page)?><p>Ruangan</p></h3>
            <div class="pull-right">
                <a href ="<?=site_url('ruangan')?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"></i> Back
                </a>
            </div>
        </div>
            <div class ="box-body">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <form action="<?=site_url('ruangan/process')?>" method="post">
                            <div class="form-group">
                                <label>Nama Ruangan*</label>
                                <input type="hidden" name="id" value="<?=$row->id_ruangan?>">
                                <input type="text" name="nama_ruangan" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Jumlah *</label>
                                <input type="text" name="jumlah_ruangan" class="form-control">
                            </div>
                           
                            <div class="form-group">
                                <label>Kondisi *</label>
                                <select name="kondisi_ruangan" class="form-control">
                                    <option value="">-pilih-</option>
                                    <option value="Baik"<?=set_value('jenis') == 1 ? "selected" : null ?>>Baik</option>
                                    <option value="Rusak Ringan"<?=set_value('jenis') ==  1 ? "selected" : null ?>>Rusak Ringan</option>
                                    <option value="Rusak Berat"<?=set_value('jenis') ==  1 ? "selected" : null ?>>Rusak Berat</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button type=submit  class="btn btn-success btn-plat ">save
                                <i class="fa fa-paper-plane" ></i></button>
                                <button type=reset  class="btn btn-danger btn-plat ">Reset
                                <i class="fa fa-trash-o" ></i></button>
                                     
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </selection>