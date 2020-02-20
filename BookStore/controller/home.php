<?php
    include_once 'model/catalog.php';

    $action="home";
    if(isset($_GET['act']))
        $action=$_GET['act'];
        switch($action){
            case "home":
                $p=new CATALOG();
                $cataParent=$p->getCatalogBy(1,3,0);
                include './view/site/home.php';
                break;
        }
?>