
<style>
    .form-control{
        font-size:13px;
    }
</style>

<div class="col-md-11 mx-auto" style="margin-top:40px;">
    <div class="card">
        <div class="card-header">
            <div class="float-left">
                <i class="fa fa-plus-square" aria-hidden="true"></i> Tambah Siswa
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
            <form id="form" action="<?php base() ?>siswa_simpan" method="post" data-toggle="validator" role="form">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>NIS</label>
                            <input required="" class="form-control" id="nis"  name="nis" placeholder="nis">
                        </div>
						
                        <div class="form-group">
                            <label>Nama Siswa</label>
                            <input required="" class="form-control" id="nama_siswa"  name="nama_siswa" placeholder="Nama Siswa">
                        </div>
                        <div class="form-group">
                            <label for="exampleSelect1">Jenis Kelamin</label>
                            <select required="" class="form-control" id="jk" name="jk" style="font-size:13px;">
                                <option value="">-Jenis Kelamin-</option>
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>						
												
                    </div>
                    <div class="col-md-4">
						<div class="form-group">
                            <label for="exampleTextarea">Alamat</label>
                            <textarea required="" id="alamat" name="alamat" placeholder="Alamat Rumah" class="form-control" id="exampleTextarea" rows="3"></textarea>
                        </div>
						  
                        <div class="form-group">
                            <label>Kelas</label>
                            <input required="" class="form-control" id="kelas"  name="kelas" placeholder="Kelas ">
                        </div> 
						<div class="form-group">
                            <label>Jurusan</label>
                            <input required="" class="form-control" id="jurusan"  name="jurusan" placeholder="Jurusan">
                        </div> 
																
                    </div>
					<div class="col-md-4">
							                   
                        <div class="form-group">
                            <label>Username</label>
                            <input required="" class="form-control" id="username" name="username" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input required="" type="password" class="form-control" id="password"  name="password" placeholder="Password">
                        </div>
						<div class="form-group" style="padding-top:32px;">
                            <button type="submit" class="btn btn-info">Simpan</button>
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
                            var jk = $("#jk").val();
                            var alamat = $("#alamat").val();
                            var username = $("#username").val();
                            var pass = $("#password").val();                            
                            if (nama == "") {
                                $("#nama").focus();
                                swal("Nama Harus Di Isi");
                            }  else if (jk == "") {
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
                            }  else {
                            // everything looks good!
                        }
                    });
                });
            </script>
			
        </div>
    </div>
</div>