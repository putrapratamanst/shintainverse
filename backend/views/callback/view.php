<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var backend\models\Callback $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Callbacks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="card">
    <div class="card-body">
        <p>
            <?= Html::a('<i class="fa fa-arrow-left" aria-hidden="true"></i> Back', ['index'], ['class' => 'btn btn-success']) ?>
        </p>

        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                'first_name',
                'phone_number',
                'category',
            ],
        ]) ?>
    </div>
</div>