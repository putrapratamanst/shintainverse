<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var backend\models\Feedback $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Feedbacks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="card">
    <div class="card-body">
        <p>
            <?= Html::a('<i class="fa fa-arrow-left" aria-hidden="true"></i> Back', ['index'], ['class' => 'btn btn-success']) ?>
            <?= Html::a('<i class="fa fa-arrow-left" aria-hidden="true"></i> Back', ['index'], ['class' => 'btn btn-success']) ?>
        </p>

        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                'first_name',
                'last_name',
                'email:email',
                'phone_number',
                'city',
                'province',
            ],
        ]) ?>

    </div>
</div>