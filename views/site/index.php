<?php

use yii\helpers\Html;
/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>

<div class="site-index">
    <div class="container-fluid" style="background-image:url(img/fonn.jpg);"></div>
    <center>
        <h1>Home Segurity</h1>
        <br><br><br><h3>SunLinkSystems LTD</h3>
        <br><br><br>
        <p>
            <?= Html::a('Iniciar', ['/site/login'], ['class' => 'btn btn-primary']) ?>
        </p>
    </center>

</div>
