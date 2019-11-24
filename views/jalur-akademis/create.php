<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\JalurAkademis */

$this->title = 'Create Jalur Akademis';
$this->params['breadcrumbs'][] = ['label' => 'Jalur Akademis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jalur-akademis-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
