<?php
 include '../../koneksi.php';
 $kd_lab=$_POST["id"];
 $where=array("kd_lab"=>$kd_lab);
 $delete=$crud->delete_record("lab",$where);
 echo $delete;
?>