<div class="card">
    <div class="card-header">
        Danh sách sản phẩm
    </div>

</div>
  <table class=" table">
      <thead>
          <tr>
              <th>Ảnh</th>
              <th>Tên sản phẩm</th>
              <th>Giá sản phẩm </th>
              <th>Lượt xem</th>
              <th>Đã bán</th>
              <th>Acion</th>
          </tr>
      </thead>
      <tbody>

        <?php
                foreach ($sp as $pro) {
                  echo'
                    <tr>
                      <td>
                        <img src="../assets/images/'.$pro['image_link'].'" width="50px">
                      </td>
                      <td><a href="index.php?ctrller=products&idProduct='.$pro['name'].'">'.$pro['name'].'</a> </td>
                      <td>'.number_format($pro['price']).' đ</td>
                      <td>'.$pro['view'].'</td>
                      <td>'.$pro['buyed'].'</td>
                      <td><a href="#">Xoá</a> | <a href="#">Sửa</a></td>
                    </tr>
                  ';
                }
            ?>
    </tbody>
</table>
</div>
</div>