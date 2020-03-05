<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<form action="index.php?ctrller=sanpham&act=insertSanpham" method="post" class="form-horizontal" enctype="multipart/form-data">
    <fieldset>

        <!-- Form Name -->
        <legend style="font-size:50px;margin:50px 0px;">
            <center>Thêm sản phẩm</center>
        </legend>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="product_id">Tên sản phẩm</label>
            <div class="col-md-4">
                <input id="product_id" name="nameSP" placeholder="Tên sản phẩm" class="form-control input-md"  type="text">

            </div>
        </div>

        <!-- File Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="filebutton">Hình ảnh chính (1 ảnh)</label>
            <div class="col-md-4">
                <input id="filebutton" name="image1" class="input-file" type="file" >
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="filebutton">Hình ảnh phụ (Nhiều ảnh)</label>
            <div class="col-md-4">
                <input id="filebutton" name="listImages[]" class="input-file" type="file" multiple>
            </div>
        </div>
        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="singlebutton">Thêm sản phẩm</label>
            <div class="col-md-4">
                <input type="submit" value="Lưu lại" name="addSanpham" class="btn btn-primary">
                <a href="index.php"><button class="btn btn-primary">Huỷ bỏ</button></a>
            </div>
        </div>

    </fieldset>
</form>