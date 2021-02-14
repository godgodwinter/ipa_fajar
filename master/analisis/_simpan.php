<?php
$data = array(
    'tahun' => $_POST["tahun"], 
    'poi' => $_POST["poi"],    
    'persentase' => $_POST["persentase"],
   
   
);
$insert = $crud->insert("laporan", $data);
if ($insert == 1) {
    ?>
     <script>
    window.location = "<?php echo base() ?>analisis";
</script>
    <!-- <script>
        swal({
            title: 'Success',
            text: '',
            type: 'success'
        }).then(function () {
            window.location.href = "<?php echo base() ?>siswa";
        });
    </script> -->
    <?php
} else {
    ?>
    
    <script>
    window.location = "<?php echo base() ?>analisis";
</script>
    <!-- <script>
        swal({
            title: 'Failed',
            text: '',
            type: 'error'
        }).then(function () {
            window.location.href = "<?php echo base() ?>siswa";
        });
    </script> -->
    <?php
}
?>

