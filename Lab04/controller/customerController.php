<?php
    include 'model/customer.php';

    $temp='customer';
    if (isset($_GET['idUser'])) {
        $idCustm=$_GET['idUser'];
    }    

    if (isset($_GET['act'])) {
        $temp=$_GET['act'];
    }

    switch ($temp) {
        case 'customer':
            $user= new customer();
            $custm=$user->getAllCustomer();
            include "view/customer/customer.php";
            break;

        case 'addCustomer':
            if (isset($_POST['addCustomer'])&&$_POST['addCustomer']) {    

                $error=false;

                $first_name=$_POST['first_name'];
                $temp=preg_match("/^[a-zA-Z]*$/",$first_name);
                if ($temp==0) {
                    $error_first_name= "Tên chỉ được nhập chữ HOA và chữ thường.";
                    $error=true;
                }

                $last_name=$_POST['last_name'];
                $temp=preg_match("/^[a-zA-Z\s]*$/",$last_name);
                if ($temp==0) {
                    $error_last_name= "Tên chỉ được nhập chữ HOA và chữ thường.";
                    $error=true;
                }
                
                $phone=$_POST['phone'];
                $temp=preg_match("/[\d]{10}/",$phone);
                if ($temp==0) {
                    $error_phone= "Số điện thoại có 10 số";
                    $error=true;
                }
                

                $email=$_POST['email'];
                $temp=preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email);
                if ($temp==0) {
                    $error_email= "Địa chỉ Email không hợp lệ";
                    $error=true;
                }

                $gender=$_POST['gender'];
                $addresss=$_POST['addresss'];
                $city=$_POST['city'];
                $date_add=$_POST['date'];
                if ($first_name!="") {
                    $p= new CUSTOMER();
                $p->insertCustomer($first_name,$last_name,$gender,$phone,$email,$addresss,$city,$date_add);
                $custm=$p->getAllCustomer();
                header('Location: index.php?ctrller=customer');
                }
                
            }       

                include "view/customer/addCustomer.php";
        break;

        case 'edit':
            if (isset($_POST['addCustomer'])&&$_POST['addCustomer']) {    

                $error=false;

                $first_name=$_POST['first_name'];
                $temp=preg_match("/^[a-zA-Z]*$/",$first_name);
                if ($temp==0) {
                    $error_first_name= "Tên chỉ được nhập chữ HOA và chữ thường.";
                    $error=true;
                }

                $last_name=$_POST['last_name'];
                $temp=preg_match("/^[a-zA-Z\s]*$/",$last_name);
                if ($temp==0) {
                    $error_last_name= "Tên chỉ được nhập chữ HOA và chữ thường.";
                    $error=true;
                }
                
                $phone=$_POST['phone'];
                $temp=preg_match("/[\d]{10}/",$phone);
                if ($temp==0) {
                    $error_phone= "Số điện thoại có 10 số";
                    $error=true;
                }
                

                $email=$_POST['email'];
                $temp=preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email);
                if ($temp==0) {
                    $error_email= "Địa chỉ Email không hợp lệ";
                    $error=true;
                }

                $gender=$_POST['gender'];
                $addresss=$_POST['addresss'];
                $city=$_POST['city'];
                $date_add=$_POST['date'];

                $p= new CUSTOMER();
                $p->insertCustomer($first_name,$last_name,$gender,$phone,$email,$addresss,$city,$date_add);
                $custm=$p->getAllCustomer();
            } 

            include "view/product/updateCustomer.php";
        break;

        

        case 'delete':            
            $p= new customer();
            $p->delCustomer($idCustm);
            $custm=$p->getAllCustomer();            
            include "view/customer/customer.php";
        break;
    }
    
?>