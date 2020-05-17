<?php
    include_once('database.php');
    class FLIGHT extends DATABASE
    {
        function __construct()
        {
            parent::__construct();
        }
        function getAllflights()
        {
            $this->SetQuery("SELECT * from flights");
            $this->result=$this->ThucHienTruyVan();
            return $this->result;
        }   
    }
?>