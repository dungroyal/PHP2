<?php
    include_once('database.php');
    class PRODUCT extends DATABASE
    {
        function __construct()
        {
            parent::__construct();
        }
        function getAllProduct()
        {
            $this->SetQuery("SELECT * from product");
            $this->result=$this->ThucHienTruyVan();
            return $this->result;
        }
    }
?>