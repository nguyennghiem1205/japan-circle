
<section class="slice bg-3 animate-hover-slide">
    <div class="w-section">
        <div class="container">
            <div class="row">
                <?=$this->element('frontend/sidebar') ?>
                <!-- Begin Container cennter -->
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="section-title"><?= __('Tin tức')?></h3>
                            <div class="w-box blog-post">
                                <div class="figure">
                                    <h2> <?= $news['name_'.$fieldLanguage] ?> </h2>
                                    <ul class="meta-list">
                                        <li> <a href="#"><?= $news['created']->i18nFormat('dd-MM-YYYY') ?></a> </li>
                                    </ul>
                                    <?= $this->element('frontend/facebook_like') ?>
                                    <div class="content">
                                        <?= $news['content_'.$fieldLanguage] ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <?= $this->element('frontend/facebook_like') ?>
                            <?= $this->element('frontend/facebook_comment') ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 comments-wr">
                            <h3 class="section-title"><?= __('Các tin cùng chủ đề')?></h3>
                            <?php
                            foreach($otherNews as $item):
                                $url = Core::generateUrl('newsIndex', [
                                    'name' => $item['name_'.$fieldLanguage],
                                    'id' => $item['id']
                                ]);
                            ?>
                                <div class="comment">
                                    <?= $this->Core->image('News/'.$item['image'], 400, 300) ?>
                                    <p>
                                        <a title="<?= $item['name_'.$fieldLanguage] ?>" href="<?= $url ?>"><?= $item['name_'.$fieldLanguage] ?></a>
                                    </p>
                                </div>
                            <?php endforeach; ?>
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