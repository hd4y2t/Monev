<?php
include "koneksi.php";
if($_SESSION['akses']=='GPMP'){
$sql=mysqli_query($k,"select * from hasil_temuan_gpmp where id_user='$_SESSION[id]'");
$data=mysqli_fetch_array($sql);
$id=$data["id_hasil_gpmp"];
}else if($_SESSION['akses']=='LPM'){
$sql=mysqli_query($k,"select * from hasil_temuan_gpmp order by id_hasil_gpmp");
$data=mysqli_fetch_array($sql);
$id=$data["id_hasil_gpmp"];
}
?>

<?php if($_SESSION['akses']=='GPMP'){ ?>
<div class="content mt-3">
<div class="card">
    <div class="card-header">
    <strong class="card-title">Hasil Temuan Monev GPMP:</strong>
	<a style="float:right" href="<?php echo base_url() ?>dashboard/cetakLaporanTemuanGPMP2/<?php echo $id ?>" target="_blank" class="fa fa-print">Cetak</a>
    </div>
    <div class="card-body">
        <?php
			$i=0;
			include "koneksi.php";
			if($_SESSION['akses']=='GPMP'){
			$sql=mysqli_query($k,"select * from hasil_temuan_gpmp where id_user='$_SESSION[id]'");
			}else if($_SESSION['akses']=='LPM'){
			$sql=mysqli_query($k,"select * from hasil_temuan_gpmp order by id_hasil_gpmp");	
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
<?php }else{ ?>
<div class="content mt-3">
<div class="card">
    <div class="card-header">
    <strong class="card-title">Hasil Temuan Monev GPMP:</strong>	
	<a style="float:right" href="<?php echo base_url() ?>dashboard/cetakLaporanTemuanGPMP1" target="_blank" class="fa fa-print">Cetak</a>
    </div>
    <div class="card-body">	
	
		<table id="bootstrap-data-table-export" class="table table-bordered">
    <thead style="background:lightgray">
    <tr>        
		<th>No.</th>		
		<th>Tahun</th>		
		<th>Nama lembaga</th>		
		<th>Nama fakultas</th>
		<th>Nama prodi</th>
		<th>Hari</th>
		<th>Tanggal</th>
		<th>Catatan temuan</th>
		<th>Saran perbaikan</th>
		<th>User</th>		
    </tr>
    </thead>
	<tbody>
		<?php
		$sql=mysqli_query($k,"select * from hasil_temuan_gpmp inner join user on user.id_user=hasil_temuan_gpmp.id_user where hasil_temuan_gpmp.tahun = '2019-2020'");
		$no=1;
		while($data=mysqli_fetch_array($sql)){
			?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $data["tahun"] ?></td>
				<td><?php echo $data["nama_lembaga"] ?></td>
				<td><?php echo $data["nama_fakultas"] ?></td>
				<td><?php echo $data["nama_prodi"] ?></td>
				<td><?php echo $data["hari"] ?></td>
				<td><?php echo date('d/m/Y',strtotime($data["tanggal"])) ?></td>
				<td><?php echo $data["catatan_temuan"] ?></td>
				<td><?php echo $data["saran_perbaikan"] ?></td>
				<td><?php echo $data["nama_lengkap"] ?></td>
			</tr>
			<?php
		}
		?>
	</tbody>
	</div>
</div>
</div>	
<?php } ?>
