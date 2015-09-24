
<section class="slice bg-3 animate-hover-slide">
    <div class="w-section">
        <div class="container">
            <div class="row">
                <?= $this->element('frontend/sidebar') ?>
                <!-- Begin Container cennter -->
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="section-title"><?= __('Cơ hội hợp tác')?></h3>
                            <div class="w-box blog-post">
                                <div class="figure">
                                    <h2> <?= $inquiry['title_'.$fieldLanguage] ?> </h2>
                                    <ul class="meta-list">
                                        <?php
                                            $dateStart = '';
                                            if(is_object($inquiry['date_start'])) $dateStart = $inquiry['date_start']->i18nFormat('dd-MM-YYYY');
                                        ?>
                                        <li> <a href="#"><?= $dateStart ?></a> </li>
                                    </ul>
                                    <?= $this->element('frontend/facebook_like') ?>
                                    <div class="content">
                                        <?= $inquiry['content_'.$fieldLanguage] ?>
                                    </div>
                                    <p>
                                        <?= $this->Html->link('<i class="fa fa-hand-o-right"></i> '.__('Đăng ký hợp tác'), ['controller' => 'Pages', 'action' => 'registerInquiry', $inquiry['id']],['class' => 'btn btn-lg btn-two pull-right','title' => $inquiry['title_'.$fieldLanguage], 'escape' => false]) ?>

                                    </p>
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
                            foreach($others as $item):
                                $url = Core::generateUrl('inquiryIndex', [
                                    'name' => $item['title_'.$fieldLanguage],
                                    'id' => $item['id']
                                ]);
                                ?>
                                <div class="comment">
                                    <?= $this->Core->image('Inquiries/'.$item['image'], 400, 300) ?>
                                    <p>
                                        <a title="<?= $item['title_'.$fieldLanguage] ?>" href="<?= $url ?>"><?= $item['title_'.$fieldLanguage] ?></a>
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