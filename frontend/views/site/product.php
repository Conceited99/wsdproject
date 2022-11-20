<?php

use yii\helpers\Html;

?>
<nav class="product-filter">

<h1>Products</h1>

<div class="sort">

  <div class="collection-sort">
    <label>Filter by:</label>
    <select>
      <option value="/">All Products</option>
    </select>
  </div>

  <div class="collection-sort">
    <label>Sort by:</label>
    <select>
      <option value="/">Featured</option>
    </select>
  </div>

</div>

</nav>
<!-- <style>
    .product-filter {
        display: flex;
    }
    .product-filter h1 {
        flex-grow: 1;
    }
    .sort {
        display: flex;
    }
    .collection-sort {
         display: flex;
        flex-direction: column;
    }
    .container {
        max-width: 1000px;
         margin:  auto;
        padding: 5px;
         display: run-in;
    }
    .left-column {
  width: 65%;
  display: flex;
}
 
.right-column {
  width: 35%;
  margin-top: 60px;
}
 .left-column img {
  width: 100%;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
  transition: all 0.3s ease;
} 
  
.left-column img.active {
  opacity: 1;
}
.product-description {
  border-bottom: 1px solid #E1E8EE;
  margin-bottom: 20px;
}
.product-description h1 {
  font-weight: 300;
  font-size: 52px;
  color: #43484D;
  letter-spacing: -2px;
}
.product-description p {
  font-size: 16px;
  font-weight: 300;
  color: #86939E;
  line-height: 24px;
}
.product-price {
  display: flex;
  align-items: center;
}
.product-price span {
  font-size: 26px;
  font-weight: 300;
  color: #43474D;
  margin-right: 20px;
}
@media (max-width: 940px) {
  .container {
    flex-direction: column;
    margin-top: 60px;
  }
 
  .left-column,
  .right-column {
    width: 100%;
  }
 
  .left-column img {
    width: 300px;
    right: 0;
    top: -65px;
    left: initial;
  }
}
 
@media (max-width: 535px) {
  .left-column img {
    width: 220px;
    top: -85px;
  }
}
 
</style> -->
<link rel="stylesheet" href="awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

<body>
  <div class="content-body">
    <div class="row">
      <div class="list-view">
        <div class="col-lg-4 col-md-6 mb-4" style = "width: 100%;">
          <?php
            foreach ($data as $row) {
              ?>
              <div class="card h-100" style="float: left; max-width: 31%; margin: 10px">
                <a href="detail?id=<? $row['code'] ?>"><?php echo Html::img('@web/../../backend/web/uploads' . $row['image'], ['class' => 'img', 'width' => '340', 'height' => '340']); ?></a>
                <div class="card-body" style="text-align: center;">
                  <h1><b><?= $row['name'] ?></b></h1>
                  <p><?= $row['description'] ?></p>
                  <b><span>$<?= $row['Cost'] ?></span></b>
                  <br>
                  <?= Html::a('Add to Cart', ['add-to-cart', 'code' => $row->code], ['class' => 'btn btn-success']) ?>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
              <?php } ?>
          <div>
        </div>
      <div>
    </div>
  </body>