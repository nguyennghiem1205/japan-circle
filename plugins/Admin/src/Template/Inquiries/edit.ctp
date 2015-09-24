<?php $this->Html->addCrumb(__('Inquiries'));?>
<div class="row">
    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
        <h1 class="page-title txt-color-blueDark">
            <i class="fa fa-cog fa-fw "></i>
            <?= __('Inquiries');?>
            <span>&gt;
                <?= $this->Html->link(__('List of Inquiry'), ['action' => 'index'])?>
            </span>
        </h1>
    </div>
</div>

<div class="inquiries row">
    <article class="col-sm-12 col-md-12 col-lg-12 sortable-grid ui-sortable">

        <!-- Widget ID (each widget will need unique ID)-->
        <div class="jarviswidget jarviswidget-sortable jarviswidget-color-darken" id="wid-id-4" data-widget-editbutton="false" data-widget-custombutton="false" role="widget" style="">

            <header role="heading">
                <span class="widget-icon">
                    <i class="fa fa-edit"></i>
                </span>
                <h2><?= __('Edit Inquiry') ?></h2>
            </header>

            <!-- widget div-->
            <div role="content">
                <!-- widget content -->
                <div class="widget-body no-padding">
                    <?= $this->Form->create($inquiry, ['id' => 'smart-form-register', 'class' => 'smart-form', 'type' => 'file']) ?>
                    <header><?= __('Edit Inquiry') ?></header>
                    <fieldset>
                        <div class="row">
                            <section class="col col-md-6">
                                <span><?= __('Industry')?></span> <span class="required">(*)</span>
                                <?= $this->Form->input('industry_code', ['required' => false,'empty' => '---'.__('Select Industry').'---','options' => $industries,'placeholder' => __('Industry')]) ?>
                            </section>

                            <section class="col col-md-6">
                                <span><?= __('Title').' (VIE)'?></span> <span class="required">(*)</span>
                                <?= $this->Form->input('title_vie', ['required' => false,'placeholder' => __('Title').' (VIE)']) ?>
                            </section>
                        </div>

                        <div class="row">

                            <section class="col col-md-6">
                                <span><?= __('Title').' (ENG)'?></span> <span class="required">(*)</span>
                                <?= $this->Form->input('title_eng', ['required' => false,'placeholder' => __('Title').' (ENG)']) ?>
                            </section>

                            <section class="col col-md-6">
                                <span><?= __('Title').' (JPN)'?></span> <span class="required">(*)</span>
                                <?= $this->Form->input('title_jpn', ['required' => false,'placeholder' =>__('Title').' (JPN)']) ?>
                            </section>
                        </div>

                        <div class="row">

                            <section class="col col-md-6">
                                    <span><?= __('Type')?>
                                        <?= $this->Form->input('type', ['required' => false,'empty' => '---'.__('Select Type').'---','options' => \Cake\Core\Configure::read('Inquiry.type'),'placeholder' => __('type')]) ?>
                            </section>

                            <section class="col col-md-6">
                                <span><?= __('Image')?></span>
                                <?= $this->Form->input('image', ['required' => false,'type' => 'file','placeholder' => __('image')]) ?>
                            </section>
                        </div>

                        <div class="row">
                            <section class="col col-md-6">
                                <span><?= __('Date Start')?></span>
                                <?= $this->Form->input('date_start', ['required' => false,'type' => 'text','class' => 'hw-date','placeholder' => __('date_start')]) ?>
                            </section>

                            <section class="col col-md-6">
                                <span><?= __('Date End')?></span>
                                <?= $this->Form->input('date_end', ['required' => false,'type' => 'text','class' => 'hw-date','placeholder' => __('date_end')]) ?>
                            </section>
                        </div>
                        <span><?= __('Description').' (VIE)'?>
                            <section>
                                <?= $this->Form->input('description_vie', ['required' => false,'type' => 'textarea','placeholder' => __('Description').' (VIE)']) ?>
                            </section>
                        <span><?= __('Description').' (ENG)'?>
                            <section>
                                <?= $this->Form->input('description_eng', ['required' => false,'type' => 'textarea','placeholder' => __('Description').' (ENG)']) ?>
                            </section>
                        <span><?= __('Description').' (JPN)'?>
                            <section>
                                <?= $this->Form->input('description_jpn', ['required' => false,'type' => 'textarea','placeholder' => __('Description').' (JPN)']) ?>
                            </section>
                        <div class="row">
                            <section class="col col-md-6">
                                <span><?= __('Company')?>
                                    <?= $this->Form->input('company', ['required' => false,'placeholder' => __('Company')]) ?>
                            </section>

                            <section  class="col col-md-6">
                                <span><?= __('Total View')?>
                                    <?= $this->Form->input('total_view', ['required' => false,'placeholder' => __('Total View')]) ?>
                            </section>
                        </div>
                        <div class="row">

                            <section class="col col-md-6">
                                <span><?= __('Inquiry Meta DESC')?></span>
                                <?= $this->Form->input('inquiry_meta_desc', ['required' => false,'placeholder' => __('Inquiry Meta DESC')]) ?>
                            </section>

                            <section class="col col-md-6">
                                <span><?= __('Inquiry Meta Keyword')?></span>
                                <?= $this->Form->input('inquiry_meta_keyword', ['required' => false,'placeholder' => __('Inquiry Meta Keyword')]) ?>
                            </section>
                        </div>

                        <div class="row">
                            <section class="col col-md-6">
                                <span><?= __('Status inquiry')?></span>
                                <?= $this->Form->input('status', ['required' => false,'empty' => '---'.__('Select Status inquiries').'---','options' => \Cake\Core\Configure::read('Inquiry.status'),'placeholder' => __('status')]) ?>
                            </section>

                        </div>
                            <section>
                                <span><?= __('Home page admin')?></span>
                                <?= $this->Form->checkbox('home_page', ['required' => false,'required' => false]) ?>
                            </section>
                        <section>
                                <span><?= __('Content').' (VIE)'?>
                                    <?= $this->Form->input('content_vie', ['required' => false,'class' => 'hw-mce-advance','placeholder' => __('content_vie')]) ?>
                        </section>
                        <span><?= __('Content').' (ENG)'?>
                            <section>
                                <?= $this->Form->input('content_eng', ['required' => false,'class' => 'hw-mce-advance','placeholder' => __('content_eng')]) ?>
                            </section>
                        <span><?= __('Content').' (JPN)'?>
                            <section>
                                <?= $this->Form->input('content_jpn', ['required' => false,'class' => 'hw-mce-advance','placeholder' => __('content_jpn')]) ?>
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
