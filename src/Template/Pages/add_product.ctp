<section class="slice bg-3 animate-hover-slide">
    <div class="w-section">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="w-section inverse">
                        <div class="w-section inverse">
                            <div class="w-box sign-in-wr bg-5">
                                <div class="form-header">
                                    <h2><?= __('Add new product / service') ?></h2>
                                </div>
                                <div class="form-body">
                                    <?= $this->Form->create($production, ['type' => 'file', 'class' => 'form-light padding-15', 'id' => 'company-product-form']) ?>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label><?= __('Industries') ?> <span class="must">*</span></label>
                                                    <?= $this->Form->input('industry_code', ['required' => false, 'empty' => __('Select Industry'), 'options' => $industries, 'type' => 'select', 'class' => 'form-control'])?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label><?= __('Product code') ?></label>
                                                    <?= $this->Form->input('code', ['required' => false, 'class' => 'form-control']) ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label><?= __('Product name')?> <span class="must">*</span></label>
                                                    <?= $this->Form->input('name', ['required' => false, 'class' => 'form-control']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label><?= __('Sort description')?> <span class="must">*</span></label>
                                                    <?= $this->Form->input('short_description', ['required' => false, 'class' => 'form-control']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label><?= __('Product price') ?></label>
                                                    <?= $this->Form->input('price', ['class' => 'form-control']) ?>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label><?= __('Unit') ?></label>
                                                    <?= $this->Form->input('unit', ['class' => 'form-control']) ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label><?= __('Product image') ?></label>
                                                    <?= $this->Form->input('image', ['type' => 'file', 'class' => 'hw-file form-control']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label><?= __('Description') ?></label>
                                                    <?= $this->Form->input('description', ['class' => 'hw-mce-advance']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12"> <button class="btn btn-three pull-right" type="submit"><?= __('Submit info') ?></button> </div>
                                        </div>
                                    <?= $this->Form->end(); ?>
                                </div>
                                <div class="form-footer">
                                    <p><?= __('The info of the product / service will be approval by Admin') ?></p>
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