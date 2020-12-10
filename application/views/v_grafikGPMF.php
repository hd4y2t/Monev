<div class="content mt-3">
<div class="card">
    <div class="card-header">
    <strong class="card-title">Grafik Data Monev GPMF</strong>
	</div>
<?php
 //if(isset($_POST["cari"])){
	//$th_ajaran=$_POST["th_ajaran"];
	//$kelas=$_POST["kelas"];
	include "koneksi.php";
	$query1 = mysqli_query($k,"select count(jawaban_gpmf.jawaban) as jumlah_jawaban,jawaban_gpmf.jawaban from jawaban_gpmf inner join pertanyaan_gpmf on pertanyaan_gpmf.id_pertanyaan_gpmf=jawaban_gpmf.id_pertanyaan_gpmf inner join subkategori_gpmf on subkategori_gpmf.id_subktg_gpmf=pertanyaan_gpmf.id_subktg_gpmf inner join kategori_gpmf on kategori_gpmf.id_ktg_gpmf=subkategori_gpmf.id_ktg_gpmf where kategori_gpmf.nama_kategori_gpmf='Standar Pendidikan' group by jawaban_gpmf.jawaban");
	
	$query2 = mysqli_query($k,"select count(jawaban_gpmf.jawaban) as jumlah_jawaban,jawaban_gpmf.jawaban from jawaban_gpmf inner join pertanyaan_gpmf on pertanyaan_gpmf.id_pertanyaan_gpmf=jawaban_gpmf.id_pertanyaan_gpmf inner join subkategori_gpmf on subkategori_gpmf.id_subktg_gpmf=pertanyaan_gpmf.id_subktg_gpmf inner join kategori_gpmf on kategori_gpmf.id_ktg_gpmf=subkategori_gpmf.id_ktg_gpmf where kategori_gpmf.nama_kategori_gpmf='Standar Penelitian' group by jawaban_gpmf.jawaban");
	
	$query3 = mysqli_query($k,"select count(jawaban_gpmf.jawaban) as jumlah_jawaban,jawaban_gpmf.jawaban from jawaban_gpmf inner join pertanyaan_gpmf on pertanyaan_gpmf.id_pertanyaan_gpmf=jawaban_gpmf.id_pertanyaan_gpmf inner join subkategori_gpmf on subkategori_gpmf.id_subktg_gpmf=pertanyaan_gpmf.id_subktg_gpmf inner join kategori_gpmf on kategori_gpmf.id_ktg_gpmf=subkategori_gpmf.id_ktg_gpmf where kategori_gpmf.nama_kategori_gpmf='Standar pengabdian pada masyarakat' group by jawaban_gpmf.jawaban");
?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart1);	  
	  
      function drawChart1() {

        var data = google.visualization.arrayToDataTable([
          ['jawaban', 'jumlah_jawaban'],
          <?php while($row = mysqli_fetch_array($query1)){
			  echo "['".$row["jawaban"]."', ".$row["jumlah_jawaban"]."],";
		  }
			  ?>
          //['<?php echo $row['jawaban']; ?>',  <?php echo $row['jumlah_jawaban']; ?>],		  
        ]);

        var options = {
          title: 'Grafik Persentase Standar Pendidikan',
        width: 600,
        height: 400,
        bar: {groupWidth: "195%"},
        legend: { position: "none" },
		
        };

        var chart = new google.visualization.PieChart(document.getElementById('grafik1'));
        chart.draw(data, options);
      }
	  
	 
</script>

<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart2);	  
	  
      function drawChart2() {

        var data = google.visualization.arrayToDataTable([
          ['jawaban', 'jumlah_jawaban'],
          <?php while($row = mysqli_fetch_array($query2)){
			  echo "['".$row["jawaban"]."', ".$row["jumlah_jawaban"]."],";
		  }
			  ?>
          //['<?php echo $row['jawaban']; ?>',  <?php echo $row['jumlah_jawaban']; ?>],		  
        ]);

        var options = {
          title: 'Grafik Persentase Standar Penelitian',
        width: 600,
        height: 400,
        bar: {groupWidth: "195%"},
        legend: { position: "none" },
		
        };

        var chart = new google.visualization.PieChart(document.getElementById('grafik2'));
        chart.draw(data, options);
      }
	  
	 
</script>

<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart3);	  
	  
      function drawChart3() {

        var data = google.visualization.arrayToDataTable([
          ['jawaban', 'jumlah_jawaban'],
          <?php while($row = mysqli_fetch_array($query3)){
			  echo "['".$row["jawaban"]."', ".$row["jumlah_jawaban"]."],";
		  }
			  ?>
          //['<?php echo $row['jawaban']; ?>',  <?php echo $row['jumlah_jawaban']; ?>],		  
        ]);

        var options = {
          title: 'Grafik Persentase Standar Pengabdian Pada Masyarakat',
        width: 600,
        height: 400,
        bar: {groupWidth: "195%"},
        legend: { position: "none" },
		
        };

        var chart = new google.visualization.PieChart(document.getElementById('grafik3'));
        chart.draw(data, options);
      }
	  
	 
    </script>


 <?php //} ?>
 <div class="card-body">
	<div id="grafik1" style="width:100%;"></div>
	<div id="grafik2" style="width:100%;"></div>
	<div id="grafik3" style="width:100%;"></div>
</div>
</div>
</div>