<div class="content mt-3">
	<div class="card">
    <div class="card-header">
        <strong>Input Detail Instrumen Monev</strong>
		<a style="float:right" href="<?php echo base_url() ?>pertanyaan_gpmp" class="btn btn-sm btn-info"><i class="fa fa-back"></i> Kembali</a>
    </div>
    <div class="card-body card-block">
	<?php foreach($data_pertanyaan as $data){ ?>
		<form action="<?php echo base_url() ?>pertanyaan_gpmp/input_data_detail" method="post" class="form-horizontal">
		<div class="row form-group" style="display:none">
            <div class="col col-md-2">
				<label class="form-control-label">Id</label>
			</div>
            <div class="col-12 col-md-10">
				<textarea name="id" class="form-control" required autocomplete="off" rows="4" readonly><?php echo $data->id_pertanyaan_gpmp ?></textarea>				
			</div>
		</div>
		<div class="row form-group">
            <div class="col col-md-2">
				<label class="form-control-label">Instrumen Monev</label>
			</div>
            <div class="col-12 col-md-10">
				<textarea name="pertanyaan" class="form-control" required autocomplete="off" rows="4" readonly><?php echo $data->pertanyaan ?></textarea>				
			</div>
		</div>		
		<div class="row form-group">
            <div class="col col-md-2">
				<label class="form-control-label">Pilihan jawaban</label>
			</div>
            <div class="col-12 col-md-10">
				<input type="text" name="pilihan_jawaban" placeholder="Isi pilihan jawaban disini untuk di tampilkan di intrumen monev..." class="form-control">
			</div>
		</div>	
		
		<input type="submit" name="simpan" value="Simpan" class="btn btn-warning btn-sm">		
        <!--<a class="btn btn-danger btn-sm" href="<?php //echo base_url() ?>relawan">Refresh</a>-->
        
		
        </form>
	<?php } ?>
    </div>
</div>
</div>