<?php

use yii\helpers\Url;
?>
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-header">MENUS</li>
        <li class="nav-item">
            <a href="<?= Url::to(['company-overview/index']) ?>" class="nav-link">
                <i class="nav-icon far fa-calendar-alt"></i>
                <p>
                    Company Overview
                    <span class="badge badge-info right">2</span>
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="<?= Url::to(['service/index']) ?>" class="nav-link">
                <i class="nav-icon far fa-image"></i>
                <p>
                    Services
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="<?= Url::to(['staff/index']) ?>" class="nav-link">
                <i class="nav-icon far fa-image"></i>
                <p>
                    Staffs
                </p>
            </a>
        </li>
    </ul>
</nav>