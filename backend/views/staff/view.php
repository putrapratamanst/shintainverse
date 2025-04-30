<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var backend\models\Staff $model */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Staff', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);

$css = "staff.css";

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
                'name',
                'slug',
                'position',
                [
                    'attribute' => 'profile',
                    'format' => 'raw',
                    'value' => '<div class="preview-content">' . $model->profile . '</div>',
                ],
            ],
        ]) ?>

    </div>
</div>