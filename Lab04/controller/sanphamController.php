<?php
    include 'model/sanpham.php';
    $temp='sanpham';

    if (isset($_GET['act'])) {
        $temp=$_GET['act'];
    }
    switch ($temp) {
        case 'sanpham':
            $p=new SANPHAM();
            $sp=$p->getAllSanpham();
            include "view/sanpham/sanpham.php";
            break;

        case 'insertSanpham':
            if (isset($_POST['addSanpham'])&&$_POST['addSanpham']) {
                $nameSP=$_POST['nameSP'];

                if ($_FILES['image1']['name']!="") {         
                    $image1= basename($_FILES['image1']['name']);
                    $target_file ="assets/images/". $image1;
                    move_uploaded_file($_FILES['image1']['tmp_name'], $target_file);
                }

                if ($_FILES['image2']['name']!="") {         
                    $image2= basename($_FILES['image2']['name']);
                    $target_file ="assets/images/". $image2;
                    move_uploaded_file($_FILES['image2']['tmp_name'], $target_file);
                }

                $sp=new SANPHAM();
                $sp->insertSanpham($nameSP,$image1,$image2);
                $sanp=$sp->getAllSanpham();
                header('location: index.php?ctrller=sanpham');
            }

            case 'deleteSP':
                $masp=$_GET['masp'];
                $sp= new SANPHAM();
                $sp->delSanpham($masp);
                $sanp=$sp->getAllSanpham();      
                header("location:index.php?ctrller=sanpham");

        break;
        
    }
?>