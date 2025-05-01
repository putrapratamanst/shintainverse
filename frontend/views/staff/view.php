<div class="container">

    <div class="content-area">

        <article id="post-1517" class="post-1517 stm_staff type-stm_staff status-publish hentry">
            <div class="entry-content">
                <div class="vc_row wpb_row vc_row-fluid vc_custom_1452687555475">
                    <?= $model->profile; ?>
                    <?= $this->render('@frontend/views/testimonies/index', ['testimonies' => $testimonies]) ?>
                </div>
            </div>
        </article> <!-- #post-## -->
    </div>

</div>