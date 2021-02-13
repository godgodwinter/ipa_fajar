<style>

/* Style the tab */
.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #afff1c;
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #CFE8F5;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #59d199;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border-top: none;
}
</style>
<?php
mysql_connect("localhost", "root", "") or 
	die (mysql_error());

	mysql_select_db("fajar_ipa") or
	die (mysql_error());
//Filtering tahun mulai analisis...............................1
$bulan_mulai = date('Y');
$bulan_sampai = date('Y');
$kueri1 = mysql_query("select * from tb_kuesioner where substr(tanggal, 1, 4) BETWEEN '$bulan_mulai' AND '$bulan_sampai'");
$responden = mysql_num_rows($kueri1);
//echo "responden : ".$responden;
	
?>
		<div class="content-box-large panel-heading" style="background-color:#eee;">
			<center>
					<font class="panel-title " style="color:blue">Hasil Penilaian <strong><?php echo $responden?> Responden</strong> Terhadap Attribut Kualitas Pelayanan  </font>
			</center>
		</div>

<div class="tab" style="margin-top:-20px;">
  <button class="tablinks active" onclick="openCity(event, 'Tahap I')">Tahap I</button>
  <button class="tablinks" onclick="openCity(event, 'Tahap II & III')">Tahap II & III</button>
  <button class="tablinks" onclick="openCity(event, 'Prioritas')">Prioritas</button>
</div>
<!----------------------------------Begin Tahap I----------------------------------------------------------------------->
<div id="Tahap I" class="tabcontent " style="display:block">
<div class="col-md-12 panel-info">
	<div class="content-box-large box-with-header">
		<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
			<thead>
				<tr>
					<th>No</th>
					<th>Id Attribut</th>
					<th>P</th>
					<th>I</th>
					<th>P/I</th>
					<th>Percent</th>
				</tr>
			</thead>
			<tbody>
<?php
$no=0;
$totper = 0;
$totimp =0;
$totperbagiimp = 0;
//Menampilkan Atribut(pertanyaan)............................................2
$kueri2 = mysql_query("select * from tb_atribut");
while($data2=mysql_fetch_object($kueri2)){
	$no++;
	$id_attribut2 = $data2->kd_atribut;
//Menampilkan Jumlah P dan I sesuai dengan tahun analisis.....................3
	$kueri3 = mysql_query("SELECT a.kd_atribut,sum(a.performance) as per,sum(a.importance) as imp from tb_detail_kuesioner a left join tb_kuesioner b on a.kd_kuesioner=b.kd_kuesioner WHERE a.kd_atribut='$id_attribut2' and substr(b.tanggal,1,4) BETWEEN '$bulan_mulai' AND '$bulan_sampai'");
	while($data3=mysql_fetch_object($kueri3)){
//Perhitungan TKI dan Persentase..............................................4
		$perbagiimp[$no] = $data3->per / $data3->imp;
		$attribut[$no] = $data3->kd_atribut;
		$per[$no] = $data3->per;
		$imp[$no] = $data3->imp;
		$totper = $totper + $data3->per;
		$totimp = $totimp + $data3->imp;
		$totperbagiimp = $totperbagiimp + $perbagiimp[$no];
	$totrataper = $totrataper + ($per[$no]/$responden);
	$totrataimp = $totrataimp + ($imp[$no]/$responden);
		
?>			
				<tr>
					<td><?php echo $no ?></td>
					<td><?php echo $attribut[$no]; ?></td>
					<td><?php echo $per[$no]; ?></td>
					<td><?php echo $imp[$no]; ?></td>
					<td><?php echo round($perbagiimp[$no],3); ?></td>
					<td><?php echo round($perbagiimp[$no]*100,3).' %'; ?></td>
					<td></td>
				</tr>
<?php
	}
}
$acuanper = $totrataper / $no;
$acuanimp = $totrataimp / $no;
?>
				<tr>
					<th></th>
					<th>Total</th>
					<th><?php echo $totper; ?></th>
					<th><?php echo $totimp; ?></th>
					<th><?php echo round($totperbagiimp/$no,3); ?></th>
					<th style="background-color:red;color:#fff"><?php echo round($totperbagiimp/$no*100,3).' %'; ?></th>
					<th></th>
				</tr>
			</tbody>
		</table>
<?php
// Menampilkan Hasil Rata-rata PI sesuai dengan pembagian rata-rata menurut metode IPA............5
$rataperbagiimp = $totperbagiimp/$no;
if($rataperbagiimp>=0.81)
	$hslsatu = "Sangat Baik";
else if(rataperbagiimp>=0.66)
	$hslsatu = "Baik";
else if(rataperbagiimp>=0.51)
	$hslsatu = "Cukup Baik";
else if(rataperbagiimp>=0.35)
	$hslsatu = "Kurang Baik";
else if(rataperbagiimp<0.34)
	$hslsatu = "Sangat Tidak Baik";
