<?php
    include 'model/product.php';
    $objProduct=new PRODUCT();

    $action="index";

    if(isset($_GET['act']))
        $action=$_GET['act'];
        switch($action){
            case "index":
                $allProduct=$objProduct->getAllProduct();
                include 'view/product.php';
                break;

            case "detail":
                if (isset($_GET['idProduct'])) {
                    $idProduct=$_GET['idProduct'];
                    $productById=$objProduct->getProductById($idProduct);
                    $proById=$productById->fetch(pdo::FETCH_ASSOC);   
                }
                include 'view/productDetail.php';
                break;
                
        }
?>