<?php

use backend\models\Partner;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;

/** @var yii\web\View $this */
/** @var backend\models\PartnerSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Partners';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="card">
    <!-- <div class="card-header">
        <h3 class="card-title"><?= Html::encode($this->title) ?></h3>
    </div> -->

    <div class="card-body">
        <p>
            <?= Html::a('Create Staff', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
        <?php Pjax::begin([
            'id' => 'pjax-grid-view', // Tentukan ID untuk PJAX
            'enablePushState' => false, // Nonaktifkan PushState jika tidak ingin URL berubah
            'linkSelector' => '#pjax-grid-view a', // Pastikan link di dalam GridView juga diproses oleh PJAX
        ]); ?>

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'name',
                'category',
                [
                    'attribute' => 'description',
                    'value' => function ($model) {
                        return \yii\helpers\StringHelper::truncate($model->description, 80); // Potong jadi 100 karakter
                    },
                    'format' => 'ntext',
                ],
                [
                    'class' => ActionColumn::className(),
                    'urlCreator' => function ($action, Partner $model, $key, $index, $column) {
                        return Url::toRoute([$action, 'id' => $model->id]);
                    }
                ],
            ],
        ]); ?>

        <?php Pjax::end(); ?>
    </div>
    <div class="card-footer clearfix">
        <?= \yii\widgets\LinkPager::widget([
            'pagination' => $dataProvider->pagination,
            'options' => ['class' => 'pagination pagination-sm m-0 float-right'],
        ]) ?>
    </div>
</div>