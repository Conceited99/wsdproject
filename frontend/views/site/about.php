<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

?>
<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        margin: 0;
        background-color: #000;
    }

    html {
        box-sizing: border-box;
    }

    *,
    *:before,
    *:after {
        box-sizing: inherit;
    }

    .column {
        float: left;
        width: 50%;
        margin-bottom: 16px;
        padding: 0 8px;
    }

    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        margin: 8px;
        color: #474e5d;
    }

    .about-section {
        padding: 50px;
        text-align: center;
        background-color: #474e5d;
        color: white;
    }

    .container {
        padding: 0 16px;
    }

    .container::after,
    .row::after {
        content: "";
        clear: both;
        display: table;
    }

    .title {
        color: grey;
    }

    .button {
        border: none;
        outline: 0;
        display: inline-block;
        padding: 8px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        width: 100%;
    }

    .button:hover {
        background-color: #555;
    }

    @media screen and (max-width: 650px) {
        .column {
            width: 100%;
            display: block;
        }
    }
</style>

<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="about-section">
        <h1>About Us Page</h1>
        <p>We were tasked with creating a Website for an Organization</p>
    </div>

    <h2 style="text-align:center; color:white;">Our Team</h2>
    <div class="row">
        <div class="column">
            <div class="card">
                <div class="container">
                    <h2>Shanice Facey</h2>
                    <p class="title">Junior Sodtware Developer</p>
                    <p>ID# : 1701438</p>
                    <p>I am a final year student at the University of Technology, Jamaica. Pursuing a Bachelor's Degree in Computing</p>
                    <p>Shanice@example.com</p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <div class="container">
                <h2>Nicolai Hunter</h2>
                    <p class="title">Junior Sodtware Developer</p>
                    <p>ID# : 1804301</p>
                    <p>I am a final year student at the University of Technology, Jamaica. Pursuing a Bachelor's Degree in Computing</p>
                    <p>Nick@example.com</p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <div class="container">
                <h2>Doneque Smith</h2>
                    <p class="title">Junior Sodtware Developer</p>
                    <p>ID# : 1704299</p>
                    <p>I am a final year student at the University of Technology, Jamaica. Pursuing a Bachelor's Degree in Computing</p>
                    <p>Doneque@example.com</p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <div class="container">
                <h2>Tyeree Tinker</h2>
                    <p class="title">Junior Sodtware Developer</p>
                    <p>ID# : 1803646</p>
                    <p>I am a final year student at the University of Technology, Jamaica. Pursuing a Bachelor's Degree in Computing</p>
                    <p>Tyeree@example.com</p>
                </div>
            </div>
        </div>
    </div>
</div>