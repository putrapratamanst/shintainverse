<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\Service $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="service-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>
    
    <?= $form->field($model, 'summary')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'coverage')->textInput(['placeholder' => 'Enter values separated by comma']);?>

    <?= $form->field($model, 'types')->textInput(['placeholder' => 'Enter values separated by comma']);?>

    <?= $form->field($model, 'image')->fileInput() ?>
    <?php if ($model->image): ?>
        <div style="text-align:center;">
            <?= Html::img(Yii::getAlias('@web/' . $model->image), ['width' => '450']) ?>
        </div>
    <?php endif; ?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>