<?php
 include '../../koneksi.php';
 $kd_petugas=$_POST["id"];
 $where=array("kd_atribut"=>$kd_petugas);
 $delete=$crud->delete_record("tb_atribut",$where);
 echo $delete;
?>