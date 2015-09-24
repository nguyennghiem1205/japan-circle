<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    echo $this->element('frontend/head');
    echo $this->Html->css([
        '../frontend/about/css/bootstrap.min.css',
        '../frontend/about/css/font-awesome.min',
        '../frontend/about/css/carousel',
        '../frontend/about/css/animate',
        '../frontend/about/css/style',
        '../frontend/about/css/skin-red',
        'http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,cyrillic-ext,greek-ext,greek,vietnamese,latin-ext,cyrillic',
    ]);
    ?>
    <title><?= $titleLayout ?></title>
</head>
<body data-spy="scroll" data-target=".main_h">

<!-- BEGIN HEADER
================================================== -->
<header class="main_h sticky">
    <div class="container">
        <div class="row">
            <a class="logo" href="/"><img src="<?= $this->Url->build('/frontend/about/img/'); ?>japan-circle.png" ></a>
            <div class="mobile-toggle"> <span></span> <span></span> <span></span> </div>
            <nav>
                <ul class="nav">
                    <li><a href="<?=$this->Url->build('/')?>"><?= __('Trang chủ') ?></a></li>
                    <li><a href="#doanhnghiep"><?= __('Vì sao?') ?></a></li>
                    <li><a href="#quyenloi"><?= __('Quyền lợi') ?></a></li>
                    <li><a href="#pricePlans"><?= __('Mạng lưới') ?></a></li>
                    <li><a href="#hoatdong"><?= __('Hoạt động') ?></a></li>
                    <li><a href="#thanhvien"><?= __('Thành viên') ?></a></li>
                    <li class="lastLi"><a href="<?=$this->Url->build('/')?>contact-us"><?= __('Liên hệ') ?></a></li>
                    <?php
                    $listLang = \Cake\Core\Configure::read('Core.System.language');
                    $defaultLang = [];
                    foreach ($listLang as $key => $value) {
                        $defaultLang[$value['key']] = $value;
                    }
                    foreach($listLang as $value):
                        ?>
                        <li class="language-li">
                            <a href="<?= $this->Url->build(['plugin' => null, 'controller' => 'pages', 'action' => 'change_language', $value['key']])?>"><img src="<?= $this->Url->build('/img/blank.gif') ?>" class="flag <?= $value['flag']?>" alt="<?= $value['name']?>"></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </nav>
        </div>
    </div>
</header>
<!-- BEGIN HOME
================================================== -->
<section id="home" class="homepage">
    <div class="section-overlay-home"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-5"> <img src="<?= $this->Url->build('/frontend/about/img/'); ?>homeimg.png" class="img-responsive wow flipInY animated" alt=""> </div>
            <div class="col-sm-7 text-right">
                <h1 id="logo"> <a href="#"> <img src="<?= $this->Url->build('/frontend/about/img/'); ?>logo.png" alt="Apulum" class="wow fadeInDown animated" data-wow-delay="0.3s"> </a> </h1>
                <div class="rotate-description wow fadeInLeft animated"><?= __('Cầu nối giao thương Việt Nam - Nhật Bản') ?></div>
                <div class="small-text wow bounceIn animated">
                    <span>
                        <?= __('Dự án Xúc tiến, Tư vấn và Kết nối Thương mại giữa doanh nghiệp Việt Nam và Nhật Bản. Đến với Japan Circle, Quý doanh nghiệp sẽ được cung cấp các dịch vụ tối ưu để kết nối kinh doanh giữa doanh nghiệp Việt Nam với doanh nghiệp Nhật Bản') ?>
                    </span>
                </div>
                <div class="home-buttons">
                    <div class="row">
                        <div class="col-xs-6 text-right">
                            <a href="#doanhnghiep" class="btn btn-default btn-lg wow slideInLeft animated"><i class="fa fa-hand-o-right"></i> <?= __('Xem thêm')?></a>
                        </div>
                        <div class="col-xs-6 text-left">
                            <a href="<?=$this->Url->build(['controller' => 'pages', 'action' => 'memberRegister'])?>" class="btn btn-default btn-lg wow slideInRight animated"><i class="fa fa-file-text-o"></i> <?= __('Đăng ký') ?></a> </div>
                        </div>
                    </div>
            </div>
        </div>
        <!-- end .row -->
    </div>
    <a href="#doanhnghiep" class="introarrow"> <i class="fa fa-angle-double-down"></i> </a> </section>
