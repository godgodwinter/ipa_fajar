<?php
require "fpdf/fpdf.php";
date_default_timezone_set("Asia/Jakarta");
error_reporting(0);

	mysql_connect("localhost", "root", "") or 
	die (mysql_error());

	mysql_select_db("fajar_ipa") or
	die (mysql_error());

//ceklogin();
//$username_user = $_SESSION["admin"]['username'];
//$nama_user = $_SESSION["admin"]['nama_lengkap'];
//$hak_akses_user = $_SESSION["admin"]['hak_akses'];

$bln_m = $_GET['tahun'];
$bln_s = $_GET['tahun'];



	$hri = date('d');
	$bln = date('m');
	$bln1 = date('m');
	$bln=$bln;
	//$bln=nama_bulan($bln);
	$tahun = $_GET['tahun'];
				
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
$pdf->CELL(25,1,'',0,0,'L');
$pdf->CELL(250,1,'Persentase Hasil Penilaian '.$responden.' Responden Terhadap Attribut Kualitas Pelayanan Tahun '.$bln_m.'',0,0,'C');
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
	$pdf->CELL(30,8,'ID Attribut',1,0,'C',1);
	$pdf->CELL(40,8,'P',1,0,'C',1);
	$pdf->CELL(40,8,'I',1,0,'C',1);
	$pdf->CELL(40,8,'P / I',1,0,'C',1);
	$pdf->CELL(120,8,'Percent',1,0,'C',1);
	$pdf->Ln();

	$pdf->SetFont('Arial','',10);
	
//Filtering tahun mulai analisis...............................1
$bulan_mulai = $_GET['tahun'];
$bulan_sampai = $_GET['tahun'];
$kueri1 = mysql_query("select * from tb_kuesioner where substr(tanggal, 1, 4) BETWEEN '$bulan_mulai' AND '$bulan_sampai'");
$responden = mysql_num_rows($kueri1);
//echo "responden : ".$responden;
	$no=0;
$totper = 0;
$totimp =0;
$totperbagiimp = 0;
	$query=mysql_query("select * from tb_atribut")or die(mysql_error());
	while($data2=mysql_fetch_object($query)){
			$no++;
	$id_attribut2 = $data2->kd_atribut;
		//Menampilkan Jumlah P dan I sesuai dengan tahun analisis.....................3
	$kueri3 = mysql_query("SELECT a.kd_atribut,sum(a.performance) as per,sum(a.importance) as 
	imp from tb_detail_kuesioner a left join tb_kuesioner b on a.kd_kuesioner=b.kd_kuesioner 
	WHERE a.kd_atribut='$id_attribut2' and substr(b.tanggal,1,4) BETWEEN '$bulan_mulai' AND '$bulan_sampai'");
	while($data3=mysql_fetch_object($kueri3)){
		$perbagiimp[$no] = $data3->per / $data3->imp;
		$per[$no] = $data3->per;
		$imp[$no] = $data3->imp;
		$totper = $totper + $data3->per;
		$totimp = $totimp + $data3->imp;
		$totperbagiimp = $totperbagiimp + $perbagiimp[$no];
		$pdf->CELL(8,6,$no,1,0,'C');
		//$per=$data2->pertanyaan;
		$pdf->CELL(30,6,$data2->kd_atribut,1,0,'C');
		$pdf->CELL(40,6, $per[$no],1,0,'C');
		$pdf->CELL(40,6,$imp[$no],1,0,'C');
		$pdf->CELL(40,6,round($perbagiimp[$no],3),1,0,'C');
		$pdf->CELL(120,6,round($perbagiimp[$no]*100,3).' %',1,0,'C');
		//$pdf->CELL(120,6,$per,1,0,'L');
		$pdf->Ln();
	}
	}
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
	$hslsatu = "Tidak Baik";
	if($rataperbagiimp>1){$rataperbagiimp = 1;}
else{$rataperbagiimp=$rataperbagiimp;}

$rataperbagiimp = round($rataperbagiimp*100,3);
	$pdf->CELL(8,8,'-',1,0,'C',1);
	$pdf->CELL(30,8,'Total',1,0,'C',1);
	$pdf->CELL(40,8,$totper,1,0,'C',1);
	$pdf->CELL(40,8,$totimp,1,0,'C',1);
	$pdf->CELL(40,8,round($totperbagiimp/$no,3),1,0,'C',1);
	$pdf->CELL(120,8,$rataperbagiimp.' %',1,0,'C',1);
	$pdf->Ln();
	$pdf->Ln();

$pdf->SetFont('Arial','B',12);
$pdf->CELL(25,5,'',0,0,'C');
$pdf->CELL(1,5,'Persentase Tingkat Kualitas Pelayanan :'.$rataperbagiimp.' % atau '.$hslsatu,0,2,'L');
$pdf->CELL(1,5,'Keterangan :',0,2,'L');
$pdf->SetFont('Arial','',10);
$pdf->CELL(1,5,'81-100 (SANGAT BAIK)',0,2,'L');
$pdf->CELL(5,5,'66-80 (BAIK) ',0,2,'L');
$pdf->CELL(5,5,'51-56 (CUKUP)',0,2,'L');
$pdf->CELL(5,5,'35-50 (KURANG BAIK) ',0,2,'L');
$pdf->CELL(5,5,'0-34 (TIDAK BAIK) ',0,2,'L');
//tanda tangan
//$kueri3 = mysql_query("select * from tm_user a left join tm_hakakses b on a.hak_akses=b.id_hakakses where a.hak_akses='2'");
//$data3 = mysql_fetch_object($kueri3);


$pdf->Output('doc.pdf','I');

?> 
