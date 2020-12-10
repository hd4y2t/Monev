<div class="content mt-3">
	<div class="card">
    <div class="card-header">
        <strong>Edit Data User</strong>
		<a style="float:right" href="<?php echo base_url() ?>user" class="btn btn-sm btn-info"><i class="fa fa-back"></i> Kembali</a>
    </div>
    <div class="card-body card-block">
	<?php foreach($data_user as $data){ ?>
		<form action="<?php echo base_url() ?>user/update/<?php echo $data->id_user ?>" method="post" class="form-horizontal"> 		
		<div class="row form-group">           
            <div class="col col-md-2">
				<label class="form-control-label">Nama Lengkap</label>
			</div>
            <div class="col-12 col-md-5">
				<input type="text" name="nama_lengkap" class="form-control" required autocomplete="off" value="<?php echo $data->nama_lengkap ?>">
			</div>
		
		</div>
		<div class="row form-group">           
            <div class="col col-md-2">
				<label class="form-control-label">Username</label>
			</div>
            <div class="col-12 col-md-5">
				<input type="text" name="username" class="form-control" required autocomplete="off" value="<?php echo $data->username ?>">
			</div>
		
		</div>
		<div class="row form-group">
            <div class="col col-md-2">
				<label class="form-control-label">Password</label>
			</div>
            <div class="col-12 col-md-5">
				<input type="password" name="password" class="form-control" required autocomplete="off" value="<?php echo $data->password ?>">
			</div>
		</div>
		<div class="row form-group">
            <div class="col col-md-2">
				<label class="form-control-label">Status</label>
			</div>
            <div class="col-12 col-md-5">
				
				<select  name="status" class="form-control" required>
					<option value="" selected disabled>Pilih</option>
					<option value="LPM" <?php if($data->status_user=="LPM"){ echo "selected"; } ?>>LPM</option>
					<option value="WADEK" <?php if($data->status_user=="WADEK"){ echo "selected"; } ?>>Wakil Dekan</option>
					<option value="PRODI" <?php if($data->status_user=="PRODI"){ echo "selected"; } ?>>Program Studi</option>
					<option value="GPMP" <?php if($data->status_user=="GPMP"){ echo "selected"; } ?>>GPMP</option>
					<option value="GPMF" <?php if($data->status_user=="GPMF"){ echo "selected"; } ?>>GPMF</option>
					<option value="MHS" <?php if($data->status_user=="MHS"){ echo "selected"; } ?>>Ketua Kelas</option>
				</select>
			</div>
		</div>
		
		<input type="submit" name="simpan" value="Ubah" class="btn btn-warning btn-sm">		
        <!--<a class="btn btn-danger btn-sm" href="<?php //echo base_url() ?>user">Refresh</a>-->
        
		
        </form>
	<?php } ?>
    </div>
</div>
</div>