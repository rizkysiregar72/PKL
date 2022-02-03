
<!DOCTYPE html>
<html>
<head>
	<title>Surat Tugas</title>
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
				<td colspan="2"><hr></td>
			</tr>
		<table width="auto">
			<tr>
			<center>
				<font size="3"><b><u>SURAT TUGAS</u></b></font><br>
				<font size="2"><?php foreach ($s as $row): ?> <b><?php echo $row->nomor_surat?></b></td>	<?php endforeach; ?></font><br>
			</center>
			</tr>
		</table>
		</table>
		<table width="625">
			<tr>
		       <td>
			       <font size="2">Kepala Dinas Komunikasi, Informatika dan Statistik Kota Banjarmasin menugaskan Tenaga Ahli yang tersebut dibawah ini :
					</font>
		       </td>
		    </tr>
		</table>		
		<br>
		</table>
		<table>
			<tr class="text2">
				<td><b>Nama</b> </td>
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
		<br>
		<table width="625">
			<tr>
		       <td>
			    	<font size="2">Untuk melakukan <?php $no = 1; foreach ($s as $row): ?> <b><?php echo $row->jenis_tugas ?></b><?php endforeach; ?>
						pada tanggal <?php $no = 1; foreach ($s as $row): ?> <b><?php echo $row->tanggal ?></b><?php endforeach; ?>
					</font>
		       </td>
		    </tr>
		</table>
		<table width="625">
			<tr>
		       <td>
			    	<font size="2">Demikian Surat Tugas ini dibuat untuk dapat dilaksanakan sebagaimana mestinya.
					</font>
		       </td>
		    </tr>
		</table>
		<br>
		<table width="625">
			<tr>
				<td width="430"><br><br><br><br></td>
				<td class="text" align="center">Banjarmasin, <?php $no = 1; foreach ($s as $row): ?> <b><?php echo $row->tanggal ?></b><?php endforeach; ?> <br> Kepala Dinas<br><br><br><br><b><u>Windiasti Kartika, ST, MT</u></b><br><b>NIP : 19690608 199703 2 006</b></td>
			</tr>
	     </table>
	</center>
	<script type="text/javascript">
		window.print();
	</script>
</body>
</html>

