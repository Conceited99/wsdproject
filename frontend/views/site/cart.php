<?php

use yii\helpers\Html;

$this->title = 'Cart';


?>
<style>
    body {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
        background: linear-gradient(to bottom right, #E3F0FF, #FAFCFF);
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .Cart-Container {
        width: 100%;
        height: 100%;
        background-color: #ffffff;
        border-radius: 20px;
        box-shadow: 0px 25px 40px #1687d933;
    }

    .Header {
        margin: auto;
        /* width: 90%;
        height: 15%; */
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .Heading {
        font-size: 20px;
        font-family: ‘Open Sans’;
        font-weight: 700;
        color: #2F3841;
    }

    .Action {
        font-size: 14px;
        font-family: ‘Open Sans’;
        font-weight: 600;
        color: #E44C4C;
        cursor: pointer;
        border-bottom: 1px solid #E44C4C;
    }

    .Cart-Items {
        margin: auto;
        width: 90%;
        height: 90%;
        display: -moz-grid-group;
        justify-content: space-between;
        align-items: center;
    }

    .image-box {
        width: 15%;
        text-align: center;
    }

    .image-box img {
        max-width: 100%;

    }

    .title {
        padding-top: 5px;
        line-height: 10px;
        font-size: 32px;
        font-family: ‘Open Sans’;
        font-weight: 800;
        color: #202020;
    }

    .counter {
        width: 15%;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .btns {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 20px;
        font-family: ‘Open Sans’;
        font-weight: 900;
        cursor: pointer;
    }

    .count {
        font-size: 20px;
        font-family: ‘Open Sans’;
        font-weight: 900;
        color: #202020;
    }

    .prices {
        height: 100%;
        text-align: right;
    }

    .remove {
        padding-top: 5px;
        font-size: 14px;
        font-family: ‘Open Sans’;
        font-weight: 600;
        color: #E44C4C;
        cursor: pointer;
    }

    .row {
        margin-top: 20px;
        margin-bottom: 50px;
        margin-left: 190px;
    }

    .continue {
        width: 50%;
        height: 40px;
    }

    .out {
        width: 50%;
        height: 40px;
    }
</style>

<body>
    <div class="Cart-Container">
        <div class="Header">
            <h3 class="Heading">Shopping Cart</h3>
            <?= Html::a('Remove All', ['remove-all',], ['class' => 'btn btn-danger']) ?>
        </div>
        <?php
        $cart_total = 0;
        ?>
        <div class="Cart-Items">
            <?php foreach ($data as $row) { ?>
                <div class="image-box">
                    <a href="detail?id=<? $row['code'] ?>"><?php echo Html::img('@web/../../backend/web/uploads' . $row['image'], ['class' => 'img']); ?></a>
                </div>
                <div class="title">
                    <?= $row->name ?>
                </div>
                <br>
                <div class="counter">
                    <div class="btns">
                        <?= Html::a('+', ['plus', 'code' => $row->code], ['class' => 'btn btn-primary']) ?>
                    </div>
                    <div class="count">
                    <?= $row->quantity ?>
                    </div>
                    <div class="btns">
                        <?= Html::a('-', ['minus', 'code' => $row->code], ['class' => 'btn btn-primary']) ?>
                    </div>
                </div>
                <div class="prices">
                    <b> <?php echo "$" ?>
                        <?= $row->cost ?></b>
                    <div>
                        <?= Html::a('Remove', ['remove', 'code' => $row->code], ['class' => 'btn btn-danger']) ?>
                    </div>
                </div>
                <?php $cart_total = $cart_total + $row->cost ?>
            <?php } ?>
        </div>
        <hr>
        <div class="checkout">
            <div class="total">
                <b>Total</b>
            </div>
            <div class="col-md-4">
                <b style="color: red;">JMD $<?= $cart_total ?></b>
            </div>
        </div>
        <div class="row">
            <div class="continue">
                <?= Html::a('Continue', ['product'], ['class' => 'btn btn-info']) ?>
            </div>
            <div class="out">
                <?= Html::a('CheckOut', ['site/continue'], ['class' => 'btn btn-success']) ?>
            </div>
        </div>
    </div>

    <body>