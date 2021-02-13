<?php
 include '../../koneksi.php';
 $kd_petugas=$_POST["id"];
 $where=array("kd_indikator"=>$kd_petugas);
 $delete=$crud->delete_record("tb_indikator",$where);
 echo $delete;
?>