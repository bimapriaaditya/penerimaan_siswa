<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Penghasilan */

$this->title = 'Create Penghasilan';
$this->params['breadcrumbs'][] = ['label' => 'Penghasilans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penghasilan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
