<?php
error_reporting(0);
	$bln_ini = $_GET['bulan'];
	$thn_ini = $_GET['tahun'];
?>
<style>
    .form-control{
        font-size:13px;
    }
</style>
<div class="col-md-5 mx-auto" style="margin-top:40px;">
    <div class="card">
        <div class="card-header">
            <i class="fa fa-minus-square" aria-hidden="true">&nbsp;</i>FILTER LAPORAN KUESIONER PER BULAN
        </div>
        <div class="card-block">
         <form id="form" action="<?php base() ?>analisis" method="post" data-toggle="validator" role="form">  
                <div class="row">
                    <div class="col-md-12">
                       
						 <div class="form-group">
                            <label>Tahun</label>
                         </div>
						  <div class="form-group">
                                <select name="tahun" required="" id="tahun" class="form-control" style="font-size:13px;">
                                <option value="">-Pilih Tahun-</option>
								<option value="2016">2016</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
								<option value="2019">2019</option> 
								<option value="2020">2020</option> 
								
                            </select>
                        </div>
                        <div class="form-group">
                          
							<button type="button" class="btn btn-warning">Cancel</button>
							<button type="submit" class="btn btn-info">Analisis Data</button>
                        </div>
                       
                    </div>
                </div>
        </form>
        </div>
    </div>
</div>