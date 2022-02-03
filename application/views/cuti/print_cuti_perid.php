
<!DOCTYPE html>
<html>
<head>
	<title>Surat Cuti</title>
	<style type="text/css">
		table {
			border-style: double;
			border-width: 3px;
			border-color: white;
		}
		table tr .text2 {
			text-align: right;
			font-size: 13px;
		}
		table tr .text {
			text-align: center;
			font-size: 13px;
		}
		table tr td {
			font-size: 13px;
		}

	</style>
</head>
<body>
<center>
		<table>
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
				<td colspan="2"><hr></td>
			</tr>
	<center>
		<table>
		<table width="625">
			<tr>
				<td class="text2">Banjarmasin, <?php foreach ($s as $row): ?> <b><?php echo $row->tanggal_pengajuan ?></b></td>	<?php endforeach; ?></td>
			</tr>
		</table>
		</table>
		<table>
			<tr class="text2">
				<td>Perihal </td>
				<td width="572"> : Permohonan <?php foreach ($s as $row): ?> <b><?php echo $row->jenis_cuti ?></b></td>	<?php endforeach; ?>
			</tr>
		</table>
		<br>
		<table width="625">
			<tr>
		       <td>
			       <font size="2">Kpd yth.<br>Kepala Dinas Komunikasi, Informatika dan Statistik</br>Kota Banjarmasin<br>Di tempat</font>
		       </td>
		    </tr>
		</table>
		<br>
		<table width="625">
			<tr>
		       <td>
			       <font size="2">Dengan Hormat,<br>Yang Bertanda Tangan Dibawah Ini :</font>
		       </td>
		    </tr>
		</table>
		<table>
			<tr class="text2">
				<td><b>Nama</b></td>
				<td width="541">:<?php $no = 1; foreach ($s as $row): ?> <b><?php echo $row->nama_tenaga_ahli ?></b></td>	<?php endforeach; ?>
			</tr>
			<tr>
				<td><b>Divisi</b></td>
				<td width="525">: <?php $no = 1; foreach ($s as $row): ?> <b><?php echo $row->divisi ?></b></td>	<?php endforeach; ?>
			</tr>
			<tr>
				<td><b>Jabatan</b></td>
				<td width="525">: <b>Tenaga Ahli</b>
			</tr>
		</table>
		<table width="625">
			<tr>
		       <td>
			       <font size="2">Bermaksud mengajukan <?php foreach ($s as $row): ?> <b><?php echo $row->jenis_cuti ?></b><?php endforeach; ?> selama <?php foreach ($s as $row): ?> <b><?php echo $row->jumlah_hari ?></b><?php endforeach; ?> hari
					terhitung mulai tanggal <?php foreach ($s as $row): ?> <b><?php echo $row->tanggal_mulai ?></b><?php endforeach; ?> sampai dengan tanggal <?php foreach ($s as $row): ?> <b><?php echo $row->tanggal_selesai ?></b><?php endforeach; ?>.
					</font>
		       </td>
		    </tr>
		</table>	
		<table width="625">
			<tr>
		       <td>
			       <font size="2">Demikian surat permohonan cuti ini saya ajukan. Terima Kasih Atas Perhatian Bapak/Ibu.</font>
		       </td>
		    </tr>
		</table>
		<br>
		<table width="625">
			<tr>
				<td width="390"><br><br><br><br></td>
				<td class="text" align="center">Hormat Saya<br><br><br><br><?php $no = 1; foreach ($s as $row): ?> <b><?php echo $row->nama_tenaga_ahli ?></b><?php endforeach; ?></td>
			</tr>
	     </table>
	</center>
	<script type="text/javascript">
		window.print();
	</script>
</body>
</html>

