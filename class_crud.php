<?php

error_reporting(0);

class CRUD {

    public $connection;

    public function __construct() {
        
        $this->connection = mysqli_connect("localhost", "root", "", "fajar_ipa");
    }

    public function auto_kode($table, $filed,$as,$awal,$x, $y, $s, $isi = null) {
        $sql = "SELECT MAX($filed) AS $as FROM $table";
        $query = mysqli_query($this->connection, $sql);
        $hasil = mysqli_fetch_array($query);
        $jum = mysqli_num_rows($query);
        if ($jum == 0) {
            $id=$awal;
        } else {
            if ($hasil) {
                $kode = $hasil[$as];
                $noUrut = (int) substr($kode, $x, $y);
                $noUrut++;
                if (!$isi == null) {
                    $newID = $isi . sprintf("%0" . $s . "s", $noUrut);
                } else {
                    $newID = sprintf("%0" . $s . "s", $noUrut);
                }
                $id = $newID;
            } else {

                if (!$isi == null) {
                    ;
                    $newID = $isi . sprintf("%0" . $s . "s", "1");
                } else {
                    $newID = sprintf("%0" . $s . "s", "1");
                }
                $id = $newID;
            }
        }


        return $id;
    }

    public function acak_kode($table, $field, $char = null, $x, $y) {
        $rand = rand($x, $y);
        $sql = "SELECT * FROM $table WHERE $field ='$rand'";
        $query = mysqli_query($this->connection, $sql);
        if (mysqli_num_rows($query) > 0) {
            $baru = rand($x, $y);
        } else {
            $baru = $rand;
        }

        if ($char != null) {
            $kode = $char . $baru;
        } else {
            $kode = $baru;
        }

        return $kode;
    }

    public function escape($var) {
        $data = mysqli_real_escape_string($this->connection, $var);
        return $data;
    }

    public function insert($table, $rows = null) {
        $sql = "INSERT INTO $table";
        $row = null;
        $value = null;
        foreach ($rows as $key => $nilai) {
            $row .= "," . $key;
            $value .= ",'" . $nilai . "'";
        }
        $sql .= "(" . substr($row, 1) . ")";
        $sql .= "VALUES(" . substr($value, 1) . ")";
        $query = mysqli_query($this->connection, $sql);
        if ($query) {
            return '1';
        } else {
            echo("Error description: " . mysqli_error($this->connection));
        }
    }

    public function tampil($table, $where = null) {
        $sql = "SELECT * FROM $table";
        if ($where != null) {
            $sql .= " " . $where;
        }
        $query = mysqli_query($this->connection, $sql);
        if (mysqli_num_rows($query) > 0) {
            while ($row = mysqli_fetch_assoc($query)) {
                $array[] = $row;
            }
            return $array;
        } else {
            return null;
        }
    }

    public function cek_data($table, $where = null) {
        $sql = "SELECT * FROM $table";
        if ($where != null) {
            $sql .= " " . $where;
        }
        $query = mysqli_query($this->connection, $sql);
        if (mysqli_num_rows($query) > 0) {
            return '1';
        } else {
            return '0';
        }
    }

    public function cek_jumlah($table, $where = null) {
        $sql = "SELECT * FROM $table";
        if ($where != null) {
            $sql .= " " . $where;
        }
        $query = mysqli_query($this->connection, $sql);
        $jumlah = mysqli_num_rows($query);
        return $jumlah;
    }

    public function record($table, $where) {
        $sql = "";
        $kondisi = "";
        foreach ($where as $key => $value) {
            $kondisi .= $key . "='" . $value . "' AND ";
        }
        $kondisi = substr($kondisi, 0, -5);
        $sql .= "SELECT * FROM " . $table . " WHERE " . $kondisi;
        $query = mysqli_query($this->connection, $sql);
        $row = mysqli_fetch_array($query);
        return $row;
    }

    public function update($table, $where, $field) {
        $sql = "";
        $kondisi = "";
        foreach ($where as $key => $value) {
            $kondisi .= $key . "='" . $value . "' AND ";
        }
        $kondisi = substr($kondisi, 0, -5);
        foreach ($field as $key => $value) {
            $sql .= $key . "='" . $value . "', ";
        }
        $sql = substr($sql, 0, -2);
        $sql = "UPDATE " . $table . " SET " . $sql . " WHERE " . $kondisi;
        $queri = mysqli_query($this->connection, $sql);
        if ($queri) {
            return '1';
        } else {
            return '2';
        }
    }

    public function delete_record($table, $where) {
        $sql = "";
        $kondisi = "";
        foreach ($where as $key => $value) {
            $kondisi .= $key . "='" . $value . "' AND ";
        }
        $kondisi = substr($kondisi, 0, -5);
        $sql = "DELETE FROM " . $table . " WHERE " . $kondisi;
        $delete = mysqli_query($this->connection, $sql);
        if ($delete) {
            return '1';
        } else {
            return '2';
        }
    }

    public function input($input) {
        $inputan = mysqli_real_escape_string($this->connection, $input);
        return $inputan;
    }

    public function delete_all($table) {
        $sql = "DELETE FROM " . $table;
        $delete = mysqli_query($this->connection, $sql);
        if ($delete) {
            return '1';
        } else {
            return '2';
        }
    }

    //SUM
    public function SUM($field, $as, $table, $where = null) {
        $sql = "SELECT SUM($field) as $as FROM $table";
        if ($where != null) {
            $sql .= " " . $where;
        }
        $hasil = mysqli_query($this->connection, $sql);
        $row = mysqli_fetch_array($hasil);
        if ($row[$as] == "") {
            return '0';
        } else {
            return $row[$as];
        }
    }

    //group by
    public function sql_group($sql) {
        $hasil = mysqli_query($this->connection, $sql);
        $row = mysqli_fetch_array($hasil);
        return $row;
    }
    
    public function max_data($table,$field_max,$as){
        $sql="SELECT MAX($field_max) AS $as FROM $table";
        $hasil = mysqli_query($this->connection, $sql);
        $row = mysqli_fetch_array($hasil);
        return $row[$as];
    }

}

?>
