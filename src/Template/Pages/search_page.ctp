<section class="slider-wrapper">
    <div class="responisve-container">
        <div class="slider">
            <div class="fs_loader"></div>
            <?php
            $index = 0;
            foreach ($banners as $item):
                if ($item['position'] != BANNER_POSITION_TOP) {
                    continue;
                }
                echo '<div class="slide slide-light">';
                echo $this->Core->image('banners/'.$item['image'], 1396, 320, [
                    'height' => 320,
                    'base' => true,
                    'data-position' => "0,-200",
                    'data-in' => "bottom",
                    'data-time' => "7000",
                    'data-delay' => "200",
                    'data-out' => "top",
                    'style' => "cursor:pointer",
                    'onclick' => 'window.location.href="'.$item['url'].'"'
                ]);
                echo '</div>';
            endforeach;
            ?>

            <div class="slide slide-light">
                <img src="<?php echo $this->Url->build('/frontend/assets/images/') .'carousel/carousel-img-3.jpg' ?>" alt="Japan Circle - Kết nối giao thương Việt Nhật" height="320" data-position="0,-200" data-in="bottom" data-delay="200" data-out="top">
                <img src="<?php echo $this->Url->build('/frontend/assets/images/').'prv/human-img-3.png'; ?>" alt="Japan Circle - Kết nối giao thương Việt Nhật" data-position="30, 650" data-in="bottom" data-delay="400" data-out="bottom">
                <p class="claim bg-2" data-position="70,0" data-in="top" data-step="1" data-out="bottom" data-time="1000" data-delay="100"> <?= __('THÀNH VIÊN CAO CẤP JAPAN CIRCLE')?> </p>
                <p class="claim dark" data-position="120,0" data-in="top" data-step="1" data-out="bottom" data-time="3500" data-delay="250"> <?= __('MỞ RỘNG CƠ HỘI GIAO THƯƠNG')?> </p>
                <p class="teaser dark small" data-position="180,0" data-in="left" data-step="2" data-time="1500" data-delay="100"><?= __('Thông tin  thị trường Nhật')?></p>
                <p class="teaser dark small" data-position="180,0" data-in="left" data-step="2" data-special="cycle" data-time="3100" data-delay="1600"> <?= __('Kết nối khách hàng Nhật')?></p>
                <p class="teaser dark small" data-position="180,0" data-in="left" data-step="2" data-special="cycle" data-time="5000" data-delay="3000"> <?= __('Dữ liệu thành viên')?> </p>
                <p class="teaser dark small" data-position="180,0" data-in="left" data-step="2" data-special="cycle" data-time="7000" data-delay="5000"> <?= __('Ưu đãi đặc biệt')?></p>
                <p class="teaser dark small" data-position="180,0" data-in="left" data-step="2" data-special="cycle" data-time="9000" data-delay="7500"> <?= __('Hỗ trợ cao cấp')?></p>
            </div>

        </div>
    </div>


</section>
<section class="slice bg-2 p-10">
    <div class="cta-wr">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-2" ><?= __('Nhu cầu hợp tác') ?>:</div>
                <div class="col-md-10 col-sm-10" id="topscroll">
                    <?php
                    foreach($topInquiries as $Inquirie):
                        ?>
                        <a href="<?= $Inquirie['url']?>" title="<?=$Inquirie['title_'.$fieldLanguage] ?>" >
                            <i class="fa  fa-arrow-circle-right"></i> <?=$Inquirie['title_'.$fieldLanguage] ?></a> &nbsp;&nbsp;&nbsp;
                        <?php
                    endforeach;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End : Banner -->
<!-- Register Text -->

<!-- End : REgister Text -->
<section class="slice bg-3 animate-hover-slide">
    <div class="w-section">
        <div class="container">
            <div class="row">
                <?= $this->element('frontend/sidebar'); ?>
                <div class="col-md-6">

                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="section-title"><?= __('Cơ hội hợp tác cho kết quả tìm kiếm với "{0}"', $search) ?></h3>
                            <div class="row">
                                <?php
                                foreach($Inquiries as $Inquirie):
                                    ?>
                                    <div class="col-md-6">
                                        <div class="w-box">
                                            <div class="figure">
                                                <?=$this->Core->image('Inquiries/'.$Inquirie['image'], 261, 169, ['class' => 'img-responsive', 'alt' => $Inquirie['title_'.$fieldLanguage]])?>
                                                <div class="figcaption bg-2"></div>
                                                <div class="figcaption-btn">
                                                    <a href="<?=$this->Core->image('Inquiries/'.$Inquirie['image'], 261, 169, ['class' => 'img-responsive', 'alt' => $Inquirie['title_'.$fieldLanguage]],false,true)?>" class="btn btn-xs btn-one theater" title="<?=$Inquirie['title_'.$fieldLanguage]?>">
                                                        <i class="fa fa-plus-circle"></i> Phóng to
                                                    </a>
                                                </div>
                                            </div>
                                            <h2>
                                                <a title="<?=$Inquirie['title_'.$fieldLanguage]?>" href="<?=Core::generateUrl('inquiryIndex',['name' => $Inquirie['title_'.$fieldLanguage],'id' => $Inquirie['id']])?>"><?=$Inquirie['title_'.$fieldLanguage]?></a>
                                            </h2>
                                            <p><?=$this->Text->truncate($Inquirie['description_'.$fieldLanguage],53,['ellipsis' => '...','exact' => false,'html'=>true])?></p>
                                            <div class="w-footer">
                                                <span class="pull-left"><small><?=$Inquirie['created']->i18nFormat('dd-MM-YYYY')?></small></span>
                                                <a class="btn btn-xs btn-two pull-right" title="Xem thêm" href="<?=Core::generateUrl('inquiryIndex',['name' => $Inquirie['title_'.$fieldLanguage],'id' => $Inquirie['id']])?>"><?= __('Xem thêm')?></a>
                                                <span class="clearfix"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                endforeach;
                                ?>
                            </div>

                            <div class="cta-wr slice bg-5 p-15">
                                <div class="row">
                                    <?php if(count($Inquiries->toArray()) > 0): ?>
                                    <div class="col-md-9">
                                        <h1> <strong><?= __('Xem thêm cơ hội hợp tác') ?> </strong> </h1>
                                    </div>
                                    <div class="col-md-3">
                                        <a class="btn btn-two btn-lg pull-right" title="<?= __('Xem thêm') ?>" href="<?= $this->Url->build(['controller' => 'Pages', 'action' => 'cooperations']) ?>" target="_self">
                                            <i class="fa fa-hand-o-right"></i>
                                        </a>
                                    </div>
                                    <?php else:?>
                                        <div class="col-md-9">
                                            <h1><strong><?= __('検索結果が見つかりませんでした')?></strong></h1>
                                        </div>
                                    <?php endif;?>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div style="padding-bottom:15px;"></div>
                </div>
                <!-- End Container cennter -->
                <div class="col-md-3">
                    <?php
                    echo $this->element('frontend/box-member');
                    echo $this->element('frontend/sidebar-right')
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>