<!-- end home -->

<!-- BEGIN FEATURES
================================================== -->
<section id="doanhnghiep">
    <div class="wrapsection">
        <div class="container">
            <div class="sectionhead">
                <h1 class="heading" style="font-weight:bold;"><?= __('NHỮNG KHÓ KHĂN GẶP PHẢI').'</br>'.__('KHI GIAO THƯƠNG VỚI THỊ TRƯỜNG NHẬT BẢN ?') ?></h1>
                <p class="lead"><?= __('Quý doanh nghiệp đang gặp khó khăn gì trong việc giao thương? Japan Circle sẽ cùng Quý doanh nghiệp tháo gỡ khó khăn.')?></p>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-5"> <img src="<?= $this->Url->build('/frontend/about/img/'); ?>khokhan.jpg" class="img-responsive wow flipInX animated" alt=""> </div>
                    <div class="col-md-7 wow bounceIn animated">
                        <ul class=" unstyle" style="margin-left:40px;">
                            <li>
                                <h2><i class="fa  fa-info-circle"></i><?= __('Thiếu thông tin')?></h2>
                            </li>
                            <li>
                                <h2><i class="fa fa-comments-o"></i><?= __('Rào cản ngôn ngữ')?></h2>
                            </li>
                            <li>
                                <h2><i class="fa fa-compress"></i><?= __('Mất thời gian tìm kiếm đối tác phù hợp')?></h2>
                            </li>
                            <li>
                                <h2><i class="fa fa-globe"></i><?= __('Rủi ro trong việc mở  rộng thị trường')?></h2>
                            </li>
                        </ul>
                        <br/>
                    </div>

                </div>
                <!-- end .row -->
            </div>
        </div>
    </div>
</section>
<!-- end features -->

<!-- BEGIN DOWNLOAD
================================================== -->
<section id="quyenloi" class="download whitetext">
    <div class="wrapsection">
        <div class="overlay highlightbg"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 wow bounceIn animated">
                    <h2><?= __('HÃY ĐĂNG KÝ THÀNH VIÊN JAPAN CIRCLE NGAY HÔM NAY!')?></h2>
                </div>
                <div class="col-md-6 wow bounceIn animated">
                    <ul class=" unstyle">
                        <li>
                            <h4><i class="fa fa-check-square-o"></i><?= __('Quyền lợi thành viên')?></h4>
                            <ul style="margin-left:30px; list-style:none;">
                                <li><i class="fa fa-check-square-o"></i> <?= __('Được truy cập dữ liệu thành viên Japan Circle')?></li>
                                <li><i class="fa fa-check-square-o"></i> <?= __('Gửi thông tin tạp chí qua email vào ngày 15 và 30 hàng tháng')?></li>
                                <li><i class="fa fa-check-square-o"></i> <?= __('Được truy cập thông tin thị trường của các quốc gia thành viên')?></li>
                                <li><i class="fa fa-check-square-o"></i> <?= __('Được cung cấp thông tin hợp tác và dịch vụ hỗ trợ từ Supporter')?></li>
                                <li><i class="fa fa-check-square-o"></i> <?= __('Được cung cấp thông tin kinh tế thương mại, hội thảo, hội chợ, triển lãm cho thị trường Nhật Bản.')?></li>
                                <li><i class="fa fa-check-square-o"></i> <?= __('Nhận được thông tin về các sự kiện kết nối giao thương hoặc đào tạo.')?></li>
                                <li><i class="fa fa-check-square-o"></i> <?= __('Được quảng cáo trên website và ấn phẩm của Japan Circle.')?></li>
                                <li><i class="fa fa-check-square-o"></i> <?= __('Giới thiệu sản phẩm và dịch vụ qua họp Skype hoặc showroom tại trụ sở của Japancircle')?></li>
                                <li><i class="fa fa-check-square-o"></i> <?= __('Hỗ trợ ngôn ngữ và điều tra thị trường')?></li>
                            </ul>
                        </li>
                        <li>
                            <h4><i class="fa fa-thumbs-up"></i><?= __(' Các dịch vụ hỗ trợ thêm')?></h4>
                            <ul style="margin-left:30px; list-style:none;">
                                <li><i class="fa fa-check-square-o"></i> <?= __('Giới thiệu về doanh nghiệp.') ?> </li>
                                <li><i class="fa fa-check-square-o"></i> <?= __('Phát triển website')?></li>
                                <li><i class="fa fa-check-square-o"></i> <?= __('Điều tra thị trường.')?></li>
                                <li><i class="fa fa-check-square-o"></i> <?= __('Tổ chức các tour khảo sát')?></li>
                                <li><i class="fa fa-check-square-o"></i> <?= __('Hỗ trợ ngôn ngữ')?></li>
                                <li><i class="fa fa-check-square-o"></i> <?= __('Tư vấn quảng cáo')?></li>
                            </ul>
                        </li>
                    </ul>
                    <br/>
                    <a href="<?=$this->Url->build(['controller' => 'pages', 'action' => 'memberRegister'])?>" class="btn btn-lg btn-simple whitebg"><i class="fa fa-file-text-o"></i> <?= __('Đăng ký')?></a> </div>
                <div class="col-md-6"> <img src="<?= $this->Url->build('/frontend/about/img/'); ?>JPC-Certification.jpg" class="img-responsive wow flipInY animated" alt=""> </div>
            </div>
            <!-- end .row -->
        </div>
    </div>
