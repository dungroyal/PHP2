<?php
    include_once 'model/catalog.php';
    include_once 'model/product.php';

    $action="product";
    if(isset($_GET['act']))
        $action=$_GET['act'];
        switch($action){
            case "product":
                $p=new PRODUCT();
                $allProduct=$p->getAllProduct();

                if (isset($_GET['idCatalog'])) {
                    $idCatalog=$_GET['idCatalog'];
                    $p=new PRODUCT();
                    $productByIdcat=$p->getProduct_by_idCat($idCatalog);
                }
                
                include './view/site/product.php';
                break;
        }
?>