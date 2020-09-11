<div class="page-header">
	<h3>Obat Baru</h3>
</div>
<a href="<?php?>" class=""><i class=""></i> Kembali</a>

<br>

<form action="<?php?>" method="" enctype="">

	<div class="form-group">
		<label>Nama</label>
		<input type="text" name="nama_obat" placeholder="Masukkan Nama Obat" class="form-control">
		<?php echo base_error('nama_obat'); ?>
	</div>

	<div class="form-group">
		<label>Stok</label>
		<input type="text" name="stok" placeholder="Masukkan Stok Obat" class="form-control">
		<?php echo base_error('stok'); ?>
	</div>

	<div class="form-group">
		<label>Harga</label>
		<input type="text" name="harga_obat" placeholder="Masukkan Harga Obat" class="form-control">
		<?php echo base_error('harga_obat'); ?>
	</div>

	<div class="form-group">
		<label>Gambar</label>
		<input type="file" name="gambar" class="form-control">
		<?php echo base_error('gambar'); ?>
	</div>

	<div class="form-group">
		<input type="submit" value="simpan" class="btn btnprimary">
	</div>
</form>