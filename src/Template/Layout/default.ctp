<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="vi" xml:lang="vi">

<head>
    <script type="text/javascript">
        var BASE_URL = "<?= $this->Url->build('/',true); ?>";
        var FILE_ERROR_MAX_SIZE = <?php echo FILE_ERROR_MAX_SIZE ?>;
        var FILE_ERROR_EXTENSION = <?php echo FILE_ERROR_EXTENSION ?>;
        var FILE_ERROR_EMPTY = <?php echo FILE_ERROR_EMPTY ?>;
        var IMAGE_FIELDS = <?php echo json_encode($imageFields); ?>;
    </script>
    <!-- Required -->
    <?php
    echo $this->element('frontend/head');
    echo $this->Html->css([
        '../frontend/assets/boomerang_theme/css/smartadmin-production.min.css',
        '../frontend/assets/boomerang_theme/css/chosen.min.css',
        '../frontend/assets/boomerang_theme/css/global-style.css',
        '../frontend/assets/boomerang_theme/fraction/fractionslider.css',
        '../frontend/assets/dc9781bd/gridview/styles.css',
        '../frontend/bxslider/jquery.bxslider.css',
        '../frontend/raty/jquery.raty.css'
    ]);
    echo $this->Html->script([
        '../frontend/assets/boomerang_theme/js/jquery.js',
        'core/jquery-ui.min.js',
        '../frontend/bxslider/jquery.bxslider.min.js',
        '../frontend/raty/jquery.raty.js',
        '../frontend/assets/js/global.js',
        'core/tinymce/tinymce.min.js',
        '../frontend/assets/js/core.js',
        '../frontend/assets/boomerang_theme/js/chosen.jquery.min.js',
        'Admin.global.js',
    ])
    ?>
</head>
<body class="wp-theme-1"  >
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.4&appId=531172783637826";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<div class="wrapper boxed">
    <header>
        <?= $this->element('frontend/nav-bar') ?>
    </header>
    <!-- End : Header -->

    <?php echo $this->fetch('content') ?>

    <!-- Begin Parner-->
    <section class="slice relative animate-hover-slide bg-3">
        <div class="w-section inverse">
            <div class="container">
                <h3 class="section-title"><?= __('Đối tác')?></h3>
                <div id="carouselWork" class="carousel-3 slide animate-hover-slide">
                    <ul class="bxslider">
                        <?php foreach ($banners as $item):?>
                            <?php
                            if ($item['position'] != BANNER_POSITION_BOTTOM) {
                                continue;
                            }
                            ?>
                            <li>
                                <div class="w-box product">
                                    <figure>
                                        <?= $this->Core->image('banners/'.$item['image'], 150, 150, ['alt' => $item['text_'.$fieldLanguage], 'class' => 'img-responsive img-center']) ?>
                                    </figure>
                                    <p>
                                        <a href="<?= $item['url']?$item['url']:'#' ?>"  ><?= $item['text_'.$fieldLanguage] ?></a></p>
                                </div>
                            </li>
                        <?php endforeach?>
                    </ul>

                </div>
            </div>
    </section>
    <!-- End Parner-->
    <?= $this->element('frontend/footer') ?>
</div>

<!-- JavaScript -->
<?php
echo $this->Html->script(array(

    '../frontend/assets/boomerang_theme/bootstrap/js/bootstrap.min.js',
    '../frontend/assets/boomerang_theme/js/modernizr.custom.js',
    '../frontend/assets/boomerang_theme/js/jquery.mousewheel-3.0.6.pack.js',
    '../frontend/assets/boomerang_theme/js/jquery.mousewheel-3.0.6.pack.js',
    '../frontend/assets/boomerang_theme/js/jquery.cookie.js',
    '../frontend/assets/boomerang_theme/js/jquery.easing.js',
    '../frontend/assets/boomerang_theme/hover-dropdown/bootstrap-hover-dropdown.min.js',
    '../frontend/assets/boomerang_theme/masonry/masonry.js',
    '../frontend/assets/boomerang_theme/page-scroller/jquery.ui.totop.min.js',
    '../frontend/assets/boomerang_theme/mixitup/jquery.mixitup.js',
    '../frontend/assets/boomerang_theme/mixitup/jquery.mixitup.init.js',
    '../frontend/assets/boomerang_theme/fancybox/jquery.fancybox.pack8cbb.js?v=2.1.5',
    '../frontend/assets/boomerang_theme/easy-pie-chart/jquery.easypiechart.js',
    '../frontend/assets/boomerang_theme/waypoints/waypoints.min.js',
    '../frontend/assets/boomerang_theme/fraction/jquery.fractionslider.min.js',
    '../frontend/assets/boomerang_theme/fraction/jquery.fractionslider.init.js',
    '../frontend/assets/boomerang_theme/js/endless_scroll_min.js',
    '../frontend/assets/boomerang_theme/js/jquery.scrollbar.js',
    '../frontend/assets/boomerang_theme/js/jquery.wp.custom.js',
));
echo $this->fetch('footer_js');
?>
</body>

</html>
<script>
    $(document).ready(function(){
        $('.bxslider').bxSlider({
            minSlides: 1,
            maxSlides: 6,
            slideWidth: 175,
            slideMargin: 10,
            auto: true
        });
    });
</script>
