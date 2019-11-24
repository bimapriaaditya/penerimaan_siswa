<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Smp */

$this->title = 'Create Smp';
$this->params['breadcrumbs'][] = ['label' => 'Smps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="smp-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
