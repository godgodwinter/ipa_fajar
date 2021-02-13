<?php
$kd_atribut = $crud->auto_kode("tb_atribut","kd_atribut","kode","ATRB_0012",4,4,4,"ATRB_");

$data = array(
    'kd_atribut' => $kd_atribut,
    
    'pertanyaan' => $_POST["pertanyaan"]
);
$insert = $crud->insert("tb_atribut", $data);
if ($insert == 1) {
    ?>
    <script>
        swal({
            title: 'Success',
            text: '',
            type: 'success'
        }).then(function () {
            window.location.href = "<?php echo base() ?>atribut";
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
            window.location.href = "<?php echo base() ?>atribut";
        });
    </script>
    <?php
}

?>