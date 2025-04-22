<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\CompanyOverview $model */

$this->title = 'Update : ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Company Overviews', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="card">
    <div class="card-body">
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>

    </div>
</div>