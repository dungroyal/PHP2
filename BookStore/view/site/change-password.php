    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="index.php"><i class="fa fa-home"></i> Trang chủ</a>
                        <span>Đổi mật khẩu</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Form Section Begin -->

    <!-- Register Section Begin -->
    <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="register-form">
                        <h2>Đổi mật khẩu</h2>
                        <form action="index.php?ctrller=home&act=change-password" method="post">
                            <div class="group-input">
                                    <label for="username">Địa chỉ Email của bạn *</label>
                                    <input type="email" name="email" value="<?=$_SESSION['user'];?>" id="username" required>
                                </div>
                                <div class="group-input">
                                    <label for="pass">Mật khẩu cũ *</label>
                                    <input type="password" name="oldpass" id="pass" required>
                                </div>
                                <div class="group-input">
                                    <label for="pass">Mật khẩu mới *</label>
                                    <input type="password" name="newpass" id="pass" required>
                                </div>
                                <div class="group-input">
                                    <label for="con-pass">Nhập lại mật khẩu mới *</label>
                                    <input type="password" name="re_newpass" id="con-pass" required>
                                </div>
                                <input type="submit" value="Đổi Mật Khẩu" name="change_password" class="site-btn register-btn">
                                <br>
                                <br>
                                <h5><center><strong><?php if (isset($error_change_password)) echo $error_change_password ?></strong></center></h5>
                        </form>
                        <div class="switch-login">
                            <a href="?ctrller?home" class="or-login">Quay lại</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Register Form Section End -->
    
    <!-- Partner Logo Section Begin -->
    <div class="partner-logo">
        <div class="container">
            <div class="logo-carousel owl-carousel">
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-1.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-2.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-3.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-4.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-5.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Partner Logo Section End -->
