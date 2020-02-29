<?php
    $action="home";
    if(isset($_GET['act']))
        $action=$_GET['act'];
        switch($action){
            case "home":
                include './../view/admin/home.php';
                break;
        }

        
?>