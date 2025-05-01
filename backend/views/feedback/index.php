<?php

use backend\models\Feedback;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;

/** @var yii\web\View $this */
/** @var backend\models\FeedbackSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Feedbacks';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="card">
    <!-- <div class="card-header">
        <h3 class="card-title"><?= Html::encode($this->title) ?></h3>
    </div> -->

    <div class="card-body">

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
               'first_name',
            'last_name',
            'email:email',
            'phone_number',
                [
                    'attribute' => 'is_read',
                    'value' => function ($model) {
                        return $model->is_read == 1 ? 'Readed' : 'Unreaded';
                    }
                ],
                [
                    'class' => ActionColumn::className(),
                    'template' => '{view}',
                    'urlCreator' => function ($action, Feedback $model, $key, $index, $column) {
                        return Url::toRoute([$action, 'id' => $model->id]);
                    }
                ],
            ],
            'rowOptions' => function ($model) {
                if ($model->is_read == 1) {
                    return ['style' => 'background-color: #e0f9e0'];
                } else {
                    return ['style' => 'background-color: #f9e0e0'];
                }
            },
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

