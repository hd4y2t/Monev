<div class="content mt-3">
<div class="card">
    <div class="card-header">
    <strong class="card-title">Data Detail Instrumen Monev GPMP</strong>
    </div>
    <div class="card-body">
    <table id="bootstrap-data-table-export" class="table table-bordered">
    <thead style="background:lightgray">
    <tr>        
		<th>No.</th>		
		<th>Pilihan jawaban</th>				
		<th>Aksi</th>
    </tr>
    </thead>
    <tbody>
        <?php
			$no=1;
			foreach($data_detail_pertanyaan as $data){
				?>
				<tr>
					<td><?php echo $no++ ?></td>					
					<td><?php echo $data->pilihan_jawaban ?></td>
					<td style="text-align:center"><a href="<?php echo base_url("pertanyaan_gpmp/hapus_detail/").$data->id_detail_pertanyaan_gpmp ?>" class="btn btn-sm btn-danger" onclick="return confirm('Hapus data?')"><i class="fa fa-trash"></i></a></td>
				</tr>
				<?php
			}
			
		?>
    </tbody>
    </table>
    </div>
</div>	
	
</div>