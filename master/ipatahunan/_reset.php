<?php
include '../../connection.php';
// $id_laporan = $url[1];
// $w = array("nis" => $nis);
// $r = $crud->record("tb_siswa", $w);
// var_dump($id_laporan);
// $id = $_GET['id'];
// mysql_query("DELETE FROM tb_atribut WHERE id='$kd_atribut'")or die(mysql_error());
$where=array("*");
 $delete=$crud->delete_record("tb_detail_kuesioner",$where);
 $delete=$crud->delete_record("tb_kuesioner",$where);
 
// header("location:index.php?pesan=hapus");
?>
  <script>
    window.location = "<?php echo base() ?>ipatahunan";
</script>