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
			<div class="box">
				<div class="box-header">
        	<h3 class="box-tittle"><?=ucfirst($page)?> Tenaga Ahli</h3>
					<div class="pull-right">
						<a href="<?=site_url('tenagaahli')?>"class="btn btn-warning btn-flat">
							<i class="fa fa-undo"></i> Kembali
						</a>

					</div>
      	</div>

      <div class="box-body">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">			
				<form action="<?=site_url('tenagaahli/proses')?>" method="post">					
				<div class="form-group">
						<label>Nama Tenaga Ahli *</label>
						<input type="hidden" name="id" value="<?=$row->tenaga_ahli_id?>">
						<input type="text" name="nama_tenaga_ahli" value="<?=$row->nama_tenaga_ahli?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Divisi *</label>
						<select name="divisi" class="form-control" required>
							<option value="">- Pilih Divisi -</option>
							<option value="Jaringan">Jaringan</option>
							<option value="Programmer">Programmer</option>
						</select>
					</div>
					<div class="form-group">
						<label>Tempat Lahir *</label>
						<input type="text" name="tempat_lahir" value="<?=$row->tempat_lahir?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Tanggal Lahir *</label>
						<input type="date" name="tanggal_lahir" value="<?=$row->tanggal_lahir?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Agama *</label>
						<select name="agama" class="form-control" required>
							<option value="">- Pilih Agama -</option>
							<option value="Islam">Islam</option>
							<option value="Kristen">Kristen</option>
							<option value="Katolik">Katolik</option>
							<option value="Hindu">Hindu</option>
							<option value="Khonghucu">Khonghucu</option>
						</select>
					</div>
					<div class="form-group">
						<label>Jenis Kelamin *</label>
						<select name="jenis_kelamin" class="form-control" required>
							<option value="">- Pilih Jenis Kelamin -</option>
							<option value="Laki - Laki">Laki - Laki</option>
							<option value="Perempuan">Perempuan</option>
						</select>
					</div>
					<div class="form-group">
					<label>Pendidikan Terakhir *</label>
						<input type="text" name="pendidikan_terakhir" value="<?=$row->pendidikan_terakhir?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Alamat *</label>
						<textarea name="alamat" value="<?=$row->alamat?>" class="form-control" ><?=$row->alamat?></textarea>
					</div>
					<div class="form-group">
					<label>No Telepon *</label>
						<input type="text" name="no_telepon" value="<?=$row->no_telepon?>" class="form-control" required>
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
