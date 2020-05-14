<div class="container">
  <div class="card">
    <div class="card-header">
      Danh sách sản phẩm
    </div>
    <div class="card-body">
        <table class="table">
          <thead>
              <tr>
                <th>Images</th>
                <th>Product</th>
                <th>Code</th>
                <th>Available</th>
                <th>Price </th>
                <th>5 Star Rating</th>
              </tr>
          </thead>
          <tbody>
          <?php
          foreach ($allProduct as $pro) {
            echo '
                <tr>
                  <td><img src="view/images/'.$pro['imageUrl'].'" width="50px"></td>
                  <td>
                    <a href="?act=detail&idProduct='.$pro['productId'].'">'.$pro['productName'].'</a>
                  </td>
                  <td>'.$pro['productCode'].'</td>
                  <td>'.$pro['productName'].'</td>
                  <td>'.$pro['price'].'</td>
                  <td>'.$pro['starRating'].'</td>
                </tr>
            ';
          }
          ?>
            
          </tbody>
      </table>
    </div>
  </div>
</div>
