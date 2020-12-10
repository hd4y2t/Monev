<div class="content mt-3">
	<div class="card">
    <div class="card-header">
        <strong>Input Instrumen Monev</strong>
		<a style="float:right" href="<?php echo base_url() ?>pertanyaan_gpmp/tambah" class="btn btn-sm btn-info"><i class="fa fa-back"></i> Kembali</a>
    </div>
    <div class="card-body card-block">
	
		<form action="<?php echo base_url() ?>pertanyaan_gpmp/input_data" method="post" class="form-horizontal"> 
		
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
			$sql=mysqli_query($k,"select * from subkategori_gpmp where id_subktg_gpmp = '$_GET[p]'");
			$data=mysqli_fetch_array($sql);
			$id_subktg_gpmp=$data["id_subktg_gpmp"];
			$nama_sub_ktg=$data["nama_sub_ktg"];
			
		}
			/*if(isset($_GET["p"])){
				$ktg = $_GET["p"];
				if($ktg=="spd_a"){
					$ktg="Standar kopetensi lulus SPD";
				}else if($ktg=="spd_b"){
					$ktg="Standar isi pembelajaran SPD";
				}else if($ktg=="spd_c"){
					$ktg="Standar proses SPD";
				}else if($ktg=="spd_d"){
					$ktg="Standar penilaian SPD";
				}else if($ktg=="spd_e"){
					$ktg="Standar dosen dan tenaga kependidikan SPD";
				}else if($ktg=="spd_f"){
					$ktg="Standar sarana dan prasarana SPD";
				}else if($ktg=="spd_g"){
					$ktg="Standar pengelolaan pembelajaran SPD";
				}else if($ktg=="spt_a"){
					$ktg="Standar hasil SPT";
				}else if($ktg=="spt_b"){
					$ktg="Standar isi SPT";
				}else if($ktg=="spt_c"){
					$ktg="Standar proses SPT";
				}else if($ktg=="spt_d"){
					$ktg="Standar penilaian SPT";
				}else if($ktg=="spt_e"){
					$ktg="Standar peneliti SPT";
				}else if($ktg=="spt_f"){
					$ktg="Standar sarana dan prasarana SPT";
				}else if($ktg=="spt_g"){
					$ktg="Standar pengelolaan SPT";
				}else if($ktg=="spt_h"){
					$ktg="Standar pembiayaan SPT";
				}else if($ktg=="spm_a"){
					$ktg="Standar proses SPM";
				}else if($ktg=="spm_b"){
					$ktg="Standar isi SPM";
				}else if($ktg=="spm_c"){
					$ktg="Standar sumber daya manusia SPM";
				}else if($ktg=="spm_d"){
					$ktg="Standar hasil SPM";
				}else if($ktg=="spm_e"){
					$ktg="Standar sarana dan prasarana SPM";
				}else if($ktg=="spm_f"){
					$ktg="Standar pengelolaan SPM";
				}else if($ktg=="spm_g"){
					$ktg="Standar pembiayaan SPM";
				}else if($ktg=="spm_h"){
					$ktg="Standar penilaian SPM";
				}
				
			}*/
		?>
		<div class="row form-group">
            <div class="col col-md-2">
				<label class="form-control-label">Ditujukan untuk</label>
			</div>
            <div class="col-12 col-md-10">
				<select name="level" class="form-control" required>
					<option value="" selected disabled>Pilihan</option>
					<option value="PRODI">PRODI</option>
					<option value="MHS">Ketua kelas</option>
				</select>
			</div>
		</div>
		<div class="row form-group">
            <div class="col col-md-2">
				<label class="form-control-label">Kategori</label>
			</div>
            <div class="col-12 col-md-10">
				<input type="hidden" name="id_subktg_gpmp" value="<?php if(isset($_GET["p"])){ echo $id_subktg_gpmp; } ?>" class="form-control">				
				<input type="text" name="kategori" readonly value="<?php if(isset($_GET["p"])){ echo $nama_sub_ktg; } ?>" class="form-control">				
			</div>
		</div>
		
       	
		<input type="submit" name="simpan" value="Simpan" class="btn btn-primary btn-sm">        
        </form>
	
    </div>
</div>
</div>