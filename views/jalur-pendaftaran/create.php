<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\JalurPendaftaran */

$this->title = 'Create Jalur Pendaftaran';
$this->params['breadcrumbs'][] = ['label' => 'Jalur Pendaftarans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jalur-pendaftaran-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
