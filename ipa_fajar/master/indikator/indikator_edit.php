<?php
$kd_indikator = $url[1];
$w = array("kd_indikator" => $kd_indikator);
$r = $crud->record("tb_indikator", $w);
?>
<style>
    .form-control{
        font-size:13px;
    }
</style>
<script>
   $(document).ready(function(){
       $('textarea').each(function(){
            $(this).val($(this).val().trim());
        }
    );
   });
</script>
<div class="col-md-5 mx-auto" style="margin-top:40px;">
    <div class="card">
        <div class="card-header">
            Edit Indikator
        </div>
        <div class="card-block">
            <form id="form" action="<?php base() ?>indikator_ganti" method="post" data-toggle="validator" role="form">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Kode Indikator</label>
                            <input  readonly="" id="kd_indikator" name="kd_indikator" class="form-control" value="<?php echo $kd_indikator ?>"   >
                        </div>
                        <div class="form-group">
                            <label for="exampleTextarea">Nama Indikator</label>
                            <textarea required="" name="indikator" id="indikator" class="form-control" id="exampleTextarea" rows="3">
                                <?php echo $r["indikator"] ?>
                            </textarea>
                        </div>
						<div class="form-group">
                            <label>Keterangan</label>
                            <input value="<?php echo $r["Keterangan"] ?>" required="" class="form-control" id="Keterangan" name="Keterangan">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Edit</button>
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