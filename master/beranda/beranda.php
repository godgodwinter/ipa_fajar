<?php
mysql_connect("localhost", "root", "") or 
	die (mysql_error());

	mysql_select_db("fajar_ipa") or
	die (mysql_error());
//Filtering tahun mulai analisis...............................1
$bulan_mulai = date('Y');
$bulan_sampai = date('Y');
$kueri1 = mysql_query("select * from laporan");
$kueri2 = mysql_query("select * from laporan");
// $responden = mysql_num_rows($kueri1);
//echo "responden : ".$responden;
// while($data3=mysql_fetch_object($kueri1)){
//     //Perhitungan TKI dan Persentase..............................................4
//             $tahun = $data3->tahun;
//             $poi = $data3->poi;
//             $persentase = $data3->persentase;
//             echo $poi;
// }
	?>
    
<div class="col-md-12" style="margin-top:30px;">
    
</div>
<div class="container">

<canvas id="myChart" width="400" height="400"></canvas>
</div>
<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [
            <?php
            while($data3=mysql_fetch_object($kueri1)){
    //Perhitungan TKI dan Persentase..............................................4
            $tahun = $data3->tahun;
            $poi = $data3->poi;
            $persentase = $data3->persentase;
            echo "'$tahun',";
}
?>
            ],
        datasets: [{
            label: '# of Votes',
            data: [
                <?php
            while($data3=mysql_fetch_object($kueri2)){
    //Perhitungan TKI dan Persentase..............................................4
            $tahun = $data3->tahun;
            $poi = $data3->poi;
            $persentase = $data3->persentase;
            echo "'$poi',";
}
?>
],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>
<br>


<div class="col-md-12" style="background: #e9e9e9;">
                <div class="container" style="padding:40px 0px;">
                    <div class="row">
                        <div class="col-md-8">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="border:3px solid white;">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                </ol>
                                <div class="carousel-inner" role="listbox">
								 <div class="carousel-item active">
                                        <img class="d-block img-fluid" src="./gambar_crousel/depan1.jpg" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block img-fluid" src="./gambar_crousel/depan2.jpg" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block img-fluid" src="./gambar_crousel/depan3.jpg" alt="Third slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <h5 class="display-3" style="font-size:45px;">Selamat Datang</h5>
                            
                            <p align="Justified">
							SMAN 1 BULULAWANG adalah sekolah NEGERI yang beralamat di JL. RAYA BULULAWANG kelurahan
							Bululawang kecamatan Bululawang kabupaten Malang provinsi Prov. Jawa Timur. 
							Jenjang sekolah SMAN 1 BULULAWANG adalah SMA dengan waktu penyelenggaraan Pagi/6 hari.
							Alamat : JL. RAYA BULULAWANG, RT/RW 3/7, Dsn. -, Ds./Kel Bululawang, Kec. Bululawang, Kab. Malang, Prov. Jawa Timur
								Kode Pos : 65171
								Telepon : 0341804010
								Fax : -
								Email : smanbululawanginfo@yahoo.com
								Website : http://sman1bululawang.sch.id


							</p>
                           
                        </div>
                    </div>
                </div>
            </div>
			</br>
			
			
