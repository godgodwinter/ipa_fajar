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
<div class="col-md-12" style="margin-top:20px;padding:0;">

    <div class="card">
        <div class="card-header">
			DATA PETUGAS
            <a href="<?php base() ?>petugas_tambah">
                <button style="float:right;" class="btn btn-primary btn-sm">
                    <i class="fa fa-plus-square" aria-hidden="true"></i>
                    Tambah Petugas
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
            <table id="example" class="table table-hover dt-responsive nowrap" cellspacing="0" width="100%">
                <thead >
                    <tr>
                        <th style="font-size:11px;width:10px;">NO</th>
                        <th style="font-size:11px;">KODE PETUGAS</th>
                        <th style="font-size:11px;">NAMA</th>
                        <th style="font-size:11px;">NO HP</th>
                        <th style="font-size:11px;">JENIS KELAMIN</th>
                        <th style="font-size:11px;">ALAMAT</th>
                        <th style="font-size:11px;">STATUS</th>
                        <th style="font-size:11px;">OPSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $row = $crud->tampil("tb_petugas");
                    if (is_array($row) || is_object($row)) {
                        $no = 0;
                        foreach ($row as $data) {
                            $no++;
                            ?>
                            <tr>
                                <td style="font-size:12px;"><?php echo $no; ?></td>
                                <td style="font-size:12px;"><?php echo $data['kd_petugas'] ?></td>
                                <td style="font-size:12px;"><?php echo $data['nama'] ?></td>
                                <td style="font-size:12px;"><?php echo $data['no_hp'] ?></td>
                                <td style="font-size:12px;"><?php
                                    if ($data['jk'] == "L") {
                                        echo "Laki-laki";
                                    } else {
                                        echo "Perempuan";
                                    }
                                    ?>
                                </td>
                                <td style="font-size:12px;"><?php echo $data['alamat'] ?></td>
                                <td style="font-size:12px;"><?php
                                    if ($data['status'] == "S") {
                                        echo "Petugas";
                                    } else if ($data['status'] == "A") {
                                        echo "Kepala Laboratorium";
                                    } else if ($data['status'] == "M") {
                                        echo "Tidak DIketahui";
                                    }
                                    ?></td>
                                <td>
                                    <a style="text-decoration:none;" href="<?php base() ?>petugas_edit/<?php echo $data["kd_petugas"] ?>">
                                        <button class="btn btn-warning btn-sm">Edit</button>
                                    </a>
                                    <button id="<?php echo $data["kd_petugas"] ?>" class="btn btn-danger btn-sm bt_hapus">Hapus</button>
                                    <a style="text-decoration:none;" href="<?php base() ?>petugas_detail/<?php echo $data["kd_petugas"] ?>">
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
                        url: "<?php base() ?>master/petugas/_hapus.php",
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