<?php
    $action="catalog";
    if(isset($_GET['act']))
        $action=$_GET['act'];
        switch($action){
            case "catalog":
                
                include './../view/admin/catalog/catalog.php';
                break;
        }
?>