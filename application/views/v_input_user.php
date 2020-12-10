<div class="content mt-3">
	<div class="card">
    <div class="card-header">
        <strong>Input Data User</strong>
		<a style="float:right" href="<?php echo base_url() ?>user" class="btn btn-sm btn-info"><i class="fa fa-back"></i> Kembali</a>
    </div>
    <div class="card-body card-block">
	
		<form action="<?php echo base_url() ?>user/input_data" method="post" class="form-horizontal">
		<div class="row form-group">
            <div class="col col-md-2">
				<label class="form-control-label">Nama lengkap</label>
			</div>
            <div class="col-12 col-md-5">
				<input type="text" name="nama_lengkap" class="form-control" required autocomplete="off">
			</div>
		</div>
		<div class="row form-group">
            <div class="col col-md-2">
				<label class="form-control-label">Username</label>
			</div>
            <div class="col-12 col-md-5">
				<input type="text" name="username" class="form-control" required autocomplete="off">
			</div>
		</div>
		<div class="row form-group">
            <div class="col col-md-2">
				<label class="form-control-label">Password</label>
			</div>
            <div class="col-12 col-md-5">
				<input type="password" name="password" class="form-control" required autocomplete="off">
			</div>
		</div>
		<div class="row form-group">
            <div class="col col-md-2">
				<label class="form-control-label">Status</label>
			</div>
            <div class="col-12 col-md-5">
				<select  name="status" class="form-control" required>
					<option value="" selected disabled>Pilih</option>
					<option value="LPM">LPM</option>
					<option value="WADEK">Wakil Dekan</option>
					<option value="PRODI">Program Studi</option>
					<option value="GPMP">GPMP</option>
					<option value="GPMF">GPMF</option>
					<option value="MHS">Ketua Kelas</option>
				</select>
			</div>
		</div>
		
       	
		<input type="submit" name="simpan" value="Simpan" class="btn btn-primary btn-sm">
        <a class="btn btn-danger btn-sm" href="<?php echo base_url() ?>user">Refresh</a>
        </form>
	
    </div>
</div>
</div>