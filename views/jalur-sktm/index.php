<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\JalurSktmSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Jalur Sktms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jalur-sktm-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Jalur Sktm', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_calon_siswa',
            'nilai_mtk',
            'nilai_indo',
            'nilai_ipa',
            //'nilai_inggris',
            //'id_pekerjaan_ibu',
            //'id_penghasilan_ibu',
            //'id_pekerjaan_ayah',
            //'id_penghasilan_ayah',
            //'id_tempat_tinggal',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
