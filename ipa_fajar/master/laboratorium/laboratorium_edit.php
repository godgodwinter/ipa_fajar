<?php
$kd_lab = $url[1];
$w = array("kd_lab" => $kd_lab);
$r = $crud->record("lab", $w);
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
            <i class="fa fa-plus-square" aria-hidden="true">&nbsp;</i>Tambah Laboratorium
        </div>
        <div class="card-block">
            <form id="form" action="<?php base() ?>lab_ganti" method="post" data-toggle="validator" role="form">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Kode Laboratorium</label>
                            <input readonly="" id="kd_lab" name="kd_lab" class="form-control" value="<?php echo $r["kd_lab"] ?>"   >
                        </div>
                        <div class="form-group">
                            <label for="exampleTextarea">Laboratorium</label>
                            <textarea required="" name="nama_lab" id="nama_lab" class="form-control" id="exampleTextarea" rows="3">
                                <?php echo $r["nama_lab"] ?>
                            </textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Edit</button>
                            <a href="<?php base() ?>nama_lab">
                                <button type="button" class="btn btn-warning">Cancel</button>
                            </a>
                        </div>
                        <script>
                            $(document).ready(function () {
                                $('#form').validator().on('submit', function (e) {
                                    if (e.isDefaultPrevented()) {
                                        var indikator = $("#nama_lab").val();
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