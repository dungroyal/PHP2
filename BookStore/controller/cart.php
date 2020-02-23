<?php
   include_once 'model/cartservice.php';
   include_once 'model/customer.php';
   $cartobj=new CARTSERVICE();
   $customerObj=new CUSTOMER();

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

      case 'checkout':
         if (isset($_POST['checkout']) && $_POST['checkout']) {
            $name=$_POST['name'];
            $email=$_POST['email'];
            $add=$_POST['address'];
            $phone=$_POST['phone'];
            $tongcong=$_POST['tongcong'];
            $dateadd=date('Y-m-d H:i:s');
            $cid=$customerObj->insert($name,$email,$add,$phone,$dateadd,0);
            $cartobj->insertDetail($cid);
            $cartobj->clearCart();
            
            header("location:index.php?ctrller=home");
         }
         include './view/site/checkout.php';
         break;
         
      
      default:
      include './view/site/cart.php';
         break;
   }
   
?>