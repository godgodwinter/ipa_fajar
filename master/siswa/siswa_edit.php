<?php
$nis = $url[1];
$w = array("nis" => $nis);
$r = $crud->record("siswa", $w);

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

<div class="col-md-11 mx-auto" style="margin-top:40px;">
    <div class="card">
        <div class="card-header">
            <i class="fa fa-cog" aria-hidden="true"></i>&nbsp;Edit Siswa
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
            <form id="form" action="<?php base() ?>siswa_ganti" method="post" data-toggle="validator" role="form">
                <input hidden="" value="<?php echo $r["nis"] ?>" name="nis">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Nama</label>
                            <input value="<?php echo $r["nama_siswa"] ?>" required="" class="form-control" id="nama_siswa" name="nama_siswa">
                        </div>
                        <div class="form-group">
                            <label>Kelas</label>
                            <input value="<?php echo $r["Kelas"] ?>" required="" class="form-control" id="Kelas"  name="Kelas">
                        </div>
						 <div class="form-group">
                            <label>Jurusan</label>
                            <input value="<?php echo $r["Jurusan"] ?>" required="" class="form-control" id="Jurusan"  name="Jurusan">
                        </div>
                       
						</div>
						 <div class="col-md-4">
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
                        <div class="form-group">
                            <label for="exampleTextarea">Alamat</label>
                            <textarea required="" id="alamat" name="alamat" class="form-control" id="exampleTextarea" rows="3">
                                <?php echo $r["alamat"] ?>
                            </textarea>
                        </div>                                                          
                    </div>
                    <div class="col-md-4">
						<div class="form-group">
                            <label>Username</label>
                            <input value="<?php echo $r["username"] ?>" required="" class="form-control" id="username" name="username">
                        </div>
						<div class="form-group">
                            <label>Password Lama</label>
                            <input value="<?php echo $r["Psd_v"] ?>"  required="" readonly="" class="form-control" id="password"  name="password">
                        </div>
                        <div class="form-group">
                            <label>Password Baru</label>
                            <input value="<?php echo $r["Psd_v"] ?>"  required="" type="password" class="form-control" id="password"  name="password">
                        </div>
                        <div class="form-group">
                            <label for="exampleSelect1">Kategori User</label>
                            <select required="" class="form-control" id="kategori" name="kategori" style="font-size:13px;">
                                <?php
                                // if ($r["kategori"] == "L") {
                                //     $L = "selected";
                                //     $P = "";
                                // } else {
                                //     $P = "selected";
                                //     $L = "";
                                // }
                                ?>
                                <option><?php echo $r["kategori"] ?></option>
                                <option value="">-Kategori User-</option>
                                <option>Guru</option>
                                <option>Kepala Sekolah</option>
                                <option>Petugas</option>
                                <option>Siswa</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Edit</button>
                            <a href="<?php base() ?>siswa">
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
                            var Kelas = $("#Kelas").val();
                            var Jurusan = $("#Jurusan").val();
                            var jk = $("#jk").val();
                            var alamat = $("#alamat").val();
                            var username = $("#username").val();
                            var pass = $("#password").val();
                           
                            if (nama == "") {
                                $("#nama_siswa").focus();
                                swal("Nama Harus Di Isi");
                            } else if (Kelas == "") {
                                $("#Kelas").focus();
                                swal("No Kelas Harus Di Isi");
							} else if (Jurusan == "") {
                                $("#Jurusan").focus();
                                swal("No Jurusan Harus Di Isi");
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