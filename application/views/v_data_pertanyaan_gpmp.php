<div class="content mt-3">
<div class="card">
    <div class="card-header">
    <strong class="card-title">Data Instrumen Monev GPMP</strong> <a style="float:right" href="<?php //echo base_url()pertanyaan_gpmp/tambah ?>" class="btn btn-sm btn-info" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Tambah Data</a>
	<!--<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>-->
	<!-- Modal -->
	<div id="myModal" class="modal fade" role="dialog">
	<div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title">Tahun akademik</h4>
      </div>
	  <form method="post">
      <div class="modal-body">
        
			<select name="tahun" class="form-control" required>
				<option value="" selected disabled>Pilih tahun</option>
				<option value="2019-2020">2019-2020</option>
				<option value="2020-2021">2020-2021</option>
				<option value="2021-2022">2021-2022</option>
				<option value="2022-2023">2022-2023</option>
				<option value="2023-2024">2022-2024</option>
				<option value="2024-2025">2024-2025</option>
			</select>
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>		
		<!--<a style="float:right" href="<?php //echo base_url() ?>pertanyaan_gpmp/tambah" class="btn btn-sm btn-info"><i class="fa fa-check"></i> OK</a>-->
		<input type="submit" name="submit" value="Ok" class="btn btn-sm btn-info">
      </div>
	  </form>
	  <?php if(isset($_POST["submit"])){
		  $_SESSION["tahun"]=$_POST["tahun"];		  
		  header("location:pertanyaan_gpmp/tambah");		  
	  } ?>
    </div>

  </div>
</div>
    </div>
    <div class="card-body">
    <table id="bootstrap-data-table-export" class="table table-bordered">
    <thead style="background:lightgray">
    <tr>        
		<th>No.</th>		
		<th>Tahun</th>		
		<th>Instrumen Monev</th>		
		<th>Kategori</th>
		<th>Ditujukan</th>
		<th>Status</th>
		<th>Aksi</th>
    </tr>
    </thead>
    <tbody>
        <?php
			$no=1;
			foreach($data_pertanyaan as $data){
				?>
				<tr>
					<td><?php echo $no++ ?></td>					
					<td><?php echo $data->tahun ?></td>
					<td><?php echo $data->pertanyaan."<br>"; ?> <a href="<?php echo base_url() ?>pertanyaan_gpmp/data_detail/<?php echo $data->id_pertanyaan_gpmp ?>"><span style="color:red; font-size:12px">[pilihan jawaban]</span></a></td>					
					<td><?php echo $data->nama_sub_ktg ?></td>
					<td><?php echo $data->level . " (ketua kelas)" ?></td>
					<td><?php echo $data->share ?></td>
					<td style="text-align:center"><a href="<?php echo base_url("pertanyaan_gpmp/edit/").$data->id_pertanyaan_gpmp ?>" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a> <a href="<?php echo base_url("pertanyaan_gpmp/hapus/").$data->id_pertanyaan_gpmp ?>" class="btn btn-sm btn-danger" onclick="return confirm('Hapus data?')"><i class="fa fa-trash"></i></a> <a href="<?php echo base_url("pertanyaan_gpmp/detail/").$data->id_pertanyaan_gpmp ?>" class="btn btn-sm btn-success"><i class="fa fa-list"></i></a> </a><a href="<?php echo base_url("pertanyaan_gpmp/share/").$data->id_pertanyaan_gpmp  ?>" class="btn btn-sm btn-info"><i class="fa fa-check"></i>Share</a></td>
				</tr>
				<?php
			}
			
		?>
    </tbody>
    </table>
    </div>
</div>	
	
</div>