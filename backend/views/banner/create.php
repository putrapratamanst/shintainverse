<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Banner $model */

$this->title = 'Create Banner';
$this->params['breadcrumbs'][] = ['label' => 'Banners', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card">
    <div class="card-body">
        <?= $this->render('_form', [
            'model' => $model,
            'companyOverview' => $companyOverview
        ]) ?>

    </div>
</div>