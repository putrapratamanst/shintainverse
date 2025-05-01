<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>
<header id="header" style="padding-bottom: 0px;">
    <?= $this->render('_topbar') ?>
    <div class="header_top clearfix affix">
        <div class="container">
            <div class="logo media-left media-middle">
                <a href="<?= Yii::$app->homeUrl ?>">
                    <?= Html::img('@web/images/logo.png', ['alt' => 'Shinta Inserve', 'width' => '200']) ?>
                </a>
            </div>
            <div class="top_nav media-body media-middle affix">
                <div class="top_nav_wrapper clearfix">
                    <ul id="menu-main-menu" class="main_menu_nav">
                        <li id="menu-item-1290" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1024 current_page_item menu-item-1290"><a href="<?= Url::to(['/']) ?>" aria-current="page">Home</a></li>
                        <li id="menu-item-1295" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1295"><a href="<?= Url::to(['company-overview/index']) ?>">About Us</a>
                            <ul class="sub-menu">
                                <li id="menu-item-1298" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1298 stm_col_width_default stm_mega_cols_inside_default"><a href="<?= Url::to(['company-overview/view', 'slug' => 'company-history']) ?>">company history</a></li>
                                <li id="menu-item-1552" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1552 stm_col_width_default stm_mega_cols_inside_default"><a href="<?= Url::to(['company-overview/view', 'slug' => 'what-is-insurance-brokers']) ?>">what is insurance brokers ?</a></li>
                                <li id="menu-item-1333" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1333 stm_col_width_default stm_mega_cols_inside_default"><a href="<?= Url::to(['staff/index']) ?>">our Management</a></li>
                            </ul>
                        </li>
                        <li id="menu-item-2061" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2061"><a href="<?= Url::to(['company-overview/view', 'slug' => 'our-approach']) ?>">Partnership</a>
                            <ul class="sub-menu">
                                <li id="menu-item-1296" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1296 stm_col_width_default stm_mega_cols_inside_6"><a href="<?= Url::to(['company-overview/view', 'slug' => 'our-approach']) ?>">our approach</a></li>
                                <li id="menu-item-1548" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1548 stm_col_width_default stm_mega_cols_inside_default"><a href="<?= Url::to(['company-overview/view', 'slug' => 'benefits-for-you']) ?>">benefit for you</a></li>
                                <li id="menu-item-1301" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1301 stm_col_width_default stm_mega_cols_inside_default"><a href="<?= Url::to(['company-overview/view', 'slug' => 'our-partners']) ?>">partners</a></li>
                            </ul>
                        </li>
                        <li id="menu-item-1310" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1310"><a href="<?= Url::to(['service/index']) ?>">Products</a></li>
                        <li id="menu-item-1355" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1355"><a href="<?= Url::to(['page/contact-us']) ?>">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="mobile_header">
        <div class="logo_wrapper clearfix">
            <div class="logo">
                <a href="<?= Yii::$app->homeUrl ?>">
                    <?= Html::img('@web/images/logo.png', ['alt' => 'Shinta Inserve', 'width' => '200']) ?>
                </a>
            </div>
            <div id="menu_toggle">
                <button></button>
            </div>
        </div>
        <div class="header_info">
            <div class="top_nav_mobile">
                <ul id="menu-main-menu-1" class="main_menu_nav">
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1024 current_page_item menu-item-1290"><a href="<?= Url::to(['site/index']) ?>" aria-current="page">Home</a></li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1295"><a href="<?= Url::to(['company-overview/index']) ?>">About Us</a><span class="arrow"><i></i></span>
                        <ul class="sub-menu">
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1298 stm_col_width_default stm_mega_cols_inside_default"><a href="<?= Url::to(['company-overview/view', 'slug' => 'company-history']) ?>">company history</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1552 stm_col_width_default stm_mega_cols_inside_default"><a href="<?= Url::to(['company-overview/view', 'slug' => 'what-is-insurance-brokers']) ?>">what is insurance brokers ?</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1333 stm_col_width_default stm_mega_cols_inside_default"><a href="<?= Url::to(['staff/index']) ?>">our Management</a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2061"><a href="<?= Url::to(['company-overview/view', 'slug' => 'our-approach']) ?>">Partnership</a><span class="arrow"><i></i></span>
                        <ul class="sub-menu">
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1296 stm_col_width_default stm_mega_cols_inside_6"><a href="<?= Url::to(['company-overview/view', 'slug' => 'our-approach']) ?>">our approach</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1548 stm_col_width_default stm_mega_cols_inside_default"><a href="<?= Url::to(['company-overview/view', 'slug' => 'benefits-for-you']) ?>">benefit for you</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1301 stm_col_width_default stm_mega_cols_inside_default"><a href="<?= Url::to(['company-overview/view', 'slug' => 'our-partners']) ?>">partners</a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1310"><a href="https://shintainserve.com/products/">Products</a></li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1355"><a href="<?= Url::to(['page/contact-us']) ?>">Contact Us</a></li>
                </ul>

                <div class="wpml-ls-statics-shortcode_actions wpml-ls wpml-ls-legacy-list-horizontal">
                    <ul>
                        <li class="wpml-ls-slot-shortcode_actions wpml-ls-item wpml-ls-item-id wpml-ls-first-item wpml-ls-last-item wpml-ls-item-legacy-list-horizontal">
                            <a href="https://shintainserve.com/id/" class="wpml-ls-link">
                                <span class="wpml-ls-display">ID</span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="icon_texts">
                <div class="icon_text clearfix">
                    <div class="icon"><i class="fa stm-phone"></i></div>
                    <div class="text">
                        <strong>+6221 45876371</strong>
                    </div>
                </div>
                <div class="icon_text clearfix">
                    <div class="icon"><i class="fa stm-email"></i></div>
                    <div class="text">
                        <a href="mailto:info@shintainserve.com">info@shintainserve.com</a>
                    </div>
                </div>
                <div class="icon_text clearfix">
                    <div class="icon"><i class="fa stm-marker"></i></div>
                    <div class="text">
                        Gedung Hypermart (KTC) Blok A nomor 17, Kelapa Gading, Jakarta </div>
                </div>
            </div>
        </div>
    </div>
</header>