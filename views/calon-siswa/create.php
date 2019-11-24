<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CalonSiswa */

$this->title = 'Tambah Calon Siswa';
$this->params['breadcrumbs'][] = ['label' => 'Calon Siswa', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="calon-siswa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
