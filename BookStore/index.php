<?php
    ob_start();
    SESSION_START();
    include_once 'model/catalog.php';
    include_once 'model/product.php';
    $cata=new CATALOG();
    $listCata=$cata->getAllCatalog();

    include 'view/site/header.php';

    $ctrl="home";
    if(isset($_GET['ctrller']))
        $ctrl=$_GET['ctrller'];
    include 'controller/'.$ctrl.'.php';

    include 'view/site/footer.php';

?>