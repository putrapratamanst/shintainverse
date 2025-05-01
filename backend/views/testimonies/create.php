<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Testimonies $model */

$this->title = 'Create Testimonies';
$this->params['breadcrumbs'][] = ['label' => 'Testimonies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card">
    <div class="card-body">
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>

    </div>
</div>