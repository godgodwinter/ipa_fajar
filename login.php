<?php
error_reporting(0);
session_start();
$con = mysqli_connect("localhost", "root", "", "fajar_ipa");

function base() {
    echo str_replace("index.php", "", $_SERVER['PHP_SELF']);
}

$link = "http://localhost/ipa_fajar/";
$url = explode("/", $_SERVER["QUERY_STRING"]);

if (isset($_SESSION['user']) && $_SESSION['user'] != '') {
    ?>
    <script>
        window.location.href = "index.php";
    </script>
    <?php
} else {

    ?>
    <html>
        <head>
		<script language='JavaScript'>
			var txt=" LOGIN SISFO PENINGKATAN KUALITAS LABORATORIUM";
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
     <div class="col-md-12 bg-inverse fixed-top">
    <div class="container">
        <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse"> 
		<a class="navbar-brand"  href="">SISFO PENINGKATAN KUALITAS LABORATORIUM SMAN BULULAWANG</a>
		</nav>
		</div>
		</div>
        </head>
        <body>
		<br>
		<br>
		<br>
            <div class="col-md-4 push-md-4" style="margin-top:70px;padding:0px 50px;">
                <div class="card">
                    <div class="card-header">
                        SIGN IN USER
                    </div>
                    <div class="card-block">
                        <form id="form" action="" method="post" data-toggle="validator" role="form">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon" id="sizing-addon2">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                    </span>
                                    <input required="" name="username" id="username" type="text" class="form-control" placeholder="Username" style="font-size:14px;">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon" id="sizing-addon2">
                                        <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                                    </span>
                                    <input required="" name="password" id="password" type="password" class="form-control" placeholder="Password" style="font-size:14px;">
                                </div>
                            </div>
                            <button name="sub" type="submit" class="btn btn-primary btn-md">LOGIN</button>
                        </form>
                        <script>
                            $(document).ready(function () {
                                $('#form').validator().on('submit', function (e) {
                                    if (e.isDefaultPrevented()) {
                                        var username = $("#username").val();
                                        var password = $("#password").val();
                                        if (username == "") {
                                            $("#username").focus();
                                            swal("Username Harus Di Isi");
                                        }else if(password==""){
                                            $("#password").focus();
                                            swal("Password Harus Di Isi");
                                        }else if(username=="" && password==""){
                                            $("#password").focus();
                                            $("#username").focus();
                                            swal("Username dan Password Harus Di Isi");
                                        } 
                                        
                                    } else {
                                        // everything looks good!
                                    }
                                });
                            });
                        </script>
                    </div>
                </div>
            </div>
			</br>
			</br>
			</br>
        </body>
    </html>
    <?php
       if (isset($_POST["sub"])){
        $username = mysqli_real_escape_string($con,($_POST['username']));
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $p = md5($password);
        $login = mysqli_query($con, "select * from tb_petugas where username='$username' and password='$p'");
        $cek = mysqli_fetch_array($login);
		$login1 = mysqli_query($con, "select * from siswa where username='$username' and password='$p'");
        $row = mysqli_fetch_array($login1);
		if ($login->num_rows ==1) {
            $_SESSION['user'] = $cek['username'];
            $_SESSION['kd_petugas'] = $cek['kd_petugas'];
            $_SESSION['status'] = $cek['status'];
            $_SESSION['nama'] = $cek['nama'];
            ?>
            <script>
                window.location.href = "";
            </script>
            <?php
        }elseif ($login1->num_rows ==1) {
			$_SESSION['user'] = $row['nis'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['password'] = $row['password'];
			$_SESSION['status'] = $cek['status'];
            $_SESSION['nama'] = $row['nama_siswa'];
            ?>
		<script>
                window.location.href = "";
            </script>
			<?php
		}else {
            ?>
            <script>
                swal("Login Gagal Cek Username & Password");
            </script>
            <?php
        }
    }
    ?>
        
    
    <?php
}
?>
    


