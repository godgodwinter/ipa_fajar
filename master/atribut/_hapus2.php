<?php
include '../../connection.php';
$kd_atribut = $url[1];
$w = array("kd_atribut" => $kd_atribut);
$r = $crud->record("tb_atribut", $w);
var_dump($kd_atribut);
// $id = $_GET['id'];
// mysql_query("DELETE FROM tb_atribut WHERE id='$kd_atribut'")or die(mysql_error());
$where=array("kd_atribut"=>$kd_atribut);
 $delete=$crud->delete_record("tb_atribut",$where);
 
// header("location:index.php?pesan=hapus");
?>
  <script>
    window.location = "<?php echo base() ?>atribut";
</script>