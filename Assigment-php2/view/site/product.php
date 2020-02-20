<h4>Sản phẩm theo danh mục:</h4>
<div class="row" style="padding-left:10px">

    <?php
        foreach ($pro as $p) {
            echo'
                <div class="card col-3">
                <img src="assets/images/'.$p['image_link'].'" class="card-img-top" height="300px">
                <div class="card-body">
                    <h5 class="card-title">'.$p['name'].'</h5>
                    <a href="#" class="btn btn-primary">Chi tiết</a>
                    <a href="?ctrller=cart&act=addtocart&idPro='.$p['id'].'" class="btn btn-danger">Mua hàng</a>
                </div>
            </div>
            ';
        }
    ?>
</div>
