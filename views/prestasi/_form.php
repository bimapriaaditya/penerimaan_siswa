<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Prestasi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="prestasi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_calon_siswa')->textInput() ?>

    <?= $form->field($model, 'nama')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'img')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
