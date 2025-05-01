<?php

namespace backend\controllers;

use backend\models\Service;
use backend\models\ServiceSearch;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\imagine\Image;

/**
 * ServiceController implements the CRUD actions for Service model.
 */
class ServiceController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Service models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ServiceSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Service model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Service model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Service();

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                $coverage = $model->coverage;
                $dataCoverage = explode(',', $coverage);  // Array: ['value1', 'value2', 'value3']

                // Memecah string menjadi array berdasarkan koma
        

                $model->slug = \yii\helpers\Inflector::slug($model->title);
                $model->created_at = date('Y-m-d H:i:s');
                $model->is_active = 1;
                $model->is_deleted = 0;
                $model->image = UploadedFile::getInstance($model, 'image');
                if ($model->image) {
                    $uploadPath = 'uploads/service/';
                    $originalName = uniqid(); // nama acak agar unik
                    $extension = $model->image->extension;
                    $originalFileName = $originalName . '.' . $extension;
                    $fullOriginalPath = $uploadPath . $originalFileName;

                    $model->image->saveAs($fullOriginalPath);
                    $model->image = $fullOriginalPath;


                    $model->save(false);

                    // Buat thumbnail
                    $width = 300;
                    $height = 300;
                    $thumbFileName = $originalName . "_{$width}x{$height}." . $extension;
                    $fullThumbPath = $uploadPath . $thumbFileName;

                    Image::thumbnail($fullOriginalPath, $width, $height)
                        ->save($fullThumbPath, ['quality' => 85]);
                }
                $model->save();
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Service model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $oldImage = $model->image;

        if ($this->request->isPost && $model->load($this->request->post())) {
            $model->image = UploadedFile::getInstance($model, 'image');

            if ($model->image) {
                if (!empty($oldImage) && file_exists(Yii::getAlias('@webroot/service/' . $oldImage))) {
                    unlink(Yii::getAlias('@webroot/service/' . $oldImage));
                }

                $filename = 'uploads/service/' . uniqid() . '.' . $model->image->extension;
                $model->image->saveAs(Yii::getAlias('@webroot/' . $filename));
                $model->image = $filename;
            } else {
                $model->image = $oldImage;
            }

            if ($model->save(false)) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }


    /**
     * Deletes an existing Service model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Service model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Service the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Service::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
