<?php

use yii\helpers\Url;
?>
<div class="wpb_column vc_column_container vc_col-sm-3">
    <div class="vc_column-inner vc_custom_1543300659977">
        <div class="wpb_wrapper">
            <div class="stm_sidebar">
                <style type="text/css" scoped="">
                    .vc_custom_1451998133493 {
                        margin-bottom: 30px !important;
                    }

                    .vc_custom_1452056597103 {
                        margin-right: 0px !important;
                        margin-bottom: 30px !important;
                        margin-left: 0px !important;
                    }

                    .vc_custom_1452056633692 {
                        padding-top: 37px !important;
                        padding-right: 30px !important;
                        padding-bottom: 40px !important;
                        padding-left: 30px !important;
                    }

                    .vc_custom_1547111806999 {
                        margin-bottom: 9px !important;
                    }

                    .vc_custom_1547111813316 {
                        margin-bottom: 17px !important;
                    }
                </style>
                <div class="vc_row wpb_row vc_row-fluid vc_custom_1451998133493">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <div class="vc_wp_custommenu wpb_content_element mb-30"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vc_row wpb_row vc_row-fluid third_bg_color vc_custom_1452056597103">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner vc_custom_1452056633692">
                            <div class="wpb_wrapper">
                                <div class="vc_custom_heading vc_custom_1547111806999 text_align_left">
                                    <div style="font-size: 16px;color: #222222;text-align: left;font-family:Poppins;font-weight:600;font-style:normal">How Can We Help You?</div>
                                </div>
                                <div class="wpb_text_column wpb_content_element  vc_custom_1547111813316">
                                    <div class="wpb_wrapper">
                                        <p>Contact our nearest office or submit a business inquiry online.</p>

                                    </div>
                                </div>
                                <div class="vc_btn3-container vc_btn3-inline">
                                    <a class="vc_general vc_btn3 vc_btn3-size-sm vc_btn3-shape-rounded vc_btn3-style-flat vc_btn3-icon-left vc_btn3-color-white" href="<?= Url::to(['page/contact-us']) ?>" title=""><i class="vc_btn3-icon fa fa-phone-square"></i> contacts</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vc_row wpb_row vc_row-fluid">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">

                                <div class="stm_testimonials cols_1 style_1">
                                    <?php foreach ($testimonies as $testimony): ?>
                                    <div class="item">
                                        <div class="testimonial">
                                            <p><?= $testimony->description ?></p>
                                        </div>
                                        <div class="testimonial-info clearfix">
                                            <div class="testimonial-image"><img width="50" height="50" src="<?= Yii::getAlias('@web/uploads/placeholder-50x50.gif') ?>" class="attachment-consulting-image-50x50-croped size-consulting-image-50x50-croped wp-post-image" alt="placeholder" decoding="async" loading="lazy" srcset="<?= Yii::getAlias('@web/images/placeholder-50x50.gif') ?> 50w, <?= Yii::getAlias('@web/images/placeholder-150x150.gif') ?> 150w, <?= Yii::getAlias('@web/images/placeholder-320x320.gif') ?> 320w, <?= Yii::getAlias('@web/images/placeholder-300x300.gif') ?> 300w, <?= Yii::getAlias('@web/images/placeholder-100x100.gif') ?> 100w" sizes="(max-width: 50px) 100vw, 50px"></div>
                                            <div class="testimonial-text">
                                                <div class="name"><?= $testimony->name ?></div>
                                                <div class="company">
                                                <?= $testimony->role ?> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>