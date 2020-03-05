<form action="index.php?ctrller=book" method="post">
    <br><br><br><br>
    <label for="flight">Chọn chuyến bay</label>
    <select id="flight" name="flight" required>
        <?php
            foreach ($listFlight as $flight) {
                echo'
                    <option value="'.$flight['id'].'">Từ '.$flight['origin'].' Đến '.$flight['destination'].'</option>
                ';
            }
        ?>
    </select>
    <br><br>

    <label for="name">Tên khách hàng</label>
    <input type="text" name="name" id="name" required>
    
    <br><br>

    <input type="submit" name="btn_book" value="ĐẶT VÉ">
    <br><br><br><br>
</form>