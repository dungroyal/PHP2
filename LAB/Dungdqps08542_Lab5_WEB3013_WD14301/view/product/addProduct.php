<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<form action="index.php?ctrller=products&act=addnewPro" method="post" class="form-horizontal" enctype="multipart/form-data">
    <fieldset>

        <!-- Form Name -->
        <legend style="font-size:50px;margin:50px 0px;">
            <center>Thêm sản phẩm</center>
        </legend>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="product_id">Tên sản phẩm</label>
            <div class="col-md-4">
                <input id="product_id" name="namePro" placeholder="Tên sản phẩm" class="form-control input-md"  type="text">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="product_name">Mã sản phẩm</label>
            <div class="col-md-4">
                <input id="product_name" name="codePro" placeholder="Mã sản phẩm" class="form-control input-md"  type="text">

            </div>
        </div>
        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="percentage_discount">Ngày đăng</label>
            <div class="col-md-4">
                <input name="date" value="<?=$nam;?>-<?=$thang;?>-<?=$ngay;?>" placeholder="Ngày đăng" class="form-control input-md" type="date">
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="stock_alert">Giá</label>
            <div class="col-md-4">
                <input id="stock_alert" name="pricePro" placeholder="Giá" class="form-control input-md" type="number">

            </div>
        </div>

        <!-- Search input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="tutorial">Mô tả</label>
            <div class="col-md-4">
                <input id="tutorial" name="mota" placeholder="Mô tả" class="form-control input-md" type="search">

            </div>
        </div>
        <!-- File Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="filebutton">Hình ảnh</label>
            <div class="col-md-4">
                <input id="filebutton" name="image" class="input-file" type="file" >
            </div>
        </div>
        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="singlebutton">Thêm sản phẩm</label>
            <div class="col-md-4">
                <input type="submit" value="Lưu lại" name="addnewProduct" class="btn btn-primary">
                <a href="index.php"><button class="btn btn-primary">Huỷ bỏ</button></a>
            </div>
        </div>

    </fieldset>
</form>