<?php
include_once 'model/product.php';
$producObj=new PRODUCT();
$action="index";
    if(isset($_GET['act']))
        $action=$_GET['act'];
    switch($action){
        case "index":
            include 'view/site/home.php';
            break;
    }
?>