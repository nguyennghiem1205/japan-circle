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
                    ﻿<div class="w-section inverse">
                        <h3 class="section-title"><?= __('Member Information') ?></h3>
                        <div class="widget">
                            <div class="tabs">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#one" data-toggle="tab"><i class="fa fa-check-square-o"></i> <?= __('Company Information') ?></a></li>
                                    <li class=""><a href="#two" data-toggle="tab"> <i class="fa fa-star"></i> <?= __('Product') ?></a></li>
                                    <li class=""><a href="#three" data-toggle="tab"> <i class="fa fa-compress"></i> <?= __('Inquiry') ?></a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="one">
                                        <table border="0" width="100%" cellpadding="0" cellspacing="1" class="table">
                                            <tbody><tr>
                                                <td width="150" class="row2"><?= __('Logo Company') ?></td>
                                                <td class="row1"><?= $this->Core->image('Members/'.$member->image,100, 100, array('base' => true,'style' => 'margin:10px; max-height:100px; max-width:300px'))?></td>
                                            </tr>
                                            <tr>
                                                <td width="150" class="row2"><?= __('Company Code') ?></td>
                                                <td class="row1"><?= $member->id?></td>
                                            </tr>
                                            <?php
                                            $company = $memberApi['Member']['company'];
                                            $comTradingName = $member->com_trading_name_vie;
                                            $comShortName = $member->com_short_name_vie;
                                            $address = $member->address_vie;
                                            $department = $member->com_pic_department_vie;
                                            $business = $member->com_business_vie;
                                            switch ($fieldLanguage) {
                                                case 'eng':
                                                    if($member->com_trading_name_eng) $comTradingName = $member->com_trading_name_eng;
                                                    if($member->com_short_name_eng) $comShortName = $member->com_short_name_eng;
                                                    if($member->address_eng) $address = $member->address_eng;
                                                    if($member->com_pic_department_eng) $department = $member->com_pic_department_eng;
                                                    if($member->com_business_eng) $business = $member->com_business_eng;
                                                    break;
                                                case 'jpn':
                                                    if($member->com_trading_name_jpn) $comTradingName = $member->com_trading_name_jpn;
                                                    if($member->com_short_name_jpn) $comShortName = $member->com_short_name_jpn;
                                                    if($member->address_jpn) $address = $member->address_jpn;
                                                    if($member->com_pic_department_jpn) $department = $member->com_pic_department_jpn;
                                                    if($member->com_business_jpn) $business = $member->com_business_jpn;

                                                    break;
                                            }
                                            ?>

                                            <tr>
                                                <td width="150" class="row2"><?= __('Company Name') ?></td>
                                                <td class="row1"><?= $company?></td>
                                            </tr>
                                            <tr>
                                                <td width="150" class="row2"><?= __('Company Name English') ?></td>
                                                <td class="row1"><?= $member->com_name_eng ?></td>
                                            </tr>
                                            <tr>
                                                <td width="150" class="row2"><?= __('Company Name Japanese') ?></td>
                                                <td class="row1"><?= $member->com_name_jpn?></td>
                                            </tr>
                                            <tr>
                                                <td width="150" class="row2"><?= __('Company Trading Name') ?></td>
                                                <td class="row1"><?= $comTradingName?></td>
                                            </tr>
                                            <tr>
                                                <td width="150" class="row2"><?= __('Company Short Name') ?></td>
                                                <td class="row1"><?= $comShortName?></td>
                                            </tr>
                                            <tr>
                                                <td width="150" class="row2"><?= __('City') ?></td>
                                                <td class="row1"><?= $memberApi['City']['name_'.$fieldLanguage]?></td>
                                            </tr>
                                            <tr>
                                                <td width="150" class="row2"><?= __('Address') ?></td>
                                                <td class="row1"><?= $address?></td>
                                            </tr>
                                            <tr>
                                                <td width="150" class="row2"><?= __('Phone') ?></td>
                                                <td class="row1"><?= $memberApi['Member']['tel']?></td>
                                            </tr>
                                            <tr>
                                                <td width="150" class="row2"><?= __('Fax') ?></td>
                                                <td class="row1"><?= $memberApi['Member']['fax']?></td>
                                            </tr>
                                            <tr>
                                                <td width="150" class="row2"><?= __('Email ') ?></td>
                                                <td class="row1"><?= $memberApi['Member']['email']?></td>
                                            </tr>
                                            <tr>
                                                <td width="150" class="row2"><?= __('Website') ?></td>
                                                <td class="row1"><?= $memberApi['Member']['site_url']?></td>
                                            </tr>
                                            <tr>
                                                <td width="150" class="row2"><?= __('Contact') ?></td>
                                                <?php
                                                    $department_pic = 'com_pic_department_'.$fieldLanguage;
                                                    $com_department = '';
                                                    if($member->$department_pic) {
                                                        $com_department = '('.$member->$department_pic.')';
                                                    }
                                                ?>
                                                <td class="row1"><?= $memberApi['Member']['first_name'].' '.$memberApi['Member']['last_name']?> -<?= $memberApi['Division']['name_'.$fieldLanguage].' '.$com_department?></td>
                                            </tr>

                                            <tr>
                                                <td width="150" class="row2"><p><?= __('Established') ?></p></td>
                                                <td class="row1"><?= $member->com_established?></td>
                                            </tr>
                                            <tr>
                                                <td width="150" class="row2"><?= __('Staff') ?></td>
                                                <td class="row1"><?= $member->com_staff?></td>
                                            </tr>
                                            <tr>
                                                <td width="150" class="row2"><?= __('Industry') ?></td>
                                                <td class="row1">
                                                    <?php
                                                        if($memberApi['MemberIndustry']) {
                                                            foreach ($memberApi['MemberIndustry'] as $industry) {
                                                                if(isset($listIndustries[$industry['industry_code']])) echo $listIndustries[$industry['industry_code']];
                                                            }
                                                        }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="150" class="row2"><?= __('Content Business') ?></td>
                                                <td class="row1"><?= strip_tags($business)?></td>
                                            </tr>
                                            </tbody></table>
                                    </div>
                                    <div class="tab-pane" id="two">
                                        <ul class="list-listings blog-list">
                                            <?php if(count($member->productions) < 1) echo __('Thông tin đang cập nhật')?>
                                            <?php foreach($member->productions as $production): ?>
                                            <li class="">
                                                <div class="listing-image">
                                                    <?= $this->Core->image('Productions/'.$production->image, 200, 200, array('base' => true,'style' => 'margin:10px; max-height:100px; max-width:300px','class' => 'img-responsive'))?>
                                                </div>
                                                <div class="listing-body">
                                                    <h3><a href="#"><?= $production->name?></a></h3>
                                                    <span class="list-item-info"><?= $this->Time->format($production->created, 'dd/MM/Y') ?> </span>
                                                    <p><?= $production->short_description ?> </p>
                                                </div>
                                            </li>
                                            <?php endforeach?>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="three">
                                        <ul class="list-listings blog-list">
                                            <ul class="list-listings blog-list">
                                                <?php if(count($member->company_inquiries) < 1) echo __('Thông tin đang cập nhật')?>
                                                <?php foreach($member->company_inquiries as $inquiry): ?>
                                                <li class="">
                                                    <div class="listing-image">
                                                        <?= $this->Core->image('CompanyInquiries/'.$inquiry->image, 100, 100, array('base' => true,'style' => 'margin:10px; max-height:100px; max-width:300px','class' => 'img-responsive'))?>
                                                    </div>
                                                    <div class="listing-body">
                                                        <h3><a href="#"><?= $inquiry->title?></a></h3>
                                                        <span class="list-item-info"><?= $this->Time->format($inquiry->created, 'dd/MM/Y') ?></span>
                                                        <p> <?= $inquiry->description ?></p>
                                                    </div>
                                                </li>
                                                <?php endforeach?>
                                            </ul>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Container cennter -->
            </div>
        </div>
    </div>
</section>
