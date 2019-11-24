<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\JalurSktm */

$this->title = 'Create Jalur Sktm';
$this->params['breadcrumbs'][] = ['label' => 'Jalur Sktms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jalur-sktm-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
