<div class="content mt-3">
	<div class="card">
	<?php if(isset($_GET["p"])){
		include "v_input_pertanyaan_gpmp.php";
	}else{
	?>
    <div class="card-header">
        <strong>Pilih kategori</strong>
		<a style="float:right" href="<?php echo base_url() ?>pertanyaan_gpmp" class="btn btn-sm btn-info"><i class="fa fa-back"></i> Kembali</a>
    </div>
    <div class="card-body card-block">
		<div class="panel-group">
		<div class="panel panel-default">
		
		<?php
		
			include "koneksi.php";
			$sql=mysqli_query($k,"select * from kategori_gpmp");
			$id=1;
			while($data=mysqli_fetch_array($sql)){
				?>
				<div class="panel-heading">
					<h4 class="panel-title">
					<a data-toggle="collapse" href="#collapse<?php echo $id ?>"><?php echo $data["nama_kategori_gpmp"] ?></a>
					</h4>
				</div>				
				<div id="collapse<?php echo $id ?>" class="panel-collapse collapse">
				<ul class="list-group">
				<?php
				$sql2=mysqli_query($k, "select * from subkategori_gpmp where id_ktg_gpmp='$data[id_ktg_gpmp]'");
				while($data2=mysqli_fetch_array($sql2)){
					?>
					<li class="list-group-item"><a href="?p=<?php echo $data2["id_subktg_gpmp"] ?>"><?php echo $data2["nama_sub_ktg"] ?></a></li>
					
					<?php
				}
				?>
				</ul>			
				</div>
				<?php
				$id = $id+1;
			}
		?>
		  
		  
		  <!--<div class="panel-heading">
			<h4 class="panel-title">
			  <a data-toggle="collapse" href="#collapse2">Standar Penelitian</a>
			</h4>
		  </div>
		  <div id="collapse2" class="panel-collapse collapse">
			<ul class="list-group">
				<li class="list-group-item"><a href="?p=spt_a">a. Standar hasil</a></li>
				<li class="list-group-item"><a href="?p=spt_b">b. Standar isi</a></li>
				<li class="list-group-item"><a href="?p=spt_c">c. Standar proses</a></li>
				<li class="list-group-item"><a href="?p=spt_d">d. Standar penilaian</a></li>
				<li class="list-group-item"><a href="?p=spt_e">e. Standar peneliti</a></li>
				<li class="list-group-item"><a href="?p=spt_f">f. Standar sarana dan prasarana</a></li>
				<li class="list-group-item"><a href="?p=spt_g">g. Standar pengelolaan</a></li>
				<li class="list-group-item"><a href="?p=spt_h">h. Standar pembiayaan</a></li>
			</ul>			
		  </div>
		  <div class="panel-heading">
			<h4 class="panel-title">
			  <a data-toggle="collapse" href="#collapse3">Standar Pengabdian Pada Masyarakat</a>
			</h4>
		  </div>
		  <div id="collapse3" class="panel-collapse collapse">
			<ul class="list-group">
				<li class="list-group-item"><a href="?p=spm_a">a. Standar proses</a></li>
				<li class="list-group-item"><a href="?p=spm_b">b. Standar isi</a></li>
				<li class="list-group-item"><a href="?p=spm_c">c. Standar sumber daya manusia</a></li>
				<li class="list-group-item"><a href="?p=spm_d">d. Standar hasil</a></li>
				<li class="list-group-item"><a href="?p=spm_e">e. Standar sarana dan prasarana</li>
				<li class="list-group-item"><a href="?p=spm_f">f. Standar pengelolaan</a></li>
				<li class="list-group-item"><a href="?p=spm_g">g. Standar pembiayaan</a></li>
				<li class="list-group-item"><a href="?p=spm_h">h. Standar penilaian</a></li>
			</ul>			
		  </div>
		</div>
		</div>-->
		
	
    </div>
	<?php } ?>
</div>
</div>