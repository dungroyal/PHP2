<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lab1 | Dungdqps08542</title>
    <link rel="stylesheet" href="view/style/style.css">
</head>

<body>
    <header>
        <ul>
            <a href="index.php?ctl=hcn" class="select">
                <li>Tính diện tích hình chử nhật</li>
            </a>
            <a href="index.php?ctl=employee" class="select">
                <li>Nhân Viên</li>
            </a>
        </ul>
    </header>

    <?php
        $ctl="hcn";
        if (isset($_GET['ctl'])){
            $ctl=$_GET['ctl'];
        }        
        include 'controller/'.$ctl.'Controller.php';
    ?>

</body>

</html>
