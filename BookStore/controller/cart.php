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
         
      case 'checkout':
         if (isset($_POST['checkout']) && $_POST['checkout']) {
            $name=$_POST['name'];
            $tongcong=$_POST['tongcong'];
            $addaccount=$_POST['addaccount'];
            $city=$_POST['city'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];

            if (isset($_POST['addaccount'])) {
               echo "Tạo tài khoản";
            }else{
               echo "Mặc định";
            }


            
         echo "<br>".$name;
         echo "<br>".$tongcong;
         echo "<br>".$addaccount;
         echo "<br>".$city;
         echo "<br>".$email;
         echo "<br>".$phone;
         }

         include './view/site/checkout.php';
         break;
      
      default:
      include './view/site/cart.php';
         break;
   }
   
?>