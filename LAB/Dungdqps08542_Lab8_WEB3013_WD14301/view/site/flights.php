<table class="table">
  <thead>
    <tr>
      <th scope="col">Mã chuyến bay</th>
      <th scope="col">Từ</th>
      <th scope="col">Đến</th>
      <th scope="col">Thời gian bay</th>
    </tr>
  </thead>
  <tbody>
      <?php
        foreach ($listFlight as $items) {
            echo'
            <tr>
                <th scope="row">'.$items['id'].'</th>
                <td>'.$items['origin'].'</td>
                <td>'.$items['destination'].'</td>
                <td>'.$items['duration'].'</td>
            </tr>
            ';

        }
      ?>
  </tbody>
</table>
<hr>

<h3>Thêm chuyến bay</h3>

<!-- 
<form action="index.php?ctrller=flights" method="post">
    
<br><br>
    <label for="name">Từ</label>
    <input type="text" name="from" id="name" required>
    <label for="name">Đến</label>
    <input type="text" name="to" id="name" required> <br>
    <label for="name">Tời gian bay</label>
    <input type="text" name="duration" id="name" required> <br>
    
    <br><br>

    <input type="submit" name="btn_addFlights" value="THÊM CHUYẾN BAY">
    <br><br><br><br>
</form> -->

<form action="index.php?ctrller=flights" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Từ</label>
    <input type="text"  name="from"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Từ">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Đến</label>
    <input type="text" name="to" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Đến">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Thời gian bay</label>
    <input type="text" name="duration" class="form-control" id="exampleInputPassword1" placeholder="Thời gian">
  </div>
  
    <input type="submit" class="btn btn-primary" name="btn_addFlights" value="THÊM CHUYẾN BAY">
</form>
<br>
<br>
<br>
<br>