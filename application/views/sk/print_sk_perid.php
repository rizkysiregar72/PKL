
<!DOCTYPE html>
<html>
<head>
	<title>Surat Keputusan</title>
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
		<table width="auto">
			<tr>
			<center>
				<font size="3"><b><u>SURAT KEPUTUSAN</u></b></font><br>
				<font size="2"><?php foreach ($s as $row): ?> <b><?php echo $row->nomor_surat?></b></td>	<?php endforeach; ?></font><br>
					<br>
				<font size="2"><b>Tentang</b></font><br>
				<font size="2"><b>PENGANGKATAN TENAGA AHLI</b></font><br>
			</center>
			</tr>
		</table>
		<table> 
  			<tr class="text2"> 
    			<td>Menimbang <br><br><br></td> 
    			<td width="572"> : Bahwa berdasarkan seleksi penerimaan tenaga ahli Non-ASN dilingkungan Diskominfotik Kota Banjarmasin, 
					saudara <?php foreach ($s as $row): ?> <b><?php echo $row->nama_tenaga_ahli?></b><?php endforeach; ?> telah memenuhi syarat untuk diangkat sebagai Tenaga Ahli Sistem Informasi
				</td>
   			</tr> 
			   <br>
   			<tr> 
				<td>Mengingat</td> 
    			<td width="572"> : APBD Dan DPA Dinas Komunikasi, Informatika Dan Statistik Kota Banjarmasin</td>
   			</tr>
			   <br>
			<tr> 
				<td>Memperhatikan <br><br></td> 
    			<td width="572"> : Kebutuhan akan sumber daya manusia di Dinas Komunikasi, Informatika Dan Statistik sebagai tenaga ahli 
					Non-ASN
				</td>
   			</tr>
  		</table>
		<table width="auto">
			<tr>
			<center>
				<font size="2"><b>M E M U T U S K A N</b></font><br>
			</center>
			</tr>
		</table>
		<table> 
  			<tr class="text2"> 
    			<td>Menetapkan <br><br></td> 
    			<td width="540"> : KEPUTUSAN WALIKOTA TENTANG PENGANGKATAN TENAGA AHLI SISTEM INFORMASI KOTA BANJARMASIN</td>
   			</tr> 
			   <br>
   			<tr> 
				<td><b>Pertama</b></td> 
				<td width="540"></td>
   			</tr>
			<tr> 
				<td>Mengangkat Saudara</td> 
				<td width="540"></td>
   			</tr>
			   <br>
			<tr> 
				<td><b>Nama</b></td> 
				<td width="540"> : <?php foreach ($s as $row): ?> <b><?php echo $row->nama_tenaga_ahli?></b><?php endforeach; ?></td>
   			</tr>
			<tr> 
				<td><b>Tenaga Ahli</b></td> 
				<td width="540"> : <b>Dinas Komunikasi, Informatika dan Statistik Kota Banjarmasin</b></td>
   			</tr>
			<tr> 
				<td><b>Terhitung Tanggal</b></td> 
				<td width="540"> : <?php foreach ($s as $row): ?> <b><?php echo $row->tmt_pengangkatan?></b><?php endforeach; ?></td>
   			</tr>
			<tr> 
				<td><b>Divisi</b></td> 
				<td width="540"> : <?php foreach ($s as $row): ?> <b><?php echo $row->divisi?></b><?php endforeach; ?></td>
   			</tr>
			<tr> 
				<td><b>Kedua</b></td> 
				<td width="540"> : Gaji dan fasilitas tertuang pada lampiran satu</td>
   			</tr>
			<tr> 
				<td><b>Ketiga</b></td> 
				<td width="540"> : Tugas dan kewajiban serta wewenang akan tertuang pada lampiran dua</td>
   			</tr>
			<tr> 
				<td><b>Keempat</b></td> 
				<td width="540"> : Dalam melaksanakan tugas dan wewenang Saudara bertanggung jawab kepada Kepala Bidang Teknologi Informasi Dan Komunikasi</td>
   			</tr>
			<tr> 
				<td><b>Kelima</b></td> 
				<td width="540"> : Keputusan ini akan diadakan penyesuaian sebagaimana mestinya, apabila Diperlukan di kemudian hari</td>
   			</tr>
  		</table>
		<br>
		<table width="625">
			<tr>
				<td width="320"><br><br></td>
				<td class="text" align="center">DITETAPKAN DI : BANJARMASIN<br>PADA TANGGAL : <?php foreach ($s as $row): ?> <b><?php echo $row->tmt_pengangkatan?></b><?php endforeach; ?><br>WALIKOTA BANJARMASIN<br><br><br><br>IBNU SINA</td>
			</tr>
	     </table>
	</center>
	<script type="text/javascript">
		window.print();
	</script>
</body>
</html>

