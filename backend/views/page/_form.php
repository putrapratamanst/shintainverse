<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\Page $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="page-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'page')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'content')->widget(\dosamigos\ckeditor\CKEditor::class, [
        'options' => ['rows' => 10],
        'preset' => 'full',
        'clientOptions' => [
            'allowedContent' => true, // Mengizinkan konten HTML apa saja
            'height' => 400,
            'extraPlugins' => 'uploadimage,image2',
            'contentsCss' => Yii::getAlias('@web') . '/css/page.css', // ✅ ini dia
            'filebrowserImageUploadUrl' => \yii\helpers\Url::to(['company-overview/upload-image']), // buat endpoint upload sendiri
            'removeDialogTabs' => 'image:advanced;link:advanced',
            'language' => 'id',
            'extraPlugins' => 'autogrow',
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
