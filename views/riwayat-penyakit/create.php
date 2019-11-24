<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RiwayatPenyakit */

$this->title = 'Tambah Data Riwayat Penyakit';
?>
<div class="riwayat-penyakit-create">

    <h1><?= Html::encode($this->title) ?></h1>
    <hr>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
