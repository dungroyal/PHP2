<?php
    class CARTSERVICE {
        function addToCart($idProduct) {
            $i=0;
            $found=false;
            if (!isset($_SESSION['cart_items'])) {
                $_SESSION['cart_items']=array(0=>array("idProduct"=>$idProduct,"quantity"=>1));
            }
            else {
                foreach ($_SESSION['cart_items'] as $items) {
                    $i++;
                        while (list($key, $value) = each($items)) {
                            if ($key=="idProduct" && $value==$idProduct) {
                                array_splice($_SESSION['cart_items'],$i-1,1,array(array("idProduct"=>$idProduct,"quantity"=>$items['quantity']+1)));
                                $found=true;
                            }
                        }
                    }
                if ($found==false) {
                    array_push($_SESSION['cart_items'],array("idProduct"=>$idProduct,"quantity"=>1));
                }
            }
        }

        function deleteCartItems() 
        {
            unset($_SESSION['cart_items']);
            session_unset();
        }

        function ClearCart() 
        {
            unset($_SESSION['cart_items']);
            session_unset();
        }

        function insertDetail($id)
        {
            $customerObj=new CUSTOMER();
            foreach($_SESSION['cart_items'] as $item)
            {
                $customerObj->insertOderDetail($id,$item['idProduct'],$item['quantity']);
            }
        }
    }
