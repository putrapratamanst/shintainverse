<?php

use yii\helpers\Url;
?>
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-header">MENU</li>
        <li class="nav-item">
            <a href="<?= Url::to(['banner/index']) ?>" class="nav-link">
                <i class="nav-icon far fa-image"></i>
                <p>
                    Banners
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="<?= Url::to(['callback/index']) ?>" class="nav-link">
                <i class="nav-icon far fa-comment"></i>
                <p>
                    Callback
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="<?= Url::to(['company-overview/index']) ?>" class="nav-link">
                <i class="nav-icon far fa-bookmark"></i>
                <p>
                    Company Overview
                    <!-- <span class="badge badge-info right">2</span> -->
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="<?= Url::to(['feedback/index']) ?>" class="nav-link">
                <i class="nav-icon far fa-eye"></i>
                <p>
                    Feedback
                    <!-- <span class="badge badge-info right">2</span> -->
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="<?= Url::to(['staff/index']) ?>" class="nav-link">
                <i class="nav-icon far fa-user"></i>
                <p>
                    Staffs
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="<?= Url::to(['page/index']) ?>" class="nav-link">
                <i class="nav-icon far fa-window-restore"></i>
                <p>
                    Page
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="<?= Url::to(['partner/index']) ?>" class="nav-link">
                <i class="nav-icon far fa-handshake"></i>
                <p>
                    Partners
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="<?= Url::to(['service/index']) ?>" class="nav-link">
                <i class="nav-icon far fa-copy"></i>
                <p>
                    Services
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="<?= Url::to(['question/index']) ?>" class="nav-link">
                <i class="nav-icon far fa-circle"></i>
                <p>
                    Questions
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="<?= Url::to(['testimonies/index']) ?>" class="nav-link">
                <i class="nav-icon far fa-envelope"></i>
                <p>
                    Testimonies
                </p>
            </a>
        </li>
    </ul>
</nav>