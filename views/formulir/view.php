<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Formulir */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Formulirs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="formulir-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                'attribute' => 'img',
                'value' => Yii::getAlias('@formulirImgUrl'). '/' . $model->img,
                'format' => ['image',['width' => '100', 'height' => '100']]
            ],
            'id',
            'id_calon_siswa',
            'nama_lengkap:ntext',
            'nisn',
            'nik',
            'alamat:ntext',
            'jarak_sekolah',
            'id_jalur_pendaftaran',
            'id_smp',
            'id_agama',
            'id_jurusan',
            'id_jurusan_2',
            'nama_orang_tua',
            'tinggi_badan',
            'berat_badan',
            'tanggal_daftar',
            'keterangan:ntext',
        ],
    ]) ?>

</div>
