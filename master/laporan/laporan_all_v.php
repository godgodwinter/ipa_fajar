<script>
$(document).ready(function(){
	$('#id_bibit').change(function(){
		a=$(id_bibit).val();
		b=$(bln).val();
		window.location="show.php?v=laporan_all_v&id_bibit="+a+"&bln="+b;
	});
	$('#bln').change(function(){
		a=$(id_bibit).val();
		b=$(bln).val();
		window.location="show.php?v=laporan_all_v&id_bibit="+a+"&bln="+b;
	});
	
	
});
</script>
<div class="col-md-12 panel-info">
	<div class="content-box-header panel-heading">
		<div class="panel-title ">Filter Laporan</div>
	</div>
	<div class="content-box-large box-with-header">
		<form class="form-horizontal" role="form" method="post" action="?v=bibit_s">
		  <div class="form-group">
			<label for="nama" class="col-sm-2 control-label">Nama Bibit</label>
			<div class="col-sm-4">
				<select class="form-control" id="id_bibit" name="id_bibit" required >
					<option value=''>--Pilih--</option>
								<?php
                      $bibit = mysql_query("SELECT a.id_bibit as id_bibit, b.nama_bibit as nama_bibit FROM t_laporan a left join tm_bibit b on a.id_bibit=b.id_bibit group by a.id_bibit order by a.id_bibit asc");
                                    try{
										while($row=mysql_fetch_array($bibit)){
											echo '<option value="'.$row['id_bibit'].'"';
											if($row['id_bibit']==$_GET['id_bibit']){
												echo ' selected';
											}
											echo '>'. $row['nama_bibit'] . '</option>'."\n";
										}
                                    }
                                    catch(PDOException $e){
                                        echo 'No Results';
                                    }
                                   ?>
				</select> 
			</div>
		  </div>
		  <div class="form-group">
			<label for="nama" class="col-sm-2 control-label">Bulan</label>
			<div class="col-sm-3">
				<select class="form-control" id="bln" name="bln" required >
					<option value=''>--Pilih--</option>
								<?php
                      $bln = mysql_query("SELECT substr(tgl_prediksi,1,7) as tgl_prediksi FROM t_laporan order by tgl_prediksi desc");
                                    try{
										while($row=mysql_fetch_array($bln)){
											$tgl_prediksi1 = explode('-',$row['tgl_prediksi']);
											$bln1 = nama_bulan((int)$tgl_prediksi1[1]);
											$thn = $tgl_prediksi1[0];
											echo '<option value="'.$row['tgl_prediksi'].'"';
											if($row['tgl_prediksi']==$_GET['bln']){
												echo ' selected';
											}
											echo '>'. $bln1.' '.$thn . '</option>'."\n";
										}
                                    }
                                    catch(PDOException $e){
                                        echo 'No Results';
                                    }
                                   ?>
				</select> 
			</div>
		  </div>
		</form>
	</div>
</div>

		<div class="col-md-12">
			<div class="content-box-large panel-heading">
				<a href="show.php?v=laporan_all&id_bibit=<?php echo $_GET['id_bibit'] ?>&tgl=<?php echo $_GET['bln'] ?>" target="_blank" class="navbar-right btn btn-primary"><i class="glyphicon glyphicon-print"></i> Cetak Laporan</a>
			</div>
		</div>


<div class="col-md-12 panel-info">
	<div class="content-box-header panel-heading">
		<div class="panel-title ">Data Hasil Perhitungan Pembibitan</div>
	</div>
	<div class="content-box-large box-with-header">
		<table cellpadding="0" cellspacing="0" border="0" class="table" >
			<thead>
				<tr>
					<th>Nama Bibit</th>
					<th>Permintaaan Maks</th>
					<th>Perimintaan Min</th>
					<th>Persediaan Maks</th>
					<th>Persediaan Min</th>
					<th>Kapasitas Maks</th>
					<th>Kapasitas Efisien</th>
					<th>Total Pembibitan</th>
				</tr>
			</thead>
			<tbody>
<?php			
$id_bibit_get = $_GET['id_bibit'];
$bln_get = $_GET['bln'];
	if($bln_get!='' and $id_bibit_get!=''){
		$query=mysql_query("select * from t_laporan a left join tm_bibit b on a.id_bibit=b.id_bibit where a.id_bibit='$id_bibit_get' and substr(tgl_prediksi,1,7)='$bln_get' order by tgl_prediksi desc")or die(mysql_error());
		//echo "bulan bibit isi";
	}
	else if($bln_get!=''){
		$query=mysql_query("select * from t_laporan a left join tm_bibit b on a.id_bibit=b.id_bibit where substr(tgl_prediksi,1,7)='$bln_get' order by tgl_prediksi desc")or die(mysql_error());
		//echo "bulan isi";
	}
	else if($id_bibit_get!=''){
		$query=mysql_query("select * from t_laporan a left join tm_bibit b on a.id_bibit=b.id_bibit where a.id_bibit=$id_bibit_get order by tgl_prediksi desc")or die(mysql_error());
		//echo "bibit isi";
	}
	else{
		$query=mysql_query("select * from t_laporan a left join tm_bibit b on a.id_bibit=b.id_bibit order by tgl_prediksi desc")or die(mysql_error());
		//echo "kosong";
	}
    while($d=mysql_fetch_object($query)){
?>
				<tr>
					<td><?php echo $d->nama_bibit ?></td>
					<td><?php echo $d->max_minta ?></td>
					<td><?php echo $d->min_minta ?></td>
					<td><?php echo $d->max_sedia ?></td>
					<td><?php echo $d->min_sedia ?></td>
					<td><?php echo $d->kap_max ?></td>
					<td><?php echo $d->kap_efi ?></td>
					<td><?php echo $d->tot_pembibitan ?></td>
				</tr>
<?php
	}
?>		
			</tbody>
		</table>
		
	</div>
</div>
