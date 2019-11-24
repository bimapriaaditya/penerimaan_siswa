<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\JalurPendaftaran */

$this->title = 'Update Jalur Pendaftaran: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Jalur Pendaftarans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jalur-pendaftaran-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
