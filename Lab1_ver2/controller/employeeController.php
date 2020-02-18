<?php
    include 'model\employeeModel.php';
    //Sử lý dữ liệu
    $em_a=new EMPLOYEE('Đoàn Quốc Dũng','Dungdqps08542@gmail.com','Culi');
    $em_b=new EMPLOYEE('Lê Nhật Hào','Haops08542@gmail.com','Culi');
    $em_c=new EMPLOYEE('Nguyễn Hậu','Haups08542@gmail.com','Culi');
    //Load
    include "view/employee.php";
?>