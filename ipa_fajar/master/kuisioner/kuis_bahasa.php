<?php

  include ('koneksi/koneksi.php');
  mysql_connect("localhost","root","");
	mysql_select_db("fajar_ipa");
    $sql = mysql_query("SELECT * FROM tb_atribut");
    $daftarkriteria = mysql_fetch_assoc($sql);
?>

<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
       <!-- <title>Kuesioner Kepuasan Pasien</title> -->           
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href=".../css/theme-default.css"/>
		<link href=".../date/bootstrap/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
        <!-- EOF CSS INCLUDE -->
    </head>
    <body>
            
            <!-- PAGE CONTENT -->
            <div class="page-content" >
                            
                      
                <form action="simpan_pasien.php" method="POST" id="myForm">  
                                        
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">

                            <div class="panel panel-default">
                                
                                    <h2 class="panel-title"></h2>
                                    <div class="form-group">
                                        
                                </div>
                                <div class="panel-body">
								
	                     
			<div class="form-group" align="right">
                <div class="input-group date form_date col-md-2" data-date="" data-date-format="dd-mm-yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                    <input class="form-control" size="16" type="text" name="tanggal" value="<?php echo date('l, d-m-Y'); ?>">
                </div>
            </div>

    <div class="panel panel-default">
      <div class="panel-body panel-body-table">   
    <h4><center>ISI KUESIONER </center></h4>
    </br>
    <div style="text-align:justify">
    Berdasarkan pengalaman anda terhadap pelayanan Laboratorium yang diberikan, berilah Centang (V) pada alternatif jawaban
    yang merefleksikan Kinerja (Perfomance) dan Kepentingan (Importance) anda. 
    Ada lima alternative jawaban yang dapat anda pilih, yaitu : 
    1. Sangat Tidak Penting = STP |
    2. Tidak Penting = TP |
    3. Cukup Penting = CP |
    4. Penting = P |
    5. Sangat Penting = SP 
    </div>
   </div>
    </div>
    
    <div class="panel panel-default">

                                <div class="panel-body panel-body-table">   
									<div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
          <tr>
            <th colspan="3"><div align="center">Kuesioner Pelayanan Laboratorium BAHASA</div></th>
            <th colspan="5"><div align="center">Penilaian Kinerja </br> (Perfomance)</div></th>
            <th colspan="5"><div align="center">Penilaian Kepentingan </br> (Importance)</div></th>
          </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
            <td width="30"><div align="center"><b>No</b></div></td>
			<!--<td><div align="center"><b>Kategori</b></div></td> -->
            <td><div align="center"><b>Pertanyaan</b></div></td>
            <td><div align="center">STP</div></td>
            <td><div align="center">TP</div></td>
            <td><div align="center">CP</div></td>
            <td><div align="center">P</div></td>
            <td><div align="center">SP</div></td>

            <td><div align="center">STP</div></td>
            <td><div align="center">TP</div></td>
            <td><div align="center">CP</div></td>
            <td><div align="center">P</div></td>
            <td><div align="center">SP</div></td>
          </tr>

            <?php
              $n=0;
              $nmc=1;
            ?>
              <?php
                do {
                  $n++; 
              ?>

          <tr>
            <td><div align="center">
              <input type="hidden" name="kode" value="">
              <input type="hidden" name="kriteria <?php echo $daftarkriteria['kd_atribut'];?>" value="<?php echo $daftarkriteria['kd_atribut']; ?>">
              <?php echo $n; ?>
            </div></td>			
            <td>
              <?php echo $daftarkriteria['pertanyaan']; ?>
            </td>
<form id="myForm">
            <td>
			<div class="radio">
            <label>
            <input type="radio" required="required" name="optionsRadios<?php echo $nmc; ?>" id="optionsRadios1" value="1" />
            </label>
            </div>
			</td>
			
			<td>
			<div class="radio">
            <label>
            <input type="radio" required="required" name="optionsRadios<?php echo $nmc; ?>" id="optionsRadios2" value="2" />
            </label>
            </div>
			</td>
			
			<td>
			<div class="radio">
            <label>
            <input type="radio" required="required" name="optionsRadios<?php echo $nmc; ?>" id="optionsRadios3" value="3" required="required"/>
            </label>
            </div>
			</td>
			
			<td>
			<div class="radio">
            <label>
            <input type="radio" required="required" name="optionsRadios<?php echo $nmc; ?>" id="optionsRadios4" value="4" required="required"/>
            </label>
            </div>
			</td>
			
			<td>
			<div class="radio">
            <label>
            <input type="radio" required="required" name="optionsRadios<?php echo $nmc; ?>" id="optionsRadios5" value="5" required="required"/>
            </label>
            </div>
			</td>
			
            <?php
              $nmc=$nmc+1;
            ?>

                        <td>
			<div class="radio">
            <label>
            <input type="radio" name="optionsRadios<?php echo $nmc; ?>" id="optionsRadios6" value="1" required="required"/>
            </label>
            </div>
			</td>
			
			<td>
			<div class="radio">
            <label>
            <input type="radio" name="optionsRadios<?php echo $nmc; ?>" id="optionsRadios7" value="2" required="required"/>
            </label>
            </div>
			</td>
			
			<td>
			<div class="radio">
            <label>
            <input type="radio" name="optionsRadios<?php echo $nmc; ?>" id="optionsRadios8" value="3" required="required"/>
            </label>
            </div>
			</td>
			
			<td>
			<div class="radio">
            <label>
            <input type="radio" name="optionsRadios<?php echo $nmc; ?>" id="optionsRadios9" value="4" required="required"/>
            </label>
            </div>
			</td>
			
			<td>
			<div class="radio">
            <label>
            <input type="radio" name="optionsRadios<?php echo $nmc; ?>" id="optionsRadios10" value="5" required="required"/>
            </label>
            </div>
			</td>

            <?php $nmc=$nmc+1; ?>

          </tr>

          <?php } while ($daftarkriteria = mysql_fetch_assoc($sql)); ?>

                                        </tbody>
                                    </table>                                
                                </div>
                            </div>
