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
                            <h3 class="section-title"><?= __('Thành viên Việt Nam thuộc ngành {0}', $nameIndustry) ?></h3>

                            <div class="row ">
                                <?php
                                $temp = round((count($listIndustries))/2);
                                $i = 1;
                                ?>
                                <div class="col-md-6">
                                    <ul class="list-check">
                                <?php foreach($listIndustries as $industry_code => $industry):?>

                                            <li>
                                                <i class="fa fa-check"></i>
                                                <?php
                                                $class = null;
                                                if ($codeGetMember == $industry_code) {
                                                    $class = 'btn btn-xs btn-two';
                                                }
                                                ?>
                                                <?= $this->Html->link($industry, $this->Url->build(['action' => 'listMember', 'code' => $code], true).'?sub='.$industry_code,['title' => $industry, 'class' => $class]) ?>
                                            </li>
                                        <?php if($i == $temp):?>
                                    </ul>
                                </div>
                                    <div class="col-md-6">
                                        <ul class="list-check">
                                            <?php endif?>
                                        <?php $i++?>
                                <?php endforeach?>
                                    </ul>
                                </div>
                            </div>

                            <?php

                            unset($listIndustries);
                            if ($pageMax < 1) {
                                echo __('Hiện tại chúng tôi không tìm thấy thông tin nào!');
                            }
                                $j = 1;
                            ?>
                            <div class="row">
                            <?php foreach($membersClients as $memberClient):?>
                                    <div class="col-md-6">
                                        <div class="row com">
                                            <div class="col-md-12 comheader">
                                                <?php

                                                    $companyName = $memberClient['com_name_'.$fieldLanguage];
                                                    if(!$companyName) {
                                                        $companyName = $members[$memberClient->id]['Member']['company'];
                                                    }

                                                    if(!$companyName) {
                                                        $companyName = $memberClient['com_name_eng'];
                                                    }

                                                ?>
                                                <?= $this->Html->link($companyName, ['controller' => 'Pages', 'action' => 'detailMember', $memberClient->id],['class' => 'comname pull-left','title' => $members[$memberClient->id]['Member']['company']]) ?>

                                                <ul class="pull-right comflag">
                                                    <?php
                                                    $lang = $memberClient->com_lang_chosen;
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
                                                    ?>
                                                    </ul>
                                            </div>
                                            <div class="col-md-12 commeta">
                                                <div>
                                                    <ul class="cominfo">
                                                        <?php
                                                        $arrMember = $memberClient->toArray();
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

                                                        $business = 'com_business_'.$fieldLanguage;
                                                        $add = 'address_'.$fieldLanguage;
                                                        $address = $memberClient->address_vie;
                                                        if($memberClient->$add) $address = $memberClient->$add;
                                                        $com_business = $memberClient->com_business_vie;
                                                        if($memberClient->$business) $com_business = $memberClient->$business;
                                                        ?>
                                                        <li><strong><?= $this->Text->truncate(strip_tags($com_business), 150)?> ...</strong></li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <?php
                                                $contactPerson = $memberClient['manager_'.$fieldLanguage];
                                                if(!$contactPerson) {
                                                    $contactPerson = $members[$memberClient->id]['Member']['first_name'].' '.$members[$memberClient->id]['Member']['last_name'];
                                                }

                                                if(!$contactPerson) {
                                                    $contactPerson = $memberClient['manager_eng'];
                                                }
                                            ?>
                                            <div class="col-md-7 col-sm-7">
                                                <ul class="comcontact">
                                                    <li title="<?= $address?>"><i class="fa fa-map-marker"></i> <?= $address ?></li>
                                                    <li title="<?= $members[$memberClient->id]['Member']['tel']?>"><i class="fa fa-phone"></i>  <?= $members[$memberClient->id]['Member']['tel']?></li>
                                                    <li title="<?= $contactPerson.' ('.$members[$memberClient->id]['Division']['name_vie'].')'?>"><i class="fa  fa-male"></i> <?= $contactPerson.' ('.$members[$memberClient->id]['Division']['name_vie'].')'?></li>
                                                </ul>
                                            </div>

                                            <div class="col-md-5 col-sm-5">
                                                <?= $this->Core->image('Members/'.$memberClient->image,100,100,array('base' => true, 'class' => 'img-responsive pull-right'))?>
                                            </div>

                                            <div class="col-md-12">
                                                <div id="carouselWork<?php echo $memberClient->id ?>" class="carousel carousel-3 slide animate-hover-slide">
                                                    <div class="carousel-nav"> <a data-slide="prev" class="left color-two" href="#carouselWork<?php echo $memberClient->id ?>"><i class="fa fa-angle-left"></i></a> <a data-slide="next" class="right color-two" href="#carouselWork<?php echo $memberClient->id ?>"><i class="fa fa-angle-right"></i></a> </div>
                                                    <div class="carousel-inner">
                                                    <?php
                                                        if($memberClient->productions || $memberClient->company_inquiries):
                                                    ?>
                                                    <!-- Wrapper for slides -->
                                                        <?php $classActive = 'active'?>
                                                        <?php foreach($memberClient->productions as $production):?>
                                                        <div class="item <?= $classActive?>">
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12">
                                                                    <figure>
                                                                        <?= $this->Core->image('Productions/'.$production->image,120,120,array('class' => 'img-responsive img-center') )?>
                                                                    </figure>
                                                                    <center>
                                                                        <?= $this->Html->link($production->name, ['controller' => 'Pages', 'action' => 'detailMember', $memberClient['id']]) ?>
                                                                    </center>
                                                                </div>
                                                            </div>
                                                        </div>
                                                            <?php $classActive = ''?>
                                                        <?php endforeach?>

                                                        <?php foreach($memberClient->company_inquiries as $inquiry):?>
                                                            <div class="item <?= $classActive?>">
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12">
                                                                        <figure>
                                                                            <?= $this->Core->image('CompanyInquiries/'.$inquiry->image, 120, 120, array('class' => 'img-responsive img-center'))?>
                                                                        </figure>
                                                                        <center>
                                                                            <?= $this->Html->link($inquiry->title, ['controller' => 'Pages', 'action' => 'detailMember', $memberClient['id']]) ?>
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
                                                                        <?= $this->Html->image('nophoto.png', ['class' => 'responsive img-center','style' => 'height:120px'])?>
                                                                    </figure>
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
                            <?php if ($pageMax > 1): ?>
                            <ul class="pagination">
                                <ul class="pagination" id="pagelink">
                                    <?php if($page > 1):?>
                                    <li class="first">
                                        <?= $this->Html->link(__('First'), ['controller' => 'Pages', 'action' => 'listMember', '?' => ['sub' => $subCode], $code,1]) ?>
                                    </li>
                                    <li class="previous">
                                        <?= $this->Html->link('«', ['controller' => 'Pages', 'action' => 'listMember', '?' => ['sub' => $subCode],$code,$page - 1]) ?>
                                    </li>
                                    <?php endif?>
                                    <?php if($pageMax > 1):?>
                                    <?php $i = 1; for($i; $i <= $pageMax; $i++): ?>
                                        <?php
                                            if($i == $page) {
                                                $pageActive = 'active';
                                            } else {
                                                $pageActive = '';
                                            }
                                        ?>
                                        <?php if(($page + 3) >= $i && $i >= ($page - 3)): ?>
                                            <li class="<?= $pageActive?>">
                                                <?= $this->Html->link($i, ['controller' => 'Pages', 'action' => 'listMember', '?' => ['sub' => $subCode], $code,$i]) ?>
                                            </li>
                                        <?php endif?>
                                    <?php endfor?>
                                    <?php endif?>
                                    <?php if($page < $pageMax):?>
                                        <li class="last">
                                            <?= $this->Html->link(__('Last'), ['controller' => 'Pages', 'action' => 'listMember', '?' => ['sub' => $subCode], $code, $pageMax]) ?>
                                        </li>
                                        <li class="next">
                                            <?= $this->Html->link('»', ['controller' => 'Pages', 'action' => 'listMember', '?' => ['sub' => $subCode], $code, $pageMax]) ?>
                                        </li>
                                    <?php endif?>
                                </ul>
                            </ul>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <!-- End Container cennter -->
            </div>
        </div>
    </div>
</section>
