<?php
$kd_petugas = $url[1];
$w = array("nis" => $kd_petugas);
$r = $crud->record("siswa", $w);
?>
<style>
    td{
        font-size:13px;
    }
</style>
<div style="margin-top:20px;"></div>
<div class="alert alert-info" role="alert">
    <strong>Detail Data!</strong>
</div>
<div class="row">
    <div class="col-md-4">
        <table class="table table-bordered">
		 
            <tr>
                <td><b>Kode</b></td>
                <td style="width:10px;">:</td>
                <td><?php echo $r["nis"] ?></td>
            </tr>
            <tr>
                <td><b>Nama</b></td>
                <td style="width:10px;">:</td>
                <td><?php echo $r["nama_siswa"] ?></td>
            </tr>
            <tr>
                <td><b>Jenis Kelamin</b></td>
                <td style="width:10px;">:</td>
                <td>
                    <?php
                    if ($r["jk"] == "L") {
                        echo "laki-laki";
                    } else {
                        echo "Perempuan";
                    }
                    ?>
                </td>
            </tr>
            
            <tr>
                <td><b>Alamat</b></td>
                <td style="width:10px;">:</td>
                <td><?php echo $r["alamat"] ?></td>
            </tr>
        </table>
        <a href="<?php base() ?>siswa">
            <button class="btn btn-warning">Cancel</button>
        </a>
    </div>
    <div class="col-md-4">
        <table class="table table-bordered">
            <tr>
                <td><b>Username</b></td>
                <td style="width:10px;">:</td>
                <td><?php echo $r["username"] ?></td>
            </tr>
            <tr>
                <td><b>Password</b></td>
                <td style="width:10px;">:</td>
                <td><?php echo $r["Psd_v"] ?></td>
            </tr>
            			 
        </table>
    </div>
</div>
