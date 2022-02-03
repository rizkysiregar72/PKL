<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Aplikasi Pengelolaan Data Tenaga Ahli</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/skins/_all-skins.min.css">
	<!--[if lt IE9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">

  <header class="main-header">
    <a href="<?=base_url('dashboard')?>" class="logo">
      <span class="logo-mini"><b>m</b>P</span>
      <span class="logo-lg"><b>Diskominfo</b> </span>
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
          </li>
          <!-- User Account -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?=base_url()?>assets/dist/img/diskominfo.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?=ucfirst( $this->sambung->user_login()->username)?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?=base_url()?>assets/dist/img/diskominfo.png" class="img-circle">

                <p>
								<?=$this->sambung->user_login()->name?>
                  <small><?=$this->sambung->user_login()->address?></small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="<?=site_url('auth/logout')?>" class="btn btn-flat bg-red">Logout</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>

  <!-- Left side column -->
  <aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?=base_url()?>assets/dist/img/diskominfo.png" class="img-circle">
        </div>
        <div class="pull-left info">
          <p><?=ucfirst( $this->sambung->user_login()->name)?></p> <!-- Cara memanggil nama sesuai database -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      
      <!-- sidebar menu -->
      <ul class="sidebar-menu" data-widget="tree">
				<li <?=$this->uri->segment(1) == 'dashboard' || $this->uri->segment(1) == ''? 'class="active"' : "" ?>>
					<a href="<?=site_url('dashboard')?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
				</li>
        <li class="header">Data Master</li>
				<li <?=$this->uri->segment(1) == 'tenagaahli' ? 'class="active"' : "" ?>>
					<a href="<?=site_url('tenagaahli')?>"><i class="fa fa-user-secret"></i> <span>Data Tenaga Ahli </span></a>
				</li>
				<li <?=$this->uri->segment(1) == 'sk' ? 'class="active"' : "" ?>>
					<a href="<?=site_url('sk')?>"><i class="fa fa-envelope"></i> <span>Surat Keputusan</span></a>
				</li>
				<li <?=$this->uri->segment(1) == 'presensi' ? 'class="active"' : "" ?>>
					<a href="<?=site_url('presensi')?>"><i class=" fa fa-calendar"></i> <span>Presensi</span></a>
				</li>
				<li <?=$this->uri->segment(1) == 'st' ? 'class="active"' : "" ?>>
					<a href="<?=site_url('st')?>"><i class=" fa fa-envelope-open"></i> <span>Surat Tugas</span></a>
				</li>
				<li <?=$this->uri->segment(1) == 'cuti' ? 'class="active"' : "" ?>>
					<a href="<?=site_url('cuti')?>"><i class=" fa fa-calendar-check-o"></i> <span>Cuti</span></a>
				</li>
				<li <?=$this->uri->segment(1) == 'kinerja' ? 'class="active"' : "" ?>>
					<a href="<?=site_url('kinerja')?>"><i class=" fa fa-line-chart"></i> <span>Kinerja</span></a>
				</li>
			</ul>

			<!-- <?php if($this->sambung->user_login()->level == 1 ) { ?> -->
			<ul class="sidebar-menu" data-widget="tree">
        <li class="header">Master Laporan</li>
        <li class="treeview">
          <a href="#">
					<i class="fa fa-file-text"></i>
              <span>Laporan</span>
              <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= site_url('tenagaahli/laporan');?>"><i class="fa fa-circle-o"></i>Rekap Tenaga Ahli</a></li>
            <li><a href="<?= site_url('sk/laporan');?>"><i class="fa fa-circle-o"></i>Rekap Surat Keputusan</a></li>
            <li><a href="<?= site_url('presensi/laporan');?>"><i class="fa fa-circle-o"></i>Rekap Presensi</a></li>
            <li><a href="<?= site_url('st/laporan');?>"><i class="fa fa-circle-o"></i>Rekap Surat Tugas</a></li>
            <li><a href="<?= site_url('cuti/laporan');?>"><i class="fa fa-circle-o"></i>Rekap Cuti</a></li>
            <li><a href="<?= site_url('kinerja/laporan');?>"><i class="fa fa-circle-o"></i>Rekap Kinerja</a></li>
          </ul>
        </li>

			<!-- /.untuk admin saja terlihat -->
			
				<ul class="sidebar-menu" data-widget="tree">
        <li class="header">SETTINGS</li>
				<li <?=$this->uri->segment(1) == 'user' ? 'class="active"' : "" ?>>
				<a href="<?=site_url('user')?>"><i class="fa fa-user"></i> <span>Users</span></a></li>
			<?php } ?>
			<!-- /.untuk admin saja terlihat -->
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>


<!-- Content Wrapper -->
	<div class="content-wrapper">
	   <?php echo $contents ?>
    </div>

  <footer class="main-footer">
    <strong>Copyright &copy; 2022 M. Rizki Akbar Siregar</a>.</strong>
  </footer>

<script src="<?=base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?=base_url()?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?=base_url()?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<script src="<?=base_url()?>assets/dist/js/adminlte.min.js"></script>
<script src="<?=base_url()?>assets/dist/js/demo.js"></script>

<script src="<?=base_url()?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script>
  $(document).ready(function() {
    $('#table1').DataTable()
  })
</script>

</body>
</html>
