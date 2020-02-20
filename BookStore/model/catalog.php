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

    }
?>