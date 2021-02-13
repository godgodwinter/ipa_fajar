<?php
require "fpdf/fpdf.php";
date_default_timezone_set("Asia/Jakarta");

		mysql_connect("localhost", "root", "") or 
	die (mysql_error());

	mysql_select_db("fajar_ipa") or
	die (mysql_error());

//ceklogin();
//$username_user = $_SESSION["admin"]['username'];
//$nama_user = $_SESSION["admin"]['nama_lengkap'];
//$hak_akses_user = $_SESSION["admin"]['hak_akses'];

$bln_m = date ('Y');
$bln_s = date ('Y');



	$hri = date('d');
	$bln = date('m');
	$bln1 = date('m');
	$bln=$bln;
	//$bln=nama_bulan($bln);
	$tahun = date('Y');
				
class PDF extends FPDF{
	function Header(){
	//	$this->Image('kanjuruhan.png',30,5,20);
$this->SetFont('Arial','B',14);
$this->CELL(20,5,'',0,0,'L');
$this->CELL(250,5,'LABORATORIUM SMK NEGERI 1 BULULAWANG',0,2,'C');
$this->SetFont('Arial','B',10);
$this->CELL(250,7,'" Metode Important Performance Analisis "',0,2,'C');
$this->SetFont('Arial','I',9);
$this->CELL(250,5,"JL. RAYA BULULAWANG, RT/RW 3/7, Dsn. -, Ds./Kel Bululawang, Kec. Bululawang, Kab. Malang, Prov. Jawa Timur Kode Pos : 65171 ",0,1,'C');
$this->Line(11,28,290,28);
$this->Line(11,29,290,29);
$this->Ln(10);

//$this->Image('../../gambar/logo.png',20,5,37,22);


		}
}
$pdf = new PDF('L','mm',array(297,210));
$pdf->SetMargins(10,10,10);
$pdf->SetAutoPageBreak(true,10);
$pdf->Open();
$pdf->AddPage();

//Identitas Raport
$kueri1 = mysql_query("select * from tb_kuesioner where substr(tanggal, 1, 4) BETWEEN '$bln_m' AND '$bln_s'");
$responden = mysql_num_rows($kueri1);
$pdf->SetFont('Arial','B',14);
$pdf->CELL(270,1,'Hasil Penilaian '.$responden.' Responden Terhadap Attribut Kualitas Pelayanan',0,0,'C');
$pdf->Ln(5);

//full kanan = 195
//header tabel
	
	$pdf->SetFont('Arial','B',10);
	$pdf->CELL(4,8,'',0,0,'C');
	//$pdf->CELL(191,8,$kuadran_.' ('.$prio.')',0,0,'L');
	$pdf->Ln(7);
	$pdf->SetFillColor(166, 237, 219);
	$pdf->SetFont('Arial','',10);
	$pdf->CELL(8,8,'No',1,0,'C',1);
	$pdf->CELL(30,8,'Kuadran',1,0,'C',1);
	$pdf->CELL(240,8,'Pertanyaan',1,0,'C',1);
	$pdf->Ln();

	$pdf->SetFont('Arial','',10);
	$no=0;
	$query=mysql_query("select * from temp_laporan a left join tb_atribut b on a.kd_atribut=b.kd_atribut ")or die(mysql_error());
	while($d=mysql_fetch_object($query)){
		$no++;
		$pdf->CELL(8,6,$no,1,0,'C');
		$per=$d->pertanyaan;
		$pdf->CELL(30,6,$d->prioritas,1,0,'C');
		$pdf->CELL(240,6,$per,1,0,'L');
		$pdf->Ln();
	}
	$pdf->Ln();

$pdf->SetFont('Arial','B',12);
$pdf->CELL(25,5,'',0,0,'C');
$pdf->CELL(1,5,'Keterangan :',0,2,'L');
$pdf->SetFont('Arial','',10);
$pdf->CELL(1,5,'Kuadran I (Prioritas Utama)',0,2,'L');
$pdf->CELL(5,5,'Kuadran II (Prioritas Prestasi) ',0,2,'L');
$pdf->CELL(5,5,'Kuadran III (Prioritas Rendah)',0,2,'L');
$pdf->CELL(5,5,'Kuadran IV (Prioritas Rendah) ',0,2,'L');
//tanda tangan
//$kueri3 = mysql_query("select * from tm_user a left join tm_hakakses b on a.hak_akses=b.id_hakakses where a.hak_akses='2'");
//$data3 = mysql_fetch_object($kueri3);
$pdf->Ln(20);
$pdf->SetFont('Arial','',12);
$pdf->CELL(120,5,'',0,0,'C');
$pdf->CELL(250,5,'Mojokerto, '.$hri."-".$bln."-".$tahun,0,2,'C');
$pdf->CELL(250,5,'Kepala Sekolah',0,2,'C');
$pdf->Ln(15);
$pdf->CELL(120,5,'',0,0,'C');
$pdf->SetFont('Arial','B',12);
$pdf->CELL(250,5,'Hartono, S.Pd, M.Pd',0,2,'C');


$pdf->Output('doc.pdf','I');

?> 
