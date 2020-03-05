<?php
include_once 'model/book.php';

    $action="index";
    $Bookobj=new BOOK();
    if(isset($_GET['act']))
        $action=$_GET['act'];

    switch($action)
    {
        case 'index':
            $listFlight=$Bookobj->getAllFlights();
            if (isset($_POST['btn_addFlights']) && $_POST['btn_addFlights']) {
                $from=$_POST['from'];
                $to=$_POST['to'];
                $duration=$_POST['duration'];

                $Bookobj->insertFlights($from,$to,$duration);
                header("Location: index.php?ctrller=flights");
            }
            include "view/site/flights.php";
            break;
    }
?>