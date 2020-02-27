<html>
<head>
    <title>PHP2-Demo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
  <div class="container">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?ctrller=catalog">Danh Mục</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?ctrller=product">Sản Phẩm</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?ctrller=order">Đơn hàng</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?ctrller=mail">MAIL</a>
        </li>
        <?php
          if(isset($_SESSION["admin"]))
          {
            echo '<li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              '.$_SESSION["admin"].'
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="index.php?ctrller=user&act=logout">Đăng xuất</a>
              <a class="dropdown-item" href="index.php?ctrller=user&act=changepassword">Đổi mật khẩu</a>
            </div>
          </li>';
           
          }
           
        ?>
       
      </ul>
    </nav>