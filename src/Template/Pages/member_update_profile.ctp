<?php
if($member->errors()){
    if(!is_array($member->com_lang_chosen)) {
        $member->com_lang_chosen = explode(',',$member->com_lang_chosen);
    }
}
?>

<?php
$memInfo = $this->request->session()->read('memberInfo');
$mem = $this->request->session()->read('Member');
$memDetail = $this->request->session()->read('memberDetail');
$rate = 40;
$lang = count(explode(',',$mem['com_lang_chosen']));
if($mem['image_product_1'] || $mem['image_product_2'] || $mem['image_product_3'] || $mem['image_product_4'] || $mem['image_product_5']) {
    $rate = 60;
    if($lang == 2) {
        $rate = 80;
    } elseif($lang > 2) {
        $rate = 100;
    }
}
?>
<div class="pg-opt pin">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2><?= __('Thông tin thành viên')?></h2>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb">
                    <li><a href="<?=$this->Url->build('/')?>"><?= __('Trang chủ')?></a></li>
                    <li class="active"><?= __('Đăng ký thành viên')?></li>
                </ol>
            </div>
        </div>
    </div>
</div>

<section class="slice bg-3">

<div class="w-section inverse shop">
<div class="container">
<div class="row">
<div class="col-md-9">

<div class="w-section inverse">
<div class="w-section inverse">
<div class="row">
    <div class="col-md-6"><h3><?= __('Bạn đã hoàn thành {0}% thông tin',$rate) ?></h3>
        <div class="rate-parent">
            <div class="rate-child" style="width: <?= $rate?>%">
            </div>
        </div>

    </div>
</div>
<div class="row"></div>
<div class="w-box sign-in-wr bg-5">

<div class="form-header">
    <h2><?= __('Thông tin doanh nghiệp')?></h2>
</div>
<div class="form-body">
<?= $this->Form->create($member, ['id' => 'Companies-form','class'=>'form-light padding-15', 'type' => 'file'])?>

<?= $this->Flash->render()?>
<div class="alert alert-danger" id="Companies-form_es_" style="display:none">
    <ul><li>dummy</li></ul>
</div>
<div class="row">
<div class="col-md-6">
    <div class="form-group">
        <label><?= __('Tên doanh nghiệp')?> <span class="must" >*</span></label>
        <?= $this->Form->input('company', ['label'=>false,'class'=>'form-control']) ?>
        <div class="errorMessage" id="Companies_com_name_vi_em_" style="display:none">
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <label><?= __('Tên giao dịch')?></label>
        <?= $this->Form->input('com_trading_name_'.$fieldLanguage, ['label'=>false,'class'=>'form-control']) ?>
        <div class="errorMessage" id="Companies_com_trading_name_em_" style="display:none">

        </div>
    </div>
