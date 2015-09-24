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
                        <h3 class="section-title"><?= __('Supporter Information') ?></h3>
                        <div class="widget">
                            <div class="tabs">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#one" data-toggle="tab"><i class="fa fa-check-square-o"></i> <?= __('Supporter Information') ?></a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="one">
                                        <table border="0" width="100%" cellpadding="0" cellspacing="1" class="table">
                                            <tbody><tr>
                                                <td width="150" class="row2"><?= __('Avatar') ?></td>
                                                <td class="row1"><?= $this->Core->image('Supporters/'.$supporter->image,100, 100, array('style' => 'margin:10px; max-height:100px; max-width:300px'))?></td>
                                            </tr>
                                            <tr>
                                                <td width="150" class="row2"><?= __('Supporter Name') ?></td>
                                                <td class="row1"><?= $supporter->first_name.' '.$supporter->last_name?></td>
                                            </tr>

                                            <tr>
                                                <td width="150" class="row2"><?= __('Date of birth') ?></td>
                                                <td class="row1"><?= $this->Time->format($supporter->birthdate, 'dd/MM/Y')?></td>
                                            </tr>
                                            <tr>
                                                <td width="150" class="row2"><?= __('Identification No./Passport No.') ?></td>
                                                <td class="row1"><?= $supporter->identity_card ?></td>
                                            </tr>
                                            <tr>
                                                <td width="150" class="row2"><?= __('Email') ?></td>
                                                <td class="row1"><?= $supporter->email?></td>
                                            </tr>
                                            <tr>
                                                <td width="150" class="row2"><?= __('Phone') ?></td>
                                                <td class="row1"><?= $supporter->phone?></td>
                                            </tr>
                                            <tr>
                                                <td width="150" class="row2"><?= __('Category Support') ?></td>
                                                <?php
                                                $categorySupporter = 'name_'.$fieldLanguage;
                                                ?>
                                                <td class="row1"><?= $supporter->category_supporter->$categorySupporter?></td>
                                            </tr>
                                            <tr>
                                                <td width="150" class="row2"><?= __('City') ?></td>
                                                <td class="row1"><?= $supporter->city?></td>
                                            </tr>
                                            <tr>
                                                <td width="150" class="row2"><?= __('URL Facebook') ?></td>
                                                <td class="row1"><?= $supporter->url_facebook?></td>
                                            </tr>
                                            <tr>
                                                <td width="150" class="row2"><?= __('Website/Blog') ?></td>
                                                <td class="row1"><?= h($supporter->site_url)?></td>
                                            </tr>
                                            <tr>
                                                <td width="150" class="row2"><?= __('Company Name') ?></td>
                                                <td class="row1"><?=  h($supporter->company_name)?></td>
                                            </tr>
                                            <tr>
                                                <td width="150" class="row2"><?= __('Company Address') ?></td>
                                                <td class="row1"><?= h($supporter->company_address)?></td>
                                            </tr>
                                            <tr>
                                                <td width="150" class="row2"><?= __('Company website') ?></td>
                                                <td class="row1"><?= h($supporter->company_site_url)?></td>
                                            </tr>
                                            <tr>
                                                <td width="150" class="row2"><?= __('Industry') ?></td>
                                                <?php
                                                    $industry = '';
                                                    if(isset($industries[$supporter->industry_code])) $industry = $industries[$supporter->industry_code];
                                                ?>
                                                <td class="row1"><?= $industry?></td>
                                            </tr>

                                            <tr>
                                                <td width="150" class="row2"><p><?= __('Number of employees') ?></p></td>
                                                <td class="row1"><?= $supporter->com_staff?></td>
                                            </tr>
                                            <tr>
                                                <td width="150" class="row2"><?= __('Language that you can communicate') ?></td>
                                                <td class="row1">
                                                    <?php
                                                    $languages = [];
                                                    foreach($supporter->com_lang_chosen as $lang) {
                                                        $languages[] = Cake\Core\Configure::read('Member.language.'.$lang);
                                                    }
                                                    echo implode(' - ', $languages);
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="150" class="row2"><?= __('Record of experience that you have supported successfully in ASEAN network') ?></td>
                                                <td class="row1"><?= $supporter->experience?></td>
                                            </tr>

                                            <tr>
                                                <td width="150" class="row2"><?= __('Record of experience file attach') ?></td>
                                                <td class="row1"><a href="<?= $this->Url->build('/upload/Supporters/'.$supporter->experience_file) ?>" target="_blank"><?= $supporter->experience_file ?></a></td>
                                            </tr>


                                            <tr>
                                                <td width="150" class="row2"><?= __('Other organizations/associations') ?></td>
                                                <td class="row1"><?= $supporter->member_organize?></td>
                                            </tr>
                                            <tr>
                                                <td width="150" class="row2"><?= __('Support Info') ?></td>
                                                <td class="row1"><?= $supporter->support_info?></td>
                                            </tr>

                                            </tbody></table>
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
