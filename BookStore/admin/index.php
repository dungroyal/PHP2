<?php
    ob_start();
    SESSION_START();
    include_once '../model/catalog.php';
    include_once '../model/product.php';
    include_once '../model/customer.php';
    include_once '../model/cartservice.php';
    include_once '../model/user.php';

    if (isset($_SESSION['idAdmin'])) {
        $idAmin=$_SESSION['idAdmin'];
    }
    else{
        header("Location: login.php");
    }
    
    include '../view/admin/header.php';

    $ctrl="home";
    if(isset($_GET['ctrller']))
        $ctrl=$_GET['ctrller'];
    include 'controller/'.$ctrl.'.php';

    include '../view/admin/footer.php';

?>