<section class="content-header">
      <h1>Tenaga Ahli
        <small>Diskominfo</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Tenaga Ahli</li>
      </ol>
    </section>
		
    <!-- Main content -->
    <section class="content"> 
		<?php $this->view('message')?>
			<div class="box">
				<div class="box-header">
        	<h3 class="box-tittle">Laporan Tenaga Ahli</h3>
					
					<div class="pull-right">
						<?php if($this->sambung->user_login()->level == 1 ) { ?>
						<a href="<?=site_url('tenagaahli/print')?>"class="btn btn-info btn-flat">
       						<i class="fa fa-print"></i> Cetak Data Tenaga Ahli
      					</a>
						<?php } ?> 
					</div>
      	</div>

      <div class="box-body table-responsive">
				<table class="table table-bordered table-striped" id="table1">
          <thead>
            <tr>
              <th>No.</th>
              <th>Nama Tenaga Ahli</th>
              <th>Divisi</th>
              <th>Tempat Lahir</th>
              <th>Tanggal Lahir</th>
              <th>Agama</th>
			  <th>Jenis Kelamin</th>
			  <th>Pendidikan Terakhir</th>
			  <th>Alamat</th>
			  <th>No Telepon</th>					
            </tr>
          </thead>
          <tbody>
						<?php $no = 1;
						foreach($row->result() as $key => $data) { ?>
            <tr>
              <td><?=$no++?>.</td>
							<td><?=$data->nama_tenaga_ahli?></td>
							<td><?=$data->divisi?></td>
							<td><?=$data->tempat_lahir?></td>
							<td><?=$data->tanggal_lahir?></td>
							<td><?=$data->agama?></td>
							<td><?=$data->jenis_kelamin?></td>
							<td><?=$data->pendidikan_terakhir?></td>
							<td><?=$data->alamat?></td>							
							<td><?=$data->no_telepon?></td>
							
            </tr>
						<?php
						}?>
          </tbody>
        </table>
      </div>
    </section>
