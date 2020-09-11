<div class="page=header">
	<h3>Edit Pelanggan</h3>	
</div>
<a href="<?php base_url().'Pelanggan/Pelanggan' ?>" class="btn btn-default btn-xs pull-right" '><i class="fa fa-arrow-left"></i> Kembali</a>
</br>
<?php foreach ($pelanggan as $p) { ?>
<form method="" action="<?php base_url().'Pelanggan/update_pelanggan'; ?>">
	<div class="form-group">

	<div class="form-group">
		<label class="font-weight-bold" for="nama_pelanggan">Nama Pelanggan</label> 
		<input type="hidden".value="<?php.echo.$p->id_pelanggan; ?>" name="id_pelanggan">
		<input type="text".class="form-control" name="nama_pelanggan" placeholder="Masukkan Nama Pelanggan" required="required" value="<?php echo.$p->nama_pelanggan;.?>">	
	</div> 

	<div class="form-group">
		<label class="font-weight-bold" for="jenis_kelamin">Jenis Kelamin</label>
		<input type="hidden" value="<?php echo $p->id_pelanggan; ?>" name="id_pelanggan">
		<select class="form-control" name="jenis_kelamin" required="required" value="<?php echo $p->jenis_kelamin; ?>">
			<option>-Pilih Jenis Kelamin-</option>
			<option>Laki-Laki</option>
			<option>Perempuan</option>
		</select>
	</div>
	<div class="form-group">
		<label class="font-weight-bold" for="telpon">No.Telpon</label>
		<input type="hidden" value="<?php echo $p->id_pelanggan; ?>" name="id_pelanggan">
		<input type="text" class="form-control" name="telpon" placeholder="Masukkan No.telpon" required="required" value="<?php echo $p->telpon; ?>"></div>

	<div class="form-group">
		<label class="font-weight-bold" for="alamat"></label>
		<label type="hidden" value="<?php echo $p->id_pelanggan; ?>" name="id_pelanggan"></label>
		<label type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat pelanggan" required="required" value="<?php echo $p->alamat; ?>">	
		</div>
	<div class="form-group">
		<input type="submit" .value="Update" .class="btn btn-primary">	
	</div>
</form>
<?php } ?>
</div>