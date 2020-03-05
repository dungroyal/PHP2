<?php
    include('database.php');
    class CATALOG extends DATABASE
    {
        function __construct()
        {
            parent::__construct();
        }
        function getAllCatalog()
        {
            $this->SetQuery("SELECT * from catalog");
            $this->result=$this->ThucHienTruyVan();
            return $this->result;
        }
        
    }
?>