<?php
    include 'model/product.php';

    $action="product_by_id";
    if(isset($_GET['act']))
        $action=$_GET['act'];
        switch($action){
            case "product_by_id":
                if (isset($_GET['cateId'])) {
                    $idCat=$_GET['cateId'];
                }

                $pr=new PRODUCT();
                $prod_by_id=$pr->getProduct_by_idCat($idCat);
                $pro=$prod_by_id->fetchall(pdo::FETCH_ASSOC);   
                include 'view/site/product.php';
                break;
        }

?>