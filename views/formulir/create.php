<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Formulir */
$this->title = 'Pengisian Formulir Siswa';
?>
<div class="formulir-create">

    <h1><?= Html::encode($this->title) ?></h1>
    <hr>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
