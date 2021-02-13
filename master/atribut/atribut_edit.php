<?php
$kd_atribut = $url[1];
$w = array("kd_atribut" => $kd_atribut);
$r = $crud->record("tb_atribut", $w);
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
            Edit Atribut
        </div>
        <div class="card-block">
            <form id="form" action="<?php base() ?>indikator_ganti" method="post" data-toggle="validator" role="form">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Kode Atribut</label>
                            <input  readonly="" id="kd_atribut" name="kd_atribut" class="form-control" value="<?php echo $kd_atribut ?>"   >
                        </div>
                        <div class="form-group">
                            <label for="exampleTextarea">Pertanyaan</label>
                            <textarea required="" name="pertanyaan" id="pertanyaan" class="form-control" id="exampleTextarea" rows="3">
                                <?php echo $r["pertanyaan"] ?>
                            </textarea>
                        </div>
						
						<div class="form-group">
						<label >Nama Indikator</label>
                            <select class="form-control required="" select" name="indikator">
							<option value="">Pilih</option>
							<?php
							include ('connection.php');
					$indikator = mysql_query ("select * from tb_indikator");
						try{
							while($row=mysql_fetch_array($indikator)){
								echo '<option value="'.$row['kd_indikator'].'"';
								if($row['kd_indikator']==$_GET['kd_indikator']){
									echo ' selected';
								}
								echo '>'. $row['indikator'] . '</option>'."\n";
							}
						}
						catch(PDOException $e){
							echo 'No Results';
						}
					   ?>
											</select>
                                            <span class="card-block">Pilih indikator Yang Berkaitan Dengan atribut</span>		
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Edit</button>
                            <a href="<?php base() ?>atribut">
                                <button type="button" class="btn btn-warning">Cancel</button>
                            </a>
                        </div>
                        <script>
                            $(document).ready(function () {
                                $('#form').validator().on('submit', function (e) {
                                    if (e.isDefaultPrevented()) {
                                        var indikator = $("#atribut").val();
                                        if (indikator == "") {
                                            $("#atribut").focus();
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