</div>

     <div class="form-group">
      <label for="comment">Kritik Saran :</label>
      <textarea class="form-control" required="required" rows="5" name="kritiksaran"></textarea>
    </div>
</form>
    <button type="submit" class="btn btn-info active"><span class="glyphicon glyphicon-thumbs-up">Submit</span></button>
    <button type="submit" class="btn btn-warning active" onclick="myFunction()"><span class="glyphicon glyphicon-refresh">Reset</span></button>
</div>
<br>
</div>
<script>
function myFunction() {
    document.getElementById("myForm").reset();
}
</script>
								
                                </div>
                            </div>

                        </div>
                    </div>
                
                </div>
                <!-- END PAGE CONTENT WRAPPER -->                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->


        <!-- START PRELOADS -->
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->                 
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src=".../js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src=".../js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src=".../js/plugins/bootstrap/bootstrap.min.js"></script>        
        <!-- END PLUGINS -->
        <!-- END PAGE PLUGINS -->         
        <!-- START TEMPLATE -->
        <script type="text/javascript" src=".../js/plugins.js"></script>        
        <script type="text/javascript" src=".../js/actions.js"></script>        
        <!-- END TEMPLATE -->
		
<script type="text/javascript" src=".../date/jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
<script type="text/javascript" src=".../date/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src=".../date/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src=".../date/js/locales/bootstrap-datetimepicker.id.js" charset="UTF-8"></script>
<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		forceParse: 0,
        showMeridian: 1
    });
	$('.form_date').datetimepicker({
        language:  'id',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0
    });
	$('.form_time').datetimepicker({
        language:  'id',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 1,
		minView: 0,
		maxView: 1,
		forceParse: 0
    });
</script>
    <!-- END SCRIPTS -->         
    </body>
</html>






