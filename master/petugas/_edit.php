<?php
$data = array(
    'nama' => $_POST["nama"],
    'no_hp' => $_POST["no_hp"],
    'jk' => $_POST["jk"],
    'alamat' => $_POST["alamat"],
    'username' => $_POST["username"],
    'password' => md5($_POST["password"]),
    'psd_v' => $_POST["password"],
    'status' => $_POST["status"]
);
$where = array('kd_petugas' => $_POST["kd_petugas"]);
$insert = $crud->update("tb_petugas", $where, $data);
if ($insert == 1) {
    ?>
    <script>
        swal({
            title: 'Success',
            text: '',
            type: 'success'
        }).then(function () {
            window.location.href = "<?php echo base() ?>petugas";
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
            window.location.href = "<?php echo base() ?>petugas";
        });
    </script>
    <?php
}
?>
