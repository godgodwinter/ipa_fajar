
<?php
session_start();
include './koneksi.php';


function base() {
    echo str_replace("utama.php","",$_SERVER['PHP_SELF']);
}

$link = "http://localhost/ipa_fajar/";
$url = explode("/", $_SERVER["QUERY_STRING"]);
if (isset($_SESSION['user']) && $_SESSION['user'] != '') {
    ?>
	
    <html>
    <head>
        <meta charset="UTF-8">
        <title>IPA SISTEM</title>
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
       <?php 
	   include './menu.php';
	   ?>
       
    </body>
</html>
<div class="container-fluid" style="margin-top:70px;">
                <?php
                include './paging.php';
                ?>
            </div>

    <?php
	} else {
    header("location:paging.php");

}
?>

