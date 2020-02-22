<?php
session_start();
include_once 'model/CartService.php';
include_once 'model/customer.php';
$cartObj=new CARTSERVICE();
$customerObj=new CUSTOMER();
    $action="cart";
    if(isset($_GET['act']))
    {
        $action=$_GET['act'];
    }
    switch($action)
    {
        case 'cart':
            $items=$cartObj->getCart();
            include 'view/site/cart.php';
            break;
        case 'addtocart':
            $id=$_GET['proid'];
            $cartObj->addToCart($id);
            header("location:index.php?ctrller=cart");
            break;
           
        case 'checkout':
            //them don hang
            $name=$_POST['fullName'];
            $email=$_POST['email'];
            $add=$_POST['address'];
            $phone=$_POST['phone'];
            $dateadd=date('Y-m-d H:i:s');
            $cid=$customerObj->insert($name,$email,$add,$phone,$dateadd,0);
            //them chi tiet don hang
            $cartObj->insertDetail($cid);
            $cartObj->clearCart();
            header("location:index.php?ctrller=home");
            break;


    }
?>