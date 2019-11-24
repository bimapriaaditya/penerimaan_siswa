<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\JalurPrestasi */

$this->title = 'Update Jalur Prestasi: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Jalur Prestasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jalur-prestasi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
