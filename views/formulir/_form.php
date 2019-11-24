<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\JalurPendaftaran;
use app\models\Smp;
use app\models\Agama;
use app\models\Jurusan;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Formulir */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="formulir-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'nama_lengkap')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'nisn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'jarak_sekolah')->textInput(['type' => 'number']) ?>

    <?= $form->field($model, 'id_jalur_pendaftaran')->dropdownList(JalurPendaftaran::getList(),['prompt' => '-- Jalur Pendaftaran --']) ?>

    <?= $form->field($model, 'id_smp')->dropdownList(Smp::getList(),['prompt' => '-- Asal SMP --']) ?>

    <?= $form->field($model, 'id_agama')->dropdownList(Agama::getList(),['prompt' => '-- Agama --']) ?>

    <?= $form->field($model, 'id_jurusan')->dropdownList(Jurusan::getList(),['prompt' => '-- Target Jurusan 1 --']) ?>

    <?= $form->field($model, 'id_jurusan_2')->dropdownList(Jurusan::getList(),['prompt' => '-- Target Jurusan 2 --']) ?>

    <?= $form->field($model, 'nama_orang_tua')->textInput() ?>

    <?= $form->field($model, 'tinggi_badan')->textInput(['type' => 'number']) ?>

    <?= $form->field($model, 'berat_badan')->textInput(['type' => 'number']) ?>

    <?= $form->field($model, 'tanggal_daftar')->widget(DatePicker::classname(), [
        'options' => ['placeholder' => 'Tanggal Daftar'],
        'readonly' => true,
        'pluginOptions' => [
            'autoclose'=>true,
            'format'=>'yyyy-mm-dd',
            'todayHighlight' => true
        ]
    ]);?>

    <?= $form->field($model, 'keterangan')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'img')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>