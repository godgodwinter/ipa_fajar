<?php

	mysql_connect("localhost", "root", "") or 
	die (mysql_error());

	mysql_select_db("fajar_ipa") or
	die (mysql_error());

/*
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "fajar_ipa";

$koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(mysqli_connect_errno()){
	echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error();
}
*/
?>