<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\Banner $model */
/** @var yii\widgets\ActiveForm $form */
$list = ArrayHelper::map($companyOverview, 'slug', 'title');
?>

<div class="banner-form">
    <?php $form = ActiveForm::begin([
        'options' => ['enctype' => 'multipart/form-data']
    ]); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image')->fileInput() ?>
    <?php if ($model->image): ?>
        <div style="text-align:center;">
            <?= Html::img(Yii::getAlias('@web/' . $model->image), ['width' => '450']) ?>
        </div>
    <?php endif; ?>
    <?= $form->field($model, 'url')->textInput(['maxlength' => true])->dropDownList(
        $list,
        ['prompt' => '-- Silahkan Pilih --']
    )
    ?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>