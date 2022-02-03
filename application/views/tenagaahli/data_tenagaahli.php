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
        	<h3 class="box-tittle">Data Tenaga Ahli</h3>
					
					<div class="pull-right">
						<a href="<?=site_url('tenagaahli/add')?>"class="btn btn-primary btn-flat">
							<i class="fa fa-plus"></i> Tambah Data Tenaga Ahli
						</a>
						<a href="<?=site_url('tenagaahli/print')?>"class="btn btn-info btn-flat">
       						<i class="fa fa-print"></i> Cetak Data Tenaga Ahli
      					</a>
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
			  <th>Action</th>						
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
							<td class="text-center" width="160 px">
								<div>
								<a href="<?=site_url('tenagaahli/edit/'.$data->tenaga_ahli_id)?>" class="btn btn-primary btn-xs">
							<i class="fa fa-pencil"></i> Update
						</a>
								<a href="<?=site_url('tenagaahli/delete/'.$data->tenaga_ahli_id)?>" onclick="return confirm('Apakah Anda Yakin Untuk Menghapus Data Ini?')" class="btn btn-danger btn-xs">
							<i class="fa fa-trash"></i> Delete
						</a> 
						</div>
					</td>
            </tr>
						<?php
						}?>
          </tbody>
        </table>
      </div>
    </section>
