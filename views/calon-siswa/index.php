<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\User;
use app\models\CalonSiswa;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CalonSiswaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Calon Siswa';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="calon-siswa-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Tambah Data', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'id',
                'format' => 'raw',
                'headerOptions' => ['style' => 'width: 85px;'],
                'contentOptions' => ['style' => 'text-align: center;']
            ],
            [
                'attribute' => 'nama',
                'format' => 'raw',
                'contentOptions' => ['style' => 'width:35%;']
            ],
            [
                'attribute' => 'jenis_kelamin',
                'format' => 'raw',
                'contentOptions' => ['style' => 'text-align:center; width:12%;']
            ],
            'no_telepon',
            'email:email',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <div style="padding-top: 2%; padding-bottom: 2%;">
        <hr>
    </div>

    <div class="row">
        <div class="col-md-4">
            <table border="1" style="width: 100%;">
                <tr>
                    <th>
                        <img src="../image/siswa/cat01.jpg" width="100%" height="200px">
                        <hr>
                        <h2 style="margin-left: 5%;padding-bottom: 5%;">Tambah List SMP</h2>
                        <center>
                            <?= Html::a('Tambah Data SMP', ['smp/create'], ['class' => 'btn btn-success']) ?>
                            <?= Html::a('Lihat Data ',['smp/index'],['class' => 'btn btn-primary']) ?>
                            <div style="margin-bottom: 5%;"></div>
                        </center>
                    </th>
                </tr>
            </table>
        </div>
        <div class="col-md-4">
            <table border="1" style="width: 100%;">
                <tr>
                    <th>
                        <img src="../image/siswa/cat01.jpg" width="100%" height="200px">
                        <hr>
                        <h2 style="margin-left: 5%;padding-bottom: 5%;">Tambah List Agama</h2>
                        <center>
                            <?= Html::a('Tambah Data Agama', ['agama/create'], ['class' => 'btn btn-success']) ?>
                            <?= Html::a('Lihat Data ',['agama/index'],['class' => 'btn btn-primary']) ?>
                            <div style="margin-bottom: 5%;"></div>
                        </center>
                    </th>
                </tr>
            </table>
        </div>
        <div class="col-md-4">
            <table border="1" style="width: 100%;">
                <tr>
                    <th>
                        <img src="../image/siswa/cat01.jpg" width="100%" height="200px">
                        <hr>
                        <h2 style="margin-left: 5%;padding-bottom: 5%;">Tambah List Jurusan</h2>
                        <center>
                            <?= Html::a('Tambah Data Jurusan', ['jurusan/create'], ['class' => 'btn btn-success']) ?>
                            <?= Html::a('Lihat Data ',['jurusan/index'],['class' => 'btn btn-primary']) ?>
                            <div style="margin-bottom: 5%;"></div>
                        </center>
                    </th>
                </tr>
            </table>
        </div>
    </div>
    <div style="margin-top: 3%;"></div>
    <div class="row">
        <div class="col-md-4 col-md-offset-2">
            <table border="1" style="width: 100%;">
                <tr>
                    <th>
                        <img src="../image/siswa/cat01.jpg" width="100%" height="200px">
                        <hr>
                        <h2 style="margin-left: 5%;padding-bottom: 5%;">Tambah Data Staff</h2>
                        <center>
                            <?= Html::a('Tambah Staff', ['staff/create'], ['class' => 'btn btn-success']) ?>
                            <?= Html::a('Lihat Data ',['staff/index'],['class' => 'btn btn-primary']) ?>
                            <div style="margin-bottom: 5%;"></div>
                        </center>
                    </th>
                </tr>
            </table>
        </div>
        <div class="col-md-4">
            <table border="1" style="width: 100%;">
                <tr>
                    <th>
                        <img src="../image/siswa/cat01.jpg" width="100%" height="200px">
                        <hr>
                        <h2 style="margin-left: 5%;padding-bottom: 5%;">Tambah User</h2>
                        <center>
                            <?= Html::a('Tambah User', ['user/create'], ['class' => 'btn btn-success']) ?>
                            <?= Html::a('Lihat Data ',['user/index'],['class' => 'btn btn-primary']) ?>
                            <div style="margin-bottom: 5%;"></div>
                        </center>
                    </th>
                </tr>
            </table>
        </div>
    </div>
</div>