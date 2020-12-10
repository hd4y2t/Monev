 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<center><h2>Nama Lembaga</h2><h4>LAPORAN TEMUAN GPMF</h4></center>
<br><br>
	<h5><i>Print date: <?php echo date("d-m-Y"); ?></i></h5>
	<?php if($_SESSION['akses']=='GPMF'){ ?>
<div class="content mt-3">
<div class="card">
    <div class="card-header">
    <strong class="card-title">Hasil Temuan Monev GPMF:</strong>	
    </div>
    <div class="card-body">
        <?php
			$i=0;
			include "koneksi.php";
			if($_SESSION['akses']=='GPMF'){
			$sql=mysqli_query($k,"select * from hasil_temuan_gpmf where id_user='$_SESSION[id]'");
			}else if($_SESSION['akses']=='LPM'){
			$sql=mysqli_query($k,"select * from hasil_temuan_gpmf order by id_hasil_gpmf");	
			}
			$data=mysqli_fetch_array($sql);			
		?>
		<table class="table-border table">
			<tr>
				<th>Tahun</th>
				<th>:</th>
				<td><?php echo $data["tahun"] ?></td>
			</tr>
			<tr>
				<th style="width:150px">Nama Lembaga</th>
				<th style="width:10px">:</th>
				<td><?php echo $data["nama_lembaga"] ?></td>
			</tr>
			<tr>
				<th>Nama Fakultas</th>
				<th>:</th>
				<td><?php echo $data["nama_fakultas"] ?></td>
			</tr>
			<tr>
				<th>Nama Prodi</th>
				<th>:</th>
				<td><?php echo $data["nama_prodi"] ?></td>
			</tr>
			<tr>
				<th>Hari</th>
				<th>:</th>
				<td><?php echo $data["hari"] ?></td>
			</tr>
			<tr>
				<th>Tanggal</th>
				<th>:</th>
				<td><?php echo date('d-m-Y',strtotime($data["tanggal"])) ?></td>
			</tr>
			<tr>
				<th>Catatan Temuan</th>
				<th>:</th>
				<td><?php echo $data["catatan_temuan"] ?></td>
			</tr>
			<tr>
				<th>Saran Perbaikan</th>
				<th>:</th>
				<td><?php echo $data["saran_perbaikan"] ?></td>
			</tr>
		</table>		
			
    </div>
</div>		
</div>	
<?php } ?>
<script>
	setTimeout("print()",500);
</script>