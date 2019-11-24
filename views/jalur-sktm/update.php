<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\JalurSktm */

$this->title = 'Update Jalur Sktm: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Jalur Sktms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jalur-sktm-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
