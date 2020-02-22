<h3>Giỏ hàng của bạn</h3>
<table class="table">
        <thead>
            <tr>
             <th>Anh</th>
              <th>Ten SP</th>
              <th>So luong</th>
              <th>Gia</th>
              <th>Thanh tien</th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach($items as $item)
            {
                echo ' <tr>
                <td><img src="assets/images/'.$item['image_link'].'" width="50px"></td>
                <td>'.$item['name'].'</td>
                <td>'.$item['quantity'].'</td>
                <td>'.$item['price'].'</td>
                <td>'.$item['quantity']*$item['price'].'</td>
              </tr>';
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