</section>
<!-- end download -->

<!-- BEGIN pricePlans
================================================== -->
<section id="pricePlans">
    <div class="wrapsection">
        <div class="container">
            <div class="row " >
                <div class="col-md-10 col-md-offset-1 map" style=" height:560px;"></div>
            </div>
            <!-- End ul#plans -->
        </div>
    </div>

</section>
<!--END pricePlans -->

<!-- BEGIN PAGE DIVIDER
================================================== -->
<div class="divider-area"> <span class="icon"> <a href="#screenshots"><i class="fa fa-camera highlight"></i></a> </span> </div>
<!-- END PAGE DIVIDER -->

<!-- BEGIN SHOWCASE
================================================== -->
<section id="hoatdong" class="text-center">
    <div class="wrapsection">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="sectionhead">
                        <h1 class="heading" style="font-weight:bold;"><?= __('HOẠT ĐỘNG')?></h1>
                        <p class="lead"> <?= __('JAPAN CIRCLE TỔ CHỨC CÁC BUỔI HỘI THẢO XÚC TIẾN THƯƠNG MẠI.')?><br>
                            <?= __('VÀ CÁC BUỔI CHIA SẼ KINH NGHIỆP KHI GIAO THƯƠNG VỚI NHẬT BẢN!')?> </p>
                    </div>
                    <div id="wowcarousel" class="owl-carousel">
                        <?php foreach ($bannersActivities as $item):?>
                            <div class="item">
                                <?= $this->Core->image('banners/'.$item['image'], 550, 380, ['alt' => $item['text_'.$fieldLanguage], 'url' => $item['url']]) ?>
                                <div class="text"><?= $item['text_'.$fieldLanguage] ?></div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
    </div>
</section>
<!-- END SHOWCASE -->

<!-- BEGIN TESTIMONIALS
================================================== -->
<section id="thanhvien" class="testimonials whitetext">
    <div class="wrapsection">
        <div class="overlay"></div>
        <div class="container">
            <div class="sectionhead">
                <h1 class="heading"  style="font-weight:bold;"><?= __('THÀNH VIÊN TIÊU BIỂU')?></h1>
                <p class="lead" style="color:#fff !important;"><?= __('Số lương thành viên tham gia Japan Circle tăng không ngừng trên hệ thống, sau đây là hình ảnh vài thành viên tiêu biểu')?></p>
            </div>
            <div class="row text-center">
                <div id="wowtestim" class="owl-carousel">

                    <?php foreach ($bannersMembers as $item): ?>
                        <!-- testimonial 1 -->
                        <div class="item">
                            <?= $this->Core->image('banners/'.$item['image'], 400, 400, ['alt' => $item['text_'.$fieldLanguage], 'url' => $item['url'], 'class' => 'avatar']) ?>
                            <?php
                            $explodeText = explode('-', $item['text_'.$fieldLanguage]);
                            ?>
                            <h1 class="client-name uppercase"><?= $explodeText[0] ?></h1>
                            <?php
                            if (isset($explodeText[1])) {
                                echo '<h3 class="client-pos uppercase">'.$explodeText[1].'</h3>';
                            }
                            ?>

                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- END TESTIMONIALS -->

<!-- BEGIN CONTACT-PAGE

<!-- END CONTACT SECTION -->

