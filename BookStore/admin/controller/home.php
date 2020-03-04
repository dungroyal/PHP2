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

                $count= $order->getOrderByStatus(2);
                $countOrder=$count->fetchAll(pdo::FETCH_ASSOC);

                $count= $order->getOrderByStatus(0);
                $countNewOrder=$count->fetchAll(pdo::FETCH_ASSOC);
                
                $customer= new CUSTOMER();
                $countCus= $customer->AllCustomer();
                $countCustomer=$countCus->fetchAll(pdo::FETCH_ASSOC);

                include './../view/admin/home.php';
                break;

            case "logout":
                unset($_SESSION['idAdmin']);
                header("location: index.php");
                break;
        }

        
?>