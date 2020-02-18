<?php
    include 'model\sntModel.php';
    
    if (isset($_GET['act'])) {
        $soA=$_POST['soA'];
        $soB=$_POST['soB'];
    }

    include "view/snt.php";
?>