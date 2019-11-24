<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\JalurSktm */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Jalur Sktms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="jalur-sktm-view">

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
            'id',
            'id_calon_siswa',
            'nilai_mtk',
            'nilai_indo',
            'nilai_ipa',
            'nilai_inggris',
            'id_pekerjaan_ibu',
            'id_penghasilan_ibu',
            'id_pekerjaan_ayah',
            'id_penghasilan_ayah',
            'id_tempat_tinggal',
        ],
    ]) ?>

</div>
