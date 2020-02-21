<?php
   include 'model/cartservice.php';
   $cartobj=new CARTSERVICE();

   $action="cart";

   if (isset($_GET['act'])) {
      $action=$_GET['act'];
   }

   switch ($action) {
      case 'cart':
         include './view/site/cart.php';
         break;

      case 'addToCart':
         if (isset($_GET['idProduct'])) {
            $idProduct=$_GET['idProduct'];
         }
         $cartobj->addToCart($idProduct);
         header('Location: index.php?ctrller=cart');
         break;

      case 'deleteCartItems':
         include './view/site/cart.php';
         break;
      
      default:
      include './view/site/cart.php';
         break;
   }
   
?>