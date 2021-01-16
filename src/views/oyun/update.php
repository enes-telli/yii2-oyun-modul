<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model enestelli\Oyun\models\Oyun */

$this->title = 'Update Oyun: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Oyuns', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="oyun-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
