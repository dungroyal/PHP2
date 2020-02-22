<?php
include_once 'product.php';
include_once 'customer.php';

    class CARTSERVICE 
    {

        function addToCart($pro_id) 
        {
            $i=0;
            $found=false;
            if(!isset($_SESSION["cart_items"]))
            {
                $_SESSION["cart_items"]=array(0=>array("pro_id"=>$pro_id, "quantity"=>1));
            }
            else
            {
                foreach($_SESSION["cart_items"] as $item)
                {
                    $i++;
                    while(list($key, $value)=each($item))
                    {
                        if($key=="pro_id" && $value==$pro_id)
                        {
                            array_splice($_SESSION["cart_items"],$i-1,1,array(array("pro_id"=>$pro_id, "quantity"=>$item["quantity"]+1)));
                            $found=true;
                        }
                    }
                }
                if($found==false)
                {
                    array_push($_SESSION["cart_items"],array("pro_id"=>$pro_id, "quantity"=>1));
                }
            }
        }
        function insertDetail($id)
        {
            $customerObj=new CUSTOMER();
            foreach($_SESSION['cart_items'] as $item)
            {
                $customerObj->insertOderDetail($id,$item['pro_id'],$item['quantity']);
            }
        }
        function getCart()
        {
            $productObj=new PRODUCT();
            $items=array();
            foreach($_SESSION['cart_items'] as $item)
            {
                $temp=$productObj->GetProductById($item['pro_id']);
                $temp["quantity"]=$item['quantity'];
                array_push($items,$temp);
            }
            return $items;
        }
        function clearCart() {
         unset($_SESSION['cart_items']);
         session_unset();
        }
    }
?>