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
<div class="col-md-12 mx-auto" style="margin-top:20px;padding:0;">
    
    <div class="card">
        <div class="card-header">
          DATA  ATRIBUT
		   <a href="<?php base() ?>atribut_tambah">
                <button style="float:right;" class="btn btn-primary btn-sm">
                    <i class="fa fa-plus-square" aria-hidden="true"></i>
                    Tambah Atribut
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
                        <th style="font-size:11px;">NAMA INDIKATOR</th>
                        <th style="font-size:11px;">PERTANYAAN</th>
                        <th style="font-size:11px;">OPSI</th>
                    </tr>
                </thead>
                <tbody>
				                 
                   	<?php
					include ('connection.php');
                          $no = 1;
                          if (isset($_GET['td'])){
                          $query= mysql_query("SELECT * FROM tb_atribut WHERE kd_indikator=".$_GET['td']);
                          while ($data = mysql_fetch_array($query)) {
                          $kd_indikator = $data['kd_indikator'];
                          $queryd= mysql_query("SELECT * FROM tb_indikator WHERE kd_indikator = '$kd_indikator'");
                          $datad = mysql_fetch_array($queryd);
                          $indikator = $datad['indikator'];
                         ?>
                            <tr>
							<td class='text-center'><?php echo $no++ ?></td>
                            <td><?php echo $indikator  ?></td>
                            <td><?php echo $data['pertanyaan'] ?></td>
                                
                                <td>
                                   <a style="text-decoration:none;" href="<?php base() ?>atribut_edit/<?php echo $data["kd_atribut"] ?>">
                                        <button class="btn btn-warning btn-sm">Edit</button>
                                    </a>
                                    <button id="<?php echo $data["kd_atribut"] ?>" class="btn btn-danger btn-sm bt_hapus">Hapus</button>
                                    
                                </td>
                            </tr>
							<?php
                                }
                                }
                                                else {
                                                    $query= mysql_query("SELECT * FROM tb_atribut");
                                                    while ($data = mysql_fetch_array($query)) {
                                                    $kd_indikator = $data['kd_indikator'];
                                                    $queryd= mysql_query("SELECT * FROM tb_indikator WHERE kd_indikator = '$kd_indikator'");
                                                    $datad = mysql_fetch_array($queryd);
                                                    $indikator = $datad['indikator'];
                                                   ?>
                                                   <tr>
                                                    <td class='text-center'><?php echo $no++ ?></td>
                                                    <td><?php echo $indikator  ?></td>
                                                    <td><?php echo $data['pertanyaan'] ?></td>
                                                    <td>
                                                      <a style="text-decoration:none;" href="<?php base() ?>atribut_edit/<?php echo $data["kd_atribut"] ?>">
														<button class="btn btn-warning btn-sm">Edit</button>
													</a>
                                                    <a style="text-decoration:none;" href="<?php base() ?>atribut_hapus/<?php echo $data["kd_atribut"] ?>">
														<button class="btn btn-danger btn-sm bt_hapus">Hapus</button>
													</a>
														<!-- <button id="<?php echo $data["kd_atribut"] ?>" class="btn btn-danger btn-sm bt_hapus">Hapus</button> -->
													
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
                        url: "<?php base() ?>master/atribut/_hapus.php",
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