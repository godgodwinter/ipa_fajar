<?php
$data = array(
    'indikator' => $_POST["indikator"]
);
$where = array('kd_indikator' => $_POST["kd_indikator"]);
$insert = $crud->update("tb_indikator", $where, $data);
if ($insert == 1) {
    ?>
    <script>
        swal({
            title: 'Success',
            text: '',
            type: 'success'
        }).then(function () {
            window.location.href = "<?php echo base() ?>indikator";
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
            window.location.href = "<?php echo base() ?>indikator";
        });
    </script>
    <?php
}
?>
