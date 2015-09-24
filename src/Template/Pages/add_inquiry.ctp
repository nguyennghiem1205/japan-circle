<section class="slice bg-3 animate-hover-slide">
    <div class="w-section">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="w-section inverse">
                        <div class="w-section inverse">
                            <div class="w-box sign-in-wr bg-5">
                                <div class="form-header">
                                    <h2><?= __('Đăng sản phẩm / dịch vụ')?></h2>
                                </div>
                                <div class="form-body">

                                    <?= $this->Form->create($company_inquiries, ['type' => 'file', 'class' => 'form-light padding-15', 'id' => 'company-product-form']) ?>
                                        <div class="alert alert-danger" id="company-product-form_es_" style="display:none">
                                            <ul><li>dummy</li></ul></div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label><?= __('Industries') ?> <span class="must">*</span></label>
                                                    <?= $this->Form->input('industry_code', ['label' => false,'required' => false, 'empty' => '---'.__('Select Industry').'---', 'options' => $industries, 'type' => 'select', 'class' => 'form-control'])?>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label><?= __('Title') ?> <span class="must">*</span></label>
                                                    <?= $this->Form->input('title', ['label' => false,'required' => false, 'class' => 'form-control'])?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label><?= __('Short Description') ?> <span class="must">*</span></label>
                                                    <?= $this->Form->input('description', ['type' => 'textarea','label' => false,'required' => false, 'class' => 'form-control'])?>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                        <label><?= __('Type Inquiry') ?> <span class="must">*</span></label>
                                                    <?= $this->Form->input('type', ['empty' => '---'.__('Select Type Inquiry').'---','options' => \Cake\Core\Configure::read('CompanyInquiry.type'),'label' => false,'required' => false, 'class' => 'form-control'])?>
                                                 </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label><?= __('Image') ?></label>
                                                    <?= $this->Form->input('image', ['label' => false,'type' => 'file', 'class' => 'form-control']) ?>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label><?= __('Content') ?></label>
                                                    <?= $this->Form->input('content', ['label' => false,'class' => 'hw-mce-advance']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12"> <button class="btn btn-three pull-right" type="submit"><?= __('Đăng thông tin')?></button> </div>
                                        </div>
                                    <?= $this->Form->end()?>
                                </div>
                                <div class="form-footer">
                                    <p><?= __('Thông tin sản phẩm / dịch vụ của quý khách sẽ được chúng tôi kiểm duyệt trước khi công bô thông tin.')?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- End Container cennter -->
                <div class="col-md-3">
                    <?= $this->element('frontend/box-member') ?>
                </div>
            </div>
        </div>
    </div>
</section>