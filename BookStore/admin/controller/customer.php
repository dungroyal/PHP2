<?php
    $action="customer";
    $customer= new CUSTOMER();
    if(isset($_GET['act']))
        $action=$_GET['act'];
        switch($action){
            case "customer":
                $addCustomer=$customer->AllCustomer();
                include './../view/admin/customer/customer.php';
                break;
        }
?>