<section class="slider-wrapper">
    <div class="responisve-container">
        <div class="slider">
            <div class="fs_loader"></div>
            <div class="slide slide-light"> <img src="<?php echo $this->Url->build('/frontend/images/') ?>su-kien-chuyen-nghanh-bat-sonng-san-2015-07-20.png" alt="Sức hút bất động sản Việt Nam đối với Nhật Bản" height="320" data-position="0,-200" data-in="bottom" data-time="7000" data-delay="200" data-out="top" onclick="window.location='#'" style="cursor:pointer"></div>

            <div class="slide slide-light">
                <img src="<?php echo $this->Url->build('/frontend/assets/images/') .'carousel/carousel-img-3.jpg' ?>" alt="Japan Circle - Kết nối giao thương Việt Nhật" height="320" data-position="0,-200" data-in="bottom" data-delay="200" data-out="top">
                <img src="<?php echo $this->Url->build('/frontend/assets/images/').'prv/human-img-3.png'; ?>" alt="Japan Circle - Kết nối giao thương Việt Nhật" data-position="30, 650" data-in="bottom" data-delay="400" data-out="bottom">
                <p class="claim bg-2" data-position="70,0" data-in="top" data-step="1" data-out="bottom" data-time="1000" data-delay="100"> THÀNH VIÊN CAO CẤP JAPAN CIRCLE </p>
                <p class="claim dark" data-position="120,0" data-in="top" data-step="1" data-out="bottom" data-time="3500" data-delay="250"> MỞ RỘNG CƠ HỘI GIAO THƯƠNG </p>
                <p class="teaser dark small" data-position="180,0" data-in="left" data-step="2" data-time="1500" data-delay="100">Thông tin  thị trường Nhật</p>
                <p class="teaser dark small" data-position="180,0" data-in="left" data-step="2" data-special="cycle" data-time="3100" data-delay="1600"> Kết nối khách hàng Nhật</p>
                <p class="teaser dark small" data-position="180,0" data-in="left" data-step="2" data-special="cycle" data-time="5000" data-delay="3000"> Dữ liệu thành viên </p>
                <p class="teaser dark small" data-position="180,0" data-in="left" data-step="2" data-special="cycle" data-time="7000" data-delay="5000"> Ưu đãi đặc biệt</p>
                <p class="teaser dark small" data-position="180,0" data-in="left" data-step="2" data-special="cycle" data-time="9000" data-delay="7500"> Hỗ trợ cao cấp</p>
            </div>

            <div class="slide slide-light"> <img src="<?php echo $this->Url->build('/frontend/images/') ?>japan-circle-supportor.png" alt="Japan Circle Supportor" height="320" data-position="0,-200" data-in="bottom" data-time="7000" data-delay="200" data-out="top" onclick="window.location='https://docs.google.com/forms/d/1_f78Uoz5uS6Ch8NnggqYX6dKdykXwq0ZhvwfP56nnQo/viewform'" style="cursor:pointer"></div>

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
                    foreach($Inquiries as $Inquirie):
                    ?>
                    <a href="<?=Core::generateUrl('inquiryIndex',['name' => $Inquirie['title_'.$fieldLanguage],'id' => $Inquirie['id']])?>" title="Tìm đối tác phân phối bánh kẹo" >
                        <i class="fa  fa-arrow-circle-right"></i> <?=$Inquirie['title_'.$fieldLanguage]?></a> &nbsp;&nbsp;&nbsp;
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
                    <h2><?=__('Error 404')?></h2>

                    <div class="error"><?= __('Dữ liệu không tồn tại') ?></div>
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