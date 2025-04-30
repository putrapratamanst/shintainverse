<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var backend\models\CompanyOverview $model */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Company Overviews', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);

$css = "company-overview.css";
if ($model->slug) {
    $css = $model->slug . '.css';
}
$this->registerCssFile('@web/css/'. $css, [
    'depends' => [\yii\web\JqueryAsset::class],
]);

?>
<div class="card">
    <div class="card-body">
        <p>
            <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                ],
            ]) ?>
        </p>

        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                // 'id',
                'title',
                // 'slug',
                [
                    'attribute' => 'description',
                    'format' => 'raw',
                    'value' => '<div class="preview-content">' . $model->description . '</div>',
                ],
                'image',
                // 'is_active',
                // 'is_deleted',
                // 'meta_title',
                // 'meta_description:ntext',
                // 'meta_keywords:ntext',
                // 'meta_image',
                // 'created_at',
            ],
        ]) ?>

    </div>
</div>