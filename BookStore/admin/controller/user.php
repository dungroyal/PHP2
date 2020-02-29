<?php
    $userObj =new USER();
    $action="user";
    if(isset($_GET['act']))
        $action=$_GET['act'];
        switch($action){
            case "user":
                $listUser=$userObj->allUser();
                
                include './../view/admin/user/user.php';
                break;
        }
?>