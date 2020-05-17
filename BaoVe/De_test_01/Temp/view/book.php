<div class="container">
    <form method="post" action="index.php">
      <div class="form-group">
        <label>Chọn chuyến bay</label>
        <select class="form-control" name="flight" required>
          <option value="" selected>--- Chọn chọn chuyến ---</option>
          <?php
            foreach ($getAllFlights as $fls) {
              echo '
                <option value="'.$fls['id'].'">'.$fls['origin'].' Đến '.$fls['destination'].'</option>
              ';
            }
          ?>
        </select>
      </div>
      <div class="form-group">
        <label>Nhập tên của bạn</label>
        <input type="text" class="form-control"  placeholder="Input your name" name="name" required>
      </div>
      <div class="form-group">
      <input type="submit"  class="btn btn-primary" name="btnBook" value='Đăng ký'>
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
                      foreach ($getAllPassengers as $Passg) {
                        echo '
                        <tr>
                          <td>'.$Passg['id'].'</td>
                          <td>'.$Passg['name'].'</td>
                          <td>'.$Passg['origin'].'</td>
                          <td>'.$Passg['destination'].'</td>
                          <td>'.$Passg['duration'].' Phút</td>
                        </tr>
                        ';
                      }
                    ?>
            </tbody>
        </table>
      </div>
    </div>
</div>
