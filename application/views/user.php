<?php
	include "koneksi.php";
	
	if(isset($_POST["simpan"])){
		$sql=mysqli_query($k,"select * from user where username='$_POST[username]'");
		if(mysqli_num_rows($sql)==0){
			$sql = mysqli_query($k, "insert into user values ('','$_POST[username]','$_POST[password]','$_POST[status]')");
		}else{
			?>
			<!--<script>document.location="?halaman=bank";</script>-->
			<div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">			
                <span class="badge badge-pill badge-danger">Info</span> Data yang dimasukan sudah ada. !
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
                </button>
            </div>
			<?php
			goto form;
		}
		if($sql){
			?>
			
			<div class="sufee-alert alert with-close alert-success alert-dismissible fade show">			
                <span class="badge badge-pill badge-success">Success</span> Data berhasil disimpan.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
                </button>
            </div>
			<?php
		}
	}
	
	if(isset($_GET["hapus"])){
		$sql=mysqli_query($k, "delete from user where id_user='$_GET[hapus]'");
		if($sql){
			?>
			<div class="sufee-alert alert with-close alert-warning alert-dismissible fade show">
                <span class="badge badge-pill badge-warning">Success</span> Data berhasil dihapus.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
                </button>
            </div>
			<?php
		}
	}
	form:
?>


<div class="card">
    <div class="card-header">
        <strong>Input Data User</strong>
    </div>
    <div class="card-body card-block">
		<form action="" method="post" class="form-horizontal"> 		
         <div class="row form-group">
            <div class="col col-md-2">
				<label class=" form-control-label">Username</label>
			</div>
            <div class="col-12 col-md-5">
				<input type="text" name="username" placeholder="Input username..." class="form-control" required><!--<span class="help-block">Please enter your email</span>-->
			</div>
		</div>
		<div class="row form-group">
            <div class="col col-md-2">
				<label class=" form-control-label">Password</label>
			</div>
            <div class="col-12 col-md-5">
				<input type="password" name="password" placeholder="Input password..." class="form-control" required><!--<span class="help-block">Please enter your email</span>-->
			</div>
		</div>
		<div class="row form-group">            
			<div class="col col-md-2">
				<label class=" form-control-label">Status</label>
			</div>
			<div class="col-12 col-md-5">
				<select name="status" class="form-control" required>
					<option selected disabled>-- Pilih Status --</option>
					<option value="admin">Admin</option>				
					<option value="perawat">Perawat</option>
				</select>
			</div>
		</div>
		<input type="submit" name="simpan" value="Simpan" class="btn btn-primary btn-sm">		
        <a class="btn btn-danger btn-sm" href="?halaman=user">Kosongkan</a>
        
		
        </form>
    </div>
    
    
    
</div>


<div class="card">
    <div class="card-header">
    <strong class="card-title">Data User</strong>
    </div>
    <div class="card-body">
    <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
    <thead>
    <tr>        
		<th>No.</th>		
        <th>Username</th>
        <th>Password</th>
		<th>Status</th>		
		<th>Proses</th>
    </tr>
    </thead>
    <tbody>
        <?php
			$no=1;
			$sql = mysqli_query($k,"select * from user");
			while($data=mysqli_fetch_array($sql)){
				?>
				<tr>
					<td><?php echo $no++ ?></td>					
					<td><?php echo $data["username"] ?></td>
					<td><?php echo $data["password"] ?></td>
					<td><?php echo $data["status"] ?></td>
					<td style="text-align:center"><a onclick="return confirm('Yakin ingin menghapus data ini?')" href="?halaman=user&hapus=<?php echo $data["id_user"] ?>" class="btn btn-warning btn-sm"><i class="fa fa-remove"></i> Hapus</a></td>
				</tr>
				<?php
			}
		?>
    </tbody>
    </table>
    </div>
</div>