?>
	<div class="col-md-12">
		<div class="content-box-large panel-heading" style="background-color:yellow;">
			<center>
					<font class="panel-title " style="color:green">Karena Rata-rata P/I adalah <?php echo round($totperbagiimp/$no,3);?> Berarti <?php echo $hslsatu ?></font>
					<!-- <font class="panel-title " style="color:green">Karena Rata-rata P/I adalah <?php echo round($totperbagiimp/$no,3);?> Berarti <?php echo $hslsatu ?></font> -->
			</center>
		</div>
	</div>
	</div>
</div>
<!------------------------------------------------>
<?php
if($rataperbagiimp>1){$rataperbagiimp = 1;}
else{$rataperbagiimp=$rataperbagiimp;}

$rataperbagiimp = $rataperbagiimp*100;
?>
		<div class="col-md-12 panel-info">
			<div class="content-box-header panel-heading">
				<div class="panel-title ">Prosentase Tingkat Kualitas Pelayanan</div>
			</div>
			<div class="content-box-large box-with-header">
				<table cellpadding="0" cellspacing="0" border="0" class="table table-bordered">
						<tr>
							<td rowspan="5" width="50%" style="vertical-align:middle;font-size:+100px;" align="center"><strong><?php echo $rataperbagiimp.'%' ?></strong></td>
							<td width="50%" style="background-color:green;color:#fff;"><strong>81-100 (SANGAT BAIK)</strong></td>
						</tr>
						<tr>
							<td style="background-color:blue;color:#fff;"><strong>66-80 (BAIK)</strong></td>
						</tr>
						<tr>
							<td style="background-color:orange;color:#fff;"><strong>51-56 (CUKUP)</strong></td>
						</tr>
						<tr>
							<td style="background-color:red;color:#fff;"><strong>35-50 (KURANG BAIK)</strong></td>
						</tr>
						<tr>
							<td style="background-color:#000;color:#fff;"><strong>0-34 (TIDAK BAIK)</strong></td>
						</tr>
				</table>
			</div>
		</div>
<?php
//kesimpulan
$kesimpulan='';
$hasilakhir=$rataperbagiimp;
if($hasilakhir<70){
	$kesimpulan='Perlu di tingkatkan';
}else{
	$kesimpulan='Perlu di Pertahankan';
}
?>
		<div class="col-md-12">
		<div class="col-md-12 panel-info">
			<div class="content-box-header panel-heading">
				<div class="panel-title "><H1>KESIMPULAN</H1></div>
			</div>
			<div class="content-box-large panel-heading" style="background-color:yellow;">
			<center>
					<font class="panel-title " style="color:green">Karena Persentase menunjukkan angka <?php echo $rataperbagiimp.'%' ?> Berarti <strong><?php echo $kesimpulan; ?></strong></font>
					<!-- <font class="panel-title " style="color:green">Karena Rata-rata P/I adalah <?php echo round($totperbagiimp/$no,3);?> Berarti <?php echo $kesimpulan; ?></font> -->
			</center>
		</div>
		</div>
		
	</div>

</div>
<!----------------------------------End Tahap I----------------------------------------------------------------------->
<!----------------------------------Begin Tahap II----------------------------------------------------------------------->
<div id="Tahap II & III" class="tabcontent">
<div class="col-md-12 panel-info">
	<div class="content-box-large box-with-header">
		<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
			<thead>
				<tr>
					<th>No</th>
					<th>Id Attribut</th>
					<th>P</th>
					<th>Rata-rata P</th>
					<th>I</th>
					<th>Rata-rata I</th>
					<th>Kuadran</th>
				</tr>
			</thead>
			<tbody>
