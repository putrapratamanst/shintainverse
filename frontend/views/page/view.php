<div class="container">
    <div class="content-area">
        <article id="post-1184" class="post-1184 page type-page status-publish hentry">
            <div class="entry-content">
                <div class="vc_row wpb_row vc_row-fluid vc_row-o-full-height vc_row-o-columns-top vc_row-o-equal-height vc_row-flex" style="min-height: 62.1749vh;">
                    <?= $model->content; ?>
                    <div class="form_full-right_width wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 vc_col-has-fill">
                        <div class="vc_column-inner vc_custom_1485496553792">
                            <div class="wpb_wrapper">
                                <div class="vc_custom_heading text_align_left">
                                    <h4 style="text-align: left;font-family:Montserrat;font-weight:700;font-style:normal">send us your inquiry or question</h4>
                                </div>
                                <div role="form" class="wpcf7" id="wpcf7-f5-p1184-o1" lang="en-US" dir="ltr">
                                    <div class="screen-reader-response" aria-live="polite"></div>
                                    <?php foreach (Yii::$app->session->getAllFlashes() as $type => $message): ?>
                                        <div class="alert alert-<?= $type; ?>">
                                            <?= $message; ?>
                                        </div>
                                    <?php endforeach; ?>

                                    <form action="<?= \yii\helpers\Url::to(['question/store']) ?>" method="post" class="wpcf7-form" novalidate="novalidate">
                                        <?= \yii\helpers\Html::hiddenInput(Yii::$app->request->csrfParam, Yii::$app->request->getCsrfToken()) ?>

                                        <div style="display: none;">
                                            <input type="hidden" name="_wpcf7" value="5">
                                            <input type="hidden" name="_wpcf7_version" value="5.1.9">
                                            <input type="hidden" name="_wpcf7_locale" value="en_US">
                                            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f5-p1184-o1">
                                            <input type="hidden" name="_wpcf7_container_post" value="1184">
                                            <input type="hidden" name="g-recaptcha-response" value="03AFcWeA7X1rQCPTtT5aR62DI0RgdI9BZzeX2MlQZ1YdU9ABdTJ0RdgQtT1vxt50fyogLJcYh3c9CWXe_fNQUgMrY9tfjshU2gGTHcUjLaN-XRtMYqehw08DUlJL1OUDArXFs1ZkYXGy5xLPfcg4qJOts6AkqeIs-YTd5d9Jlfu3l9Blp7ZNY_FI2hdx503olImTcdWr4_3p9Oue_qzcMLt77YxGOb25CWLWino8lAOH_SC2-gHmghkS8bkPRI-MJ2TZFRUO5ehnRqjcsECaMMAQQK19pLlSoxHReZMA3uRx3zOiGkHT89h1B-foshFPYxWmgJASPOcsCR_vCcGNyxP6IWFJrn8jfNMpjNSIMDXxRswyf_iBICmfHohX9XvoImd81Iqeh7m18EtrG0XWNEKKXEwCxMdrvSCTjtqDCT3OI-aPBeXgY5JTju5_SKS3dhIp4l8ZhDOE0P-P3Ukq-3V6ls5cwwRYIAU4Et31TrztjwDb8yYF1hBBmqF9B61QFR94Q2AxQOtr2BGkMBmvw15rnXJZlYmY2MJ8aFxTAbiFWCfSfGyZYbS8TuNUhTWI6iE93oG3HdlYh9ZW9QpSqitdNTcvQ_tbJ6IgvV7LanDgFJEelzGn80Qqnzpmc7YCYJnW0C2QWTP11TZeN2onHUwTgtHuw5dSeaRVj41fgEP7EEJojZtmHVGDyrX6JcyktkqD9p3tjcIycGq-ETov-v2erJWF4JFqq5yuiEOpx_i8-NuHDFzHpX4Hnqb9u1YRnFpZpeO2Cgi4eINltei6TCGisctWZneki877XhvTmjyB2Mb6wbiuGARscg7C3D9U7X9gEvPRh78Fl1O5lYO7S3gsc8Q5e_4xcInq7p9bDNK7f71Iq7TIzwWXp7W0L8yLvX8WyqPMcD29SIIjSvddneK9PbUXasXxkVR_WkWqUTqWjIyY9WmRUXz7JgcKV_6bVzXzqCNVS5vgSe">
                                        </div>
                                        <div class="member_feedback">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="wpcf7-form-control-wrap text-name"><input type="text" name="text-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="First Name*" fdprocessedid="h7vayb"></span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="wpcf7-form-control-wrap text-name2"><input type="text" name="text-name2" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Last Name*" fdprocessedid="x2ek4d"></span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="wpcf7-form-control-wrap email"><input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="E-mail*" fdprocessedid="hjfbjo"></span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="wpcf7-form-control-wrap phone"><input type="tel" name="phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel" aria-invalid="false" placeholder="Phone Number" fdprocessedid="eq5w7p"></span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="wpcf7-form-control-wrap comment"><textarea name="comment" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Comment*"></textarea></span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="input-group">
                                                        <button type="submit" class="button size-lg icon_left" fdprocessedid="v8bd7"><i class="fa fa-chevron-right"></i> submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wpcf7-response-output wpcf7-display-none" aria-hidden="true"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </article>
    </div>

</div>