<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AMONISASI</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/skins/_all-skins.min.css">
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

  <header class="main-header">
  
    <a href="#" class="logo">
      <span class="logo-mini"><b>ASI</b></span>
      <span class="logo-lg"><b><hi>AMONISASI</hi></b></span> 
    </a>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
        <div class="navbar-custom-menu">
         <ul class="nav navbar-nav">
            <ul class="dropdown-menu">
                <ul class="menu">
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account--> 
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="assets/dist/img/user5-128x128.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Winarni </span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="assets/dist/img/user5-128x128.jpg" class="img-circle" alt="User Image">
                <p>Winarni
                  <small>dangku 2021</small>
                </p>
              </li>
              <li class="user-footer">
                <div class="pull-right">
                  <a href="<?=base_url('login')?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="assets/dist/img/user5-128x128.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Winarni</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header"></li>
        <li class="">
          <a href="<?=base_url('dashboard')?>"><i class="fa fa-dashboard"></i>Dashboard</a></li>
       
          
        <li>
    
        <li class="treeview">
          <a href="#">
            <i class="fa fa-fw fa-edit"></i>
            <span>Data Imunisasi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url('dataanak')?>"><i class="fa fa-users"></i> Data Anak </a></li>
            <li><a href="<?=base_url('dataibu')?>"><i class="fa fa-user"></i> Data Ibu </a></li>
            <li><a href="<?=base_url('databidan')?>"><i class="fa fa-fw fa-user-md"></i>Data Kader</a></li>
            <li><a href="<?=base_url('datariwayatanak')?>"><i class="fa fa-fw fa-hospital-o"></i> Data Riwayat Anak </a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i>
            <span>Referensi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           
            <li><a href="<?=base_url('perkembangananak')?>"><i class="fa fa-circle-o"></i>Perkembangan Anak </a></li>
            <li><a href="<?=base_url('')?>"><i class="fa fa-circle-o"></i>Perkembangan Janin</a></li>
            <li><a href="<?=base_url('')?>"><i class="fa fa-circle-o"></i> Panduan Sehari-hari</a></li>
            <li><a href="<?=base_url('')?>"><i class="fa fa-circle-o"></i> Pemberian Asi</a></li>
            <li><a href="<?=base_url('')?>"><i class="fa fa-circle-o"></i> Jenis Obat-Obatan</a></li>
            
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-bullhorn"></i>
            <span>Pengumuman </span>
            <span class="pull-right-container">
              <i class="fa pull-right"></i>
            </span>
          </a>
           
    </section>
  </aside>

   <!-- Content Wrapper-->
   <div class="content-wrapper ">
      <?php echo $contents?>
    </div>

    <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 01.1
    </div>
    <strong>Copyright &copy; 2021 <a href="https://adminlte.io">Amonisasi</a>.</strong> Desa Dangku Kecamatan Empat Petulai Dangku Kabupaten Muara Enim Sumatera Selatan
  </footer>

<script src="<?=base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?=base_url()?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?=base_url()?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<script src="<?=base_url()?>assets/dist/js/adminlte.min.js"></script>
<script src="<?=base_url()?>assets/dist/js/demo.js"></script>
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
</body>
</html>
