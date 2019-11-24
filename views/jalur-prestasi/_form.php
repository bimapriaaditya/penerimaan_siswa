<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\JalurPrestasi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jalur-prestasi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_calon_siswa')->textInput() ?>

    <?= $form->field($model, 'nilai_mtk')->textInput() ?>

    <?= $form->field($model, 'nilai_indo')->textInput() ?>

    <?= $form->field($model, 'nilai_ipa')->textInput() ?>

    <?= $form->field($model, 'nilai_inggris')->textInput() ?>

    <?= $form->field($model, 'nilai_un')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
