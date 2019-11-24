<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Pekerjaan;
use app\models\Penghasilan;
use app\models\TempatTinggal;

/* @var $this yii\web\View */
/* @var $model app\models\JalurSktm */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jalur-sktm-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_calon_siswa')->textInput() ?>

    <?= $form->field($model, 'nilai_mtk')->textInput() ?>

    <?= $form->field($model, 'nilai_indo')->textInput() ?>

    <?= $form->field($model, 'nilai_ipa')->textInput() ?>

    <?= $form->field($model, 'nilai_inggris')->textInput() ?>

    <?= $form->field($model, 'id_pekerjaan_ibu')->dropdownList(Pekerjaan::getList(), ['prompt' => '-- Pekerjaan Ibu --']) ?>

    <?= $form->field($model, 'id_penghasilan_ibu')->dropdownList(Penghasilan::getList(), ['prompt' => '--- Penghasilan Ibu ---']) ?>

    <?= $form->field($model, 'id_pekerjaan_ayah')->dropdownList(Pekerjaan::getList(), ['prompt' => '-- Pekerjaan Ayah --']) ?>

    <?= $form->field($model, 'id_penghasilan_ayah')->dropdownList(Penghasilan::getList(), ['prompt' => '--- Penghasilan Ayah ---']) ?>

    <?= $form->field($model, 'id_tempat_tinggal')->dropdownList(TempatTinggal::getList(),['prompt' => '-- Status Tempat Tinggal --']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
