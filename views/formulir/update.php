<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Formulir */
$this->title = "Edit Data Formulir Siswa : ". $model->id;
?>
<div class="formulir-update">

    <h1><?= Html::encode($this->title) ?></h1>
    <hr>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
