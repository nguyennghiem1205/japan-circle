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


                    <?php if ($newsHome): ?>
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="section-title"><?= __('Tin tức') ?></h3>
                            <div id="homepageCarousel" class="carousel carousel-1 slide " data-ride="carousel">
                                <ul class="carousel-inner list-listings blog-list">
                                    <?php
                                    $index = 0;
                                    foreach ($newsHome as $item):
                                        $active = null;
                                        if ($index == 0) {
                                            $active = 'active';
                                        }
                                        $index++;
                                        $url = Core::generateUrl('newsIndex', [
                                            'name' => $item['name_'.$fieldLanguage],
                                            'id' => $item['id']
                                        ]);
                                        ?>
                                    <li class="item item-light <?= $active ?>">
                                        <div class="listing-image">
                                            <?= $this->Core->image('News/'.$item['image'], 400, 300, ['class' => 'img-responsive', 'alt' => $item['name_'.$fieldLanguage]]) ?>
                                        </div>
                                        <div class="listing-body">
                                            <h3><a title=" <?= $item['name_'.$fieldLanguage] ?>" href="<?= $url ?>"> <?= $item['name_'.$fieldLanguage] ?></a></h3>
                                            <p><?= $this->Text->truncate(strip_tags($item['content_vie']), 100); ?></p>
                                            <p>
                                                <a class="btn btn-xs btn-two pull-right" title="<?= $item['name_'.$fieldLanguage] ?>" href="<?= $url ?>"><?= __('Xem thêm')?></a>
                                            </p>
                                        </div>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>

                                <!-- Controls -->
                                <a class="left carousel-control" href="#homepageCarousel" data-slide="prev"> <i class="fa fa-angle-left"></i> </a> <a class="right carousel-control" href="#homepageCarousel" data-slide="next"> <i class="fa fa-angle-right"></i> </a> </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="section-title"><?= __('Thành viên Nhật Bản') ?></h3>
                            <table class="table table-bordered table-hover table-responsive">
                                <tbody>
                                <?php if($memberApi && count($memberApi) > 0):?>
                                <?php foreach($memberApi as $member):?>
                                        <?php
                                            $industry = null;
                                            if(isset($member['MemberIndustry'][0]['industry_code']) && isset($listIndustries[$member['MemberIndustry'][0]['industry_code']])) $industry = $listIndustries[$member['MemberIndustry'][0]['industry_code']];
                                        ?>
                                    <tr>

                                        <td><?= $industry?></td>
                                        <td><?= $member['Member']['company']?></td>
                                        <td>
                                            <?= $this->Html->link(__('Chi tiết'), ['controller' => 'Pages', 'action' => 'detailMember', $member['Member']['id']],['class' => 'btn btn-xs btn-two pull-right','title' => __('Thông tin chi tiết')]) ?>
                                        </td>
                                    </tr>
                                <?php endforeach?>
                                <?php endif?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="section-title"><?= __('Cơ hội hợp tác ') ?></h3>
                            <div class="row boxHome">
                                <?php
                                foreach($Inquiries as $Inquirie):
                                    ?>
                                    <div class="col-md-6 box-homepage">
                                        <div class="w-box">
                                            <div class="figure">
                                                <?=$this->Core->image('Inquiries/'.$Inquirie['image'], 261, 169, ['class' => 'img-responsive', 'alt' => $Inquirie['title_'.$fieldLanguage]])?>
                                                <div class="figcaption bg-2"></div>
                                                <div class="figcaption-btn">
                                                    <a href="<?=$this->Core->image('Inquiries/'.$Inquirie['image'], 261, 169, ['class' => 'img-responsive', 'alt' => $Inquirie['title_'.$fieldLanguage]],false,true)?>" class="btn btn-xs btn-one theater" title="<?=$Inquirie['title_'.$fieldLanguage]?>">
                                                        <i class="fa fa-plus-circle"></i> <?= __('Phóng to')?>
                                                    </a>
                                                </div>
                                            </div>
                                            <h2>
                                                    <a title="<?=$Inquirie['title_'.$fieldLanguage]?>" href="<?=Core::generateUrl('inquiryIndex',['name' => $Inquirie['title_'.$fieldLanguage],'id' => $Inquirie['id']])?>"><?=$Inquirie['title_'.$fieldLanguage]?></a>
                                            </h2>
                                            <p><?=$this->Text->truncate($Inquirie['description_'.$fieldLanguage],53,['ellipsis' => '...','exact' => false,'html'=>true])?></p>
                                            <div class="w-footer">
                                                <?php
                                                $dataStart = '';
                                                    if(is_object($Inquirie['date_start'])) $dataStart = $Inquirie['date_start']->i18nFormat('dd-MM-YYYY');
                                                ?>
                                                <span class="pull-left"><small><?=$dataStart?></small></span>
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
                                    <div class="col-md-9">
                                        <h1> <strong><?= __('Xem thêm cơ hội hợp tác') ?> </strong> </h1>
                                    </div>
                                    <div class="col-md-3">
                                        <a class="btn btn-two btn-lg pull-right" title="<?= __('Xem thêm') ?>" href="<?= $this->Url->build(['controller' => 'Pages', 'action' => 'cooperations']) ?>" target="_self">
                                            <i class="fa fa-hand-o-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="padding-bottom:15px;"></div>

                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="section-title"><?= __('Hoạt động') ?></h3>
                            <div class="row boxHome">
                                <?php
                                foreach($Activities as $Activitie):
                                    ?>
                                    <div class="col-md-6 box-homepage2">
                                        <div class="w-box">
                                            <div class="figure">
                                                <?=$this->Core->image('activities/'.$Activitie['image'], 261, 169, ['class' => 'img-responsive', 'alt' => $Activitie['name_'.$fieldLanguage]])?>
                                                <div class="figcaption bg-2"></div>
                                                <div class="figcaption-btn">
                                                    <a href="<?=$this->Core->image('activities/'.$Activitie['image'], 261, 169, ['class' => 'img-responsive', 'alt' => $Activitie['name_'.$fieldLanguage]],false,true)?>" class="btn btn-xs btn-one theater" title="<?= __('Phóng lớn')?>">
                                                        <i class="fa fa-plus-circle"></i><?= __('Zoom') ?></a>
                                                </div>
                                            </div>
                                            <h2>
                                                <a title="<?=$Activitie['name_'.$fieldLanguage]?>" href="<?=Core::generateUrl('activityIndex',['name' => $Activitie['name_'.$fieldLanguage],'id' => $Activitie['id']])?>"><?=$Activitie['name_'.$fieldLanguage]?></a>
                                            </h2>
                                            <p><?=$this->Text->truncate($Activitie['content_'.$fieldLanguage],53,['ellipsis' => '...','exact' => false,'html'=>true])?></p>
                                            <div class="w-footer">
                                                <span class="pull-left"><small><?=$Activitie['created']->i18nFormat('dd-MM-YYYY')?></small></span>
                                                <a class="btn btn-xs btn-two pull-right" title="Xem thêm" href="<?=Core::generateUrl('activityIndex',['name' => $Activitie['name_'.$fieldLanguage],'id' => $Activitie['id']])?>"><?= __('Xem thêm')?></a><span class="clearfix"></span>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                endforeach;
                                ?>
                            </div>
                            <div class="cta-wr slice bg-5 p-15">
                                <div class="row">
                                    <div class="col-md-9">
                                        <h1> <strong><?= __('Xem thêm hoạt động') ?> </strong></h1>
                                    </div>
                                    <div class="col-md-3">
                                        <a class="btn btn-two btn-lg pull-right" title="Xem thêm hoạt động" href="<?= $this->Url->build('/') ?>activities" target="_self">
                                            <i class="fa fa-hand-o-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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