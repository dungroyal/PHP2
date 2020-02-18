<?php
    $action="cart";
    if(isset($_GET['act']))
    {
        $action=$_GET['act'];
    }
    switch($action)
    {
        case 'cart':
            include 'view/site/cart.php';
            break;
        case 'addtocart':
           
        case 'checkout':
            

    }
?>