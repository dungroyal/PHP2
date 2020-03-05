<h3>Giỏ hàng của bạn</h3>
<table class="table">
        <thead>
            <tr>
             <th>Hình ảnh</th>
              <th>Tên sản phẩm</th>
              <th>Số lượng</th>
              <th>Giá</th>
              <th>Thành Tiền</th>
            </tr>
        </thead>
        <tbody>
        <?php
        if (isset($_SESSION["cart_items"])) {
            foreach($items as $item)
            {
                echo ' <tr>
                <td><img src="assets/images/'.$item['image_link'].'" width="50px"></td>
                <td>'.$item['name'].'</td>
                <td>'.$item['quantity'].'</td>
                <td>'.number_format($item['price']).' đ</td>
                <td>'.number_format($item['quantity']*$item['price']).' đ</td>
              </tr>';
            }
            
        }else{
            echo "
                <br><br><br><br><br><br>
            <h3><center>Chưa có sản phẩm nào trong giỏ hàng!</center></h3>
                <br><br><br><br><br><br>
            ";
        }
        ?>
      
        </tbody>
    </table>
  
<h3>Thông tin người đặt hàng</h3>
<form method="post" action="index.php?ctrller=cart&act=checkout">
    <div class="row">
        <div class="col-md-2">
            Họ va ten
        </div>
        <div class="col-md-10">
            <input type="text" name="fullName" class="form-control" required/>
        </div>
    </div>
    <br/>
    <div class="row">
        <div class="col-md-2">
            Email:
        </div>
        <div class="col-md-10">
            <input type="email" name="email" required/>
        </div>
    </div>
    <br/>
    <div class="row">
        <div class="col-md-2">
            Địa chỉ:
        </div>
        <div class="col-md-10">
            <input type="text" name="address" class="form-control" required/>
        </div>
    </div>
    <br/>
    <div class="row">
        <div class="col-md-2">
            So điện thoại:
        </div>
        <div class="col-md-10">
            <input type="text" name="phone" class="form-control" required/>
        </div>
    </div>
    <br/>
    <div class="row">
        <div class="col-md-12">
            <button type="submit" name="submit" class="btn btn-primary">
                Đặt hàng
            </button>
        </div>
    </div>
    <br/>
</form>


