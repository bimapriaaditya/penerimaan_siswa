<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\JalurSktmSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jalur-sktm-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_calon_siswa') ?>

    <?= $form->field($model, 'nilai_mtk') ?>

    <?= $form->field($model, 'nilai_indo') ?>

    <?= $form->field($model, 'nilai_ipa') ?>

    <?php // echo $form->field($model, 'nilai_inggris') ?>

    <?php // echo $form->field($model, 'id_pekerjaan_ibu') ?>

    <?php // echo $form->field($model, 'id_penghasilan_ibu') ?>

    <?php // echo $form->field($model, 'id_pekerjaan_ayah') ?>

    <?php // echo $form->field($model, 'id_penghasilan_ayah') ?>

    <?php // echo $form->field($model, 'id_tempat_tinggal') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
