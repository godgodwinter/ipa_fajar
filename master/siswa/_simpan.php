<?php
$data = array(
    'nis' => $_POST["nis"], 
    'nama_siswa' => $_POST["nama_siswa"],    
    'jk' => $_POST["jk"],
    'alamat' => $_POST["alamat"],
    'kelas' => $_POST["kelas"],
    'jurusan' => $_POST["jurusan"],
    'username' => $_POST["username"],
    'password' => md5($_POST["password"]),
	'Psd_v' => $_POST["password"]
   
);
$insert = $crud->insert("siswa", $data);
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

