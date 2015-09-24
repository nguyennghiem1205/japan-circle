<?= $this->Html->css('../frontend/assets/boomerang_theme/css/update.css') ?>

<?= $this->start('sidebar') ?>
<?= $this->element('frontend/box-member') ?>
<?= $this->end('sidebar') ?>

<section class="slice bg-3 animate-hover-slide">
    <div class="w-section">
        <div class="container">
            <div class="row">
                <?= $this->element('frontend/sidebar') ?>
                <!-- Begin Container cennter -->
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="section-title">
                                <?php
                                    switch ($country) {
                                        case MEMBER_COMPANY_COUNTRY_VIETNAM:
                                            echo __('Member Viet Nam');
                                            break;
                                        case MEMBER_COMPANY_COUNTRY_JAPAN:
                                            echo __('Member Japan');
                                            break;
                                    }
                                ?>
                            </h3>

                            <?php
                                $j = 1;
                            ?>
                            <div class="row">
                            <?php
                            if (!count($memberApi)) {
                                echo __('Hiện tại chúng tôi không tìm thấy thông tin nào!');
                            }
                            ?>
                            <?php foreach($memberApi as $member):?>
                                    <div class="col-md-6">
                                        <div class="row com">
                                            <div class="col-md-12 comheader">
                                                <?php

                                                $companyName = $members[$member['Member']['id']]['com_name_'.$fieldLanguage];
                                                if(!$companyName) {
                                                    $companyName = $member['Member']['company'];
                                                }

                                                if(!$companyName) {
                                                    $companyName = $members[$member['Member']['id']]['com_name_eng'];
                                                }

                                                ?>

                                                 <?= $this->Html->link($companyName, ['controller' => 'Pages', 'action' => 'detailMember', $member['Member']['id']],['class' => 'comname pull-left','title' => $member['Member']['company']]) ?>

                                                <ul class="pull-right comflag">
                                                    <?php
                                                    $lang = $members[$member['Member']['id']]['com_lang_chosen'];
                                                    if($lang) {
                                                        $lang = explode(',',$lang);
                                                        foreach($lang as $flag) {
                                                            switch ($flag) {
                                                                case MEMBER_LANGUAGE_VIETNAMESE:
                                                                    echo '<li><a href="#" class="vn" title="'.__('Viet Nam').'"></a></li>';
                                                                    break;
                                                                case MEMBER_LANGUAGE_JAPANESE:
                                                                    echo '<li><a href="#" class="jp" title="'.__('Japan').'"></a></li>';
                                                                    break;
                                                                case MEMBER_LANGUAGE_ENGLISH:
                                                                    echo '<li><a href="#" class="en" title="'.__('English').'"></a></li>';
                                                                    break;

                                                            }
                                                        }
                                                    }
                                                    ?>
                                                                </ul>
                                            </div>
                                            <?php
                                            $arrMember = $members[$member['Member']['id']];
                                            $com_business = strip_tags($arrMember['com_business_'.$fieldLanguage]);
                                            if (!$com_business) {
                                                $com_business = strip_tags($arrMember['com_business_vie']);
                                            }
                                            if (!$com_business) {
                                                $com_business = strip_tags($arrMember['com_business_eng']);
                                            }
                                            $address = $arrMember['address_'.$fieldLanguage];
                                            if(!$address) {
                                                $address = $arrMember['address_vie'];
                                            }
                                            if(!$address) {
                                                $address = $arrMember['address_eng'];
                                            }

                                            $contactPerson = $arrMember['manager_'.$fieldLanguage];
                                            if(!$contactPerson) {
                                                $contactPerson = $member['Member']['first_name'].' '.$member['Member']['last_name'];
                                            }

                                            if(!$contactPerson) {
                                                $contactPerson = $arrMember['manager_eng'];
                                            }

                                            ?>
                                            <div class="col-md-12 commeta">
                                                <div>
                                                    <ul class="cominfo">
                                                        <li><strong><?= $this->Text->truncate($com_business, 150)?> ...</strong></li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="col-md-7 col-sm-7">
                                                <ul class="comcontact">
                                                    <li title="<?= $address?>"><i class="fa fa-map-marker"></i> <?= $address?></li>
                                                    <li title="<?= $member['Member']['tel']?>"><i class="fa fa-phone"></i>  <?= $member['Member']['tel']?></li>
                                                    <li title="<?= $contactPerson.' ('.$member['Division']['name_'.$fieldLanguage].')'?>"><i class="fa  fa-male"></i> <?= $member['Member']['first_name'].' '.$member['Member']['last_name'].' ('.$member['Division']['name_'.$fieldLanguage].')'?></li>
                                                </ul>
                                            </div>

                                            <div class="col-md-5 col-sm-5">
                                                <?= $this->Core->image('Members/'.$members[$member['Member']['id']]['image'],100,100,array('base' => true, 'class' => 'img-responsive pull-right'))?>
                                            </div>

                                            <div class="col-md-12">
                                                <div id="carouselWork<?= $member['Member']['id'] ?>" class="carousel carousel-3 slide animate-hover-slide">
                                                    <div class="carousel-nav"> <a data-slide="prev" class="left color-two" href="#carouselWork<?= $member['Member']['id'] ?>"><i class="fa fa-angle-left"></i></a> <a data-slide="next" class="right color-two" href="#carouselWork<?= $member['Member']['id'] ?>"><i class="fa fa-angle-right"></i></a> </div>
                                                    <div class="carousel-inner">
                                                    <?php
                                                        if($members[$member['Member']['id']]['productions'] || $members[$member['Member']['id']]['company_inquiries']):
                                                    ?>
                                                    <!-- Wrapper for slides -->
                                                        <?php $classActive = 'active'?>
                                                        <?php foreach($members[$member['Member']['id']]['productions'] as $production):?>
                                                        <div class="item <?= $classActive?>">
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12">
                                                                    <figure>
                                                                        <?= $this->Core->image('Productions/'.$production->image,120,120,array('class' => 'img-responsive img-center') )?>
                                                                    </figure>
                                                                    <center>
                                                                        <?= $this->Html->link($production->name, ['controller' => 'Pages', 'action' => 'detailMember', $member['Member']['id']]) ?>
                                                                    </center>
                                                                </div>
                                                            </div>
                                                        </div>
                                                            <?php $classActive = ''?>
                                                        <?php endforeach?>

                                                        <?php foreach($members[$member['Member']['id']]['company_inquiries'] as $inquiry):?>
                                                            <div class="item <?= $classActive?>">
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12">
                                                                        <figure>
                                                                            <?= $this->Core->image('CompanyInquiries/'.$inquiry->image, 120, 120, array('class' => 'img-responsive img-center'))?>
                                                                        </figure>
                                                                        <center>
                                                                            <?= $this->Html->link($inquiry->title, ['controller' => 'Pages', 'action' => 'detailMember', $member['Member']['id']]) ?>
                                                                        </center>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <?php $classActive = ''?>
                                                        <?php endforeach?>

                                                    <?php else:?>
                                                        <div class="item active">
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12">
                                                                    <figure>
                                                                        <?= $this->Html->image('nophoto.png', ['class' => 'responsive img-center','style' => 'height: 120px; width: 120px;'])?></figure>
                                                                    <center>
                                                                        <div style="height: 21px"></div>
                                                                    </center>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php endif?>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php if(($j %2) == 0):?>
                                    </div>
                                    <div class="row">
                                <?php endif?>
                                <?php $j++?>
                            <?php endforeach?>
                            </div>
                            <div class="row">    </div>
                            <?php if($pageMax > 1):?>
                            <ul class="pagination">
                                <ul class="pagination" id="pagelink">
                                    <?php if($page > 1):?>
                                    <li class="first">
                                        <?= $this->Html->link(__('First'), ['controller' => 'Pages', 'action' => 'listMemberByCountries', $country,1]) ?>
                                    </li>
                                    <li class="previous">
                                        <?= $this->Html->link('«', ['controller' => 'Pages', 'action' => 'listMemberByCountries',$country,$page - 1]) ?>
                                    </li>
                                    <?php endif?>
                                    <?php $i = 1; for($i; $i <= $pageMax; $i++): ?>
                                        <?php
                                            if($i == $page) {
                                                $pageActive = 'active';
                                            } else {
                                                $pageActive = '';
                                            }
                                        ?>
                                        <?php
                                        if(($page + 3) >= $i && $i >= ($page - 3)):
                                            ?>
                                            <li class="<?= $pageActive?>">
                                                <?= $this->Html->link($i, ['controller' => 'Pages', 'action' => 'listMemberByCountries', $country, $i]) ?>
                                            </li>
                                        <?php endif?>

                                    <?php endfor?>
                                    <?php if($page < $pageMax):?>
                                        <li class="last">
                                            <?= $this->Html->link(__('Last'), ['controller' => 'Pages', 'action' => 'listMemberByCountries',$country, $pageMax]) ?>
                                        </li>
                                        <li class="next">
                                            <?= $this->Html->link('»', ['controller' => 'Pages', 'action' => 'listMemberByCountries',$country, $pageMax]) ?>
                                        </li>
                                    <?php endif?>
                                </ul>
                            </ul>
                            <?php endif?>
                        </div>
                    </div>
                </div>
                <!-- End Container cennter -->
            </div>
        </div>
    </div>
</section>
