<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Formulir;
use app\models\JalurPendaftaran;
use app\models\Smp;
use app\models\Agama;
use app\models\Jurusan;
use app\models\RiwayatPenyakit;
use app\models\Penyakit;
use app\models\JalurSktm;
use app\models\JalurPrestasi;
use app\models\JalurAkademis;
use app\models\Prestasi;

/* @var $this yii\web\View */
/* @var $model app\models\CalonSiswa */

$this->title = $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Calon Siswa', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="calon-siswa-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Kembali', ['index'],['class' => 'btn btn-info']) ?>
        <?= Html::a('Edit Siswa', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Hapus Siswa', ['delete', 'id' => $model->id], [
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
            'nama',
            'jenis_kelamin',
            'no_telepon',
            'email:email',
        ],
    ]) ?>

</div>
<div>
    <?= Html::a('Isi Formulir', ['/formulir/create', 'id_calon_siswa' => $model->id], ['class' => 'btn btn-success']) ?>
    <?php foreach (Formulir::find()->andWhere(['id_calon_siswa' => $model->id])->all() as $DataFormulir):?>
        <?= Html::a('Edit Data', ['/formulir/update', 'id' => $DataFormulir->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Hapus Data', ['/formulir/delete', 'id' => $DataFormulir->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <div>&nbsp;</div>
        <div class="row">
        <h1><strong>DATA FORMULIR SISWA</strong></h1>
        <hr>
            <div class=" col-md-6">
                <?= DetailView::widget([
                    'model' => $DataFormulir,
                    'attributes' => [
                        [
                            'label' => 'Foto',
                            'value' => Yii::getAlias('@formulirImgUrl') . '/' . $DataFormulir->img,
                            'format' => ['image',['width' => '100', 'height' => '100']]
                        ],
                        'nama_lengkap',
                        'nisn',
                        'nik',
                        'alamat',
                         'jarak_sekolah'
                    ],
                ])?>
            </div>
            <div class=" col-md-6">
                <?= DetailView::widget([
                    'model' => $DataFormulir,
                    'attributes' => [
                        [
                            'attribute' => 'id_jalur_pendaftaran',
                            'value' => $DataFormulir->jalurPendaftaran->nama 
                        ],
                        [
                            'attribute' => 'id_smp',
                            'value' => $DataFormulir->smp->nama 
                        ],
                        [
                            'attribute' => 'id_agama',
                            'value' => $DataFormulir->agama->nama
                        ],
                        [
                            'attribute' => 'id_jurusan',
                            'value' => $DataFormulir->jurusan->nama
                        ],
                        [
                            'attribute' => 'id_jurusan_2',
                            'value' => @$DataFormulir->jurusan2->nama 
                        ],
                        'nama_orang_tua',
                        'tinggi_badan',
                        'berat_badan',
                        'tanggal_daftar',
                        'keterangan'
                    ]
                ]);?>
            </div>
        </div>
        <?php
            if($DataFormulir->id_jalur_pendaftaran == 3){ ?>
                <h1><strong>DATA JALUR SKTM</strong></h1>
                <hr>
                <?= Html::a('Data Jalur SKTM', ['/jalur-sktm/create'], ['class' => 'btn btn-success']) ?>
                <?php foreach (JalurSktm::find()->andWhere(['id_calon_siswa' => $model->id])->all() as $SKTM): ?>
                    <?= Html::a('Edit Data', ['/jalur-sktm/update', 'id' => $SKTM->id], ['class' => 'btn btn-primary']) ?>
                    <?= Html::a('Hapus Data', ['/jalur-sktm/delete', 'id' => $SKTM->id], [
                        'class' => 'btn btn-danger',
                        'data' => [
                            'confirm' => 'Are you sure you want to delete this item?',
                            'method' => 'post',
                        ],
                    ])?>
                    <div>&nbsp;</div>
                    <?= DetailView::widget([
                        'model' => $SKTM,
                        'attributes' => [
                            'nilai_mtk',
                            'nilai_indo',
                            'nilai_ipa',
                            'nilai_inggris',
                            'nilai_un',
                            [
                                'attribute' => 'id_pekerjaan_ibu',
                                'value' => @$SKTM->pekerjaanIbu->nama 
                            ],
                            [
                                'attribute' => 'id_penghasilan_ibu',
                                'value' => @$SKTM->penghasilanIbu->nama
                            ],
                            [
                                'attribute' => 'id_pekerjaan_ayah',
                                'value' => @$SKTM->pekerjaanAyah->nama 
                            ],
                            [
                                'attribute' => 'id_penghasilan_ayah',
                                'value' => @$SKTM->penghasilanAyah->nama
                            ],
                            [
                                'attribute' => 'id_tempat_tinggal',
                                'value' => @$SKTM->tempatTinggal->nama
                            ],
                        ]
                    ]);
                endforeach ?>
            <?php }elseif ($DataFormulir->id_jalur_pendaftaran == 1) { ?>

                <h1><strong>DATA JALUR PRESTASI</strong></h1>
                <hr>

                <?= Html::a('Data Jalur Prestasi', ['/jalur-prestasi/create', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
                <?php foreach (JalurPrestasi::find()->andWhere(['id_calon_siswa' => $model->id])->all() as $JalurPrestasi): ?>
                    <?= Html::a('Edit Data', ['/jalur-prestasi/update', 'id' => $JalurPrestasi->id], ['class' => 'btn btn-primary']) ?>
                    <?= Html::a('Hapus Data', ['/jalur-prestasi/delete', 'id' => $JalurPrestasi->id], [
                        'class' => 'btn btn-danger',
                        'data' => [
                            'confirm' => 'Are you sure you want to delete this item?',
                            'method' => 'post',
                        ],
                    ])?>
                    <div>&nbsp;</div>
                    <?= DetailView::widget([
                        'model' => $JalurPrestasi,
                        'attributes' => [
                            'nilai_mtk',
                            'nilai_indo',
                            'nilai_ipa',
                            'nilai_inggris',
                            'nilai_un'
                        ]
                    ]);?>

                    <?= Html::a('Data Prestasi', ['/prestasi/create', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
                    <?php foreach (Prestasi::find()->andWhere(['id_calon_siswa' => $model->id])->all() as $Prestasi): ?>
                        <?= Html::a('Edit Data', ['/prestasi/update', 'id' => $Prestasi->id], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Hapus Data', ['/prestasi/delete', 'id' => $Prestasi->id], [
                            'class' => 'btn btn-danger',
                            'data' => [
                                'confirm' => 'Are you sure you want to delete this item?',
                                'method' => 'post',
                            ],
                        ]);?>
                        <div>&nbsp;</div>
                        <?= DetailView::widget([
                            'model' => $Prestasi,
                            'attributes' => [
                                'img',
                                'nama',
                            ]
                        ]);
                    endforeach;
                endforeach ?>
        <?php }else{ ?>
            <h1><strong>DATA JALUR AKADEMIS</strong></h1>
            <hr>
            <?= Html::a('Data Jalur Akademis', ['/jalur-akademis/create', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
            <?php foreach(JalurAkademis::find()->andWhere(['id_calon_siswa' => $model->id])->all() as $JalurAkademis ): ?>
                <?= Html::a('Edit Data', ['/jalur-akademis/update', 'id' => $JalurAkademis->id], ['class' => 'btn btn-primary']) ?>
                <?= Html::a('Hapus Data', ['/jalur-akademis/delete', 'id' => $JalurAkademis->id], [
                    'class' => 'btn btn-danger',
                    'data' => [
                        'confirm' => 'Are you sure you want to delete this item?',
                        'method' => 'post',
                    ],
                ]);?>
                <div>&nbsp;</div>
                <?= DetailView::widget([
                    'model' => $JalurAkademis,
                    'attributes' => [
                        'nilai_mtk',
                        'nilai_indo',
                        'nilai_ipa',
                        'nilai_inggris',
                        'nilai_un'
                    ],
                ]);
            endforeach ?>
        <?php }
    endforeach ?>
</div>
<div>&nbsp;</div>
<h1><strong>DATA PENYAKIT SISWA</strong></h1>
<hr>
<div>
    <?= Html::a('Set Riwayat Penyakit', ['riwayat-penyakit/create'], ['class' => 'btn btn-warning']) ?>
</div>
<table class="table table-borderd table-hover">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Penyakit</th>
            <th>Keterangan</th>
            <th>&nbsp;</th>
        </tr>
        <?php 
            $no = 1;
            foreach (RiwayatPenyakit::find()
            ->andWhere(['id_calon_siswa' => $model->id])
            ->all() as $Penyakit): ?>
            <tr>
                <td><?= $no++ ?></td>

                <td><?= $Penyakit->id_penyakit;?></td>

                <td><?= $Penyakit->keterangan?></td>

                <td> 
                    <?= Html::a('<i class="glyphicon glyphicon-edit"></i> ', ['/riwayat-penyakit/update', 'id' => $Penyakit->id]); ?>
                    <?= Html::a('<i class="glyphicon glyphicon-trash" style="color:red;"></i>',['riwayat-penyakit/delete','id' => $Penyakit->id],[
                            'data' => [
                                'confirm' => 'Are you sure you want to delete this item?',
                                'method' => 'post',
                            ]
                        ]); 
                    ?>
                </td>
            </tr>
        <?php endforeach ?>
    </thead>
</table>