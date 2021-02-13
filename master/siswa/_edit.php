<?php
$data = array(
    'nama_siswa' => $_POST["nama_siswa"],
    
    'jk' => $_POST["jk"],
    'alamat' => $_POST["alamat"],
    'username' => $_POST["username"],
    'password' => md5($_POST["password"]),
    'psd_v' => $_POST["password"],
    
);
$where = array('nis' => $_POST["nis"]);
$insert = $crud->update("siswa", $where, $data);
if ($insert == 1) {
    ?>
    
    <script>
    window.location = "<?php echo base() ?>siswa";
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
    window.location = "<?php echo base() ?>siswa";
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
