<?php
$action="index";
if(isset($_GET['act']))
    $action=$_GET['act'];
switch($action){
    case "index":
        include '../view/admin/home.php';
        break;
}

?>