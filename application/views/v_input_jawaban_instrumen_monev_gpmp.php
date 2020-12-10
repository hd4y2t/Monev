<div class="content mt-3">
<div class="card">
    <div class="card-header">
    <strong class="card-title">Silahkan isi biodata di bawah ini:</strong>
    </div>
    <div class="card-body"> 
		<form method="post">
		<?php if(isset($_SESSION["akses"]) && $_SESSION["akses"]=="MHS"){ ?>
			<div class="row form-group">
            <div class="col col-md-2">
				<label class="form-control-label">Nama ketua kelas</label>
			</div>
            <div class="col-12 col-md-10">
				<input type="text" name="nama_ketua_kelas" class="form-control" required>
			</div>
		</div>		
		<div class="row form-group">
            <div class="col col-md-2">
				<label class="form-control-label">Nama dosen</label>
			</div>
            <div class="col-12 col-md-10">
				<input type="text" name="nama_dosen" class="form-control" required>
			</div>
		</div>
		<div class="row form-group">
            <div class="col col-md-2">
				<label class="form-control-label">Matakuliah</label>
			</div>
            <div class="col-12 col-md-10">
				<input type="text" name="matakuliah" class="form-control" required>
			</div>
		</div>
		<div class="row form-group">
            <div class="col col-md-2">
				<label class="form-control-label">Program studi</label>
			</div>
            <div class="col-12 col-md-10">
				<input type="text" name="program_studi" class="form-control" required>
			</div>
		</div>
		<div class="row form-group">
            <div class="col col-md-2">
				<label class="form-control-label">Fakultas</label>
			</div>
            <div class="col-12 col-md-10">
				<input type="text" name="fakultas" class="form-control" required>
			</div>
		</div>
		<div class="row form-group">
            <div class="col col-md-2">
				<label class="form-control-label">Nama tim monev</label>
			</div>
            <div class="col-12 col-md-10">
				<input type="text" name="nama_tim_monev" class="form-control" required>
			</div>
		</div>
		<?php }else if($_SESSION["akses"]=="PRODI"){ ?>
		<div class="row form-group">
            <div class="col col-md-2">
				<label class="form-control-label">Nama kaprodi</label>
			</div>
            <div class="col-12 col-md-10">
				<input type="text" name="nama_dosen" class="form-control" required>
			</div>
		</div>
		<div class="row form-group">
            <div class="col col-md-2">
				<label class="form-control-label">Program studi</label>
			</div>
            <div class="col-12 col-md-10">
				<input type="text" name="program_studi" class="form-control" required>
			</div>
		</div>
		<div class="row form-group">
            <div class="col col-md-2">
				<label class="form-control-label">Fakultas</label>
			</div>
            <div class="col-12 col-md-10">
				<input type="text" name="fakultas" class="form-control" required>
			</div>
		</div>
		<div class="row form-group">
            <div class="col col-md-2">
				<label class="form-control-label">Nama tim monev</label>
			</div>
            <div class="col-12 col-md-10">
				<input type="text" name="nama_tim_monev" class="form-control" required>
			</div>
		</div>
		<?php } ?>
    </div>
</div>		
</div>
<?php
	
?>
<div class="content mt-3">
<div class="card">
    <div class="card-header">
    <strong class="card-title">Instrumen Monev GPMP:</strong>
    </div>
    <div class="card-body"> 			
        <?php
			
			$i=0;
			include "koneksi.php";
			$sql1=mysqli_query($k,"select * from kategori_gpmp");
			while($data1=mysqli_fetch_array($sql1)){
				?>
				
				<h4><?php echo $data1["nama_kategori_gpmp"]?></h4>
				<?php
				$sql2=mysqli_query($k,"select * from subkategori_gpmp inner join pertanyaan_gpmp on pertanyaan_gpmp.id_subktg_gpmp=subkategori_gpmp.id_subktg_gpmp and pertanyaan_gpmp.level = '$_SESSION[akses]' where subkategori_gpmp.id_ktg_gpmp='$data1[id_ktg_gpmp]' group by subkategori_gpmp.id_subktg_gpmp");
				$no=1;
				while($data2=mysqli_fetch_array($sql2)){
				?>
					<li><?php echo $data2["nama_sub_ktg"] ?></li>
					
				<?php
					$sql3=mysqli_query($k,"select * from pertanyaan_gpmp where tahun = '2019-2020' and share = '1' and id_subktg_gpmp = '$data2[id_subktg_gpmp]' and level = '$_SESSION[akses]'");
					while($data3=mysqli_fetch_array($sql3)){				
					?>				
					<input type="hidden" name="id_pertanyaan_gpmp[]" value="<?php echo $data3["id_pertanyaan_gpmp"] ?>">
					<div style="padding-left:25px">
					<h6><?php echo $no++.". ". $data3["pertanyaan"]; ?></h6>
					<?php
					$sql4=mysqli_query($k,"select * from detail_pertanyaan_gpmp where id_pertanyaan_gpmp = '$data3[id_pertanyaan_gpmp]'");
					while($data4=mysqli_fetch_array($sql4)){
						?>
						<span style="font-size:14px">
						<input type="radio" name="pilihan_jawaban<?php echo $i; ?>" value="<?php echo $data4["pilihan_jawaban"] ?>">&nbsp;<?php echo $data4["pilihan_jawaban"] ?>
						</span>
						
						<?php					
						
					}	
					echo "<br>";echo "<br>";
					?>
					</div>
					<?php
					$i++;
					}	
					
					}
			}
			
			
					
		?>
		
		<br><br>
		<input type="submit" name="simpan" value="Kirim" class="btn btn-info">
		</form>		
    </div>
</div>		
</div>
<?php	
	if(isset($_POST["simpan"])){
		if($_SESSION["akses"]=="PRODI"){
			$sql=mysqli_query($k, "insert into target_monev values ('','2019-2020','','$_POST[nama_dosen]','','$_POST[program_studi]','$_POST[fakultas]','$_POST[nama_tim_monev]','GPMP')");
		}else{
			$sql=mysqli_query($k, "insert into target_monev values ('','2019-2020','$_POST[nama_ketua_kelas]','','$_POST[matakuliah]','$_POST[program_studi]','$_POST[fakultas]','$_POST[nama_tim_monev]','GPMP')");
		}
		
		$sql=mysqli_query($k,"select * from target_monev order by id_target desc");
		$data=mysqli_fetch_array($sql);
		$id_target=$data["id_target"];
		
		mysqli_query($k,"delete from jawaban_gpmp where id_user='$_SESSION[id]' and tahun = '2019-2020'");
		$i=$i-1;				
		for($j=0; $j<=$i; $j++){			
			if(isset($_POST["pilihan_jawaban".$j])){					
				$jawaban=$_POST["pilihan_jawaban".$j];
				$id=$_POST["id_pertanyaan_gpmp"][$j];
				
				$sql = mysqli_query($k,"insert into jawaban_gpmp values ('','2019-2020','$jawaban','$id','$_SESSION[id]','$id_target')");
			}
		}
		if($sql){
			echo "<script>alert('Data telah dikirim');</script>";			
		}
	}
?>