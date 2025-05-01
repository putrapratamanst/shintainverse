<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var backend\models\Banner $model */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Banners', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
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
                'title',
                'description',
                [
                    'attribute' => 'image',
                    'format' => ['image', ['width' => '900', 'height' => '350']], // atur ukuran di sini
                    'value' => function ($model) {
                        return $model->image ? Yii::getAlias('@web/' . $model->image) : null;
                    },
                    'visible' => !empty($model->image), // Opsional: sembunyikan jika tidak ada foto
                ],
                'url:url',
            ],
        ]) ?>

    </div>
</div>