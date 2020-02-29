<?php
    $action="order";
    if(isset($_GET['act']))
        $action=$_GET['act'];
        switch($action){
            case "order":
                
                include './../view/admin/order/order.php';
                break;
        }
?>