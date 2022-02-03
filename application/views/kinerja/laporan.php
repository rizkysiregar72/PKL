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
			<?php $this->view('message')?>
			<div class="box">
				<div class="box-header">
        	<h3 class="box-tittle">Laporan Kinerja Tenaga Ahli</h3>
					<div class="pull-right">
						<a href="<?=site_url('kinerja/print')?>"class="btn btn-info btn-flat">
       						<i class="fa fa-print"></i> Cetak Data Kinerja Tenaga Ahli
      					</a>
					</div>
      	</div>

      <div class="box-body table-responsive">
				<table class="table table-bordered table-striped" id="table1">
          <thead>
            <tr>
              <th>No.</th>
              <th>Nama Tenaga Ahli</th>
			  <th>Nama Penilai</th>
              <th>Inisiatif</th>
			  <th>Disiplin</th>
			  <th>Tanggung Jawab</th>
			  <th>Kerja Sama</th>
			  <th>Pemecahan Masalah</th>
			  <th>Pengambilan Keputusan</th>
			  <th>Nilai Total</th>
			  <th>Keterangan</th>
			  <th>Action</th>
            </tr>
          </thead>
          <tbody>
						<?php $no = 1;
						foreach($row->result() as $key => $data) { ?>
            <tr>
              <td><?=$no++?>.</td>
							<td><?=$data->nama_tenaga_ahli?></td>
							<td><?=$data->nama_penilai?></td>
							<td><?=$data->inisiatif?></td>
							<td><?=$data->disiplin?></td>
							<td><?=$data->tanggung_jawab?></td>
							<td><?=$data->kerja_sama?></td>							
							<td><?=$data->pemecahan_masalah?></td>
							<td><?=$data->pengambilan_keputusan?></td>
							<td><?=$data->nilai_total?></td>
							<td><?=$data->keterangan?></td>
							<td class="text-center" width="160 px">
								<a href="<?=site_url('kinerja/kinerjaperid/'.$data->kinerja_id)?>" class="btn btn-primary btn-xs">
									<i class="fa fa-print"></i> Cetak
								</a>
							</td>
            </tr>
			<?php
			}?>
          </tbody>
        </table>
      </div>
    </section>
