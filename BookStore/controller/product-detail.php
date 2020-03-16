<?php
    include_once 'model/catalog.php';
    include_once 'model/product.php';
    
    $cata=new CATALOG();
    $listCata=$cata->getAllCatalog();

    $action="product-detail";
    if(isset($_GET['act']))
        $action=$_GET['act'];
        switch($action){
            case "product-detail":
                $p=new PRODUCT();
                $allProduct=$p->getProductHome();

                if (isset($_GET['idProduct'])) {
                    $idProduct=$_GET['idProduct'];
                    $p=new PRODUCT();
                    $productById=$p->getProduct_by_id($idProduct);
                    $proById=$productById->fetch(pdo::FETCH_ASSOC);   
                }
                
                 include './view/site/product-detail.php';
                break;
        }

        
?>