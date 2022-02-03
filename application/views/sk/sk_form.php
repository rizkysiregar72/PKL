<section class="content-header">
      <h1>Surat Keputusan
        <small>Diskominfo</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Surat Keputusan</li>
      </ol>
    </section>
		
    <!-- Main content -->
    <section class="content"> 
			<div class="box">
				<div class="box-header">
        	<h3 class="box-tittle"><?=ucfirst($page)?> Surat Keputusan</h3>
					<div class="pull-right">
						<a href="<?=site_url('sk')?>"class="btn btn-warning btn-flat">
							<i class="fa fa-undo"></i> Kembali
						</a>

					</div>
      	</div>

      <div class="box-body">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<?php echo form_open_multipart('sk/proses') ?>								
					<div class="form-group">
					<input type="hidden" name="id" value="<?=$row->sk_id?>">
						<label>Nama Tenaga Ahli *</label>
						<select name="tenaga_ahli_id" class="form-control" required>
							<option value="">- Pilih Nama Tenaga Ahli -</option>
						<?php foreach($tenaga_ahli_id->result() as $key => $data) { ?>
						<option value="<?=$data->tenaga_ahli_id?>" <?=$data->tenaga_ahli_id == $row->tenaga_ahli_id ? "selected" :null?>><?=$data->nama_tenaga_ahli?></option>
						<?php } ?>
					</select>
					</div>
					<div class="form-group">
						<label>Nomor Surat *</label>
						<input type="text" name="nomor_surat" value="<?=$row->nomor_surat?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label>TMT Pengangkatan *</label>
						<input type="date" name="tmt_pengangkatan" value="<?=$row->tmt_pengangkatan?>" class="form-control" required>
					</div>
					<div class="form-group">
						<button type="submit" name="<?=$page?>" class="btn btn-success btn-sm">
						<i class ="fa fa-paper-plane"></i>Save
					</button>
						<button type="reset" class="btn btn-primary btn-sm">Clear</button>
						
					</div>
					<?php echo form_close() ?>
			</div>
		</div>
      </div>
    </section>
