<?php $this->Html->addCrumb(__('Banners'));?>
<div class="row">
    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
        <h1 class="page-title txt-color-blueDark">
            <i class="fa fa-cog fa-fw "></i>
            <?= __('Banners');?>
            <span>&gt;
                <?= $this->Html->link(__('List of Banner'), ['action' => 'index'])?>
            </span>
        </h1>
    </div>
</div>

<div class="banners row">
    <article class="col-sm-12 col-md-12 col-lg-12 sortable-grid ui-sortable">

        <!-- Widget ID (each widget will need unique ID)-->
        <div class="jarviswidget jarviswidget-sortable jarviswidget-color-darken" id="wid-id-4" data-widget-editbutton="false" data-widget-custombutton="false" role="widget" style="">

            <header role="heading">
                <span class="widget-icon">
                    <i class="fa fa-edit"></i>
                </span>
                <h2><?= __('Add Banner') ?></h2>
            </header>

            <!-- widget div-->
            <div role="content">
                <!-- widget content -->
                <div class="widget-body no-padding">
                    <?= $this->Form->create($banner, ['id' => 'smart-form-register', 'class' => 'smart-form', 'type' => 'file']) ?>
                    <header><?= __('Add Banner') ?></header>
                    <fieldset>
                        <span><?= __('Image')?></span> <span class="required">(*)</span>
                        <section>
                            <?= $this->Form->input('image', ['type' => 'file','required' => false,'placeholder' => __('image')]) ?>
                        </section>
                        <span><?= __('Url')?></span>
                        <section>
                            <?= $this->Form->input('url', ['required' => false,'placeholder' => __('url')]) ?>
                        </section>
                        <span><?= __('Text')?> (EN)</span>
                        <section>
                            <?= $this->Form->input('text_eng', ['required' => false,'placeholder' => __('text')]) ?>
                        </section>
                        <span><?= __('Text')?> (JP)</span>
                        <section>
                            <?= $this->Form->input('text_jpn', ['required' => false,'placeholder' => __('text')]) ?>
                        </section>
                        <span><?= __('Text')?> (VI)</span>
                        <section>
                            <?= $this->Form->input('text_vie', ['required' => false,'placeholder' => __('text')]) ?>
                        </section>
                        <span><?= __('Position')?></span> <span class="required">(*)</span>
                        <section>
                            <?= $this->Form->input('position', ['empty' => '---'.__('Select Position').'---','options' => \Cake\Core\Configure::read('Banner.position'),'type' => 'select','required' => false,'placeholder' => __('position')]) ?>
                        </section>
                        <span><?= __('Status')?></span>
                        <section>
                            <?= $this->Form->checkbox('status', ['required' => false,'placeholder' => __('status')]) ?>
                        </section>
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
