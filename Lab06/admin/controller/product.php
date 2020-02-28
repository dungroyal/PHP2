<?php
    include 'model/product.php';

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
            include "../view/admin/product.php";
            break;
    }

    
?>