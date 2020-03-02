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
                    $target_file ="./../assets/uploads/". $image1;
                    move_uploaded_file($_FILES['image1']['tmp_name'], $target_file);
                }

                if ($_FILES['listImages']['name']!="") {
                    $listImages="";
                    foreach ($_FILES['listImages']['name'] as $key=>$valuse) {
                        $image2=basename($_FILES['listImages']['name'][$key]);
                        $target_file ="./../assets/uploads/".$image2;
                        move_uploaded_file($_FILES['listImages']['tmp_name'][$key], $target_file);
                        $listImages.=",".$image2;
                    }
                    $listImages=ltrim($listImages,",");
                }

                $sp=new SANPHAM();
                $sp->insertSanpham($nameSP,$image1,$listImages);
                $sanp=$sp->getAllSanpham();
                header('location: index.php?ctrller=sanpham');
            }
            include "view/sanpham/insertSanpham.php";
        break;

        case 'deleteSP':
            $masp=$_GET['masp'];
            $sp= new SANPHAM();
            $sp->delSanpham($masp);
            $sanp=$sp->getAllSanpham();      
            header("location:index.php?ctrller=sanpham");
        break;
        
    }
?>