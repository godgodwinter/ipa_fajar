<?php
mysql_connect("localhost","root","");
	mysql_select_db("fajar_ipa");


$thnini = date('Y');
$kueri1 = mysql_query("select * from tb_kuesioner where nis='$nis_siswa' and substr(tanggal, 1, 4)='$thnini'");
$data1 = mysql_num_rows($kueri1);
$m=$_GET['m'];
if($data1>0 or $m!=''){
?>
	<div class="col-md-12">
		<div class="content-box-large panel-heading" style="background-color:#CAE6F4;">
			<center>
					<font class="panel-title " style="color:blue"><strong>Terimakasih!</strong> Anda telah mengisi kuisioner :)  </font>
			</center>
		</div>
	</div>
<?php
}
else{
?>

<div class="col-md-12 panel-info">
	<div class="content-box-header panel-heading">
		<div class="panel-title ">Isi Kuisioner</div>
	</div>
	<div class="content-box-large box-with-header">
	<form role="form" method="post" action="?v=kuisioner_s">
	<!------------------------------------------------------------------------------------------------>
	<?php
	$ii = 0;
	$aa = 1;
	$kueri = mysql_query("select * from tb_atribut")or die(mysql_error());
	while($data=mysql_fetch_object($kueri)){
	?>
		<div class="row">
		  <div class="form-group">
			<label class="col-sm-1 control-label"><?php echo $aa+$ii; ?>.</label>
			<label  style="margin-left:-55px" class="col-sm-11 control-label"><?php echo $data->pertanyaan ?></label>
			<input type="hidden" name="id_attribut<?php echo $ii ?>" class="form-control" value="<?php echo $data->kd_atribut ?>" >
		  </div>
		  <div class="form-group">
			<div class="col-sm-1"></div>
			<div class="col-sm-5">
			<font style="margin-left:-40px">Penilaian Kinerja (Performance) </font><br>
			  <input required type="radio" name="p<?php echo $ii ?>" value="1" id="p1<?php echo $ii ?>"> <label for="p1<?php echo $ii ?>">Sangat Tidak Penting </label><br>
			  <input required type="radio" name="p<?php echo $ii ?>" value="2" id="p2<?php echo $ii ?>"> <label for="p2<?php echo $ii ?>">Tidak Penting </label><br>
			  <input required type="radio" name="p<?php echo $ii ?>" value="3" id="p3<?php echo $ii ?>"> <label for="p3<?php echo $ii ?>">Cukup Penting </label><br>
			  <input required type="radio" name="p<?php echo $ii ?>" value="4" id="p4<?php echo $ii ?>"> <label for="p4<?php echo $ii ?>">Penting </label><br>
			  <input required type="radio" name="p<?php echo $ii ?>" value="5" id="p5<?php echo $ii ?>"> <label for="p5<?php echo $ii ?>">Sangat Penting </label><br>
			</div>
			<div class="col-sm-1"></div>
			<div class="col-sm-5">
			<font style="margin-left:-40px">Penilaian Kepentingan (Importance) </font><br>
			  <input required type="radio" name="i<?php echo $ii ?>" value="1" id="i1<?php echo $ii ?>"> <label for="i1<?php echo $ii ?>">Sangat Tidak Baik </label><br>
			  <input required type="radio" name="i<?php echo $ii ?>" value="2" id="i2<?php echo $ii ?>"> <label for="i2<?php echo $ii ?>">Kurang Baik </label><br>
			  <input required type="radio" name="i<?php echo $ii ?>" value="3" id="i3<?php echo $ii ?>"> <label for="i3<?php echo $ii ?>">Cukup Baik </label><br>
			  <input required type="radio" name="i<?php echo $ii ?>" value="4" id="i4<?php echo $ii ?>"> <label for="i4<?php echo $ii ?>">Baik </label><br>
			  <input required type="radio" name="i<?php echo $ii ?>" value="5" id="i5<?php echo $ii ?>"> <label for="i5<?php echo $ii ?>">Sangat Baik </label><br><br>
			</div>
		  </div>
		  
		</div>
	<?php
	$ii++;
	}
	?>
	<!------------------------------------------------------------------------------------------------>
		<hr>
		<div class="row">
		  <div class="form-group">
			<label style="margin-left:50px" class="col-sm-2 control-label">Saran</label>
			<div class="col-sm-6" style="margin-left:-50px">
			  <textarea class="form-control" name="saran" placeholder="Saran" rows="3" required></textarea>
			  <input type="hidden" name="batas" class="form-control" value="<?php echo $ii ?>" readonly>
			</div>
		  </div>
		</div>
		<div class="row" style="margin-top:10px">
		  <div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
			  <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-save"></i> Simpan</button>
			</div>
		  </div>
		</div>
	</form>
	</div>
</div>

<?php
}
?>