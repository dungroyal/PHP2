<?php
    include_once 'model/catalog.php';
    include_once 'model/product.php';
    $p=new PRODUCT();
    $cata=new CATALOG();
    $listCata=$cata->getAllCatalog();

    $action="product";
    if(isset($_GET['act']))
        $action=$_GET['act'];
        switch($action){
            case "product":
                $allProduct=$p->getAllProduct();

                if (isset($_GET['idCatalog'])) {
                    $idCatalog=$_GET['idCatalog'];
                    $p=new PRODUCT();
                    $productByIdcat=$p->getProduct_by_idCat($idCatalog);
                }                
                include './view/site/product.php';
                break;

            
            case "search":
                $keyword=$_POST['keyword'];
                $p=new product();
                $allProduct=$p->searchProduct($keyword);
                $resultSearch='Kết quả tìm kiếm cho <strong>"'.$keyword.'"</strong> <br><br>';
                include './view/site/product.php';
                break;

        }
?>