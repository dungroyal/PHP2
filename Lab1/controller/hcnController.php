<?php
    include 'model\hcnModel.php';
    
    if (isset($_GET['act']) && ($_GET['act']='tinhtoan')) {
        $chieudai=$_POST['chieudai'];
        $chieurong=$_POST['chieurong'];
        $hcn= new HCN($chieudai,$chieurong);
        $dientich = $hcn -> tinhDienTich();
    }

    include "view/hcn.php";
?>