<?php
require "fpdf/fpdf.php";
date_default_timezone_set("Asia/Jakarta");

ceklogin();
$username_user = $_SESSION["admin"]['username'];
$nama_user = $_SESSION["admin"]['nama_lengkap'];
$hak_akses_user = $_SESSION["admin"]['hak_akses'];


if($hak_akses_user=='1'){
$hak_akses_user="Administrator";
}
else if($hak_akses_user=='2'){
$hak_akses_user="Kepala Codido Agro";
}
else{
$hak_akses_user="Pegawai";
}



	$hri = date('d');
	$bln = date('m');
	$bln1 = date('m');
	$bln=(int)$bln;
	$bln=nama_bulan($bln);
	$tahun = date('Y');
				
class PDF extends FPDF{
	function Header(){
	//	$this->Image('kanjuruhan.png',30,5,20);
//Header Kertas
$this->SetFont('Arial','B',14);
$this->CELL(20,5,'',0,0,'L');
$this->CELL(170,5,'CONDIDO AGRO',0,2,'C');
$this->SetFont('Arial','B',10);
$this->CELL(170,7,'" Pembibitan Bunga Krisan"',0,2,'C');
$this->SetFont('Arial','I',9);
$this->CELL(170,5,"Nongkojajar, Tutur, Jawa Timur",0,1,'C');
$this->Line(11,28,204,28);
$this->Line(11,29,204,29);
$this->Ln(10);
$this->Image('images/logo2.png',50,5,30,22);
		}
}
$pdf = new PDF('P','mm',array(216,330));
$pdf->SetMargins(10,10,10);
$pdf->SetAutoPageBreak(true,10);
$pdf->Open();
$pdf->AddPage();

//Identitas Raport
$pdf->SetFont('Arial','B',11);
$pdf->CELL(195,5,'Laporan Transaksi Persediaan dan Permintaan Bibit',0,0,'C');
$pdf->Ln(8);
/*
					<th>Nama Bibit</th>
					<th>Permintaaan Maks</th>
					<th>Perimintaan Min</th>
					<th>Persediaan Maks</th>
					<th>Persediaan Min</th>
					<th>Kapasitas Maks</th>
					<th>Kapasitas Efisien</th>
					<th>Total Pembibitan</th>
*/
//full kanan = 195
//header tabel
$pdf->SetFillColor(166, 237, 219);
$pdf->SetFont('Arial','',10);
$pdf->CELL(8,8,'No',1,0,'C',1);
$pdf->CELL(47,8,'Nama Bibit',1,0,'C',1);
$pdf->CELL(20,8,'Max Minta',1,0,'C',1);
$pdf->CELL(20,8,'Min Minta',1,0,'C',1);
$pdf->CELL(20,8,'Max Sedia',1,0,'C',1);
$pdf->CELL(20,8,'Min Sedia',1,0,'C',1);
$pdf->CELL(20,8,'Kap Max',1,0,'C',1);
$pdf->CELL(20,8,'Kap Efi',1,0,'C',1);
$pdf->CELL(20,8,'Tot Bibit',1,0,'C',1);
$pdf->Ln();

$pdf->SetFont('Arial','',10);
$no=0;
	
$id_bibit_get = $_GET['id_bibit'];
$bln_get = $_GET['tgl'];
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
	$no++;
	$pdf->CELL(8,6,$no,1,0,'C');
	$pdf->CELL(47,6,$d->nama_bibit,1,0,'L');
	$pdf->CELL(20,6,$d->max_minta,1,0,'C');
	$pdf->CELL(20,6,$d->min_minta,1,0,'C');
	$pdf->CELL(20,6,$d->max_sedia,1,0,'C');
	$pdf->CELL(20,6,$d->min_sedia,1,0,'C');
	$pdf->CELL(20,6,$d->kap_max,1,0,'C');
	$pdf->CELL(20,6,$d->kap_efi,1,0,'C');
	$pdf->CELL(20,6,$d->tot_pembibitan,1,0,'C');
	$pdf->Ln();
	$total_bibit = $d->tot_pembibitan;
}

//tanda tangan
$pdf->Ln(10);
$pdf->SetFont('Arial','',10);
$pdf->CELL(120,5,'',0,0,'C');
$pdf->CELL(58,5,'Pandaan, '.$hri." ".$bln." ".$tahun,0,2,'C');
$pdf->CELL(58,5,''.$hak_akses_user,0,2,'C');
$pdf->Ln(15);
$pdf->CELL(120,5,'',0,0,'C');
$pdf->CELL(58,5,''.$nama_user,0,2,'C');


$pdf->Output('doc.pdf','I');

?> 
