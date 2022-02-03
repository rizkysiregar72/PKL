<section class="content-header">
      <h1>Dashboard
        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
 
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?=$this->sambung->count_tenaga_ahli()?></h3>

              <p>Data Tenaga Ahli</p>
            </div>
            <div class="icon">
              <i class="fa fa-user-secret"></i>
            </div>
            <a href="tenagaahli" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?=$this->sambung->count_sk()?><sup style="font-size: 20px"></sup></h3>

              <p>Data Surat Keputusan</p>
            </div>
            <div class="icon">
              <i class="fa fa fa-envelope"></i>
            </div>
            <a href="sk" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?=$this->sambung->count_presensi()?></h3>

              <p>Data Presensi</p>
            </div>
            <div class="icon">
              <i class="fa fa-calendar"></i>
            </div>
            <a href="presensi" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?=$this->sambung->count_st()?></h3>

              <p>Data Surat Tugas</p>
            </div>
            <div class="icon">
              <i class="fa fa-envelope-open"></i>
            </div>
            <a href="st" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
				
        <!-- ./col -->

				<div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-maroon">
            <div class="inner">
              <h3><?=$this->sambung->count_cuti()?></h3>

              <p>Data Cuti</p>
            </div>
            <div class="icon">
              <i class="fa fa-calendar-check-o"></i>
            </div>
            <a href="cuti" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
				
			<!-- ./col -->

			<div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-purple">
            <div class="inner">
              <h3><?=$this->sambung->count_kinerja()?></h3>

              <p>Data Kinerja</p>
            </div>
            <div class="icon">
              <i class="fa fa-line-chart"></i>
            </div>
            <a href="kinerja" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
				
        <!-- ./col -->
      </div>
      <!-- /.row -->
