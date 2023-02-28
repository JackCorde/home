<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Movimientos $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="movimientos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fecha')->textInput() ?>

    <?= $form->field($model, 'hora')->textInput() ?>

    <?= $form->field($model, 'id_sensor')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
