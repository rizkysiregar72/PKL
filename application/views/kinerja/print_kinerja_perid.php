<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kinerja</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
		th, td {
            padding: 5px;
        }
        th {
            color: black;
        }
    </style>
</head>
<body>
<table>
		<tr> 
    <td align="center"><img src="<?= base_url() ?>assets\dist\img\Kayu.png" width="90" height="100" ></td> 
    <td> 
    <center> 
     <font size="4">PEMERINTAH KOTA BANJARMASIN</font><br> 
     <font size="5"><b>DINAS KOMUNIKASI, INFORMATIKA DAN STATISTIK</b></font><br> 
     <font size="2">Jalan RE.Martadianata No.1 Kode Pos 70111 gedung Blok B Lt.Dasar - Banjarmasin</font><br> 
     <font size="2">EMAIL : <font color="blue"><u>diskominfotik@gmail.banjarmasinkota.go.id</u></font> Website : diskominfotik.banjarmasinkota.go.id</i></font> 
    </center> 
    </td> 
  <td align="center"><img src="<?= base_url() ?>assets\dist\img\Diskominfo.png" width="90" height="90"></td>
   </tr>
   </table>
				<td colspan="2"><hr></td>
			</tr>
    <table border="1px solid black">
        <tr>
            <th rowspan="4" >1</th>
            <th align="left"><b>YANG DINILAI</b></th>
            <th></th>
        </tr>
        <tr>
            <th align="left">a. Nama</th>
            <th align="left"><?php foreach ($s as $row): ?> <b><?php echo $row->nama_tenaga_ahli?></b><?php endforeach; ?></th>
        </tr>
        <tr>
            <th align="left">b. Divisi</th>
            <th align="left"><?php foreach ($s as $row): ?> <b><?php echo $row->divisi?></b><?php endforeach; ?></th>
        </tr>
        <tr>
            <th align="left">c. Jabatan</th>
            <th align="left">Tenaga Ahli</th>
        </tr>
        <tr>
            <th rowspan="2" >2</th>
            <th align="left"><b>YANG MENILAI</b></th>
            <th></th>
        </tr>
        <tr>
            <td align="left">a. Nama</td>
            <td align="left"><?php foreach ($s as $row): ?> <b><?php echo $row->nama_penilai?></b><?php endforeach; ?></td>
        </tr>
        <tr>
            <th rowspan="9" >3</th>
            <th align="left"><b>PENILAIAN</b></th>
            <th></th>
        </tr>
        <tr>
        <tr>
            <td align="center">UNSUR YANG DINILAI</td>
            <td align="center">NILAI</td>
        </tr>
        <tr>
            <td>a. Inisiatif</td>
            <td><?php foreach ($s as $row): ?> <b><?php echo $row->inisiatif?></b><?php endforeach; ?></td>
        </tr>
        <tr>
            <td>b. Disiplin</td>
            <td><?php foreach ($s as $row): ?> <b><?php echo $row->disiplin?></b><?php endforeach; ?></td>
        </tr>
        <tr>
            <td>c. Tanggung Jawab</td>
            <td><?php foreach ($s as $row): ?> <b><?php echo $row->tanggung_jawab?></b><?php endforeach; ?></td>
        </tr>
        <tr>
            <td>d. Kerja Sama</td>
            <td><?php foreach ($s as $row): ?> <b><?php echo $row->kerja_sama?></b><?php endforeach; ?></td>
        </tr>
        <tr>
            <td>e. Pemecahan Masalah</td>
            <td><?php foreach ($s as $row): ?> <b><?php echo $row->pemecahan_masalah?></b><?php endforeach; ?></td>
        </tr>
        <tr>
            <td>f. Pengambilan Keputusan</td>
            <td><?php foreach ($s as $row): ?> <b><?php echo $row->pengambilan_keputusan?></b><?php endforeach; ?></td>
        </tr>
        <tr>
            <th colspan="2"> Nilai Total</th>
            <th align="center"><b><?php foreach ($s as $row): ?> <b><?php echo $row->nilai_total?></b><?php endforeach; ?></b></th>
        </tr>
        <tr>
            <th colspan="2"> Keterangan</th>
            <th align="center"><b><?php foreach ($s as $row): ?> <b><?php echo $row->keterangan?></b><?php endforeach; ?></b></th>
        </tr>
    </table>
    <br>
        <div style="width: 25%; text-align: center; float: right;">Pejabat Penilai <br><br><br><br><u><?php foreach ($s as $row): ?> <b><?php echo $row->nama_penilai?></b><?php endforeach; ?></u> <br>NIP. 19830602 201001 1 019</div>
<script type="text/javascript">
	window.print();
</script>
</body>
</html>
