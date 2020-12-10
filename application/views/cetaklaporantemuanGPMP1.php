 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<center><h2>Nama Lembaga</h2><h4>LAPORAN TEMUAN GPMP TAHUN <?php echo 2019-2020 ?></h4></center>
<br><br>
	<h5><i>Print date: <?php echo date("d-m-Y"); ?></i></h5>

    <div>
    <table class="table table-bordered" cellpadding="10px">
    <thead>
   <tr>        
		<th>No.</th>		
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
		include "koneksi.php";
			$sql=mysqli_query($k,"select * from hasil_temuan_gpmp inner join user on user.id_user=hasil_temuan_gpmp.id_user where hasil_temuan_gpmp.tahun = '2019-2020'");
		$no=1;
		while($data=mysqli_fetch_array($sql)){
			?>
			<tr>
				<td><?php echo $no++ ?></td>				
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
    </table>
    </div>
<script>
	setTimeout("print()",500);
</script>