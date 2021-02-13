<?php
$kd_petugas = $crud->auto_kode("tb_petugas","kd_petugas","kode","PET_0001",4,4,4,"PET_");

$data = array(
    'kd_petugas' => $kd_petugas,
    'nama' => $_POST["nama"],
    'no_hp' => $_POST["no_hp"],
    'jk' => $_POST["jk"],
    'alamat' => $_POST["alamat"],
    'username' => $_POST["username"],
    'password' => md5($_POST["password"]),
    'psd_v' => $_POST["password"],
    'status' => $_POST["status"]
);
$insert = $crud->insert("tb_petugas", $data);
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

