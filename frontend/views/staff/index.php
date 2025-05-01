<div class="container">

    <div class="content-area">

        <article id="post-462" class="post-462 page type-page status-publish hentry">

            <div class="entry-content">
                <div class="vc_row wpb_row vc_row-fluid vc_custom_1451991003825">
                    <div class="bg_staff_custom wpb_column vc_column_container vc_col-sm-9">
                        <div class="vc_column-inner vc_custom_1693473279462">
                            <div class="wpb_wrapper">
                                <div class="vc_custom_heading vc_custom_1543301008184 text_align_left">
                                    <h2 style="text-align: left">Our management</h2>
                                </div>
                                <div class="wpb_text_column wpb_content_element ">
                                    <div class="wpb_wrapper">
                                        <p>At the heart of Shinta Inserve is a team of top leaders who have distinguished themselves in their various chosen fields.</p>

                                    </div>
                                </div>

                                <div class="staff_list grid cols_2">
                                    <ul class="">
                                        <?php

                                        use yii\helpers\Url;

                                        foreach ($staffs as $staff) { ?>
                                            <li>
                                                <div class="staff_info">
                                                    <h4 class="no_stripe">
                                                        <a href="<?= Url::to(['staff/view', 'slug' => $staff->slug]) ?>"><?= $staff->name ?></a>
                                                    </h4>
                                                    <div class="staff_department">
                                                        <?= $staff->position ?> </div>

                                                    <?php

                                                    libxml_use_internal_errors(true); // Supaya tidak muncul warning HTML tidak valid

                                                    $dom = new DOMDocument();
                                                    $dom->loadHTML($staff->profile);

                                                    $xpath = new DOMXPath($dom);
                                                    $paragraphs = $xpath->query('//div[contains(@class, "wpb_wrapper")]/p');
                                                    $text = $paragraphs->item(0)->textContent;
                                                    $shortText = mb_substr($text, 0, 100); // Pakai mb_substr untuk dukung karakter multibyte (UTF-8)

                                                    // Tambahkan titik-titik hanya jika teks lebih panjang dari 100 karakter
                                                    if (mb_strlen($text) > 100) {
                                                        $shortText .= '...';
                                                    }
                                                    ?>
                                                    <p><?= $shortText ?></p>
                                                    <a class="read_more" href="<?= Url::to(['staff/view', 'slug' => $staff->slug]) ?>">
                                                        <span>view profile</span>
                                                        <i class=" fa fa-chevron-right stm_icon"></i>
                                                    </a>
                                                </div>
                                            </li>
                                        <?php } ?>
                                    </ul>
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