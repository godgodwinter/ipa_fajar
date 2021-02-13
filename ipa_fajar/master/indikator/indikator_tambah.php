<?php
$kd_petugas = $crud->auto_kode("tb_indikator", "kd_indikator", "kode", "IDKT_0001", 5, 4, 4, "IDKT_");
?>
<style>
    .form-control{
        font-size:13px;
    }
</style>
<div class="col-md-5 mx-auto" style="margin-top:40px;">
    <div class="card">
        <div class="card-header">
            <i class="fa fa-plus-square" aria-hidden="true">&nbsp;</i>Tambah Indikator
        </div>
        <div class="card-block">
            <form id="form" action="<?php base() ?>indikator_simpan" method="post" data-toggle="validator" role="form">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Kode Indikator</label>
                            <input readonly="" id="kd_indikator" name="kd_indikator" class="form-control" value="<?php echo $kd_petugas ?>"   >
                        </div>
                        <div class="form-group">
                            <label for="exampleTextarea">Nama Indikator</label>
                            <textarea required="" name="indikator" id="indikator" class="form-control" placeholder="Nama Indikator" id="exampleTextarea" rows="2"></textarea>
                        </div>
						 <div class="form-group">
                            <label>Keterangan</label>
                            <input required="" class="form-control" id="Keterangan"  name="Keterangan" placeholder="Keterangan">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-info">Simpan</button>
                            <a href="<?php base() ?>indikator">
                                <button type="button" class="btn btn-warning">Cancel</button>
                            </a>
                        </div>
                        <script>
                            $(document).ready(function () {
                                $('#form').validator().on('submit', function (e) {
                                    if (e.isDefaultPrevented()) {
                                        var indikator = $("#indikator").val();
                                        if (indikator == "") {
                                            $("#indikator").focus();
                                            swal("Indikator Harus Di Isi");
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