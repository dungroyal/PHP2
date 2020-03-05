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

        function insertProduct($namePro,$codePro,$date,$pricePro,$mota,$image2){
            $query="INSERT INTO `tblproduct` (`productName`, `productCode`, `releaseDate`, `price`, `description`, `imageUrl`) VALUES ('".$namePro."','".$codePro."','".$date."','".$pricePro."','".$mota."','".$image2."')";
            $this->SetQuery($query);
            $this->result=$this->ThucHienLenh();
        }

        function updateProduct($namePro,$codePro,$date,$pricePro,$mota,$image2,$idPro){
            $query="UPDATE `tblproduct` SET `productName` = '".$namePro."', `productCode` = '".$namePro."', `releaseDate` = '".$namePro."', `price` = '".$namePro."', `description` = '".$namePro."',`imageUrl` = '".$image2."' WHERE `tblproduct`.`productId` = ".$idPro.";";
            $this->SetQuery($query);
            $this->result=$this->ThucHienLenh();
        }

        function deleteProduct($idProduct){
            $query="DELETE FROM `tblproduct` Where productId=".$idProduct;
            $this->SetQuery($query);
            $this->result=$this->ThucHienLenh();
        }
    }
?>