<?php
$kd_indikator = $url[1];
$w = array("kd_indikator" => $kd_indikator);
$r = $crud->record("tb_indikator", $w);
?>
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
<div class="col-md-9 mx-auto" style="margin-top:20px;padding:0;">

    <div class="card">
        <div class="card-header">
            <div class="float-left">
                Data Atribut <b>Indikator <?php echo $r["indikator"] ?></b>
            </div>
            <div class="float-right">
                <a style="text-decoration:none;" href="<?php base() ?>atribut_tambah/<?php echo $kd_indikator ?>">
                    <button class="btn btn-primary btn-sm">
                        <i class="fa fa-plus-square" aria-hidden="true"></i>
                        Tambah
                    </button>
                </a>
                <a style="text-decoration:none;" href="<?php base() ?>atribut">
                    <button class="btn btn-warning btn-sm">
                        <i class="fa fa-undo" aria-hidden="true"></i>
                        Kembali
                    </button>
                </a>
            </div>
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
                <thead>
                    <tr>
                        <th style="font-size:11px;width:10px;">NO</th>
                        <th style="font-size:11px;">KODE ATRIBUT</th>
                        <th style="font-size:11px;">ATRIBUT</th>
                        <th style="font-size:11px;">OPSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $row = $crud->tampil("tb_atribut where kd_indikator='$kd_indikator'");
                    if (is_array($row) || is_object($row)) {
                        $no = 0;
                        foreach ($row as $data) {
                            $no++;
                            ?>
                            <tr>
                                <td style="font-size:12px;"><?php echo $no; ?></td>
                                <td style="font-size:12px;"><?php echo $data['kd_atribut'] ?></td>
                                <td style="font-size:12px;"><?php echo $data['pertanyaan'] ?></td>
                                <td>
                                    <a style="text-decoration:none;" href="<?php base() ?>atribut_edit/<?php echo $kd_indikator ?>/<?php echo $data["kd_atribut"] ?>">
                                        <button class="btn btn-warning btn-sm">Edit</button>
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

</div>