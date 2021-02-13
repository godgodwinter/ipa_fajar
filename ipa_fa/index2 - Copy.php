<?php
session_start();
function base() {
    echo str_replace("index.php", "", $_SERVER['PHP_SELF']);
}

$link = "http://localhost/ipa_fajar/";
$url = explode("/", $_SERVER["QUERY_STRING"]);

if (isset($_SESSION['user']) && $_SESSION['user'] != '') {
    ?>
    <script>
        window.location.href = "utama.php";
    </script>
    <?php
} else {
}
    ?>
    <html>
        <head>
			<script language='JavaScript'>
			var txt=" - SISFO PENINGKATAN KUALITAS LABORATORIUM SMAN BULULAWANG";
			var speed=200;
			var refresh=null;
			function action() { document.title=txt;
			txt=txt.substring(1,txt.length)+txt.charAt(0);
			refresh=setTimeout("action()",speed);}action();
			</script>
            <meta charset="UTF-8">
            
            <link rel="stylesheet" href="<?php echo $link ?>boostrap4/css/bootstrap.css">
            <link rel="stylesheet" href="<?php echo $link ?>boostrap4/style.css">
           <link rel="stylesheet" href=<?php echo $link ?>plugin/css_datatables/dataTables.bootstrap4.min.css">
            <link rel="stylesheet" href="<?php echo $link ?>plugin/css_datatables/responsive.bootstrap4.min.css">
            <link rel="stylesheet" href="<?php echo $link ?>plugin/sweetalert2/dist/sweetalert2.min.css">
            <link rel="stylesheet" href="<?php echo $link ?>font-awesome-4.7.0/css/font-awesome.css">

            <script src="<?php echo $link ?>boostrap4/jquery-1.11.3.min.js"></script>
            <script src="<?php echo $link ?>boostrap4/js/bootstrap.min.js"></script>
            <script src="<?php echo $link ?>plugin/js_datatables/jquery.dataTables.min.js"></script>
            <script src="<?php echo $link ?>plugin/js_datatables/dataTables.bootstrap4.min.js"></script>
            <script src="<?php echo $link ?>plugin/js_datatables/dataTables.responsive.min.js"></script>
            <script src="<?php echo $link ?>plugin/js_datatables/responsive.bootstrap4.min.js"></script>
            <script src="<?php echo $link ?>plugin/sweetalert2/dist/sweetalert2.min.js"></script> 
            <script src="<?php echo $link ?>plugin/bootstrap-validator/dist/validator.js"></script>
        </head>
        <body>
            <div class="col-md-12" style="height:2px;background-color: #e9e9e9;"></div>
            <div class="sticky-top" style="background:#fff;">
                <div class="container">
                    <nav class="navbar  navbar-toggleable-md navbar-light">
					<ul class="navbar-nav mr-auto">
                        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <a class="navbar-brand" href="" style="color: #5b5b5b;">SISFO PENINGKATAN KUALITAS LABORATORIUM SMAN BULULAWANG</a>
                    </ul>
					<ul class="navbar-nav">                        
                            <li class="nav-item dropdown">
                             <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							 
                           <button class="btn btn-info my-2 my-sm-0" type="submit">Log In</button>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">                            
							<a class="dropdown-item" href="<?php base() ?>login.php">Siswa</a>                                                                   
							<a class="dropdown-item" href="<?php base() ?>login_petugas.php">Petugas</a>                                                                   
                        </div>
						</li>
						</ul>
                      
                    </nav>
                </div>
            </div>
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
                                        <img class="d-block img-fluid" src="gambar_crousel/depan1.jpg" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block img-fluid" src="gambar_crousel/depan2.jpg" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block img-fluid" src="gambar_crousel/depan3.jpg" alt="Third slide">
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
            <div class="col-md-12" style="height:300px;">
                <div class="container">

                </div>
            </div>
        </body>
    </html>

