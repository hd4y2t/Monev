<div class="content mt-3">
<div class="card">
    <div class="card-header">
    <strong class="card-title">Hasil Monev GPMF:</strong>
    </div>
    <div class="card-body">
		<div>
			<form class="form-group" method="post">
				<div class="form-group">
					<label class="control-label col-sm-2" for="email"></label>
					<div class="col-sm-6">
						<input type="text" class="form-control" name="txtcari" placeholder="Cari berdasarkan nama wadek atau fakultas...">
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
				
				$sql=mysqli_query($k,"select * from pertanyaan_gpmf inner join jawaban_gpmf on jawaban_gpmf.id_pertanyaan_gpmf=pertanyaan_gpmf.id_pertanyaan_gpmf inner join user on user.id_user=jawaban_gpmf.id_user inner join subkategori_gpmf on subkategori_gpmf.id_subktg_gpmf=pertanyaan_gpmf.id_subktg_gpmf inner join target_monev on target_monev.id_target=jawaban_gpmf.id_target inner join kategori_gpmf on kategori_gpmf.id_ktg_gpmf=subkategori_gpmf.id_ktg_gpmf where pertanyaan_gpmf.tahun='2019-2020'");
			}else{
				$sql=mysqli_query($k,"select * from pertanyaan_gpmf inner join jawaban_gpmf on jawaban_gpmf.id_pertanyaan_gpmf=pertanyaan_gpmf.id_pertanyaan_gpmf inner join user on user.id_user=jawaban_gpmf.id_user inner join subkategori_gpmf on subkategori_gpmf.id_subktg_gpmf=pertanyaan_gpmf.id_subktg_gpmf inner join target_monev on target_monev.id_target=jawaban_gpmf.id_target inner join kategori_gpmf on kategori_gpmf.id_ktg_gpmf=subkategori_gpmf.id_ktg_gpmf where pertanyaan_gpmf.tahun='2019-2020' and target_monev.nama_dosen like '%". $_POST["txtcari"] ."%' or fakultas like '%".$_POST["txtcari"]."%' and kategori_gpmf.nama_kategori_gpmf='Standar pendidikan'");
			}
				
				?>				
		<table id="" class="table table-bordered">
		
		<thead style="background:lightgray">
			<tr>
			<th colspan="9">Standar Pendidikan</th>
			</tr>
			
			<th>No.</th>
			<th>Tahun</th>
			<th>Instrumen Monev</th>
			<th>Kategori</th>
			<th>Jawaban</th>
			<th>Wadek</th>
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
				$sql=mysqli_query($k,"select * from pertanyaan_gpmf inner join jawaban_gpmf on jawaban_gpmf.id_pertanyaan_gpmf=pertanyaan_gpmf.id_pertanyaan_gpmf inner join user on user.id_user=jawaban_gpmf.id_user inner join subkategori_gpmf on subkategori_gpmf.id_subktg_gpmf=pertanyaan_gpmf.id_subktg_gpmf inner join target_monev on target_monev.id_target=jawaban_gpmf.id_target inner join kategori_gpmf on kategori_gpmf.id_ktg_gpmf=subkategori_gpmf.id_ktg_gpmf where pertanyaan_gpmf.tahun='2019-2020'");
			}else{
				$sql=mysqli_query($k,"select * from pertanyaan_gpmf inner join jawaban_gpmf on jawaban_gpmf.id_pertanyaan_gpmf=pertanyaan_gpmf.id_pertanyaan_gpmf inner join user on user.id_user=jawaban_gpmf.id_user inner join subkategori_gpmf on subkategori_gpmf.id_subktg_gpmf=pertanyaan_gpmf.id_subktg_gpmf inner join target_monev on target_monev.id_target=jawaban_gpmf.id_target inner join kategori_gpmf on kategori_gpmf.id_ktg_gpmf=subkategori_gpmf.id_ktg_gpmf where pertanyaan_gpmf.tahun='2019-2020' and target_monev.nama_dosen like '%". $_POST["txtcari"] ."%' or fakultas like '%". $_POST["txtcari"] ."' and kategori_gpmf.nama_kategori_gpmf='Standar penelitian'");
			}
			// 
				?>				
		<table id="" class="table table-bordered">
		<thead style="background:lightgray">
		<tr>
			<th colspan="9">Standar Penelitian</th>
			</tr>
			<th>No.</th>
			<th>Tahun</th>
			<th>Instrumen Monev</th>
			<th>Kategori</th>
			<th>Jawaban</th>
			<th>Wadek</th>
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
			$sql=mysqli_query($k,"select * from pertanyaan_gpmf inner join jawaban_gpmf on jawaban_gpmf.id_pertanyaan_gpmf=pertanyaan_gpmf.id_pertanyaan_gpmf inner join user on user.id_user=jawaban_gpmf.id_user inner join subkategori_gpmf on subkategori_gpmf.id_subktg_gpmf=pertanyaan_gpmf.id_subktg_gpmf inner join target_monev on target_monev.id_target=jawaban_gpmf.id_target inner join kategori_gpmf on kategori_gpmf.id_ktg_gpmf=subkategori_gpmf.id_ktg_gpmf where pertanyaan_gpmf.tahun='2019-2020'");
		}else{
			$sql=mysqli_query($k,"select * from pertanyaan_gpmf inner join jawaban_gpmf on jawaban_gpmf.id_pertanyaan_gpmf=pertanyaan_gpmf.id_pertanyaan_gpmf inner join user on user.id_user=jawaban_gpmf.id_user inner join subkategori_gpmf on subkategori_gpmf.id_subktg_gpmf=pertanyaan_gpmf.id_subktg_gpmf inner join target_monev on target_monev.id_target=jawaban_gpmf.id_target inner join kategori_gpmf on kategori_gpmf.id_ktg_gpmf=subkategori_gpmf.id_ktg_gpmf where pertanyaan_gpmf.tahun='2019-2020' and target_monev.nama_dosen like '%". $_POST["txtcari"] ."%' or fakultas like '%".$_POST["txtcari"]."%' and kategori_gpmf.nama_kategori_gpmf='Standar pengabdian pada masyarakat'");
		}
		// 
				?>				
		<table id="" class="table table-bordered">
		<thead style="background:lightgray">
		<tr>
			<th colspan="9">Standar Pengabdian Pada Masyarakat</th>
			</tr>
			<th>No.</th>
			<th>Tahun</th>
			<th>Instrumen Monev</th>
			<th>Kategori</th>
			<th>Jawaban</th>
			<th>Wadek</th>
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
