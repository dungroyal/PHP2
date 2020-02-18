<?php
    function dientichHCN($cd,$cr){
        $kq=$cd*$cr;
        return $kq;
    }

    class HCN{
        //Properties
        private $chieudai;
        private $chieurong;
        //Methot
        function __construct($cd,$cr){
            $this->chieudai=$cd;
            $this->chieurong=$cr;
        }

        function tinhDienTich(){
        return $kq=($this->chieudai)*($this->chieurong);
        }
    }

?>