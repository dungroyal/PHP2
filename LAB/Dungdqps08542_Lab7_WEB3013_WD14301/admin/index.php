<?php
    ob_start();
    session_start();
    include '../view/admin/header.php';
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

    include '../view/admin/footer.php';
?>