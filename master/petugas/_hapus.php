<?php
 include '../../koneksi.php';
 $kd_petugas=$_POST["id"];
 $where=array("kd_petugas"=>$kd_petugas);
 $delete=$crud->delete_record("tb_petugas",$where);
 echo $delete;
?>