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
use yii\web\View;

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
        $this->registerCssFile('@web/css/owl.carousel.min.css', ['depends' => [\yii\web\YiiAsset::class]]);
        $this->registerCssFile('@web/css/owl.theme.default.min.css', ['depends' => [\yii\web\YiiAsset::class]]);
    } elseif ($controller == 'service' && $action == 'view') {
        $this->registerCssFile('@web/css/service.css', ['depends' => [\yii\web\YiiAsset::class]]);
    } elseif ($controller == 'service' && $action == 'index') {
        $this->registerCssFile('@web/css/service-list.css', ['depends' => [\yii\web\YiiAsset::class]]);
    } elseif ($controller == 'staff' && $action == 'index') {
        $this->registerCssFile('@web/css/list-staff.css', ['depends' => [\yii\web\YiiAsset::class]]);
    } elseif ($controller == 'staff' && $action == 'view') {
        $this->registerCssFile('@web/css/staff.css', ['depends' => [\yii\web\YiiAsset::class]]);
    } elseif ($controller == 'partner') {
        $this->registerCssFile('@web/css/partner.css', ['depends' => [\yii\web\YiiAsset::class]]);
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
    <?php $this->registerJsFile('@web/js/jquery.min.js', [
        'position' => View::POS_HEAD,
        'id' => 'jquery-core-js' // ID untuk tag <script>
    ]);   ?>
    <?php $this->registerJsFile('@web/js/jquery-migrate.min.js', [
        'position' => View::POS_HEAD,
        'id' => 'jquery-migrate-js' // ID untuk tag <script>
    ]);   ?>
   
    
</head>
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
        <?php
        if (Yii::$app->request->url == '/') {
            $this->registerJsFile('@web/js/vc_carousel.min.js', ['depends' => [\yii\web\YiiAsset::class]]);
            $this->registerJsFile('@web/js/transition.min.js', ['depends' => [\yii\web\YiiAsset::class]]);
            $this->registerJsFile('@web/js/owl.carousel.min.js', ['depends' => [\yii\web\YiiAsset::class]]);
        }

        ?>
        <link rel="stylesheet" id="vc_carousel_css-css" href="https://shintainserve.com/wp-content/plugins/js_composer/assets/lib/vc_carousel/css/vc_carousel.min.css?ver=5.4.7" type="text/css" media="all">

        <script type="text/javascript" src="https://www.google.com/recaptcha/api.js?render=6LestKoUAAAAAJb_Cgo-uWyu2IfT_3SZuU9xC1-i&amp;ver=3.0" id="google-recaptcha-js"></script>
        <script type="text/javascript" src="https://shintainserve.com/wp-content/themes/consulting/assets/js/bootstrap.min.js?ver=4.1.3" id="bootstrap-js"></script>
        <script type="text/javascript" src="https://shintainserve.com/wp-content/themes/consulting/assets/js/select2.min.js?ver=4.1.3" id="select2-js"></script>
        <script type="text/javascript" src="https://shintainserve.com/wp-content/themes/consulting/assets/js/owl.carousel.min.js?ver=2.2.1" id="owl.carousel.min-js"></script>
        <script type="text/javascript" src="https://shintainserve.com/wp-content/themes/consulting/assets/js/custom.js?ver=4.1.3" id="consulting-custom-js"></script>
        <script type="text/javascript" src="https://shintainserve.com/wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min.js?ver=5.4.7" id="wpb_composer_front_js-js"></script>
        <script type="text/javascript" src="https://shintainserve.com/wp-content/themes/consulting/assets/js/countUp.min.js?ver=4.1.3" id="countUp-js"></script>
        <script type="text/javascript" src="https://shintainserve.com/wp-content/plugins/js_composer/assets/lib/vc_carousel/js/transition.min.js?ver=5.4.7" id="vc_transition_bootstrap_js-js"></script>
        <script type="text/javascript" src="https://shintainserve.com/wp-content/plugins/js_composer/assets/lib/vc_carousel/js/vc_carousel.min.js?ver=5.4.7" id="vc_carousel_js-js"></script>

        <?php $this->endBody() ?>
    </div>
</body>

</html>
<?php $this->endPage();
