<section class="content-header">
    <h1>
    Regristrasi
        <small></small>
    </h1>
</section>
    <section class="content">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><p>Data Guru</p></h3>
            <div class="pull-right">
                <a href ="<?=site_url('gurupns')?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"></i> Back
                </a>
            </div>
        </div>
            <div class ="box-body">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <form action="<?=site_url('gurupns/process')?>" method="post">
                            <div class="form-group">
                                <label>Nama *</label>
                                <input type="text" name="nama" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Nip *</label>
                                <input type="text" name="nip" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Pangkat *</label>
                                <input type="text" name="pangkat" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Jabatan *</label>
                                <input type="text" name="jabatan" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Masa Golongan *</label>
                                <input type="text" name="masa_gol" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Pendidikan *</label>
                                <input type="text" name="pendidikan" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Jurusan *</label>
                                <input type="text" name="jurusan" class="form-control">
                            </div>
                            <div class="form-group">
                            <label>Tahun Lulus *</label>
                            <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input type="year" name="th_lulus" class="form-control pull-right" id="reservation">
                            </div>
                            <p>
                            <div class="form-group">
                            <label>
                            Jenis Kelamin *
                            </label>
                            <div>
                            <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki<br>
                            </div>
                            <div>
                            <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan<br>
                            </div>
                            </div>
                            <div class="form-group">
                            <label>Tanggal Lahir *</label>
                            <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input type="date" name="ttl" class="form-control pull-right" id="reservation">
                            </div>
                            <p>
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
    