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
            $this->SetQuery("SELECT * from tblproduct");
            $this->result=$this->ThucHienTruyVan();
            return $this->result;
        }    

        function getProductById($id)
        {
            $sql="SELECT * from tblproduct where productId=".$id;
            $this->SetQuery($sql);
            $this->result=$this->ThucHienTruyVan();
            return $this->result;
        }
    }
?>