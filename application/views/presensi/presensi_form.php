<section class="content-header">
      <h1>Presensi Tenaga Ahli
        <small>Diskominfo</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Presensi Tenaga Ahli</li>
      </ol>
    </section>
		
    <!-- Main content -->
    <section class="content"> 
			<div class="box">
				<div class="box-header">
        	<h3 class="box-tittle"><?=ucfirst($page)?> Presensi Tenaga Ahli</h3>
					<div class="pull-right">
						<a href="<?=site_url('presensi')?>"class="btn btn-warning btn-flat">
							<i class="fa fa-undo"></i> Kembali
						</a>

					</div>
      	</div>

      <div class="box-body">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">			
				<form action="<?=site_url('presensi/proses')?>" method="post">					
					<div class="form-group">
					<input type="hidden" name="id" value="<?=$row->presensi_id?>">
						<label>Nama Tenaga Ahli *</label>
						<select name="tenaga_ahli_id" class="form-control" required>
							<option value="">- Pilih Nama Tenaga Ahli -</option>
						<?php foreach($tenaga_ahli_id->result() as $key => $data) { ?>
						<option value="<?=$data->tenaga_ahli_id?>" <?=$data->tenaga_ahli_id == $row->tenaga_ahli_id ? "selected" :null?>><?=$data->nama_tenaga_ahli?></option>
						<?php } ?>
					</select>
					</div>
					<div class="form-group">
						<label>Tanggal *</label>
						<input type="date" name="tanggal" value="<?=$row->tanggal?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Jam *</label>
						<input type="time" name="jam" value="<?=$row->jam?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Keterangan *</label>
						<select name="keterangan" class="form-control" required>
							<option value="">- Pilih -</option>
							<option value="Masuk">Masuk</option>
							<option value="Keluar">Keluar</option>
						</select>
					</div>

					<div class="form-group">
						<button type="submit" name="<?=$page?>" class="btn btn-success btn-sm">
						<i class ="fa fa-paper-plane"></i>Save
					</button>
						<button type="reset" class="btn btn-primary btn-sm">Clear</button>
						
					</div>

				</form>
			</div>
		</div>
      </div>
    </section>
