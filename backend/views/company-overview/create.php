<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\CompanyOverview $model */

$this->title = 'Create Company Overview';
$this->params['breadcrumbs'][] = ['label' => 'Company Overviews', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card">
    <div class="card-body">
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>
</div>