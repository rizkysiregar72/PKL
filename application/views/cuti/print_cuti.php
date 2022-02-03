<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Laporan Cuti Tenaga Ahli</title>
  <link rel="stylesheet" href="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <style>
    .line-title{
      border: 0;
      border-style: inset;
      border-top: 1px solid #000;
    }
  </style>
</head>
<body>
  <table style="width: 100%;">
	<tr> 
				<td><img src="<?= base_url() ?>assets\dist\img\Kayu.png" width="90" height="100" ></td> 
				<td> 
					<center> 
						<font size="4">PEMERINTAH KOTA BANJARMASIN</font><br> 
						<font size="5"><b>DINAS KOMUNIKASI, INFORMATIKA DAN STATISTIK</b></font><br> 
						<font size="2">Jalan RE.Martadianata No.1 Kode Pos 70111 gedung Blok B Lt.Dasar - Banjarmasin</font><br> 
						<font size="2">EMAIL : <font color="blue"><u>diskominfotik@gmail.banjarmasinkota.go.id</u></font> Website : diskominfotik.banjarmasinkota.go.id</i></font> 
					</center> 
				</td> 
			<td><img src="<?= base_url() ?>assets\dist\img\Diskominfo.png" width="90" height="90"></td>
			</tr>
  </table>

  <hr class="line-title"> 
  <p align="center">
    LAPORAN DATA CUTI TENAGA AHLI<br>
  </p>
  <table class="table table-bordered">
    <tr>
			<th>No.</th>
      <th>Nama Tenaga Ahli</th>
			<th>Tanggal Pengajuan</th>
      <th>Jenis Cuti</th>
			<th>Tanggal Mulai</th>
			<th>Tanggal Selesai</th>
			<th>Jumlah Hari</th>
    </tr>
	
		<?php $no = 1; foreach ($s as $row): ?>
      <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $row->nama_tenaga_ahli?></td>
        <td><?php echo $row->tanggal_pengajuan ?></td>
        <td><?php echo $row->jenis_cuti ?></td>
				<td><?php echo $row->tanggal_mulai ?></td>
				<td><?php echo $row->tanggal_selesai ?></td>
				<td><?php echo $row->jumlah_hari ?></td>
      </tr>
	  
	<?php endforeach; ?>
	</table>
	<script type="text/javascript">
		window.print();
	</script>
</body>