</div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label><?= __('Tên viết tắt')?></label>
            <?= $this->Form->input('com_short_name_'.$fieldLanguage, ['label'=>false,'class'=>'form-control']) ?>
            <div class="errorMessage" id="Companies_com_short_name_em_" style="display:none">
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label><?= __('Ngành nghề')?> <span class="must" >*</span></label>
            <?= $this->Form->input('industry_code', ['label'=>false,'empty' => '---'.__('Select industries').'---','options' => $industries,'class'=>'form-control']) ?>
            <div class="errorMessage" id="Companies_industry_id_em_" style="display:none">

            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="firstName"><?= __('Loại hình doanh nghiệp')?> </label>
            <?= $this->Form->input('type_business_id', ['label'=>false,'empty' => '---'.__('Select Type Business').'---','options' => $type_business,'id'=>'Companies_com_cat_industry','class'=>'form-control']) ?>
            <span class="error">
            <div class="errorMessage" id="Companies_com_cat_industry_em_" style="display:none"></div>
        </span>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="firstName"><?= __('Doanh nghiệp')?> </label>
            <?= $this->Form->input('com_country', ['class'=>'form-control','label'=>false,'required' => false,'options' => \Cake\Core\Configure::read('Member.country'),'empty' => '---'.__('Select Country').'---']) ?>
            <span class="error"><div class="errorMessage" id="Companies_com_country_em_" style="display:none"></div></span> </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="pass"><?= __('Địa chỉ')?> <span class="color-red">*</span></label>
            <?= $this->Form->input('address_'.$fieldLanguage, ['class'=>'form-control','label'=>false,'required' => false]) ?>
            <span class="error"> <div class="errorMessage" id="Companies_com_address_vi_em_" style="display:none"></div></span> </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="pass"><?= __('Thành phố')?> <span class="color-red">*</span></label>
            <?= $this->Form->input('city_code', ['label'=>false,'class'=>'form-control select-parent','data-value'=> $member->prefecture_code,'data-url' => '/members/getListPrefecture','data-child'=>'ajax-prefecture','empty' => '---'.__('Select City').'---','options' => $list_cities]) ?>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="pass"><?= __('Quận')?> </label>
            <?= $this->Form->input('prefecture_code', ['label'=>false,'required' => false,'empty' => '---'.__('Select District').'---','type' => 'select','class' => 'ajax-prefecture form-control']) ?>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-3">
        <div class="form-group">
            <label for="pass"><?= __('Phone')?> <span class="color-red">*</span></label>
            <?= $this->Form->input('tel', ['label'=>false,'class'=>'form-control','required' => false]) ?>
            <span class="error"> <div class="errorMessage" id="Companies_com_phone_em_" style="display:none"></div>
        </span>
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-group">
            <label for="pass2"><?= __('Fax')?></label>
            <?= $this->Form->input('fax', ['label'=>false,'class'=>'form-control']) ?>
            <span class="error"> <div class="errorMessage" id="Companies_com_fax_em_" style="display:none"></div></span> </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="pass2"><?= __('Website')?></label>
            <?= $this->Form->input('site_url', ['label'=>false,'class'=>'form-control','required' => false]) ?>
            <span class="error"> <div class="errorMessage" id="Companies_com_website_em_" style="display:none"></div></span> </div>
    </div>

    <div class="col-md-3">
        <div class="form-group">
            <label for="pass2"><?= __('Số nhân viên')?></label>
            <?= $this->Form->input('com_staff', ['label'=>false,'class'=>'form-control']) ?>
            <span class="error">
            <div class="errorMessage" id="Companies_com_employee_em_" style="display:none">

            </div>
        </span>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-3">
        <div class="form-group">
            <label for="pass2"><?= __('Ngày thành lập')?> </label>
            <?= $this->Form->input('com_established', ['type' => 'text','label'=>false,'class'=>'hw-date form-control']) ?>
            <span class="error"> <div class="errorMessage" id="Companies_com_established_em_" style="display:none"></div></span> </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="pass2"><?= __('Mã số thuê')?></label>
            <?= $this->Form->input('com_tax_code', ['label'=>false,'class'=>'form-control']) ?>
            <span class="error"> <div class="errorMessage" id="Companies_com_tax_code_em_" style="display:none"></div></span> </div>
    </div>

    <div class="col-md-3">
        <div class="form-group">
            <label for="pass2"><?= __('Vốn điều lệ')?> </label>
            <?= $this->Form->input('com_capital', ['label'=>false,'class'=>'form-control']) ?>
            <span class="error">
            <div class="errorMessage" id="Companies_com_capital_em_" style="display:none"></div>
        </span>
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-group">
            <label for="pass2"><?= __('Có thể giao tiếp')?> <span class="color-red">*</span></label>
            <?= $this->Form->input('com_lang_chosen',['value' => $member->com_lang_chosen,'options' => \Cake\Core\Configure::read('Member.language'),'type' => 'select','required' => false,'empty' => '---'.__('Select Language').'---','multiple' => true,'class' => 'form-control chosen-select']) ?>
            <span class="error">
            <div class="errorMessage" id="Companies_com_lang_em_" style="display:none"></div>
        </span>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-3">
        <div class="form-group">
            <div class="form-group">
                <label for="pass"><?= __('Người liên hệ')?> <span class="color-red">*</span></label>
                <?= $this->Form->input('first_name', ['required' => false,'class' => 'col col-md-3 form-control ','placeholder' => __('First Name')]) ?>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-group">
            <label for="pass"> <span class="color-red">&nbsp;</span></label>
            <?= $this->Form->input('last_name', ['required' => false,'class' => 'col col-md-3 form-control ','placeholder' => __('Last Name')]) ?>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="pass2"><?= __('Chức vụ')?> </label>
            <?= $this->Form->input('division', ['label'=>false,'class'=>'form-control','options' => $dividions,'empty' => '---'.__('Select Division').'---','required' => false]) ?>
            <span class="error"> <div class="errorMessage" id="Companies_com_pic_title_em_" style="display:none"></div></span> </div>
    </div>

    <div class="col-md-3">
        <div class="form-group">
            <label for="pass2"><?= __('Phòng ban (nếu có)')?></label>
            <?= $this->Form->input('com_pic_department_eng', ['label'=>false,'class'=>'form-control','required' => false]) ?>
            <span class="error"> <div class="errorMessage" id="Companies_com_pic_dept_em_" style="display:none"></div></span> </div>
    </div>
