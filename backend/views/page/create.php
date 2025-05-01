<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Page $model */

$this->title = 'Create Page';
$this->params['breadcrumbs'][] = ['label' => 'Pages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card">
    <div class="card-body">
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>

    </div>
</div>