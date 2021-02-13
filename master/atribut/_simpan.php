<?php
include ('connection.php');
$StrSQL = "select max(kd_atribut) as terakhir from tb_atribut";
$QData  = @mysql_query($StrSQL) or die(mysql_error());
$data   = mysql_fetch_array($QData);
$max = $data["terakhir"];
$max = $max+1;
$max_id = sprintf('%02s', $max);

$pertanyaan = $_POST['pertanyaan'];
$indikator = $_POST['indikator'];

/*echo $nama.'<br>';
echo $username.'<br>';
echo $alamat.'<br>';
echo $telp.'<br>';
echo $hak_akses.'<br>';*/

	$insert=mysql_query("insert into tb_atribut values ('$max_id','$indikator','$pertanyaan')")or die(mysql_error());
    
    // var_dump($insert);
	if ($insert == 1) {
        // echo"true";
        // header('Location: '.base()."atribut");
    ?>
    <script>
    window.location = "<?php echo base() ?>atribut";
</script>
    <!-- <script>
        swal({
            title: 'Success',
            text: '',
            type: 'success'
        }).then(function () {
            window.location.href = "<?php echo base() ?>atribut";
        });
    </script> -->
    
    <?php
} else {
    ?>
    <script>
    window.location = "<?php echo base() ?>atribut";
</script>
    <!-- <script>
        swal({
            title: 'Failed',
            text: '',
            type: 'error'
        }).then(function () {
            window.location.href = "<?php echo base() ?>atribut";
        });
    </script> -->
    <?php
}
?>