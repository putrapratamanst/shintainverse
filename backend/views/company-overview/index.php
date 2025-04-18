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
<div class="company-overview-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Company Overview', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'slug',
            'description:ntext',
            'image',
            //'is_active',
            //'is_deleted',
            //'meta_title',
            //'meta_description:ntext',
            //'meta_keywords:ntext',
            //'meta_image',
            //'created_at',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, CompanyOverview $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
