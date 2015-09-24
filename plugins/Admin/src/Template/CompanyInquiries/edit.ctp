<?php $this->Html->addCrumb(__('Company Inquiries'));?>
<div class="row">
    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
        <h1 class="page-title txt-color-blueDark">
            <i class="fa fa-cog fa-fw "></i>
            <?= __('Company Inquiries');?>
            <span>&gt;
                <?= $this->Html->link(__('List of Company Inquiry'), ['action' => 'index'])?>
            </span>
        </h1>
    </div>
</div>

<div class="companyInquiries row">
    <article class="col-sm-12 col-md-12 col-lg-12 sortable-grid ui-sortable">

        <!-- Widget ID (each widget will need unique ID)-->
        <div class="jarviswidget jarviswidget-sortable jarviswidget-color-darken" id="wid-id-4" data-widget-editbutton="false" data-widget-custombutton="false" role="widget" style="">

            <header role="heading">
                <span class="widget-icon">
                    <i class="fa fa-edit"></i>
                </span>
                <h2><?= __('Edit Company Inquiry') ?></h2>
            </header>

            <!-- widget div-->
            <div role="content">
                <!-- widget content -->
                <div class="widget-body no-padding">
                    <?= $this->Form->create($companyInquiry, ['id' => 'smart-form-register', 'class' => 'smart-form', 'type' => 'file']) ?>
                    <header><?= __('Edit Company Inquiry') ?></header>
                    <fieldset>
                        <section >
                            <span><?= __('Company') .': '?></span>
                            <?= $member['Member']['company'] ?>
                        </section>
                        <div class="row">
                            <section class="col col-md-6">
                                <span><?= __('Industry') ?></span>
                                <?= $this->Form->input('industry_code', ['empty'=>'---'.__('Select Industry').'---','options' => $industries,'placeholder' => __('industry_code')]) ?>
                            </section>
                            <section class="col col-md-6">
                                <span><?= __('Title') ?></span>
                                <?= $this->Form->input('title', ['placeholder' => __('title')]) ?>
                            </section>
                        </div>
                        <section>
                            <span><?= __('Descriptions') ?></span>
                            <?= $this->Form->input('description', ['type' => 'textarea','placeholder' => __('description')]) ?>
                        </section>
                        <section>
                            <span><?= __('Content') ?></span>
                            <?= $this->Form->input('content', ['class' => 'hw-mce-advance','placeholder' => __('content')]) ?>
                        </section>
                        <div class="row">
                            <section class="col col-md-6">
                                <span><?= __('Type') ?></span>
                                <?= $this->Form->input('type', ['empty' => '---'.__('Select Type').'---','options' => \Cake\Core\Configure::read('CompanyInquiry.type'),'placeholder' => __('type')]) ?>
                            </section>
                            <section class="col col-md-6">
                                <span><?= __('Image') ?></span>
                                <?= $this->Form->input('image', ['type' => 'file','placeholder' => __('image')]) ?>
                            </section>
                        </div>

                        <div class="row">
                            <section class="col col-md-6">
                                <span><?= __('Status') ?></span>
                                <?= $this->Form->input('status', ['empty' => '---'.__('Select Status').'---','options' => \Cake\Core\Configure::read('CompanyInquiry.status'),'placeholder' => __('status')]) ?>
                            </section>
                            <section class="col col-md-6">
                                <span><?= __('Order') ?></span>
                                <?= $this->Form->input('order', ['placeholder' => __('order')]) ?>
                            </section>
                        </div>


                        <section>
                        </section>
                        <section>
                        </section>
                    </fieldset>

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
