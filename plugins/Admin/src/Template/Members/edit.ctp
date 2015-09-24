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

<div class="members row">
    <article class="col-sm-12 col-md-12 col-lg-12 sortable-grid ui-sortable">

        <!-- Widget ID (each widget will need unique ID)-->
        <div class="jarviswidget jarviswidget-sortable jarviswidget-color-darken" id="wid-id-4" data-widget-editbutton="false" data-widget-custombutton="false" role="widget" style="">

            <header role="heading">
                <span class="widget-icon">
                    <i class="fa fa-edit"></i>
                </span>
                <h2><?= __('Edit Member') ?></h2>
            </header>

            <!-- widget div-->
            <div role="content">
                <!-- widget content -->
                <div class="widget-body no-padding">
                    <?= $this->Form->create($member, ['id' => 'smart-form-register', 'class' => 'smart-form', 'type' => 'file']) ?>
                    <header><?= __('Edit Member') ?></header>
                    <div class="company">
                    <?= $this->Flash->render()?>
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#com_vie" aria-controls="com_vie" role="tab" data-toggle="tab"><?= __('Vietnamese') ?></a></li>
                        <li role="presentation"><a href="#com_eng" aria-controls="com_eng" role="tab" data-toggle="tab"><?= __('English') ?></a></li>
                        <li role="presentation"><a href="#com_jpn" aria-controls="com_jpn" role="tab" data-toggle="tab"><?= __('Japanese') ?></a></li>
                    </ul>

                    <fieldset id="com_vie" class="tab-pane active">
                    <div class="row select-ajax">
                        <section class="col col-md-6">
                            <span><?= __('Category Industry')?></span> <span class="required">(*)</span>
                            <?= $this->Form->input('category_industry', ['data-value'=> $member->industry_code,'data-url' => '/members/listIndustries','data-child'=>'industry-child','class' => 'select-parent','empty' => '---'.__('Select Category Industry').'---','options' => $industry_parents,'placeholder' => __('Category Industry')]) ?>
                        </section>
                        <section class="col col-md-6">
                            <span><?= __('Industry')?></span> <span class="required">(*)</span>
                            <?= $this->Form->input('industry_code', ['value' => $member->industry_code,'type' => 'select','class' => 'industry-child','empty' => '---'.__('Select Industry').'---','placeholder' => __('Industry')]) ?>
                        </section>
                    </div>
                    <div class="row">
                        <section class="col col-md-6">
                            <span><?= __('Business Type') ?></span> <span class="required">(*)</span>
                            <?= $this->Form->input('type_business_id', ['empty' => '---'.__('Select Type Business').'---','options' => $type_business,'placeholder' => __('Company Type')]) ?>
                        </section>
                        <section class="col col-md-6">
                            <span><?= __('Logo') ?></span>
                            <?= $this->Form->input('image', ['type' => 'file','required' => false,'id' => 'com-logo','placeholder' => __('Logo')]) ?>
                        </section>
                    </div>

                    <div class="row">
                        <section class="col col-md-6">
                            <span><?= __('Company Name') ?></span> <span class="required">(*)</span>
                            <?= $this->Form->input('company', ['placeholder' => __('Company Name')]) ?>
                        </section>
                        <section class="col col-md-6">
                            <span><?= __('Company Trading Name').' (VIE)' ?></span>
                            <?= $this->Form->input('com_trading_name_vie', ['placeholder' => __('Company Trading Name')]) ?>
                        </section>
                    </div>
                    <div class="row">
                        <section class="col col-md-6">
                            <span><?= __('Company Short Name').' (VIE)' ?></span>
                            <?= $this->Form->input('com_short_name_vie', ['placeholder' => __('Company Short Name')]) ?>
                        </section>
                        <section class="col col-md-6">
                            <span><?= __('Address').' (VIE)' ?></span>
                            <?= $this->Form->input('address_vie', ['required' => false,'placeholder' => __('Address').' (VIE)']) ?>
                        </section>
                    </div>
                    <div class="row">
                        <section class="col col-md-6">
                            <span><?= __('City') ?></span> <span class="required">(*)</span>
                            <?= $this->Form->input('city_code', ['data-value'=> $member->prefecture_code,'data-url' => '/members/getListPrefecture','data-child'=>'ajax-prefecture','class' => 'select-parent','empty' => '---'.__('Select City').'---','options' => $list_cities,'placeholder' => __('City')]) ?>
                        </section>
                        <section class="col col-md-6">
                            <span><?= __('Prefecture') ?></span>
                            <?= $this->Form->input('prefecture', ['required' => false,'empty' => '---'.__('Select District').'---','type' => 'select','class' => 'ajax-prefecture','placeholder' => __('District')]) ?>
                        </section>
                    </div>
                    <div class="row">
                        <section class="col col-md-6">
                            <span><?= __('Phone') ?></span> <span class="required">(*)</span>
                            <?= $this->Form->input('tel', ['placeholder' => __('Phone')]) ?>
                        </section>
                        <section class="col col-md-6">
                            <span><?= __('Fax') ?></span>
                            <?= $this->Form->input('fax', ['required' => false,'placeholder' => __('Fax')]) ?>
                        </section>
                    </div>
                    <div class="row">

                        <section class="col col-md-6">
                            <span><?= __('Email') ?></span>  <span class="required">(*)</span>
                            <?= $this->Form->input('email', ['placeholder' => __('Email')]) ?>
                        </section>
                        <section class="col col-md-6">
                            <span><?= __('Website') ?></span>
                            <?= $this->Form->input('site_url', ['required' => false,'placeholder' => __('Website')]) ?>
                        </section>
                    </div>
                    <div class="row">

                        <section class="col col-md-6">
                            <span><?= __('Contact Person') ?></span> <span class="required">(*)</span>
                            <div class="row">
                                <section class="col col-md-6">
                                    <?= $this->Form->input('first_name', ['class' => 'col col-md-6','placeholder' => __('First Name')]) ?>
                                </section>
                                <section class="col col-md-6">
                                    <?= $this->Form->input('last_name', ['class' => 'col col-md-6','placeholder' => __('Last Name')]) ?>
                                </section>
                            </div>
                        </section>
                        <section class="col col-md-3">
                            <span><?= __('Gender') ?></span> <span class="required">(*)</span>
                            <?= $this->Form->input('gender', ['empty' => '---'.__('Select Gender').'---','options' => \Cake\Core\Configure::read('Member.gender'),'placeholder' => __('address_en')]) ?>
                        </section>
                        <section class="col col-md-3">
                            <span><?= __('Contact Phone') ?></span> <span class="required">(*)</span>
                            <?= $this->Form->input('mobile', ['required' => false,'placeholder' => __('Phone 2')]) ?>
                        </section>

                    </div>
                    <div class="row">
                        <section class="col col-md-6">
                            <span><?= __('Contact Email') ?></span> <span class="required">(*)</span>
                            <?= $this->Form->input('contact_email', ['required' => false,'placeholder' => __('Contact Email')]) ?>
                        </section>

                        <section class="col col-md-6">
                            <span><?= __('Department') ?></span>
                            <?= $this->Form->input('com_pic_department_vie', ['required' => false,'placeholder' => __('Department')]) ?>
                        </section>

                    </div>
                    <div class="row">
                        <section class="col col-md-6">
                            <span><?= __('Division') ?></span>  <span class="required">(*)</span>
                            <?= $this->Form->input('division', ['options' => $divisions,'empty' => '---'.__('Select Division').'---','required' => false,'placeholder' => __('Division')]) ?>
                        </section>

                        <section class="col col-md-6">
                            <span><?= __('Company Established') ?></span>
                            <?= $this->Form->input('com_established', ['required' => false,'type' => 'text','class' => 'hw-date','placeholder' => __('Company Established')]) ?>
                        </section>
                    </div>
                    <div class="row">
                        <section class="col col-md-6">
                            <span><?= __('Company Tax Code') ?></span>
                            <?= $this->Form->input('com_tax_code', ['required' => false,'placeholder' => __('Company Tax Code')]) ?>
                        </section>
                        <section class="col col-md-6">
                            <span><?= __('Company capital') ?></span>
                            <?= $this->Form->input('com_capital', ['required' => false,'placeholder' => __('Company capital')]) ?>
                        </section>
                    </div>
                    <div class="row">
                        <section class="col col-md-6">
                            <span><?= __('Total Staff Member') ?></span>
                            <?= $this->Form->input('com_staff', ['required' => false,'placeholder' => __('Total Staff Member')]) ?>
                        </section>
                        <section class="col col-md-6">
                            <span><?= __('Rated') ?></span>
                            <?= $this->Form->input('com_rate', ['required' => false,'placeholder' => __('Rated')]) ?>
                        </section>
                    </div>
                    <div class="row">
                        <section class="col col-md-6">
                            <span><?= __('Order') ?></span>
                            <?= $this->Form->input('com_order', ['required' => false,'placeholder' => __('Order')]) ?>
                        </section>
                        <section class="col col-md-6">
                            <span><?= __('Status') ?></span>
                            <?= $this->Form->input('com_status', ['empty' => '---'.__('Select Status').'---','options' => \Cake\Core\Configure::read('Member.status'),'required' => false,'placeholder' => __('Status')]) ?>
                        </section>
                    </div>

                    <div class="row">
                        <section class="col col-md-6">
                            <span><?= __('Total View') ?></span>
                            <?= $this->Form->input('com_view', ['required' => false,'placeholder' => __('Total View')]) ?>
                        </section>
                        <section class="col col-md-6">
                            <span><?= __('Membership Type') ?></span>
                            <?= $this->Form->input('com_level', ['required' => false,'empty' => '---'.__('Select Member Type').'---','options' => \Cake\Core\Configure::read('Member.type'),'placeholder' => __('Membership Type')]) ?>
                        </section>
                    </div>

                    <div class="row">
                        <section class="col col-md-6">
                            <span><?= __('Note') ?></span>
                            <?= $this->Form->input('com_note_vie', ['required' => false,'placeholder' => __('Note')]) ?>
                        </section>
                        <section class="col col-md-6">
                            <span><?= __('Country') ?></span>
                            <?= $this->Form->input('com_country', ['required' => false,'options' => \Cake\Core\Configure::read('Member.country'),'empty' => '---'.__('Select Country').'---','placeholder' => __('Country')]) ?>
                        </section>
                    </div>

                    <div class="row">
                        <section class="col col-md-6">
                            <span><?= __('Company Type') ?></span>
                            <?= $this->Form->input('type_company_id', ['options' => $company_type,'empty'=>'---'.__('Select Company Type').'---','required' => false,'placeholder' => __('Company Type')]) ?>
                        </section>
                        <section class="col col-md-6">
                            <span><?= __('Language') ?></span>
                            <?= $this->Form->input('com_lang_chosen', ['style' => 'height: 80px','multiple' => true,'required' => false,'options' => \Cake\Core\Configure::read('Member.language'),'empty' => '---'.__('Select Language').'---','placeholder' => __('Country')]) ?>
                        </section>
                    </div>

                    <div class="row member_add">
                        <section class="    col col-md-6">
                            <span><?= __('Cooperation') ?></span>
                            <?php if($member->errors() && $member->errors('business')):?>
                                <div class="note note-error"><?= $member->errors('business')['_empty'] ?></div>
                            <?php endif; ?>
                            <?= $this->Form->select('business',$businesses,['multiple'=>'checkbox','placeholder' => __('Cooperation')]) ?>
                        </section>
                        <section class="col col-md-6">
                            <span><?= __('Needs') ?></span>
                            <?php if($member->errors() && $member->errors('want_to_get')):?>
                                <div class="note note-error"><?= $member->errors('want_to_get')['_empty'] ?></div>
                            <?php endif; ?>
                            <?= $this->Form->select('want_to_get',$needs, ['multiple'=>'checkbox','placeholder' => __('Needs')]) ?>
                        </section>
                    </div>

                    <section>
                        <span><?= __('Inquiry') ?></span>
                        <?= $this->Form->input('com_inquiry_vie', ['required' => false,'type'=>'textarea','placeholder' => __('Inquiry')]) ?>
                    </section>

                    <section>
                        <span><?= __('Business') ?></span>
                        <?= $this->Form->input('com_business_vie', ['required' => false,'class' => 'hw-mce-advance','placeholder' => __('Business')]) ?>
                    </section>

                    </fieldset>
                    <fieldset id="com_eng" class="tab-pane ">
                        <div class="row">
                            <section class="col col-md-6">
                                <span><?= __('Company Trading Name') ?></span>
                                <?= $this->Form->input('com_trading_name_eng', ['required' => false,'placeholder' => __('Company Trading Name')]) ?>
                            </section>
                            <section class="col col-md-6">
                                <span><?= __('Company Short Name')?></span>
                                <?= $this->Form->input('com_short_name_eng', ['required' => false,'placeholder' => __('Company Short Name')]) ?>
                            </section>
                        </div>
                        <div class="row">
                            <section class="col col-md-6">
                                <span><?= __('Department') ?></span>
                                <?= $this->Form->input('com_pic_department_eng', ['required' => false,'placeholder' => __('Department')]) ?>
                            </section>

                            <section class="col col-md-6">
                                <span><?= __('Note') ?></span>
                                <?= $this->Form->input('com_note_eng', ['required' => false,'placeholder' => __('Note')]) ?>
                            </section>
                        </div>

                        <div class="row">
                            <section class="col col-md-6">
                                <span><?= __('Address')?></span>
                                <?= $this->Form->input('address_eng', ['required' => false,'placeholder' => __('Address')]) ?>
                            </section>
                            <section class="col col-md-6">
                                <span><?= __('Company Name')?></span>
                                <?= $this->Form->input('com_name_eng', ['required' => false,'placeholder' => __('Company Name')]) ?>
                            </section>
                        </div>
                        <div class="row">
                            <section class="col col-md-6">
                                <span><?= __('Manager') ?></span>
                                <?= $this->Form->input('manager_eng', ['required' => false,'placeholder' => __('Manager')]) ?>
                            </section>

                        </div>
                        <section>
                            <span><?= __('Inquiry') ?></span>
                            <?= $this->Form->input('com_inquiry_eng', ['required' => false,'type'=>'textarea','placeholder' => __('Inquiry')]) ?>
                        </section>
                        <section>
                            <span><?= __('Business') ?></span>
                            <?= $this->Form->input('com_business_eng', ['required' => false,'class' => 'hw-mce-advance','placeholder' => __('Business')]) ?>
                        </section>
                    </fieldset>
                    <fieldset id="com_jpn" class="tab-pane ">
                        <div class="row">
                            <section class="col col-md-6">
                                <span><?= __('Company Trading Name') ?></span>
                                <?= $this->Form->input('com_trading_name_jpn', ['required' => false,'placeholder' => __('Company Trading Name')]) ?>
                            </section>
                            <section class="col col-md-6">
                                <span><?= __('Company Short Name') ?></span>
                                <?= $this->Form->input('com_short_name_jpn', ['required' => false,'placeholder' => __('Company Short Name')]) ?>
                            </section>
                        </div>
                        <div class="row">
                            <section class="col col-md-6">
                                <span><?= __('Department') ?></span>
                                <?= $this->Form->input('com_pic_department_jpn', ['required' => false,'placeholder' => __('Department')]) ?>
                            </section>

                            <section class="col col-md-6">
                                <span><?= __('Note') ?></span>
                                <?= $this->Form->input('com_note_jpn', ['required' => false,'placeholder' => __('Note')]) ?>
                            </section>
                        </div>
                        <div class="row">
                            <section class="col col-md-6">
                                <span><?= __('Address') ?></span>
                                <?= $this->Form->input('address_jpn', ['required' => false,'placeholder' => __('Address')]) ?>
                            </section>
                            <section class="col col-md-6">
                                <span><?= __('Company Name') ?></span>
                                <?= $this->Form->input('com_name_jpn', ['required' => false,'placeholder' => __('Company Name')]) ?>
                            </section>
                        </div>
                        <div class="row">
                            <section class="col col-md-6">
                                <span><?= __('Manager') ?></span>
                                <?= $this->Form->input('manager_jpn', ['required' => false,'placeholder' => __('Manager')]) ?>
                            </section>

                        </div>
                        <section>
                            <span><?= __('Inquiry') ?></span>
                            <?= $this->Form->input('com_inquiry_jpn', ['required' => false,'type'=>'textarea','placeholder' => __('Inquiry')]) ?>
                        </section>
                        <section>
                            <span><?= __('Business') ?></span>
                            <?= $this->Form->input('com_business_jpn', ['required' => false,'class' => 'hw-mce-advance','placeholder' => __('Business')]) ?>
                        </section>
                    </fieldset>
                    </div>
                    <p align="center">
                        <input type="hidden" value="0" name="com_send_email"><input value="1" type="checkbox" name="com_send_email" id="com_sendemail"> <?= __('Gửi email thông báo đã duyệt thông tin thành viên')?>
                    </p>
                    <footer>
                        <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
                        <?= $this->Html->link(__('Cancel'), ['action' => 'index'], ['class' => 'btn btn-default']) ?>
                    </footer>
                    <?= $this->Form->end() ?>

                </div>
                <!-- end widget content -->

            </div>
            <!-- end widget div -->

        </div>
        <!-- end widget -->
    </article>
</div>
