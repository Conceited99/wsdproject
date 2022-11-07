<?php

use yii\helpers\Html;

$this->title = 'Cart';
$this->params[ 'breadcrumbs' ][] = $this->title;

?>
<style>
body{
 margin: 0;
 padding: 0;
 background: linear-gradient(to bottom right, #E3F0FF, #FAFCFF);
 height: 100vh;
 display: flex;
 justify-content: center;
 align-items: center;
}
.Cart-Container{
 width: 100%;
 height: 50%;
 background-color: #ffffff;
 border-radius: 20px;
 box-shadow: 0px 25px 40px #1687d933;
}
.Header{
 margin: auto;
 width: 90%;
 height: 15%;
 display: flex;
 justify-content: space-between;
 align-items: center;
}
.Heading{
 font-size: 20px;
 font-family: ‘Open Sans’;
 font-weight: 700;
 color: #2F3841;
}
.Action{
 font-size: 14px;
 font-family: ‘Open Sans’;
 font-weight: 600;
 color: #E44C4C;
 cursor: pointer;
 border-bottom: 1px solid #E44C4C;
}
.Cart-Items{
 margin: auto;
 width: 90%;
 height: 30%;
 display:-moz-grid-group;
 justify-content: space-between;
 align-items: center;
}
.image-box{
 width: 15%;
 text-align: center;
}
.image-box img{
    max-width: 100%;

}
.title{
 padding-top: 5px;
 line-height: 10px;
 font-size: 32px;
 font-family: ‘Open Sans’;
 font-weight: 800;
 color: #202020;
}
.counter{
 width: 15%;
 display:flex;
 justify-content: space-between;
 align-items: center;
}
.btns{
 width: 40px;
 height: 40px;
 border-radius: 50%;
 background-color: #d9d9d9;
 display: flex;
 justify-content: center;
 align-items: center;
 font-size: 20px;
 font-family: ‘Open Sans’;
 font-weight: 900;
 color: #202020;
 cursor: pointer;
}
.count{
 font-size: 20px;
 font-family: ‘Open Sans’;
 font-weight: 900;
 color: #202020;
}
.prices{
 height: 100%;
 text-align: right;
}
.remove{
 padding-top: 5px;
 font-size: 14px;
 font-family: ‘Open Sans’;
 font-weight: 600;
 color: #E44C4C;
 cursor: pointer;
}
.row{
    margin-top: 20px;
    margin-bottom: 50px;
    margin-left: 190px;
}
.continue{
 width: 30%;
 height: 40px;
}
.out{
 width: 30%;
 height: 40px;
}
</style>

<body>
<div class = "Cart-Container">
    <div class="Header">
        <h3 class="Heading">Shopping Cart</h3>
        <h5 class="Action">Remove all</h5>
    </div>
    <?php 
        $cart_total =0;
    ?>
    <div class="Cart-Items">
        <?php foreach ($data as $row){?>
        <div class="image-box">
        <a href="detail?id=<? $row['code'] ?>"><?php echo Html::img('@web/../../backend/web/uploads' . $row['image'], ['class' => 'img']); ?></a>
        </div>
        <div class="title">
            <?= $row->name ?>
        </div>
        <br>
        <div class="counter">
            <div class="btns">+</div>
            <div class="count">2</div>
            <div class="btns">-</div>
        </div>
        <div class = "prices">
           <b> <?php echo "$" ?>
            <?= $row->cost ?></b>
            <div class=”remove”><u>Remove</u></div>
        </div>
        <?php $cart_total = $cart_total + $row->cost?>
        <?php } ?>
    </div>
    <hr>
    <div class="checkout">
        <div class="total">
            <b>Total</b>
        </div>
        <div class="col-md-4">
            <b style="color: red;">JMD $<?= $cart_total?></b>
        </div>
    </div>
    <div class="row">
        <div class="continue">
            <?= Html::a('Continue Shopping',['product'], ['class' => 'btn btn-info']) ?>
        </div>
        <div class="out">
        <?= Html::a('Check Out',['checkout'], ['class' => 'btn btn-success']) ?>
        </div>
    </div>
</div>
<body>