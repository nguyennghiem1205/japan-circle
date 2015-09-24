<?php $this->Html->addCrumb(__('Productions'));?>
<div class="row">
    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
        <h1 class="page-title txt-color-blueDark">
            <i class="fa fa-cog fa-fw "></i>
            <?= __('Productions');?>
            <span>&gt;
                <?= $this->Html->link(__('List of Production'), ['action' => 'index'])?>
            </span>
        </h1>
    </div>
</div>

<div class="productions row">
    <article class="col-sm-12 col-md-12 col-lg-12 sortable-grid ui-sortable">

        <!-- Widget ID (each widget will need unique ID)-->
        <div class="jarviswidget jarviswidget-sortable jarviswidget-color-darken" id="wid-id-4" data-widget-editbutton="false" data-widget-custombutton="false" role="widget" style="">

            <header role="heading">
                <span class="widget-icon">
                    <i class="fa fa-edit"></i>
                </span>
                <h2><?= __('Edit Production') ?></h2>
            </header>

            <!-- widget div-->
            <div role="content">
                <!-- widget content -->
                <div class="widget-body no-padding">
                    <?= $this->Form->create($production, ['id' => 'smart-form-register', 'class' => 'smart-form', 'type' =>'file']) ?>
                    <header><?= __('Edit Production') ?></header>
                    <fieldset>
                        <div class="row">
                            <section class="col col-md-6">
                                <span><?= __('Company Name') ?></span> <br>
                                <?= $company ?>
                            </section>
                            <section class="col col-md-6">
                                <span><?= __('Industry') ?></span> <span class="required">(*)</span>
                                <?= $this->Form->input('industry_code', ['options' => $industries,'empty' => '---'.__('Select Industry').'---','placeholder' => __('industry_code')]) ?>
                            </section>

                        </div>
                        <div class="row">
                            <section class="col col-md-6">
                                <span><?= __('Production Name') ?></span> <span class="required">(*)</span>
                                <?= $this->Form->input('name', ['placeholder' => __('name')]) ?>
                            </section>
                            <section class="col col-md-6">
                                <span><?= __('Production Code') ?></span>
                                <?= $this->Form->input('code', ['placeholder' => __('code')]) ?>
                            </section>
                        </div>

                        <div class="row">
                            <section class="col col-md-6">
                                <span><?= __('Short Description') ?></span> <span class="required">(*)</span>
                                <?= $this->Form->input('short_description', ['type' => 'textarea','placeholder' => __('short_description')]) ?>
                            </section>
                            <section class="col col-md-6">
                                <span><?= __('Price') ?></span>
                                <?= $this->Form->input('price', ['placeholder' => __('price')]) ?>
                            </section>
                        </div>

                        <div class="row">
                            <section class="col col-md-6">
                                <span><?= __('Unit') ?></span>
                                <?= $this->Form->input('unit', ['placeholder' => __('unit')]) ?>
                            </section>
                            <section class="col col-md-6">
                                <span><?= __('Image') ?></span>
                                <?= $this->Form->input('image', ['type' =>'file','placeholder' => __('image')]) ?>
                            </section>
                        </div>

                        <div class="row">
                            <section class="col col-md-6">
                                <span><?= __('Status') ?></span>
                                <?= $this->Form->input('status', ['options' => \Cake\Core\Configure::read('Production.status'),'empty' => '---'.__('Select Status').'---','placeholder' => __('status')]) ?>
                            </section>
                        </div>
                        <section>
                            <span><?= __('Description') ?></span>
                            <?= $this->Form->input('description', ['class' =>'hw-mce-advance','type' => 'textarea','placeholder' => __('description')]) ?>
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
