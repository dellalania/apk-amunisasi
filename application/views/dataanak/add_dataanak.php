<section class="content-header">
    <h1>
         DATA  ANAK
        <small></small>
    </h1>
</section>
    <section class="content">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tambahkan Data Anak</h3>
            <div class="pull-right">
                <a href ="<?=site_url('dataanak')?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"></i> Back
                </a>
            </div>
        </div>
            <div class ="box-body">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <form action="" method="post">
                            <div class="form-group">
                                <label>nama *</label>
                                <input type="text" name="nama" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>tgl lahir *</label>
                                <input type="date" name="tgl_lahir" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>tempat lahir *</label>
                                <input type="text" name="tempat_lahir" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin *</label>
                                <p>
                                <input type="radio" value="perempuan" name="jk" class="flat-red" checked>Perempuan</input>
                                <p>
                                <input type="radio" value="laki-laki" name="jk" class="flat-red" checked>Laki-laki</input>
                            </div>
                            <div class="form-group">
                                <label>nama_ayah *</label>
                                <input type="text" name="nama_ayah" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>nama ibu *</label>
                                <input type="text" name="nama_ibu" class="form-control">
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