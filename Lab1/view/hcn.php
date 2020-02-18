<div class="conten">
    <div class="conten-title"> <p> Hình chữ nhật</p></div>
    <div class="conten-form">
        <form action="index.php?act=tinhtoan" method="post">
            <input type="text" name="chieudai" placeholder="Nhập chiều dài" required> <br>
            <input type="text" name="chieurong" placeholder="Nhập chiều rộng" required> <br>
            <input type="submit" value="Tính" name="tinhtoan">
        </form>
    </div>
    <?php
        if (isset($_GET['act'])&& $_GET['act']='tinhtoan') {
            echo'<div class="conten-kq">Diện tích hình chữ nhật: '.$chieudai.' x '.$chieurong.' = '.$dientich.'</div>';
        }
    ?>

</div>