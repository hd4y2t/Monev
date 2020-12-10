<div class="content mt-3">
<div class="card">
    <div class="card-header">
    <strong class="card-title">Grafik Data Monev GPMP</strong>
	</div>
<?php
 //if(isset($_POST["cari"])){
	//$th_ajaran=$_POST["th_ajaran"];
	//$kelas=$_POST["kelas"];
	include "koneksi.php";
	$query1 = mysqli_query($k,"select count(jawaban_gpmp.jawaban) as jumlah_jawaban,jawaban_gpmp.jawaban from jawaban_gpmp inner join pertanyaan_gpmp on pertanyaan_gpmp.id_pertanyaan_gpmp=jawaban_gpmp.id_pertanyaan_gpmp inner join subkategori_gpmp on subkategori_gpmp.id_subktg_gpmp=pertanyaan_gpmp.id_subktg_gpmp inner join kategori_gpmp on kategori_gpmp.id_ktg_gpmp=subkategori_gpmp.id_ktg_gpmp where kategori_gpmp.nama_kategori_gpmp='Standar proses pembelajaran' group by jawaban_gpmp.jawaban");
	
	$query2 = mysqli_query($k,"select count(jawaban_gpmp.jawaban) as jumlah_jawaban,jawaban_gpmp.jawaban,jawaban_gpmp.id_pertanyaan_gpmp from jawaban_gpmp inner join pertanyaan_gpmp on pertanyaan_gpmp.id_pertanyaan_gpmp=jawaban_gpmp.id_pertanyaan_gpmp inner join subkategori_gpmp on subkategori_gpmp.id_subktg_gpmp=pertanyaan_gpmp.id_subktg_gpmp inner join kategori_gpmp on kategori_gpmp.id_ktg_gpmp=subkategori_gpmp.id_ktg_gpmp where kategori_gpmp.nama_kategori_gpmp='Standar isi pembelajaran' group by jawaban_gpmp.jawaban, jawaban_gpmp.id_pertanyaan_gpmp");
	
	$query3 = mysqli_query($k,"select count(jawaban_gpmp.jawaban) as jumlah_jawaban,jawaban_gpmp.jawaban from jawaban_gpmp inner join pertanyaan_gpmp on pertanyaan_gpmp.id_pertanyaan_gpmp=jawaban_gpmp.id_pertanyaan_gpmp inner join subkategori_gpmp on subkategori_gpmp.id_subktg_gpmp=pertanyaan_gpmp.id_subktg_gpmp inner join kategori_gpmp on kategori_gpmp.id_ktg_gpmp=subkategori_gpmp.id_ktg_gpmp where kategori_gpmp.nama_kategori_gpmp='Standar pengelolaan pembelajaran' group by jawaban_gpmp.jawaban");
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
          title: 'Grafik Persentase Standar Proses Pembelajaran',
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
          title: 'Grafik Persentase Standar Isi Pembelajaran',
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
          title: 'Grafik Persentase Standar Pengelolaan Pembelajaran',
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