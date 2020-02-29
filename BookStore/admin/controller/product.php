<?php
    $action="product";
    $productObj=new PRODUCT();
    if(isset($_GET['act']))
        $action=$_GET['act'];
        switch($action){
            case "product":
                $listProduct=$productObj->getAllProduct();
                include './../view/admin/product/product.php';
                break;
        }
?>