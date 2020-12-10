<div class="content mt-3">
<div class="card">
    <div class="card-header">
    <strong class="card-title">Hasil Monev GPMP:</strong>
    </div>
    <div class="card-body">
		<div>
			<form class="form-group" method="post">
				<div class="form-group">
					<label class="control-label col-sm-2" for="email"></label>
					<div class="col-sm-6">
						<input type="text" class="form-control" name="txtcari" placeholder="Cari berdasarkan nama dosen atau fakultas...">
					</div>
					
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-5">
						<input type="submit" name="submit" value="Cari" class="btn btn-info">
						<a href="?" class="btn btn-success">Refresh</a>
					</div>
				</div>
			</form>
		</div>		
		<br><br>
		<?php
		include "koneksi.php";
			if(!isset($_POST["submit"])){
				
				$sql=mysqli_query($k,"select * from pertanyaan_gpmp inner join jawaban_gpmp on jawaban_gpmp.id_pertanyaan_gpmp=pertanyaan_gpmp.id_pertanyaan_gpmp inner join user on user.id_user=jawaban_gpmp.id_user inner join subkategori_gpmp on subkategori_gpmp.id_subktg_gpmp=pertanyaan_gpmp.id_subktg_gpmp inner join target_monev on target_monev.id_target=jawaban_gpmp.id_target inner join kategori_gpmp on kategori_gpmp.id_ktg_gpmp=subkategori_gpmp.id_ktg_gpmp where pertanyaan_gpmp.tahun='2019-2020'");
			}else{
				$sql=mysqli_query($k,"select * from pertanyaan_gpmp inner join jawaban_gpmp on jawaban_gpmp.id_pertanyaan_gpmp=pertanyaan_gpmp.id_pertanyaan_gpmp inner join user on user.id_user=jawaban_gpmp.id_user inner join subkategori_gpmp on subkategori_gpmp.id_subktg_gpmp=pertanyaan_gpmp.id_subktg_gpmp inner join target_monev on target_monev.id_target=jawaban_gpmp.id_target inner join kategori_gpmp on kategori_gpmp.id_ktg_gpmp=subkategori_gpmp.id_ktg_gpmp where pertanyaan_gpmp.tahun='2019-2020' and target_monev.nama_dosen like '%". $_POST["txtcari"] ."%' or fakultas like '%".$_POST["txtcari"]."%' and kategori_gpmp.nama_kategori_gpmp='Standar proses pembelajaran'");
			}
				
				?>				
		<table id="" class="table table-bordered">
		
		<thead style="background:lightgray">
			<tr>
			<th colspan="9">Standar Proses Pembelajaran</th>
			</tr>
			
			<th>No.</th>
			<th>Tahun</th>
			<th>Instrumen Monev</th>
			<th>Kategori</th>
			<th>Jawaban</th>
			<th>Dosen</th>
			<th>Matakuliah</th>
			<th>Prodi</th>
			<th>Fakultas</th>
		</thead>
		<tbody>
        <?php
			$no=1;
			
			while($data=mysqli_fetch_array($sql)){
				?>
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $data["tahun"] ?></td>
					<td><?php echo $data["pertanyaan"] ?></td>
					<td><?php echo $data["nama_sub_ktg"] ?></td>
					<td><?php echo $data["jawaban"] ?></td>
					<td><?php echo $data["nama_dosen"] ?></td>
					<td><?php echo $data["matakuliah"] ?></td>
					<td><?php echo $data["pogram_studi"] ?></td>
					<td><?php echo $data["fakultas"] ?></td>
				</tr>
				<?php		
			}
		?>
		</tbody>
		</table>
		<?php
			
			
			if(!isset($_POST["submit"])){
				$sql=mysqli_query($k,"select * from pertanyaan_gpmp inner join jawaban_gpmp on jawaban_gpmp.id_pertanyaan_gpmp=pertanyaan_gpmp.id_pertanyaan_gpmp inner join user on user.id_user=jawaban_gpmp.id_user inner join subkategori_gpmp on subkategori_gpmp.id_subktg_gpmp=pertanyaan_gpmp.id_subktg_gpmp inner join target_monev on target_monev.id_target=jawaban_gpmp.id_target inner join kategori_gpmp on kategori_gpmp.id_ktg_gpmp=subkategori_gpmp.id_ktg_gpmp where pertanyaan_gpmp.tahun='2019-2020'");
			}else{
				$sql=mysqli_query($k,"select * from pertanyaan_gpmp inner join jawaban_gpmp on jawaban_gpmp.id_pertanyaan_gpmp=pertanyaan_gpmp.id_pertanyaan_gpmp inner join user on user.id_user=jawaban_gpmp.id_user inner join subkategori_gpmp on subkategori_gpmp.id_subktg_gpmp=pertanyaan_gpmp.id_subktg_gpmp inner join target_monev on target_monev.id_target=jawaban_gpmp.id_target inner join kategori_gpmp on kategori_gpmp.id_ktg_gpmp=subkategori_gpmp.id_ktg_gpmp where pertanyaan_gpmp.tahun='2019-2020' and target_monev.nama_dosen like '%". $_POST["txtcari"] ."%' or fakultas like '%". $_POST["txtcari"] ."' and kategori_gpmp.nama_kategori_gpmp='Standar isi pembelajaran'");
			}
			// 
				?>				
		<table id="" class="table table-bordered">
		<thead style="background:lightgray">
		<tr>
			<th colspan="9">Standar Isi Pembelajaran</th>
			</tr>
			<th>No.</th>
			<th>Tahun</th>
			<th>Instrumen Monev</th>
			<th>Kategori</th>
			<th>Jawaban</th>
			<th>Dosen</th>
			<th>Matakuliah</th>
			<th>Prodi</th>
			<th>Fakultas</th>
		</thead>
		<tbody>
        <?php
			$no=1;
			
			while($data=mysqli_fetch_array($sql)){
				?>
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $data["tahun"] ?></td>
					<td><?php echo $data["pertanyaan"] ?></td>
					<td><?php echo $data["nama_sub_ktg"] ?></td>
					<td><?php echo $data["jawaban"] ?></td>
					<td><?php echo $data["nama_dosen"] ?></td>
					<td><?php echo $data["matakuliah"] ?></td>
					<td><?php echo $data["pogram_studi"] ?></td>
					<td><?php echo $data["fakultas"] ?></td>
				</tr>
				<?php		
			}
			?>
		</tbody>
		</table>
				<?php
		if(!isset($_POST["submit"])){
			$sql=mysqli_query($k,"select * from pertanyaan_gpmp inner join jawaban_gpmp on jawaban_gpmp.id_pertanyaan_gpmp=pertanyaan_gpmp.id_pertanyaan_gpmp inner join user on user.id_user=jawaban_gpmp.id_user inner join subkategori_gpmp on subkategori_gpmp.id_subktg_gpmp=pertanyaan_gpmp.id_subktg_gpmp inner join target_monev on target_monev.id_target=jawaban_gpmp.id_target inner join kategori_gpmp on kategori_gpmp.id_ktg_gpmp=subkategori_gpmp.id_ktg_gpmp where pertanyaan_gpmp.tahun='2019-2020'");
		}else{
			$sql=mysqli_query($k,"select * from pertanyaan_gpmp inner join jawaban_gpmp on jawaban_gpmp.id_pertanyaan_gpmp=pertanyaan_gpmp.id_pertanyaan_gpmp inner join user on user.id_user=jawaban_gpmp.id_user inner join subkategori_gpmp on subkategori_gpmp.id_subktg_gpmp=pertanyaan_gpmp.id_subktg_gpmp inner join target_monev on target_monev.id_target=jawaban_gpmp.id_target inner join kategori_gpmp on kategori_gpmp.id_ktg_gpmp=subkategori_gpmp.id_ktg_gpmp where pertanyaan_gpmp.tahun='2019-2020' and target_monev.nama_dosen like '%". $_POST["txtcari"] ."%' or fakultas like '%".$_POST["txtcari"]."%' and kategori_gpmp.nama_kategori_gpmp='Standar pengelolaan pembelajaran'");
		}
		// 
				?>				
		<table id="" class="table table-bordered">
		<thead style="background:lightgray">
		<tr>
			<th colspan="9">Standar Pengelolaan Pembelajaran</th>
			</tr>
			<th>No.</th>
			<th>Tahun</th>
			<th>Instrumen Monev</th>
			<th>Kategori</th>
			<th>Jawaban</th>
			<th>Dosen</th>
			<th>Matakuliah</th>
			<th>Prodi</th>
			<th>Fakultas</th>
		</thead>
		<tbody>
        <?php
			$no=1;
			
			while($data=mysqli_fetch_array($sql)){
				?>
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $data["tahun"] ?></td>
					<td><?php echo $data["pertanyaan"] ?></td>
					<td><?php echo $data["nama_sub_ktg"] ?></td>
					<td><?php echo $data["jawaban"] ?></td>
					<td><?php echo $data["nama_dosen"] ?></td>
					<td><?php echo $data["matakuliah"] ?></td>
					<td><?php echo $data["pogram_studi"] ?></td>
					<td><?php echo $data["fakultas"] ?></td>
				</tr>
				<?php		
			}
		?>
		
		
		</tbody>
		</table>
				<?php
			//}
		?>
		
    </div>
</div>		
</div>
