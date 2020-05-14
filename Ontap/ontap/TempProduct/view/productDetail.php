<div class="container">
    <div class="card">
      <div class="card-header">
        Chi tiet sản phẩm
      </div>
      <div class="card-body">
          <div class="row">
            <div class="col-6">
                Product:<?=$proById['productName'];?><br>
                Code: <?=$proById['productCode'];?><br>
                Available: <?=$proById['releaseDate'];?><br>
                Price: $<?=$proById['price'];?><br>
                5 Star Rating: <?=$proById['starRating'];?><br>
            </div>
            <div class="col-6">
              <img src="view/images/<?=$proById['imageUrl'];?>" width="300px">';
            </div>
          </div>
          
      </div>
    </div>
</div>
