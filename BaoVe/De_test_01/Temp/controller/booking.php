<?php
    include 'model/flights.php';
    include 'model/passengers.php';
    $FL=new FLIGHT();
    $Passg=new PASSENGER();
    $action="index";
    if(isset($_GET['act']))
        $action=$_GET['act'];
        switch($action){
            case "index":
                $getAllFlights=$FL->getAllflights();

                if (isset($_POST['btnBook'])&&$_POST['btnBook']) {
                    $name=$_POST['name'];
                    $idFlights=$_POST['flight'];
                    $Passg=new PASSENGER();
                    $Passg->insertPG($name,$idFlights);
                    header('Location: index.php');
                }

                $getAllPassengers=$Passg->getAllPassengers();
                include 'view/book.php';
                break;

            case "add":
                
                $name=$_POST['name'];
                $idFlights=$_POST['flight'];
                $Passg=new PASSENGER();
                $Passg->insertPG($name,$idFlights);
                header('Location: index.php');
                
                $getAllPassengers=$Passg->getAllPassengers();
                include 'view/book.php';
                break;
        }
?>