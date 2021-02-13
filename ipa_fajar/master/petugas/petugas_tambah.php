<style>
    .form-control{
        font-size:13px;
    }
</style>

<div class="col-md-11 mx-auto" style="margin-top:40px;">
    <div class="card">
        <div class="card-header">
            <div class="float-left">
                <i class="fa fa-plus-square" aria-hidden="true"></i> Tambah Petugas
            </div>

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
            <form id="form" action="<?php base() ?>petugas_simpan" method="post" data-toggle="validator" role="form">
                <div class="row">
                    <div class="col-md-4">
                        
                        <div class="form-group">
                            <label>Nama Petugas</label>
                            <input required="" class="form-control" id="nama"  name="nama" placeholder="Nama Petugas">
                        </div>
                        <div class="form-group">
                            <label for="exampleSelect1">Jenis Kelamin</label>
                            <select required="" class="form-control" id="jk" name="jk" style="font-size:13px;">
                                <option value="">-Jenis Kelamin-</option>
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                       <div class="form-group">
                            <label>No Hp</label>
                            <input required="" class="form-control" id="no_hp"  name="no_hp" placeholder=" No Handphone">
                        </div>
                    </div>
                    <div class="col-md-4">
                        
						<div class="form-group">
                            <label for="exampleTextarea">Alamat</label>
                            <textarea required="" id="alamat" name="alamat" placeholder="Alamat Rumah" class="form-control" id="exampleTextarea" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input required="" class="form-control" id="username" name="username" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input required="" type="password" class="form-control" id="password"  name="password" placeholder="Password">
                        </div>
                    </div>
                    <div class="col-md-4">
						

                        <div class="form-group">
                            <label for="exampleSelect1">Status</label>
                            <select name="status" required="" id="status" class="form-control" style="font-size:13px;">
                                <option value="">-Pilih Status-</option>
                                <option value="S">Petugas</option>
                                <option value="A">Kepala Laboratorium</option>
                                
                            </select>
                        </div>
                        <div class="form-group" style="padding-top:32px;">
                            <button type="submit" class="btn btn-info">Simpan</button>
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