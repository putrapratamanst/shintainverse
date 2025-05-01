<div id="costum-mainbanner-container">
    <div id="costum-mainbanner" class="owl-carousel owl-theme owl-loaded owl-drag">
        <!-- end banner -->
        <!-- end banner -->
        <!-- end banner -->
        <div class="owl-stage-outer">
            <div class="owl-stage" style="transform: translate3d(-3041px, 0px, 0px); transition: 0.25s; width: 10646px;">
               <?php

use yii\helpers\Url;

 foreach ($banners as $banner): ?>
                <div class="owl-item" style="width: 1520.8px;">
                    <div class="item main-banner text-black" style="background-image:url('<?= Yii::getAlias('@backend/' . $banner->image) ?>');">
                        <div class="banner-overlay">
                            <div class="banner-outer">
                                <div class="banner-inner">
                                    <div class="container">
                                        <div class="banner-container">
                                            <h4 class="banner-title" <?= $banner->url == "our-approach" ? 'style="color:white"' : '' ?>><?= $banner->title ?></h4>
                                            <div class="banner-desc">
                                                <p <?= $banner->url == "our-approach" ? 'style="color:white"' : '' ?>><?= $banner->description ?></p>
                                            </div>
                                            <a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-flat vc_btn3-block vc_btn3-icon-right vc_btn3-color-theme_style_2 banner-btn" href="<?= Url::to(['company-overview/' . $banner->url]) ?>" title="">Read More<i class="vc_btn3-icon fa fa-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div>
        <div class="owl-dots disabled"></div>
    </div>
</div><!-- costum mainbanner container -->
