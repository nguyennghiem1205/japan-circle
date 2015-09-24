<style>
    .error-message{
        color:red;
    }
</style>
<div class="pg-opt pin">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2><?= __('Liên hệ')?></h2>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb">
                    <li><a href="<?=$this->Url->build('/')?>"><?= __('Trang chủ') ?></a></li>
                    <li class="active"><?= __('Liên hệ') ?></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<section class="slice bg-3">
    <div class="w-section inverse">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                        <?=$thank?>
                    <h3 class="section-title"><?= __('Gửi thông tin liên hệ') ?></h3>
                    <div>
                        <?php if(isset($page['content'])) echo $page['content']?>
                    </div>
                    <?=$this->Form->create($contact,['id'=>'contact-form','url'=>['controller'=>'Pages','action'=>'contact']])?>
                        <div class="form-group">
                            <?= $this->Form->input('com_name', ['label'=>'','size'=>'50','id'=>'Contact_company','class'=>'form-control','maxlength'=>'250','required' => false,'placeholder' =>__('Tên công ty / Họ tên')]) ?>
                            <span class="error text-error"> </span>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?= $this->Form->input('email', ['label'=>'','size'=>'50','id'=>'Contact_email','class'=>'form-control','maxlength'=>'250','required' => false,'placeholder' =>__('Email Address ')]) ?>
                                    <span class="error"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?= $this->Form->input('phone', ['label'=>'','size'=>'50','id'=>'Contact_phone','class'=>'form-control','maxlength'=>'250','required' => false,'placeholder' =>__('Điện thoại ')]) ?>
                                    <span class="error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <?= $this->Form->input('title', ['label'=>'','size'=>'50','id'=>'Contact_title','class'=>'form-control','maxlength'=>'250','required' => false,'placeholder' =>__('Tiêu đề ')]) ?>
                        </div>
                        <div class="form-group">
                            <?= $this->Form->input('content', ['label'=>'','type'=>'textarea','id'=>'Contact_content','class'=>'form-control','required' => false,'placeholder' =>__('Viết nội dung liên hệ...')]) ?>
                        </div>
                        <button class="btn btn-two" type="submit"><?= __('Gửi đi')?></button>
                    <?=$this->Form->end()?>
                </div>
                <div class="col-md-5">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15677.573510016451!2d106.73007865880967!3d10.781153166788016!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f4950c084f9%3A0x2c0425ca4c027db6!2zMjkgVMO0biDEkOG7qWMgVGjhuq9uZywgQuG6v24gTmdow6ksIFF14bqtbiAx!5e0!3m2!1sen!2s!4v1392185000619" width="600" height="450" frameborder="0" style="border:0"></iframe>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="subsection">
                                <h3 class="section-title"><?= __('Thông tin liên hệ')?></h3>
                                <div class="contact-info">
                                    <p><strong><?= __('Tên công ty')?></strong> : <?= $settings['company_name_'.$fieldLanguage]?></p>
                                    <p><strong><?= __('Địa chỉ')?></strong> : <?= __('Tầng 6,VFC Tower, 29 Tôn Đức Thắng, Phường Bến Nghé, Quận 1, Tp. HCM')?></p>
                                    <p><strong><?= __('Email  ') ?></strong> :<?= $settings['email']?></p>
                                    <p><strong><?= __('Website') ?></strong> : <?= $settings['website']?></p>
                                    <p><strong><?= __('Điện thoại')?></strong> : <?= $settings['phone_number']?></p>
                                    <p><strong><?= __('FAX') ?></strong> : <?= $settings['fax']?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3 class="section-title"><?= __('Cộng đồng')?></h3>
                    <div class="social-media"> <a href="<?= $settings['facebook_link']?>"><i class="fa fa-facebook facebook"></i></a>  </div>
                </div>
            </div>
        </div>
    </div>
</section>