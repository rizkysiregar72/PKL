<section class="content-header">
      <h1>Kinerja Tenaga Ahli
        <small>Diskominfo</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Kinerja Tenaga Ahli</li>
      </ol>
    </section>
		
    <!-- Main content -->
    <section class="content"> 
			<div class="box">
				<div class="box-header">
        	<h3 class="box-tittle"><?=ucfirst($page)?> Kinerja Tenaga Ahli</h3>
					<div class="pull-right">
						<a href="<?=site_url('kinerja')?>"class="btn btn-warning btn-flat">
							<i class="fa fa-undo"></i> Kembali
						</a>

					</div>
      	</div>

      <div class="box-body">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">			
				<?php echo form_open_multipart('kinerja/proses') ?>					
					<div class="form-group">
					<input type="hidden" name="id" value="<?=$row->kinerja_id?>">
						<label>Nama Tenaga Ahli *</label>
						<select name="tenaga_ahli_id" class="form-control" required>
							<option value="">- Pilih Nama Tenaga Ahli -</option>
						<?php foreach($tenaga_ahli_id->result() as $key => $data) { ?>
						<option value="<?=$data->tenaga_ahli_id?>" <?=$data->tenaga_ahli_id == $row->tenaga_ahli_id ? "selected" :null?>><?=$data->nama_tenaga_ahli?></option>
						<?php } ?>
					</select>
					</div>
					<div class="form-group">
						<label>Nama Penilai *</label>
						<select name="nama_penilai" class="form-control" required>
							<option value="">- Pilih Nama Penilai -</option>
							<option value="Muryadi Imansyah, S.Kom">Muryadi Imansyah, S.Kom</option>
						</select>
					</div>
					<div class="form-group">
						<label>Inisiatif *</label>
						<input type="text" name="inisiatif" id="inisiatif" onkeyup="average();" value="<?=$row->inisiatif?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Disiplin *</label>
						<input type="text" name="disiplin" id="disiplin" onkeyup="average();" value="<?=$row->disiplin?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Tanggung Jawab *</label>
						<input type="text" name="tanggung_jawab" id="tanggung_jawab" onkeyup="average();" value="<?=$row->tanggung_jawab?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Kerja Sama *</label>
						<input type="text" name="kerja_sama" id="kerja_sama" onkeyup="average();" value="<?=$row->kerja_sama?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Pemecahan Masalah *</label>
						<input type="text" name="pemecahan_masalah" id="pemecahan_masalah" onkeyup="average();" value="<?=$row->pemecahan_masalah?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Pengambilan Keputusan *</label>
						<input type="text" name="pengambilan_keputusan" id="pengambilan_keputusan" onkeyup="average();" value="<?=$row->pengambilan_keputusan?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Nilai Total *</label>
						<input type="text" name="nilai_total" id="nilai_total" onkeyup="average();"  value="<?=$row->nilai_total?>" class="form-control" readonly>
					</div>
					<div class="form-group">
						<label>Keterangan *</label>
						<input type="text" name="keterangan" id="keterangan" value="<?=$row->keterangan?>" class="form-control" readonly>
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
	  <script>
	function average() {
      var txtFirstNumberValue = document.getElementById('inisiatif').value;
      var txtSecondNumberValue = document.getElementById('disiplin').value;
	  var txtThirdNumberValue = document.getElementById('tanggung_jawab').value;
      var txtFourthNumberValue = document.getElementById('kerja_sama').value;
	  var txtFifthNumberValue = document.getElementById('pemecahan_masalah').value;
      var txtSixthNumberValue = document.getElementById('pengambilan_keputusan').value;
	  var nt = document.getElementById("nilai_total").value;
  	  var kt = document.getElementById("keterangan").value;
      var result = (parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue) + parseInt(txtThirdNumberValue) + parseInt(txtFourthNumberValue) + parseInt(txtFifthNumberValue) + parseInt(txtSixthNumberValue))/6;
      if (!isNaN(result)) {
         document.getElementById('nilai_total').value = result;
      } if (result >= 90.0) {
   		 kt = "Sangat Baik";
    
  	  } else if (result >= 80.0) {
    	kt = "Baik";
    
  	  } else if (result >= 70.0) {
    	kt = "Cukup";
  
  	  } else if (result < 70.0) {
   		 kt = "Kurang";
 	 } else {
  }
  
  	document.getElementById("keterangan").value = kt;
	}
</script>
    </section>
