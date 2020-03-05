<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<form action="index.php?ctrller=customer&act=addCustomer" method="post" class="form-horizontal" enctype="multipart/form-data">
    <fieldset>

        <!-- Form Name -->
        <legend style="font-size:50px;margin:50px 0px;">
            <center>Thêm Customer</center>
        </legend>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="product_id">Họ</label>
            <div class="col-md-4">
                <input id="product_id" name="first_name" placeholder="Họ" class="form-control input-md"  type="text">
            </div>
            <span class="error_input"><?php if (isset($error_first_name)) echo $error_first_name?></span>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="product_id">Tên</label>
            <div class="col-md-4">
                <input id="product_id" name="last_name" placeholder="Tên" class="form-control input-md"  type="text">
            </div>
            <span class="error_input"><?php if (isset($error_last_name)) echo $error_last_name?></span>
        </div>
        

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="product_name">Giới tính</label>
            <div class="col-md-4">
             <input type="radio" name="gender" value="Nam" checked="checked" > Nam   <input type="radio" name="gender" value="Nữ"> Nữ
            </div>
            <!-- <span class="error_input"><//?php if (isset($error_gender)) echo $error_gender?></span> -->
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="product_id">Số điện thoại</label>
            <div class="col-md-4">
                <input id="product_id" name="phone" placeholder="Số điện thoại" class="form-control input-md"  type="number">
            </div>
            <span class="error_input"><?php if (isset($error_phone)) echo $error_phone?></span>
        </div>
        
        <div class="form-group">
            <label class="col-md-4 control-label" for="product_id">Email</label>
            <div class="col-md-4">
                <input id="product_id" name="email" placeholder="Email" class="form-control input-md"  type="text">
            </div>
            <span class="error_input"><?php if (isset($error_email)) echo $error_email?></span>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="product_id">Địa chỉ</label>
            <div class="col-md-4">
                <input id="product_id" name="addresss" placeholder="Địa chỉ" class="form-control input-md"  type="text">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="product_id">Thành phố</label>
            <div class="col-md-4">
                <input id="product_id" name="city" placeholder="Thành phố" class="form-control input-md"  type="text">
            </div>
        </div>

        <div class="form-group" style="display: none">
            <label class="col-md-4 control-label" for="date_add">Ngày Thêm</label>
            <div class="col-md-4">
                <input name="date" value="<?=$nam;?>-<?=$thang;?>-<?=$ngay;?>" placeholder="Ngày đăng" class="form-control input-md" type="date">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="singlebutton">Thêm Customer</label>
            <div class="col-md-4">
                <input type="submit" value="Lưu lại" name="addCustomer" class="btn btn-primary">
                <a href="index.php"><button class="btn btn-primary">Huỷ bỏ</button></a>
            </div>
        </div>

    </fieldset>
</form>