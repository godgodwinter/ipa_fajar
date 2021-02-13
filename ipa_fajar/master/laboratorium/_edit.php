<?php
$data = array(
    'nama_lab' => $_POST["nama_lab"]
);
$where = array('kd_lab' => $_POST["kd_lab"]);
$insert = $crud->update("lab", $where, $data);
if ($insert == 1) {
    ?>
    <script>
        swal({
            title: 'Success',
            text: '',
            type: 'success'
        }).then(function () {
            window.location.href = "<?php echo base() ?>laboratorium";
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
            window.location.href = "<?php echo base() ?>laboratorium";
        });
    </script>
    <?php
}
?>
