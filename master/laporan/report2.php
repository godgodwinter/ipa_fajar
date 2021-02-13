<?php
error_reporting(0);
?>


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
<html>
<head>
	<title>Cetak Laporan</title>
	<style type="text/css">

    /* html, body, div, span, object, iframe,
    h1, h2, h3, h4, h5, h6, p, blockquote, pre,
    abbr, address, cite, code,
    del, dfn, em, img, ins, kbd, q, samp,
    small, strong, sub, sup, var,
    b, i,
    dl, dt, dd, ol, ul, li,
    fieldset, form, label, legend,
    table, caption, tbody, tfoot, thead, tr, th, td {
        margin: 0;
        padding: 0;
        border: 0;
        outline: 0;
        font-size: 100%;
        vertical-align: baseline;
        background: transparent;
    }

    body {
        margin: 0;
        padding: 0;
        font: 12px/15px "Helvetica Neue", Arial, Helvetica, sans-serif;
        color: #555;
        background: #f5f5f5 url(bg.jpg);
    }

    a {
        color: #666;
    }

    #content {
        width: 65%;
        max-width: 690px;
        margin: 6% auto 0;
    } */

    table {
        overflow: hidden
        border: 1px solid #d3d3d3;
        background: #fefefe;
        width: 70%;
        margin: 5% auto 0;
        -moz-border-radius: 5px; /* FF1+ */
        -webkit-border-radius: 5px; /* Saf3-4 */
        border-radius: 5px;
        -moz-box-shadow: 0 0 4px rgba(0, 0, 0, 0.2);
        -webkit-box-shadow: 0 0 4px rgba(0, 0, 0, 0.2);
    }

    /* th, td {
        padding: 18px 28px 18px;
        text-align: center;
    }

    th {
        padding-top: 22px;
        text-shadow: 1px 1px 1px #fff;
        background: #e8eaeb;
    }

    td {
        border-top: 1px solid #e0e0e0;
        border-right: 1px solid #e0e0e0;
    }

    tr.odd-row td {
        background: #f6f6f6;
    }

    td.first, th.first {
        text-align: left
    }

    td.last {
        border-right: none;
    }

    /*
    Background gradients are completely unnecessary but a neat effect.
    */

    td {
        background: -moz-linear-gradient(100% 25% 90deg, #fefefe, #f9f9f9);
        background: -webkit-gradient(linear, 0% 0%, 0% 25%, from(#f9f9f9), to(#fefefe));
    }

    tr.odd-row td {
        background: -moz-linear-gradient(100% 25% 90deg, #f6f6f6, #f1f1f1);
        background: -webkit-gradient(linear, 0% 0%, 0% 25%, from(#f1f1f1), to(#f6f6f6));
    }

    th {
        background: -moz-linear-gradient(100% 20% 90deg, #e8eaeb, #ededed);
        background: -webkit-gradient(linear, 0% 0%, 0% 20%, from(#ededed), to(#e8eaeb));
    }

    tr:first-child th.first {
        -moz-border-radius-topleft: 5px;
        -webkit-border-top-left-radius: 5px; /* Saf3-4 */
    }

    tr:first-child th.last {
        -moz-border-radius-topright: 5px;
        -webkit-border-top-right-radius: 5px; /* Saf3-4 */
    }

    tr:last-child td.first {
        -moz-border-radius-bottomleft: 5px;
        -webkit-border-bottom-left-radius: 5px; /* Saf3-4 */
    }

    tr:last-child td.last {
        -moz-border-radius-bottomright: 5px;
        -webkit-border-bottom-right-radius: 5px; /* Saf3-4 */
    } */

</style>

</head>
<body>
 
	<center>
 
		<h2>DATA LAPORAN IPA</h2>
 
	</center>
 
	<?php 
	include '../../connection.php';
	?>
 
 <!-- <table cellpadding="0" cellspacing="0" border="1" class="table table-striped table-bordered" id="example" style="width: 100%"> -->
 <table border="1" style="width: 100%">
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
					<th ><?php echo round($totperbagiimp/$no*100,3).' %'; ?></th>
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
		<div class="content-box-large panel-heading" >
			<center>
					<!-- <font class="panel-title " style="color:green">Karena Rata-rata P/I adalah <?php echo round($totperbagiimp/$no,3);?> Berarti <?php echo $hslsatu ?></font> -->
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
		<!-- <div class="col-md-12 panel-info">
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
		</div> -->
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
				<div class="panel-title "><p>KESIMPULAN : Karena Rata-rata P/I adalah <?php echo round($totperbagiimp/$no,3);?> Berarti <B><?php echo $hslsatu ?></B> , Karena Persentase menunjukkan angka <?php echo $rataperbagiimp.'%' ?> Berarti <strong><?php echo $kesimpulan; ?></strong></p></div>
			</div>
			<div class="content-box-large panel-heading" style="background-color:yellow;">
			<center>
					<font class="panel-title " style="color:green"></font>
					<!-- <font class="panel-title " style="color:green">Karena Rata-rata P/I adalah <?php echo round($totperbagiimp/$no,3);?> Berarti <?php echo $kesimpulan; ?></font> -->
			</center>
		</div>
		</div>
 
	<script>
		 window.print();
	</script>
 
</body>
</html>