<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\JalurPrestasi */

$this->title = 'Create Jalur Prestasi';
$this->params['breadcrumbs'][] = ['label' => 'Jalur Prestasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jalur-prestasi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
