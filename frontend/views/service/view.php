<div class="container">

    <div class="content-area">

        <article id="post-1464" class="post-1464 stm_service type-stm_service status-publish has-post-thumbnail hentry">
            <div class="entry-content">
                <div class="vc_row wpb_row vc_row-fluid">
                    <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-9 vc_col-md-9">
                        <div class="vc_column-inner vc_custom_1543390431816">
                            <div class="wpb_wrapper">
                                <div class="vc_custom_heading vc_custom_1543299937662 text_align_left">
                                    <h2 style="text-align: left;font-family:Poppins;font-weight:700;font-style:normal"><?= $model->title ?></h2>
                                </div>
                                <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1453120532096">
                                    <div class="wpb_column vc_column_container vc_col-sm-6">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_single_image wpb_content_element vc_align_left  vc_custom_1453120292205">

                                                    <figure class="wpb_wrapper vc_figure">
                                                        <div class="vc_single_image-wrapper   vc_box_border_grey"><img class="vc_single_image-img " src="<?= $model->image ?>" width="560" height="364" alt="<?= $model->title ?>" title="<?= $model->title ?>"></div>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-6">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="vc_custom_heading vc_custom_1547110749149 text_align_left">
                                                    <div style="font-size: 16px;color: #222222;line-height: 22px;text-align: left;font-family:Poppins;font-weight:600;font-style:normal">Coverage of <?= $model->title ?></div>
                                                </div>
                                                <div class="wpb_text_column wpb_content_element ">
                                                    <div class="wpb_wrapper">
                                                        <ul style="font-size: 13px; line-height: 18px;">
                                                            <?php
                                                            if ($model->coverage) {
                                                                foreach ($model->coverage as $coverage) { ?>
                                                                    <li><?= $coverage ?></li>
                                                            <?php }
                                                            } ?>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_text_column wpb_content_element ">
                                    <div class="wpb_wrapper">
                                        <p><?= $model->description ?></p>

                                    </div>
                                </div>

                                <div class="wpb_text_column wpb_content_element  vc_custom_1547110853784">
                                    <div class="wpb_wrapper">
                                        <p><strong>Types of <?= $model->title ?> that can be insured</strong></p>
                                        <p><?= $model->types ?></p>

                                    </div>
                                </div>
                                <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1453195392997 vc_row-has-fill">
                                    <div class="wpb_column vc_column_container vc_col-sm-3">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="vc_custom_heading text_align_left">
                                                    <h4 style="text-align: left">feedback form</h4>
                                                </div>
                                                <div class="wpb_text_column wpb_content_element ">
                                                    <div class="wpb_wrapper">
                                                        <p>If you’d like a free consultation, please start by completing the form:</p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-9">
                                        <div class="vc_column-inner vc_custom_1453194844614">
                                            <div class="wpb_wrapper">
                                                <div role="form" class="wpcf7" id="wpcf7-f599-p1464-o1" lang="en-US" dir="ltr">
                                                    <div class="screen-reader-response" aria-live="polite"></div>
                                                    <form action="<?= \yii\helpers\Url::to(['feedback/store']) ?>" method="post" class="wpcf7-form" novalidate="novalidate">
                                                        <?= \yii\helpers\Html::hiddenInput(Yii::$app->request->csrfParam, Yii::$app->request->getCsrfToken()) ?>
                                                        <div style="display: none;">
                                                            <input type="hidden" name="_wpcf7" value="599">
                                                            <input type="hidden" name="_wpcf7_version" value="5.1.9">
                                                            <input type="hidden" name="_wpcf7_locale" value="en_US">
                                                            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f599-p1464-o1">
                                                            <input type="hidden" name="_wpcf7_container_post" value="1464">
                                                            <input type="hidden" name="g-recaptcha-response" value="03AFcWeA4_7vRrW2PMmSeH1mc0NkZtPwVkObXdfKeLBw3DPtVjx_lu_WLTuGhajPXTekoOYKHAVOt2j0aZb1j54f_qgR07ikuwHD4IAfAvzcOxefqlpqb5xz61YF7gB_HNh640UFCEn3aK1Sgf08Fcu_8u4b5ICmzmRAbP8re9LOyFgDEnCOOwiex0d8tN09FFPL6WCkwbrUhdvINJm2FBTWEe5bzqITjJwpS-2JxWBzCEBtYwhoVvq1a3XeX-oLxemxUaQFzJdJQQPdRhV8e76y-RaUoeKDnQTgm5VTTGW4134-VVLosWshhuqNb0Q5dZGYiEmBoqJC1n_3fnM87I6di63h2UCqTSn2vDOKeEt85RkCwZYBh-eV2zthHzqp0YGbKM146KeGrxKsGGX9A0I2sunUDmz-aaKCHJQndzS6JrwBVCakvwQmVL6i5m-tYFkHru_qjsGzglEnWPLQbKrKtCOj7y1Aw50slwtNlTrSHSBDQVEzsfcHD5uYsi1pLqvG33u211ijZsqatNaE2HTyLjWJXnsICmv4JXbi2PFPT8tCTHRF1hMJ9qsG6SbJryv1IC5rO0SyCEoNZavy2FjPo24rkTuqHri0p3crcn9s9R5WXJXV7nn_jLy9cWu1jpxQN4jiEcdl4neXIXs6kr-zTZfYxK0lr-NcRBecpNr4PCo0BkBKURMVqpcY3wmjtdHCwdjNzXFsdAAZtoeUJeESb5OnKmm5UuS-Fxmg3eiXEV18OPdHBsDNrzrm2IphMoY7ccsdCyi1Ze9bXgQk0dga_E5pnvt3Q0_rhR5_K418J3tM2N2SQwHbydNcG9tsiVzNl7D1T8_FUj97yCfvkxK0iX72MmwXDiPIUqudjpXSu4OnFAVVW3DDLKfYyel_pWyMNXOfSTMxnSpbWpY9Xq9zHlhrlcq3mCjxz31DOHH2xjratir9sZT4P255HSfUcChcYd-N44oH27">
                                                        </div>
                                                        <div class="member_feedback">
                                                            <div class="row">
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                    <div class="input-group">
                                                                        <span class="wpcf7-form-control-wrap text-name"><input type="text" name="text-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="First Name*" fdprocessedid="js439"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                    <div class="input-group">
                                                                        <span class="wpcf7-form-control-wrap text-name2"><input type="text" name="text-name2" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Last Name*" fdprocessedid="sda5op"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                    <div class="input-group">
                                                                        <span class="wpcf7-form-control-wrap email"><input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="E-mail*" fdprocessedid="q1kr9s"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                    <div class="input-group">
                                                                        <span class="wpcf7-form-control-wrap phone"><input type="tel" name="phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel" aria-invalid="false" placeholder="Phone Number" fdprocessedid="7jtev9"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                    <div class="input-group">
                                                                        <span class="wpcf7-form-control-wrap city"><input type="text" name="city" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="City*" fdprocessedid="670tim"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                    <div class="input-group">
                                                                        <span class="wpcf7-form-control-wrap state"><select name="state" class="wpcf7-form-control wpcf7-select select2-hidden-accessible" aria-invalid="false" tabindex="-1" aria-hidden="true">
                                                                                <option value="">Province</option>
                                                                                <option value="Aceh">Aceh</option>
                                                                                <option value="Bali">Bali</option>
                                                                                <option value="Bangka Belitung">Bangka Belitung</option>
                                                                                <option value="Banten">Banten</option>
                                                                                <option value="Bengkulu">Bengkulu</option>
                                                                                <option value="Gorontalo">Gorontalo</option>
                                                                                <option value="Jakarta">Jakarta</option>
                                                                                <option value="Jambi">Jambi</option>
                                                                                <option value="Jawa Barat">Jawa Barat</option>
                                                                                <option value="Jawa Tengah">Jawa Tengah</option>
                                                                                <option value="Jawa Timur">Jawa Timur</option>
                                                                                <option value="Kalimantan Barat">Kalimantan Barat</option>
                                                                                <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                                                                                <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                                                                                <option value="Kalimantan Timur">Kalimantan Timur</option>
                                                                                <option value="Kalimantan Utara">Kalimantan Utara</option>
                                                                                <option value="Lampung">Lampung</option>
                                                                                <option value="Maluku">Maluku</option>
                                                                                <option value="Maluku Utara">Maluku Utara</option>
                                                                                <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
                                                                                <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
                                                                                <option value="Papua">Papua</option>
                                                                                <option value="Papua Barat">Papua Barat</option>
                                                                                <option value="Riau">Riau</option>
                                                                                <option value="Sulawesi Barat">Sulawesi Barat</option>
                                                                                <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                                                                                <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                                                                                <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                                                                                <option value="Sulawesi Utara">Sulawesi Utara</option>
                                                                                <option value="Sumatera Barat">Sumatera Barat</option>
                                                                                <option value="Sumatera Selatan">Sumatera Selatan</option>
                                                                                <option value="Sumatera Utara">Sumatera Utara</option>
                                                                                <option value="Yogyakarta">Yogyakarta</option>
                                                                            </select>
                                                                            
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                    <div class="input-group">
                                                                        <button type="submit" class="button size-lg icon_left" fdprocessedid="45895"><i class="fa fa-chevron-right"></i> submit</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="wpcf7-response-output wpcf7-display-none" aria-hidden="true"></div>
                                                    </form>
                                                    <?php foreach (Yii::$app->session->getAllFlashes() as $type => $message): ?>
                                                        <div class="alert alert-<?= $type; ?>">
                                                            <?= $message; ?>
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
                    <?= $this->render('@frontend/views/testimonies/index', ['testimonies' => $testimonies]) ?>
                </div>
            </div>
        </article> <!-- #post-## -->
    </div>

</div>