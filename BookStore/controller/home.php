<?php
    include_once 'model/catalog.php';
    include_once 'model/user.php';

    $userObj=new USER();

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
                    
                    if ($userObj->checkuser($email,$pass,0)) {
                        $_SESSION['user']=$email;
                        header('Location: index.php');
                    }else{
                        $error_login="*** Email hoặc mật khẩu không đúng ***";
                    }
                }
                include './view/site/login.php';
                break;

            case "logout":
                unset($_SESSION['user']);
                header('Location: index.php');
                break;

            case "change-password":
                if (isset($_POST['change_password'])&&$_POST['change_password']) {
                    $email=$_POST['email'];
                    $oldpass=$_POST['oldpass'];
                    $newPass=$_POST['newpass'];
                    $reNewPass=$_POST['re_newpass'];

                    if ($userObj->checkuser($email,$oldpass,0)) {
                        if ($newPass==$reNewPass) {
                            $userObj->updatePassword($email,$newPass);
                            header("Location: index.php");
                        }else{
                            $error_change_password="*** Mật khẩu không trùng khớp ***";
                        }
                    }else{
                        $error_change_password="*** Mật khẩu hoặc tên đăng nhập cũ không chính sát ***";
                    }
                }
                include './view/site/change-password.php';
                break;
                

            case "register":
                if (isset($_POST['register_user'])&&$_POST['register_user']) {
                    $name=$_POST['name'];
                    $email=$_POST['email'];
                    $pass=$_POST['pass'];
                    $re_pass=$_POST['re_pass'];
                    
                    if ($pass != $re_pass) {
                        $error_register="*** Mật khẩu không trùng khớp ***";
                    }else {
                        $userObj->insert_user($name,$email,$pass,0);
                        header("Location: index.php?ctrller?home&act=login");
                    }
                }

                include './view/site/register.php';
                break;
        }
?>