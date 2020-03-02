<?php
    $action="home";
    if(isset($_GET['act']))
        $action=$_GET['act'];
        switch($action){
            case "home":
            $order= new ORDER();
            $newOrder=$order->newAllOrder();
            
            $productObj=new PRODUCT();
            $listProduct=$productObj->getProductHome();
                include './../view/admin/home.php';
                break;

            case "logout":
                unset($_SESSION['idAdmin']);
                header("location: index.php");
                break;
        }

        
?>