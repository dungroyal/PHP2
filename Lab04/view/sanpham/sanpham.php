<div class="card">
    <div class="card-header">
        Danh Sản Phẩm
    </div>
    <br>
        <center><td><a href="?ctrller=sanpham&act=insertSanpham"><button class="btn btn-danger">Thêm Sản Phẩm Mới</button></a></td></center>
    <br>
<table class="table table-striped table-condensed">
    <thead>
        <tr>
            <th>&nbsp;</th>
            <th >Mã SP</th>
            <th >Tên sản phẩm</th>
            <th >Ảnh chính</th>
            <th >Ảnh phụ</th>
            <th >Hành động</th>
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($sp as $cus) {    

            $string= $cus['anhphu'];
            $MangAnhPhu=explode(",", $string);
            echo '          
                <th>&nbsp;</th>
                <td><a href="#">'.$cus['masp'].'</a></td>
                <td><a href="#">'.$cus['tensp'].'</a></td>
                <td><a href="#"><img src="assets/images/'.$cus['anhchinh'].'" class="cardImage" alt="Customer Image" width="50px" /></a></td>
                <td>
                <a href="#">
                ';
                    foreach ($MangAnhPhu as $anh) {
                        echo'
                            <img src="assets/images/'.$anh.'" class="cardImage" alt="Customer Image" width="50px" />  
                        ';
                    }
                echo'
                </a>
                </td>
                <td><a href="index.php?ctrller=customer&act=edit&idUser='.$cus['masp'].'"><button class="btn btn-danger">Sửa</button></a>    <a href="index.php?ctrller=sanpham&act=deleteSP&masp='.$cus['masp'].'"><button class="btn btn-danger">Xoá</button></a></td>
                </tr>
            ';
        }    
        ?>
    </tbody>
</table>

</div>

