<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Partner $model */

$this->title = 'Create Partner';
$this->params['breadcrumbs'][] = ['label' => 'Partners', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card">
    <div class="card-body">
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>

    </div>
</div>