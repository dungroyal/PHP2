  <?php
    ob_start();
    session_start();
    include_once '../model/user.php';
    $userObj=new USER();
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../assets/custom/loginADM/style.css">
    <link rel="stylesheet" href="../assets/custom/loginADM/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
              <center><img src="../assets/uploads/BookStore.jpg" width="60%" alt=""></center> <br>
            <h5 class="card-title text-center"><strong>ĐĂNG NHẬP <br> DASHBOARD BOOKSTORE</strong></h5>
            <form class="form-signin" action="login.php" method="post">
              <div class="form-label-group">
                <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Địa chỉ Email" required autofocus autocomplete="no">
                <label for="inputEmail">Địa chỉ Email</label>
              </div>

              <div class="form-label-group">
                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Mật khẩu" required>
                <label for="inputPassword">Mật khẩu</label>
              </div>
              <input type="submit" class="btn btn-lg btn-primary btn-block text-uppercase" name="btn_login_admin" value="Đăng nhập">

            </form>

            <?php
              if (isset($_POST['btn_login_admin']) && $_POST['btn_login_admin']) {
                $emai=$_POST['email'];
                $password=$_POST['password'];
                if ($userObj->checkuser($emai,$password,1)) {
                  $_SESSION['idAdmin']=$emai;
                  header('Location: index.php');
              }else{
                  echo "<center style='font-weight:bold;font-size:20px;color:red;'>Sai tên đăng nhập hoặc mật khẩu</center>";
              }
                
            }
            ?>

          </div>
        </div>
      </div>
    </div>
  </div>
</body>


<script type="text/javascript" src="../assets/custom/loginADM/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="../assets/custom/loginADM/jquery.slim.min.js"></script>
</html>