<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "formulir".
 *
 * @property int $id
 * @property int $id_calon_siswa
 * @property string $nama_lengkap
 * @property string $nisn
 * @property string $nik
 * @property string $alamat
 * @property int $jarak_sekolah
 * @property int $id_jalur_pendaftaran
 * @property int $id_smp
 * @property int $id_agama
 * @property int $id_jurusan
 * @property int $id_jurusan_2
 * @property int $nama_orang_tua
 * @property int $tinggi_badan
 * @property int $berat_badan
 * @property string $tanggal_daftar
 * @property string $keterangan
 * @property Smp $smp
 * @property Jurusan $jurusan
 * @property Agama $agama
 * @property CalonSiswa $calonSiswa
 * @property JalurPendaftaran $jalurPendaftaran
 * @property Jurusan $jurusan2
 * @property RiwayatPenyakit[] $riwayatPenyakits
 */
class Formulir extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'formulir';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_calon_siswa', 'nama_lengkap', 'nisn', 'nik', 'alamat', 'jarak_sekolah', 'id_jalur_pendaftaran', 'id_smp', 'id_agama', 'id_jurusan', 'nama_orang_tua', 'tinggi_badan', 'berat_badan', 'tanggal_daftar', 'img'], 'required'],
            [['id_calon_siswa', 'jarak_sekolah', 'id_jalur_pendaftaran', 'id_smp', 'id_agama', 'id_jurusan', 'id_jurusan_2', 'tinggi_badan', 'berat_badan'], 'integer'],
            [['nama_lengkap', 'alamat', 'keterangan', 'nama_orang_tua'], 'string'],
            [['tanggal_daftar', 'id_jurusan_2','keterangan'], 'safe'],
            [['nisn', 'nik'], 'string', 'max' => 255],
            [['id_smp'], 'exist', 'skipOnError' => true, 'targetClass' => Smp::className(), 'targetAttribute' => ['id_smp' => 'id']],
            [['id_jurusan'], 'exist', 'skipOnError' => true, 'targetClass' => Jurusan::className(), 'targetAttribute' => ['id_jurusan' => 'id']],
            [['id_agama'], 'exist', 'skipOnError' => true, 'targetClass' => Agama::className(), 'targetAttribute' => ['id_agama' => 'id']],
            [['id_calon_siswa'], 'exist', 'skipOnError' => true, 'targetClass' => CalonSiswa::className(), 'targetAttribute' => ['id_calon_siswa' => 'id']],
            [['id_jalur_pendaftaran'], 'exist', 'skipOnError' => true, 'targetClass' => JalurPendaftaran::className(), 'targetAttribute' => ['id_jalur_pendaftaran' => 'id']],
            [['id_jurusan_2'], 'exist', 'skipOnError' => true, 'targetClass' => Jurusan::className(), 'targetAttribute' => ['id_jurusan_2' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_calon_siswa' => 'Calon Siswa',
            'nama_lengkap' => 'Nama Lengkap',
            'nisn' => 'NISN',
            'nik' => 'NIK',
            'alamat' => 'Alamat',
            'jarak_sekolah' => 'Jarak Sekolah',
            'id_jalur_pendaftaran' => 'Metode Jalur Pendaftaran',
            'id_smp' => 'Asal Smp',
            'id_agama' => 'Agama',
            'id_jurusan' => 'Target Jurusan Jurusan 1',
            'id_jurusan_2' => 'Target Jurusan 2',
            'nama_orang_tua' => 'Nama Orang Tua',
            'tinggi_badan' => 'Tinggi Badan',
            'berat_badan' => 'Berat Badan',
            'tanggal_daftar' => 'Tanggal Daftar',
            'keterangan' => 'Keterangan',
            'img' => 'img',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSmp()
    {
        return $this->hasOne(Smp::className(), ['id' => 'id_smp']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJurusan()
    {
        return $this->hasOne(Jurusan::className(), ['id' => 'id_jurusan']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAgama()
    {
        return $this->hasOne(Agama::className(), ['id' => 'id_agama']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCalonSiswa()
    {
        return $this->hasOne(CalonSiswa::className(), ['id' => 'id_calon_siswa']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJalurPendaftaran()
    {
        return $this->hasOne(JalurPendaftaran::className(), ['id' => 'id_jalur_pendaftaran']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJurusan2()
    {
        return $this->hasOne(Jurusan::className(), ['id' => 'id_jurusan_2']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRiwayatPenyakits()
    {
        return $this->hasMany(RiwayatPenyakit::className(), ['id_formulir' => 'id']);
    }

}
