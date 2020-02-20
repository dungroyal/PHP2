<?php
    include 'model/product.php';

    $action="index";
    if(isset($_GET['act']))
        $action=$_GET['act'];
        switch($action){
            case "index":
                $p=new PRODUCT();
                $prod=$p->getAllProduct();
                include 'view/site/home.php';
                break;
        }

?>