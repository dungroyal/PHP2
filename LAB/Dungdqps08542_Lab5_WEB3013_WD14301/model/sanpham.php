<?php
    include('database.php');
    class SANPHAM extends DATABASE
    {
        function __construct()
        {
            parent::__construct();
        }
        function getAllSanpham()
        {
            $this->SetQuery("SELECT * from tblsanpham");
            $this->result=$this->ThucHienTruyVan();
            return $this->result;
        }

        function insertSanpham($nameSP,$image1,$image2){
            $query="INSERT INTO `tblsanpham` (`tensp`, `anhchinh`, `anhphu`) VALUES ('".$nameSP."', '".$image1."', '".$image2."');";
            $this->SetQuery($query);
            $this->result=$this->ThucHienLenh();
        }
        
        function delSanpham($id)
        {
            $this->SetQuery("DELETE FROM tblsanpham where masp=$id");
            $this->result=$this->ThucHienLenh();
        }

    }
?>