<!-- BEGIN FOOTER
================================================== -->
<div id="footer" class="footer"> <a href="#home" class="footerarrow"> <i class="fa fa-angle-double-up"></i> </a>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <ul class="social-icons">
                    <li class="wow bounceIn animated" data-wow-delay="0.1s"><a href="https://www.facebook.com/jpcircle" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li class="wow bounceIn animated" data-wow-delay="0.2s"><a href="#."><i class="fa fa-twitter"></i></a></li>
                    <li class="wow bounceIn animated" data-wow-delay="0.3s"><a href="#."><i class="fa fa-google-plus"></i></a></li>
                    <li class="wow bounceIn animated" data-wow-delay="0.4s"><a href="#."><i class="fa fa-dribbble"></i></a></li>
                    <li class="wow bounceIn animated" data-wow-delay="0.5s"><a href="#."><i class="fa fa-pinterest"></i></a></li>
                </ul>
                <p class="copyright"> &copy; <?= __('Japan Circle. All rights reserved. ')?></p>
            </div>
        </div>
    </div>
</div>
<!-- END FOOTER
================================================== -->

<!-- JavaScript placed at the end of the document so the pages load faster
================================================== -->
<?php
echo $this->Html->script([
    '../frontend/about/js/jquery.min',
    'https://maps.google.com/maps/api/js?sensor=false',
    '../frontend/about/js/bootstrap.min',
    '../frontend/about/js/jquery.easing.min',
    '../frontend/about/js/smoothscroll',
    '../frontend/about/js/carousel.min',
    '../frontend/about/js/wow.min',
    '../frontend/about/js/validate',
    '../frontend/about/js/common',
])
?>
<script >
    //map page
    function initialiseMap() {

        //is there a google map to initialise?
        if (jQuery('.map').length>0) {

            var map,
                centre = new google.maps.LatLng(22.3698443,114.1223788),
                markers = [
                    [new google.maps.LatLng(10.768451, 106.6943626), 'Vietnam<br /><br />VFC Tower, 29 Ton Duc Thang<br />Ben Nghe Ward, Dist. 1, HCMC'],
                    [new google.maps.LatLng(13.03887,101.490104), 'Thailand'],
                    [new google.maps.LatLng(11.9879666,104.9806145), 'Campodia'],
                    [new google.maps.LatLng(1.352083,103.819836), 'Singapore'],
                    [new google.maps.LatLng(34.6614092,135.4193706), 'Japan'],
                    [new google.maps.LatLng(22.3698443,114.1223788), 'HongKong'],
                    [new google.maps.LatLng(23.553118,121.0211023), 'Taiwan'],
                    [new google.maps.LatLng(11.6978351,122.6217542), 'Philippines'],

                ],
                stylez = [
                    {
                        featureType: "all",
                        elementType: "all",
                        stylers: [
                            { saturation: -100 }
                        ]
                    }
                ],

                mapOptions = {
                    zoom: 7,
                    center: centre,
                    mapTypeControlOptions: {
                        mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'greyscale']
                    }
                };

            map = new google.maps.Map(jQuery('.map')[0], mapOptions);

            var mapType = new google.maps.StyledMapType(stylez, { name:"Portland" });
            map.mapTypes.set('greyscale', mapType);
            map.setMapTypeId('greyscale'),
                minZoomLevel = 2,
                infowindow = new google.maps.InfoWindow();

            //set min zoom - prevent them zooming out too far
            google.maps.event.addListener(map, 'zoom_changed', function() {
                if (map.getZoom() < minZoomLevel) {
                    map.setZoom(minZoomLevel);
                }
            });

            //add markers
            var i =0
            jQuery.each(markers, function(index) {
                if( i== 0){
                    var strIcon = 'img/marker.png';
                }else{
                    var strIcon = 'img/gray_marker.png';
                }
                i++;
                marker = new google.maps.Marker({
                    map:map,
                    draggable:false,
                    animation: google.maps.Animation.DROP,
                    position: this[0],
                    icon: strIcon
                });

                google.maps.event.addListener(marker, 'click', (function(marker, i) {
                    return function() {
                        infowindow.setContent(markers[i][1]);
                        //infowindow.setContent('dave');
                        infowindow.open(map, marker);
                    }
                })(marker, index));
            });


            minZoomLevel = 4;
            map.setZoom(3);
            //recentre
            map.setCenter(centre);

        }
    }


    jQuery(document).ready(function() {

        initialiseMap();
    });
</script>
</body>

</html>