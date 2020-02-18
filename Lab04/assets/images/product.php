<?php
    include('database.php');
    class PRODUCT extends DATABASE
    {
        function __construct()
        {
            parent::__construct();
        }
        function getAllProduct()
        {
            $this->SetQuery("SELECT * from tblproduct");
            $this->result=$this->ThucHienTruyVan();
            return $this->result;
        }
        
        function getProductByCateId($id)
        {
            $this->SetQuery("SELECT * from tblproduct where productid=$id");
            $this->result=$this->ThucHienTruyVan();
            return $this->result;
        }

        function searchProduct($txt)
        {
            $this->SetQuery("SELECT * from tblproduct where productName LIKE '%".$txt."%' ");
            $this->result=$this->ThucHienTruyVan();
            return $this->result;
        }

        function delProduct($id)
        {
            $this->SetQuery("DELETE FROM tblproduct where productId=$id");
            $this->result=$this->ThucHienLenh();
        }
    }
?>