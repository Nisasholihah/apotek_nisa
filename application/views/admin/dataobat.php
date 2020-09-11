<head></head>
<div class="page=header">
	<h3>Data Obat</h3>
</div>
<a href="<?php echo base_url().'obat/tambah_obat'; ?>" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-plus"></span>Obat Baru </a>
<br><br>
<div class="table_responsive">
	<table class="table table-bordered table-striped table-hover" id="table-datatable">
		<thead>
			<tr>
				<th>No</th>
				<th>Gambar</th>
				<th>Nama Obat</th>
				<th>Status</th>
				<th>Harga</th>
				<th width="10%">Pilihan</th>
			</tr>
		</thead>
	</tbody>
	     <?php 
	         $no = 1;
	         foreach ($obat as $b) {
	     ?>
	     <tr>
	     	<td><?php echo $no++; ?></td>
	     	<td><center><img src="<?php echo base_url(). '/assets/upload/'.$b->gambar; ?>" width="150" height="130" alt="Tidak ada gambar"></center></td>
	     	<td><?php echo $b->nama_obat ?></td>

	     	<td>
	     		<?php
	     		if($b->status == "1"){
	     			echo"<span class='badge badge-success'>Tersedia</span>";
	     		}else if($b->status == "2"){
	     			echo"<span class='badge badge-warning'>Habis</span>";
	     		}
	     		?>
	     	</td>

	     	<td><?php echo "Rp.".number_format($b->harga_obat)."/pcs"?></td>
	     	<td nowrap="nowrap">
	     		<a class="btn btn-warning btn-xs" href="<?php echo base_url().'obat/edit_obat/'.$b->id_obat; ?>"><span class="glyphicon glyphicon-pencil"> Edit </span></a>
	     		<a class="btn btn-danger btn-xs" href="<?php echo base_url().'obat/hapus_obat/'.$b->id_obat; ?>"><span class="glyphicon glyphicon-remove"> Hapus </span></a>	     		
	     	</td>
	     </tr>
	 <?php } ?>
	</tbody>
	</table>