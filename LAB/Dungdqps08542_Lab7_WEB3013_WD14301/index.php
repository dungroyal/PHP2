<!DOCTYPE html>
<html lang="en">
<head>
<title>PHP2 | Lab7</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container">
    <?php 
        //load data header
        include_once 'model/catalog.php';
        $cateObj=new CATALOG();
        $listcate=$cateObj->getAllCatalog();
        include 'view/site/header.php'; 
        //load controler
        $ctrl="home";
        if(isset($_GET['ctrller']))
            $ctrl=$_GET['ctrller'];
        include 'controller/'.$ctrl.'.php'; 

        //end controller

        include 'view/site/footer.php'; 
    ?>
	</div>
   
</body>
</html>