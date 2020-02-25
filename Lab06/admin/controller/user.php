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
        }
?>