<div class="conten">
    <div class="conten-title"> <p>Tìm số nguyên tố trong khoảng A và B</p></div>
    <div class="conten-form">
        <form action="index.php?act=timSNT" method="post">
            <input type="text" name="soA" placeholder="Nhập số A" required> <br>
            <input type="text" name="soB" placeholder="Nhập số B" required> <br>
            <input type="submit" value="Tính" name="tim">
        </form>
    </div>
    <?php
        if (isset($_GET['act'])) {
            echo $_GET['act'];
            echo'<div class="conten-kq">Số nguyên tố trong khoản từ '.$soA.' đến '.$soB.' là: </div>';
        }
    ?>

</div>