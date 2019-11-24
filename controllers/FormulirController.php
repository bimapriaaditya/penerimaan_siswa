<?php

namespace app\controllers;

use Yii;
use app\models\Formulir;
use app\models\CalonSiswa;
use app\models\FormulirSearch;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\UploadedFile;

/**
 * FormulirController implements the CRUD actions for Formulir model.
 */
class FormulirController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Formulir models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new FormulirSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Formulir model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Formulir model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($id_calon_siswa)
    {
        $model = new Formulir();

        $model->id_calon_siswa = $id_calon_siswa;

        if ($model->load(Yii::$app->request->post())) {

            $siswaId = $model->id;
            $image = UploadedFile::getInstance($model, 'img');
            $imgName = 'siswa_' . $siswaId . '.' . $image->getExtension();
            $image->saveAs(Yii::getAlias('@formulirImgPath') . '/' . $imgName);
            $model->img = $imgName;
            $model->save();

            return $this->redirect(['/calon-siswa/view', 'id' => $model->id_calon_siswa]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Formulir model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = new Formulir();
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {

            $siswaId = $model->id;
            $image = UploadedFile::getInstance($model, 'img');
            $imgName = 'siswa_' . $siswaId . '.' . $image->getExtension();
            $image->saveAs(Yii::getAlias('@formulirImgPath') . '/' . $imgName);
            $model->img = $imgName;
            $model->save();

            return $this->redirect(['/calon-siswa/view', 'id' => $model->id_calon_siswa]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Formulir model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);

        $this->findModel($id)->delete();

        return $this->redirect(['/calon-siswa/view', 'id' => $model->id_calon_siswa]);
    }

    /**
     * Finds the Formulir model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Formulir the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Formulir::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
