<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var backend\models\Testimonies $model */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Testimonies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="card">
    <div class="card-body">
        <p>
            <?= Html::a('<i class="fa fa-arrow-left" aria-hidden="true"></i> Back', ['index'], ['class' => 'btn btn-success']) ?>
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
                'role',
                'description:ntext',
            ],
        ]) ?>

    </div>
</div>