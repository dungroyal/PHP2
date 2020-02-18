<?php
    include('database.php');
    class CATALOG extends DATABASE
    {
        function __construct()
        {
            parent::__construct();
        }
        function getAllProduct()
        {
            $this->SetQuery("SELECT * from catalog");
            $this->result=$this->ThucHienTruyVan();
            return $this->result;
        }
    }
?>