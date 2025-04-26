<div class="container">

    <div class="content-area">

        <article id="post-558" class="post-558 page type-page status-publish hentry">

            <div class="entry-content">
                <div class="vc_row wpb_row vc_row-fluid">
                    <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-12 vc_col-md-12">
                        <div class="vc_column-inner vc_custom_1548142066969">
                            <div class="wpb_wrapper">
                                <div class="vc_custom_heading vc_custom_1543291196800 text_align_left">
                                    <h2 style="text-align: left;font-family:Poppins;font-weight:700;font-style:normal">Products</h2>
                                </div>
                                <div class="stm_services style_1 cols_4">
                                    <?php

                                    use yii\helpers\Url;

                                    foreach ($services as $service) { ?>
                                        <div class="item">
                                            <div class="item_wr">
                                                <div class="item_thumbnail">
                                                    <a href="<?= Url::to(['service/view', 'slug' => $service->slug]) ?>">
                                                        <img width="255" height="182" src="<?= $service->image ?>" class="attachment-consulting-image-255x182-croped" alt="" decoding="async" loading="lazy" srcset="<?= $service->image ?> 255w, <?= $service->image ?> 300w" sizes="(max-width: 255px) 100vw, 255px"> </a>
                                                </div>
                                                <div class="content">
                                                    <h5><a href="<?= Url::to(['service/view', 'slug' => $service->slug]) ?>"><?= $service->title ?></a></h5>
                                                    <p><?= $service->summary ?></p>
                                                    <a class="read_more" href="<?= Url::to(['service/view', 'slug' => $service->slug]) ?>">
                                                        <span>read more</span>
                                                        <i class=" fa fa-chevron-right stm_icon"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </article>
    </div>

</div>