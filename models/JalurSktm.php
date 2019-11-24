<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "jalur_sktm".
 *
 * @property int $id
 * @property int $id_calon_siswa
 * @property int $nilai_mtk
 * @property int $nilai_indo
 * @property int $nilai_ipa
 * @property int $nilai_inggris
 * @property int $id_pekerjaan_ibu
 * @property int $id_penghasilan_ibu
 * @property int $id_pekerjaan_ayah
 * @property int $id_penghasilan_ayah
 * @property int $id_tempat_tinggal
 *
 * @property Pekerjaan $pekerjaanAyah
 * @property Pekerjaan $pekerjaanIbu
 * @property TempatTinggal $tempatTinggal
 * @property Penghasilan $penghasilanAyah
 * @property Penghasilan $penghasilanIbu
 * @property CalonSiswa $calonSiswa
 */
class JalurSktm extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jalur_sktm';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_calon_siswa', 'nilai_mtk', 'nilai_indo', 'nilai_ipa', 'nilai_inggris', 'nilai_un', 'id_tempat_tinggal'], 'required'],
            [['id_calon_siswa', 'nilai_mtk', 'nilai_indo', 'nilai_ipa', 'nilai_inggris', 'nilai_un', 'id_pekerjaan_ibu', 'id_penghasilan_ibu', 'id_pekerjaan_ayah', 'id_penghasilan_ayah', 'id_tempat_tinggal'], 'integer'],
            [['id_pekerjaan_ibu','id_penghasilan_ibu','id_pekerjaan_ayah','id_penghasilan_ayah'],'safe'],
            [['id_pekerjaan_ayah'], 'exist', 'skipOnError' => true, 'targetClass' => Pekerjaan::className(), 'targetAttribute' => ['id_pekerjaan_ayah' => 'id']],
            [['id_pekerjaan_ibu'], 'exist', 'skipOnError' => true, 'targetClass' => Pekerjaan::className(), 'targetAttribute' => ['id_pekerjaan_ibu' => 'id']],
            [['id_tempat_tinggal'], 'exist', 'skipOnError' => true, 'targetClass' => TempatTinggal::className(), 'targetAttribute' => ['id_tempat_tinggal' => 'id']],
            [['id_penghasilan_ayah'], 'exist', 'skipOnError' => true, 'targetClass' => Penghasilan::className(), 'targetAttribute' => ['id_penghasilan_ayah' => 'id']],
            [['id_penghasilan_ibu'], 'exist', 'skipOnError' => true, 'targetClass' => Penghasilan::className(), 'targetAttribute' => ['id_penghasilan_ibu' => 'id']],
            [['id_calon_siswa'], 'exist', 'skipOnError' => true, 'targetClass' => CalonSiswa::className(), 'targetAttribute' => ['id_calon_siswa' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_calon_siswa' => 'Id Calon Siswa',
            'nilai_mtk' => 'Nilai Matematika',
            'nilai_indo' => 'Nilai Bahasa Indonesia',
            'nilai_ipa' => 'Nilai Ilmu Pengetahuan Alam (IPA) ',
            'nilai_inggris' => 'Nilai Bahasa Inggris',
            'nilai_un' => 'Nilai UN',
            'id_pekerjaan_ibu' => 'Pekerjaan Ibu',
            'id_penghasilan_ibu' => 'Penghasilan Ibu',
            'id_pekerjaan_ayah' => 'Pekerjaan Ayah',
            'id_penghasilan_ayah' => 'Penghasilan Ayah',
            'id_tempat_tinggal' => 'Tempat Tinggal',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPekerjaanAyah()
    {
        return $this->hasOne(Pekerjaan::className(), ['id' => 'id_pekerjaan_ayah']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPekerjaanIbu()
    {
        return $this->hasOne(Pekerjaan::className(), ['id' => 'id_pekerjaan_ibu']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTempatTinggal()
    {
        return $this->hasOne(TempatTinggal::className(), ['id' => 'id_tempat_tinggal']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenghasilanAyah()
    {
        return $this->hasOne(Penghasilan::className(), ['id' => 'id_penghasilan_ayah']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenghasilanIbu()
    {
        return $this->hasOne(Penghasilan::className(), ['id' => 'id_penghasilan_ibu']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCalonSiswa()
    {
        return $this->hasOne(CalonSiswa::className(), ['id' => 'id_calon_siswa']);
    }

    public function setJumlahUn()
    {
        $mtk = $this->nilai_mtk;
        $indo = $this->nilai_indo;
        $ipa = $this->nilai_ipa;
        $inggris = $this->nilai_inggris;

        $hasil = $mtk + $indo + $ipa + $inggris;
        return $hasil;
    }

    
}