</div>



<div class="row">
    <div class="col-md-3">
        <div class="form-group">
            <label for="pass"><?= __('Contact Phone')?> <span class="must" >*</span></label>
            <?= $this->Form->input('mobile', ['label'=>false,'class'=>'form-control','required' => false]) ?>
            <span class="error">
            <div class="errorMessage" id="Companies_com_phone_2_em_" style="display:none"></div>
        </span>
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-group">
            <label for="pass"><?= __('Contact Email')?> <span class="must" >*</span></label>
            <?= $this->Form->input('contact_email', ['label'=>false,'class'=>'form-control','required' => false]) ?>
            <span class="error">
            <div class="errorMessage" id="Companies_com_phone_2_em_" style="display:none"></div>
        </span>
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-group">
            <label for="pass2"><?= __('Logo công ty')?></label>
            <?= $this->Form->input('image', ['style' =>'width: 270px','type' => 'file','required' => false,'class' => 'form-control']) ?>

            <div class="errorMessage" id="Companies_com_logo_file_em_" style="display:none"></div>
        <span class="error">
            <div class="errorMessage" id="Companies_com_logo_file_em_" style="display:none">

            </div>
        </span>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label><?= __('Nội dung kinh doanh')?></label>
            <?= $this->Form->input('com_business_'.$fieldLanguage, ['label'=>false,'class'=>'form-control','type'=>'textarea','required' => false]) ?>
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label><?= __('Nhu cầu hợp tác')?></label>
            <?= $this->Form->input('com_inquiry_'.$fieldLanguage, ['label'=>false,'class'=>'form-control','type'=>'textarea','required' => false]) ?>
            <div class="errorMessage" id="CompaniesText_com_inquiry_vi_em_" style="display:none"></div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <h3 class="section-title"><?= __('Image Product') ?></h3>
    </div>

</div>
<div class="row" style="padding-bottom: 15px">
    <div class="col-md-1"></div>
    <div class="col-md-2">
        <?= $this->Core->image('Members/'.$member->image_product_1,100,100)?>
    </div>
    <div class="col-md-2">
        <?= $this->Core->image('Members/'.$member->image_product_2,100,100)?>
    </div>
    <div class="col-md-2">
        <?= $this->Core->image('Members/'.$member->image_product_3,100,100)?>
    </div>
    <div class="col-md-2">
        <?= $this->Core->image('Members/'.$member->image_product_4,100,100)?>
    </div>
    <div class="col-md-2">
        <?= $this->Core->image('Members/'.$member->image_product_5,100,100)?>
    </div>
    <div class="col-md-1"></div>
</div>
<div class="row"></div>
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

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-5">
        <div class="form-group">
            <label for="pass"><?= __('Hình thức hợp tác Đơn vị mong muốn')?></label>
            <?= $this->Form->select('business',$businesses,['multiple'=>'checkbox']) ?>
        </div>
    </div>
    <div class="col-md-5">
        <div class="form-group">
            <label for="pass"><?php echo  __('Các dịch vụ hỗ trợ nào sau đây Đơn vị cần nhất:')?></label>
            <?= $this->Form->select('want_to_get',$needs, ['multiple'=>'checkbox']) ?>
        </div>
    </div>

</div>
<div class="row">
    <div class="col-md-12"> <button class="btn btn-three pull-right" type="submit"><?= __('Cập nhật')?></button> </div>
</div>
<?= $this->Form->end() ?>
</div>
<div class="form-footer">
    <p><?= __('Thông tin doanh nghiệp của quý khách được dịch sang tiếng Nhật và công bố trên webite http://japan-circle.com cho thị trường Nhật Bản. Mọi thay đổi sẽ được chúng tôi kiểm duyệt lại trước khi dịch sang tiếng Nhật và công bố.')?> </a></p>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-3">
    <?php
    echo $this->element('frontend/box-member');
    ?>
</div>
</div>
</div>
</div>
</section>