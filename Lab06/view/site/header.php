    <header>
      <img src="assets/images/banner.jpg">
    </header>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php?ctrller=home">Trang chu</a>
        </li>
        <?php
          foreach($listcate as $cate)
          {
            echo ' <li class="nav-item">
            <a class="nav-link" href="index.php?ctrller=product&act=view&cateId='.$cate['id'].'">'.$cate['name'].'</a>
          </li>';
          }
        ?>
       
        <li class="nav-item">
          <a class="nav-link" href="index.php?ctrller=cart">Your cart</a>
        </li>
      </ul>
    </nav>