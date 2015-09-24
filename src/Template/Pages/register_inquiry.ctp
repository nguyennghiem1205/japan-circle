<section class="slice bg-3 animate-hover-slide">
    <div class="w-section">
        <div class="container">
            <div class="row">
                <?= $this->element('frontend/sidebar') ?>
                <!-- Begin Container cennter -->
                <div class="col-md-6">
                <div class="row">
                <div class="col-md-12">
                <h3 class="section-title"><?= __('THÔNG TIN HỢP TÁC')?></h3>


                <p><?= __('Để có thể hỗ trợ tốt nhất quý doanh nghiệp trong việc tìm kiếm đối tác Nhật cũng như phản hồi các thông tin liên quan đến Inquiry một cách nhanh nhất, Qúy Doanh nghiệp vui lòng cung cấp cho Japan Circle những thông tin như dưới đây.')?></p>

                <p><?= __('(Nếu quý công ty đã là thành viên của Japan Circle, vui lòng')?> <a href="<?= $this->Url->build(['controller' => 'pages', 'action' => 'memberLogin'])?>"><?= __('đăng nhập')?></a> <?= __('để việc đăng kí thông tin diễn ra nhanh hơn)')?> </p>

                <i><?= __('Thông tin với')?> <span class="required">*</span> <?= __('là thông tin bắt buộc')?></i>
                <?= $this->Form->create($registerInquiry)?>

                <div class="alert alert-danger" id="inquiry-form_es_" style="display:none">
                    <ul><li>dummy</li></ul></div>    <fieldset>
                <div class="row">
                    <div class="col-md-12">
                        <h4><?= $inquiry['title_'.$fieldLanguage]?></h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group"> <label for="InquiryContact_com_name" class="required"><?= __('Tên công ty')?> <span class="required">*</span></label>
                            <?= $this->Form->input('company',['class' => 'form-control'])?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="InquiryContact_com_address" class="required"><?= __('Địa chỉ')?> <span class="required">*</span></label>
                            <?= $this->Form->input('address',['class' => 'form-control'])?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group"> <label for="InquiryContact_city_id" class="required"><?= __('Thành phố') ?> <span class="required">*</span></label>
                            <?= $this->Form->input('city_code', ['required' => false,'data-url' => '/members/getListPrefecture','data-child'=>'ajax-prefecture','class' => 'form-control select-parent','empty' => '---'.__('Select City').'---','options' => $list_cities,'placeholder' => __('City')]) ?>

                             </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group"> <label for="InquiryContact_district_id"><?= __('Quận') ?></label>
                            <?= $this->Form->input('prefecture_code', ['required' => false,'required' => false,'empty' => '---'.__('Select District').'---','type' => 'select','class' => 'form-control ajax-prefecture','placeholder' => __('District')]) ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group"> <label for="InquiryContact_com_phone"><?= __('Điện thoại') ?></label>
                            <?= $this->Form->input('phone',['required' => false, 'class' => 'form-control']) ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group"> <label for="InquiryContact_com_fax"><?= __('Fax') ?></label>
                            <?= $this->Form->input('fax',['required' => false, 'class' => 'form-control']) ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group"> <label for="InquiryContact_com_email"><?= __('Email') ?></label>
                            <?= $this->Form->input('email', ['required' => false, 'class' => 'form-control']) ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group"> <label for="InquiryContact_com_website"><?= __('Website') ?></label>
                            <?= $this->Form->input('site_url',['required' => false, 'class' => 'form-control']) ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group"> <label for="InquiryContact_com_capital"><?= __('Vốn điều lệ') ?></label>
                            <?= $this->Form->input('capital',['required' => false, 'class' => 'form-control','placeholder' => __('VD: 1000.000.000')]) ?>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group"> <label for="InquiryContact_com_established"><?= __('Năm thành lập') ?></label>
                            <?= $this->Form->input('com_established', ['required' => false,'type' => 'text','class' => 'hw-date form-control',]) ?>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group"> <label for="InquiryContact_com_employee"><?= __('Số lượng nhân viên') ?></label>
                            <?= $this->Form->input('com_staff', ['required' => false,'class' => 'form-control','placeholder' => 'VD: 50']) ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group"> <label for="InquiryContact_industry_id" class="required"><?= __('Ngành') ?> <span class="required">*</span></label>
                            <?= $this->Form->input('industry_code',['required' => false,'class' => 'form-control', 'empty' => '---'.__('Select Industry').'---','options' => $industries]) ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group"> <label for="InquiryContact_com_biz_summary"><?= __('Mô tà ngành kinh doanh') ?></label>
                            <?= $this->Form->input('com_inquiry',['class' => 'form-control hw-mce-advance','required' => false]) ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group"> <label for="InquiryContact_com_pic_name" class="required"><?= __('Người liên hệ') ?> <span class="required">*</span></label>
                            <?= $this->Form->input('contact_person',['class' => 'form-control']) ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group"> <label for="InquiryContact_com_pic_phone" class="required"><?= __('Điện thoại') ?> <span class="required">*</span></label>
                            <?= $this->Form->input('contact_phone',['class' => 'form-control']) ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group"> <label for="InquiryContact_title_id" class="required"><?= __('Chức danh') ?> <span class="required">*</span></label>
                            <?= $this->Form->input('division_code', ['required' => false,'options' => $divisions,'empty' => '---'.__('Select Division').'---','required' => false,'class' =>'form-control']) ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group"> <label for="InquiryContact_com_pic_dept"><?= __('Phòng ban') ?></label>
                            <?= $this->Form->input('com_department',['required' => false,'class' => 'form-control']) ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group"> <label for="InquiryContact_need_info"><?= __('Yêu cầu thông tin') ?></label>
                            <?= $this->Form->input('need_info',['class' => 'form-control', 'type' => 'textarea']) ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="text-center"> <button class="btn btn-lg btn-danger" type="submit"><?= __('Đăng ký') ?></button></div>
                </div>
                </fieldset>
                <?= $this->Form->end()?>

                </div>
                </div>

                </div>
                <!-- End Container cennter -->
                <div class="col-md-3">
                    <?= $this->element('frontend/box-member') ?>
                    <?= $this->element('frontend/sidebar-right') ?>

                </div>
            </div>
        </div>
    </div>
</section>
