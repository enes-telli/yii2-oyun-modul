<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model enestelli\Oyun\models\OyunSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="oyun-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'isim') ?>

    <?= $form->field($model, 'yayimci') ?>

    <?= $form->field($model, 'yayinYili') ?>

    <?= $form->field($model, 'tur') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
