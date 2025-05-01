<?php

use frontend\models\Service;
use yii\helpers\Url;
?>
<footer id="footer" class="footer style_2 no-copyright">

    <div class="widgets_row">
        <div class="container">
            <div class="footer_widgets">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <section id="contacts-3" class="widget widget_contacts">
                            <h4 class="widget_title no_stripe">Contact Us</h4>
                            <ul class="stm_list-duty heading-font">
                                <li class="widget_contacts_address">
                                    <div class="icon"><i class="stm-location-2"></i></div>
                                    <div class="text"><a href="https://www.google.com/maps/place/PT+Shinta+Inserve/@-6.1546223,106.8924044,15z/data=!4m6!3m5!1s0x2e69f4019817eeed:0x663241cd7f330c5a!8m2!3d-6.1546223!4d106.8924044!16s%2Fg%2F1tlzrqgp?hl=id&amp;entry=ttu">Centrum, Ruko Kelapa Gading Hypermall, Jl. Boulevard Bar. Raya No.mor 17, RT.2/RW.9, Klp. Gading Bar., Kec. Klp. Gading, Jkt Utara, Daerah Khusus Ibukota Jakarta 14240</a></div>
                                </li>
                                <li class="widget_contacts_phone">
                                    <div class="icon"><i class="stm-iphone"></i></div>
                                    <div class="text">+62 21 4587 6371</div>
                                </li>
                                <li class="widget_contacts_hours">
                                    <div class="icon"><i class="stm-stm14_fax"></i></div>
                                    <div class="text">+62 21 4587 6372</div>
                                </li>
                                <li class="widget_contacts_email">
                                    <div class="icon"><i class="stm-email"></i></div>
                                    <div class="text"><a href="mailto:info@shintainserve.com">info@shintainserve.com</a></div>
                                </li>
                            </ul>
                        </section>
                        <section id="custom_html-3" class="widget_text widget widget_custom_html">
                            <div class="textwidget custom-html-widget">
                                <p>For general inquiries and customer support, contact us by email or phone. We will be in touch with you within the next 24 to 48 hours.</p>
                            </div>
                        </section>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <section id="nav_menu-6" class="widget widget_nav_menu">
                            <h4 class="widget_title no_stripe">About Us</h4>
                            <div class="menu-about-us-footer-container">
                                <ul id="menu-about-us-footer" class="menu">
                                    <li id="menu-item-1602" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1602"><a href="<?= Url::to(['company-overview/index']) ?>">Company overview</a></li>
                                    <li id="menu-item-1603" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1603"><a href="<?= Url::to(['company-overview/benefits-for-you']) ?>">Benefits for you</a></li>
                                    <li id="menu-item-1604" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1604"><a href="<?= Url::to(['company-overview/our-approach']) ?>">Our approach</a></li>
                                    <li id="menu-item-1605" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1605"><a href="<?= Url::to(['staff/index']) ?>">Our management</a></li>
                                    <li id="menu-item-1606" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1606"><a href="<?= Url::to(['company-overview/our-partners']) ?>">Our partners</a></li>
                                </ul>
                            </div>
                        </section>
                        <section id="nav_menu-7" class="widget widget_nav_menu">
                            <h4 class="widget_title no_stripe">Products</h4>
                            <div class="menu-links-container">
                                <ul id="menu-links" class="menu">
                                    <?php
                                    $serviceFooter = Service::find()->where(['is_active' => 1, 'is_deleted' => 0])->all();

                                    foreach ($serviceFooter as $service): ?>
                                        <li id="menu-item-<?= $service->id ?>" class="menu-item menu-item-type-post_type menu-item-object-stm_service menu-item-<?= $service->id ?>"><a href="<?= Url::to(['service/' . $service->slug]) ?>"><?= $service->title ?></a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </section>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <section id="nav_menu-8" class="widget widget_nav_menu">
                            <h4 class="widget_title no_stripe">Links</h4>
                            <div class="menu-link-footer-container">
                                <ul id="menu-link-footer" class="menu">
                                    <li id="menu-item-1610" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1610"><a href="https://www.ojk.go.id/Default.aspx">Otoritas Jasa Keuangan</a></li>
                                    <li id="menu-item-1611" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1611"><a href="https://apari.or.id/">APARI</a></li>
                                    <li id="menu-item-1612" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1612"><a href="https://www.kemenkeu.go.id/">Kementrian Keuangan</a></li>
                                    <li id="menu-item-1613" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1613"><a href="https://www.bi.go.id/id/Default.aspx">Bank Indonesia</a></li>
                                    <li id="menu-item-2558" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2558"><a href="https://apparindo.or.id/">APPARINDO</a></li>
                                    <li id="menu-item-1614" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1614"><a href="https://shintainserve.com/company-overview/our-partners/">Our partners</a></li>
                                </ul>
                            </div>
                        </section>
                        <section id="block-5" class="widget widget_block widget_media_image">
                            <figure class="wp-block-image size-full is-resized"><img decoding="async" loading="lazy" src="<?= Url::to(['images/footer-logo.png']) ?>" alt="" class="wp-image-2630" width="200" height="133"></figure>
                        </section>
                        <section id="block-6" class="widget widget_block widget_media_image"></section>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="copyright_row">
        <div class="container">
            <div class="copyright_row_wr">
                <div class="copyright">
                    Copyright © <?php echo date('Y'); ?> Shinta Inserve. All Rights Reserved. </div>
            </div>
        </div>
    </div>
</footer>