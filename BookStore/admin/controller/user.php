<?php
    $action="user";
    if(isset($_GET['act']))
        $action=$_GET['act'];
        switch($action){
            case "user":
                
                include './../view/admin/user/user.php';
                break;
        }
?>