<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\Partner $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="partner-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'category')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image')->fileInput() ?>
    <?php if ($model->image): ?>
        <div style="text-align:center;">
            <?= Html::img(Yii::getAlias('@web/' . $model->image), ['width' => '300']) ?>
        </div>
    <?php endif; ?>
    <?= $form->field($model, 'description')->textarea(['rows' => 5]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
