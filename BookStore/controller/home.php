<?php
    include_once 'model/catalog.php';

    $action="home";
    if(isset($_GET['act']))
        $action=$_GET['act'];
        switch($action){
            case "home":
                $p=new CATALOG();
                $cataParent=$p->getCatalogBy(1,3,0);
                include './view/site/home.php';
                break;

            case "contact":
                include './view/site/contact.php';
                break;

            case "login":
                if (isset($_POST['login_user'])&&$_POST['login_user']) {
                    $email=$_POST['email'];
                    $pass=$_POST['pass'];
                    
                    $_SESSION['user']=$email;
                    
                    $error_login="*** Email hoặc mật khẩu không đúng ***";
                        
                }
                include './view/site/login.php';
                break;

            case "register":
                if (isset($_POST['register_user'])&&$_POST['register_user']) {
                    $email=$_POST['email'];
                    $pass=$_POST['pass'];
                    $re_pass=$_POST['re_pass'];

                    echo $email.'---'.$pass.'---'.$re_pass;

                    if ($pass != $re_pass) {
                        $error_register="*** Mật khẩu không trùng khớp ***";
                    }
                }

                include './view/site/register.php';
                break;
        }
?>