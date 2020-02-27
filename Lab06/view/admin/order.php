<div class="card">
    <div class="card-header">
        Danh Đơn hàng
    </div>
<table class="table table-striped table-condensed">
    <thead>
        <tr>
            <th>&nbsp;</th>
            <th >ID</th>
            <th >Tên</th>
            <th >Email</th>
            <th >Địa chỉ</th>
            <th >Số điện thoại</th>
            <th >Action</th>
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($newOrder as $order) {        
            echo '
                <td>&nbsp;</td>
                <td><a href="Editcustomer">'.$order['id'].' </a></td>
                <td>'.$order['full_name'].'</td>
                <td>'.$order['address'].'</td>
                <td>'.$order['email'].'</td>
                <td>'.$order['phone'].'</td>
                <td><a href="index.php?ctrller=order&act=sendmail&idCustomer='.$order['id'].'"><button class="btn btn-danger">Gửi mail</button></a></td>
                
                <td>&nbsp;</td>
                </tr>
            ';
        }    
        ?>
    </tbody>
</table>

</div>

