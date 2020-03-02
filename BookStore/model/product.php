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
            $this->SetQuery("SELECT * from product ORDER BY  id DESC  ");
            $this->result=$this->ThucHienTruyVan();
            return $this->result;
        }   

        function getProductHome()
        {
            $this->SetQuery("SELECT * from product ORDER BY  id DESC limit 0,3 ");
            $this->result=$this->ThucHienTruyVan();
            return $this->result;
        }  

        function addProduct($name,$author,$nxb,$price,$specialPrice,$image,$images,$mota,$idCatalog,$status){
            $query="INSERT INTO `product`( `name`, `author`, `nxb`, `price`, `specialPrice`, `image`, `images`, `mota`, `idCatalog`, `status`) 
            VALUES ('".$name."','".$author."','".$nxb."','".$price."','".$specialPrice."','".$image."','".$images."','".$mota."','".$idCatalog."','".$status."')";
            $this->SetQuery($query);
            $this->result=$this->ThucHienLenh();
        }
        
        function getProduct_by_idCat($id)
        {
            $sql="SELECT * from product where 1";
            $sql.=" AND idCatalog=".$id;
            $sql.=" order by id desc limit 0,6";
            $this->SetQuery($sql);
            $this->result=$this->ThucHienTruyVan();
            return $this->result;
        }

        function getProduct_by_id($id)
        {
            $sql="SELECT * from product where id=".$id;
            $this->SetQuery($sql);
            $this->result=$this->ThucHienTruyVan();
            return $this->result;
        }
    }
?>