<style>
    .dataTables_filter{
        float: right;
    }
    
    .dataTables_filter label{
        font-size:14px;
    }

    #example_paginate{
        float: right;
    }
    
    .dataTables_info{
        font-size:13px;
    }
    
    .dataTables_empty{
        font-size:13px;
    }
</style>
<div class="col-md-11 mx-auto" style="margin-top:20px;padding:0;">
    
    <div class="card">
	        
	
		<div  class="card-header">
			
			  DATA USER KUISIONER
			  
            <a href="<?php base() ?>analisis" >
                <button style="float:right;"  class="btn btn-primary btn-sm"  >
                    <i  class="fa fa-plus-square" aria-hidden="true"></i>
                    Analisis
                </button>
            </a>
            | <a href="<?php base() ?>analisis_reset" >
                <button style="float:right;"  class="btn btn-danger btn-sm"  >
                    <i  class="fa fa-plus-square" aria-hidden="true"></i>
                    RESET
                </button>
            </a>
        </div>
        <div class="card-block">
            <script>
                $(document).ready(function () {
                    var table = $('#example').DataTable({
                        "bLengthChange": false,
                        "bAutoWidth": true,
                        "bPaginate": true,
                        "pageLength": 6
                    });
                });
            </script>
            <table id="example" class="table table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th style="font-size:11px;width:10px;">NO</th>
                        <th style="font-size:11px;">TAHUN</th>
                        <th style="font-size:11px;">P/I</th>
                        <th style="font-size:11px;">PERSENTASE</th>
                        <th style="font-size:11px;">OPSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $row = $crud->tampil("laporan");
                    if (is_array($row) || is_object($row)) {
                        $no = 0;
                        foreach ($row as $data) {
                            $no++;
                            ?>
                            <tr>
                                <td style="font-size:12px;"><?php echo $no; ?></td>
                                <td style="font-size:12px;"><?php echo $data['tahun'] ?></td>
                              
                                <td style="font-size:12px;"><?php echo $data['poi'] ?></td>
                                <td style="font-size:12px;"><?php echo $data['persentase'] ?></td>
                               	<td>
                                   
                                    <a style="text-decoration:none;" href="<?php base() ?>ipatahunan_hapus/<?php echo $data["id_laporan"] ?>">
														<button class="btn btn-danger btn-sm bt_hapus">Hapus</button>
													</a>
                                  
                                    </a>
                                </td>
                            </tr>
                            <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
	<script>
        $(document).ready(function () {
            $("#example").on("click", ".bt_hapus", function () {
                var id = $(this).attr("id");
                swal({
                    title: 'Anda Yakin?',
                    text: "Menghapus Data Ini!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya',
                    cancelButtonText: 'Batal!'
                }).then(function () {
                    $.ajax({
                        url: "<?php base() ?>master/siswa/_hapus.php",
                        data: "id=" + id,
                        type: 'POST',
                        success: function (hasil) {
                            if (hasil == 1) {
                                swal({
                                    title: 'Suksess',
                                    text: 'Data Telah terhapus',
                                    type: 'success'
                                }).then(function () {
                                    window.location.href = "";
                                });
                            }
                        }
                    });
                });
            });
        });
    </script>

</div>

<div class="container">
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
