

<div class="pg-opt pin">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2><?= __('Supporter Register')?></h2>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb">
                    <li><a href="<?=$this->Url->build('/')?>"><?= __('Trang chủ')?></a></li>
                    <li class="active"><?= __('Liên hệ')?></li>
                </ol>
            </div>
        </div>
    </div>
</div>

<section class="slice bg-3">
<div class="w-section inverse">
<div class="container">
<?= $this->Form->create($supporter, ['type' =>'file']) ?>
<?= $this->Flash->render()?>
    <div class="row">
    <div class="col-md-12">
    <div class="panel-group" id="accordionThree">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title"> <a><?= __("SUPPORTER'S INFORMATION")?></a> </h4>
        </div>
        <div id="collapse3a" class="panel-collapse collapse in">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="pass2"><?= __('Last Name')?><span class="color-red">*</span></label>
                            <?= $this->Form->input('last_name',['type' => 'text','class' => 'form-control','required' => false]) ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="pass2"><?= __('First Name')?><span class="color-red">*</span></label>
                            <?= $this->Form->input('first_name',['type' => 'text','class' => 'form-control','required' => false]) ?>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="pass2"><?= __('Date of birth')?><span class="color-red">*</span></label>
                            <?= $this->Form->input('birthdate',['type' => 'text','class' => 'form-control hw-date-birth','required' => false]) ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="pass2"><?= __('Identification No./Passport No.')?><span class="color-red">*</span></label>
                            <?= $this->Form->input('identity_card',['type' => 'text','class' => 'form-control','required' => false]) ?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="pass2"><?= __('Email ')?><span class="color-red">*</span></label>
                            <?= $this->Form->input('email',['type' => 'text','class' => 'form-control','required' => false]) ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="pass2"><?= __('Phone')?><span class="color-red">*</span></label>
                            <?= $this->Form->input('phone',['type' => 'text','class' => 'form-control','required' => false]) ?>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div class="panel-heading">
            <h4 class="panel-title"> <a><?= __('GENERAL INFORMATION')?></a> </h4>
        </div>
        <div id="collapse3a" class="panel-collapse collapse in">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="pass2"><?= __('Please fill in cities that you can support')?><span class="color-red">*</span></label>
                            <?= $this->Form->input('city_code', ['required' => false,'multiple'=>true,'class' => 'chosen-select form-control','data-placeholder' => '---'.__('Select City').'---','options' => $list_cities]) ?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="pass2"><?= __('Category Support')?><span class="color-red">*</span></label>
                            <?= $this->Form->input('category_supporter_id',['empty' => '---'.__('Select Category').'---','options' => $supporterCategories,'class' => 'form-control','required' => false]) ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="pass2"><?= __('URL Facebook')?></label>
                            <?= $this->Form->input('url_facebook',['type' => 'text','class' => 'form-control','required' => false]) ?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="pass2"><?= __('Website/Blog')?></label>
                            <?= $this->Form->input('site_url',['type' => 'text','class' => 'form-control','required' => false]) ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="pass2"><?= __('Avatar')?><span class="color-red">*</span></label>
                            <?= $this->Form->input('image',['type' => 'file','class' => 'form-control','required' => false]) ?>
                        </div>
                    </div>

                </div>


            </div>
        </div>

        <div class="panel-heading">
            <h4 class="panel-title"> <a><?= __("COMPANY'S INFORMATION")?></a> </h4>
        </div>
        <div id="collapse3a" class="panel-collapse collapse in">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="pass2"><?= __('Company Name')?><span class="color-red">*</span></label>
                            <?= $this->Form->input('company_name',['type' => 'text','class' => 'form-control','required' => false]) ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="pass2"><?= __('Company Address')?><span class="color-red">*</span></label>
                            <?= $this->Form->input('company_address',['type' => 'text','class' => 'form-control','required' => false]) ?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="pass2"><?= __('Company website')?></label>
                            <?= $this->Form->input('company_site_url',['type' => 'text','class' => 'form-control','required' => false]) ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="pass2"><?= __('Industry')?><span class="color-red">*</span></label>
                            <?= $this->Form->input('industry_code',['empty' => '---'.__('Select industry').'---','options' => $industries,'type' => 'select','class' => 'form-control','required' => false]) ?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="pass2"><?= __('Staff')?><span class="color-red">*</span></label>
                            <?= $this->Form->input('com_staff',['type' => 'text','class' => 'form-control','required' => false]) ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="pass2"><?= __('Language that you can communicate')?><span class="color-red">*</span></label>
                            <?= $this->Form->input('com_lang_chosen',['options' => \Cake\Core\Configure::read('Member.language'),'type' => 'select','required' => false,'data-placeholder' => '---'.__('Select Language').'---','multiple' => true,'class' => 'chosen-select form-control']) ?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="pass2"><?= __('Other organizations/associations that you are member now')?><span class="color-red">*</span></label>
                            <?= $this->Form->input('member_organize',['type' => 'textarea','class' => 'form-control','required' => false]) ?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="pass2"><?= __('Please attach a record of experience that you have supported successfully in ASEAN network')?><span class="color-red">*</span></label>
                            <?= $this->Form->input('experience',['type' => 'textarea','class' => 'form-control','required' => false]) ?>
                        </div>

                        <div class="form-group">
                            <?= $this->Form->input('experience_file',['type' => 'file','class' => 'form-control','required' => false]) ?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="pass2"><?= __('Any information that you want to PR yourself as a supporter of Japan Circle')?></label>
                            <?= $this->Form->input('support_info',['type' => 'textarea','class' => 'form-control','required' => false]) ?>
                        </div>
                    </div>
                </div>
                <div class="row"> <button class="col-md-4 col-md-offset-4 btn btn-two btn-lg" type="submit" style="margin-top: 20px;"><?= __('Submit')?></button> </div>

            </div>
        </div>
    </div>

    </div>
    </div>

    </div>
<?= $this->Form->end()?>
</div>

</div>
</section>
