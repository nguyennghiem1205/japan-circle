
<section class="slice bg-3 animate-hover-slide">
    <div class="w-section">
        <div class="container">
            <div class="row">
                <?=$this->element('frontend/sidebar') ?>
                <!-- Begin Container cennter -->
                <div class="col-md-6">

                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="section-title"><?= $title?></h3>
                            <div class="row">
                                <?php foreach ($events as $item): ?>
                                <div class="col-md-6">
                                    <div class="w-box">
                                        <div class="figure">
                                            <?= $this->Core->image('Events/'.$item['image'], 595, 840, ['class' => 'img-responsive']) ?>
                                            <div class="figcaption bg-2">

                                            </div>
                                            <div class="figcaption-btn">
                                                <a href="<?= $this->Url->build('/upload/Events/'.$item['image'], 595, 840, ['base' => true], false, true) ?>" class="btn btn-xs btn-one theater">
                                                    <i class="fa fa-plus-circle"></i> Zoom
                                                </a>
                                            </div>
                                        </div>
                                        <a href="<?= $this->Url->build('/upload/Events/'.$item['file']) ?>"><?= $item['title_'.$fieldLanguage] ?></a>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
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
    </div>
</section>