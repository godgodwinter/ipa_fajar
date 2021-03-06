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
			  
            <a href="<?php base() ?>siswa_tambah" >
                <button style="float:right;"  class="btn btn-primary btn-sm"  >
                    <i  class="fa fa-plus-square" aria-hidden="true"></i>
                    Tambah User Kuisioner
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
                        <th style="font-size:11px;">KODE</th>
                        <th style="font-size:11px;">NAMA</th>
                        <th style="font-size:11px;">JENIS KELAMIN</th>
                        <th style="font-size:11px;">ALAMAT</th>
                        <!-- <th style="font-size:11px;">KELAS</th>
                        <th style="font-size:11px;">JURUSAN</th> -->
                        <th style="font-size:11px;">USERNAME</th>
                        <!-- <th style="font-size:11px;">PASSWORD</th> -->
                        <th style="font-size:11px;">KATEGORI USER</th>
                        <th style="font-size:11px;">OPSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $row = $crud->tampil("siswa");
                    if (is_array($row) || is_object($row)) {
                        $no = 0;
                        foreach ($row as $data) {
                            $no++;
                            ?>
                            <tr>
                                <td style="font-size:12px;"><?php echo $no; ?></td>
                                <td style="font-size:12px;"><?php echo $data['nis'] ?></td>
                                <td style="font-size:12px;"><?php echo $data['nama_siswa'] ?></td>
                                <td style="font-size:12px;"><?php if ($data['jk'] == "L") {
                                        echo "Laki-laki";
                                    } else {
                                        echo "Perempuan";
                                    }
                                    ?></td>
                                <td style="font-size:12px;"><?php echo $data['alamat'] ?></td>
                                <!-- <td style="font-size:12px;"><?php echo $data['Kelas'] ?></td>
                                <td style="font-size:12px;"><?php echo $data['Jurusan'] ?></td> -->
                                <td style="font-size:12px;"><?php echo $data['username'] ?></td>
                                <!-- <td style="font-size:12px;"><?php echo $data['Psd_v'] ?></td> -->
                                <td style="font-size:12px;"><?php echo $data['kategori'] ?></td>
                               	<td>
                                    <a style="text-decoration:none;" href="<?php base() ?>siswa_edit/<?php echo $data["nis"] ?>">
                                        <button class="btn btn-warning btn-sm">Edit</button>
                                    </a>
                                    <a style="text-decoration:none;" href="<?php base() ?>siswa_hapus2/<?php echo $data["nis"] ?>">
														<button class="btn btn-danger btn-sm bt_hapus">Hapus</button>
													</a>
                                    <!-- <button id="<?php echo $data["nis"] ?>" class="btn btn-danger btn-sm bt_hapus">Hapus</button> -->
                                    <a style="text-decoration:none;" href="<?php base() ?>siswa_detail/<?php echo $data["nis"] ?>">
                                        <button class="btn btn-success btn-sm">Detail</button>
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