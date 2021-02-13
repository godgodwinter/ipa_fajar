<?php
   switch ($url[0]){
       default :
           include './master/beranda/beranda.php';
       break;
       case 'beranda':
           include './master/beranda/beranda.php';
       break;
       case 'petugas':
           include './master/petugas/petugas.php';
       break;
       case 'petugas_tambah':
           include './master/petugas/petugas_tambah.php';
       break;
       case 'petugas_simpan':
           include './master/petugas/_simpan.php';
       break;
       case 'petugas_edit':
           include './master/petugas/petugas_edit.php';
       break;
       case 'petugas_ganti':
           include './master/petugas/_edit.php';
       break;
       case 'petugas_detail':
           include './master/petugas/petugas_detail.php';
       break;
       
       case 'indikator':
           include './master/indikator/indikator.php';
       break;
       case 'indikator_tambah':
           include './master/indikator/indikator_tambah.php';
       break;
       case 'indikator_simpan':
           include './master/indikator/_simpan.php';
       break;
       case 'indikator_edit':
           include './master/indikator/indikator_edit.php';
       break;
       case 'indikator_ganti':
           include './master/indikator/_edit.php';
       break;
   
       case 'atribut':
           include './master/atribut/atribut.php';
       break;
       case 'atribut_data':
           include './master/atribut/atribut_data.php';
       break;
	    case 'atribut_hapus':
           include './master/atribut/_hapus2.php';
       break;
       case 'atribut_tambah':
           include './master/atribut/atribut_tambah.php';
       break;
       case 'atribut_simpan':
           include './master/atribut/_simpan.php';
       break;
       case 'atribut_edit':
           include './master/atribut/atribut_edit.php';
       break;
       case 'atribut_ganti':
           include './master/atribut/_edit.php';
       break;
       case 'laboratorium':
           include './master/laboratorium/laboratorium.php';
       break;
       case 'laboratorium_tambah':
           include './master/laboratorium/laboratorium_tambah.php';
       break;
       case 'lab_simpan':
           include './master/laboratorium/_simpan.php';
       break;
       case 'laboratorium_edit':
           include './master/laboratorium/laboratorium_edit.php';
       break;
       case 'lab_ganti':
           include './master/laboratorium/_edit.php';
       break;
	   case 'lab_hapus':
           include './master/laboratorium/_hapus.php';
       break;
       case 'analisis':
           include './master/analisis/analisis.php';
       break;
       case 'siswa':
           include './master/siswa/siswa.php';
       break;
	    case 'siswa_hapus2':
           include './master/siswa/_hapus2.php';
       break;
	   case 'siswa_simpan':
           include './master/siswa/_simpan.php';
       break;
	   case 'siswa_edit':
           include './master/siswa/siswa_edit.php';
       break;
	   case 'siswa_ganti':
           include './master/siswa/_edit.php';
       break;
	   case 'siswa_detail':
           include './master/siswa/_detail.php';
       break;
       case 'siswa_aktifasi':
           include './master/siswa/siswa_aktifasi.php';
       break;
	   case 'siswa_tambah':
           include './master/siswa/siswa_tambah.php';
       break;
       case 'siswa_hapus':
           include './master/siswa/_hapus.php';
       break;
	    case 'kuisioner':
           include './master/kuisioner/kuisioner.php';
       break;
       case 'kuis_kom':
          include './master/kuisioner/kuis_kom.php';
       break;
       case 'kuisioner_s':
           include './master/kuisioner/kom_s.php';
       break;
       case 'kuis_kim':
           include './master/kuisioner/kuis_kim.php';
       break;
       case 'kuis_bahasa':
           include './master/kuisioner/kuis_bahasa.php';
       break;
       case 'kuisioner_detail':
           include './master/kuisioner/kuisioner_detail.php';
       break;
	    case 'report':
           include './master/laporan/report.php';
       break;
         case 'report2':
           include './master/laporan/report2.php';
       break;
   }

?>