<div class="content mt-3">
<div class="card">
    <div class="card-header">
    <strong class="card-title">Data User</strong> <a style="float:right" href="<?php echo base_url() ?>user/tambah" class="btn btn-sm btn-info"><i class="fa fa-plus"></i> Tambah Data</a>
    </div>
    <div class="card-body">
    <table id="bootstrap-data-table-export" class="table table-bordered">
    <thead style="background:lightgray">
    <tr>        
		<th>No.</th>		
		<th>Nama lengkap</th>        
		<th>Username</th>        		
		<th>Status</th> 		
		<th>Aksi</th>
    </tr>
    </thead>
    <tbody>
        <?php
			$no=1;
			foreach($data_user as $data){
				?>
				<tr>
					<td><?php echo $no++ ?></td>			
					<td><?php echo $data->nama_lengkap ?></td>
					<td><?php echo $data->username ?></td>
					<td><?php echo $data->status_user ?></td>
					<td style="text-align:center"><a href="<?php echo base_url("user/edit/").$data->id_user ?>" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a> <a href="<?php echo base_url("user/hapus/").$data->id_user ?>" class="btn btn-sm btn-danger" onclick="return confirm('Hapus data?')"><i class="fa fa-trash"></i></a></td>
				</tr>
				<?php
			}
			
		?>
    </tbody>
    </table>
    </div>
</div>	
	
</div>