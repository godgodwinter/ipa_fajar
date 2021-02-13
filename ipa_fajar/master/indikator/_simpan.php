<?php
//$kd_petugas = $crud->auto_kode("tb_petugas","kd_petugas","kode","PET_0001",4,4,4,"PET_");

$data = array(
    'kd_indikator' => $_POST["kd_indikator"],
    'indikator' => $_POST["indikator"]
    'Keterangan' => $_POST["Keterangan"]
);
$insert = $crud->insert("tb_indikator", $data);
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

