
<?php
    if($member->errors()){
        if($member->com_lang_chosen) {
            $member->com_lang_chosen = explode(',',$member->com_lang_chosen);
        }
    }
?>

<div class="pg-opt pin">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2><?= __('Đăng ký thành viên')?></h2>
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
            <?= $this->Form->create($member, ['type' =>'file']) ?>
            <?= $this->Flash->render()?>
            <div class="row">
                    <div class="col-md-12">
                        <div class="panel-group" id="accordionThree">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordionFour" href="#collapse3a"><?= __('BƯỚC 1 : THÔNG TIN THÀNH VIÊN ')?></a> </h4>
                                </div>
                                <div id="collapse3a" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h3 class="section-title"><?= __('Thông tin đăng nhập')?></h3>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group form-required">
                                                    <label for="pass2"><?= __('Email (tên truy cập) ')?><span class="color-red">*</span></label>
                                                    <?= $this->Form->input('email',['type' => 'text','class' => 'form-control input-required','required' => false]) ?>
                                                    <div class="errorMessage" style="display: none"><?= __('This field is required')?></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group form-required">
                                                    <label for="pass2"><?= __('Password ') ?> <span class="color-red">*</span></label>
                                                    <?= $this->Form->input('password',['required' => false,'class' => 'form-control input-required']) ?>
                                                    <div class="errorMessage" style="display: none"><?= __('This field is required')?></div>
                                                 </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h3 class="section-title"><?= __('Thông tin doanh nghiệp')?></h3>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group form-required">
                                                    <label for="firstName"><?= __('Company') ?> <span class="color-red">*</span></label>
                                                    <?= $this->Form->input('company',['required' => false,'class' => 'form-control input-required']) ?>
                                                    <div class="errorMessage" style="display: none"><?= __('This field is required')?></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group form-required">
                                                    <label for="lastName"><?= __('Industry') ?> <span class="color-red">*</span></label>
                                                    <?= $this->Form->input('industry_code',['required' => false,'class' => 'form-control input-required', 'empty' => '---'.__('Select Industry').'---','options' => $industries]) ?>
                                                    <div class="errorMessage" style="display: none"><?= __('This field is required')?></div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">


                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="firstName"><?= __('Type Business') ?> </label>
                                                    <?= $this->Form->input('type_business_id',['required' => false,'class' => 'form-control', 'empty' => '---'.__('Select Type Business').'---','options' => $type_business]) ?>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="pass2"><?= __('Logo') ?></label>
                                                    <?= $this->Form->input('image', ['type' => 'file','required' => false,'class' => 'form-control','placeholder' => __('Logo')]) ?>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group form-required">
                                                    <label for="firstName"><?= __('Language ') ?>  <span class="color-red">*</span></label>
                                                    <?= $this->Form->input('com_lang_chosen',['value' => $member->com_lang_chosen,'options' => \Cake\Core\Configure::read('Member.language'),'type' => 'select','required' => false,'data-placeholder' => '---'.__('Select Language').'---','multiple' => true,'class' => 'chosen-select form-control input-required']) ?>
                                                    <div class="errorMessage" style="display: none"><?= __('This field is required')?></div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="pass2"><?= __('Tax Code') ?></label>
                                                    <?= $this->Form->input('com_tax_code', ['required' => false,'class' => 'form-control']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group form-required">
                                                    <label for="firstName"><?= __('Country') ?> <span class="color-red">*</span></label>
                                                    <?= $this->Form->input('com_country',['required' => false,'class' =>'form-control input-required','empty' => '---'.__('Select Country').'---','options' => \Cake\Core\Configure::read('Member.country')]) ?>
                                                    <div class="errorMessage" style="display: none"><?= __('This field is required')?></div>
                                                </div>
                                            </div>


                                            <div class="col-md-3">
                                                <div class="form-group form-required">
                                                    <label for="pass"><?= __('City') ?> <span class="color-red">*</span></label>
                                                    <?= $this->Form->input('city_code', ['data-value'=> $member->prefecture_code,'required' => false,'data-url' => '/members/getListPrefecture','data-child'=>'ajax-prefecture','class' => 'form-control select-parent input-required','empty' => '---'.__('Select City').'---','options' => $list_cities,'placeholder' => __('City')]) ?>
                                                    <div class="errorMessage" style="display: none"><?= __('This field is required')?></div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="pass"><?= __('District') ?> </label>
                                                    <?= $this->Form->input('prefecture_code', ['required' => false,'required' => false,'empty' => '---'.__('Select District').'---','type' => 'select','class' => 'form-control ajax-prefecture','placeholder' => __('Prefecture')]) ?>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group form-required">
                                                    <label for="pass"><?= __('Adress') ?> <span class="color-red">*</span></label>
                                                    <?= $this->Form->input('address_vie',['required' => false,'class' => 'form-control input-required']) ?>
                                                    <div class="errorMessage" style="display: none"><?= __('This field is required')?></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group form-required">
                                                    <label for="pass"><?= __('Phone') ?> <span class="color-red">*</span></label>
                                                    <?= $this->Form->input('tel', ['required' => false,'class' => 'form-control input-required']) ?>
                                                    <div class="errorMessage" style="display: none"><?= __('This field is required')?></div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="pass2"><?= __('Fax') ?></label>
                                                    <?= $this->Form->input('fax', ['required' => false,'class' => 'form-control']) ?>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="pass2"><?= __('Website') ?></label>
                                                    <?= $this->Form->input('site_url', ['required' => false,'class' => 'form-control']) ?>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="pass"><?= __('Business') ?></label>
                                                    <?= $this->Form->input('com_business_vie',['required' => false,'class' => 'form-control','type' => 'textarea']) ?>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="row"> <a data-toggle="collapse" data-parent="#accordionThree" href="#collapse3b" class="col-md-2 col-md-offset-5 btn  btn-two btn-form-required"><?= __('Tiếp bước 2 >>> ')?></a> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordionFour" href="#collapse3b"><?= __('BƯỚC 2 : THÔNG TIN LIÊN HỆ')?></a> </h4>
                                </div>
                                <div id="collapse3b" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="row">

                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group form-required">
                                                    <label for="pass"><?= __('Contact person') ?> <span class="color-red">*</span></label>
                                                    <?= $this->Form->input('last_name', ['required' => false,'class' => 'col col-md-3 form-control input-required','placeholder' => __('Last Name')]) ?>
                                                    <div class="errorMessage" style="display: none"><?= __('This field is required')?></div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group form-required">
                                                    <label for="pass"> <span class="color-red">&nbsp;</span></label>
                                                    <?= $this->Form->input('first_name', ['required' => false,'class' => 'col col-md-3 form-control input-required','placeholder' => __('First Name')]) ?>
                                                    <div class="errorMessage" style="display: none"><?= __('This field is required')?></div>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group form-required">
                                                    <label for="pass"><?= __('Gender') ?> <span class="color-red">*</span></label>
                                                    <?= $this->Form->input('gender', ['empty' => '---'.__('Select Gender').'---','options' => Cake\Core\Configure::read('Member.gender'),'required' => false,'class' => 'form-control input-required']) ?>
                                                    <div class="errorMessage" style="display: none"><?= __('This field is required')?></div>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group form-required">
                                                    <label for="pass"><?= __('Contact Phone') ?> <span class="color-red">*</span></label>
                                                    <?= $this->Form->input('mobile', ['required' => false,'class' => 'form-control input-required']) ?>
                                                    <div class="errorMessage" style="display: none"><?= __('This field is required')?></div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group form-required">
                                                    <label for="pass2"><?= __('Email ') ?> <span class="color-red">*</span></label>
                                                    <?= $this->Form->input('contact_email', ['required' => false,'class' =>'form-control input-required']) ?>
                                                    <div class="errorMessage" style="display: none"><?= __('This field is required')?></div>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group form-required">
                                                    <label for="pass2"><?= __('Division') ?> <span class="color-red">*</span></label>
                                                    <?= $this->Form->input('division', ['required' => false,'options' => $divisions,'empty' => '---'.__('Select Division').'---','required' => false,'class' =>'form-control input-required']) ?>
                                                    <div class="errorMessage" style="display: none"><?= __('This field is required')?></div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="pass"><?= __('Department') ?></label>
                                                    <?= $this->Form->input('com_pic_department_vie', ['required' => false,'class' =>'form-control']) ?>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row"> <a data-toggle="collapse" data-parent="#accordionThree" href="#collapse4c" class="col-md-2 col-md-offset-5 btn btn-two btn-form-required"><?= __('Tiếp bước 3 >>> ')?></a> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordionFour" href="#collapse4c"><?= __('BƯỚC 3 : THÔNG TIN HỢP TÁC')?></a> </h4>
                                </div>
                                <div id="collapse4c" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-2"></div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label for="pass"><?= __('Cooperation') ?></label>
                                                    <?= $this->Form->select('business',$businesses,['required' => false,'multiple'=>'checkbox','placeholder' => __('Cooperation')]) ?>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label for="pass"><?= __('Need ') ?></label>
                                                    <?= $this->Form->select('want_to_get',$needs, ['required' => false,'multiple'=>'checkbox','placeholder' => __('Needs')]) ?>

                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <h3 class="section-title"><?= __('Inquiry  ') ?></h3>
                                                <div class="form-group">
                                                    <label for="pass"><?= __('Xin vui lòng điền thông tin nhu cầu hợp tác của quý công ty') ?></label>
                                                    <?= $this->Form->input('com_inquiry_vie', ['required' => false,'type'=>'textarea','class' => 'form-control']) ?>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <h3 class="section-title"><?= __('Image Product') ?></h3>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <?= __('製品の写真があればファイルをアップロードしてください')?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 ">
                                                <div class="form-group">
                                                    <?= $this->Form->input('image_product_1', ['type' => 'file','required' => false,'class' => 'form-control hw-file']) ?>
                                                </div>
                                            </div>

                                            <div class="col-md-4 ">
                                                <div class="form-group">
                                                    <?= $this->Form->input('image_product_2', ['type' => 'file','required' => false,'class' => 'form-control hw-file']) ?>
                                                </div>
                                            </div>

                                            <div class="col-md-4 image-3" style="display: none">
                                                <div class="form-group">
                                                    <?= $this->Form->input('image_product_3', ['type' => 'file','required' => false,'class' => 'form-control hw-file']) ?>
                                                </div>
                                            </div>
                                            <div class="col-md-4 image-4" style="display: none">
                                                <div class="form-group">
                                                    <?= $this->Form->input('image_product_4', ['type' => 'file','required' => false,'class' => 'form-control hw-file']) ?>
                                                </div>
                                            </div>

                                            <div class="col-md-4 image-5" style="display: none">
                                                <div class="form-group">
                                                    <?= $this->Form->input('image_product_5', ['type' => 'file','required' => false,'class' => 'form-control hw-file']) ?>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <a href="#" class="btn btn-small btn-success add-more">+ <?= __('Add More') ?></a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row"> <button class="col-md-4 col-md-offset-4 btn btn-two btn-lg" type="submit" style="margin-top: 20px;"><?= __('Hoàn tất đăng ký thành viên')?></button> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?= $this->Form->end()?>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="section-title"><?= __('Các tiện ích và dịch vụ')?></h3>
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-check">
                                <li ><i class="fa fa-check"></i><?= __('Cung cấp thông tin kinh tế, thương mại hàng tuần')?></li>
                                <li><i class="fa fa-check"></i><?= __('Cung cấp báo cáo hàng tháng')?></li>
                                <li><i class="fa fa-check"></i><?= __('Tư vấn kinh nghiệm giao thương với công ty Nhật (*)')?></li>
                                <li><i class="fa fa-check"></i><?= __('Tư vấn pháp luật, kinh doanh tại Nhật (*)')?></li>
                                <li><i class="fa fa-check"></i><?= __('Tư vấn đào tạo nhân lực (*)')?></li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-check">
                                <li><i class="fa fa-check"></i><?= __('Giới thiệu công ty Nhật trong các chuyến thị sát kinh doanh')?></li>
                                <li><i class="fa fa-check"></i><?= __('Thông tin về Hội thảo và Triển lãm tại Nhật Bản.')?></li>
                                <li><i class="fa fa-check"></i><?= __('Tiếp cận dữ liệu thành viên của Japan Circle.')?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
