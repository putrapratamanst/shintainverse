<?php

namespace backend\controllers;

use backend\models\CompanyOverview;
use backend\models\CompanyOverviewSearch;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CompanyOverviewController implements the CRUD actions for CompanyOverview model.
 */
class CompanyOverviewController extends Controller
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
     * Lists all CompanyOverview models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new CompanyOverviewSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single CompanyOverview model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionViewById($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    public function actionView($slug)
    {
        $model = $this->findModelBySlug($slug);
        return $this->render('view', [
            'model' => $model,
        ]);
    }


    /**
     * Creates a new CompanyOverview model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new CompanyOverview();

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                $model->slug = \yii\helpers\Inflector::slug($model->title);
                $model->created_at = date('Y-m-d H:i:s');
                $model->is_active = 1;
                $model->is_deleted = 0;
                $model->save();
                return $this->redirect(['view', 'slug' => $model->slug]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing CompanyOverview model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'slug' => $model->slug]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing CompanyOverview model.
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
     * Finds the CompanyOverview model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return CompanyOverview the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = CompanyOverview::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }


    protected function findModelBySlug($slug)
    {
        if (($model = CompanyOverview::findOne(['slug' => $slug])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionUploadImage()
    {
        $uploadedFile = \yii\web\UploadedFile::getInstanceByName('upload');
        $path = Yii::getAlias('@webroot/uploads/') . $uploadedFile->name;

        if ($uploadedFile->saveAs($path)) {
            $url = \Yii::$app->request->hostInfo . Yii::getAlias('@web/uploads/') . $uploadedFile->name;

            return json_encode([
                'uploaded' => 1,
                'fileName' => $uploadedFile->name,
                'url' => $url,
            ]);
        }

        return json_encode([
            'uploaded' => 0,
            'error' => ['message' => 'Upload failed.']
        ]);
    }
}
