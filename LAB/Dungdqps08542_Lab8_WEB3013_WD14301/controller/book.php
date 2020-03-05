<?php
include_once 'model/book.php';
    $action="index";
    $bookobj=new BOOK();
    if(isset($_GET['act']))
        $action=$_GET['act'];
    switch($action)
    {
        case 'index':
            $listFlight=$bookobj->getAllFlights();

            if (isset($_POST['btn_book']) && $_POST['btn_book']) {
                $name=$_POST['name'];
                $flight=$_POST['flight'];
                $bookobj->insertPassengers($name,$flight);
                header("Location: index.php?ctrller=book&act=book");
            }

            include "view/site/book.php";
            break;

        case 'book':
            include "view/site/tb.php";
            break;

    }
?>