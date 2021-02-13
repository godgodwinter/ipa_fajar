<?php
include '../../connection.php';
$nis = $url[1];
$w = array("nis" => $nis);
$r = $crud->record("tb_siswa", $w);
var_dump($nis);
// $id = $_GET['id'];
// mysql_query("DELETE FROM tb_atribut WHERE id='$kd_atribut'")or die(mysql_error());
$where=array("nis"=>$nis);
 $delete=$crud->delete_record("siswa",$where);
 
// header("location:index.php?pesan=hapus");
?>
  <script>
    window.location = "<?php echo base() ?>siswa";
</script>