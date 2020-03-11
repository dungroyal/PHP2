<?php
    include_once 'model/user.php';
    $userObj=new USER();
    $action="index";
        if(isset($_GET['act']))
            $action=$_GET['act'];
        switch($action){
            case "index":
                include '../view/admin/account/login.php';
                break;

            case "login":
                if (isset($_POST['btn_login']) && $_POST['btn_login']) {
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];

                    if ($userObj->checkuser($user,$pass)) {
                        $_SESSION['admin']=$user;
                        header('Location: index.php');
                    }else{
                        echo "<center style='font-weight:bold;font-size:20px;color:red;'>Sai tên đăng nhập hoặc mật khẩu</center>";
                    }
                }
                include '../view/admin/account/login.php';
                break;

            case "changepassword":
                if (isset($_POST['btn-changepassword']) && $_POST['btn-changepassword']) {
                    $username=$_POST['username'];
                    $oldPass=$_POST['oldpass'];
                    $newPass=$_POST['newpass'];
                    $reNewPass=$_POST['re_newpass'];

                    if ($userObj->checkuser($username,$oldPass)) {
                        if ($newPass!="") {
                            $userObj->updatePassword($username,$newPass);
                            header("Location: index.php");
                        }else{
                            echo "<center style='font-weight:bold;font-size:20px;color:blue;'>Chưa nhập mật khẩu mới</center>";
                        }
                        
                    }else{
                        echo "<center style='font-weight:bold;font-size:20px;color:red;'>Sai tên đăng nhập hoặc mật khẩu</center>";
                    }
                }
                include '../view/admin/account/changepassword.php';
                break;

             case "logout":
                unset($_SESSION['admin']);
                header('Location: index.php');
                break;
        }
?>