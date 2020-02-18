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
        
        function getSanphamByCateId($id)
        {
            $this->SetQuery("SELECT * from tblsanpham where sanphamid=$id");
            $this->result=$this->ThucHienTruyVan();
            return $this->result;
        }

        function searchSanpham($txt)
        {
            $this->SetQuery("SELECT * from tblsanpham where sanphamName LIKE '%".$txt."%' ");
            $this->result=$this->ThucHienTruyVan();
            return $this->result;
        }

        function delSanpham($id)
        {
            $this->SetQuery("DELETE FROM tblsanpham where sanphamId=$id");
            $this->result=$this->ThucHienLenh();
        }

        function insertSanpham($namePro,$codePro,$date,$pricePro,$mota,$image2){
            $query="INSERT INTO `tblsanpham` (`productName`, `productCode`, `releaseDate`, `price`, `description`, `imageUrl`) VALUES ('".$namePro."','".$codePro."','".$date."','".$pricePro."','".$mota."','".$image2."')";
            $this->SetQuery($query);
            $this->result=$this->ThucHienLenh();
        }

        function updateProduct($namePro,$codePro,$date,$pricePro,$mota,$image2,$idPro){
            $query="UPDATE `tblsanpham` SET `productName` = '".$namePro."', `productCode` = '".$namePro."', `releaseDate` = '".$namePro."', `price` = '".$namePro."', `description` = '".$namePro."',`imageUrl` = '".$image2."' WHERE `tblproduct`.`productId` = ".$idPro.";";
            $this->SetQuery($query);
            $this->result=$this->ThucHienLenh();
        }

        function deletesanpham($idProduct){
            $query="DELETE FROM `tblsanpham` Where productId=".$idProduct;
            $this->SetQuery($query);
            $this->result=$this->ThucHienLenh();
        }
    }
?>