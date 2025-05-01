<?php

use backend\models\Banner;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\BannerSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Banners';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card">
    <div class="card-body">

        <p>
            <?= Html::a('Create Banner', ['create'], ['class' => 'btn btn-success']) ?>
        </p>

        <?php // echo $this->render('_search', ['model' => $searchModel]); 
        ?>

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'layout' => '{items}', // Hanya menampilkan bagian grid items
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                // 'id',
                'title',
                [
                    'attribute' => 'image',
                    'format' => ['image', ['width' => '450', 'height' => '400']], // atur ukuran di sini
                    'value' => function ($model) {
                        return $model->image ? Yii::getAlias('@web/' . $model->image) : null;
                    },
                    'visible' => !empty($model->image), // Opsional: sembunyikan jika tidak ada foto
                ],

                // 'url:url',
                // 'is_active', 
                [
                    'class' => ActionColumn::className(),
                    'urlCreator' => function ($action, Banner $model, $key, $index, $column) {
                        return Url::toRoute([$action, 'id' => $model->id]);
                    }
                ],
            ],
        ]); ?>
    </div>

    <div class="card-footer clearfix">
        <?= \yii\widgets\LinkPager::widget([
            'pagination' => $dataProvider->pagination,
            'options' => ['class' => 'pagination pagination-sm m-0 float-right'],
        ]) ?>
    </div>

</div>