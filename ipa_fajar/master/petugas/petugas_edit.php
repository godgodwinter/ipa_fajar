<?php
$kd_petugas = $url[1];
$w = array("kd_petugas" => $kd_petugas);
$r = $crud->record("tb_petugas", $w);

?>
<style>
    .form-control{
        font-size:14px;
    }
</style>
<script>
    $(document).ready(function () {
        $('textarea').each(function () {
            $(this).val($(this).val().trim());
        }
        );
    });
</script>
<input hidden="" value="<?php echo $r["kabupaten"] ?>" id="id_kab">
<div class="col-md-11 mx-auto" style="margin-top:40px;">
    <div class="card">
        <div class="card-header">
            <i class="fa fa-cog" aria-hidden="true"></i>&nbsp;Edit Petugas
            <div class="float-right">
                <a href="">
                    <button class="btn btn-primary btn-sm">
                        <i class="fa fa-refresh" aria-hidden="true"></i>
                        Refresh
                    </button>
                </a>
            </div>
        </div>
        <div class="card-block">
            <form id="form" action="<?php base() ?>petugas_ganti" method="post" data-toggle="validator" role="form">
                <input hidden="" value="<?php echo $r["kd_petugas"] ?>" name="kd_petugas">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Nama</label>
                            <input value="<?php echo $r["nama"] ?>" required="" class="form-control" id="nama" name="nama">
                        </div>
                        <div class="form-group">
                            <label>No Hp</label>
                            <input value="<?php echo $r["no_hp"] ?>" required="" class="form-control" id="no_hp"  name="no_hp">
                        </div>
                        <div class="form-group">
                            <label for="exampleSelect1">Jenis Kelamin</label>
                            <select required="" class="form-control" id="jk" name="jk" style="font-size:13px;">
                                <?php
                                if ($r["jk"] == "L") {
                                    $L = "selected";
                                    $P = "";
                                } else {
                                    $P = "selected";
                                    $L = "";
                                }
                                ?>
                                <option value="">-Jenis Kelamin-</option>
                                <option <?php echo $L ?> value="L">Laki-laki</option>
                                <option <?php echo $P ?> value="P">Perempuan</option>
                            </select>
                        </div>
						</div>
						 <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleTextarea">Alamat</label>
                            <textarea required="" id="alamat" name="alamat" class="form-control" id="exampleTextarea" rows="3">
                                <?php echo $r["alamat"] ?>
                            </textarea>
                        </div>
                                   
                        <div class="form-group">
                            <label>Username</label>
                            <input value="<?php echo $r["username"] ?>" required="" class="form-control" id="username" name="username">
                        </div>
                        
                    </div>
                    <div class="col-md-4">
						<div class="form-group">
                            <label>Password Lama</label>
                            <input value="<?php echo $r["psd_v"] ?>"  required="" readonly="" class="form-control" id="password"  name="password">
                        </div>
                        <div class="form-group">
                            <label>Password Baru</label>
                            <input value="<?php echo $r["psd_v"] ?>"  required="" type="password" class="form-control" id="password"  name="password">
                        </div>
                        <div class="form-group">
                            <label for="exampleSelect1">Status</label>
                            <select name="status" required="" id="status" class="form-control" style="font-size:13px;">
                                <?php
                                if ($r["status"] == "S") {
                                    $S = "selected";
                                    $A = "";
                                    $M = "";
                                } else if ($r["status"] == "A") {
                                    $S = "";
                                    $A = "selected";
                                    $M = "";
                                } else {
                                    $S = "";
                                    $A = "";
                                    $M = "selected";
                                }
                                ?>
                                <option value="">-Pilih Status-</option>
                                <option <?php echo $S ?> value="S">Petugas</option>
                                <option <?php echo $A ?> value="A">Kepala Laboratorium</option>
                                
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Edit</button>
                            <a href="<?php base() ?>petugas">
                                <button type="button" class="btn btn-warning">Cancel</button>
                            </a>
                        </div>
                    </div>
                </div>
            </form>
            <script>
                $(document).ready(function () {
                    $('#form').validator().on('submit', function (e) {
                        if (e.isDefaultPrevented()) {
                            var nama = $("#nama").val();
                            var no_hp = $("#no_hp").val();
                            var jk = $("#jk").val();
                            var alamat = $("#alamat").val();
                            var username = $("#username").val();
                            var pass = $("#password").val();
                            var status = $("#status").val();
                            if (nama == "") {
                                $("#nama").focus();
                                swal("Nama Harus Di Isi");
                            } else if (no_hp == "") {
                                $("#no_hp").focus();
                                swal("No Hp Harus Di Isi");
                            } else if (jk == "") {
                                $("#jk").focus();
                                swal("Jenis Kelamin Harus Dipilih");
                            } else if (alamat == "") {
                                $("#alamat").focus();
                                swal("Alamat Harus Diisi");
                            } else if (username == "") {
                                $("#username").focus();
                                swal("Username Harus Diisi");
                            } else if (pass == "") {
                                $("#password").focus();
                                swal("Password Harus Diisi");
                            } else if (status == "") {
                                $("#status").focus();
                                swal("Status Harus Diisi");
                            }
                        } else {
                            // everything looks good!
                        }
                    });
                });
            </script>
        </div>
    </div>
</div>