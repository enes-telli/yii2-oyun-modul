<?php

use enestelli\Oyun\models\Oyuntur;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model enestelli\Oyun\models\Oyun */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="oyun-form">

    <?php $form = ActiveForm::begin(); ?>
    <?php $oyun=Oyuntur::find()->all();
    $listData=ArrayHelper::map($oyun,'tur','tur'); ?>
    <?= $form->field($model, 'isim')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'yayimci')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'yayinYili')->textInput() ?>

    <?= $form->field($model, 'tur')->dropDownList($listData,
        ['prompt'=>'Select...']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
