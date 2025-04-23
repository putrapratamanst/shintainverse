<?php

use backend\models\CompanyOverview;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;

/** @var yii\web\View $this */
/** @var backend\models\CompanyOverviewSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Company Overviews';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="card">
    <!-- <div class="card-header">
        <h3 class="card-title"><?= Html::encode($this->title) ?></h3>
    </div> -->
    
    <div class="card-body">
        <p>
            <?= Html::a('Create Company Overview', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
        <?php Pjax::begin([
            'id' => 'pjax-grid-view', // Tentukan ID untuk PJAX
            'enablePushState' => false, // Nonaktifkan PushState jika tidak ingin URL berubah
            'linkSelector' => '#pjax-grid-view a', // Pastikan link di dalam GridView juga diproses oleh PJAX
        ]); ?>

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'layout' => '{items}', // Hanya menampilkan bagian grid items
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'title',
                'slug',

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