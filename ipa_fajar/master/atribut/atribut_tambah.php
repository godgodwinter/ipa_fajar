<?php
include ('connection.php');
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
            <i class="fa fa-plus-square" aria-hidden="true"></i>&nbsp;Tambah Atribut
        </div>
        <div class="card-block">
            <form id="form" action="<?php base() ?>atribut_simpan" method="post" data-toggle="validator" role="form">
                
                <div class="row">
                    <div class="col-md-12">
                       <div class="form-group">
							<label>Kode Attribut</label>
									<div>
									<input type="text" name="" class="form-control" value="AUTO" readonly>
							</div>
						</div>
                        <div class="form-group">
                            <label for="exampleTextarea">Pertanyaan</label>
                            <textarea name="pertanyaan" id="pertanyaan" class="form-control" placeholder="Isi Dengan Pertanyaan Atribut Kuisioner" id="exampleTextarea" rows="3">
                            
                            </textarea>
                        </div>
						<div class="form-group">
						<label >Nama Indikator</label>
                            <select class="form-control required="" select" name="indikator">
							<?php
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
                            <button class="btn btn-info">Simpan</button>
                            <a href="<?php base() ?>atribut_simpan">
                                <button type="button" class="btn btn-warning">Cancel</button>
                            </a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>