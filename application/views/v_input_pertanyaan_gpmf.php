<div class="content mt-3">
	<div class="card">
    <div class="card-header">
        <strong>Input Instrumen Monev</strong>
		<a style="float:right" href="<?php echo base_url() ?>pertanyaan_gpmf/tambah" class="btn btn-sm btn-info"><i class="fa fa-back"></i> Kembali</a>
    </div>
    <div class="card-body card-block">
	
		<form action="<?php echo base_url() ?>pertanyaan_gpmf/input_data" method="post" class="form-horizontal"> 
		
		<div class="row form-group">
            <div class="col col-md-2">
				<label class="form-control-label">Instrumen Monev</label>
			</div>
            <div class="col-12 col-md-10">
				<textarea name="pertanyaan" class="form-control" required autocomplete="off" rows="4"></textarea>				
			</div>
		</div>		
		<?php
		if(isset($_GET["p"])){
			include "koneksi.php";
			$sql=mysqli_query($k,"select * from subkategori_gpmf where id_subktg_gpmf = '$_GET[p]'");
			$data=mysqli_fetch_array($sql);
			$id_subktg_gpmf=$data["id_subktg_gpmf"];
			$nama_sub_ktg=$data["nama_sub_ktg"];
			
		}
			
		?>
		<div class="row form-group">
            <div class="col col-md-2">
				<label class="form-control-label">Kategori</label>
			</div>
            <div class="col-12 col-md-10">
				<input type="hidden" name="id_subktg_gpmf" value="<?php if(isset($_GET["p"])){ echo $id_subktg_gpmf; } ?>" class="form-control">				
				<input type="text" name="kategori" readonly value="<?php if(isset($_GET["p"])){ echo $nama_sub_ktg; } ?>" class="form-control">				
			</div>
		</div>
		
       	
		<input type="submit" name="simpan" value="Simpan" class="btn btn-primary btn-sm">        
        </form>
	
    </div>
</div>
</div>