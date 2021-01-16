<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model enestelli\Oyun\models\Oyun */

$this->title = 'Create Oyun';
$this->params['breadcrumbs'][] = ['label' => 'Oyuns', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="oyun-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
