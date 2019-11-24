<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TempatTinggal */

$this->title = 'Create Tempat Tinggal';
$this->params['breadcrumbs'][] = ['label' => 'Tempat Tinggals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tempat-tinggal-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
