<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use yii\web\JqueryAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php
    $controller = Yii::$app->controller->id;
    $action = Yii::$app->controller->action->id;
    
    if ($controller == 'site' && $action == 'index') {
        $this->registerCssFile('@web/css/site.css', ['depends' => [\yii\web\YiiAsset::class]]);
    } elseif ($controller == 'service' && $action == 'view') {
        $this->registerCssFile('@web/css/service.css', ['depends' => [\yii\web\YiiAsset::class]]);
    } elseif ($controller == 'company-overview' && $action == 'view' || $controller == 'company-overview' && $action == 'index') {
        $slug = Yii::$app->request->get('slug');
        if ($slug) {
            $this->registerCssFile('@web/css/' . $slug . '.css', ['depends' => [\yii\web\YiiAsset::class]]);
        } else {
            $this->registerCssFile('@web/css/company-overview.css', ['depends' => [\yii\web\YiiAsset::class]]);
        }
            

    }

    $this->registerCssFile('@web/css/stm.css', ['depends' => [\yii\web\YiiAsset::class]]);
    $this->registerCssFile('@web/css/font-awesome.min.css', ['depends' => [\yii\web\YiiAsset::class]]);
    $this->registerJsFile('@web/js/countUp.js', ['depends' => [\yii\web\YiiAsset::class]]);
    JqueryAsset::register($this);

    ?> <?php $this->registerCsrfMetaTags() ?>

    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body class="home page-template-default page page-id-1024 site_layout_1  header_style_2 wpb-js-composer js-comp-ver-5.4.7 vc_responsive" data-new-gr-c-s-check-loaded="14.1232.0" data-gr-ext-installed="">
    <div id="wrapper">
        <?php $this->beginBody() ?>

        <div id="fullpage" class="content_wrapper">
            <?= $this->render('_header') ?>
            <div id="main">
                <?= $content ?>
            </div> <!--#main-->
        </div>
        <?= $this->render('_footer') ?>
        <?php $this->endBody() ?>
    </div>
</body>

</html>
<?php $this->endPage();
