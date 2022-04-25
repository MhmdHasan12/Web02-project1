<?php
    require_once 'class_pasien.php';
    require_once 'class_bmi.php';

    class BMIPasien extends BMI{
        public $pasien;
        public $tanggal;
        function __construct($id, $kode, $nama, $tmp_lahir, $tgl_lahir, $email, $gender, $berat, $tinggi, $tanggal) {
            parent::__construct($berat, $tinggi);
            $this->tanggal = $tanggal;
            $this->pasien = new pasien($id, $kode, $nama, $tmp_lahir, $tgl_lahir, $email, $gender);
        }
    };   
?>