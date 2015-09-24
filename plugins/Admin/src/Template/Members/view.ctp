
<?php $this->Html->addCrumb(__('Members'));?>
<div class="row">
    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
        <h1 class="page-title txt-color-blueDark">
            <i class="fa fa-cog fa-fw "></i>
            <?= __('Members');?>
            <span>&gt;
                <?= $this->Html->link(__('List of Member'), ['action' => 'index'])?>
            </span>
        </h1>
    </div>
</div>

<div class="row">
    <article class="col-sm-12 col-md-12 col-lg-12 sortable-grid ui-sortable">
        <!-- Widget ID (each widget will need unique ID)-->
        <div class="jarviswidget jarviswidget-sortable jarviswidget-color-darken" id="wid-id-4" data-widget-editbutton="false" data-widget-custombutton="false" role="widget" style="">
            <header role="heading">
                <span class="widget-icon">
                    <i class="fa fa-user"></i>
                </span>
                <h2><?= h($member->id) ?></h2>
            </header>
            <!-- widget div-->
            <div role="content">
                <!-- widget edit box -->
                <div class="jarviswidget-editbox">
                    <!-- This area used as dropdown edit box -->
                </div>
                <!-- end widget edit box -->
                <!-- widget content -->
                <div class="widget-body">
                    <fieldset>
                        <table id="user" class="table table-bordered table-striped" style="clear: both">
                            <tbody>
                            <tr>
                                <td style="width:35%;"><?= __('Id') ?></td>
                                <td style="width:65%"><?= h($member->id) ?></td>
                            </tr>
                                <td style="width:35%;"><?= __('Email') ?></td>
                                <td style="width:65%"><?= h($jcMember['Member']['email']) ?></td>
                            <tr>

                                <?php
                                    $company = $jcMember['Member']['company'];
                                    $comTradingName = $member->com_trading_name_vie;
                                    $comShortName = $member->com_short_name_vie;
                                    $address = $member->address_vie;
                                    $department = $member->com_pic_department_vie;
                                    $note = $member->com_note_vie;
                                    $inquiry = $member->com_inquiry_vie;
                                    switch ($fieldLanguage) {
                                        case 'eng':
                                            if($member->com_name_eng) $company = $member->com_name_eng;
                                            if($member->com_trading_name_eng) $comTradingName = $member->com_trading_name_eng;
                                            if($member->com_short_name_eng) $comShortName = $member->com_short_name_eng;
                                            if($member->address_eng) $address = $member->address_eng;
                                            if($member->com_pic_department_eng) $department = $member->com_pic_department_eng;
                                            if($member->com_note_eng) $note = $member->com_note_eng;
                                            if($member->com_inquiry_eng) $inquiry = $member->com_inquiry_eng;
                                            break;
                                        case 'jpn':
                                            if($member->com_name_jpn) $company = $member->com_name_jpn;
                                            if($member->com_trading_name_jpn) $comTradingName = $member->com_trading_name_jpn;
                                            if($member->com_short_name_jpn) $comShortName = $member->com_short_name_jpn;
                                            if($member->address_jpn) $address = $member->address_jpn;
                                            if($member->com_pic_department_jpn) $department = $member->com_pic_department_jpn;
                                            if($member->com_note_jpn) $note = $member->com_note_jpn;
                                            if($member->com_inquiry_jpn) $inquiry = $member->com_inquiry_jpn;
                                            break;
                                    }
                                ?>



                            </tr>
                                <td style="width:35%;"><?= __('Company Name') ?></td>
                                <td style="width:65%"><?= $company?></td>
                            <tr>

                            </tr>
                                <td style="width:35%;"><?= __('Industry') ?></td>
                                <td style="width:65%"><?= h($industry) ?></td>
                            <tr>

                            </tr>
                                <td style="width:35%;"><?= __('Company Country') ?></td>
                                <td style="width:65%"><?= Cake\Core\Configure::read('Member.country.'.$member->com_country) ?></td>
                            <tr>

                            </tr>
                            <tr>
                                <td style="width:35%;"><?= __('Company Trading Name') ?></td>
                                <td style="width:65%"><?= $comTradingName ?></td>
                            </tr>

                            <tr>
                                <td style="width:35%;"><?= __('Company Short Name')?></td>
                                <td style="width:65%"><?= $comShortName ?></td>
                            </tr>

                            </tr>
                            <td style="width:35%;"><?= __('City') ?></td>
                            <td style="width:65%"><?= $jcMember['City']['name_'.$fieldLanguage] ?></td>
                            <tr>

                            </tr>
                            <td style="width:35%;"><?= __('Prefecture') ?></td>
                            <td style="width:65%"><?= $jcMember['Prefecture']['name_'.$fieldLanguage] ?></td>
                            <tr>

                            </tr>
                            <td style="width:35%;"><?= __('Address') ?></td>
                            <td style="width:65%"><?= $address ?></td>
                            <tr>

                            </tr>
                                <td style="width:35%;"><?= __('Phone') ?></td>
                                <td style="width:65%"><?= h($jcMember['Member']['tel']) ?></td>
                            <tr>

                            </tr>
                                <td style="width:35%;"><?= __('Phone').' 2' ?></td>
                                <td style="width:65%"><?= h($member->mobile) ?></td>
                            <tr>

                            </tr>

                            <tr>
                                <td style="width:35%;"><?= __('Fax') ?></td>
                                <td style="width:65%"><?= h($jcMember['Member']['fax']) ?></td>
                            </tr>
                                                    <tr>
                                <td style="width:35%;"><?= __('Website') ?></td>
                                <td style="width:65%"><?= h($jcMember['Member']['site_url']) ?></td>
                            </tr>
                            <tr>
                                <td style="width:35%;"><?= __('Language') ?></td>
                                <td style="width:65%">
                                    <?php
                                    $languages = [];
                                    foreach($member->com_lang_chosen as $lang) {
                                        $languages[] = Cake\Core\Configure::read('Member.language.'.$lang);
                                    }
                                    echo implode(' - ', $languages);
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:35%;"><?= __('Company Established') ?></td>
                                <td style="width:65%"><?= $this->Time->format($member->com_established, 'Y-MM-dd') ?></td>
                            </tr>
                                                    <tr>
                                <td style="width:35%;"><?= __('Company Tax Code') ?></td>
                                <td style="width:65%"><?= h($member->com_tax_code) ?></td>
                            </tr>
                                                    <tr>
                                <td style="width:35%;"><?= __('Company capital') ?></td>
                                <td style="width:65%"><?= h($member->com_capital) ?></td>
                            </tr>
                                                    <tr>
                                <td style="width:35%;"><?= __('Total Staff Member') ?></td>
                                <td style="width:65%"><?= h($member->com_staff) ?></td>
                            </tr>
                            <tr>
                                <td style="width:35%;"><?= __('Logo') ?></td>
                                <td style="width:65%"><?= $this->Core->image('Members/'.$member->image,80,80) ?></td>
                            </tr>

                            </tr>
                            <td style="width:35%;"><?= __('Manager') ?></td>
                            <td style="width:65%"><?= h($jcMember['Member']['first_name'].' '.$jcMember['Member']['last_name']) ?></td>
                            <tr>

                            </tr>
                                <td style="width:35%;"><?= __('Gender') ?></td>
                                <td style="width:65%"><?=  \Cake\Core\Configure::read('Member.gender.'.$member->gender)?></td>
                            <tr>

                            <tr>
                                <td style="width:35%;"><?= __('Department') ?></td>
                                <td style="width:65%"><?= $department ?></td>
                            </tr>

                            <tr>
                                <td style="width:35%;"><?= __('Division') ?></td>
                                <td style="width:65%"><?= $jcMember['Division']['name_'.$fieldLanguage] ?></td>
                            </tr>

                            <tr>
                                <td style="width:35%;"><?= __('Rated') ?></td>
                                <td style="width:65%"><?= h($member->com_rate) ?></td>
                            </tr>

                            <tr>
                                <td style="width:35%;"><?= __('Order') ?></td>
                                <td style="width:65%"><?= h($member->com_order) ?></td>
                            </tr>

                            <tr>
                                <td style="width:35%;"><?= __('Status') ?></td>
                                <td style="width:65%"><?= Cake\Core\Configure::read('Member.status.'.$member->com_status) ?></td>
                            </tr>

                            <tr>
                                <td style="width:35%;"><?= __('Membership Type') ?></td>
                                <td style="width:65%"><?= Cake\Core\Configure::read('Member.type.'.$member->com_level) ?></td>
                            </tr>

                            <tr>
                                <td style="width:35%;"><?= __('Note') ?></td>
                                <td style="width:65%"><?= $note ?></td>
                            </tr>

                            <tr>
                                <td style="width:35%;"><?= __('Company Type') ?></td>
                                <td style="width:65%"><?= $member->type_company['type_name_'.$fieldLanguage] ?></td>
                            </tr>

                            <tr>
                                <td style="width:35%;"><?= __('Cooperation') ?></td>
                                <td style="width:65%"><?= $jcMember['Business']?></td>
                            </tr>

                            <tr>
                                <td style="width:35%;"><?= __('Needs') ?></td>
                                <td style="width:65%"><?= $jcMember['WantToGet']?></td>
                            </tr>

                            <tr>
                                <td style="width:35%;"><?= __('Inquiry') ?></td>
                                <td style="width:65%"><?= $inquiry?></td>
                            </tr>
                            </tbody>
                        </table>
                    </fieldset>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-12">
                                <?= $this->Html->link(__('Cancel'), ['action' => 'index'], ['class' => 'btn btn-default']) ?>
                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $member->id], ['class' => 'btn btn-primary']) ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end widget content -->
            </div>
            <!-- end widget div -->
        </div>
        <!-- end widget -->
    </article>
</div>
