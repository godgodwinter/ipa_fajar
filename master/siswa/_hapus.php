<?php
 include '../../koneksi.php';
 $kd_petugas=$_POST["id"];
 $where=array("nis"=>$kd_petugas);
 $delete=$crud->delete_record("siswa",$where);
 echo $delete;
?>