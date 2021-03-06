<?php
    class BMI{
        public $berat;
        public $tinggi;

        function __construct($berat, $tinggi){
            $this->berat = $berat;
            $this->tinggi = $tinggi;
        }

        function nilaiBMI(){
          $hasil = $this->berat / $this->tinggi ** 2;
            return $hasil;
        }

        function statusBMI(){
            if ($this->nilaiBMI() < 18.5) {
                return "Kekurangan bobot";
            }
            elseif ($this->nilaiBMI() >= 18.5 && $this->nilaiBMI() <= 23.9) {
                return "Sehat";
            }
            elseif ($this->nilaiBMI() >= 24 && $this->nilaiBMI() <= 26.9) {
                return "Kelebihan bobot";
            }
            elseif ($this->nilaiBMI() >= 27 && $this->nilaiBMI() <= 29.9) {
                return "Obesitas 1";
            }
            else {
                return "Obesitas 2";
            }
        }
    }
?>