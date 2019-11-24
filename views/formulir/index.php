<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FormulirSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Formulirs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="formulir-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Formulir', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_calon_siswa',
            'nama_lengkap:ntext',
            'nisn',
            'nik',
            //'alamat:ntext',
            //'jarak_sekolah',
            //'id_jalur_pendaftaran',
            //'id_smp',
            //'id_agama',
            //'id_jurusan',
            //'id_jurusan_2',
            //'nama_orang_tua',
            //'tinggi_badan',
            //'berat_badan',
            //'tanggal_daftar',
            //'keterangan:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