<?php
$totrataper = 0;
$totrataimp = 0;
//Penentuan Kuadran Pada masing-masing atribut(pertanyaan)
$ku1 = 0;
$ku2 = 0;
$ku3 = 0;
$ku4 = 0;
for($xx=1;$xx<=$no;$xx++){
	$totrataper = $totrataper + ($per[$xx]/$responden);
	$totrataimp = $totrataimp + ($imp[$xx]/$responden);
	$rataper = 0;
	$rataimp = 0;
	$rataper = $per[$xx]/$responden;
	$rataimp = $imp[$xx]/$responden;
	if(($rataimp > $acuanimp) && ($rataper < $acuanper)){
		$kuadran = "Kuadran I";
		$ku[1][$ku1] = $attribut[$xx];
		$ku1++;
	}
	if(($rataimp > $acuanimp) && ($rataper > $acuanper)){
		$kuadran = "Kuadran II";
		$ku[2][$ku2] = $attribut[$xx];
		$ku2++;
	}
	if(($rataimp < $acuanimp) && ($rataper < $acuanper)){
		$kuadran = "Kuadran III";
		$ku[3][$ku3] = $attribut[$xx];
		$ku3++;
	}
	if(($rataimp < $acuanimp) && ($rataper > $acuanper)){
		$kuadran = "Kuadran IV";
		$ku[4][$ku4] = $attribut[$xx];
		$ku4++;
	}
?>			
				<tr>
					<td><?php echo $xx ?></td>
					<td><?php echo $attribut[$xx]; ?></td>
					<td><?php echo $per[$xx]; ?></td>
					<td><?php echo round($rataper,3).' : '.round($acuanper,3); ?></td>
					<td><?php echo $imp[$xx]; ?></td>
					<td><?php echo round($rataimp,3).' : '.round($acuanimp,3); ?></td>
					<td><?php echo $kuadran; ?></td>
				</tr>
<?php
}
?>
				<tr>
					<th></th>
					<th>Total</th>
					<th><?php echo $totper; ?></th>
					<th style="background-color:red;color:#fff"><?php echo round($totrataper/$no,3); ?></th>
					<th><?php echo $totimp; ?></th>
					<th style="background-color:red;color:#fff"><?php echo round($totrataimp/$no,3); ?></th>
					<th></th>
				</tr>
			</tbody>
		</table>
		<table cellpadding="0" cellspacing="0" border="0" class="table table-bordered">
			<tr>
				<td>Untuk Acuan <strong>Performance</strong></td>
				<td>:</td>
				<td><?php echo $totrataper/$no; ?></td>
				<th style="background-color:red;color:#fff"><?php echo round($totrataper/$no,3); ?></th>
				<td width="50%" style="border:1px solid #fff"></td>
			</tr>
			<tr>
				<td>Untuk Acuan <strong>Importance</strong></td>
				<td>:</td>
				<td><?php echo $totrataimp/$no; ?></td>
				<th style="background-color:red;color:#fff"><?php echo round($totrataimp/$no,3); ?></th>
				<td width="50%" style="border:1px solid #fff"></td>
			</tr>
		</table>
	<div class="col-md-12">
		<div class="content-box-large panel-heading" style="background-color:yellow;">
			<center>
					<font class="panel-title " style="color:green">Penentuan Kuadran <br>
						Kuadran I (Prioritas Utama) : Jika Rata-rata I > <?php echo round($acuanimp,3); ?> dan P < <?php echo round($acuanper,3); ?> <br>
						Kuadran II (Prioritas Prestasi) : Jika Rata-rata I > <?php echo round($acuanimp,3); ?> dan P > <?php echo round($acuanper,3); ?> <br>
						Kuadran III (Prioritas Rendah) : Jika Rata-rata I < <?php echo round($acuanimp,3); ?> dan P < <?php echo round($acuanper,3); ?> <br>
						Kuadran IV (Prioritas Rendah) : Jika Rata-rata I < <?php echo round($acuanimp,3); ?> dan P > <?php echo round($acuanper,3); ?> <br>	
					</font>
			</center>
		</div>
	</div>
	</div>
</div>
</div>
<!----------------------------------End Tahap II----------------------------------------------------------------------->
<!----------------------------------Begin Prioritas----------------------------------------------------------------------->
<div id="Prioritas" class="tabcontent">
<div class="col-md-12 panel-info">
	<div class="content-box-large box-with-header">
	<a href="./master/laporan/report2.php" target="_blank" class="btn btn-info btn-lg navbar-right"><span class="glyphicon glyphicon-print"></span> Cetak</a><br>
<?php
mysql_query("delete from temp_laporan");
for($yy=4;$yy>=1;$yy--){
	if($yy==1){$zz=$ku1;$kuadran_="Kuadran I";$prio="Prioritas Utama";}
	else if($yy==2){$zz=$ku2;$kuadran_="Kuadran II";$prio="Prioritas Prestasi";}
	else if($yy==3){$zz=$ku3;$kuadran_="Kuadran III";$prio="Prioritas Rendah";}
	else if($yy==4){$zz=$ku4;$kuadran_="Kuadran IV";$prio="Prioritas Rendah";}

	echo $kuadran_.' <strong>('.$prio.')</strong>';
?>		
		
		<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
			<thead>
				<tr>
					<th>No</th>
					<th>Pertanyaan</th>
				</tr>
			</thead>
			<tbody>
	<?php
	for($xx=0;$xx<$zz;$xx++){
		$kueri4 = mysql_query("select * from tb_atribut where kd_atribut=".$ku[$yy][$xx]."");
		$data4 = mysql_fetch_object($kueri4);
		$pertanyaan4 = $data4->pertanyaan;
		$id_attribut4 = $data4->kd_atribut;
		mysql_query("insert into temp_laporan values ('$id_attribut4','$yy')");
	?>			
					<tr>
						<td><?php echo $urt=$xx+1; ?></td>
						<td><?php echo $pertanyaan4; ?></td>
					</tr>
	<?php
	}
	?>
			</tbody>
		</table>
<?php
}
?>
	</div>
</div>
</div>
<!----------------------------------End Tahap II----------------------------------------------------------------------->

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
