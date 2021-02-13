<?php

include ('.../koneksi/koneksi.php');
  mysql_connect("localhost","root","");
	mysql_select_db("fajar_ipa");
	
    	
$tgl = $_POST['tanggal'];

$c1 = $_POST['optionsRadios1'];		$c2 = $_POST['optionsRadios2'];
$c3 = $_POST['optionsRadios3'];		$c4 = $_POST['optionsRadios4'];
$c5 = $_POST['optionsRadios5'];		$c6 = $_POST['optionsRadios6'];
$c7 = $_POST['optionsRadios7'];		$c8 = $_POST['optionsRadios8'];
$c9 = $_POST['optionsRadios9'];		$c10 = $_POST['optionsRadios10'];
$c11 = $_POST['optionsRadios11'];	$c12 = $_POST['optionsRadios12'];
$c13 = $_POST['optionsRadios13'];	$c14 = $_POST['optionsRadios14'];
$c15 = $_POST['optionsRadios15'];	$c16 = $_POST['optionsRadios16'];
$c17 = $_POST['optionsRadios17'];	$c18 = $_POST['optionsRadios18'];
$c19 = $_POST['optionsRadios19'];	$c20 = $_POST['optionsRadios20'];
$c21 = $_POST['optionsRadios21'];	$c22 = $_POST['optionsRadios22'];
$c23 = $_POST['optionsRadios23'];	$c24 = $_POST['optionsRadios24'];
$c25 = $_POST['optionsRadios25'];	$c26 = $_POST['optionsRadios26'];
$c27 = $_POST['optionsRadios27'];	$c28 = $_POST['optionsRadios28'];


$StrSQL = "select max(kd_kuesioner) as terakhir from tb_kuesioner";
$QData  = @mysql_query($StrSQL) or die(mysql_error());
$data   = mysql_fetch_array($QData);
$max = $data["terakhir"];
$max = $max+1;
$max_id = sprintf('%02s', $max);

	$batas = $_POST['batas'];
	$saran = $_POST['kritik_saran'];
	$hariini = date('Y-m-d');
	echo $hariini."<br>";
	echo $saran."<br>";
	
mysql_query("insert into tb_kuesioner values ('$max_id','$hariini','$saran')");
	
$c= 0;
$sqlk = mysql_query("SELECT * FROM tb_atribut");
while ($dkr = mysql_fetch_assoc($sqlk)){
$idk = $dkr['kd_atribut'];
$cc = "per".$c;
$p= $_POST[$cc];
$c++;
$cc = "per".$c;
$e= $_POST[$cc];
$c++;
	echo "<br>";
	echo $p;
	echo "<br>";
	echo $e;
	echo "<br>";
	echo "<br>";

mysql_query("insert into tb_detail_kuesioner values ('$max_id','$idk','$p','$e')");

}	
echo "
<script>
	alert('Terima Kasih Atas Partisipasi Anda');document.location='index.php';
</script>
";													

?>