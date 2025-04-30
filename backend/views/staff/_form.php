<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\Staff $model */
/** @var yii\widgets\ActiveForm $form */
$css = "staff.css";
if ($model->slug) {
    $css = $model->slug . '.css';
}
?>

<div class="staff-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'position')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'profile')->widget(\dosamigos\ckeditor\CKEditor::class, [
        'options' => ['rows' => 10],
        'preset' => 'full',
        'clientOptions' => [
            'allowedContent' => true, // Mengizinkan konten HTML apa saja
            'height' => 400,
            'extraPlugins' => 'uploadimage,image2',
            'removeDialogTabs' => 'image:advanced;link:advanced',
            'language' => 'id',
            'extraPlugins' => 'autogrow',
            'contentsCss' => Yii::getAlias('@web') . '/css/' . $css, // ✅ ini dia
            'autoGrow_minHeight' => 300,
            'autoGrow_maxHeight' => 800,
            'toolbar' => [
                ['name' => 'document', 'items' => ['Source', '-', 'NewPage', 'Preview', 'Print']],
                ['name' => 'clipboard', 'items' => ['Cut', 'Copy', 'Paste', 'Undo', 'Redo']],
                ['name' => 'editing', 'items' => ['Find', 'Replace']],
                ['name' => 'basicstyles', 'items' => ['Bold', 'Italic', 'Underline']],
                ['name' => 'paragraph', 'items' => ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent']],
                ['name' => 'insert', 'items' => ['Image', 'Table', 'HorizontalRule']],
                ['name' => 'styles', 'items' => ['Format', 'Font', 'FontSize']],
                ['name' => 'colors', 'items' => ['TextColor', 'BGColor']],
                ['name' => 'tools', 'items' => ['Maximize']],
            ],
        ],
    ]) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
