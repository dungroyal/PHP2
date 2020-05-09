<?php
    include 'model/flights.php';
    include 'model/passengers.php';
    $FL=new FLIGHT();
    $PG=new PASSENGER();

    $action="index";

    if(isset($_GET['act']))
        $action=$_GET['act'];
        switch($action){
            case "index":
                $allFlights=$FL->getAllflights();
                $allPassengers=$PG->getAllPassengers();
                include 'view/book.php';
                break;
        }

?>