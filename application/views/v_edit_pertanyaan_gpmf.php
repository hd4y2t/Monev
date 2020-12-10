<div class="content mt-3">
	<div class="card">
    <div class="card-header">
        <strong>Edit Instrumen Monev</strong>
		<a style="float:right" href="<?php echo base_url() ?>pertanyaan_gpmf" class="btn btn-sm btn-info"><i class="fa fa-back"></i> Kembali</a>
    </div>
    <div class="card-body card-block">
	<?php foreach($data_pertanyaan as $data){ ?>
		<form action="<?php echo base_url() ?>pertanyaan_gpmf/update/<?php echo $data->id_pertanyaan_gpmf ?>" method="post" class="form-horizontal"> 		
		<div class="row form-group">
            <div class="col col-md-2">
				<label class="form-control-label">Instrumen Monev</label>
			</div>
            <div class="col-12 col-md-10">
				<textarea name="pertanyaan" class="form-control" required autocomplete="off" rows="4"><?php echo $data->pertanyaan ?></textarea>				
			</div>
		</div>				
			
		
		<input type="submit" name="simpan" value="Ubah" class="btn btn-warning btn-sm">		
        <!--<a class="btn btn-danger btn-sm" href="<?php //echo base_url() ?>relawan">Refresh</a>-->
        
		
        </form>
	<?php } ?>
    </div>
</div>
</div>