<?php
$this->title = 'CheckOut';

use yii\helpers\Html;

?>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif
    }

    .container {
        margin: 30px auto;
    }

    .container .card {
        width: 100%;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        background: #fff;
        border-radius: 0px;
    }

    body {
        background: #eee
    }



    .btn.btn-primary {
        background-color: #ddd;
        color: black;
        box-shadow: none;
        border: none;
        font-size: 20px;
        width: 100%;
        height: 100%;
    }

    .btn.btn-primary:focus {
        box-shadow: none;
    }

    .container .card .img-box {
        width: 80px;
        height: 50px;
    }

    .container .card img {
        width: 100%;
        object-fit: fill;
    }

    .container .card .number {
        font-size: 24px;
    }

    .container .card-body .btn.btn-primary .fab.fa-cc-paypal {
        font-size: 32px;
        color: #3333f7;
    }

    .fab.fa-cc-amex {
        color: #1c6acf;
        font-size: 32px;
    }

    .fab.fa-cc-mastercard {
        font-size: 32px;
        color: red;
    }

    .fab.fa-cc-discover {
        font-size: 32px;
        color: orange;
    }

    .c-green {
        color: green;
    }

    .box {
        height: 40px;
        width: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #ddd;
    }

    .btn.btn-primary.payment {
        background-color: #1c6acf;
        color: white;
        border-radius: 0px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 24px;
    }


    .form__div {
        height: 50px;
        position: relative;
        margin-bottom: 24px;
    }

    .form-control {
        width: 100%;
        height: 45px;
        font-size: 14px;
        border: 1px solid #DADCE0;
        border-radius: 0;
        outline: none;
        padding: 2px;
        background: none;
        z-index: 1;
        box-shadow: none;
    }

    .form__label {
        position: absolute;
        left: 16px;
        top: 10px;
        background-color: #fff;
        color: #80868B;
        font-size: 16px;
        transition: .3s;
        text-transform: uppercase;
    }

    .form-control:focus+.form__label {
        top: -8px;
        left: 12px;
        color: #1A73E8;
        font-size: 12px;
        font-weight: 500;
        z-index: 10;
    }

    .form-control:not(:placeholder-shown).form-control:not(:focus)+.form__label {
        top: -8px;
        left: 12px;
        font-size: 12px;
        font-weight: 500;
        z-index: 10;
    }

    .form-control:focus {
        border: 1.5px solid #1A73E8;
        box-shadow: none;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-lg-4 mb-lg-0 mb-3">
            <div class="card p-3">
                <div class="img-box">
                    <img src="https://www.freepnglogos.com/uploads/visa-logo-download-png-21.png" alt="">
                </div>
                <div class="number">
                    <label class="fw-bold" for="">**** **** **** 1060</label>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <small><span class="fw-bold">Expiry date:</span><span>10/16</span></small>
                    <small><span class="fw-bold">Name:</span><span>Kumar</span></small>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-lg-0 mb-3">
            <div class="card p-3">
                <div class="img-box">
                    <img src="https://www.freepnglogos.com/uploads/mastercard-png/file-mastercard-logo-svg-wikimedia-commons-4.png" alt="">
                </div>
                <div class="number">
                    <label class="fw-bold">**** **** **** 1060</label>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <small><span class="fw-bold">Expiry date:</span><span>10/16</span></small>
                    <small><span class="fw-bold">Name:</span><span>Kumar</span></small>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-lg-0 mb-3">
            <div class="card p-3">
                <div class="img-box">
                    <img src="https://www.freepnglogos.com/uploads/discover-png-logo/credit-cards-discover-png-logo-4.png" alt="">
                </div>
                <div class="number">
                    <label class="fw-bold">**** **** **** 1060</label>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <small><span class="fw-bold">Expiry date:</span><span>10/16</span></small>
                    <small><span class="fw-bold">Name:</span><span>Kumar</span></small>
                </div>
            </div>
        </div>
        <div class="col-12 mt-4">
            <div class="card p-3">
                <p class="mb-0 fw-bold h4">Payment Methods</p>
            </div>
        </div>
        <div class="col-12">
            <div class="card p-3">
                <div class="card-body border p-0">
                    <p>
                        <a class="btn btn-primary w-100 h-100 d-flex align-items-center justify-content-between" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="true" aria-controls="collapseExample">
                            <span class="fw-bold">Order Summary</span>
                            <span class="fab fa-cc-paypal">
                            </span>
                        </a>
                    </p>
                    <div class="collapse p-3 pt-0" id="collapseExample">
                        <div class="row">
                            <section class="h-100 gradient-custom">
                                <div class="container py-5 h-100">
                                    <div class="row d-flex justify-content-center align-items-center h-100">
                                        <div class="col-lg-10 col-xl-8">
                                            <div class="card" style="border-radius: 10px;">
                                                <div class="card-header px-4 py-5">
                                                    <h5 class="text-muted mb-0">Order Details</h5>
                                                </div>
                                                <div class="card-body p-4">
                                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                                        <p class="lead fw-normal mb-0" style="color: #a8729a;">Receipt</p>
                                                        <p class="small text-muted mb-0">Receipt Voucher : 1KAU9-84UIL</p>
                                                    </div>
                                                    <div class="card shadow-0 border mb-6">
                                                        <div class="card-body">
                                                            <?php
                                                            $cart_total = 0;
                                                            ?>
                                                            <?php
                                                            foreach ($data as $row) {
                                                            ?>
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <a href="detail?id=<? $row['code'] ?>"><?php echo Html::img('@web/../../backend/web/uploads' . $row['image'], ['class' => 'img']); ?></a>
                                                                    </div>
                                                                    <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                                                        <p class="text-muted mb-0"><?= $row->name ?></p>
                                                                    </div>
                                                                    <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                                                        <p class="text-muted mb-0 small">Qty: <?= $row->quantity ?></p>
                                                                    </div>
                                                                    <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                                                        <p class="text-muted mb-0 small">$ <?= $row->cost . "JMD" ?></p>
                                                                    </div>
                                                                    <hr class="mb-4" style="background-color:light-grey;">
                                                                    <?php $cart_total = $cart_total + $row->cost ?>
                                                                <?php
                                                            }
                                                                ?>
                                                                </div>
                                                                <div class="row d-flex align-items-center">
                                                                    <div class="col-md-2">
                                                                        <p class="text-muted mb-0 small">Track Order</p>
                                                                    </div>
                                                                    <div class="col-md-10">
                                                                        <div class="progress" style="height: 6px; border-radius: 16px;">
                                                                            <div class="progress-bar" role="progressbar" style="width: 65%; border-radius: 16px; background-color: #a8729a;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                                                        </div>
                                                                        <div class="d-flex justify-content-around mb-1">
                                                                            <p class="text-muted mt-1 mb-0 small ms-xl-5">Out for delivary</p>
                                                                            <p class="text-muted mt-1 mb-0 small ms-xl-5">Delivered</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                    </div>
                                                    <hr class="mb-4" style="background-color:light-grey;">
                                                    <div class="d-flex justify-content-between pt-2">
                                                        <p class="fw-bold mb-0">Order Details</p>
                                                        <p class="text-muted mb-0"><span class="fw-bold me-4">Total</span>JMD $<?= $cart_total ?> </p>
                                                    </div>

                                                    <div class="d-flex justify-content-between pt-2">
                                                        <p class="text-muted mb-0">Invoice Number : <?= mt_rand(100000,999999);?></p>
                                                    </div>

                                                    <div class="d-flex justify-content-between">
                                                        <p class="text-muted mb-0">Invoice Date : <?= date('Y-m-d H:i:s') ?></p>
                                                    </div>

                                                    <div class="d-flex justify-content-between mb-5">
                                                        <p class="text-muted mb-0">Recepits Voucher : 18KU-62IIK</p>
                                                        <p class="text-muted mb-0"><span class="fw-bold me-4">Delivery Charges</span> Free</p>
                                                    </div>
                                                </div>
                                                <div class="card-footer border-0 px-4 py-5" style="background-color: #a8729a; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                                                    <h5 class="d-flex align-items-center justify-content-end text-white text-uppercase mb-0">Total to be
                                                        paid: <span class="h2 mb-0 ms-2">JMD $<?= $cart_total ?></span></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                        </div>
                    </div>
                </div>
                <div class="card-body border p-0">
                    <p>
                        <a class="btn btn-primary p-2 w-100 h-100 d-flex align-items-center justify-content-between" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="true" aria-controls="collapseExample">
                            <span class="fw-bold">Credit Card</span>
                            <span class="">
                                <span class="fab fa-cc-amex"></span>
                                <span class="fab fa-cc-mastercard"></span>
                                <span class="fab fa-cc-discover"></span>
                            </span>
                        </a>
                    </p>
                    <div class="collapse show p-3 pt-0" id="collapseExample">
                        <div class="row">
                            <div class="col-lg-7">
                                <form action="" class="form">
                                    <div class="row">
                                    <div class="col-12">
                                            <div class="form__div">
                                                <input type="text" class="form-control" placeholder=" " required>
                                                <label for="" class="form__label">Email Address</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form__div">
                                                <input type="text" class="form-control" placeholder=" " required>
                                                <label for="" class="form__label">Card Number</label>
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="form__div">
                                                <input type="text" class="form-control" placeholder=" " required>
                                                <label for="" class="form__label">MM / yy</label>
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="form__div">
                                                <input type="password" class="form-control" placeholder=" " required>
                                                <label for="" class="form__label">cvv code</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form__div">
                                                <input type="text" class="form-control" placeholder=" " required>
                                                <label for="" class="form__label">name on the card</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form__div">
                                                <input type="text" class="form-control" placeholder=" " required>
                                                <label for="" class="form__label">Billing Address</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <?= Html::a('Submit', ['checkout'], ['class' => 'btn btn-primary w-100']) ?>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>