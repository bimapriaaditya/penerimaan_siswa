<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Penyakit;

/* @var $this yii\web\View */
/* @var $model app\models\RiwayatPenyakit */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="riwayat-penyakit-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_calon_siswa')->textInput() ?>

    <?= $form->field($model, 'id_penyakit')->dropdownList(Penyakit::getList(),['prompt' => '-- Nama Penyakit --']) ?>

    <?= $form->field($model, 'keterangan')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
