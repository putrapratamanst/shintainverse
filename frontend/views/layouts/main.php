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
    $this->registerCssFile('@web/css/site.css', ['depends' => [\yii\web\YiiAsset::class]]);
    $this->registerCssFile('@web/css/stm.css', ['depends' => [\yii\web\YiiAsset::class]]);
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
                <?= $this->render('_banner') ?>

                <div class="container">

                    <div class="content-area">

                        <article id="post-1024" class="post-1024 page type-page status-publish hentry">

                            <div class="entry-content">
                                <div data-vc-full-width="true" data-vc-full-width-init="true" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_custom_1532347975495 vc_row-no-padding" style="position: relative; left: -190.4px; box-sizing: border-box; width: 1521px;">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_row-full-width vc_clearfix"></div>
                                <div data-vc-full-width="true" data-vc-full-width-init="true" class="vc_row wpb_row vc_row-fluid third_bg_color vc_custom_1450692516354" style="position: relative; left: -190.4px; box-sizing: border-box; width: 1521px; padding-left: 190.4px; padding-right: 190.6px;">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">

                                                <section class="vc_cta3-container">
                                                    <div class="vc_general vc_cta3 third_bg_color vc_cta3-style-flat vc_cta3-shape-square vc_cta3-align-left vc_cta3-color-classic vc_cta3-icon-size-md vc_cta3-actions-right vc_custom_1548480653973">
                                                        <div class="vc_cta3_content-container">
                                                            <div class="vc_cta3-content">
                                                                <header class="vc_cta3-content-header">
                                                                    <div class="vc_custom_heading">
                                                                        <h2 style="font-size: 20px;color: #000000;line-height: 24px">Looking for a professional insurance Consultant?</h2>
                                                                    </div>
                                                                </header>
                                                            </div>
                                                            <div class="vc_cta3-actions">
                                                                <div class="vc_btn3-container vc_btn3-right">
                                                                    <a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-flat vc_btn3-block vc_btn3-icon-right vc_btn3-color-theme_style_2" href="http://clients.sorbetoutsourcing.com/shintainserve/contact-us-2/" title="">contact us <i class="vc_btn3-icon fa fa-chevron-right"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_row-full-width vc_clearfix"></div>
                                <div class="vc_row wpb_row vc_row-fluid vc_custom_1450856873483">
                                    <div class="wpb_column vc_column_container vc_col-sm-8">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="stm_animation stm_viewport" style="opacity:1;-webkit-transition-delay: 0s; -moz-transition-delay: 0s; transition-delay: 0s;" data-animate="fadeInUp" data-animation-delay="0" data-animation-duration="1" data-viewport_position="90">

                                                    <div class="info_box style_5 animated fadeInUp" style="opacity:1;-webkit-animation-delay:0s;-webkit-animation-duration:1s; -moz-animation-delay:0s;-moz-animation-duration:1s; animation-delay:0s;">






                                                        <div class="title">
                                                            <h3>What is insurance brokers</h3>
                                                        </div>
                                                        <p>One of the most important aspects of insuring your business is selecting an appropriate level of insurance coverage. When coping with the unexpected, reliable advice from a seasoned professional would be a great addition to your company’s strategy.</p>
                                                        <a class="read_more" target="_self" href="http://clients.sorbetoutsourcing.com/shintainserve/company-overview/what-is-insurance-brokers/"><span>read more</span><i class=" fa fa-chevron-right stm_icon"></i></a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-4">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="stm_animation stm_viewport" style="opacity:1;-webkit-transition-delay: 0.1s; -moz-transition-delay: 0.1s; transition-delay: 0.1s;" data-animate="fadeInUp" data-animation-delay="0.1" data-animation-duration="1" data-viewport_position="90">

                                                    <div class="info_box style_5 animated fadeInUp" style="opacity:1;-webkit-animation-delay:0.1s;-webkit-animation-duration:1s; -moz-animation-delay:0.1s;-moz-animation-duration:1s; animation-delay:0.1s;">






                                                        <div class="title">
                                                            <h3>Are You Looking for Insurance Advisor?</h3>
                                                        </div>
                                                        <p>Long term beneficial solutions for corporations, businesses, and individuals.</p>
                                                        <a class="read_more" target="_self" href="http://clients.sorbetoutsourcing.com/shintainserve/company-overview/our-approach/"><span>read more</span><i class=" fa fa-chevron-right stm_icon"></i></a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_row wpb_row vc_row-fluid vc_custom_1450856873483">
                                    <div class="wpb_column vc_column_container vc_col-sm-4">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="stm_animation stm_viewport" style="opacity:1;-webkit-transition-delay: 0.05s; -moz-transition-delay: 0.05s; transition-delay: 0.05s;" data-animate="fadeInUp" data-animation-delay="0.05" data-animation-duration="1" data-viewport_position="90">

                                                    <div class="info_box style_5 animated fadeInUp" style="opacity:1;-webkit-animation-delay:0.05s;-webkit-animation-duration:1s; -moz-animation-delay:0.05s;-moz-animation-duration:1s; animation-delay:0.05s;">






                                                        <div class="title">
                                                            <h3>Benefit for you</h3>
                                                        </div>
                                                        <p>We offer rapid solution to complex business challenges with cooperative and process-driven steps to ensure the long-term health of your company.</p>
                                                        <a class="read_more" target="_self" href="http://clients.sorbetoutsourcing.com/shintainserve/company-overview/benefits-for-you/"><span>read more</span><i class=" fa fa-chevron-right stm_icon"></i></a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-4">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="stm_animation stm_viewport" style="opacity:1;-webkit-transition-delay: 0.1s; -moz-transition-delay: 0.1s; transition-delay: 0.1s;" data-animate="fadeInUp" data-animation-delay="0.1" data-animation-duration="1" data-viewport_position="90">

                                                    <div class="info_box style_1 animated fadeInUp" style="opacity:1;-webkit-animation-delay:0.1s;-webkit-animation-duration:1s; -moz-animation-delay:0.1s;-moz-animation-duration:1s; animation-delay:0.1s;">




                                                        <div class="info_box_image"><img width="440" height="184" src="https://shintainserve.com/wp-content/uploads/2019/01/logo-shinta-small.jpg" class="attachment-full" alt="" decoding="async" loading="lazy" srcset="https://shintainserve.com/wp-content/uploads/2019/01/logo-shinta-small.jpg 440w, https://shintainserve.com/wp-content/uploads/2019/01/logo-shinta-small-300x125.jpg 300w" sizes="(max-width: 440px) 100vw, 440px"></div>


                                                        <div class="title">
                                                            <h4 class="no_stripe">About Us</h4>
                                                        </div>
                                                        <p>PT Shinta Inserve is a specialist in insurance brokerage and consulting services. We have been serving clients across a variety of industries since our inception in 1990, and have obtained a license from the Ministry of Finance of the Republic of Indonesia, which was ratified by Decree No.KEP.167/KM.13/1990.</p>
                                                        <a class="read_more" target="_self" href="http://clients.sorbetoutsourcing.com/shintainserve/company-overview/company-history/">Read More</a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-4">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="stm_animation stm_viewport" style="opacity:1;-webkit-transition-delay: 0.05s; -moz-transition-delay: 0.05s; transition-delay: 0.05s;" data-animate="fadeInUp" data-animation-delay="0.05" data-animation-duration="1" data-viewport_position="90">

                                                    <div class="info_box style_1 animated fadeInUp" style="opacity:1;-webkit-animation-delay:0.05s;-webkit-animation-duration:1s; -moz-animation-delay:0.05s;-moz-animation-duration:1s; animation-delay:0.05s;">




                                                        <div class="info_box_image"><img width="440" height="184" src="https://shintainserve.com/wp-content/uploads/2019/01/career-small.jpg" class="attachment-full" alt="" decoding="async" loading="lazy" srcset="https://shintainserve.com/wp-content/uploads/2019/01/career-small.jpg 440w, https://shintainserve.com/wp-content/uploads/2019/01/career-small-300x125.jpg 300w" sizes="(max-width: 440px) 100vw, 440px"></div>


                                                        <div class="title">
                                                            <h4 class="no_stripe">Careers</h4>
                                                        </div>
                                                        <p>We are continuously searching for talents with enthusiasm for success and excellence. Join our team today.</p>
                                                        <a class="read_more" target="_self" href="http://clients.sorbetoutsourcing.com/shintainserve/company-overview/careers/">Read More</a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-vc-full-width="true" data-vc-full-width-init="true" class="vc_row wpb_row vc_row-fluid third_bg_color vc_custom_1532349306944 vc_row-has-fill" style="position: relative; left: -190.4px; box-sizing: border-box; width: 1521px; padding-left: 190.4px; padding-right: 190.6px;">
                                    <div class="wpb_column vc_column_container vc_col-sm-3">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="vc_custom_heading vc_custom_1550044147500 text_align_left title_no_stripe">
                                                    <h5 style="text-align: left">Over 20 Years of Excellence</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-3">
                                        <div class="vc_column-inner vc_custom_1532349882119">
                                            <div class="wpb_wrapper">
                                                <div class="stats_counter style_2 center ">
                                                    <div class="inner">
                                                        <h3 class="no_stripe" id="counter_6805387d04e30">0%</h3>
                                                        <div class="counter_description">
                                                            <p>cases<br>
                                                                completed</p>
                                                        </div>
                                                        <?php
                                                        $this->registerJs("
    var counter = new countUp('counter_6805387d04e30', 0, 100, 0, 2.5, {
        useEasing: true,
        useGrouping: false,
        prefix: '',
        suffix: '%'
    });

    $(window).scroll(function() {
        if ($('#counter_6805387d04e30').is_on_screen()) {
            counter.start();
        }
    });
", \yii\web\View::POS_READY);
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-3">
                                        <div class="vc_column-inner vc_custom_1532349889927">
                                            <div class="wpb_wrapper">
                                                <div class="stats_counter style_2 center ">
                                                    <div class="inner">
                                                        <h3 class="no_stripe" id="counter_6805387d050bb">0</h3>
                                                        <div class="counter_description">
                                                            <p>number of<br>
                                                                clients</p>
                                                        </div>
                                                        <?php
                                                        $this->registerJs("
    var counter = new countUp('counter_6805387d050bb', 0, 800, 0, 2.5, {
        useEasing: true,
        useGrouping: false,
        prefix: '',
        suffix: ''
    });

    $(window).scroll(function() {
        if ($('#counter_6805387d050bb').is_on_screen()) {
            counter.start();
        }
    });
", \yii\web\View::POS_READY);
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-3">
                                        <div class="vc_column-inner vc_custom_1532349897686">
                                            <div class="wpb_wrapper">
                                                <div class="stats_counter style_2 center ">
                                                    <div class="inner">
                                                        <h3 class="no_stripe" id="counter_6805387d052f0">0</h3>
                                                        <div class="counter_description">
                                                            <p>insurance<br>
                                                                partner</p>
                                                        </div>
                                                        <?php
                                                        $this->registerJs("
    var counter = new countUp('counter_6805387d052f0', 0, 30, 0, 3, {
        useEasing: true,
        useGrouping: false,
        prefix: '',
        suffix: ''
    });

    $(window).scroll(function() {
        if ($('#counter_6805387d052f0').is_on_screen()) {
            counter.start();
        }
    });
", \yii\web\View::POS_READY);
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_row-full-width vc_clearfix"></div>
                                <div class="vc_row wpb_row vc_row-fluid">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner vc_custom_1548817704151">
                                            <div class="wpb_wrapper">
                                                <div class="vc_custom_heading vc_custom_1548817566631 text_align_left">
                                                    <h2 style="font-size: 25px;text-align: left">insurance products</h2>
                                                </div>
                                                <div class="wpb_text_column wpb_content_element ">
                                                    <div class="wpb_wrapper">
                                                        <p>Our insurance products cover a wide range of policies to serve the respective needs of organizations, businesses, and individuals. You can save time, money and worry, while we take care of all your insurance security.</p>

                                                    </div>
                                                </div>

                                                <div class="stm_services style_1 cols_3">
                                                    <div class="item">
                                                        <div class="item_wr">

                                                            <div class="item_thumbnail">
                                                                <a href="https://shintainserve.com/service/property-insurance/">
                                                                    <img class="" src="https://shintainserve.com/wp-content/uploads/2018/07/property-service-350x184.jpg" width="350" height="184" alt="Skyscraper Large Construction Site with Cranes" title="Skyscraper Large Construction Site with Cranes"> </a>
                                                            </div>
                                                            <div class="content">
                                                                <h5><a href="https://shintainserve.com/service/property-insurance/">Property Insurance</a></h5>
                                                                <p>Property Insurance offers comprehensive and flexible protection plans that you can tailor to your property requirement. Whether it is for home, commercial premises, factory, plants, or warehouse, our team can provide you with a full risk assessment and related insurance programs to protect your assets against loss of or damage caused by perils and catastrophe.</p>
                                                                <a class="read_more" href="https://shintainserve.com/service/property-insurance/">
                                                                    <span>read more</span>
                                                                    <i class=" fa fa-chevron-right stm_icon"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="item_wr">

                                                            <div class="item_thumbnail">
                                                                <a href="https://shintainserve.com/service/motor-vehicle-insurance/">
                                                                    <img class="" src="https://shintainserve.com/wp-content/uploads/2018/07/motor-vehicle.jpg" width="350" height="184" alt="motor-vehicle" title="motor-vehicle"> </a>
                                                            </div>
                                                            <div class="content">
                                                                <h5><a href="https://shintainserve.com/service/motor-vehicle-insurance/">Motor Vehicle Insurance</a></h5>
                                                                <p>Motor Vehicle Insurance is essential to every vehicle owner. Our range of policy provides insurer with financial protection and third party liability in unexpected incidents. Easy claim and speedy service to help you get back on track.</p>
                                                                <a class="read_more" href="https://shintainserve.com/service/motor-vehicle-insurance/">
                                                                    <span>read more</span>
                                                                    <i class=" fa fa-chevron-right stm_icon"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="item_wr">

                                                            <div class="item_thumbnail">
                                                                <a href="https://shintainserve.com/service/contractor-all-risk/">
                                                                    <img class="" src="https://shintainserve.com/wp-content/uploads/2018/11/contractor-all-risk.jpg" width="350" height="184" alt="contractor-all-risk" title="contractor-all-risk"> </a>
                                                            </div>
                                                            <div class="content">
                                                                <h5><a href="https://shintainserve.com/service/contractor-all-risk/">Contractors All Risk</a></h5>
                                                                <p>Contractors’ All Risk Insurance is a policy that covers all risks associated with a construction project. Our policy includes accidents caused by natural calamities and intentional damages. It also covers structural damages, building materials, and equipment materials.</p>
                                                                <a class="read_more" href="https://shintainserve.com/service/contractor-all-risk/">
                                                                    <span>read more</span>
                                                                    <i class=" fa fa-chevron-right stm_icon"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="item_wr">

                                                            <div class="item_thumbnail">
                                                                <a href="https://shintainserve.com/service/erection-all-risk/">
                                                                    <img class="" src="https://shintainserve.com/wp-content/uploads/2018/11/erection-all-risk.jpg" width="350" height="184" alt="erection-all-risk" title="erection-all-risk"> </a>
                                                            </div>
                                                            <div class="content">
                                                                <h5><a href="https://shintainserve.com/service/erection-all-risk/">Erection All Risk</a></h5>
                                                                <p>Construction and Erection All Risk policy covers protection to building and equipment from the start of construction until the end. The policy is offered to any kind of construction projects such as residential, commercial, industrial buildings, and public infrastructures, such as roads, highways, ports, airports, and railways.</p>
                                                                <a class="read_more" href="https://shintainserve.com/service/erection-all-risk/">
                                                                    <span>read more</span>
                                                                    <i class=" fa fa-chevron-right stm_icon"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="item_wr">

                                                            <div class="item_thumbnail">
                                                                <a href="https://shintainserve.com/service/heavy-equipment-insurance/">
                                                                    <img class="" src="https://shintainserve.com/wp-content/uploads/2018/07/he-service-350x184.jpg" width="350" height="184" alt="excavator blue sky heavy machine construction site" title="excavator blue sky heavy machine construction site"> </a>
                                                            </div>
                                                            <div class="content">
                                                                <h5><a href="https://shintainserve.com/service/heavy-equipment-insurance/">Heavy Equipment Insurance</a></h5>
                                                                <p>Heavy Equipment Insurances provides many options to protect owner and operators of heavy equipment with specialized insurance to meet the demand within the industry. The policy provides comprehensive coverage for damage, misuse, and theft, to heavy equipment such as trucks, dozers, excavators, loaders, forklift, cranes, and other equipment typically operated within the industry.</p>
                                                                <a class="read_more" href="https://shintainserve.com/service/heavy-equipment-insurance/">
                                                                    <span>read more</span>
                                                                    <i class=" fa fa-chevron-right stm_icon"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="item_wr">

                                                            <div class="item_thumbnail">
                                                                <a href="https://shintainserve.com/service/marine-cargo-insurance/">
                                                                    <img class="" src="https://shintainserve.com/wp-content/uploads/2018/07/cargo-service-350x184.jpg" width="350" height="184" alt="cargo-service" title="cargo-service"> </a>
                                                            </div>
                                                            <div class="content">
                                                                <h5><a href="https://shintainserve.com/service/marine-cargo-insurance/">Marine Cargo Insurance</a></h5>
                                                                <p>Through Marine Cargo Insurance, we offer comprehensive solution to protect your cargo while being transported from place to place. The policy covers all risk of loss of or damage to your cargo while in transit. We provide free consultation with our risk and liability specialists to discuss the most suitable option of marine insurance products for your needs.</p>
                                                                <a class="read_more" href="https://shintainserve.com/service/marine-cargo-insurance/">
                                                                    <span>read more</span>
                                                                    <i class=" fa fa-chevron-right stm_icon"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-vc-full-width="true" data-vc-full-width-init="true" class="vc_row wpb_row vc_row-fluid third_bg_color vc_custom_1532344819262" style="position: relative; left: -190.4px; box-sizing: border-box; width: 1521px; padding-left: 190.4px; padding-right: 190.6px;">
                                    <div class="wpb_column vc_column_container vc_col-sm-4">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="vc_custom_heading base_font_color vc_custom_1548817767262 text_align_left">
                                                    <h6 style="font-size: 25px;line-height: 60px;text-align: left">Request a call back</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-8">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div role="form" class="wpcf7" id="wpcf7-f1283-p1024-o1" lang="en-US" dir="ltr">
                                                    <div class="screen-reader-response" aria-live="polite"></div>
                                                    <form action="/#wpcf7-f1283-p1024-o1" method="post" class="wpcf7-form" novalidate="novalidate">
                                                        <div style="display: none;">
                                                            <input type="hidden" name="_wpcf7" value="1283">
                                                            <input type="hidden" name="_wpcf7_version" value="5.1.9">
                                                            <input type="hidden" name="_wpcf7_locale" value="en_US">
                                                            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f1283-p1024-o1">
                                                            <input type="hidden" name="_wpcf7_container_post" value="1024">
                                                            <input type="hidden" name="g-recaptcha-response" value="03AFcWeA4y-UV9IKiJ9warDvcjiIuYj1hY3bhMX9j24icL5yb03D75bF2IT5W2m7VgHCEKq0PUc9CKB0iiJghRK7sZc9Z_-yFr2_43hDZLX076BfJ5cuQpX1t6-0Cl3j8E5Z5zbW0qkaweDuVjHH2FQ3Tnp_8YajbXjyG-44XOAQblcZVlOlQbq6T-nDyAj228EDoLgDSHa_RLJLddXRTS9qDHTggfgywqblPVY4OYBYOg3h94Hsb7mRW5sbDIVmVkBJ5TB21PFMG36BESLcNWRDGZYr2CCKo2D6NjWYdjAWqWD0nH0rUm90DFSKyRVROFh2MMw5_pDReW1RGLow_fgkmHKEa-4vimKD65_BcAEKyyYzUqli1whHsQDudmiOQeWAICRF4jAVteoK93iOXH6CKK77lFJ4ZXzibCBOdMumvoB6LUKZgMToUZIhyNzS1k6TvYnxegsoQkk6P8kUI6L64X78xoR9t0BhReTUvSxXrqwOejPH4sLPA7khHXoFhN-sZPpj2r30s248otVoM3I3G71Rn2Pfs-Cwp0H7cLQLoE3edBVOSFZfpqeJ4ALDgyeKtPGif3pKhhgSpfkfDBmVhXTGVxuxGPuwimrbiqIQbLVQRTo8D0MKDaJmpg8-serueE-JB5hYAHV9mgFUtiN6nXOSfQU6sxI9B6YwjnJzD0Vs4qmQSZ3Jy5kRRNo0g-DESCkl6AxDfTE48jxhrSf04Y5Xzzs6IeOM3IkQq6tOsG7BNC7B23rALYQrf66_glhIgfG1x0yiJysbADdhlepebwASoX2jTpQjbrSyQdgKfyxkFgp-yGbzL1n0WFwao2t-SEGouoQu4OgpP1fEkPCNsyr3-G7puOGkZLrEvBsOBmv5oa2j6uoVT3TCuSWQ2MkO8AD7WhvfPSXcYQzg9FnC9TLhJAnT8lDcrswEVefUf5eRdlGFLrO7e-cRkXtLrRDj494tkRgCwF">
                                                        </div>
                                                        <div class="request_callback">
                                                            <p>I would like to discuss:</p>
                                                            <div class="row">
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                    <div class="input-group">
                                                                        <span class="wpcf7-form-control-wrap services_consulting"><select name="services_consulting" class="wpcf7-form-control wpcf7-select select2-hidden-accessible" aria-invalid="false" tabindex="-1" aria-hidden="true">
                                                                                <option value="">Consultation</option>
                                                                                <option value="Audit &amp; Assurance">Audit &amp; Assurance</option>
                                                                                <option value="Claim">Claim</option>
                                                                            </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-services_consulting-9r-container"><span class="select2-selection__rendered" id="select2-services_consulting-9r-container" title="Consultation">Consultation</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                    <div class="input-group">
                                                                        <span class="wpcf7-form-control-wrap text-name"><input type="text" name="text-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="First name" fdprocessedid="ldvuxs"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                    <div class="input-group">
                                                                        <span class="wpcf7-form-control-wrap phone"><input type="tel" name="phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" aria-required="true" aria-invalid="false" placeholder="Phone number" fdprocessedid="b91r9i"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                    <div class="input-group">
                                                                        <button type="submit" class="button size-lg icon_right" fdprocessedid="srlwz5">submit <i class="fa fa-chevron-right"></i></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="wpcf7-response-output wpcf7-display-none" aria-hidden="true"></div>
                                                    </form>
                                                </div>
                                                <div class="wpb_text_column wpb_content_element ">
                                                    <div class="wpb_wrapper">
                                                        <p>We work buy-side and sell-side to provide you with objective answers and focus on the best opportunities available.</p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_row-full-width vc_clearfix"></div>
                                <div class="vc_row wpb_row vc_row-fluid slider-fit-container vc_custom_1548817832558">
                                    <div class="wpb_column vc_column_container vc_col-sm-3">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="vc_custom_heading vc_custom_1550044246008 text_align_left title_no_stripe">
                                                    <h5 style="text-align: left">Our Network of Partners</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-9">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_images_carousel wpb_content_element vc_clearfix">
                                                    <div class="wpb_wrapper">
                                                        <div id="vc_images-carousel-1-1745172605" data-ride="vc_carousel" data-wrap="true" style="width: 1024px;" data-interval="3000" data-auto-height="yes" data-mode="horizontal" data-partial="false" data-per-view="4" data-hide-on-end="false" class="vc_slide vc_images_carousel vc_per-view-more vc_per-view-4 vc_build">
                                                            <!-- Wrapper for slides -->
                                                            <div class="vc_carousel-inner">
                                                                <div class="vc_carousel-slideline" style="width: 16500px;">
                                                                    <div class="vc_carousel-slideline-inner" style="left: -6.25%;">
                                                                        <div class="vc_item" style="width: 1.25%; height: 106.125px;">
                                                                            <div class="vc_inner">
                                                                                <img width="358" height="204" src="https://shintainserve.com/wp-content/uploads/2019/01/ACA.png" class="attachment-large" alt="" decoding="async" loading="lazy" srcset="https://shintainserve.com/wp-content/uploads/2019/01/ACA.png 358w, https://shintainserve.com/wp-content/uploads/2019/01/ACA-300x171.png 300w" sizes="(max-width: 358px) 100vw, 358px">
                                                                            </div>
                                                                        </div>
                                                                        <div class="vc_item" style="width: 1.25%; height: 106.125px;">
                                                                            <div class="vc_inner">
                                                                                <img width="358" height="204" src="https://shintainserve.com/wp-content/uploads/2019/01/ADIRA.png" class="attachment-large" alt="" decoding="async" loading="lazy" srcset="https://shintainserve.com/wp-content/uploads/2019/01/ADIRA.png 358w, https://shintainserve.com/wp-content/uploads/2019/01/ADIRA-300x171.png 300w" sizes="(max-width: 358px) 100vw, 358px">
                                                                            </div>
                                                                        </div>
                                                                        <div class="vc_item" style="width: 1.25%; height: 106.125px;">
                                                                            <div class="vc_inner">
                                                                                <img width="358" height="204" src="https://shintainserve.com/wp-content/uploads/2019/01/ag.png" class="attachment-large" alt="" decoding="async" loading="lazy" srcset="https://shintainserve.com/wp-content/uploads/2019/01/ag.png 358w, https://shintainserve.com/wp-content/uploads/2019/01/ag-300x171.png 300w" sizes="(max-width: 358px) 100vw, 358px">
                                                                            </div>
                                                                        </div>
                                                                        <div class="vc_item" style="width: 1.25%; height: 106.125px;">
                                                                            <div class="vc_inner">
                                                                                <img width="358" height="204" src="https://shintainserve.com/wp-content/uploads/2019/01/asei.jpg" class="attachment-large" alt="" decoding="async" loading="lazy" srcset="https://shintainserve.com/wp-content/uploads/2019/01/asei.jpg 358w, https://shintainserve.com/wp-content/uploads/2019/01/asei-300x171.jpg 300w" sizes="(max-width: 358px) 100vw, 358px">
                                                                            </div>
                                                                        </div>
                                                                        <div class="vc_item" style="width: 1.25%; height: 106.125px;">
                                                                            <div class="vc_inner">
                                                                                <img width="358" height="204" src="https://shintainserve.com/wp-content/uploads/2019/01/ASW.png" class="attachment-large" alt="" decoding="async" loading="lazy" srcset="https://shintainserve.com/wp-content/uploads/2019/01/ASW.png 358w, https://shintainserve.com/wp-content/uploads/2019/01/ASW-300x171.png 300w" sizes="(max-width: 358px) 100vw, 358px">
                                                                            </div>
                                                                        </div>
                                                                        <div class="vc_item vc_active" style="width: 1.25%; height: 106.125px;">
                                                                            <div class="vc_inner">
                                                                                <img width="358" height="204" src="https://shintainserve.com/wp-content/uploads/2019/01/BESS.png" class="attachment-large" alt="" decoding="async" loading="lazy" srcset="https://shintainserve.com/wp-content/uploads/2019/01/BESS.png 358w, https://shintainserve.com/wp-content/uploads/2019/01/BESS-300x171.png 300w" sizes="(max-width: 358px) 100vw, 358px">
                                                                            </div>
                                                                        </div>
                                                                        <div class="vc_item" style="width: 1.25%; height: 106.125px;">
                                                                            <div class="vc_inner">
                                                                                <img width="358" height="204" src="https://shintainserve.com/wp-content/uploads/2019/01/BINTANG.png" class="attachment-large" alt="" decoding="async" loading="lazy" srcset="https://shintainserve.com/wp-content/uploads/2019/01/BINTANG.png 358w, https://shintainserve.com/wp-content/uploads/2019/01/BINTANG-300x171.png 300w" sizes="(max-width: 358px) 100vw, 358px">
                                                                            </div>
                                                                        </div>
                                                                        <div class="vc_item" style="width: 1.25%; height: 106.125px;">
                                                                            <div class="vc_inner">
                                                                                <img width="358" height="204" src="https://shintainserve.com/wp-content/uploads/2019/01/BUANA.png" class="attachment-large" alt="" decoding="async" loading="lazy" srcset="https://shintainserve.com/wp-content/uploads/2019/01/BUANA.png 358w, https://shintainserve.com/wp-content/uploads/2019/01/BUANA-300x171.png 300w" sizes="(max-width: 358px) 100vw, 358px">
                                                                            </div>
                                                                        </div>
                                                                        <div class="vc_item" style="width: 1.25%; height: 106.125px;">
                                                                            <div class="vc_inner">
                                                                                <img width="358" height="204" src="https://shintainserve.com/wp-content/uploads/2019/01/CHINA.png" class="attachment-large" alt="" decoding="async" loading="lazy" srcset="https://shintainserve.com/wp-content/uploads/2019/01/CHINA.png 358w, https://shintainserve.com/wp-content/uploads/2019/01/CHINA-300x171.png 300w" sizes="(max-width: 358px) 100vw, 358px">
                                                                            </div>
                                                                        </div>
                                                                        <div class="vc_item" style="width: 1.25%; height: 106.125px;">
                                                                            <div class="vc_inner">
                                                                                <img width="358" height="204" src="https://shintainserve.com/wp-content/uploads/2019/01/CHUBB.png" class="attachment-large" alt="" decoding="async" loading="lazy" srcset="https://shintainserve.com/wp-content/uploads/2019/01/CHUBB.png 358w, https://shintainserve.com/wp-content/uploads/2019/01/CHUBB-300x171.png 300w" sizes="(max-width: 358px) 100vw, 358px">
                                                                            </div>
                                                                        </div>
                                                                        <div class="vc_item" style="width: 1.25%; height: 106.125px;">
                                                                            <div class="vc_inner">
                                                                                <img width="358" height="204" src="https://shintainserve.com/wp-content/uploads/2019/01/DAYIN.png" class="attachment-large" alt="" decoding="async" loading="lazy" srcset="https://shintainserve.com/wp-content/uploads/2019/01/DAYIN.png 358w, https://shintainserve.com/wp-content/uploads/2019/01/DAYIN-300x171.png 300w" sizes="(max-width: 358px) 100vw, 358px">
                                                                            </div>
                                                                        </div>
                                                                        <div class="vc_item" style="width: 1.25%; height: 106.125px;">
                                                                            <div class="vc_inner">
                                                                                <img width="358" height="204" src="https://shintainserve.com/wp-content/uploads/2019/01/KSK.png" class="attachment-large" alt="" decoding="async" loading="lazy" srcset="https://shintainserve.com/wp-content/uploads/2019/01/KSK.png 358w, https://shintainserve.com/wp-content/uploads/2019/01/KSK-300x171.png 300w" sizes="(max-width: 358px) 100vw, 358px">
                                                                            </div>
                                                                        </div>
                                                                        <div class="vc_item" style="width: 1.25%; height: 106.125px;">
                                                                            <div class="vc_inner">
                                                                                <img width="358" height="204" src="https://shintainserve.com/wp-content/uploads/2019/01/MAG.png" class="attachment-large" alt="" decoding="async" loading="lazy" srcset="https://shintainserve.com/wp-content/uploads/2019/01/MAG.png 358w, https://shintainserve.com/wp-content/uploads/2019/01/MAG-300x171.png 300w" sizes="(max-width: 358px) 100vw, 358px">
                                                                            </div>
                                                                        </div>
                                                                        <div class="vc_item" style="width: 1.25%; height: 106.125px;">
                                                                            <div class="vc_inner">
                                                                                <img width="358" height="204" src="https://shintainserve.com/wp-content/uploads/2019/01/mpm.png" class="attachment-large" alt="" decoding="async" loading="lazy" srcset="https://shintainserve.com/wp-content/uploads/2019/01/mpm.png 358w, https://shintainserve.com/wp-content/uploads/2019/01/mpm-300x171.png 300w" sizes="(max-width: 358px) 100vw, 358px">
                                                                            </div>
                                                                        </div>
                                                                        <div class="vc_item" style="width: 1.25%; height: 106.125px;">
                                                                            <div class="vc_inner">
                                                                                <img width="358" height="204" src="https://shintainserve.com/wp-content/uploads/2019/01/MSIG.png" class="attachment-large" alt="" decoding="async" loading="lazy" srcset="https://shintainserve.com/wp-content/uploads/2019/01/MSIG.png 358w, https://shintainserve.com/wp-content/uploads/2019/01/MSIG-300x171.png 300w" sizes="(max-width: 358px) 100vw, 358px">
                                                                            </div>
                                                                        </div>
                                                                        <div class="vc_item" style="width: 1.25%; height: 106.125px;">
                                                                            <div class="vc_inner">
                                                                                <img width="358" height="204" src="https://shintainserve.com/wp-content/uploads/2019/01/PANDI.png" class="attachment-large" alt="" decoding="async" loading="lazy" srcset="https://shintainserve.com/wp-content/uploads/2019/01/PANDI.png 358w, https://shintainserve.com/wp-content/uploads/2019/01/PANDI-300x171.png 300w" sizes="(max-width: 358px) 100vw, 358px">
                                                                            </div>
                                                                        </div>
                                                                        <div class="vc_item" style="width: 1.25%; height: 106.125px;">
                                                                            <div class="vc_inner">
                                                                                <img width="358" height="204" src="https://shintainserve.com/wp-content/uploads/2019/01/QBE2.png" class="attachment-large" alt="" decoding="async" loading="lazy" srcset="https://shintainserve.com/wp-content/uploads/2019/01/QBE2.png 358w, https://shintainserve.com/wp-content/uploads/2019/01/QBE2-300x171.png 300w" sizes="(max-width: 358px) 100vw, 358px">
                                                                            </div>
                                                                        </div>
                                                                        <div class="vc_item" style="width: 1.25%; height: 106.125px;">
                                                                            <div class="vc_inner">
                                                                            </div>
                                                                        </div>
                                                                        <div class="vc_item" style="width: 1.25%; height: 106.125px;">
                                                                            <div class="vc_inner">
                                                                                <img width="358" height="204" src="https://shintainserve.com/wp-content/uploads/2019/01/tugu.png" class="attachment-large" alt="" decoding="async" loading="lazy" srcset="https://shintainserve.com/wp-content/uploads/2019/01/tugu.png 358w, https://shintainserve.com/wp-content/uploads/2019/01/tugu-300x171.png 300w" sizes="(max-width: 358px) 100vw, 358px">
                                                                            </div>
                                                                        </div>
                                                                        <div class="vc_item" style="width: 1.25%; height: 106.125px;">
                                                                            <div class="vc_inner">
                                                                                <img width="358" height="204" src="https://shintainserve.com/wp-content/uploads/2019/01/zurich.jpg" class="attachment-large" alt="" decoding="async" loading="lazy" srcset="https://shintainserve.com/wp-content/uploads/2019/01/zurich.jpg 358w, https://shintainserve.com/wp-content/uploads/2019/01/zurich-300x171.jpg 300w" sizes="(max-width: 358px) 100vw, 358px">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </article>
                    </div>

                </div> <!--.container-->
            </div> <!--#main-->
        </div>
        <?php $this->endBody() ?>
    </div>
</body>

</html>
<?php $this->endPage();
