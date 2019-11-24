<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\JalurAkademisSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jalur-akademis-search">

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

    <?php // echo $form->field($model, 'nilai_un') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
