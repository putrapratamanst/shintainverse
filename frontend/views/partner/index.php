<div class="container">

    <div class="content-area">

        <article id="post-390" class="post-390 page type-page status-publish hentry">

            <div class="entry-content">
                <div class="vc_row wpb_row vc_row-fluid">
                    <div class="wpb_column vc_column_container vc_col-sm-9">
                        <div class="vc_column-inner vc_custom_1543301162168">
                            <div class="wpb_wrapper">
                                <div class="vc_custom_heading vc_custom_1543301141560 text_align_left">
                                    <h2 style="text-align: left">Our partners</h2>
                                </div>
                                <div class="vc_row wpb_row vc_inner vc_row-fluid disable-sub-title disable-image-shadow vc_custom_1548470524020">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <?php foreach ($partners as $partner): ?>
                                                <div class="stm_partner vc_custom_1548819431962 style_2">
                                                    <div class="image">
                                                        <img width="350" height="204" src="<?= Yii::getAlias('@backend/' . $partner->image) ?>" class="attachment-consulting-image-350x204-croped" alt="" decoding="async" loading="lazy">
                                                    </div>
                                                    <div class="stm_partner_content">
                                                        <h4 class="no_stripe"><a href="#" target="_self"><?= $partner->name ?></a></h4>
                                                        <div class="position">
                                                            <?= $partner->category ?> </div>
                                                        <div class="description"><?= $partner->description ?></div>
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
                    <?= $this->render('@frontend/views/testimonies/index', ['testimonies' => $testimonies]) ?>
                </div>
            </div>
        </article>
    </div>
</div>