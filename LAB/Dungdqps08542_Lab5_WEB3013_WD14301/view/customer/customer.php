<div class="card">
    <div class="card-header">
        Danh Khách Hàng
    </div>
    <br>
        <center><td><a href="?ctrller=customer&act=addCustomer"><button class="btn btn-danger">Thêm Customer</button></a></td></center>
    <br>
<table class="table table-striped table-condensed">
    <thead>
        <tr>
            <th>&nbsp;</th>
            <th >Tên</th>
            <th >Địa chỉ</th>
            <th >Số điện thoại</th>
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($custm as $cus) {        
            $gender=$cus['gender']=="Nam"?"nam":"nu";
            echo '
                <td><a href="customeredit">            
                <img src="assets/images/'.$gender.'.png" class="cardImage" alt="Customer Image" width="50px" /></a></td>
                <td><a href="Editcustomer">'.$cus['first_name'].' '.$cus['last_name'].'</a></td>
                <td>'.$cus['address'].', '.$cus['city'].'</td>
                <td><a href="customerorder" class="btn-link">'.$cus['phone'].'</a>
                </td>
                <td><a href="index.php?ctrller=customer&act=edit&idUser='.$cus['id'].'"><button class="btn btn-danger">Sửa</button></a></td>
                <td><a href="index.php?ctrller=customer&act=delete&idUser='.$cus['id'].'"><button class="btn btn-danger">Xoá</button></a></td>
                </tr>
            ';
        }    
        ?>
    </tbody>
</table>

</div>

