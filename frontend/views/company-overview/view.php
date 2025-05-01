<div class="container">
    <div class="content-area">
        <article id="post-9" class="post-9 page type-page status-publish hentry">
            <div class="entry-content">
                <div class="vc_row wpb_row vc_row-fluid vc_custom_1451991003825">
                    <?= $model->description ?>
                    <?= $this->render('@frontend/views/testimonies/index',['testimonies' => $testimonies]) ?>
                </div>
            </div>
        </article>
    </div>
</div>