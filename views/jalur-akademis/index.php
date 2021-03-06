<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\JalurAkademisSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Jalur Akademis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jalur-akademis-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Jalur Akademis', ['create'], ['class' => 'btn btn-success']) ?>
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
            //'nilai_un',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
