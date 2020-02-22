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
        $u=$_POST['username'];
        $p=$_POST['password'];
        if ($userObj->checkLogin($u,$p)) {
            $_SESSION['admin']=$u;
        }
        header('Location: index.php?ctrl=home');
        break;
}

?>