<div class="content mt-3">
	<div class="card">
    <div class="card-header">
        <strong>Input Temuan GPMF</strong>		
    </div>
    <div class="card-body card-block">
	
		<form action="" method="post" class="form-horizontal"> 
		
		<div class="row form-group">
            <div class="col col-md-2">
				<label class="form-control-label">Nama Lembaga</label>
			</div>
            <div class="col-12 col-md-10">
				<input type="text" name="nama_lembaga" class="form-control" required>
			</div>
		</div>		
		<div class="row form-group">
            <div class="col col-md-2">
				<label class="form-control-label">Nama Fakultas</label>
			</div>
            <div class="col-12 col-md-10">
				<input type="text" name="nama_fakultas" class="form-control" required>
			</div>
		</div>	
		<div class="row form-group">
            <div class="col col-md-2">
				<label class="form-control-label">Nama Prodi</label>
			</div>
            <div class="col-12 col-md-10">
				<input type="text" name="nama_prodi" class="form-control" required>
			</div>
		</div>
		<div class="row form-group">
            <div class="col col-md-2">
				<label class="form-control-label">Hari</label>
			</div>
            <div class="col-12 col-md-2">
				<select name="hari" class="form-control" required>
					<option value="" selected disabled>Silahkan pilih</option>
					<option value="Senin">Senin</option>
					<option value="Selasa">Selasa</option>
					<option value="Rabu">Rabu</option>
					<option value="Kamis">Kamis</option>
					<option value="Jumat">Jum'at</option>
					<option value="Sabtu">Sabtu</option>
					<option value="Minggu">Minggu</option>
				</select>
			</div>
		</div>
		<div class="row form-group">
            <div class="col col-md-2">
				<label class="form-control-label">Tanggal</label>
			</div>
            <div class="col-12 col-md-3">
				<input type="date" name="tanggal" class="form-control" required>
			</div>
		</div>
		<div class="row form-group">
            <div class="col col-md-2">
				<label class="form-control-label">Catatan Temuan</label>
			</div>
            <div class="col-12 col-md-10">
				<textarea name="catatan_temuan" class="form-control" rows="3"></textarea>
			</div>
		</div>
		<div class="row form-group">
            <div class="col col-md-2">
				<label class="form-control-label">Saran Perbaikan</label>
			</div>
            <div class="col-12 col-md-10">
				<textarea name="saran_perbaikan" class="form-control" rows="3"></textarea>
			</div>
		</div>		
       	
		<input type="submit" name="simpan" value="Simpan" class="btn btn-primary btn-sm">
        <a class="btn btn-success btn-sm" href="<?php echo base_url() ?>hasiltemuanGPMF">Refresh</a>
        </form>
	
    </div>
</div>
</div>

<?php
	if(isset($_POST["simpan"])){
		include 'koneksi.php';
		$sql=mysqli_query($k,"insert into hasil_temuan_GPMF values ('','$_SESSION[tahun]','$_POST[nama_lembaga]','$_POST[nama_fakultas]','$_POST[nama_prodi]','$_POST[hari]','$_POST[tanggal]','$_POST[catatan_temuan]','$_POST[saran_perbaikan]','$_SESSION[id]')");
		if($sql){
			echo "<script>alert('Data telah disimpan'); document.location='/?'</script>";
		}
	}
?>