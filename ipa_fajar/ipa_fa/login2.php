
<?php
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
            <meta charset="UTF-8">
            <title>SISWA</title>
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
            <div class="col-md-4 push-md-4" style="margin-top:70px;padding:0px 50px;">
                <div class="card">
                    <div class="card-header">
                        LOGIN SISWA
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
                            <button name="sub" type="submit" class="btn btn-primary btn-md">Login</button>
							<a href="index.php">
                                <button type="button" class="btn btn-warning btn-md">Batal</button>
                            </a>
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
        </body>
    </html>
    <?php
        if (isset($_POST["sub"])) {
        $username = mysqli_real_escape_string($con, htmlspecialchars($_POST['username']));
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $p = md5($password);
        $login = mysqli_query($con, "select * from siswa where username='$username' and password='$p'");
        $cek = mysqli_fetch_array($login);
        if ($login->num_rows > 0) {
            $_SESSION['user'] = $cek['username'];
            $_SESSION['nis'] = $cek['nis'];
            $_SESSION['nama'] = $cek['nama_siswa'];
            ?>
            <script>
                window.location.href = "";
            </script>
            <?php
        } else {
            ?>
            <script>
                swal("Login Gagal");
            </script>
            <?php
        }
    }
    ?>
    
    
    <?php
}
?>


