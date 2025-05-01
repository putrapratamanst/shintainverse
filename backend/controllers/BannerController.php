<?php

namespace backend\controllers;

use backend\models\Banner;
use backend\models\BannerSearch;
use backend\models\CompanyOverview;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * BannerController implements the CRUD actions for Banner model.
 */
class BannerController extends Controller
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
     * Lists all Banner models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new BannerSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Banner model.
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
     * Creates a new Banner model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Banner();
        $companyOverview = CompanyOverview::find()->where(['is_active' => 1])->all();

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                $model->is_active = 1;
                $model->image = UploadedFile::getInstance($model, 'image');
                if ($model->image) {
                    $filename = 'uploads/banner/' . uniqid() . '.' . $model->image->extension;
                    $model->image->saveAs($filename);
                    $model->image = $filename;
                    $model->save(false);
                }
                $model->save();
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
            'companyOverview' => $companyOverview
        ]);
    }

    /**
     * Updates an existing Banner model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $companyOverview = CompanyOverview::find()->where(['is_active' => 1])->all();

        // Simpan gambar lama sebelum proses update
        $oldImage = $model->image;

        if ($this->request->isPost && $model->load($this->request->post())) {
            // Ambil gambar yang baru di-upload
            $model->image = UploadedFile::getInstance($model, 'image');

            if ($model->image) {
                // Jika ada gambar baru, hapus gambar lama dan simpan gambar baru
                if (!empty($oldImage) && file_exists(Yii::getAlias('@webroot/banner/' . $oldImage))) {
                    unlink(Yii::getAlias('@webroot/banner/' . $oldImage)); // Hapus gambar lama
                }

                // Simpan gambar baru
                $filename = 'uploads/banner/' . uniqid() . '.' . $model->image->extension;
                $model->image->saveAs(Yii::getAlias('@webroot/' . $filename));
                $model->image = $filename; // Set gambar baru
            } else {
                // Jika tidak ada gambar baru, tetap gunakan gambar lama
                $model->image = $oldImage;
            }

            // Simpan model tanpa validasi file (karena kita sudah menangani gambar)
            if ($model->save(false)) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }

        return $this->render('update', [
            'model' => $model,
            'companyOverview' => $companyOverview
        ]);
    }

    /**
     * Deletes an existing Banner model.
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
     * Finds the Banner model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Banner the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Banner::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
