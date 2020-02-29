<?php
    $action="customer";
    if(isset($_GET['act']))
        $action=$_GET['act'];
        switch($action){
            case "customer":
                
                include './../view/admin/customer/customer.php';
                break;
        }
?>