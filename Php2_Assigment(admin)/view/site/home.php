<h4>Sản phẩm xem nhiều nhất</h4>
<div class="row" style="padding-left:10px">
<?php
    foreach($viewLot as $p)
    {
        echo '<div class="card col-3">
        <img src="assets/images/'.$p['image_link'].'" class="card-img-top" height="300px">
        <div class="card-body">
            <h5 class="card-title">'.$p['name'].'</h5>
            <a href="#" class="btn btn-primary">Chi tiết</a>
            <a href="index.php?ctrller=cart&act=addtocart&proid='.$p['id'].'" class="btn btn-danger">Mua hàng</a>
        </div>
    </div>';
    }
?>
</div>
<h4>Sản phẩm bán nhiều nhất</h4>
<div class="row">
    <?php
        foreach($buyLot as $p)
        {
            echo '<div class="card col-3">
            <img src="assets/images/'.$p['image_link'].'" class="card-img-top" height="300px">
            <div class="card-body">
                <h5 class="card-title">'.$p['name'].'</h5>
                <a href="#" class="btn btn-primary">Chi tiết</a>
                <a href="index.php?ctrller=cart&act=addtocart&proid='.$p['id'].'" class="btn btn-danger">Mua hàng</a>
            </div>
        </div>';
        }
    ?>
    
</div>