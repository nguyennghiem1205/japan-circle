<?php $this->Html->addCrumb(__('Supporters'));?>
<div class="row">
    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
        <h1 class="page-title txt-color-blueDark">
            <i class="fa fa-cog fa-fw "></i>
            <?= __('Supporters');?>
            <span>&gt;
                <?= $this->Html->link(__('List of Supporter'), ['action' => 'index'])?>
            </span>
        </h1>
    </div>
</div>

<div class="supporters row">
    <article class="col-sm-12 col-md-12 col-lg-12 sortable-grid ui-sortable">

        <!-- Widget ID (each widget will need unique ID)-->
        <div class="jarviswidget jarviswidget-sortable jarviswidget-color-darken" id="wid-id-4" data-widget-editbutton="false" data-widget-custombutton="false" role="widget" style="">

            <header role="heading">
                <span class="widget-icon">
                    <i class="fa fa-edit"></i>
                </span>
                <h2><?= __('Edit Supporter') ?></h2>
            </header>

            <!-- widget div-->
            <div role="content">
                <!-- widget content -->
                <div class="widget-body no-padding">
                    <?= $this->Form->create($supporter, ['id' => 'smart-form-register', 'class' => 'smart-form', 'type' => 'file']) ?>
                    <header><?= __('Edit Supporter') ?></header>
                    <fieldset>
                        <div class="row">
                            <section class="col col-md-6">
                                <span><?= __('First Name') ?></span> <span class="required">(*)</span>
                                <?= $this->Form->input('first_name', ['placeholder' => __('First Name')]) ?>
                            </section>
                            <section class="col col-md-6">
                                <span><?= __('Last Name') ?></span> <span class="required">(*)</span>
                                <?= $this->Form->input('last_name', ['placeholder' => __('Last Name')]) ?>
                            </section>
                        </div>

                        <div class="row">
                            <section class="col col-md-6">
                                <span><?= __('Date of birth') ?></span> <span class="required">(*)</span>
                                <?= $this->Form->input('birthdate',['type' => 'text','class' => 'hw-date-birth','required' => false]) ?>
                            </section>
                            <section class="col col-md-6">
                                <span><?= __('Identification No./Passport No.') ?></span> <span class="required">(*)</span>
                                <?= $this->Form->input('identity_card', ['placeholder' => __('identity_card')]) ?>
                            </section>
                        </div>

                        <div class="row">
                            <section class="col col-md-6">
                                <span><?= __('Email') ?></span> <span class="required">(*)</span>
                                <?= $this->Form->input('email', ['placeholder' => __('email')]) ?>
                            </section>
                            <section class="col col-md-6">
                                <span><?= __('Avatar') ?></span> <span class="required">(*)</span>
                                <?= $this->Form->input('image', ['type' => 'file']) ?>
                            </section>
                        </div>

                        <div class="row">
                            <section class="col col-md-6">
                                <span><?= __('Phone') ?></span> <span class="required">(*)</span>
                                <?= $this->Form->input('phone', ['placeholder' => __('Phone')]) ?>
                            </section>
                            <section class="col col-md-6">
                                <span><?= __('Category Support') ?></span> <span class="required">(*)</span>
                                <?= $this->Form->input('category_supporter_id', ['empty' => '---'.__('Select Category').'---', 'options' => $supporterCategories]) ?>
                                <section>
                        </div>
                        <div class="row">
                            <section class="col col-md-6">
                                <span><?= __('City') ?></span> <span class="required">(*)</span>
                                <?= $this->Form->input('city_code', ['value' => $valueCities,'required' => false,'multiple'=>true,'class' => 'chosen-select','data-placeholder' => '---'.__('Select City').'---','options' => $list_cities]) ?>
                                <section>
                        </div>

                        <div class="row">
                            <section class="col col-md-6">
                                <span><?= __('URL Facebook') ?></span> <span class="required">(*)</span>
                                <?= $this->Form->input('url_facebook', ['placeholder' => __('url_facebook')]) ?>
                            </section>
                            <section class="col col-md-6">
                                <span><?= __('Website/Blog') ?></span> <span class="required">(*)</span>
                                <?= $this->Form->input('site_url', ['placeholder' => __('site_url')]) ?>
                            </section>
                        </div>

                        <div class="row">
                            <section class="col col-md-6">
                                <span><?= __('Company Name') ?></span> <span class="required">(*)</span>
                                <?= $this->Form->input('company_name', ['placeholder' => __('Company Name')]) ?>
                            </section>
                            <section class="col col-md-6">
                                <span><?= __('Company Address') ?></span> <span class="required">(*)</span>
                                <?= $this->Form->input('company_address', ['placeholder' => __('Company Address')]) ?>
                            </section>
                        </div>

                        <div class="row">
                            <section class="col col-md-6">
                                <span><?= __('Company website') ?></span> <span class="required">(*)</span>

                                <?= $this->Form->input('company_site_url', ['placeholder' => __('Company website')]) ?>
                            </section>
                            <section class="col col-md-6">
                                <span><?= __('Industry') ?></span> <span class="required">(*)</span>
                                <?= $this->Form->input('industry_code',['empty' => '---'.__('Select industry').'---','options' => $industries,'type' => 'select','class' => 'form-control','required' => false]) ?>

                            </section>
                        </div>

                        <div class="row">
                            <section class="col col-md-6">
                                <span><?= __('Staff') ?></span> <span class="required">(*)</span>
                                <?= $this->Form->input('com_staff', ['placeholder' => __('Staff')]) ?>
                            </section>
                            <section class="col col-md-6">
                                <span><?= __('Language that you can communicate') ?></span> <span class="required">(*)</span>
                                <?= $this->Form->input('com_lang_chosen',['data-placeholder' => '---'.__('Select Language').'---','options' => \Cake\Core\Configure::read('Member.language'),'type' => 'select','required' => false,'multiple' => true,'class' => 'chosen-select form-control']) ?>
                            </section>
                        </div>

                        <div class="row">
                            <section class="col col-md-6">
                                <span><?= __('Please attach a record of experience that you have supported successfully in ASEAN network') ?></span> <span class="required">(*)</span>
                                <?= $this->Form->input('experience', ['placeholder' => __('Please attach a record of experience that you have supported successfully in ASEAN network')]) ?>
                            </section>
                            <section class="col col-md-6">
                                <span><?= __('attach file of experience that you have supported successfully in ASEAN network') ?></span>
                                <?= $this->Form->input('experience_file',['type' => 'file','class' => 'form-control','required' => false]) ?>
                            </section>
                        </div>

                        <div class="row">
                            <section class="col col-md-6">
                                <span><?= __('Other organizations/associations that you are member now') ?></span> <span class="required">(*)</span>
                                <?= $this->Form->input('member_organize', ['placeholder' => __('Other organizations/associations that you are member now')]) ?>
                            </section>
                            <section class="col col-md-6">
                                <span><?= __('Any information that you want to PR yourself as a supporter of Japan Circle') ?></span> <span class="required">(*)</span>
                                <?= $this->Form->input('support_info', ['placeholder' => __('Any information that you want to PR yourself as a supporter of Japan Circle')]) ?>
                            </section>
                        </div>

                    </fieldset>

                    <footer>
                        <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
                        <?= $this->Html->link('Cancel', ['action' => 'index'], ['class' => 'btn btn-default']) ?>
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
