<?php
    $action="catalog";
    $catalogObj= new CATALOG();
    if(isset($_GET['act']))
        $action=$_GET['act'];
        switch($action){
            case "catalog":
                $listCatalog=$catalogObj->getAllCatalog();
                include './../view/admin/catalog/catalog.php';
                break;
        }
?>