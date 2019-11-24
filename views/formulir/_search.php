<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FormulirSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="formulir-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_calon_siswa') ?>

    <?= $form->field($model, 'nama_lengkap') ?>

    <?= $form->field($model, 'nisn') ?>

    <?= $form->field($model, 'nik') ?>

    <?php // echo $form->field($model, 'alamat') ?>

    <?php // echo $form->field($model, 'jarak_sekolah') ?>

    <?php // echo $form->field($model, 'id_jalur_pendaftaran') ?>

    <?php // echo $form->field($model, 'id_smp') ?>

    <?php // echo $form->field($model, 'id_agama') ?>

    <?php // echo $form->field($model, 'id_jurusan') ?>

    <?php // echo $form->field($model, 'id_jurusan_2') ?>

    <?php // echo $form->field($model, 'nama_orang_tua') ?>

    <?php // echo $form->field($model, 'tinggi_badan') ?>

    <?php // echo $form->field($model, 'berat_badan') ?>

    <?php // echo $form->field($model, 'tanggal_daftar') ?>

    <?php // echo $form->field($model, 'keterangan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
