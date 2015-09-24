<section class="slice bg-3 animate-hover-slide">
    <div class="w-section">
        <div class="container">
            <div class="row">
                <?= $this->element('frontend/sidebar') ?>
                <!-- Begin Container cennter -->
                <div class="col-md-6">

                    <div class="row">
                        <div class="col-md-12">
                            <?php
                            if (!isset($activities)) {
                                $activities = false;
                            }
                            echo $this->element('frontend/list_news', ['data' => $data,'activities' => $activities]);
                            ?>
                        </div>
                    </div>
                </div>
                <!-- End Container cennter -->
                <div class="col-md-3">
                    <?= $this->element('frontend/box-member') ?>
                    <?= $this->element('frontend/sidebar-right') ?>
                </div>
            </div>
        </div>
</section>