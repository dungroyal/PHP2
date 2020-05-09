<div class="container">
    <form method="post" action="#">
      <div class="form-group">
        <label>Chọn chuyến bay</label>
        <select class="form-control" name="flight">
          <option value="" selected>--- Chọn chọn chuyến ---</option>
          <?php
            foreach ($allFlights as $fl) {
              echo '
                <option value="'.$fl['id'].'">'.$fl['origin'].' Đến '.$fl['destination'].'</option>
              ';
            }
          ?>
        </select>
      </div>
      <div class="form-group">
        <label>Nhập tên của bạn</label>
        <input type="text" class="form-control"  placeholder="input your name" name="name">
      </div>
      <div class="form-group">
      <button type="submit" class="btn btn-primary" name="btnBook">Đăng ký</button>
      </div>
    </form>
    <div class="card">
      <div class="card-header">
        Danh sách hành khách đã đăng ký bay
      </div>
      <div class="card-body">
          <table class="table">
            <thead>
                <tr>
                  <th>Mã khach</th>
                  <th>Tên hành khách</th>
                  <th>Xuất phát</th>
                  <th>Điểm đến</th>
                  <th>Thời lượng</th>
                </tr>
            </thead>
            <tbody>
                    <?php
                      foreach ($allPassengers as $PG) {
                        echo '
                        <tr>
                          <td>'.$PG['id'].'</td>
                          <td>'.$PG['name'].'</td>
                          <td>'.$PG['origin'].'</td>
                          <td>'.$PG['destination'].'</td>
                          <td>'.$PG['duration'].' Phút</td>
                        </tr>
                        ';
                      }
                    ?>
            </tbody>
        </table>
      </div>
    </div>
</div>
