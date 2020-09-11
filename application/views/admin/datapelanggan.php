<head></head>
<div class="page=header">
	<h3>Data pelanggan</h3>
</div>
<a href="<?php echo base_url().'obat/tambah_pelanggan'; ?>" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-plus"></span>Pelanggan Baru </a>
<br><br>
<div class="table_responsive">
	<table class="table table-bordered table-striped table-hover" id="table-datatable">
		<thead>
			<tr>
				<th width="4%">No</th>
				<th>Nama Pelanggan</th>
				<th width="10%">Jenis Kelamin</th>
				<th width="10%">Alamat</th>
				<th width="10%">Pilihan</th>
			</tr>
		</thead>
	</tbody>
	     <?php 
	         $no = 1;
	         foreach ($pelanggan as $b) {
	     ?>
	     <tr>
	     	<td><? echo $no++; ?></td>
	     	<td><? echo $p->nama_pelanggan ?></td>
	     	<td><? echo $p->jenis_kelamin ?></td>
	     	<td><? echo $p->telpon ?></td>
	     	<td><? echo $p->alamat ?></td>
	     	<td nowrap="nowrap">
	     		<a class="btn btn-warning btn-xs" href="<?php echo base_url().'pelanggan/edit_pelanggan/'.$p->id_pelanggan; ?>"><span class="glyphicon glyphicon-pencil">Edit</span></a>
	     		<a class="btn btn-warning btn-xs" href="<?php echo base_url().'pelanggan/hapus_pelanggan/'.$p->id_pelanggan; ?>"><span class="glyphicon glyphicon-remove">Hapus</span></a>
	     		
	     	</td>
	     </tr>
	     <?php } ?>
	 </tbody>
</table>
 </div>