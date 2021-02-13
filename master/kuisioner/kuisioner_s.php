<?php
$StrSQL = "select max(id_kuisioner) as terakhir from t_kuisioner";
$QData  = @mysql_query($StrSQL) or die(mysql_error());
$data   = mysql_fetch_array($QData);
$max = $data["terakhir"];
$max = $max+1;
$max_id = sprintf('%011s', $max);

$batas = $_POST['batas'];
$saran = $_POST['saran'];
$username = $_POST['username'];
$hariini = date('Y-m-d');
echo $saran."<br>";
echo $id_user_user."<br>";
echo $hariini."<br>";

mysql_query("delete from t_kuisioner where id_user='$id_user_user' and waktu_kuisioner='$hariini'");
mysql_query("insert into t_kuisioner values ('$max_id','$id_user_user','$hariini','$username')");
mysql_query("delete from t_detail_kuisioner where kd_kuesioner='$max_id'");

for($a=0;$a<$batas;$a++){
	$kd_atribut = $_POST['kd_atribut'.$a];
	$per = $_POST['p'.$a];
	$imp = $_POST['i'.$a];
	echo $id_attribut;
	echo "<br>";
	echo $per;
	echo "<br>";
	echo $imp;
	echo "<br>";
	echo "<br>";
	mysql_query("insert into t_detail_kuesioner values ('$max_id','$kd_atribut','$per','$imp')");
}
echo "<meta http-equiv='refresh' content='0;url=?v=kuisioner&m=ok'>";?>