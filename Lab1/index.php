<?php
    include "view/header.php";

    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        switch ($page) {
            case 'hcn':               
               include "controller/hcnController.php";
                break;
            case 'snt':
                include "view/snt.php";
                break;
                
            default:
                include "controller/hcnController.php";
            break;        
        }
    }else{        
        include "controller/hcnController.php";
    }
?>