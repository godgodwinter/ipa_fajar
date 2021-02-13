<?php
$kd_petugas = $crud->auto_kode("lab", "kd_lab", "kode", "R_0001", 2, 4, 4, "R_");
?>
<style>
    .form-control{
        font-size:13px;
    }
</style>
<div class="col-md-5 mx-auto" style="margin-top:40px;">
    <div class="card">
        <div class="card-header">
            <i class="fa fa-plus-square" aria-hidden="true">&nbsp;</i>Tambah Laboratorium
        </div>
        <div class="card-block">
            <form id="form" action="<?php base() ?>lab_simpan" method="post" data-toggle="validator" role="form">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Kode Laboratorium</label>
                            <input readonly="" id="kd_lab" name="kd_lab" class="form-control" value="<?php echo $kd_petugas ?>"   >
                        </div>
                        <div class="form-group">
                            <label for="exampleTextarea">Nama Laboratorium</label>
                            <textarea required="" name="nama_lab" id="nama_lab" class="form-control" id="exampleTextarea" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-info">Simpan</button>
                            <a href="<?php base() ?>laboratorium">
                                <button type="button" class="btn btn-warning">Cancel</button>
                            </a>
                        </div>
                        <script>
                            $(document).ready(function () {
                                $('#form').validator().on('submit', function (e) {
                                    if (e.isDefaultPrevented()) {
                                        var indikator = $("#laboratorium").val();
                                        if (indikator == "") {
                                            $("#nama_lab").focus();
                                            swal("nama_lab Harus Di Isi");
                                        } 
                                    } else {
                                        // everything looks good!
                                    }
                                });
                            });
                        </script>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>