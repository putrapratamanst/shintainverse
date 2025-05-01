<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Banner $model */

$this->title = 'Update Banner: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Banners', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="card">
    <div class="card-body">
        <?= $this->render('_form', [
            'model' => $model,
            'companyOverview' => $companyOverview
        ]) ?>

    </div>
</div>