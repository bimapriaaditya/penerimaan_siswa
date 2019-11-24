<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CalonSiswa */

$this->title = 'Edit Calon Siswa : ' . $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Calon Siswa', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nama, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Edit Data';
?>
<div class="calon-siswa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
