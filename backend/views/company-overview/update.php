<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\CompanyOverview $model */

$this->title = 'Update Company Overview: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Company Overviews', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="company-overview-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
