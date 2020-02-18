<?php
    include 'model/product.php';
    //xu ly du lieu


    $temp='product';
    if (isset($_GET['idProduct'])) {
        $temp='productdetail';
    }

    if (isset($_GET['act'])) {
        $temp=$_GET['act'];
    }

    switch ($temp) {
        case 'product':
            $p=new product();
            $sp=$p->getAllProduct();
            include "view/product/products.php";
            break;

        case 'productdetail':
            $idProduct=$_GET['idProduct'];
            $p=new product();
            $prodetail=$p->getProductByCateId($idProduct);
            $pro=$prodetail->fetch(pdo::FETCH_ASSOC);   
            include "view/product/productdetail.php";
            break;

        case 'search':
            $txt=$_POST['txt'];
            $p=new product();
            $sp=$p->searchProduct($txt);
            include "view/product/products.php";
        break;
        
    }

    
?>