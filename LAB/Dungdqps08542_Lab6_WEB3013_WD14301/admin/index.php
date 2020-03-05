<?php
session_start();
include '../view/admin/header.php';
    //load controler
    $ctrl="home";
    if(!isset($_SESSION['admin']))
    {
        $ctrl="user";
    }
    elseif(isset($_GET['ctrller']))
    {
        $ctrl=$_GET['ctrller'];
    }
     
    include 'controller/'.$ctrl.'.php'; 

    //end controller
include '../view/admin/footer.php';

?>