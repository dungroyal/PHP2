<div class="card">
    <div class="card-header">
        Danh sách sản phẩm
    </div>

    <div class="col-md-4 offset-md-4 mt-5 pt-3">
        <form action="index.php?ctrller=products&act=search" method="post">
            <div class="input-group mb-3">
                <input type="text" name="txt" class="form-control" placeholder="Search ......">
                <input type="submit" class="input-group-append input-group-text" value="Tìm kiếm">
            </div>
        </form>
        <a href="index.php?ctrller=products&act=addnewPro" style="text-decoration: none;" class="input-group-append input-group-text" >Thêm sản phẩm</a> <br>
    </div>

</div>
  <table class=" table">
      <thead>
          <tr>
              <th>Image</th>
              <th>Product</th>
              <th>Code</th>
              <th>Available</th>
              <th>Price </th>
              <th>5 Star Rating</th>
              <th>Acion</th>
          </tr>
      </thead>
      <tbody>

        <?php
                foreach ($sp as $pro) {
                  echo'
                    <tr>
                      <td>
                        <img src="assets/images/'.$pro['imageUrl'].'" width="50px">
                      </td>
                      <td><a href="index.php?ctrller=products&idProduct='.$pro['productId'].'">'.$pro['productName'].'</a> </td>
                      <td>'.$pro['productCode'].'</td>
                      <td>'.$pro['releaseDate'].'</td>
                      <td>'.$pro['price'].'</td>
                      <td>'.$pro['starRating'].'</td>
                      <td><a href="index.php?ctrller=products&act=delete&idProduct='.$pro['productId'].'">Xoá</a> | <a href="index.php?ctrller=products&act=edit&idProduct='.$pro['productId'].'">Sửa</a></td>
                    </tr>
                  ';
                }
            ?>
    </tbody>
</table>
</div>
</div>

