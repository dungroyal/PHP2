<?php
include_once 'model/product.php';
$productObj=new PRODUCT();
    $action="index";
    if(isset($_GET['act']))
        $action=$_GET['act'];
    switch($action)
    {
        case 'index':
            //lay tat ca product
            include 'view/site/product/product.php';
            break;
        case 'view':
            //xet view gi?
            if(isset($_GET['cateId']))
                {
                    $cateId=$_GET['cateId'];
                    $listProduct=$productObj->getProductByCateID($cateId);
                    include 'view/site/product/product.php';
                }
            if(isset($_GET['id']))
            {
                
            }
            break;
    }
?>