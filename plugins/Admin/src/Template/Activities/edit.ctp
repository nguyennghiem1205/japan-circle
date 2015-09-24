<?php $this->Html->addCrumb(__('Activities'));?>
<div class="row">
    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
        <h1 class="page-title txt-color-blueDark">
            <i class="fa fa-cog fa-fw "></i>
            <?= __('Activities');?>
            <span>&gt;
                <?= $this->Html->link(__('List of Activity'), ['action' => 'index'])?>
            </span>
        </h1>
    </div>
</div>

<div class="activities row">
    <article class="col-sm-12 col-md-12 col-lg-12 sortable-grid ui-sortable">

        <!-- Widget ID (each widget will need unique ID)-->
        <div class="jarviswidget jarviswidget-sortable jarviswidget-color-darken" id="wid-id-4" data-widget-editbutton="false" data-widget-custombutton="false" role="widget" style="">

            <header role="heading">
                <span class="widget-icon">
                    <i class="fa fa-edit"></i>
                </span>
                <h2><?= __('Edit Activity') ?></h2>
            </header>

            <!-- widget div-->
            <div role="content">
                <!-- widget content -->
                <div class="widget-body no-padding">
                    <?= $this->Form->create($activity, ['id' => 'smart-form-register', 'class' => 'smart-form', 'type' => 'file']) ?>
                    <header><?= __('Edit Activity') ?></header>
                    <fieldset>
                        <div class="row">
                            <section class="col col-md-6">
                                <span><?= __('Name').' (VIE)'?></span> <span class="required">(*)</span>
                                <?= $this->Form->input('name_vie', ['required' => false,'placeholder' => __('Name').' (VIE)']) ?>
                            </section>

                            <section class="col col-md-6">
                                <span><?= __('Name').' (ENG)'?></span> <span class="required">(*)</span>
                                <?= $this->Form->input('name_eng', ['required' => false,'placeholder' => __('Name').' (ENG)']) ?>
                            </section>
                        </div>

                        <div class="row">
                            <section class="col col-md-6">
                                <span><?= __('Name').' (JPN)'?></span> <span class="required">(*)</span>
                                <?= $this->Form->input('name_jpn', ['required' => false,'placeholder' => __('Name').' (JPN)']) ?>
                            </section>

                            <section class="col col-md-6">
                                <span><?= __('Image')?></span>
                                <?= $this->Form->input('image', ['required' => false,'placeholder' => __('image'),'type' => 'file']) ?>
                            </section>
                        </div>

                        <section>
                            <span><?= __('Content').' (VIE)'?></span> <span class="required">(*)</span>
                            <?= $this->Form->input('content_vie', ['required' => false,'class' => 'hw-mce-advance','placeholder' => __('Content').' (VIE)']) ?>
                        </section>

                        <section>
                            <span><?= __('Content').' (ENG)'?></span> <span class="required">(*)</span>
                            <?= $this->Form->input('content_eng', ['required' => false,'class' => 'hw-mce-advance','placeholder' => __('Content').' (ENG)']) ?>
                        </section>

                        <section>
                            <span><?= __('Content').' (JPN)'?></span> <span class="required">(*)</span>
                            <?= $this->Form->input('content_jpn', ['required' => false,'class' => 'hw-mce-advance','placeholder' => __('Content').' (JPN)']) ?>
                        </section>

                        <section>
                            <span><?= __('Description').' (VIE)'?></span>
                            <?= $this->Form->input('description_vie', ['type' => 'textarea','required' => false,'placeholder' => __('description')]) ?>
                        </section>

                        <section>
                            <span><?= __('Description').' (ENG)'?></span>
                            <?= $this->Form->input('description_eng', ['type' => 'textarea','required' => false,'placeholder' => __('description')]) ?>
                        </section>

                        <section>
                            <span><?= __('Description').' (JPN)'?></span>
                            <?= $this->Form->input('description_jpn', ['type' => 'textarea','required' => false,'placeholder' => __('description')]) ?>
                        </section>

                        <section>
                            <span><?= __('Short Description').' (VIE)'?></span>
                            <?= $this->Form->input('short_description_vie', ['type' => 'textarea','required' => false,'placeholder' => __('short description')]) ?>
                        </section>

                        <section>
                            <span><?= __('Short Description').' (ENG)'?></span>
                            <?= $this->Form->input('short_description_eng', ['type' => 'textarea','required' => false,'placeholder' => __('short description')]) ?>
                        </section>

                        <section>
                            <span><?= __('Short Description').' (JPN)'?></span>
                            <?= $this->Form->input('short_description_jpn', ['type' => 'textarea','required' => false,'placeholder' => __('short description')]) ?>
                        </section>

                        <div class="row">
                            <section class="col col-md-6">
                                <span><?= __('Activity Category')?></span> <span class="required">(*)</span>
                                <?= $this->Form->input('activity_category_id', ['required' => false,'empty' => '---'.__('Select Category').'---','placeholder' => __('category'), 'options' => $activityCategories]) ?>
                            </section>

                            <section class="col col-md-6">
                                <span><?= __('Total View')?></span>
                                <?= $this->Form->input('total_view', ['required' => false,'placeholder' => __('total view')]) ?>
                            </section>
                        </div>

                        <div class="row">

                        </div>
                        <section>
                            <span><?= __('New')?></span>
                            <?= $this->Form->checkbox('new', ['required' => false,'placeholder' => __('new')]) ?>
                        </section>

                        <section>
                            <span><?= __('Status')?></span>
                            <?= $this->Form->checkbox('status', ['required' => false,'required' => false,'placeholder' => __('status')]) ?>
                        </section>

                        <section>
                            <span><?= __('Sidebar Right')?></span>
                            <?= $this->Form->checkbox('sidebar_right', ['required' => false,'required' => false]) ?>
                        </section>

                        <section>
                            <span><?= __('Home page')?></span>
                            <?= $this->Form->checkbox('home_page', ['required' => false,'required' => false]) ?>
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
