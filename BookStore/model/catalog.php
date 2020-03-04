<?php
    include_once 'database.php';
    class CATALOG extends DATABASE
    {
        function __construct()
        {
            parent::__construct();
        }
        
        function getAllCatalog()
        {
            $this->SetQuery("SELECT * from catalog order by id DESC");
            $this->result=$this->ThucHienTruyVan();
            return $this->result;
        }

        function getCatelog($id)
        {
            $this->SetQuery("SELECT * from catalog where id=".$id);
            $this->result=$this->ThucHienTruyVan();
            return $this->result;
        }

        function getCatalogBy($type=0,$limit=0,$idParent=0)
        {
            $sql="SELECT * FROM catalog WHERE 1";
            //Show thư danh mục cha
            if($type==1){
                $sql.=" AND idChild=0";
            }

            //Show thư danh mục con
            if($type==2){
                $sql.=" AND idParents=0";
            }

            //Show thư danh mục con theo cha
            if($type==3){
                $sql.=" AND idChild=".$idParent;
            }else {
              $sql.=" ORDER BY id DESC LIMIT ".$limit;
            }
            $this->SetQuery($sql);
            $this->result=$this->ThucHienTruyVan();
            return $this->result;
        }

        function deleteCatalog($idCatalog){
            $query="DELETE FROM `catalog` Where id=".$idCatalog;
            $this->SetQuery($query);
            $this->result=$this->ThucHienLenh();
        }

        function addCatalog($name,$image){
            $query="INSERT INTO `catalog`( `name`, `image`) 
            VALUES ('".$name."','".$image."')";
            $this->SetQuery($query);
            $this->result=$this->ThucHienLenh();
        }

        function getCatalogOne($id)
        {
            $this->SetQuery("SELECT * from catalog where id=".$id);
            $this->result=$this->ThucHienTruyVan();
            return $this->result;
        }

        function updateCatalog($name,$idCatalog){
            $query="UPDATE `catalog` SET `name`='".$name."' WHERE id=".$idCatalog;
            $this->SetQuery($query);
            $this->result=$this->ThucHienLenh();
        }

        
    }

   

?>