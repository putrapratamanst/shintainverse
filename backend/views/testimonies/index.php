<?php

use backend\models\Testimonies;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;

/** @var yii\web\View $this */
/** @var backend\models\TestimoniesSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Testimonies';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card">
    <div class="card-body">

        <p>
            <?= Html::a('Create Testimonies', ['create'], ['class' => 'btn btn-success']) ?>
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
                'role',
                'description:ntext',
                //'created_at',
                // Action column for edit, delete, etc.
                [
                    'class' => ActionColumn::className(),
                    'urlCreator' => function ($action, $model, $key, $index, $column) {
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