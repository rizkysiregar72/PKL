<section class="content-header">
      <h1>Cuti Tenaga Ahli
        <small>Diskominfo</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Cuti Tenaga Ahli</li>
      </ol>
    </section>
		
    <!-- Main content -->
    <section class="content"> 
			<div class="box">
				<div class="box-header">
        	<h3 class="box-tittle"><?=ucfirst($page)?> Cuti Tenaga Ahli</h3>
					<div class="pull-right">
						<a href="<?=site_url('cuti')?>"class="btn btn-warning btn-flat">
							<i class="fa fa-undo"></i> Kembali
						</a>

					</div>
      	</div>

      <div class="box-body">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">			
				<form action="<?=site_url('cuti/proses')?>" method="post">					
					<div class="form-group">
					<input type="hidden" name="id" value="<?=$row->cuti_id?>">
						<label>Nama Tenaga Ahli *</label>
						<select name="tenaga_ahli_id" class="form-control" required>
							<option value="">- Pilih Nama Tenaga Ahli -</option>
						<?php foreach($tenaga_ahli_id->result() as $key => $data) { ?>
						<option value="<?=$data->tenaga_ahli_id?>" <?=$data->tenaga_ahli_id == $row->tenaga_ahli_id ? "selected" :null?>><?=$data->nama_tenaga_ahli?></option>
						<?php } ?>
					</select>
					</div>
					<div class="form-group">
						<label>Tanggal Pengajuan *</label>
						<input type="date" name="tanggal_pengajuan" value="<?=$row->tanggal_pengajuan?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Jenis Cuti *</label>
						<select name="jenis_cuti" class="form-control" required>
							<option value="">- Pilih Jenis Cuti -</option>
							<option value="Cuti Tahunan">Cuti Tahunan</option>
							<option value="Cuti Menikah">Cuti Menikah</option>
							<option value="Cuti Sakit">Cuti Sakit</option>
							<option value="Cuti Melahirkan/Bersalin">Cuti Melahirkan/Bersalin</option>
							<option value="Cuti Karena Alasan Penting">Cuti Karena Alasan Penting</option>
						</select>
					</div>
					<div class="form-group">
						<label>Tanggal Mulai *</label>
						<input type="date" name="tanggal_mulai" value="<?=$row->tanggal_mulai?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Tanggal Selesai *</label>
						<input type="date" name="tanggal_selesai" value="<?=$row->tanggal_selesai?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Jumlah Hari *</label>
						<input type="text" name="jumlah_hari" value="<?=$row->jumlah_hari?>" class="form-control" required>
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
