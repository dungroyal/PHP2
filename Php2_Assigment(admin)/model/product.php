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
        function GetProductViewALot()
        {  
            $query="select * from product order by view DESC limit 3";
            $this->SetQuery($query);
            $this->result=$this->ThucHienTruyVan();
            return $this->result;
        }
        function GetProductTopBuyed()
        {
            $query="select * from product order by buyed DESC limit 3";
            $this->SetQuery($query);
            $this->result=$this->ThucHienTruyVan();
            return $this->result;
        }    
      
        function getProductByCateID($cateid)
        {
            $this->SetQuery("SELECT * from product where catalog_id=$cateid");
            $this->result=$this->ThucHienTruyVan();
            return $this->result;
        }
        function GetProductById($id)
        {   
            $query="select id,name,price,image_link from product where id=$id";
            $this->SetQuery($query);
            $this->result=$this->ThucHienTruyVan();
            $row=$this->result->fetch(pdo::FETCH_ASSOC);
            return $row;
        }
        
    }
?>