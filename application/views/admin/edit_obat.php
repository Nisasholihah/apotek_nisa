<div class="page=header">
	<h3>Edit Obat</h3>	
</div>
<a href="<?php echo base_url(). 'obat/obat' ?>" class="btn btn-default btn-xs pull-right" '><i class="fa fa-arrow-left"></i> Kembali></a>
<br>
<?php foreach ($obat as $b){ ?>
<form action="<?php echo base_url(). 'obat/update_obat' ?>" method="post" enctype="multipart/form-data">
	<div class="form-group">

	<div class="form-group">
		<label class="font-weight-bold" for="nama_obat">Nama Obat</label>
		<input type="hidden" name="id_obat" value="<?php echo $b->id_obat; ?>">
		<input type="hidden" name="form-control" name="nama_obat" placeholder="Masukkan Nama Obat Baru" required="required" value="<?php echo $b->nama_obat; ?>">
	</div>

	<div class="form-group">
		<label class="font-weight-bold" for="stok">Stok Obat</label>
		<input type="text" class="form-control" name="stok" placeholder="Masukkan Stok Obat" required="required" value="<?php echo $b->stok; ?>">
	</div>

	<div class="form-group">
		<label class="font-weight-bold" for="stok">Harga Obat</label>
		<input type="text" class="form-control" name="harga_obat" placeholder="Masukkan Harga Obat" required="required" value="<?php echo $b->harga_obat; ?>">
	</div>

	<div class="form-group">
		<label class="font-weight-bold" form="status">Status</label>
		<select class="form-control" name="status" required="required">
			<option value="">- Pilih Status -</option>
			<option <?php if($b->status=="1"){echo "selected='selected'";} ?> value="1">Tersedia</option>
			<option <?php if($b->status=="2"){echo "selected='selected'";} ?> value="2">Habis</option>
		</select>
		
	</div>

	<div class="form-group">
		<label class="font-weight-bold" form="status">Gambar</label>
		<input type="hidden" name="id_obat" value="<?php echo $b->id_obat; ?>">
		<?php
		if(isset($b->gambar))
		{
			echo '<img src="'.base_url().'assets/obat/'.$b->gambar.'" width="30%">';
		}

		?>
		<input type="gambar" type="file" class="form-control">
    </div>
    <div class="form-group">
    	<input type="submit" value="update" class="btn btnprimary">
    	
    </div>