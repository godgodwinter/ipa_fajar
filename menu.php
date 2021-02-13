<?php

if ($_SESSION["status"] == "A") {
    $petugas="none";
    $mastering="none";
    $analisis="block";
	$kuisioner="none";
} else if ($_SESSION["status"] == "S") {
    $mastering="block";
    $analisis="block";
    $petugas="block";
	$kuisioner="none";
} else {
    $mastering="none";
    $kuisioner="block";
	$analisis="none";
    $petugas="none";
}
?>


<div class="col-md-12 bg-inverse fixed-top">
    <div class="container">
        <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="">Sistem Kepuasan Pengguna Laboratorium</a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php base() ?>beranda">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li style="display:<?php echo $mastering ?>" class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Mastering
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a style="display:<?php echo $petugas ?>" class="dropdown-item" href="<?php base() ?>petugas">Petugas</a>
							<a class="dropdown-item" href="<?php base() ?>siswa">Siswa</a>
							<a class="dropdown-item" href="<?php base() ?>laboratorium">Laboratorium</a>
                            <a class="dropdown-item" href="<?php base() ?>indikator">Indikator</a>
                            <a class="dropdown-item" href="<?php base() ?>atribut">Atribut</a>                                                     
                                                                                
                        </div>
                    </li>
                    <li style="display:<?php echo $analisis ?>" class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Analisis
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="<?php base() ?>analisis">Analisis</a>
                        </div>
                    </li>
					<li style="display:<?php echo $kuisioner ?>" class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Kuisioner
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="<?php base() ?>kuis_kom">Kuisioner</a>
                            <!--<a class="dropdown-item" href="<?php base() ?>kuis_kim">Laboratorium Kimia</a>
                            <a class="dropdown-item" href="<?php base() ?>kuis_fis">Laboratorium Fisika</a>
                            <a class="dropdown-item" href="<?php base() ?>kuis_bahasa">Laboratorium Bahasa</a> -->
							
                        </div>
                    </li>
                </ul>
							
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <?php
                        if ($_SESSION["status"] == "A") {
                            $p = "Kepala Laboratorium";
                        } else if ($_SESSION["status"] == "S") {
                            $p = "Petugas";
                        } else {
                            $p = "siswa";
                        }
                        ?>
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php
                            echo $_SESSION["nama"] . "(" . $p . ")".$_SESSION["alamat"];
							 
                            ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="<?php base() ?>logout.php">Keluar</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>