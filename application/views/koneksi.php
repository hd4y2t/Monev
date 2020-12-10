<?php
$server='localhost';
$user='root';
$pass='';
$db = "dbwulandari";

$k = mysqli_connect($server, $user, $pass, $db);
if(!$k){
	echo 'Koneksi database gagal !';
}
//$con = mysql_connect("localhost","root","");
//mysql_select_db($db,$con) or die ("Database Error");
?>
