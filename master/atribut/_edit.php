<?php
$data = array(
    'kd_indikator' => $_POST["kd_indikator"],
    'pertanyaan' => $_POST["pertanyaan"]
);
$where = array('kd_atribut' => $_POST["kd_atribut"]);
$insert = $crud->update("tb_atribut", $where, $data);
if ($insert == 1) {
    ?>
    <script>
        swal({
            title: 'Success',
            text: '',
            type: 'success'
        }).then(function () {
            window.location.href = "<?php echo base() ?>atribut_data/<?php echo $_POST["kd_indikator"]?>";
        });
    </script>
    <?php
} else {
    ?>
    <script>
        swal({
            title: 'Failed',
            text: '',
            type: 'error'
        }).then(function () {
            window.location.href = "<?php echo base() ?>atribut_data/<?php echo $_POST["kd_indikator"]?>";
        });
    </script>
    <?php
}
?>
